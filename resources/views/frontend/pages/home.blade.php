 @extends('frontend.master')
 @section('content')

 @if(session()->has('message'))
 <p class="alert alert-success">{{session()->get('message')}}</p>
 @endif

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
     referrerpolicy="no-referrer" />
 <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
     referrerpolicy="no-referrer" />

 <!-- Start slider -->
 <section id="aa-slider">
     <div class="aa-slider-area">
         <div id="sequence" class="seq">
             <div class="seq-screen">
                 <ul class="seq-canvas">
                     <!-- single slide item -->
                     <li>
                         <div class="seq-model">
                             <img data-seq src="{{url('/frontend/img/slider/12.jpg')}}" alt="" />
                         </div>
                         <div class="seq-title">
                             <h2 data-seq>Pick Your Best Choice</h2>
                             <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
                         </div>
                     </li>
                     <!-- single slide item -->
                     <li>
                         <div class="seq-model">
                             <img data-seq src="{{url('/frontend/img/slider/11.jpg')}}" alt="slide img" />
                         </div>
                         <div class="seq-title">
                             <h2 data-seq>Pick Your Best Choice</h2>
                             <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
                         </div>
                     </li>
                     <!-- single slide item -->
                     <li>
                         <div class="seq-model">
                             <img data-seq src="{{url('/frontend/img/slider/1.webp')}}" alt="slide img" />
                         </div>
                         <div class="seq-title">
                             <h2 data-seq>Pick Your Best Choice</h2>
                             <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
                         </div>
                     </li>
                     <!-- single slide item -->
                     <li>
                         <div class="seq-model">
                             <img data-seq src="{{url('/frontend/img/slider/11.jpg')}}" alt="slide img" />
                         </div>
                         <div class="seq-title">
                             <h2 data-seq>Pick Your Best Choice</h2>
                             <!-- <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a> -->
                         </div>
                     </li>
                     <!-- single slide item -->
                     <li>
                         <div class="seq-model">
                             <img data-seq src="{{url('/frontend/img/slider/1.webp')}}" alt=" slide img" />
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
 <h2>
     <center> Feature Products</center>
 </h2>
 <div>
     @foreach($products as $singleproduct)
     <div class="col-md-4">
         <img style="width:200px; height: 250px;" src="{{url('/uploads/',$singleproduct->image)}}" class="card-img-top"
             alt="...">
         <div class="card-body">
             <h3 class="card-title">{{$singleproduct->name}}</h3>
             <p class="card-text">{{$singleproduct->details}}</p>
             <p>{{$singleproduct->price}}.BDT</p>
             <button><a href="{{route('product.view',$singleproduct->id)}}">Buy Now</a></button>
         </div><br>
     </div>
 </div>
 @endforeach

 <div class="col-lg-12">
     <h2>
         <center> Category wise Product Show</center>
     </h2><br>

     <div class="owl-carousel owl-theme" style="margin:20px" ;>
         @foreach($categories as $cate)
         <div class="item">
             <img style="height:300px;" src="{{url('/uploads/',$cate->image)}}" alt="img">
             <div class="card-body">
                 <a href="">
                     <h3 class="card-title">{{$cate->name}}</h3>
                 </a>
             </div>
         </div>

         @endforeach
     </div>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 <script>
     $('.owl-carousel').owlCarousel({
         loop: true,
         margin: 10,
         // nav:true,
         autoplay: true,
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 2
             },
             1000: {
                 items: 3
             }
         }
     })

 </script>
 @endsection
