<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        try {

            $sort_type = 'asc';
            if ($request->has('sort')) {
                if (strpos($request->sort, "-") === 0) {
                    $sort_type = 'desc';
                }
            }
            $sort_title = ltrim($request->sort, '-');

            if ($request->has('filter_status')) {
                $orderFilterByStatus = Status::findOrFail($request->filter_status)
                    ->orders()->sortable([$sort_title => $sort_type])->paginate(4)->load(['status', 'user']);

                return [
                    "orders"  => $orderFilterByStatus,
                    "totals" => Status::findOrFail($request->filter_status)
                        ->orders()->paginate()
                ];
            }

            return [
                "orders"  => Order::sortable([$sort_title => $sort_type])->paginate(6)->load(['status', 'user']),
                "totals" => Order::paginate()
            ];
        } catch (\Exception $ex) {
            return $ex;
        }
    }


    public function edit(Request $request, $orderId)
    {
        try {
            $order = Order::findOrFail($orderId)
                ->load(['user', 'items', 'status']);

            return [
                'user' => $order->user,
                'items' => $order->items->load('product'),
                'status' => $order->status,
            ];
        } catch (\Exception $ex) {
            return $ex;
        }
    }


    public function store(Request $request)
    {
        try {

            if ($request->has('basketItems')) {

                $items = json_decode($request->basketItems);

                $newOrder =  Order::create([
                    'user_id' => $request->user()->id,
                    'address' => $request->user()->address,
                    'number_phone' => $request->user()->number_phone,
                ]);

                $newOrder->status()->attach(2);

                // create items and attach with new order 
                foreach ($items as $item) {
                    $newItem = Item::create([
                        'product_id' => (int)$item->id,
                        'quantity' => (int)$item->qnt
                    ]);

                    $newItem->order()->attach($newOrder->id);
                }
            }

            return response()->json([
                'status' => true,
                'message' => 'Create new Order Successfully',
                'data' => $newOrder
            ], 200);
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function getStatuses(Request $request)
    {
        return Status::all();
    }
    public function updateStatus(Request $request, $orderId)
    {
        $request->validate([
            'status_id' => 'required|exists:statuses,id',
        ]);

        $order = Order::findOrFail($orderId);
        $newStatusId = $request->input('status_id');

        // Get the current status
        $currentStatusId = $order->status_id;

        // If the order already has a status assigned
        if ($currentStatusId) {
            // Disassociate the order from its current status
            $order->status()->dissociate();
            $order->save();
        }

        // Associate the order with the new status
        $newStatus = Status::findOrFail($newStatusId);
        $order->status()->associate($newStatus);
        $order->save();

        return response()->json(['message' => 'Order status updated successfully']);
    }
}
