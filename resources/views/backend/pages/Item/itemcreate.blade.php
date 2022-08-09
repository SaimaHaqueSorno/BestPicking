@extends('master')
@section('content')



<form action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">

        <label for="formGroupExampleInput" class="form-label">Product Name</label>
        <input required name="name" type="text" class="form-control" id="formGroupExampleInput"
            placeholder="Enter name">
    </div>


    <div class="mb-3">

        <label for="formGroupExampleInput" class="form-label">Category Name</label>
        <input required name="" type="text" class="form-control" id="formGroupExampleInput" placeholder=""
            value="{{$categories->name}}" readonly>
    </div>


    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Quantity</label>
        <input required name="quantity" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Enter quantity">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input required name="price" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Enter price">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Image</label>
        <input required name="image" type="file" class="form-control" id="image">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Details</label>
        <input required name="details" type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Enter details">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
