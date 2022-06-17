<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Word Global Sanctuary </title>
<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800|Roboto:400,500,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CMontserrat:600%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400%7CMontserrat:600%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/et-line-font/et-line-font.css')}}">
@yield('page_style')
</head>
<body>
<div id="church">
@include('pages.partials.header')
@yield('content')
@include('pages.partials.footer')
<a href="#" class="scrollup"></a> 
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script> 
<script src="{{asset('assets/js/popper.min.js')}}"></script> 
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/megamenu/js/main.js')}}"></script> 
<script src="{{asset('assets/js/scrolltotop/totop.js')}}"></script>
@yield('page_scripts')
</body>
</html>