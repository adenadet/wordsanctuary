
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Your description">
    <meta name="author" content="Squarem Information Communications">

	<meta property="og:site_name" content="Word Sanctuary Global Website" /> <!-- website name -->
	<meta property="og:site" content="" />
	<meta property="og:title" content=""/> 
	<meta property="og:description" content="" />
	<meta property="og:image" content="" /> 
	<meta property="og:url" content="" /> 
	<meta name="twitter:card" content="summary_large_image"> 

    <!-- Webpage Title -->
    <title>Word Sanctuary Global</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap">
    <link rel="stylesheet" href="{{asset('nubis/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('nubis/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('nubis/css/swiper.css')}}">
	<link rel="stylesheet" href="{{asset('nubis/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarExample">
<div id="corner">
    @include('partials.nubis.navigation')
    @yield('main')
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
</div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('nubis/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('nubis/js/swiper.min.js')}}"></script>
    <script src="{{asset('nubis/js/scripts.js')}}"></script>
</body>
</html>