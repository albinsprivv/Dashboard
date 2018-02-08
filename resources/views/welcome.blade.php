<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        <title>OrionPID</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: url("{{ asset('img/background.jpeg') }}");
                background-size: cover;
                background-position: center right;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 5px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: color .4s ease-in-out;
            }

            .links > span {
              padding: 0 5px;
              font-size: 10px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-transform: uppercase;
            }

            .links > a:hover {
              color: #fff;
            }

            .links.powered-by > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 10px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
              transition: color .4s ease-in-out;
            }

            .links.powered-by > a:hover {
              color: #f39c12;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Orion<strong>PID</strong>
                </div>

                <div class="links">
                  @if (Route::has('login'))
                          @auth
                              <a href="{{ url('/home') }}">Go to Dashboard</a>
                          @else
                              <a href="{{ route('login') }}">Login Now</a>
                              <span>or</span>
                              <a href="{{ route('register') }}">Register</a>
                          @endauth
                  @endif
                </div>
                <div class="links powered-by">
                    <a href="https://laravel.com/">Powered by Laravel</a>
                </div>
            </div>
        </div>
    </body>
</html>
