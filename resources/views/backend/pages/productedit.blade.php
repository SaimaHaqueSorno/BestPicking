@extends('master')
@section('content')

<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/data-form">
    @method('PUT')
    @csrf
    <input type="hidden" value="{{$product->id}}" name="product_name">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Product Name</label>
  <input value="{{$product->name}}" name="name"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter name">
  </div>

<div class="mb-3">
  <label for="category" class="form-label">Category Name</label>
 <select class="form-control" name="category_id" id="">
   @foreach($categories as $singleBiscuit)
       <option value="{{$singleBiscuit->id}}">{{$singleBiscuit->name}}</option>
    @endforeach
 </select>
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Quantity</label>
  <input value="{{$product->quantity}}" name="quantity" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter quantity">
</div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Price</label>
  <input value="{{$product->price}}" name="price" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter price">
</div>
<div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Details</label>
  <input value="{{$product->details}}" name="details" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter details">
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 

@endsection