<?php


use App\Models\Order;
use App\Notifications\PaymentRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/orders', function () {
    return view('orders', [
        'orders' => DB::table('orders')->simplePaginate(15)
    ]);
})->name('order_overview');


Route::get('/order/{id}', function (string $id) {
    $order = Order::find($id)->first();

    return view('order', [
        'order' => DB::table('orders')->find($id)
    ]);
});

Route::get('/update/{id}', function (string $id) {
    $order = Order::find($id)->first();

    $order->freight_payer_self = $order->freight_payer_self === 1 ? 0 : 1;

    $order->save();

});

Route::get('/mail/{id}', function (string $id) {
    $order = Order::find($id)->first();

    $notification = Notification::route('mail', [
        'robbyvz@hotmail.com' => 'Robby @ Hello',
    ])->notify(new PaymentRequest($order));

    return to_route('order_overview');
});

Route::get('/send-test-email', function () {
    Mail::raw('This is a test email from Laravel', function ($message) {
        $message->to('recipient@example.com')
                ->subject('Test Email');
    });

    return 'Email sent!';
});