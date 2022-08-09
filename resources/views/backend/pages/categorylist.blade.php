@extends('master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Category</h1>

    <a class="btn btn-success" href="{{route('category.form')}}">Create New category</a>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Details</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($categories as $key=>$cate)
    <tr>
      <td scope="row">{{$key+1}}</td>
   
      <td><a href="{{route('item.list',$cate->id)}}"> {{$cate->name}} </a></td>
      <td>{{$cate->quantity}}</td>
      <td>{{$cate->details}}</td>
      <td>
        <img width="100px"  height="80px" src="{{url('/uploads',$cate->image)}}" alt="category image">
      </td>
      <td>{{$cate->Action}}
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="{{route('category.delete',$cate->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection