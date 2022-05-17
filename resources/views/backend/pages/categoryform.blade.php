@extends('master')
@section('content')


<form action="{{route('category.post')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="mb-3">
 
  <label for="formGroupExampleInput" class="form-label">Category Name</label>
  <input name="name"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Quantity</label>
  <input name="quantity" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter quantity">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Details</label>
  <input name="details" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter details">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Image</label>
  <input name="image" type="file" class="form-control" id="formGroupExampleInput2">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection