
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
    <title>Acceso a la Información Pública PVEM</title>
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
    <!-- Iconos -->
    


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
                                      
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{route('Transparencia') }}">TRANSPARENCIA</a></li>
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Proteccion-Datos') }}">PROTECCIÓN DE DATOS PERSONALES</a></li>
                                      <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Archivo') }}">GESTIÓN DOCUMENTAL (ARCHIVO)</a></li>
                                     
                                      <li class="nav-item"><a class="nav-link scroll" href="{{ route('Proactividad') }}">PROACTIVIDAD</a></li> 
                                      <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Interes-Publico') }}">INTERÉS PÚBLICO</a></li>

                            </div>
                        </nav>
                        <ul class="top-social-links fixed-nav-links">
                            <li><a href="https://www.facebook.com/partidoverdeedomex" class="link-holder fb" style="max-width:28px !important; max-height:28px !important"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/verdeedomex?s=21" class="link-holder twit" style="max-width:28px !important; max-height:28px !important"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://youtube.com/c/PartidoVerdeEstadodeM%C3%A9xico" class="link-holder youtube" style="max-width:28px !important; max-height:28px !important"><i class="lab la-youtube"></i></a></li>
                            <li><a href="https://instagram.com/partidoverdeedomex?igshid=g0xgfergf9qm" class="link-holder insta" style="max-width:28px !important; max-height:28px !important"><i class="lab la-instagram"></i></a></li>
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
                        <ul class="top-social-links fixed-nav-links">
                            <li><a href="https://www.facebook.com/partidoverdeedomex" class="link-holder fb" style="max-width:28px !important; max-height:28px !important"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/verdeedomex?s=21" class="link-holder twit" style="max-width:28px !important; max-height:28px !important"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://youtube.com/c/PartidoVerdeEstadodeM%C3%A9xico" class="link-holder youtube" style="max-width:28px !important; max-height:28px !important"><i class="lab la-youtube"></i></a></li>
                            <li><a href="https://instagram.com/partidoverdeedomex?igshid=g0xgfergf9qm" class="link-holder insta" style="max-width:28px !important; max-height:28px !important"><i class="lab la-instagram"></i></a></li>
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

<!--Team sec start-->
<section class="team-sec position-relative slider-area" style="margin-bottom: 3rem;" id="team-sec">
<div style="background-image: url({{ asset('/transparencia/img/bg/hoja2-bg.webp') }});">
    <div class="left-overlay" style="background-color: rgba(0,0,0,0)!important;"></div>
    <div class="container">
        <div class="row inner-team-sec"  style="background-color: rgba(0,0,0,0) !important;">
            <div class="col-12 col-lg-4 text-center text-lg-left d-flex align-items-center" >
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading" style="font-size: 45px;">TITULAR DE LA UNIDAD<span style="font-size: 40px; font-weight:lighter;">DE TRANSPARENCIA Y FUNCIONARIOS PARTIDISTAS HABILITADOS</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <!--<div class="item text-center">
                            <div class="team-box">
                                <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/')}}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                       
                                        <div class="team-spec" style="color: white;">
                                        <h4>Titular de la Unidad de Transparencia</h4> 
                                        <br>Suplente: Susana Pichardo Pereyra</div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">titular de transparencia</h4>
                                   
                                </div>
                                
                            </div>
                        </div>
                        -->
                        <div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/comite-transparencia/profile.png') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        <!-- Team Social -->
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Secretaría de Organización</h4> 
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name"></h4>
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
                        
                        <!--<div class="item text-center">
                            <div class="team-box">
                            <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/') }}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                       
                                        <div class="team-spec" style="color: white;">
                                        <h4>FPH Área Jurídica</h4>
                                        </div>
                                    </div> 
                                </div>
                                <div class="team-info">
                                    <h4 class="team-name">area juridica</h4>
                                  
                                </div>
                            </div>
                        </div>-->
                        
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
    </div>
