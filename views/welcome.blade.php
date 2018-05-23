<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@Yield('title')</title>

        @include('layouts/static_header')

        

        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        @include('layouts/header')
        @yield('content')
        @include('layouts/footer')
    </body>
</html>
<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});


