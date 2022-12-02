
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="PVEM">
    <!-- description -->
    <meta name="description" content="Portal de transparencia del Partido Verde del Estado de México">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>Portal de Transparencia PVEM</title>
    <!-- Favicon -->
    <link href="{{asset ('images\Logo-32x32.png')}}" rel="icon">
    <!-- Bundle -->
    <link href="{{asset ('transparencia/vendor/css/bundle.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{asset ('transparencia/css/line-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/cubeportfolio.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/LineIcons.min.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset ('transparencia/vendor/css/wow.css" rel="stylesheet')}}">
    <!-- Style Sheet -->
    <link href="{{asset ('transparencia/css/blog.css')}}" rel="stylesheet">
    
    <link href="{{asset ('transparencia/css/style.css')}}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">

    
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Preloader -->
<div class="preloader">
    <div class="center">
        <div class="loader loader-32">
            <div class='loader-container'>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
                <div class='ball-wrapper'>
                    <div class='ball-holder'>
                        <div class='ball'></div>
                    </div>
                    <div class='shadow'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
<header id="home">

    <div class="inner-header">
        <!--main nav-->
        <div class="main-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-lg-3">
                        <a class=" simple-nav-logo" style="background-color:transparent;" href="{{route ('Inicio')}}">
                            <img src="{{asset ('images/Logo-72x72.png')}}" alt="logo">
                        </a>
                        <a class="navbar-brand fixed-nav-logo" href="{{route ('Inicio')}}">
                            <img src="{{asset ('images/logo-blanco.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="col-8 col-lg-9 simple-navbar">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{route ('Inicio')}}">INICIO</a></li>
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Unidad-Transparencia') }}">ACCESO A LA INFORMACIÓN PÚBLICA</a></li>
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Proteccion-Datos') }}">PROTECCIÓN DE DATOS PERSONALES</a></li>
                                      <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Archivo') }}">GESTIÓN DOCUMENTAL (ARCHIVO)</a></li>
                                     
                                     <li class="nav-item"><a class="nav-link scroll" href="{{ route('Proactividad') }}">PROACTIVIDAD</a></li>
                                      <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Interes-Publico') }}">INTERÉS PÚBLICO</a></li>
                                  
                                    
                            </div>
                        </nav>
                        <ul class="top-social-links fixed-nav-links">
                            <li><a href="https://www.facebook.com/partidoverdeedomex" class="link-holder fb" style="max-width:28px; max-height:28px"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/verdeedomex?s=21" class="link-holder twit" style="max-width:28px; max-height:28px"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://youtube.com/c/PartidoVerdeEstadodeM%C3%A9xico" class="link-holder youtube" style="max-width:28px; max-height:28px"><i class="lab la-youtube"></i></a></li>
                            <li><a href="https://instagram.com/partidoverdeedomex?igshid=g0xgfergf9qm" class="link-holder insta" style="max-width:28px; max-height:28px"><i class="lab la-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--toggle btn-->
        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div> 
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="bg-overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <div class="container">
                <div class="row w-100 side-menu-inner-content">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a href="#" class="navbar-brand"><img src="{{asset ('images\logo-blanco.png')}}" alt="logo"></a>
                </div>
                <div class="col-12 col-lg-8">
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Inicio')}}">PVEM (INICIO)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Transparencia')}}">TRANSPARENCIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Unidad-Transparencia')}}">ACCESO A LA INFORMACIÓN PÚBLICA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Proteccion-Datos')}}">PROTECCIÓN DE DATOS PERSONALES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Archivo')}}">GESTIÓN DOCUMENTAL (ARCHIVO)</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Interes-Publico')}}">INTERES PÚBLICO</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route('Proactividad')}}">PROACTIVIDAD</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-lg-4 d-flex align-items-center">
                    <div class="side-footer text-white w-100">
                        <div class="menu-company-details">
                            <span>(722) 914 7192</span>
                            <span>hola@partidoverdeedomex.org</span>
                        </div>
                        <ul class="social-icons-simple">
                            <li><a class="facebook-text-hvr" target="_blank" href="https://www.facebook.com/partidoverdeedomex"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a class="instagram-text-hvr"target="_blank"  href="https://twitter.com/verdeedomex?s=21"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a class="instagram-text-hvr"target="_blank"  href="https://youtube.com/c/PartidoVerdeEstadodeM%C3%A9xico"><i class="fab fa-youtube"></i> </a> </li>
                            <li><a class="instagram-text-hvr"target="_blank"  href="https://instagram.com/partidoverdeedomex?igshid=g0xgfergf9qm"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                        <p class="text-white">&copy; {{ date('Y') }} Partido Verde del Estado de México</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
