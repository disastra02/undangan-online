<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="crsf-token" value="{{ csrf_token() }}"/>
    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div id="app">
        <admin></admin>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>