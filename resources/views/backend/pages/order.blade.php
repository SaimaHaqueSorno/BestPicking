@extends('master')

@section('content')
<h1>All orders</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">User Id</th>
        <th scope="col">Receiver First Name</th>
        <th scope="col">Receiver Last Name</th>
        <th scope="col">Receiver Email</th>
        <th scope="col">Receiver Address</th>
        <th scope="col">Total</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($orders as $key=>$order)
    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$order->user_id}}</td>
        <td>{{$order->receiver_first_name}}</td>
        <td>{{$order->receiver_last_name}}</td>
        <td>{{$order->receiver_email}}</td>
        <td>{{$order->receiver_address}}</td>
        <td>{{$order->total}}</td>
        <td>{{$order->payment_method}}</td>
        <td>{{$order->action}}
        <a class="btn btn-primary" href="{{route('order.view',$order->id)}}" role="button">View</a>
        <a class="btn btn-danger" href="#" role="button">Delete</a>
         </td>
    </tr>
    @endforeach
    
    </tbody>
</table>
@endsection