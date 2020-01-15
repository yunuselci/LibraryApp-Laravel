

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
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

            <div class="content">
                <div class="title m-b-md">
                    Simple Library
                    <br>
                </div>
                <div class="align-content-xl-center">
                    <h3>Çalışmak kendimize, ailemize, milletimize vatan, namus borcudur. </h3>
                    <p>-Aziz Sancar</p>
                    <br>

                </div>

                <div class="links">
                    <a href=/books>Books <img src="data:image/png;base64,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" alt="books" style="width:14px;height:14px;"></a>
                    <a href="https://github.com/yunuselci/LibraryApp">LibraryApp on Github!<img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub" style="width:15px;height:15px;"></a>
                </div>
            </div>
        </div>
    </body>
</html>
