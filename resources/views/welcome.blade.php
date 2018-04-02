<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf_token" content="{{ csrf_token() }}">
        <title>Laravel Todo App</title>



    </head>
    <body>
        <div class="container" id="app">
            Our tasks will be here..
        </div>

        <script {{ asset('js/app.js') }}></script>
    </body>
</html>
