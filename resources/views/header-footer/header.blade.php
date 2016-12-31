


        <!DOCTYPE HTML>
<html>
<head>
    <title>Schoars</title>
    <!-- Bootstrap -->


    <link  href="{{ URL::asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link  href="{{ URL::asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link  href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/style1.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}">



    <!-- start plugins -->

    <script type="text/javascript"  src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script type="text/javascript"  src="{{ URL::asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?callback=map"></script>--}}

{{--    <script src="{{ URL::asset('js/map.js') }}"></script>--}}

    <script type="text/javascript"  src="{{ URL::asset('js/contact1.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('js/jssor.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jssor.slider.js') }}"></script>
    <!-- start slider -->

    <link  href="{{ URL::asset('css/slider.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/contact.css') }}">

    <script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.28468.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.cslider.js') }}"></script>


    <script type="text/javascript">




    </script>
    <script type="text/javascript">
        $(function() {

            $('#da-slider').cslider({
                autoplay : true,
                bgincrement : 450
            });

        });
    </script>
    <!-- Owl Carousel Assets -->

    <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["", ""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : false,
                paginationNumbers : false,
            });

        });
    </script>
    <!-- //Owl Carousel Assets -->
    <!--font-Awesome-->

    <link rel="stylesheet" href="{{ URL::asset('fonts/css/font-awesome.min.css') }}">
    <!--font-Awesome-->


</head>
<body >

<style type="text/css">
    .element {
        display: inline-block;
        background-color: #55d8a1;
        height: 50px;
        width: 50px;
        font-size: 1px;
        padding: 1px;
        color: white;
        margin-right: 5px;
        margin-left: 5px;

        animation: roll 1.5s infinite;

        transform: rotate(360deg);
        opacity: .7;
        position: relative;
    }


    @keyframes roll {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
        from{
            background-color: #55d8a1;

        }
        to{
            background-color: #056308;
        }
    }


</style>
{{--login part--}}
<div id="LoginModal" class="modal fade-in" role="dialog">
    <div class="modal-dialog "style="width:450px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color:#0fb3bf;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Login </h4>
            </div>
            <div class="modal-body "style="margin-left: 78px;" >
                <form action="" class="login-form" style="width: 250px;">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa-stack-1x"></i></span>
                        <input type="text" class="form-control"  name="name"value=""  placeholder="Username" autofocus>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #0fb3bf;">
                <button type="button" class="btn btn-default" >Forget Password</button>
                <button type="button" class="btn btn-default" >Login</button>

            </div>
        </div>

    </div>
</div>
{{--end login part--}}
{{--additional modal--}}

{{--additional modal--}}

<div class="header_bg">
    <div class="container" style="    box-shadow:inset 3px 9px 131px 18px #05A6B3;">
        <div class="row header">

            <div class="col-xs-12  col-sm-3">
                <A href="/public">
                    <img  class="img-responsive" src="{{url::asset("images/mgm.png")}}">
                </a>
            </div>
            <div class="col-xs-12   col-sm-7">
                <span style="font-size: 600%;color: #313794;font-weight: 800;font-family: geogia,serif;">SCHOLAR'S</span>
                <span style="font-family: geogia,serif;float :right;margin-top: -28px;margin-right: 100px;color: #0B7A83;"> <i>SOLUTION FOR BRIGHT FUTURE</i></span>

            </div>


            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row h_menu" >
    <div class="container"style="background-color:#05A6B3; height:40px;">
        <nav class="navbar navbar-default navbar-left" role="navigation">





            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background-color:#05A6B3; border-bottom:1px solid #05A6B3;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class=""><a href="/public">Home</a></li>
                    <li><a href="/public/about">About Us</a></li>
                    <li><a href="/public/services">Services</a></li>
                    <li><a href="/public/courses">Courses</a></li>
                    <li><a href="/public/faculty">Our Team</a></li>
                    <!--<li><a href="registration.php">Registration</a></li>-->
                    <li><a href="/public/contact">Contact</a></li>
                    <li><a href="" data-toggle="modal" data-target="#LoginModal">login</a></li>


                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- start soc_icons -->
        </nav>
        <!--
        <div class="soc_icons navbar-right">
            <ul class="list-unstyled text-center">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>-->
    </div>
</div>