</section>
<!--Team sec End-->
&nbsp;
<!--main page content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container"  style="background-color: rgba(0,0,0,0) !important;">
            <div class="row no-gutters" >
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail" style="">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style=" color: black !important; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">¿CÓMO SOLICITAR INFORMACIÓN?</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!--content-->
                        <div class="standalone-area">
                                <div class="row standalone-row align-items-center no-gutters" style=" color: black !important;">
                                    <div class="col-lg-4">
                                        <div class="blog-image wow hover-effect fadeInLeft" style=" color: black !important;">
                                            <h1 style="text-align: center; color: black !important;">PRESENCIAL</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" style="text-align: justify; color: black;" >Presentado un escrito libre o llenar el formato, pudiendo hacerlo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México, o bien, entregándolo personalmente en el Módulo de Acceso el Comité Ejecutivo Estatal.</h2>
                                            <p style="text-align: justify;  color: black !important;">Para obtener el formato da click <a href="{{ asset('pdf/formatos/Formato_Solicitud_Informacion_Publica.pdf') }}" style="color: #50b948" target="_blank">aquí</a> </p>
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
                                        <h1 style="text-align: center; color: black">VERBAL</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des-left">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" style=" color: black !important;">Acudiendo directamente al Módulo de Acceso y/o la Unidad de Transparencia.</h2>
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
                                        <h1 style="text-align: center; color: black !important;">POR ESCRITO</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des" >
                                        <div class="d-inline-block">
                                        <h2 class="gradient-text1" style="text-align: justify; color: black !important;">Haciéndolo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido verde Ecologista de México, o bien entregándolo personalmente.</h2>
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
                                        <h1 style="text-align: center; color: black !important;">ELECTRÓNICA</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 stand-img-des-left">
                                        <div class="d-inline-block">
                                            <h2 class="gradient-text1" style=" color: black !important;">Ingresando en el portal <a href="http://www.saimex.org.mx" target="_blank" rel="noopener noreferrer">SAIMEX</a> o bien en la <a target="_blank" href="https://www.plataformadetransparencia.org.mx">PNT</a>.</h2>
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
        <div class="container" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; color:#FFFFFF !important; text-align: justify; background-color: #aad18c">
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
                                <h2 style="font-size: 45px;">¿Qué es Transparencia?</h2>
                                <div style="font-size: 26px;">
                                    <span class="blog-text">Se encuentra directamente relacionada con el derecho a la información de la sociedad en general y sus objetivos son el fortalecimiento de un sistema democrático y participativo.</span>
                                    <p class="blog-sub-heading text-center"><span></span>Fuente: <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" href="https://www.infoem.org.mx/es/contenido/transparencia" target="_blank" rel="noopener noreferrer">https://www.infoem.org.mx/es/contenido/transparencia</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Transparencia proactiva -->
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <div class="single_blog">
                            <div class="single_detail">
                                <h2 style="font-size: 45px;">¿Qué es Transparencia Proactiva?</h2>
                                <span class="blog-text" style="font-size: 26px;">Es el conjunto de actividades e iniciativas ordenadas, que van más allá de las obligaciones que marca la ley. Conoce más en el siguiente link:</span>
                                <p class="blog-sub-heading text-center"><span></span>Fuente: <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" href="https://www.infoem.org.mx/es/contenido/transparencia-proactiva" target="_blank" rel="noopener noreferrer">https://www.infoem.org.mx/es/contenido/transparencia-proactiva</a></p>
                            </div>
                        </div>
                        <!-- Transparencia proactiva -->
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <div class="single_blog">
                            <div class="single_detail " style="margin-bottom:2rem">
                                <h2 style="font-size: 45px;">¿Qué es el Acceso a la Información Pública?</h2>
                                <span class="blog-text" style="font-size: 26px;">Es la prerrogativa de las personas para buscar, difundir, investigar, recabar, recibir y solicitar toda la información pública generada, obtenida, administrada o en posesión de este Instituto Político que es pública y accesible sin necesidad de acreditar personalidad ni interés público.</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!-- Gráficas -->
<section class="team-sec position-relative" id="team-sec">
    <div class="right-overlay" style="background-color: white"></div>
    <div class="container">
            
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: white">
            <div class="col-18 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitud de Información (Anual)</h4>
                                    <canvas id="myChart" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de Revisión (Anual)</h4>
                                <canvas id="myChart1" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitudes de Información 2020</h4>
                                <canvas id="myChart2" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de revisión 2020</h4>
                                <canvas id="myChart3" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitudes de información 2019</h4>
                                <canvas id="myChart4" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de revisión 2019</h4>
                                <canvas id="myChart5" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitud de Información 2018</h4>
                                <canvas id="myChart6" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de revisión 2018</h4>
                                <canvas id="myChart7" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitud de Información 2017</h4>
                                <canvas id="myChart8" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de revisión 2017</h4>
                                <canvas id="myChart9" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Solicitud de Información 2016</h4>
                                <canvas id="myChart10" width="1" height="1"></canvas>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                            <h4 class="card-heading" style="color:black">Recursos de revisión 2016</h4>
                                <canvas id="myChart11" width="1" height="1"></canvas>
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
            <div class="col-12 col-lg-4 text-left text-md-right ">
                <div class="team-detail wow fadeInRight d-flex align-item-center">
                    <h4 class="heading" style="color: black;">Solicitud de Información y Recursos de Revisión</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Gráficas End-->

