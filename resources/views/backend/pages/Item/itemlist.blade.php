@extends('master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">All {{$items->name}} Products</h1>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Product Name</th>
        <th scope="col">Category Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Details</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

   @foreach($products as $key=>$item)

    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->category->name}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->price}}.BDT</td>
      <td>
        <img width="100px"  height="80px" src="{{url('/uploads',$item->image)}}" alt="product image">
      </td>
      <td>{{$item->details}}</td>
      <td>{{$item->action}}
          <a class="btn btn-primary" href="{{route('product.edit',$item->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('product.delete',$item->id)}}">Delete</a>
         
      </td>
    </tr>
   @endforeach 
    </tbody>
</table>
@endsection