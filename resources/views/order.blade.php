@extends('app')

@section('title')
    Order: {{ $order->id }}
@endsection

@section('content')
    <h3>Order: {{ $order->id }}</h3>
    
    <div class="text-end">
        <a href="/orders">Back to overview</a>
    </div>

    <p>Oder information.</p>

    <dl class="colored-definition-list">
    <dt>id</dt>
        <dd>{{ $order->id }}</dd>
        <dt>Notified</dt>
        <dd>{{ $order->notified }}</dd>
        <dt>Bill of lading release date</dt>
        <dd>{{ $order->bl_release_date }}</dd>
        <dt>Bill of lading release user_id</dt>
        <dd>{{ $order->bl_release_user_id }}</dd>
        <dt>Freight payer</dt>
        <dd>
            {{ $order->freight_payer_self ? 'self' : 'customer' }} ({{ $order->freight_payer_self }})
            <span class="float-end">update</span>
        </dd>
        <dt>Contract number</dt>
        <dd>{{ $order->contract_number }}</dd>
        <dt>Bill of lading number</dt>
        <dd>{{ $order->bl_number }}</dd>
        <dt>Created at</dt>
        <dd>{{ $order->created_at }}</dd>
        <dt>Updated at</dt>
        <dd>{{ $order->updated_at }}</dd>
    </dl>
@endsection