<!--Team sec start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay" style="background-color: rgba(255,255,255,1);"></div>
    <div class="container" >
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: rgba(255,255,255,1);">
            <div class="col-12 col-lg-8 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading" style="color: #79baa3;">¿QUÉ ES SAIMEX?</span></h4>
                    <p class="text" style="text-align: justify; font-size: 26px; color: black">
                    Se encuentra directamente relacionada con el derecho a la información de la sociedad en general y sus objetivos son el fortalecimiento de un sistema democrático y participativo.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters d-flex align-items-center">
                        <img src="{{asset ('transparencia\img\Logos\Saimex.webp')}}" alt="SAIMEX">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->


<!-- Qué es un rEcurso-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; color: #FFFFFF text-align: justify; background-image: linear-gradient(to right top, #7fc2a0, #90cda0, #a3d7a0, #b7e2a0, #ceeba0);">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem; ;">¿QUÉ ES UN RECURSO DE REVISIÓN?</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!-- Transparencia  -->
                        <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 28px; ">Se encuentra directamente relacionada con el derecho a la información de la sociedad en general y sus objetivos son el fortalecimiento de un sistema democrático y participativo.</p>
                            <div class="single_detail">
                                <h2 style="text-align: center; font-size: 26px; ">Formas de interponer un Recurso de Revisión</h2>
                            </div>    
                            <ul></p> <br>
                                <li style="text-align:justify; font-size:26px;"><span style="text-align: justify; font-weight: bold;  font-size: 28px;">Presencial.</span>  Presentado un escrito libre o llenar el <a href="{{ asset('pdf\formatos\Formato_Recurso_Revision.pdf') }}" target="_blank">formato</a>, pudiendo hacerlo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México, o bien, entregándolo personalmente en el Módulo de Acceso el Comité Ejecutivo Estatal.</li> <br>
                                <li style="text-align:justify; font-size:26px;"> <span style="text-align: justify; font-weight: bold;  font-size: 28px;">Verbal. </span> Acudiendo directamente al Módulo de Acceso y/o la Unidad de Transparencia. </li> <br>
                                <li style="text-align:justify; font-size: 26px;"><span style=" font-weight: bold;  font-family: Roboto, sans-serif; font-size: 28px;">Electrónica. </span> Ingresando en el portal SAIMEX <a style="color: #50b948;" href="https://www.saimex.org.mx" target="_blank">www.saimex.org.mx</a>  o bien en la PNT <a style="color: #50b948;" href="https://www.plataformadetransparencia.org.mx" target="_blank">www.plataformadetransparencia.org.mx</a></li> <br>
                            </ul> 
                        </div>
                        <br>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Versiones Públicas de Recursos de Revisión
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                            <table class="styled-table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: justify;">Nombre</th>
                                                        <th style="text-align: justify;">URL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Solicitud de Información</td>
                                                        <td><a class="linkhov" href="{{asset('pdf\formatos\Formato_Solicitud_Informacion_Publica.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>Recurso de Revisión presentado por ciudadano</td>
                                                        <td><a class="linkhov" target="blank" href="{{asset('pdf\formatos\Formato_Recurso_Revision.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>Respuesta de los Recursos de Revisión por parte de la Unidad de Transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="{{asset('pdf\formatos\Formato_Recepcion_Informacion.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!-- content-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content" >
        <div class="container" style="padding-top: 3rem;padding-bottom: 2rem; padding-left: 4rem; padding-right: 4rem; color:black !important; text-align: justify; background-color: white;">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: black; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">DENUNCIAS</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!-- Transparencia  -->
                        <div style="font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 26px;">Acto mediante el cual, cualquier persona hace del conocimiento del INFOEM la falta de publicación de las obligaciones de transparencia previstas en los artículos 92, 93, 100 y 103 de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios y demás disposiciones jurídicas aplicables a este Instituto Político, en sus respectivos ámbitos de competencia.</p>
                        <p class="lead" style="font-size: 26px;">Puedes presentar una denuncia a través de:</p>
                            <br>
                            <ul>
                                <li class="lead" style=" font-size: 26px;"><b>Sistema de Registro de Denuncias del INFOEM:</b><br><a onMouseOver="this.style.cssText='color: #50b948; font-size: 25px'" onMouseOut="this.style.cssText='color: #50b948;  font-size: 24px;'" target="_blank" style="color: #50b948;font-size: 24px;" href="https://www.transparenciaestadodemexico.org.mx/denciu/denuncia/insert.page">www.transparenciaestadodemexico.org.mx/denciu/denuncia/insert.page</a></li>
                                
                                <div style="text-align: center"><img class="img-movil" width="20%" src="{{ asset(('images\portales\logoInfoem.svg'))}}"></div>
                                <br>
                                <li class="lead" style=" font-size: 26px;"><b>Sistema de Denuncias de la Plataforma Nacional de Transparencia:</b><br><a onMouseOver="this.style.cssText='color: #50b948;font-size: 25px;'" onMouseOut="this.style.cssText='color: #50b948;  font-size: 24px;'" target="_blank" style="color: #50b948;font-size: 24px;"href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml ">consultapublicamx.inai.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml </a></li>
                                <div style="text-align: center"><img class="img-movil" width="30%" src="{{ asset(('transparencia\img\Logos\logoDenuncias1.webp'))}}"> <img class="img-movil" width="30%" src="{{ asset(('images\portales\logo-pnt.webp'))}}"></div>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!-- IPOMEX -->
<section>
    <div class="blog-content  text-center">
        <div class="right-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-center align-items-center text-center">
                        <div class="tags_sec">
                            <div class="col-12 d-flex justify-content-center align-items-center text-center text-lg-left">
                                <div class="testimonial-details wow fadeInLeft ">
                                    <h4 style="color: #fff; font-family: Roboto, sans-serif;font-size: 60px; font-weight: 700; text-align: center;">¿QUÉ ES IPOMEX?</h4>
                                    <p style="color: #fff; font-family: Roboto, sans-serif; font-size: 20px; text-align:justify; font-weight:100!important;">Sistema de Información Pública 
                                    de Oficio Mexiquense (IPOMEX) permite a los sujetos obligados publicar la información correspondiente a sus obligaciones de transparencia comunes y específicas, 
                                    así como cualquier otra información que considere conveniente difundir en materia de transparencia y acceso a la información conforme a las <a style="color: white" 
                                    target="_blank" href="{{ asset(('pdf/126_Tabla_Partido_PVEM.xlsx'))}}"><b>Tablas de Aplicabilidad</b></a> aprobadas por el pleno del IINFOEM.</p>
                                </div>
                            </div>
                            <br>
                            <!-- Acordeón -->
                        <div class="row">
                            <div id="accordion" class="col-sm-6" style="text-align: center">
                            <h4 style="color: #fff; font-family: Roboto, sans-serif;font-size: 40px; font-weight: 100; text-align: center;">Obligaciones Comunes</h4>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Artículo 92
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="styled-table">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: justify;">Fracción</th>
                                                        <th style="text-align: justify;">Nombre</th>
                                                        <th style="text-align: justify;">URL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>I</td>
                                                        <td>Normatividad Aplicable</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>II A</td>
                                                        <td>Estructura Orgánica</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/organigramas.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>II B</td>
                                                        <td>Organigrama</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>III</td>
                                                        <td>Facultades de cada área</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>IV</td>
                                                        <td>Metas y objetivos de las áreas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>V A</td>
                                                        <td>Indicadores de interés público</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>V B</td>
                                                        <td>Matriz de indicadores para resultados relacionados con temas de interés público o trascendencia social</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>VI A</td>
                                                        <td>Indicadores de objetivos y resultados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>VI B</td>
                                                        <td>Matriz de indicadores de resultados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>VII</td>
                                                        <td>El directorio de todos los servidores públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>VIII</td>
                                                        <td>Remuneraciones</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>IX</td>
                                                        <td>Gastos por concepto de viáticos y gastos de representación</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>X A</td>
                                                        <td>Plazas vacantes</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>X B</td>
                                                        <td>Total de plazas vacantes y ocupadas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XI</td>
                                                        <td>Contrataciones de servicios profesionales por honorarios</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XII</td>
                                                        <td>Perfil de los puestos de los servidores públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XIII</td>
                                                        <td>Declaraciones patrimoniales de los servidores públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XIV A</td>
                                                        <td>Programas de subsidios, estímulos y apoyos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XIV B</td>
                                                        <td>Padrón de benficiarios</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XV</td>
                                                        <td>Agenda de reuniones</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XVI</td>
                                                        <td>Domicilio de la Unidad de Transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XVII</td>
                                                        <td>Registros de solicitudes de acceso a la información recibidas y atendidas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XVIII</td>
                                                        <td>Convocatorias a concursos para ocupar cargos públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XIX</td>
                                                        <td>indices de los expedientes clasificados como reservados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XX A</td>
                                                        <td>Normatividad laboral</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XX B</td>
                                                        <td>Recursos públicos entregados a sindicatos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXI</td>
                                                        <td>Información curricular y sanciones administrativas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXII</td>
                                                        <td>Servicios públicos con sanciones administrativas definitivas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXIII</td>
                                                        <td>Servicios requisitos para acceder a ellos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXIV</td>
                                                        <td>Trámites, requisitos y formatos que ofrecen</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXV A</td>
                                                        <td>Presupuesto asigando</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXV B</td>
                                                        <td>Ejercicio de los egresos presupuestarios</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXV C</td>
                                                        <td>Información financiera de cuenta pública</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVI</td>
                                                        <td>Deuda pública</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVII A</td>
                                                        <td>Programa anual de comunicación social o equivalente</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVII B</td>
                                                        <td>Erogacion de los recursos por contratación de servicios</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVII C</td>
                                                        <td>Utilización de los tiempos oficiales</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVII D</td>
                                                        <td>Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXVIII</td>
                                                        <td>Resultados de auditorias realizadas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXIX A</td>
                                                        <td>Resultados de procedimeintos de licitación pública e invitación a cuando menos tres personas realiza</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXIX B</td>
                                                        <td>Resultados de procedimientos de adjudicación directa realizados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXX</td>
                                                        <td>Resultados de la dictaminación de los estados financieros</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXI</td>
                                                        <td>Personas que usan recursos públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXII</td>
                                                        <td>Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXIII</td>
                                                        <td>Informes emitidos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXIV</td>
                                                        <td>Estadísticas generadas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXV A</td>
                                                        <td>Gasto por capítulo, concepto y partida</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXV B</td>
                                                        <td>Informes financieros contables presupuestales</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVI</td>
                                                        <td>Padrón de proveedores y contrataistas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVII</td>
                                                        <td>Convenios de coordinación, de concertación con el sector social o privado</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII A</td>
                                                        <td>Inventario de bienes muebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII B</td>
                                                        <td>Inventario de altas practicadas a bienes muebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII C</td>
                                                        <td>Inventario de bajas practicadas a bienes muebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII D</td>
                                                        <td>Inventario de bienes inmuebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII E</td>
                                                        <td>Inventario de altas practicadas a bienes inmuebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_e.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII F</td>
                                                        <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_f.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXVIII G</td>
                                                        <td>Inventario de bienes muebles e inmuebles donados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_g.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXIX A</td>
                                                        <td>Recomendaciones emitidas por la CNDH</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXIX B</td>
                                                        <td>Casos especiales emitidos por la CNDH u otros organismos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XXXIX C</td>
                                                        <td>Recomendaciones emitidas por organismos internacionales</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XL</td>
                                                        <td>Resoluciones y laudos emitidos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xl.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLI A</td>
                                                        <td>Mecanismos de participación ciudadana</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLI B</td>
                                                        <td>Resultados de los mecanismos de participación</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLII A</td>
                                                        <td>Programas que ofrecen</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLII B</td>
                                                        <td>Trámites para acceder a programa que ofrecen</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIII A</td>
                                                        <td>Informe de sesiones del comité de transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIII B</td>
                                                        <td>Informe de resoluciones del comité de transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIII C</td>
                                                        <td>Integrantes del comité de transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIII D</td>
                                                        <td>Calendario de sesiones ordinarias del comité de transparencia</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIV A</td>
                                                        <td>Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIV B</td>
                                                        <td>Encuestas sobre programas financiados con recursos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLV</td>
                                                        <td>Estudios financiados con recursos públicos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVI A</td>
                                                        <td>Hipervínculo al listado de pensionados y jubilados</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVI B</td>
                                                        <td>Listado de jubilados y pensionados y el monto que reciben</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVII A</td>
                                                        <td>Ingresos recibidos por cualquier concpeto por el sujeto obligado</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVII B</td>
                                                        <td>Responsables de recibir, administrar y ejercer los ingresos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVIII A</td>
                                                        <td>Donaciones en dinero realizadas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLVIII B</td>
                                                        <td>Donaciones en especie realizadas</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>XLIX</td>
                                                        <td>Catálogo de disposición documental y guía simple de archivos</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>L A</td>
                                                        <td>Actas del consejo consultivo</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>L B</td>
                                                        <td>Opiniones y recomendaciones del consejo consultivo</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LI A</td>
                                                        <td>Solicitudes de intervención de comunicaciones</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LI B</td>
                                                        <td>Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LI C</td>
                                                        <td>Mensaje</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LII A</td>
                                                        <td>Información de interés público</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LII B</td>
                                                        <td>Preguntas frecuentes</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <tr >
                                                        <td>LII C</td>
                                                        <td>Trasnaprencia proactiva</td>
                                                        <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                    </tr>
                                                    <!-- and so on... -->
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                                <div id="accordion" class="col-sm-6" style="text-align: center">
                                <h4 style="color: #fff; font-family: Roboto, sans-serif;font-size: 40px; font-weight:100; text-align: center;">Obligaciones Específicas</h4>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Artículo 100
                                            </button>
                                        </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="styled-table">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: justify;">Fracción</th>
                                                                <th style="text-align: justify;">Nombre</th>
                                                                <th style="text-align: justify;">URL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>I</td>
                                                                <td>Padrón de afiliados o militantes</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>II</td>
                                                                <td>Acuerdos y resoluciones</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>III</td>
                                                                <td>Convenios de participación con sociedad civil</td>
                                                                <td><a class="linkhov" target="blank" href="Convenios de participación con sociedad civil"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>IV</td>
                                                                <td>Contratación y convenios de bienes y servicios</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>V</td>
                                                                <td>Minutas de sesiones del partido</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>VI</td>
                                                                <td>Responsables de finanzas</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>VII</td>
                                                                <td>Organizaciones sociales</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>VIII</td>
                                                                <td>Cuotas ordinarias y extraordinarias de militantes</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>IX</td>
                                                                <td>Financiamiento privado</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>X</td>
                                                                <td>Aportantes a campañas y precampañas</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_x.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XI</td>
                                                                <td>Actas de asablea constitutiva</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XII</td>
                                                                <td>Demarcaciones electorales</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XIII</td>
                                                                <td>Tiempos que les corresponden en radio y TV</td>
                                                                <td><a class="linkhov" target="blank" href=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XIV</td>
                                                                <td>Documentos básicos, plataformas, programas de gobierno y mecanismos de designación</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XV</td>
                                                                <td>Directorios de órganos de dirección</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XVI</td>
                                                                <td>Tabulador de remuneraciones</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XVII</td>
                                                                <td>Curriculo de precandidatos y candidatos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XVIII</td>
                                                                <td>Curriculo de dirigentes</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XIX</td>
                                                                <td>Convenios de frente, coalición, fusión o de participación electoral con agrupaciones políticas nacionales</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XX</td>
                                                                <td>Convocatorias para eleccion de dirigentes y candidatos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXI</td>
                                                                <td>Responsbales de procesos de evaluación y selección de candidatos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXII</td>
                                                                <td>Financiamiento público para liderazgo político de las mujeres</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXIII</td>
                                                                <td>Resoluciones de órgano de control</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXIV A</td>
                                                                <td>Financiamiento público y descuentos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXIV B</td>
                                                                <td>Descuentos por motivo de las sanciones</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXV A</td>
                                                                <td>Finanzas y patrimonio</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXV B</td>
                                                                <td>Inventario de bienes inmuebles</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXV C</td>
                                                                <td>Inventario de altas practicadas a bienes inmuebles</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXV D</td>
                                                                <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXVI</td>
                                                                <td>Resoluciones de órganos disciplinarios</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXVII</td>
                                                                <td>Representantes Electorales</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXVIII</td>
                                                                <td>Mecanismos de control y supervisión de procesos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXIX</td>
                                                                <td>Fundaciones, asociaciones, centros, institutos de investigación o capacitación</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>XXX</td>
                                                                <td>Resoluciones de autoridad electoral sobre ingresos y gastos</td>
                                                                <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            
                            <div id="accordion" class="col-12" style="text-align: center; padding-top: 2rem;">
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Artículo 103
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="styled-table">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: justify;">Fracción</th>
                                                            <th style="text-align: justify;">Nombre</th>
                                                            <th style="text-align: justify;">URL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>I y II A
                                                                <br>
                                                                III A
                                                            </td>
                                                            <td>Listados con información de interés público</td>
                                                            <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>I y II B
                                                                <br>
                                                                III B
                                                            </td>
                                                            <td>Información de interés público</td>
                                                            <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        </div>
</section>
<!-- End Actas 2021 -->

<!-- MAPA -->
<section>
        
    </section>
<!-- MAPA  -->

<!--Team sec start-->
<section class="team-sec position-relative" id="team-sec" >
    <div class="left-overlay" style="z-index: -1; background-color: rgba(0,0,0,0) !important;""></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: rgba(0,0,0,0) !important;">
            <div class="content container" style="color: black">
                <h2 class="section-title wow fadeInRight" style="font-weight: bolder;">Módulo de Acceso y Unidad de Transparencia</h2>
                <div class="projects">
                    <h4  class="wow fadeInRight" style="font-weight: bolder;">Ubicación</h4>
                    <p class="lead wow fadeInRight" >República de Belice 109, Colonia Américas C.P. 50130, Toluca, Estado de México</p>
                    <div id="map" class="map-2"></div>
                    <div class="row">
                    <div class="col-md-5 padding-top" style="text-align: center;">
                        <h4 style="font-weight: bolder;">Teléfono</h4>
                        <p><a href="tel:+7229147192 ">722-914-7192</a></p>
                    </div>
                    <div class="col-md-5 padding-top" style="text-align: center;">
                        <h4 style="font-weight: bolder;">Horario y días de atención:</h4>
                        <p class="lead">Lunes a Viernes: 10:00h a 18:00h</p>
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
    <div class="container" style=" padding: 2rem;">
        <div class="section-heading">
            <div class="row">
                <div class="col-md-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading" style="padding-bottom: 1rem;">INFORMACIÓN DE<span>INTERÉS PÚBLICO</span></h4>
                </div>
                <p class="lead" style="text-align: justify;">De conformidad con lo establecido en los artículos 24, fracción XII, 92, fracción LII de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios y el lineamiento tercero de los <i>“Lineamientos para establecer el procedimiento de identificación y revisión de la información adicional que publicarán los Sujetos Obligados por considerarse de interés público”</i>, y en caso de cumplir con los requisitos necesarios, la misma será parte de la publicación del <b>Catálogo de información adicional que deberán publicar los Sujetos Obligados por considerarse de interés público.</b></p>
            </div>
                <div class="row">
                <div class="col-md-12 pt-5 d-flex justify-content-around">
                        <div class="col-md-4 pt-5">
                            <h4 class="card-heading" style="color:black; text-align: center;">Sujetos Obligados</h4>    
                            <canvas id="myChart12" width="1" height="1"></canvas>
                        </div>
                        <div class="col-md-4 pt-5 ">
                            <h4 class="card-heading" style="color:black; text-align: center;">Partidos Políticos</h4>    
                            <canvas id="myChart13" width="1" height="1"></canvas>
                        </div>
                        
                        
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 pt-5 d-flex justify-content-around flex-column" style="align-items: center !important;">
                    <h4 class="card-heading" style="color:black; text-align: center;">Sujetos Obligados que NO atendieron el requerimiento del INFOEM</h4>    
                    <div class="col-md-6">
                        <canvas id="myChart14" width="1" height="1"></canvas>
                    </div>
                </div>
            </div>

                <div class="wrapper" style="color: black;">
                    <div class="divider div-transparent"></div>
                </div>
            <div class="row">
                <p class="lead" style="text-align: justify">Los Sujetos Obligados debemos poner a disposición información que se considera es de interés pública, con la finalidad de que el Pleno del INFOEM determine si esta debe ser presentada a la ciudadanía; por lo anterior para el segundo semestre de 2019 y el primer semestre de 2020 el Instituto a través del <a style="color: #50b948" target="_blank" href="https://www.infoem.org.mx/es/contenido/acuerdo-cat%C3%A1logo-de-informaci%C3%B3n-adicional-que-deber%C3%A1n-publicar-los-sujetos-obligados"><u>Acuerdo mediante el cual  se aprueba el Catálogo de información adicional que deberán publicar los Sujetos Obligados por considerarse de interés público correspondiente al ejercicio 2019 y el primer semestre de 2020</u></a>, consideró que la misma no cumple con los requisitos; por lo que seguiremos trabajando.</p>
            </div>
        </div>
            <div class="wrapper">
                <div class="divider div-transparent"></div>
            </div>
            <h4 style="font-size: 40px;"><b class="fn"><a target="_blank" href="{{ asset(('pdf/informes/Informe_Anual_2020.pdf'))}}">Informes Anuales <ion-icon style="font-size: 22px" name="download-outline"></ion-icon></a></b></h4>
        
    </div>
</section>
<!--portfolio section end-->

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
<!--Footer End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->
 <!-- Integra2 -->
 <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=header&aut=partidoverdeedomex.org" type="text/javascript"></script>
 <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=body&aut=partidoverdeedomex.org" type="text/javascript"></script>

<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=footer&aut=partidoverdeedomex.org" type="text/javascript"></script>
<!-- JavaScript -->
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

<!-- MAPA -->
<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
<script defer src="js/gmap.js"></script>


<!-- Gráficas -->
<script>

// graficas 2.0
var ctx = document.getElementById('myChart14').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Partidos Políticos', 'Autónomo', 'Ayuntamientos', 'DIF', 'Fideicomisos', 'Organismos de Agua', 'Persona Jurídica Coectiva', 'Poder Ejecutivo', 'Poder Legislativo', 'Sindicato',],
        datasets: [{
            label: 'Partidos Políticos',
            data: [6, 3, 100, 39, 2, 27, 1, 69, 1, 7,],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)','rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)','rgb(57,194,201)', 'rgb(255,206,0)',]
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
var ctx = document.getElementById('myChart13').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'No tienen', 'No cumple con los requisitos para publicar', 'Sí cumple con los Requisitos para publicar', 'No atendió el requerimiento de INFOEM',],
        datasets: [{
            label: 'Partidos Políticos',
            data: [0, 3, 0, 6],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart12').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['No tienen', 'Sí cumple con los requisitos para publicar', 'No cumple con los requisitos para publicar', 'No atendieron el requerimiento de INFOEM',],
        datasets: [{
            label: 'Sujetos obligados',
            data: [2, 146, 177, 255],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart11').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Cumplimiento', 'Resolución', 'Cumplimiento/Incumplimiento', 'Entrega',],
        datasets: [{
            label: 'Recursos de Revisión 2020',
            data: [0, 1, 0, 0],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart10').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Por PNT', 'Por SAIMEX', 'Concluidas', 'Recurso de Revisión',],
        datasets: [{
            label: 'Solicitudes de Información 2019',
            data: [33, 0, 11, 1],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart9').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Cumplimiento', 'Resolución', 'Cumplimiento/Incumplimiento', 'Entrega',],
        datasets: [{
            label: 'Recursos de Revisión 2020',
            data: [2, 3, 5, 2],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart8').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Por PNT', 'Por SAIMEX', 'Concluidas', 'Recurso de Revisión',],
        datasets: [{
            label: 'Solicitudes de Información 2019',
            data: [33, 7, 27, 13],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart7').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Cumplimiento', 'Resolución', 'Cumplimiento/Incumplimiento', 'Entrega',],
        datasets: [{
            label: 'Recursos de Revisión 2020',
            data: [0, 0, 1, 0],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart6').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Por PNT', 'Por SAIMEX', 'Concluidas', 'Recurso de Revisión',],
        datasets: [{
            label: 'Solicitudes de Información 2019',
            data: [10, 24, 33, 1],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart5').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Cumplimiento', 'Resolución', 'Cumplimiento/Incumplimiento', 'Entrega',],
        datasets: [{
            label: 'Recursos de Revisión 2020',
            data: [0, 0, 1, 0],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart4').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Por PNT', 'Por SAIMEX', 'Concluidas', 'Recurso de Revisión',],
        datasets: [{
            label: 'Solicitudes de Información 2019',
            data: [17, 13, 29, 1],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Cumplimiento', 'Resolución', 'Cumplimiento/Incumplimiento', 'Entrega',],
        datasets: [{
            label: 'Recursos de Revisión 2020',
            data: [1, 1, 0, 0],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [ 'Por PNT', 'Por SAIMEX', 'Concluidas', 'Recurso de Revisión',],
        datasets: [{
            label: 'Solicitudes de Información',
            data: [9, 12, 19, 2],
            backgroundColor: ['rgb(57,194,201)', 'rgb(255,206,0)', 'rgb(255,167,26)', 'rgb(248,102,185)',]
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
<style>
    .map-2 {
    width: 100%;
    height: 18rem;
    border: 0;
    text-align: center;
}
    .styled-table {
    text-align: justify;
    width: 100% !important;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    /* background-color: #009879; */
    background-color: #50B948;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table  a:hover {
    
    color: #cee002;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    /* border-bottom: 2px solid #009879; */
    border-bottom: 2px solid #50B948;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    /* color: #009879; */
    color: #50B948;
}
</style>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>