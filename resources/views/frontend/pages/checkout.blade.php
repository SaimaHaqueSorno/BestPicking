@extends('frontend.master')
@section('content')

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
        <form action="{{route('pay')}}" method="post">
                        @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">


                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a >
                            Order Details
                          </a>
                        </h4>
                      </div>
                     
                      <div  >
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input required name="first_name" type="text" placeholder="First Name*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input required name="last_name"  type="text" placeholder="Last Name*">
                              </div>
                            </div>
                          </div> 
                        
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input required name="email" type="email" placeholder="Email Address*">
                              </div>                             
                            </div>
                          </div>
                           
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input required name="contact" type="integer" placeholder=" Contact Number*">
                              </div>                             
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input required name="address" type="text" placeholder=" Address*">
                              </div>                             
                            </div>
                          </div> 
                
                           <!-- <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea required cols="8" rows="3">Special Notes</textarea>
                              </div>                             
                            </div>                            
                          </div>               -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Unit Price</th>
                          <th>Qty</th>
                          <th>SubTotal</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach(session()->get('cart') as $cartData)
                        <tr>
                          <td>{{$cartData['name']}}</td>
                          <td>{{$cartData['price']}}</td>
                          <td>{{$cartData['quantity']}}</td>
                          <td>{{$cartData['subtotal']}}.BDT</td>
                        </tr>
                       @endforeach
         
                      </tbody>
                      <tr></tr>
                      <tfoot>
                        <tr>
                        <th>VAT(5%)</th>
                        <td>{{$cartData['subtotal']*5/100}} .BDT</td>
                        </tr>
                         <tr>
                          <th>Total</th>
                          <td>{{array_sum(array_column(session()->get('cart'),'subtotal'))+$cartData['subtotal']*5/100}} .BDT</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method"> 

                    <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                    <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via CARD/Bkash </label>
                    <!-- <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">     -->
                    <input type="submit" value="Pay Now" class="aa-browse-btn">                
                    <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button> -->
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->



@endsection