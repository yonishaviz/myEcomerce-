<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="sass/shop.css" rel="stylesheet">

    </head>
    <style>
    lo {
  float: left;
 }

lo a {
  display: grid;
  color: deepskyblue;
  text-align: center;
	font-size-adjust: auto;
  padding: 14px 16px;
  text-decoration: none;
}

lo a:hover {
  background-color: lightgreen;
 background-color: black;
	color: white;
}
        .SelCat{
		  background-color: forestgreen;
	}
        .product-section{
            display: grid;
            grid-template-columns: 1fr 3fr;
            margin: 80px auto 80px;
        }
        .products{
        display: grid;
         grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 60px $gutter;
        }
            .product-price{
        color: $text-color-light;        
            }

            

    </style>
        <body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                         <a class="nav-link" href="/"><font face="Times New Roman" size="4">home</font></a>       &nbsp&nbsp

                              
                             
                         <a class="nav-link" href="/posts/">blog</a>

                        
 &nbsp&nbsp
                        <a class="nav-link" href="{{route('cart.index')}}"><font face="Times New Roman" size="4">cart</font>
                        @if(Cart::instance('default')->count()>0)
                            <span>{{Cart::instance('default')->count()}}</span>
                        @endif
                        
                        </a>       &nbsp&nbsp
 &nbsp&nbsp

                        @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         &nbsp&nbsp
                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
@include('inc.messages')
        <main class="py-4">
            @yield('content')

        </main>
    </div>
                @yield('extra-js')

</body>
</html>
