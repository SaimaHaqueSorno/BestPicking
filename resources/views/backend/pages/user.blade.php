@extends('master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Users</h1>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($users as $key=>$user)
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->action}}
          <a class="btn btn-primary" href="">View</a>
          <a class="btn btn-danger" href="">Delete</a>
         
      </td>
    </tr>
   @endforeach
    </tbody>
</table>
@endsection