<!--Header End-->

<!--SLider sec start-->
<section class="slider-area">
    <div class="bg-overlay" style="background-color: #56ba74;"></div>
    <div class="container position-relative" >
        <div class="inner-bg-overlay"></div>
        <div class="row">
            <div class="slider-detail col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".8s">
                <div class="slider-slide" >
                    <div class="slider-inner-content" style="padding-left: 2rem; padding-right: 2rem;">
                        <h4 class="slide-heading">Unidad de<span style="font-size: 40px !important;">Transparencia</span></h4>
                        <p class="slide-text" style="text-align: justify; ">Se encarga del dar seguimiento al acceso a información pública que 
                        ingresan de manera electrónica (SAIMEX), físicas o telefónicas y de la rendición de cuentas a través del sistema IPOMEX, 
                        además de las diversas actividades en cumplimiento con la materia de transparencia; poniendo a disposición de ciudadanía, 
                        de conformidad a sus obligaciones, atribuciones y funciones la información que obra en los archivos de las Secretarías y 
                        Áreas que integran este Comité Ejecutivo Estatal del Partido Verde Ecologista de México en el Estado de México. Entra y 
                        conoce nuestras acciones en materia de Transparencia.</p>
                        <a href="{{ route('Unidad-Transparencia') }}" class="btn anim-btn rounded-pill scroll">Ver más
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="slider-slide">
                    <div class="slider-inner-content" style="padding-left: 2rem; padding-right: 2rem;">
                        <h4 class="slide-heading" style="text-align: right; font-size:40px">Área Coordinadora<span style="font-size: 50px !important;"> de Archivos</span></h4>
                        <p class="slide-text" style="text-align: justify; ">Se encarga de la Gestión Documental y Archivos mejorando el tratamiento integral de la 
                            documentación a lo largo de su ciclo vital, a través de la ejecución de procesos de producción, organización, 
                            acceso, consulta valoración documental y la conservación.
                            Entra y conoce nuestras acciones en materia de Archivo.</p>
                        <a href="{{route ('Archivo')}}" class="btn anim-btn rounded-pill scroll">Ver más
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="slider-slide">
                    <div class="slider-inner-content" style="padding-left: 2rem; padding-right: 2rem;">
                        <h4 class="slide-heading" style="text-align: right; font-size:40px">Área de Protección<span style="font-size: 40px !important;">de Datos Personales</span></h4>
                        <p class="slide-text" style="text-align: justify; ">Los datos personales son toda aquella información que pertenece a una persona física o jurídica 
                            colectiva que puede ser usada para identificarla directa o indirectamente. Es por ello por lo que, en el Partido 
                            Verde Ecologista de México en el Estado de México, tutelamos tu información.
                            Entra y conoce nuestras acciones en materia de Protección de Datos personales.
                            </p>
                        <a href="{{route ('Proteccion-Datos')}}" class="btn anim-btn rounded-pill scroll">Ver más
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="slider-img col-12 col-lg-6 wow fadeInRight" data-wow-delay=".8s" data-depth="0.1">
                <div class="img-slide">
                    <img src="{{asset ('transparencia/img/portal-transparencia/mayra.webp')}}">
                </div>
                <div class="img-slide">
                    <img src="{{asset ('transparencia/img/portal-transparencia/Fabian.webp')}}">
                </div>
                <div class="img-slide">
                    <img src="{{asset ('transparencia/img/portal-transparencia/Edgar_Linares.webp')}}">
                </div>
            </div>
        </div>
        <div class="slider-arrows">
            <a href="javascript:void(0);" class="slider-arr slider-arr-up" id="slider-arr-up"><i class="fas fa-angle-up"></i></a>
            <a href="javascript:void(0);" class="slider-arr slider-arr-down" id="slider-arr-down"><i class="fas fa-angle-down"></i></a>
        </div>
    </div>
</section>
<!--SLider sec End-->

