<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ADD8E6;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 300;
                margin: 0;
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {

                font-size: 50px;
                
            }

            .links > a {
                color: #000000;
                margin-right: 380px;
                padding: 18px 6% 60px 6%;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }

            .m-b-md {
                padding-top:30px;
                margin-top:0;
                margin-bottom: 30px;
            }
            .navbar{
                color: #636b6f;
                padding: 10px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <div class="content">
                <div class="title m-b-md">
                    TO DO LIST APPLICATION
                </div>
                <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
    @section('navbar')
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/cats">Task</a></li>
            <li><a href="/reminders">Reminder</a></li>
            <li><a href="/homeworks">Homework</a></li>
            </ul>
        </div>
    </div>
@show
</head>
    
            </div>
        </div>
    </body>
    <body>
<div class="container">
@yield('main')
</div>
<script>
</script>

@show
</body>
</html>
