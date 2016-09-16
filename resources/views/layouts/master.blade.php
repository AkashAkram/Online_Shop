<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') E-Shop</title>

    <!-- Styles -->


    <link href="{!! asset('surfhouse/css/style.css') !!}" rel='stylesheet' type='text/css' />
        
    <link href="{!! asset('css/app.css') !!}" rel='stylesheet' type='text/css' />
    <link href="{!! asset('surfhouse/css/bootstrap.css') !!}" rel='stylesheet' type='text/css' />
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <link href="{!! asset('surfhouse/css/magnific-popup.css') !!}" rel="stylesheet" type="text/css">

    <!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link href="{!! asset('surfhouse/css/jquery.bxslider.css') !!}" rel="stylesheet">
    <link href="{!! asset('surfhouse/css/ninja-slider.css') !!}" rel="stylesheet">
    <link href="{!! asset('surfhouse/css/thumbnail-slider.css') !!}" rel="stylesheet">
    <link href="{!! asset('surfhouse/css/etalage.css') !!}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    E Shop
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                		<li><a href="{{ url('/add') }}">Add product</a></li>
                		<li><a href="{{ url('/cart') }}">Cart</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="margin-top"></div>

    @yield('content')


    @include('subview.footer')

    <!-- Scripts -->
    <script src="js/app.js"></script>
    

<script src="{!! asset('') !!}surfhouse/js/jquery.min.js"></script>
<script type="application/x-javascript">
    addEventListener("load", function() {
    setTimeout(hideURLbar, 0);
     }, false);
    function hideURLbar(){
      window.scrollTo(0,1);
    }
</script>
<script src="{!! asset('surfhouse/js/jquery.easydropdown.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.magnific-popup.js') !!}" type="text/javascript"></script>
<script src="{!! asset('surfhouse/js/jquery.bxslider.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.easing.1.3.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.fitvids.js') !!}"></script>
<script src="{!! asset('surfhouse/js/owl.carousel.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.slides.js') !!}"></script>
<script src="{!! asset('surfhouse/js/ninja-slider.js') !!}"></script>
<script src="{!! asset('surfhouse/js/thumbnail-slider.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.etalage.min.js') !!}"></script>
<script src="{!! asset('surfhouse/js/easyResponsiveTabs.js') !!}"></script>
<script src="{!! asset('surfhouse/js/jquery.flexisel.js') !!}"></script>

<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});


    $(document).ready(function(){
        $('.slider1').bxSlider({
            interval:00,
            slideWidth: 500,
            minSlides: 3,
            maxSlides: 2,
            startSlide: 0,
            slideMargin: 10
        });
    });

    $(function(){
        $("#slides").slidesjs({
            width: 940,
            height: 528
        });
    });


    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });


    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

    });


    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,

            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });
        // This is for the dropdown list example:
        $('.dropdownlist').change(function(){
            etalage_show( $(this).find('option:selected').attr('class') );
        });

    });

</script>
</body>
</html>
