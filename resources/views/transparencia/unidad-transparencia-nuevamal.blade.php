
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="Portal de transparencia del Partido Verde del Estado de México">
    <!-- keywords -->
    <meta name="keywords" content="Creative Startup, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Unidad de Transparencia PVEM</title>
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

    <!-- Graficas -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/britecharts/dist/css/britecharts.min.css" type="text/css"/> -->

    
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
        <!-- menu nav -->
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
                                    <li class="nav-item dropdown"><a class="nav-link scroll dropdown-toggle" data-toggle="dropdown" href="#">NOSOTROS<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-item" href="{{route('Estructura')}}">ESTRUCTURA</a></li>
                                        <li class="nav-item"><a class="nav-item" href="{{route('Historia')}}">HISTORIA</a></li>
                                    </ul>
                                </li>
                                    <li class="nav-item"><a class="nav-link scroll" href="{{route ('Candidatos')}}">CANDIDATOS</a></li>
                                    <li class="nav-item"><a class="nav-link scroll" href="{{route ('Noticias')}}">NOTICIAS</a></li>
                                    <li class="nav-item dropdown"><a class="nav-link scroll dropdown-toggle" data-toggle="dropdown" href="{{route ('Transparencia')}}">TRANSPARENCIA<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-item" href="{{route('Transparencia')}}">PORTAL DE TRANSPARENCIA</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-item" href="{{route('Unidad-Transparencia')}}">UNIDAD DE TRANSPARENCIA</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-item" href="{{route('Proteccion-Datos')}}">PROTECCIÓN DE DATOS PERSONALES</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-item" href="{{route('Archivo')}}">GESTIÓN DOCUMENTAL (ARCHIVO)</a></li>
                                    </ul>
                                </li>
                                    <li class="nav-item dropdown"><a class="nav-link scroll dropdown-toggle" data-toggle="dropdown" href="{{route ('Ecologista')}}">PUBLICACIONES</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-item" href="{{route('Ecologista')}}">EL ECOLOGISTA</a></li>
                                        <li class="nav-item"><a class="nav-item" href="{{route('Convocatorias')}}">CONVOCATORIAS</a></li>
                                        <li class="nav-item"><a class="nav-item" href="{{route('Guias')}}">GUÍAS</a></li>
                                    </ul>
                                </li>
                                    <li class="nav-item"><a class="nav-link scroll" href="{{route ('Atencion')}}">ATENCIÓN</a></li>
                                </ul>
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
                                <a class="nav-link scroll" href="{{route ('Inicio')}}">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Estructura')}}">NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Candidatos')}}">CANDIDATOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Noticias')}}">NOTICIAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Ecologista')}}">PUBLICACIONES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="{{route ('Atencion')}}">ATENCIÓN</a>
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
                        <p class="text-white">&copy; 2021 Partido Verde del Estado de México</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>
<!--Header End-->

