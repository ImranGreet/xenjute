<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = Cart::firstOrCreate(['session_id' => $request->session_id]);
        $item = CartItem::updateOrCreate(
            ['cart_id' => $cart->id, 'product_id' => $request->product_id],
            ['quantity' => $request->quantity, 'price' => $request->price]
        );
        return response()->json($cart->load('items.product'));
    }

    public function show($session)
    {
        $cart = Cart::where('session_id', $session)->with('items.product')->first();
        return response()->json($cart);
    }

    public function update(Request $request, CartItem $cart_item)
    {
        $cart_item->update(['quantity' => $request->quantity]);
        return response()->json($cart_item);
    }

    public function remove(CartItem $cart_item)
    {
        $cart_item->delete();
        return response()->json(['message' => 'Removed']);
    }
}