<!--About sec start-->
<!-- <section class="about-sec" id="about-sec">
    <div class="about-overlay" style="background-color: #a7d0b2"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                <div class="purple-overlay"></div>
                <div class="row no-gutters wow fadeInLeft">
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logoSARCOEM.svg')}}" alt="SARCOEM">
                            </div>
                            <h4 class="card-heading">SARCOEM</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logoSaimex.webp')}}" alt="SAIMEX">
                            </div>
                            <h4 class="card-heading">SAIMEX</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logoIpomex.webp')}}" alt="Ipomex">
                            </div>
                            <h4 class="card-heading">IPOMEX</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center" >
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logoDenuncias.webp')}}" alt="Ipomex" width="80%">
                            </div>
                            <h4 class="card-heading">REGISTRO DENUNCIAS</h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logoPNT.png')}}" alt="PORTAL NACIONAL DE TRANSPARENCIA">
                            </div>
                            <h4 class="card-heading">PORTAL NACIONAL DE TRANSPARENCIA </h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 services text-center">
                        <div class="service-card">
                            <div class="icon-holder">
                                <img src="{{asset ('transparencia\img\Logos\logo.webp')}}" alt="OBLIGACIONES DE TRANSPARENCIA">
                            </div>
                            <h4 class="card-heading">OBLIGACIONES DE TRANSPARENCIA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left" style="background-color: #a7d0b2">
                <div class="about-content wow fadeInRight" style="background-color:  #a7d0b2">
                    <div class="about-inner-content" style="text-align: justify;">
                        <h4 class="heading">PORTALES<span>DE TRANSPARENCIA</span></h4>
                        <!-- <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.
                        </p>
                        <p class="text">
                            Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy.
                        </p>
                        <a href="#about-sec" class="btn anim-btn rounded-pill">LEARN MORE
                        <span></span><span></span><span></span><span></span>
                        </a> 
                    </div>
                </div>
            </div>
                    
        </div>
    </div>
</section> -->
<!--About sec End-->

<!--Stats sec start-->
<!-- <section class="stats-sec padding-top padding-bottom" id="stats-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 stats-heading-area text-center">
                <span class="sub-heading">Lorem ipsum is simply dummy text </span>
                <h4 class="heading">AGENCY STATS & FACTS</h4>
                <p class="text">
                    Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.  Lorem Ipsum has been the industry’s standard dummy. Lorem ipsum is simply dummy text of the printing and typesetting.
                </p>
            </div>
        </div>
        <div class="row circular-wrap text-center">
            <div class="col-12 col-lg-4 wow bounceIn">
                <div id="circle" class="circle" data-value="0.77">
                    <h6 class="counter-num">257%</h6>
                </div>
                <h4 class="darkcolor">Increase in Sales year on year</h4>
            </div>
            <div class="col-12 col-lg-4 wow bounceIn">
                <div id="circletwo" class="circle" data-value="0.96">
                    <h6 class="counter-num">96%</h6>
                </div>
                <h4 class="darkcolor">Recommendation rate over the year</h4>
            </div>
            <div class="col-12 col-lg-4 wow bounceIn">
                <div id="circlethree" class="circle" data-value="0.75">
                    <h6 class="counter-num">317%</h6>
                </div>
                <h4 class="darkcolor">New ventures we became part of</h4>
            </div>
        </div>
    </div>
</section> -->
<!--Stats sec End-->

<!--Transparencia start-->
<section class="team-sec position-relative" id="team-sec" >
    <div class="right-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: white;">

            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="https://www.saimex.org.mx/"><img src="{{asset ('transparencia\img\Logos\Saimex.webp')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">SAIMEX</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="https://www.sarcoem.org.mx/"><img src="{{asset ('transparencia\img\Logos\logoSarcomex.svg')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">SARCOEM</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="http://www.ipomex.org.mx/"><img src="{{asset ('transparencia\img\Logos\logoIpomex.svg')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">IPOMEX</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="https://bit.ly/3p7w6KO"><img src="{{asset ('transparencia\img\Logos\logoDenuncias1.webp')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">REGISTRO DENUNCIAS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="https://bit.ly/2U1yUuS"><img src="{{asset ('transparencia\img\Logos\logoPNT.webp')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">PORTAL NACIONAL DE TRANSPARENCIA</h4>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="javascript:void(0);" class="team-nav team-prev" id="team-prev">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a href="javascript:void(0);" class="team-nav team-next" id="team-next">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-right">
                <div class="team-detail wow fadeInRight" >
                    <h4 class="heading" style="color:black;">PORTALES <span style="color:black;font-size: 40px;">DE TRANSPARENCIA</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->

