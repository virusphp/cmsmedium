<!DOCTYPE html>
<html>
<head>
	{{-- mmenangkap sebuah section tittle --}}
	<title>
		@yield('title')
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Asus, SonyEricsson, Motorola web design">
	{{-- import Css dari link terkait dengan sintak blade--}}
	{{ Html::style('aktiva/css/bootstrap.min.css') }}
	{{ Html::style('aktiva/css/agency.css') }}
	{{ Html::style('aktiva/font-awesome/css/font-awesome.min.css') }}
	{{ Html::style('aktiva/css/sb-admin.css') }}
	{{ Html::style('aktiva/css/plugin/morris.css') }}
	{{ Html::style('aktiva/css/costume.dashboard.css') }}

	<link rel="shortcut icon" href="{{ URL::to('aktiva/img/logo-canting.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="wrapper">
		{{-- header dan site bar dalam nav--}}
		 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			@include('includes.header')
			@include('includes.sitebar')
		</nav>
		{{-- content dasboard --}}
		<div id="page-wrapper">
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
		{{-- footer dashboard --}}
		@include('includes.footer')

	</div> {{-- penutup wapper --}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    {{-- Jquery JS  --}}
    {{ Html::script('aktiva/js/jquery.js') }} 
    
    {{-- Bootstrap Core Js --}}
    {{ Html::script('aktiva/js/bootstrap.min.js') }}

	{{-- Plugin JS --}}
	{{ Html::script('aktiva/js/jquery.easing.min.js') }}
	{{ Html::script('aktiva/js/jquery.fittext.js') }}
	{{ Html::script('aktiva/js/wow.min.js') }}
	{{ Html::script('aktiva/js/modalku.js') }}
	{{-- Costume Tema JS --}}
	{{ Html::script('js/creative.js') }}
</body>
</html>