@extends('frontend.master')
@section('content')
<div>
<form action="{{route('update.profile',$user->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
   
    <input type="hidden" value="{{$user->id}}" name="user_name">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">User Name</label>
  <input value="{{$user->name}}" name="name"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
  </div>



<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Address</label>
  <input value="{{$user->address}}" name="address" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Email</label>
  <input value="{{$user->email}}" name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter email">
</div>
<div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input name="image" type="file" class="form-control" id="formfileLg">
      </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>

@endsection