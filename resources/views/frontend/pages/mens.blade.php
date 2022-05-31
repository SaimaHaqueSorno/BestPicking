@extends('frontend.master')
@section('content')


<div>
  <div class="col-md-4">
    <img  style="width:200px; height: 250px;" src="" class="card-img-top" alt="...">
    <div class="card-body">
    <h3 class="card-title"></h3>
    <p class="card-text"></p>
    <p></p>
    <button><a href="{{route('product.view',$singleproduct->id)}}">Buy Now</a></button>
    </div><br>
  </div>
</div>


@endsection