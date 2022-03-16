@extends('master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Category</h1>

    <a class="btn btn-success" href="">Create New category</a>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($categories as $key=>$singleBiscuit)
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->quantity}}</td>
      <td>{{$singleBiscuit->price}}</td>
      <td>{{$singleBiscuit->details}}</td>
      <td>{{$singleBiscuit->Action}}
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
        
      </td>
    
    </tr>
    @endforeach
    </tbody>
</table>
@endsection