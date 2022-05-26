 @extends('frontend.master')
 @section('content')

    @if(session()->has('message'))
        <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <style>
.cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
}
.carousel-inner {
  padding: 1em;
}


.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 5vh;
  height: 5vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-30%);
}
@media (min-width: 500px) {
  .card img {
    height: 11em;
  }
}
 </style>


    <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{url('/frontend/img/slider/1.jpg')}}" alt="" />
              </div>
              <div class="seq-title">
                           -->
                <h2 data-seq>Pick Your Best Choice</h2>                
               
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{url('/frontend/img/slider/2.jpg')}}" alt="slide img" />
              </div>
              <div class="seq-title">
                             
                <h2 data-seq>Pick Your Best Choice</h2>                
              
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{url('/frontend/img/slider/3.jpg')}}" alt="slide img" />
              </div>
              <div class="seq-title">
                             
                <h2 data-seq>Pick Your Best Choice</h2>                
                
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{url('/frontend/img/slider/1.jpg')}}" alt="slide img" />
              </div>
              <div class="seq-title">
                       
                <h2 data-seq>Pick Your Best Choice</h2>                
                <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{url('/frontend/img/slider/3.jpg')}}" alt=" slide img" />
              </div>
              <div class="seq-title">
                             
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
  <br>
  <br>
  <!-- / slider -->



    <!-- Products -->
    <h2> <center> Feature Product</center></h2>
<div>
      @foreach($products as $singleproduct)
  <div class="col-md-4">
    <img  style="width:200px;" src="{{url('/uploads/',$singleproduct->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
    <h3 class="card-title">{{$singleproduct->name}}</h3>
    <p class="card-text">{{$singleproduct->details}}</p>
    <p>{{$singleproduct->price}}.BDT</p>
    <button><a href="{{route('product.view',$singleproduct->id)}}">Buy Now</a></button>
    </div><br>
  </div>
</div>
     @endforeach

<h2><center> Category wise Product Show</center></h2><br>
    @foreach($categories as $cate)
<div class="owl-carousel" id="owlSlider">
  <div class="row">
<div class="col-md-4" >
<div class="cards-wrapper">
  <div class="card">
    <img src="{{url('/uploads',$cate->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$cate->name}}</h3>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
</div>
</div>
</div>
@endforeach
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>

<script>
         $('#owlSlider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 3
                },
                1000: {
                items: 4
                }
            }
            })
     </script>
     @endsection