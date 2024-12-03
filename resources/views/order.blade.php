@extends('app')

@section('title')
    Order: {{ $order->id }}
@endsection

@section('content')
    <h3>Order: {{ $order->id }}</h3>
    
    <div class="text-end">
        <a class="btn btn-sm btn-success" href="/orders">Back to overview</a>
    </div>

    <p>Order information.</p>

    <dl class="colored-definition-list">
        <dt>Id</dt>
        <dd>{{ $order->id }}</dd>
        <dt>Notified</dt>
        <dd>
            {{ $order->notified === 1 ? 'Yes' : 'No' }} ({{ $order->notified }})
            @if ($order->notified === 0 && $order->freight_payer_self === 1)
                <span class="float-end"><a class="btn btn-sm btn-outline-danger" href="/update/{{ $order->id }}">Send notification</a></span>
            @else
                <span class="float-end">Notification already sent</span>
            @endif
        </dd>
        <dt>Bill of lading release date</dt>
        <dd>{{ $order->bl_release_date }}</dd>
        <dt>Bill of lading release user_id</dt>
        <dd>{{ $order->bl_release_user_id }}</dd>
        <dt>Freight payer</dt>
        <dd>{{ $order->freight_payer_self ? 'self' : 'customer' }} ({{ $order->freight_payer_self }})</dd>
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
