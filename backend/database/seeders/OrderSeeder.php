<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::create([
            'order_number' => 'JL-' . rand(10000, 99999),
            'customer_name' => 'Imran Hossain',
            'email' => 'imran@example.com',
            'phone' => '+880123456789',
            'address' => 'Dhanmondi',
            'city' => 'Dhaka',
            'state' => 'Dhaka',
            'zip' => '1209',
            'country' => 'Bangladesh',
            'payment_method' => 'Cash on Delivery',
            'total' => 130,
        ]);

        $products = Product::take(2)->get();

        foreach ($products as $product) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }
    }
}
