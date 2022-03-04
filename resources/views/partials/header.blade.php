<head>
    <meta charset="utf-8">
	<title>@yield('titulo')</title>
	<meta name="description" content="@yield('descripcion')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="PVEM">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@verdeedomex">
    <meta name="twitter:title" content="@yield('titulo')">
    <meta name="twitter:description" content="@yield('descripcion')">
    <meta name="twitter:creator" content="@verdeedomex">
    <!-- Twitter Summary card images. Igual o superar los 200x200px -->
    <meta name="twitter:image" content=" <a href='@yield('imagen')'>@yield('imagen')</a>">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="@yield('titulo')">
    <meta itemprop="description" content="@yield('descripcion')">
    <meta itemprop="image" content="@yield('imagen')">
    <!-- Open Graph data -->
    <meta property="og:title" content="@yield('titulo')" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="@yield('url')" />
    <meta property="og:image" content="@yield('imagen')" />
    <meta property="og:description" content="@yield('descripcion')" />
    <meta property="og:site_name" content="Partido Verde Estado de México" />


    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <title>Partido Verde I EDOMEX</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
    {{-- <link href="css/style.css" rel="stylesheet" media="screen"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">

    {{-- Toastr --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script> 

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-53HFL3X');</script>
    <!-- End Google Tag Manager -->

</head>
