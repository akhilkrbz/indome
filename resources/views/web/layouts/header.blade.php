<head>
    <title>{{ session('main_page') }} - {{ session('sub_page') }}</title>
    <meta charset="utf-8">
    <!--add responsive layout support-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--include favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!--fonts include-->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,400italic,500italic,300italic,100italic,100,700italic,900,900italic,700'
        rel='stylesheet' type='text/css'>
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/plugins/layerslider/css/layerslider.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/plugins/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/plugins/jackbox/css/jackbox.min.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('web/css/style.css') }}">
    <!--[if lte IE 10]><link rel="stylesheet" type="text/css" media="screen" href="css/ie.css"><![endif]-->
    <!--head libs-->
    <!--[if lte IE 8]>
			<style>
				#preloader{display:none !important;}
			</style>
		<![endif]-->
    <script src="{{ asset('web/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('web/js/modernizr.js') }}"></script>
</head>