<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = Order::create([
            'order_number' => 'JL-' . time(),
            'customer_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'country' => $request->country,
            'payment_method' => $request->payment_method,
            'total' => $request->total,
        ]);

        foreach ($request->items as $item) {
            $order->items()->create($item);
        }

        return response()->json(['message' => 'Order placed successfully', 'order' => $order]);
    }
}
