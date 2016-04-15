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
		
		{{-- favicon pada tab browser --}}
	<link rel="shortcut icon" href="aktiva/img/logo-canting.png"> 
	{{-- import Css dari link terkait dengan sintak blade--}}
	{{ Html::style('aktiva/css/bootstrap.min.css') }}
	{{ Html::style('aktiva/css/costume.login.css') }}

</head>
<body>

	<div>
		@yield('content')
	</div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    {{-- Jquery JS  --}}
    {{ Html::script('aktiva/js/jquery.js') }} 
    
    {{-- Bootstrap Core Js --}}
    {{ Html::script('aktiva/js/bootstrap.min.js') }}

</body>
</html>