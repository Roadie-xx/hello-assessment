<?php

namespace App\Models;

use App\Events\OrderChanged;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Order extends Model
{
    protected static function booted()
    {
        static::updated(function (Order $order) {
            if ($order->wasChanged('notified') && $order->freight_payer_self === 1) {
                OrderChanged::dispatch($order);
            }
        });
    }
}
