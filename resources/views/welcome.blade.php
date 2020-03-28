<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID-19 Hunger Tracker</title>

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
            body {
                background-image: url('img/background_blur.jpg');
                background-repeat: no-repeat;
                background-size: cover;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 10px 16px;
                margin-top: 24px;
                border-radius: 10px;
                font-size: 24px;
                background-color: #282828;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: block;
                border: 1px solid white;
            }
            img {
                min-height: 92px;
                max-height: 140px;
                background-color: white;
                padding: 6px 10px;
                border-radius: 60px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/logo.png" alt="Government of Haryana">
                </div>

                <div class="links">
                    <a href="https://recordinfo.typeform.com/to/wCeykF">Informer</a>
                    <a href="https://recordinfo.typeform.com/to/qXdWkx">Contributor</a>
                    <a href="{{ route('distributer') }}">Distributer</a>
                    <a href="">Dashboard</a>
                </div>
            </div>
        </div>
    </body>
</html>
