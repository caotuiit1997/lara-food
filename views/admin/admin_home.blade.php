<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('title', 'Giao diện chính')
        <title>@Yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('admin/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('admin/css/colors/blue.css')}}">

        <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
        <script src="{{ url('admin/js/sidebarmenu.js')}}"></script>
	    <script src="{{ url('admin/js/custom.min.js')}}"></script>

    </head>
    <body class="fix-header fix-sidebar card-no-border">
	    <div id="main-wrapper">
	        @include('admin.admin_left_sidebar')
	        <div class="page-wrapper">
	            <div class="container-fluid">
	                @include('admin.admin_header')
		        	@yield('content')
		    	</div>
			</div>
	    </div>
    </body>
</html>


