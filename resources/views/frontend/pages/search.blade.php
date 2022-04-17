@extends('frontend.master')
@section('content')
<div class="row">
    @foreach($product as $data)
    <div class="col-md-3">
        <div class="card">
            <img width="100px" src="{{url('/uploads/',$data->image)}}" alt="{{$data->name}}">
            <h5>{{$data->name}}</h5>
            <h5>{{$data->price}}</h5>
        </div>
    </div>
    @endforeach
</div>
@endsection