@extends('master')


@section('content')
 
<div class="row">
        <div class="col-md-3">
            <div class="card" >
                <h5 class="card-header" style="background-color: green">Total Order</h5>
                <div class="card-body" style="background-color: greenyellow">

                    <h2>{{$total_order}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <h5 class="card-header">Sale (Today)</h5>
                <div class="card-body">

                    <h2>10</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card"  style="background-color: purple">
                <h5 class="card-header">Total Customer</h5>
                <div class="card-body">

                    <h2>{{$total_customer}}</h2>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"  style="background-color: blue">
                <h5 class="card-header">Total Product</h5>
                <div class="card-body">

                    <h2>{{$total_product}}</h2>

                </div>
            </div>
        </div>
    </div>

@endsection
