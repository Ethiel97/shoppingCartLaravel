<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>Shopping Cart with Laravel, Vue and Vuex</title>
</head>
<body>


<script>{{mix('js/app.js')}}</script>
</body>
</html>