<!--Team sec start-->
&nbsp;
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #8ecb7f;">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">COMITÉ <span style="font-size: 40px;">DE TRANSPARENCIA</span></h4>
                    <p class="text" style="text-align: justify;">
                    El Comité de Transparencia, sesiona de forma ordinaria y extraordinaria garantizando el funcionamiento para una correcta transparencia, rendición de cuentas, gestión documental y protección de datos personales.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Mayra.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Presidenta</h4> 
                                        <br>Suplente: Susana Pichardo Pereyra</div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Mayra Eréndira Gómez Bravo</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                                
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/comite-transparencia/fabian1.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Integrante</h4> 
                                        <br>Suplente: Abraham Fabian Hernández</div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Fabián Pérez Lopez</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/comite-transparencia/jorge-gomez.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Integrante</h4> 
                                        <br>Suplente: Alhely Rubio Arronis</div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Jorge Gómez Bravo</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/consejeros/romina.jpg') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Secretaría Técnica</h4> 
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Romina Poumian González</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/comite-transparencia/edgar-linares.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Integrante </h4><br>Suplente: Elizabeth Pichardo Pereyra
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Edgar Arturo Linares Olvera</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->

<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading">MARCO <span>NORMATIVO</span></h4>
                </div>
                <div class="col-md-12 pt-5">
                    

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                        <div class="cbp-item web logo" style="max-width: 450px;" >
                            <a target="blank" href="{{ asset('pdf/marco-normativo/Ley_de_Archivos_Administracion_de_Documentos_del_Estado_de_Mexico_y_Municipios.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('images\marco-normativo\leydearchivos.jpg')}}" alt="img" height="150px !important">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Ley de Archivos</h4>
                                        <p class="p-hover-des">Ley de Archivos y Administración de Documentos del Estado de México y Municipios.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf/marco-normativo/LeyDeTransparenciaAccesoALaInformacionPublicaDelEstadoDeMexicoYMunicipios.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('images\marco-normativo\Ley-de-Transparencia.jpg')}}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Ley de Transparencia</h4>
                                        <p class="p-hover-des">Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf/marco-normativo/LeyDeDatosPersonales.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('images\marco-normativo\Ley-de-Protección-de-Datos.jpg')}}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Ley de Protección de Datos</h4>
                                        <p class="p-hover-des">Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
<!-- 
                        <div class="cbp-item mobile web">
                            <a href="{{asset ('transparencia/img/p2.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('transparencia/img/p2.jpg')}}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Web Design</h4>
                                        <p class="p-hover-des">35 WP Anniversary</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item print logo development web mobile">
                            <a href="{{asset ('transparencia/img/p3.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('transparencia/img/p3.jpg')}}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Logo Design</h4>
                                        <p class="p-hover-des">35 WP Anniversary</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item logo development">
                            <a href="{{asset ('transparencia/img/p4.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{asset ('transparencia/img/p4.jpg')}}" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Development</h4>
                                        <p class="p-hover-des">35 WP Anniversary</p>
                                    </div>
                                </div>
                            </a>
                        </div> -->


                    </div>

                    <!-- <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button text-data wow fadeInUp" data-wow-delay="650ms">
                        <div class="row portfolio-foot-detail text-data-inner">
                            <div class="col-7 col-lg-4 offset-lg-6 text-left pl-4">
                                <span class="p-text">We've Completed More Then</span>
                                <h4 class="p-num">530</h4>
                                <span class="p-text">Projects for Our amazing Clients</span>
                            </div>
                            <div class="col-5 col-lg-2 d-flex justify-content-end align-items-center"><button class="btn green-btn rounded-pill">VIEW ALL<span></span><span></span><span></span><span></span></button> </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->


