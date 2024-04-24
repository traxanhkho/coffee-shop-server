<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('filter_type'))
            return Type::findOrFail($request->filter_type)
                ->products()
                ->with('images')
                ->get();

        return [
            "products"  => Product::paginate(6)->load(['images', 'types']),
            "totals" => Product::paginate()
        ];
    }

    public function show(Request $request)
    {
        $product = Product::findOrFail(1);

        return $product->types;
    }

    public function edit(Request $request, $productId)
    {
        $product = Product::findOrFail($productId)->load(['types', 'images']);

        return $product;
    }

    public function type_attach(Request $request,  $productId)
    {
        try {
            $product = Product::findOrFail($productId);

            $product->types()->attach($request->type_id);

            return response()->json([
                'status' => true,
                'message' => 'Attach Types Successfully',
                'data' => $product->load(['types'])
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }
    public function type_detach(Request $request,  $productId)
    {
        try {

            $product = Product::findOrFail($productId);

            $product->types()->detach($request->type_id);

            return response()->json([
                'status' => true,
                'message' => 'Detach Types Successfully',
                'data' => $product->load(['types'])
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        // $image = $request->get('image');

        $types = json_decode($request->types);

        try {
            $newProduct = Product::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);

            foreach ($types as $type) {
                if (isset($type->isAttach)) {
                    if ($type->isAttach) {
                        $attachType = Type::findOrFail($type->id);
                        $newProduct->types()->attach($attachType);
                    }
                }
            }

            if ($request->hasFile('image')) {

                $path = $request->file('image')->store('public/images');
                $imageUrl = substr($path, strlen('public/'));

                Image::create(["path" => $imageUrl, 'imageable_id' => $newProduct->id, 'imageable_type' => Product::class]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Create Products Successfully',
                'data' => $newProduct
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $productId)
    {
        try {
            $productUpdate  = Product::findOrFail($productId);
            $productUpdate->name  = $request->name;
            $productUpdate->description  = $request->description;
            $productUpdate->price  = $request->price;

            if ($request->hasFile('image')) {

                //detach
                $productUpdate->deleteImageInStorage($productUpdate->images->first()->path);

                $detachImage = $productUpdate->images->first();

                $detachImage->deleteOrFail();

                // attach 

                $path = $request->file('image')->store('public/images');
                $imageUrl = substr($path, strlen('public/'));

                Image::create(["path" => $imageUrl, 'imageable_id' => $productUpdate->id, 'imageable_type' => Product::class]);
            }

            if ($productUpdate->isDirty(['name', 'description', 'price'])) {
                $productUpdate->save();
            }

            return response()->json([
                'status' => true,
                'message' => 'Update Products Successfully',
                'data' => $productUpdate
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }

    public function destroy(Product $product)
    {


        try {
            //detach

            // $product->deleteImageInStorage($product->images->first()->path);

            $detachImage = $product->images->first();

            $detachImage->deleteOrFail();

            $product->deleteOrFail();

            return response()->json([
                'status' => true,
                'message' => 'The product has been remove.',
                'data' => $product
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }
}
