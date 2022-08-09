@extends('master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">All Feature Products</h1>

    <a class="btn btn-success" href="{{route('product.form')}}">Add New Feature Product</a>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Category Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Image</th>
        <th scope="col">Details</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($products as $key=>$singleproduct)
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$singleproduct->name}}</td>
      <td>{{$singleproduct->category->name}}</td>
      <td>{{$singleproduct->quantity}}</td>
      <td>{{$singleproduct->price}}.BDT</td>
      <td>
        <img width="100px"  height="80px" src="{{url('/uploads',$singleproduct->image)}}" alt="product image">
      </td>
      <td>{{$singleproduct->details}}</td>
      <td>{{$singleproduct->action}}
          <a class="btn btn-primary" href="{{route('product.edit',$singleproduct->id)}}">Edit</a>
          <a class="btn btn-danger" href="{{route('product.delete',$singleproduct->id)}}">Delete</a>
         
      </td>
    </tr>
   @endforeach
    </tbody>
</table>
@endsection