@extends('master')
@section('content')


<form action="{{route('product.post')}}" method="POST">
    @csrf
    
    <div class="mb-3">
 
  <label for="formGroupExampleInput" class="form-label">Product Name</label>
  <input name="name"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Quantity</label>
  <input name="quantity" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter quantity">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Price</label>
  <input name="price" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter price">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Details</label>
  <input name="details" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter details">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection
