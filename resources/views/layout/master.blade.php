
<!doctype html>
<html lang="en">

<head>
	<title>Article</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="{{asset('plugins/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('plugins/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
</head>
@include('layout.header')
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
        @include('layout.navbar')

        @yield('content')

        @include('layout.footer')

        @yield('script')

        @yield('modal')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript --> 
</body>

</html>