<!--Team sec start-->
<section class="team-sec position-relative slider-area" id="team-sec">
    <div class="left-overlay" style="background-color:  #c8df8e;" ></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color:  #c8df8e;">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading" style="font-size: 45px;">TITULAR DE LA UNIDAD<span style="font-size: 40px; font-weight:lighter;">DE TRANSPARENCIA Y FUNCIONARIOS PARTIDISTAS HABILITADOS</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Mayra.webp')}}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>Titular de la Unidad de Transparencia</h4> 
                                        <br>Suplente: Susana Pichardo Pereyra</div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Mayra Erendira Gómez Bravo</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                                
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Dulce-Maria.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Secretaría de Organización</h4> 
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Dulce María Gutiérrez Becerril</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Hector-Paul.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Secretaría de Procesos Electorales</h4> 
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Héctor Paul López Quiroz</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Veronica.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Secretaría de Finanzas y Secretaría General</h4> 
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Verónica Pérez Martínez</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Abraham-Fabian.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Área Coordinadora de Archivo y Secretaría de Asuntos de la Juventud</h4>
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Abraham Fabián Hernández</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Susana-Pereyra.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Unidad de Transparencia y Secretaría de Ecología y Medio Ambiente</h4>
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Susana Pichardo Pereyra</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/alhely-rubio.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Área Jurídica</h4>
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Alhely Rubio Arronis</h4>
                                    <!-- <p class="team-designation">Creative Head</p> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Elizabeth-Pereyra.webp') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Secretaría de Comunicación Social y Secretaría de la Mujer</h4>
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">Elizabeth Pichardo Pereyra</h4>
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
&nbsp;
<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container" style=" background: linear-gradient( rgb(119, 168, 50, 0.7), rgb(50, 168, 91,0.7));">
            <div class="row no-gutters" >
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail" style="">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: #FFFFFF; font-family: Oswald, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">¿CÓMO SOLICITAR INFORMACIÓN?</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!--content-->
                        <div class="standalone-area">
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-4">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <h1 style="text-align: center;">PRESENCIAL</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" style="text-align: justify;">Presentado un escrito libre o llenar el formato, pudiendo hacerlo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México, o bien, entregándolo personalmente en el Módulo de Acceso el Comité Ejecutivo Estatal.</h2>
                                            <p style="text-align: justify; color: #FFFFFF;">Para obtener el formato da click <a href="{{ asset('pdf/formatos/Formato_Solicitud_Informacion_Publica.pdf') }}" target="_blank">aquí</a> </p>
                                        </div>
                                    </div>
                                </div>
                            <div class="wrapper">
                                <div class="divider div-transparent"></div>
                            </div>
                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters ">
                                    <div class="col-lg-4 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                        <h1 style="text-align: center;">VERBAL</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des-left">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" >Acudiendo directamente al Módulo de Acceso y/o la Unidad de Transparencia.</h2>
                                        </div>
                                    </div>
                                </div>
                            <div class="wrapper">
                                <div class="divider div-transparent"></div>
                            </div>
                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters">
                                    <div class="col-lg-4">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                        <h1 style="text-align: center;">POR ESCRITO</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des" >
                                        <div class="d-inline-block">
                                        <h2 class="gradient-text1" style="text-align: justify;">Haciéndolo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido verde Ecologista de México, o bien entregándolo personalmente.</h2>
                                        </div>
                                    </div>
                                </div>
                                <!--content-->
                            <div class="wrapper">
                                <div class="divider div-transparent"></div>
                            </div>
                                <!--content-->
                                <!--content-->
                                <div class="row standalone-row align-items-center no-gutters ">
                                    <div class="col-lg-4 order-lg-2">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                        <h1 style="text-align: center;">ELECTRÓNICA</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des-left">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" >Ingresando en el portal <a href="http://www.saimex.org.mx" target="_blank" rel="noopener noreferrer">SAIMEX</a> o bien en la <a target="_blank" href="https://www.plataformadetransparencia.org.mx">PNT</a>.</h2>
                                        </div>
                                    </div>
                                </div>
                            <div class="wrapper">
                                <div class="divider div-transparent"></div>
                            </div>
                                <!--content-->
                        </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--Qué es? content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; color:#FFFFFF !important; text-align: justify; background: linear-gradient(rgb(50, 168, 91,0.7), rgb(119, 168, 50, 0.7));">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading">TRANSPARENCIA</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!-- Transparencia  -->
                        <div class="single_blog">
                            <div class="single_detail">
                                <h2>¿Qué es Transparencia?</h2>
                                <span class="blog-text">Se encuentra directamente relacionada con el derecho a la información de la sociedad en general y sus objetivos son el fortalecimiento de un sistema democrático y participativo.</span>
                                <p class="blog-sub-heading text-center"><span></span>Fuente: <a href="https://www.infoem.org.mx/es/contenido/transparencia" target="_blank" rel="noopener noreferrer">https://www.infoem.org.mx/es/contenido/transparencia</a></p>
                            </div>
                        </div>
                        <!-- Transparencia proactiva -->
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <div class="single_blog">
                            <div class="single_detail">
                                <h2>¿Qué es Transparencia Proactiva?</h2>
                                <span class="blog-text">Es el conjunto de actividades e iniciativas ordenadas, que van más allá de las obligaciones que marca la ley. Conoce más en el siguiente link:</span>
                                <p class="blog-sub-heading text-center"><span></span>Fuente: <a href="https://www.infoem.org.mx/es/contenido/transparencia-proactiva" target="_blank" rel="noopener noreferrer">https://www.infoem.org.mx/es/contenido/transparencia-proactiva</a></p>
                            </div>
                        </div>
                        <!-- Transparencia proactiva -->
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <div class="single_blog">
                            <div class="single_detail " style="margin-bottom:2rem">
                                <h2>¿Qué es el Acceso a la Información Pública?</h2>
                                <span class="blog-text">Es la prerrogativa de las personas para buscar, difundir, investigar, recabar, recibir y solicitar toda la información pública generada, obtenida, administrada o en posesión de este Instituto Político que es pública y accesible sin necesidad de acreditar personalidad ni interés público.</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información (Anuala)</h5>
                    <div class="js-donut-chart-container3 donut-chart-container" style="width: 300px; height: auto; margin:auto;"></div>
                    <div class="js-legend-chart-container3 legend-chart-container"></div>
                </div>