<!--testimonial section start-->
<div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <div class="right-overlay" style="background-color: #7dbc3a;"></div>
    <div class="container">
        <div class="testimonial-area padding-top padding-bottom" style="background-color: #7dbc3a;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left">
                        <div class="testimonial-details wow fadeInLeft">
                            <h4 class="heading">VERIFICACIONES <span>VIRTUALES OFICIOSAS</span></h4>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <div class="testimonial-carousel wow fadeInRight">
                            <div class="testimonial-box owl-carousel owl-theme">
                                <div class="item text-center">
                                    <div class="icon-holder ">
                                        <!-- <i class="fas fa-quote-right"></i> -->
                                    </div>
                                    <div class="img-holder">
                                        <a >
                                            <img src="{{asset ('images\verificacion-virtual-oficiosa\2017.jpg')}}">
                                        </a>
                                    </div>
                                    <h4 class="user-name">Verificación Virtual Oficiosa <br>del año 2017</h4>
                                </div>
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <!-- <i class="fas fa-quote-right"></i> -->
                                    </div>
                                    <div class="img-holder">
                                        <a target="_blank" href="{{ asset('pdf/vvo/2018.pdf') }}">
                                            <img src="{{asset ('images\verificacion-virtual-oficiosa\2018.jpg')}}">
                                        </a>
                                    </div>
                                    <h4 class="user-name">Verificación Virtual Oficiosa <br>del año 2018</h4>
                                </div>
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <!-- <i class="fas fa-quote-right"></i> -->
                                    </div>
                                    <div class="img-holder">
                                        <a target="_blank" href="{{ asset('pdf/vvo/2019.pdf') }}">
                                            <img src="{{asset ('images\verificacion-virtual-oficiosa\2019.jpg')}}">
                                        </a>
                                    </div>
                                    <h4 class="user-name">Verificación Virtual Oficiosa <br>del año 2019</h4>
                                </div>
                                <div class="item text-center">
                                    <div class="icon-holder">
                                        <!-- <i class="fas fa-quote-right"></i> -->
                                    </div>
                                    <div class="img-holder">
                                        <a target="_blank" href="{{ asset('pdf/vvo/2020.pdf') }}">
                                            <img src="{{asset ('images\verificacion-virtual-oficiosa\2020.jpg')}}">
                                        </a>
                                    </div>
                                    <h4 class="user-name">Verificación Virtual Oficiosa <br>del año 2020</h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial section end-->

<!--sponsers section start-->
<!-- <div class="sponser-sec padding-top" id="sponser-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sponser-tags owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                    <div class="item">
                        <img src="{{asset ('transparencia/img/brand4.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--sponsers section end-->

<!-- Actas 2021 -->
<section>
    <div class="blog-content padding-top text-center" style="padding-bottom: 0px;">
        <div class="right-overlay"></div>
            <div class="container" style="background-color: #96d591;">
                <div class="row">
                    <div class="col-12 justify-content-center align-items-center text-center">
                        <div class="tags_sec" style="background-color: #96d591;">
                            <div class="col-12 d-flex justify-content-center align-items-center text-center text-lg-left">
                                <div class="testimonial-details wow fadeInLeft ">
                                    <h4 style="color: #fff; font-family: Oswald, sans-serif;font-size: 60px; font-weight: 700;">Actas 2021</h4>
                                </div>
                            </div>
                            <div class="tags text-center text-lg-left wow fadeInLeft">
                                <div class="col-12 justify-content-center align-items-center text-center" style="color:white">
                                    <a href="{{asset('pdf\actas\acta de instalción.pdf')}}" target="_blank"><span class="rounded-pill">Acta de Instalación</span></a>
                                    <a target="blank" href="{{asset('pdf\actas\PRIMERA EXTRA.pdf')}}"><span class="rounded-pill">Primer Acta Extraordinaria</span></a>
                                    <a target="blank" href="{{asset('pdf\actas\SEGUNDA EXTRA.pdf')}}"><span class="rounded-pill">Segunda Acta Extraordinaria</span></a>
                                    <a target="blank" href="{{asset('pdf\actas\tecera extraordinaria_.pdf')}}"><span class="rounded-pill">Tercer Acta Extraordinaria</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!-- End Actas 2021 -->

