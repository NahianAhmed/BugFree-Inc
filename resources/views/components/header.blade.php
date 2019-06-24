<head>
@php
use App\Setting;
$title=Setting::where('field','title')->first();
@endphp   <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$title->values}}</title>

    <meta name="keywords" content="{{$title->values}}" />
    <meta name="description" content="{{$title->values}}">
    <meta name="author" content="Nahian Ahmed">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="{{asset('public/asset/theme')}}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('public/asset/theme')}}/img/apple-touch-icon.png"> -->

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/animate/animate.min.css">
    <link rel="stylesheet"
        href="{{asset('public/asset/theme')}}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/theme')}}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{asset('public/asset/theme')}}/vendor/modernizr/modernizr.min.js"></script>

</head>