<!--Portales de Transparencia start-->
<!-- <div class="col-sm-3" style="text-align: center;">
<canvas id="myChart" width="1" height="1"></canvas>

</div> -->
&nbsp;
<section class="team-sec position-relative" id="team-sec">
    <div class="right-overlay" style="background-color: #71b340"></div>
    <div class="container">
            
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #71b340">
            <div class="col-18 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                    <canvas id="myChart" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <canvas id="myChart1" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="http://www.ipomex.org.mx/"><img src="{{asset ('transparencia\img\Logos\logoIpomex.webp')}}" alt="SAIMEX"></a>
                                </div>
                                <div class="team-info">
                                    <h4 class="card-heading">IPOMEX</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <a target="blank" href="https://bit.ly/3p7w6KO"><img src="{{asset ('transparencia\img\Logos\logoDenuncias.webp')}}" alt="SAIMEX"></a>
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
                <div class="team-detail wow fadeInRight">
                    <h4 class="heading">GRÁFICAS</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Portales de transparencia End-->

<!--Team sec start-->
&nbsp;
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->


<!--testimonial section start-->
<div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <div class="right-overlay"></div>
    <div class="container">
        <div class="testimonial-area padding-top padding-bottom">
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
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center align-items-center text-center">
                        <div class="tags_sec">
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
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom">
            <div class="col-12 col-lg-4 text-center text-right" >
                <div class="team-detail wow fadeInLeft" style="">
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
                <p class="company-about fadeIn">© 2021 Partido verde del Estado de México
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.5.0/d3.min.js"></script>

<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
<script defer src="js/gmap.js"></script>

{{-- Charts --}}
<!-- <script src="https://cdn.jsdelivr.net/npm/britecharts@2/dist/bundled/britecharts.min.js"></script> -->
<!-- {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}} -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
<!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->


<!-- Gráficas -->
<script>

// graficas 2.0
var ctx = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['2016', '2017', '2018', '2019', '2020',],
        datasets: [{
            label: 'Solicitudes de Información',
            data: [5, 68, 11, 5, 11],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)', 'rgb(106,237,199)', ]
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            '2016',
            '2017',
            '2018',
            '2019',
            '2020',
        ],
        datasets: [{
            label: 'Solicitudes de Información',
            data: [9, 29, 25, 22, 15],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)', 'rgb(106,237,199)', ]
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//Chart Dona Recursos de Revision

let donutData = {
  data:[
    {name: "2016", id: 1, quantity: 5},
    {name: "2017", id: 2, quantity: 68},
    {name: "2018", id: 3, quantity: 11},
    {name: "2019", id: 4, quantity: 5},
    {name: "2020", id: 5, quantity: 11}
  ]
};

function createDonutChart() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    .highlightSliceById(2).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(300)
    .height(200)
    .numberFormat('i');

  donutContainer.datum(donutData.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container');
  legendContainer.datum(donutData.data).call(legendChart);


  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData.data).call(donutChart);

}
createDonutChart();

