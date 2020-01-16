<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>


	<!-- Latest compiled and minified CSS -->

	<!-- Favicons-->
    <link rel="shortcut icon" href="{{ URL::to('public/assets/images/icon.png') }}" type="image/x-icon"/>

    <!-- Bootstrap -->
    <link href="{{ URL::to('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--style-->
    <link href="{{ URL::to('public/assets/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ URL::to('public/assets/css/style.css') }}" rel="stylesheet">

    <!-- Fancybox CSS -->
    <link href="{{ URL::to('public/assets/fancybox/jquery.fancybox.css?v=2.1.4') }}" rel="stylesheet" />

    <!--Font-Awesome-->
    <link rel="stylesheet" href="{{ URL::to('public/assets/font-awesome/css/font-awesome.min.css') }}">

    <!--Animate.css-->
    <link rel="stylesheet" href="{{ URL::to('public/assets/animatecss/animate.css') }}">    

    <!-- Flexslider CSS -->
    <link href="{{ URL::to('public/assets/flexslider/flexslider.css') }}" rel="stylesheet" />

    <!-- Owl Carousel Assets -->
    <link href="{{ URL::to('public/assets/owl/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::to('public/assets/owl/owl.theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/owl/owl.transitions.css') }}"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,800|Fahkwang:400,600|Prata" rel="stylesheet">


    <!-- range-slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/range-slider/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/range-slider/ion.rangeSlider.skinNice.css') }}">

    <!--google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800|Playfair+Display:400,900" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,800" rel="stylesheet"> -->


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

	@yield('styles')
</head>
<body>


@include('partials.header')


<!-- <div class="container"> -->
@yield('content')
<!-- </div> -->


@include('partials.footer')

<!--Scroll to top-->
	<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

	<!-- jQuery-->
	<script src="{{ URL::to('public/assets/js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('public/assets/js/bootstrap.min.js') }}"></script>    

	<!-- jQuery -->
	<script type="text/javascript" src="{{ URL::to('public/assets/js/modernizr.custom.js') }}"></script>

	<!-- Fancybox jQuery -->
	<script src="{{ URL::to('public/assets/fancybox/jquery.mousewheel-3.0.6.pack.js') }}"></script>
	<script src="{{ URL::to('public/assets/fancybox/jquery.fancybox.js?v=2.1.4') }}"></script>

	<!--animatecss-->
	<script src="{{ URL::to('public/assets/animatecss/viewportchecker.js') }}"></script>

	<!-- FlexSlider -->
	<script defer src="{{ URL::to('public/assets/flexslider/jquery.flexslider.js') }}"></script>

	<script type="text/javascript" src="{{ URL::to('public/assets/owl/owl.carousel.js') }}"></script>

	<script type="text/javascript" src="{{ URL::to('public/assets/js/jquery.transit.min.js') }}"></script>

    <!-- price-range -->
    <script type="text/javascript" src="{{ URL::to('public/assets/range-slider/ion.rangeSlider.min.js') }}"></script>

    <!-- image zoom slider feature -->
    <script src="{{ URL::to('public/assets/zoomimage/zoom-image.js') }}"></script>
    <script src="{{ URL::to('public/assets/zoomimage/main.js') }}"></script>


	<script src="{{ URL::to('public/assets/js/jquery.js') }}"></script>

	<script type="text/javascript">
	$("#Locale").on('change', function(){
         var val = $(this).val();    
         var baseurl = {!! json_encode(url('/')) !!};
         var r_url = baseurl+"/locale/"+val;
         // alert(r_url);
         $.ajax({
            type:'get',
            url: r_url,
            success:function(data){
                location.reload();
                },
            error:function(){
            }
        });
    }); 
	</script>

@yield('scripts')
</body>
</html>

