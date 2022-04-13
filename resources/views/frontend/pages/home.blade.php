 @extends('frontend.master')
 @section('content')

 @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
 @foreach($products as $singleproduct)
<div class="col-md-4">
            <div class="product-item">
              <a href="{{route('product.view',$singleproduct->id)}}">
              <img width="200px" src="{{url('/uploads/',$singleproduct->image)}}" alt="product image">
              </a>
              <div class="down-content">
                <a href="#"><h4>{{$singleproduct->name}}</h4></a>
                <h6>{{$singleproduct->details}}</h6>
                <p>{{$singleproduct->price}}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
</div>
@endforeach

@endsection
  