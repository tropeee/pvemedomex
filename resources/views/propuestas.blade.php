<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Partido Verde Estado de México">
<meta name="author" content="Partido Verde Estado de México">

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Partido Verde I EDOMEX</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
{{-- <link href="css/style.css" rel="stylesheet" media="screen"> --}}
{{-- <link  href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen"> --}}

<!-- Google Tag Manager -->
<script defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-53HFL3X');</script>
<!-- End Google Tag Manager -->

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
        <ul class="menu-list right-boxed">
          <li class="active">
            <a  href="{{ route('Inicio') }}">Inicio</a>
          </li>
          <li>
            <a href="#">Nosotros</a>
            <ul>
              <li><a href="{{ route('Estructura') }}">Estructura</a></li>
              <li><a href="{{ route('Historia') }}">Historia</a></li>
              {{-- <li><a href="{{ route('Normatividad') }}">Normatividad</a></li> --}}
            </ul>
          </li>
          <li>
            <a href="{{ route('Candidatos') }}">Candidatos</a>
          </li>
          <li>
            <a href="{{ route('Noticias') }}">Noticias</a>
          </li>
          <li>
            <a href="#">Transparencia</a>
            <ul>
              <li><a href="{{ route('Transparencia') }}">Portal de Transparencia</a></li>
              <li><a href="{{ route('Unidad-Transparencia') }}">Unidad de Transparencia</a></li>
              <li><a href="{{route ('Proteccion-Datos')}}">Protección de Datos Personales</a></li>
              <li><a href="{{route ('Archivo')}}">Gestión Documental (Archivo)</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Publicaciones</a>
            <ul>
              <li><a href="{{ route('Ecologista') }}">El Ecologista</a></li>
              <li><a href="{{ route('Convocatorias') }}">Convocatorias</a></li>
              <li><a href="{{ route('Guias') }}">Guías</a></li>
              <li><a href="{{ route('Comunicados') }}">Comunicados</a></li>
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
                <a href="https://twitter.com/verdeedomex" class="icon ion-social-twitter"></a>
                <a href="https://www.facebook.com/partidoverdeedomex" class="icon ion-social-facebook"></a>
                <a href="https://www.instagram.com/partidoverdeedomex" class="icon ion-social-instagram"></a>
              </div>
          <div class="copy">© Partido Verde Estado de México</div>
        </div>
      </div>

    <!-- Navbar -->

    <header class="navbar navbar-2 navbar-white boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand" href="{{ route('Inicio') }}">
        <img class="brand-img" alt="" src="images/Logo-72x72.png">
        <img class="brand-img-white" alt="" src="images/logo-blanco.png">
        <div class="brand-info">
          <div class="brand-text">Estado de</div>
          <div class="brand-name">México</div>
        </div>
      </a>
      <div class="social-list hidden-xs">
        <a href="https://twitter.com/verdeedomex" class="icon ion-social-twitter"></a>
        <a href="https://www.facebook.com/partidoverdeedomex" class="icon ion-social-facebook"></a>
        <a href="https://www.instagram.com/partidoverdeedomex" class="icon ion-social-instagram"></a>
      </div>
    </header>

  <div class="copy-bottom white boxed">© Partido Verde Estado de México</div>
    <div class="pagepiling">

        <!-- APARTADO CARRUSEL 1 -->

        <div class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
            <div class="scrollable-content">
                <div class="vertical-centred1">
                    <div class="estilo1">
                    
                        <div class="container1">
                        <!-- CHILD 0 -->
                        <div class="box">
                            <div class="contenido">
                            <p style="font-size: 6rem; font-weight: 700;">¡Checa Nuestras Propuestas!</p>
                            </div>
                        </div>
                        <!-- CHILD 1 -->
                        <div class="box">
                            <div class="contenido">
                            <img src="{{asset('images\icons\planet-earth.svg')}}" width="128px" alt="">
                            <!-- Propuesta 2  -->
                            <p>Tener un compromiso irrestricto por el mantenimiento, conservación y cuidado del medio ambiente en el Estado de México, para generar un entorno sustentable en el campo, así como en las zonas urbanas y metropolitanas.</p>
                            </div> 
                        </div> 
                        <!-- CHILD 2  -->
                        <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\conversation.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 1 -->
                                <p>Generar certeza de la imparcialidad, integridad, lealtad, honradez y eficiencia de su actuar en el ejercicio de su encargo, realizando una permanente comunicación con la ciudadanía.</p>
                            </div> 
                            </div> 
                            <!-- CHILD 3 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\transgender.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 3 -->
                                <p>Impulsar de manera contundente la paridad de género, así como un trato igualitario y respetuoso para las mujeres y los grupos vulnerables.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 4 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\bullying.svg')}}" width="128px" alt=""> 
                                <!-- Propuesat 5 -->
                                <p>Generar modelos de Gobierno de cero Discriminación, donde los Derechos Fundamentales sean el centro del desarrollo de las políticas públicas, donde no exista distingo por origen étnico o nacional, género, edad, discapacidades, condición social, condiciones de salud, religión, opiniones, preferencias sexuales, estado civil o cualquier otro que atente contra la dignidad humana y tenga por objeto anular o menoscabar los derechos y libertades de las personas.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 5 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\boy.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 4 -->
                                <p>Impulsar una infancia feliz, libre de violencia y con garantías sostenibles de educación, salud y vivienda, para con ello garantizar la reconstrucción del tejido social.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 6 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\politician.svg')}}" width="128px" alt="">
                                <!-- Propuesta 6 -->
                                <p>Fomentar en la vida pública la inclusión de los jóvenes, para esta corriente política; los jóvenes no son el futuro sino el presente, son el cambio y la forma innovadora de generar nuevas formas para solucionar problemas en la sociedad.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 7 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\raise-hand.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 9 -->
                                <p>Un compromiso permanente con el desarrollo democrático de la ciudadanía y con la democracia participativa, para lo cual voluntarios verdes escucharán al pueblo mexiquense para con ello construir juntos Municipios y Distritos donde todos sean escuchados.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 8 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\law.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 8 -->
                                <p>Erradicar la corrupción. Promoviendo la cultura de la legalidad y el respeto a la ley sin distingo alguno.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 9 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\bible.svg')}}" width="128px" alt=""> 
                                <!-- Propuesta 7 -->
                                <p>Una absoluta transparencia patrimonial y rendición de cuentas; los candidatos electos deberán declarar bajo protesta de decir verdad su patrimonio, así como el origen licito del mismo.</p> 
                            </div> 
                            </div> 
                            <!-- CHILD 10 -->
                            <div class="box"> 
                            <div class="contenido"> 
                                <img src="{{asset('images\icons\love.svg')}}" width="128px" alt=""> 
                                <p>Promover en todo tiempo una cultura de tolerancia, no violencia y paz del pueblo Mexiquense.</p> 
                            </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
                </div> 
            </div> 
            </div>
        </div>
</div>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/animsition.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script defer src="{{ asset('js/smoothscroll.js')}}"></script>
<script defer src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script defer src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.pagepiling.js')}}"></script>
<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
{{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDA15Dq6sL2PVTk_U9_1Byq-EfiAINwO94"></script> --}}
<script defer src="js/gmap.js"></script>

<!-- Scripts -->
<script defer src="{{ asset ('js/scripts.js')}}"></script>

</body>
</html>