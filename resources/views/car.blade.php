<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HolyCodeTest</title>

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

            .vehicle-price {
                margin-left: 30px;
                margin-top: 0;
            }

            .container {
                text-align: center;
            }

            /* .image {
                float: left;
            } */

        </style>
    </head>
    <body>
        <div class="container">
            <div class="vehicle-title">
                <h1>
                    {{$car->getData('car')->make}} {{$car->getData('car')->specification}} ({{$car->getData('yearOfProduction')}})
                </h1>
                <p>
                {{$car->getData('titleShort')->it_IT}}
                </p>
            </div>

            <div class="image">
                <img src="{{$car->getData('standardImages')[0]->url}}" alt="BMW" width="300">
            </div>

            <div class="vehicle-price">
                {{$car->getData('price')}} EUR
            </div>
        </div>
    </body>
</html>
