@extends('app')

@section('title')
    Overview orders
@endsection

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Release date</th>
            <th>Release user</th>
            <th>Freight payer</th>
            <th>Contract</th>
            <th>BL Number</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
         @foreach($orders as $order)
          <tr data-id="{{ $order->id }}">
              <td>{{ $order->id }}</td>
              <td>{{ $order->bl_release_date }}</td>
              <td>{{ $order->bl_release_user_id }}</td>
              <td>{{ $order->freight_payer_self ? 'self' : 'customer' }} ({{ $order->freight_payer_self }})</td>
              <td>{{ $order->contract_number }}</td>
              <td>{{ $order->bl_number }}</td>
              <td>{{ $order->created_at }}</td>
              <td>{{ $order->updated_at }}</td>
          </tr>
         @endforeach
   </tbody>
</table>
@endsection

@section('style')
<style>
    tr[data-id] {
        cursor: pointer;
    }
</style>
@endsection

@section('scripts')
<script>
document.querySelectorAll('[data-id]').forEach(row => {
    row.addEventListener('click', () => {
        window.location.href = `/order/${row.getAttribute('data-id')}`;
    });
});
</script>
@endsection
