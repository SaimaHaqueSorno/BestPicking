@extends('master')
@section('content')

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Addresss</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($customers as $key=>$customer)
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$customer->name}}</td>
      <td>{{$customer->contact}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->action}}
          <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
         
      </td>
    </tr>
   @endforeach
    </tbody>
</table>


@endsection