let donutData2 = {
  data:[
    {name: "2016", id: 1, quantity: 9},
    {name: "2017", id: 2, quantity: 29},
    {name: "2018", id: 3, quantity: 25},
    {name: "2019", id: 4, quantity: 22},
    {name: "2020", id: 5, quantity: 15}
  ]
};

function createDonutChart2() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container2'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    // .colorSchema(britecharts.colors.colorSchemas.green)
    .highlightSliceById(2).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(300)
    .height(200)
    // .colorSchema(britecharts.colors.colorSchemas.green)
    .numberFormat('i');

  donutContainer.datum(donutData2.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container2');
  legendContainer.datum(donutData2.data).call(legendChart);

  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData2.data).call(donutChart);
}createDonutChart2();



//Chart Dona Solicitudes de informacion

let donutData3 = {
  data:[
    {name: "No Tienen", id: 1, quantity: 2},
    {name: "Sí Cumple con los Requisitos para publicar", id: 2, quantity: 146},
    {name: "No Cumple con los Requisitos para publicar", id: 3, quantity: 177},
    {name: "No atenderon el requerimiento de INFOEM", id: 4, quantity: 255}
  ]
};

function createDonutChart3() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container3'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    .highlightSliceById(4).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(365)
    .height(200)
    .numberFormat('i');

  donutContainer.datum(donutData3.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container3');
  legendContainer.datum(donutData3.data).call(legendChart);


  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData3.data).call(donutChart);

}
createDonutChart3();

//Solicitudes de informacion 2020
function createBarChart(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 9 },
        { name: 'B', value: 12 },
        { name: 'C', value: 19 },
        { name: 'D', value: 2 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart();

//Recursos de revision 2020
function createBarChart2(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container2');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 1 },
        { name: 'B', value: 1 },
        { name: 'C', value: 0 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart2();

//Solicitudes de informacion 2019
function createBarChart3(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container3');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 17 },
        { name: 'B', value: 13 },
        { name: 'C', value: 29 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart3();

//Recursos de revision 2019
function createBarChart4(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container4');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 0 },
        { name: 'C', value: 1 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart4();

//Solicitudes de informacion 2018
function createBarChart5(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container5');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 10 },
        { name: 'B', value: 24 },
        { name: 'C', value: 33 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart5();

//Recursos de revision 2018
function createBarChart6(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container6');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 0 },
        { name: 'C', value: 1 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart6();

//Solicitudes de informacion 2017
function createBarChart7(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container7');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 33 },
        { name: 'B', value: 7 },
        { name: 'C', value: 27 },
        { name: 'D', value: 13 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart7();

//Recursos de revision 2017
function createBarChart8(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container8');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 2 },
        { name: 'B', value: 3 },
        { name: 'C', value: 5 },
        { name: 'D', value: 2 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart8();

//Solicitudes de informacion 2016
function createBarChart9(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container9');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 33 },
        { name: 'B', value: 0 },
        { name: 'C', value: 11 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart9();

//Recursos de revision 2016
function createBarChart10(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container10');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 1 },
        { name: 'C', value: 0 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart10();

//Sujetos oobligados que no atendieron el requerimiento del INFOEM
function createBarChart11(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container11');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 6 },
        { name: 'B', value: 3 },
        { name: 'C', value: 100 },
        { name: 'D', value: 39 },
        { name: 'E', value: 2 },
        { name: 'F', value: 27 },
        { name: 'G', value: 1 },
        { name: 'H', value: 69 },
        { name: 'I', value: 1 },
        { name: 'J', value: 7 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart11();

//Partidos politicos
function createBarChart12(){
    const barChart2 = britecharts.bar();
    const container2 = d3.select('.bar-container12');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 3 },
        { name: 'C', value: 0 },
        { name: 'D', value: 6 }
    ];

    // Configure chart
    barChart2
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container2.datum(barData).call(barChart2);
}
createBarChart12();
</script>

</body>
</html>