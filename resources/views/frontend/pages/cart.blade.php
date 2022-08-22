@extends('frontend.master')
@section('content')

<style>
.img-cart {
    display: block;
    max-width: 50px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}
table tr td{
    border:1px solid #FFFFFF;    
}

table tr th {
    background:#eee;    
}

.panel-shadow {
    box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
</style>


<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
    <div class="col-md-12 col-sm-8 content">
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-info panel-shadow">
                    <div class="panel-heading">
                        <h3>
                            <img class="img-circle img-thumbnail" src="#">
                          User Name
                        </h3>
                    </div>
                    <div class="panel-body"> 
                        <div class="">
                        <table class="table">
                            <thead>
            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif
                            <tr>
                                <th>Product</th>
                                <th>Image</th>
                                <th>Qty</th>
                                <th>Unit Price</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                     </thead>
                  <tbody>
                  @if(session()->has('cart'))
                  
                  @foreach($getCart as $key=>$cartData)
                      <tr>
                      <td><strong>{{$cartData['name']}}</strong><p></p></td>
                      <td><img src="{{url('/uploads/'.$cartData['image'])}}" class="img-cart"></td>
                
                      <td data-th="Quantity" >
                      <form action="{{route('cart.update',$key)}}" method="post">
                            @csrf
                        <input name="quantity" type="number" min="1" class="form-control-lg text-center" value="{{$cartData['quantity']}}">
                        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        </form>
                      </td>
                      <td data-th="Price">{{$cartData['price']}}.BDT</td>
                      
                    <td data-th="Subtotal" class="">{{$cartData['subtotal']}}.BDT</td>
                    <td class="actions" data-th="">
                        <a  href="{{route('cart.delete',$key)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                    </tr>
                   @endforeach

                                <tr>
                                    <td colspan="6">&nbsp;</td>
                                </tr>
                            
                                <tr>
                                    <td colspan="4" class="text-right"><strong>VAT(5%) will be added in invoice.</strong></td>
                                    <td> </td>
                                </tr>
                               
                                <tr>
                                    <td colspan="4" class="text-right"><strong>Total</strong></td>
                                    <td>{{array_sum(array_column(session()->get('cart'),'subtotal'))}} .BDT</td>
                                </tr>
                              
    
  @else
    <tr>
        <td>
        <h1>Your Cart is Empty.</h1>
        </td>
    </tr>
  @endif 

                            </tbody>
                            
                        </table>
                        <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8"> 
                        <a href="{{route('cart.clear')}}" class="btn btn-danger">ClearCart</a>
                        <a href="{{route('checkout')}}" class="btn btn-success">Checkout</a>
                           
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <a href="{{route('home')}}" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                <a href="#" class="btn btn-primary ">Next<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</div>

@endsection