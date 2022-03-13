@extends('master')

@section('content')
<h1>Category</h1>

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
      <td>{{$singleBiscuit->Details}}</td>
      <td>{{$singleBiscuit->Action}}
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
          <a class="btn btn-success" href="">View</a>
      </td>
      @endforeach
    </tr>
   
    </tbody>
</table>
@endsection