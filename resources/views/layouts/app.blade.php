<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web rekruitasi</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>
<body style="overflow-x: hidden">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/ans.png') }}" style="width: 27%"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('list.assistant') }}">{{ __('List Assistant') }}</a></li>
                            <li><a class="nav-link" href="{{ route('list.cassistant') }}">{{ __('List CAssistant') }}</a></li>
                            <li><a class="nav-link" href="{{ route('post.index') }}">{{ __('List Post') }}</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('home') }}">{{ __('Action') }}</a></li>
                            <li><a class="nav-link" href="{{ route('list.assistant') }}">{{ __('List Assistant') }}</a></li>
                            <li><a class="nav-link" href="{{ route('list.cassistant') }}">{{ __('List CAssistant') }}</a></li>
                            <li><a class="nav-link" href="{{ route('post.index') }}">{{ __('List Post') }}</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <!--<script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 9710250;
        (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
    </script>-->
    <!-- End of LiveChat code -->
    <!--  Widget Code -->
    <script type="text/javascript">((function(){
        var load=function(){
            var script="https://s.acquire.io/a-7a1fd/init.js?full";
            var x=document.createElement('script');
            x.src=script;x.async=true;
            var sx=document.getElementsByTagName('script')[0];
            sx.parentNode.insertBefore(x, sx);
            
    };
        if(document.readyState === "complete")
            load();
        else if (window.addEventListener)  // W3C DOM
            window.addEventListener('load',load,false);
        else if (window.attachEvent) { // IE DOM
            window.attachEvent("onload", load);
        }
    })())</script>
    <noscript><a href="https://www.acquire.io?welcome" title="live chat software">Acquire</a></noscript>
    <!-- / Widget Code -->
</body>
</html>
