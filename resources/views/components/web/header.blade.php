<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mega Bets</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('css/color.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

</head>

<body>
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        <header id="sportsmagazine-header" class="sportsmagazine-header-one">

            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4">
                            <ul class="sportsmagazine-social-network">
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>
                            </ul>
                        </aside>
                        <aside class="col-md-8">
                            <ul class="sportsmagazine-user-section">
                                @if (Route::has('login'))
                                 @auth
                                   <li><i class="fa fa-shopping-cart"></i> <a href="{{route('myorders')}}" class="sportsmagazine-open-cart">Cart (0)</a>
                                 <li><i class="fa fa-home"></i> <a>{{ Auth::user()->name }}</a></li>
                                 <li ><i class="fa fa-user"></i><a href="{{ url('/home') }}">Home</a></li>
                                 <li><i class="fa fa-sign-in"></i>  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                                </a></li>
                              
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                   </form>
                                 @else
                                {{-- <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal"
                                        data-target="#loginModal">Login</a></li> --}}
                                <li><i class="fa fa-user"></i> <a href="{{url('/login')}}" >Login</a></li>
                                {{-- <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal"
                                        data-target="#signupModal">Sign Up</a></li> --}}
                                 <li><i class="fa fa-sign-in"></i> <a href="{{url('/register')}}" >Sign Up</a></li>
                                @endauth

                                @endif
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>

            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2"><a href="{{url('/')}}" class="sportsmagazine-logo"><img
                                    src="images/logo-1.png" alt=""></a></aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar-collapse-1" aria-expanded="true">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="{{Request::is('/') ? 'active':''}}"><a href="{{route('welcome')}}">Home</a>
                                            </li>
                                            <li class="{{request()->is('free-bets*') ? 'active':''}}"><a href="{{route('free-bets')}}">FREE BETTS</a>

                                            </li>
                                            <li  class="{{request()->is('today*') ? 'active':''}}"><a href="{{ route('today')}}">TODAY BETTS</a>

                                            </li>
                                            <li class="{{request()->is('results*') ? 'active':''}}"><a href="{{ route('results')}}">RESULTS</a>

                                            </li>
                                            @auth
                                             <li class="{{request()->is('myorders*') ? 'active':''}}"><a href="{{ route('myorders')}}">My Order</a>

                                            </li>
                                            @endauth
                                            {{-- <li><a href="#">ABOUT US</a>

                                            </li> --}}

                                            <li>
                                                  <a href="https://wa.me/255745256729" >Chat with us <i
                                                                class="fa fa-comment"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->

        </header>
       