<!--Sitios de interés start-->
&nbsp;
<section class="team-sec position-relative " id="team-sec">
    <div class="left-overlay" style="background-color: #7dc36d;"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #7dc36d;">
            <div class="col-12 col-lg-4 text-center text-right" >
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">SITIOS <span style="font-size: 40px;">DE INTERÉS</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <ul style="text-align: left; color: white" >
                                        <li style="font-weight: normal;"><a target="blank" href="https://home.inai.org.mx/">INAI</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.infoem.org.mx/">INFOEM</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.gob.mx/agn">Archivo General de la Nación</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://sna.org.mx/">Sistema Nacional Anticorrupción</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://portal.secogem.gob.mx/sistema-anticorrupcion-estado-mexico-municipios">Sistema Estatal Anticorrupción</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.transparency.org/en/">Transparencia Internacional</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.tm.org.mx/transparencia-internacional/">Transparencia Mexicana</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="http://www.amedi.org.mx/">Asociación Mexicana por el Derecho a la Información</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.alaarchivos.org/">Asociación Latinoamericana de Archivos</a></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <ul style="text-align: left; color: white">
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.redipd.org/es">Red Iberoamericana de Protección de Datos</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.ica.org/es">Internacional Council on Archives</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://globalprivacyassembly.org/">Global Privacy Assembly</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="https://www.informationcommissioners.org/">INTERNATIONAL CONFERENCE OF INFORMATION COMMISSIONERS</a></li>
                                        <li style="font-weight: normal;"><a target="blank" href="http://www.programaanticorrupcion.gob.mx/"> Comisión Intersecretarial para la Transparencia y el Combate a la Corrupción (CITCC)</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <ul style="text-align: left; color: white">
                                    <li style="font-weight: normal;"><a target="blank" href="http://www.colectivoporlatransparencia.org.mx/">Colectivo por la Transparencia</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="https://redrta.org/">Red de Transparencia y Acceso a la Información</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="https://www.mexicoevalua.org/"> México Evalúa</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="https://contralacorrupcion.mx/">Mexicanos contra la corrupción y la Impunidad</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="http://www.hagaloustedmismo.gob.mx/">Hágalo usted mismo (Su Caja de Herramientas contra la Corrupción)</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="http://www.cimtra.org.mx/">Ciudadanos por Municipios Transparentes (CIMTRA)</a></li>
                                    <li style="font-weight: normal;"><a target="blank" href="http://www.limac.org.mx/">Libertad de Información-México A.C. (LIMAC)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Sitios de interés End-->


<!--Footer Start-->
<footer class="footer-style-1">

    <div class="container">
        <div class="row align-items-center">
            <!--Text-->
            <div class="col-lg-4 text-center text-lg-left">
                <div class="flex-item">
                    <a href="{{route ('Inicio')}}"><div class="brand-info">
                        <div class="brand-text">Estado de</div>
                        <div class="brand-name">México</div>
                    </div>
                    </a>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-4 text-center text-lg-center">
                <p class="company-about fadeIn">© {{ date('Y') }} Partido verde del Estado de México
                </p>
            </div>
            <!--Social-->
            <div class="col-lg-4">
                <div class="footer-social text-center text-lg-right ">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="https://www.facebook.com/partidoverdeedomex/"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="https://twitter.com/verdeedomex?s=20"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="https://www.instagram.com/partidoverdeedomex/?hl=es-la"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</footer>

 <!-- Integra2 -->
 <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=header&aut=partidoverdeedomex.org" type="text/javascript"></script>
 <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=body&aut=partidoverdeedomex.org" type="text/javascript"></script>

<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=footer&aut=partidoverdeedomex.org" type="text/javascript"></script>
<!-- JavaScript -->
<!--Footer End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<!-- JavaScript -->
<script src="{{asset ('transparencia/vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{asset ('transparencia/vendor/js/jquery.appear.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/parallaxie.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/wow.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset ('transparencia/vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset ('transparencia/vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- google map-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>-->
<!--<script src="/js/map.js"></script>-->
<!--Tilt Js-->
<script src="{{asset ('transparencia/js/slick.js')}}"></script>
<script src="{{asset ('transparencia/js/slick.min.js')}}"></script>
<!-- custom script-->
<script src="{{asset ('transparencia/js/circle-progress.min.js')}}"></script>

<script src="{{asset ('transparencia/vendor/js/contact_us.js')}}"></script>
<script src="{{asset ('transparencia/js/script.js')}}"></script>

</body>
</html>