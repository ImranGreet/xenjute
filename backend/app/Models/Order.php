<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'customer_name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'payment_method',
        'total'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
