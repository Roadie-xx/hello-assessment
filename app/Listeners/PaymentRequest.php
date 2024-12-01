<?php

namespace App\Listeners;

use App\Events\OrderChanged;
use App\Models\Order;
use App\Notifications\PaymentRequest as PaymentRequestNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class PaymentRequest
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderChanged $event): void
    {
        $id = $event->order->id;

        $order = Order::find($id)->first();

        $notification = Notification::route('mail', [
            'robbyvz@hotmail.com' => 'Robby @ Hello',
        ])->notify(new PaymentRequestNotification($order));
    }
}
