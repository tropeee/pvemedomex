<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <title>Partido Verde I EDOMEX</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">

    {{-- Toastr --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

    <div class="animsition">

        <!-- Content CLick Capture-->

        <div class="click-capture"></div>

        <!-- Sidebar Menu-->

        <div class="menu">
          <span class="close-menu icon-cross2 right-boxed"></span>
          {{-- <div class="menu-lang right-boxed">
            <a href="" class="active">Eng</a>
            <a href="">Fra</a>
            <a href="">Ger</a>
          </div> --}}
          <ul class="menu-list right-boxed">
            <li class="active">
              <a  href="{{ route('Inicio') }}">Inicio</a>
              {{-- <ul>
                <li><a href="index.html">Classic</a></li>
                <li class="active"><a href="home-fullpage.html">Full page</a></li>
                <li><a href="../dark/index.html">Dark</a></li>
              </ul> --}}
            </li>
            <li>
              <a href="works.html">Nosotros</a>
              <ul>
                <li><a href="{{ route('Estructura') }}">Estructura</a></li>
                <li><a href="{{ route('Historia') }}">Historia</a></li>
                <li><a href="{{ route('Normatividad') }}">Normatividad</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Noticias</a>
              <ul>
                <li><a href="news-grid.html">Grid</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Transparencia</a>
              <ul>
                <li><a href="{{ route('Transparencia') }}">Portal de Transparencia</a></li>
                <li><a href="{{ route('Tablas-de-aplicabilidad') }}">Tablas de Aplicabilidad</a></li>
                <li><a href="{{ route('Articulos') }}">Artículos</a></li>
                <li><a href="{{ route('Avisos-de-privacidad') }}">Avisos de Privacidad</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Publicaciones</a>
              <ul>
                <li><a href="{{ route('Ecologista') }}">El Ecologista</a></li>
                <li><a href="about.html">Convocatorias</a></li>
                <li><a href="{{ route('Guias') }}">Guías</a></li>
              </ul>
            </li>
            <li>
                <a href="{{ route('Afiliacion') }}">Afiliación</a>
            </li>
            <li>
                <a href="{{ route('Atencion') }}">Atención</a>
            </li>
          </ul>
          <div class="menu-footer right-boxed">
            <div class="social-list">
              <a href="" class="icon ion-social-twitter"></a>
              <a href="" class="icon ion-social-facebook"></a>
              <a href="" class="icon ion-social-instagram"></a>
            </div>
            <div class="copy">© Partido Verde 2021. Estado de México<br> BitGob</div>
          </div>
        </div>

