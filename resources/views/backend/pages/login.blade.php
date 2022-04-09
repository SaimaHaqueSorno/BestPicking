
<!DOCTYPE html>
<html lang="en">
<head><script nonce="179a9320-a650-4e1d-bb34-e4ba4afb2fd1">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<title>BestPicking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v7/css/main.css">

<meta name="robots" content="noindex, follow">
</head>


<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-90 p-b-30">
<form class="login100-form validate-form" action="{{route('admin.do.login')}}" method="POST">
@csrf
<span class="login100-form-title p-b-40">
Login
</span>
<div>
<a href="#" class="btn-login-with bg1 m-b-10">
<i class="fa fa-facebook-official"></i>
Login with Facebook
</a>
<a href="#" class="btn-login-with bg2">
<i class="fa fa-twitter"></i>
Login with Twitter
</a>
</div>
<div class="text-center p-t-55 p-b-30">
<span class="txt1">
Login with email
</span>
</div>

                     @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                    <p><span class="btn btn-danger">{{$error}}</span></p>
                             @endforeach
                     @endif

                     @if(session()->has('message'))
                        <p><span class="btn btn-danger">{{session()->get('message')}}</span></p>
                     @endif

<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
<input class="input100" type="text" name="email" placeholder="Email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-20" data-validate="Please enter password">
<span class="btn-show-pass">
<i class="fa fa fa-eye"></i>
</span>
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Login
</button>
</div>

<div class="flex-col-c p-t-224">
<span class="txt2 p-b-10">
Don’t have an account?
</span>
<a href="#" class="txt3 bo1 hov1">
Sign up now
</a>
</div>
</form>
</div>
</div>
</div>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/animsition/js/animsition.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v7/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v7/vendor/daterangepicker/moment.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/vendor/countdowntime/countdowntime.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v7/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f47f45e8f988994","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
