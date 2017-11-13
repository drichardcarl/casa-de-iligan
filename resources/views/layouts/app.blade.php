<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Referencing Bootstrap CSS that is hosted locally -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        @yield('addons')
        <title>Casa de Iligan - Where you can find your Home</title>
    </head>
    <body>
        @include('includes.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
