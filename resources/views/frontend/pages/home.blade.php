 @extends('frontend.master')
 @section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq></span>                
                <h2 data-seq>Pick Your Best Choice</h2>                
               
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="" alt="slide img" />
              </div>
              <div class="seq-title">
                <span data-seq></span>                
                <h2 data-seq>Pick Your Best Choice</h2>                
              
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="" alt="slide img" />
              </div>
              <div class="seq-title">
                <span data-seq></span>                
                <h2 data-seq>Pick Your Best Choice</h2>                
                
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="" alt="slide img" />
              </div>
              <div class="seq-title">
                <span data-seq></span>                
                <h2 data-seq>Pick Your Best Choice</h2>                
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="" alt=" slide img" />
              </div>
              <div class="seq-title">
                <span data-seq></span>                
                <h2 data-seq>Pick Your Best Choice</h2>                
               
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->



    <!-- Products -->
<div>
    <h1><strong>Feature Products</strong> </h1>
 @foreach($products as $singleproduct)
 <div class="col-md-3" >
  <img  style="width:200px;" src="{{url('/uploads/',$singleproduct->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$singleproduct->name}}</h5>
    <p class="card-text">{{$singleproduct->details}}</p>
    <p>{{$singleproduct->price}}.BDT</p>
    <button><a href="{{route('product.view',$singleproduct->id)}}">Buy Now</a></button>
  </div><br>
</div>

</div>
@endforeach

<!-- Category wise Product Show -->




@endsection
  