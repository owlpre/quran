<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    {{ Html::style('bootstrap/3.3.7/dist/css/bootstrap.css') }}
    {{ Html::style('font-awesome/4.7.0/css/font-awesome.css') }}

    @include('layout.font')

    <style>
    body {
        font-family: Raleway;
    }
    </style>

    @yield('style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        {{ Html::script('bootstrap/3.3.7/dist/js/bootstrap.js') }}
        @yield('script')
    </body>
</html>