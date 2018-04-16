<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! Html::style('/assets/css/bootstrap.min.css')!!}
        {!! Html::style('/assets/css/flexslider.css')!!}
        {!! Html::style('/assets/css/style.css')!!}
        {!! Html::style('/assets/css/font-awesome.min.css')!!}

        {!! Html::script('/assets/js/jquery.min.js')!!}
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <title>SOUQ EGYPTE |   @yield('title') </title>
        @yield('header')
     
</head>
<body>
        <div class="header">
        <div class="container"> <a class="navbar-brand" href="{{ url('/')}}"><i class="fa fa-paper-plane"></i>  SOUQ EGYPTE </a>
            <div class="menu"> <a class="toggleMenu" href="{{ url('/')}}"><img src="images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ url('/about')}}">About Us</a></li>
                <li><a href="{{ url('/services')}}">Services</a></li>
                <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                  <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                <div class="clear"></div>
            </ul>
            {!! Html::script('/assets/js/responsive-nav.js')!!}
            </div>
        </div>
        </div>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
        
        @yield('footer')
        <div class="footer">
            <div class="footer_bottom">
                <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
                <div class="copy">
                <p>Copyright &copy; 2018 Company Name. Design by <a href="islamharbyfc@gmail.com" rel="nofollow">Harby</a></p>
                </div>
            </div>
         </div>
        {!! Html::script('/assets/js/bootstrap.min.js')!!}
        {!! Html::script('/assets/js/jquery.flexslider.js')!!}  

      
    </div>

</body>
</html>
