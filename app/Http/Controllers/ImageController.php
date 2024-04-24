<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function uploadImageByProductId($request, $productId)
    {
        return [
            'request' => $request,
            'productId' => $productId,
        ];
    }
}
