
<!DOCTYPE html>
<html lang="en" class="hydrated">
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
    <title>Protección de Datos Personales PVEM</title>
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
<header id="home" style="z-index: 10000;">

    <div class="inner-header">

        <div class="main-navigation">
            <!-- main nav -->
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
                                    
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Unidad-Transparencia') }}">ACCESO A LA INFORMACIÓN PÚBLICA</a></li>
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
        <!-- <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
            <span></span>
            <span></span>
            <span></span>
        </a> -->
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
                        <ul class="top-social-links fixed-nav-links">
                            <li><a href="https://www.facebook.com/partidoverdeedomex" class="link-holder fb" style="max-width:28px; max-height:28px"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/verdeedomex?s=21" class="link-holder twit" style="max-width:28px; max-height:28px"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://youtube.com/c/PartidoVerdeEstadodeM%C3%A9xico" class="link-holder youtube" style="max-width:28px; max-height:28px"><i class="lab la-youtube"></i></a></li>
                            <li><a href="https://instagram.com/partidoverdeedomex?igshid=g0xgfergf9qm" class="link-holder insta" style="max-width:28px; max-height:28px"><i class="lab la-instagram"></i></a></li>
                        </ul>
                        <!-- <p class="text-white">&copy; 2021 Partido Verde del Estado de México</p> -->
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
<div style="background-image: url({{ asset('images/bg/hojas.jpg') }}); padding-bottom: 3rem; padding-top: 3rem;">
    <div class="left-overlay1"></div>
    <div class="container">
        <div class="row inner-team-sec1 padding-bottom" >
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading" style="font-size: 45px;">ÁREA DE PROTECCIÓN<span style="font-size: 40px; font-weight:lighter;">DE DATOS PERSONALES</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-8 align d-flex align-items-center">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters ">
                        <div class="item text-center">
                            <div class="team-box">
                                <!-- <div class="img-holder position-relative">
                                    <img src="{{ asset('images/estructura/Mayra.webp')}}">
                                    <div class="overlay d-flex justify-content-center align-items-center">
                                        
                                        <div class="team-spec" style="color: white;">
                                        <h4>Titular de la Unidad de Transparencia</h4> 
                                        <br>Suplente: Susana Pichardo Pereyra</div>
                                    </div> 
                                </div> -->
                                <div class="team-detail wow fadeInRight">
                                    <h4 class="team-spec" style="color: white; text-align: justify; vertical-align: middle;">El Partido Verde Ecologista de México en el Estado de México establece las bases, principios y procedimientos para tutelar y garantizar el derecho que tiene toda persona a la protección de sus datos personales en posesión de este Instituto Político</h4>
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
<section class="portfolio-sec company-portfolio-section padding-top">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading" style="    margin-bottom: -42px;font-size: 16px;">Información relevante en materia de Protección de Datos Personales</h4>
                  
                </div>
                
                <div class="col-md-12 pt-5">
                <div class="title-hr" ><div class="title-hr2" ></div></div>

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic" style="    margin-left: 10%;"> <!-- problema -->
                      
                        
                        <div class="cbp-item web logo" style="max-width: 350px;">
                            <a target="blank" href="{{ asset('pdf\Datos personales\guia_datos_personales_version_digital.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\guia1.jpg"  alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">GUÍA ORIENTADORA</h4>
                                        <p class="p-hover-des">La protección de Datos Personales en plataformas digitales</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 350px;">
                            <a target="blank" href="{{ asset('pdf/marco-normativo/LeyDeDatosPersonales.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\guia2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">GUÍA ORIENTADORA</h4>
                                        <p class="p-hover-des">Protección de Datos Personales como herramienta para prevenir la violencia digital</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <br>
                    <center> <h2> <b> VISITANTES:</b></h2> <br>
    <!-- Start of CuterCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.cutercounter.com/hits.php?id=hmvxaoxdf&nd=5&style=115" border="0" alt="best free website hit counter"></a>
<!-- End of CuterCounter Code --></center>
            </div>
        </div>
    </div>
</section>
<!--Qué es? content-->
<section class="main" id="main">
    <div class="blog-content">
        <div class="container" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; color:#FFFFFF !important; text-align: justify; background: linear-gradient(rgb(50, 168, 91,0.7), rgb(119, 168, 50, 0.7));">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading">PROTECCIÓN DE DATOS PERSONALES</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!-- Transparencia  -->
                        <div class="single_blog">
                            <div class="single_detail">
                                <h4 class="heading" style="color:white">¿Qué es la Protección de los Datos Personales?</h4>
                                <p class="lead" style="text-align: justify; font-size: 20px;">Es un derecho humano fundamental que nos otorga el poder de controlar la información personal que compartimos con otras personas e instituciones para prevenir cualquier daño a nuestra privacidad.</p>
                                <p style="text-align: justify; font-size: 20px;">Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></p>
                            </div>
                        </div>
                            <div class="wrapper">
                                <div class="divider div-transparent"></div>
                            </div>
                        <!-- Transparencia  -->
                        <div class="single_blog" style="padding-bottom: 2rem;">
                            <div class="single_detail">
                                <h4 class="heading" style="color:white">¿Qué son los Datos Personales?</h4>
                                <p class="lead" style="text-align: justify; font-size: 20px;">Los Datos Personales Son toda aquella información que pertenece a una persona física o jurídica colectiva que puede ser usada para la identificación directa o indirectamente a través de cualquier documento informativo físico o electrónico.</p>
                                <p style="text-align: justify; font-size: 20px;">Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></p>
                            </div>
                        </div>
                        <div style="align-self:center;">
                              <center>                                  <a href="https://micrositios.inai.org.mx/vulnerometro/" target="_blank"><img width="50%" class="img-responsive" src="{{ asset('images\portales\vulnerometro-transparente.webp')}}"></a> </center>  
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!-- Qué es un rEcurso-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; text-align: justify;">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">CLASIFICACIÓN DE DATOS PERSONALES</h4>
                                </div>
                            </div>
                        </div>
                    <div class="wrapper">
                        <div class="divider div-transparent"></div>
                    </div>
                        <!-- Transparencia  -->
                        <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 20px;">Los datos personales se clasifican en diversas categorías atendiendo a las características del dato que se trate en el Partido Verde Ecologista de México ponemos a su disposición lo siguiente:</p>
                        </div>
                        <br>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        1.	Datos Personales de Identificación
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" >
                                            <div class="card-body col-md-12 d-flex justify-content-right">
                                                <ul  style="padding-top: 0.5rem; text-align: left; color:black">
                                                    <li>Nombre</li>
                                                    <li>Domicilio</li>
                                                    <li>Teléfono particular y/o celular</li>
                                                    <li>Correo electrónico personal</li>
                                                    <li>Estado civil</li>
                                                    <li>Firma</li>
                                                    <li>Firma electrónica</li>
                                                    <li>Cartilla militar</li>
                                                    <li>Lugar y fecha de nacimiento</li>
                                                    <li>Nacionalidad</li>
                                                    <li>Edad</li>
                                                    <li>Fotografía</li>
                                                    <li>Clave del Registro Federal de Contribuyentes (RFC)</li>
                                                    <li>Clave Única de Registro de Población (CURP)</li>
                                                    <li>Nombres de familiares, dependientes y/o beneficiarios.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Datos Laborales
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" >
                                            <p style="padding-top: 0.5rem; text-align: left; color:black">Pueden referirse a los contenidos en:</p>
                                            <div class="card-body col-md-12 d-flex justify-content-end">
                                                <ul  style=" text-align: left; color:black">
                                                    <li>Las solicitudes de empleo</li>
                                                    <li>Correo electrónico institucional</li>
                                                    <li>Teléfono institucional</li>
                                                    <li>Actividades extracurriculares</li>
                                                    <li>Referencias laborales</li>
                                                    <li>Referencias personales</li>
                                                    <li>Recomendaciones</li>
                                                    <li>Capacitaciones</li>
                                                    <li>Documentos de selección</li>
                                                    <li>Reclutamiento</li>
                                                    <li>Nombramiento</li>
                                                    <li>Incidencias</li>
                                                    <li>Hojas de servicio y otras generadas derivadas de nuestra relación laboral.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Datos Patrimoniales
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body col-md-12 d-flex justify-content-right">
                                                <ul  style=" text-align: left; color:black">
                                                    <li>Se refiere a los bienes muebles e inmuebles</li>
                                                    <li>Ingresos y egresos</li>
                                                    <li>Cuentas bancarias</li>
                                                    <li>Seguros</li>
                                                    <li>Fianzas</li>
                                                    <li>Afores</li>
                                                    <li>Historial crediticio</li>
                                                    <li>Información fiscal</li>
                                                    <li>Servicios contratados y afines.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        4. Datos Sobre Procedimientos Administrativos y Jurisdiccionales
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion" style="padding:1rem">
                                            <p style="padding-top: 0.5rem; text-align: left; color:black">Es aquella información relacionada íntimamente a nosotros disponible en procedimientos administrativos o juicios en materia</p>
                                            <div class="card-body col-md-12 d-flex justify-content-center">
                                                <ul  style=" text-align: left; color:black">
                                                    <li>Laboral</li>
                                                    <li>Civil</li>
                                                    <li>Penal</li>
                                                    <li>Fiscal</li>
                                                    <li>Mercantil o de cualquier otra rama del Derecho.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        5. Datos Académicos
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion" style="padding:1rem">
                                            <p style="padding-top: 0.5rem; text-align: left; color:black">Son los datos que permiten identificar nuestra trayectoria académica y formación profesional como son calificaciones, boletas, constancias, certificados, reconocimientos, títulos, cédulas profesionales.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        6. Datos Sobre Procedimientos Administrativos y Jurisdiccionales
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion" style="padding:1rem">
                                            <p style="padding-top: 0.5rem; text-align: left; color:black">Información necesaria para nuestro tránsito dentro y fuera de país.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="accordion" style="padding-bottom: 0.5rem;" >
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        7. Datos personales sensibles
                                        </button>
                                    </h5>
                                    </div>
                                    <div class="d-flex justify-content-center" >
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion" style="padding:1rem">
                                            <p style="padding-top: 0.5rem; text-align: left; color:black">Son los datos referentes a la esfera más íntima de su titular cuya utilización indebida puede dar origen a discriminación o conlleve un riesgo grave para éste, se clasifican en:</p>
                                            <ul style="padding-top: 0.5rem; text-align: left; color:black">
                                                <li>
                                                <strong>Datos Ideológicos:</strong>
                                                    <p style="text-align: justify">Estos datos incluyen aquellas creencias religiosas, ideológicas, de afiliación política y/o sindical, y pertenencia a organizaciones de la sociedad civil y/o asociaciones religiosas, entre otros.</p>
                                                </li>
                                                <li>
                                                    <strong>Datos de Vida Sexual:</strong>
                                                    <p style="text-align: justify">Es aquella información privada referente a la preferencia sexual y hábitos sexuales, entre otros.</p>
                                                </li>
                                                <li>
                                                    <strong>Datos de Origen:</strong>
                                                    <p style="text-align: justify">Es aquella información relativa al origen étnico y racial.</p>
                                                </li>
                                                <li>
                                                    <strong>Datos Biomédicos:</strong>
                                                    <p style="text-align: justify">Son aquellos datos relacionados con propiedades biológicas, características fisiológicas o rasgos de nuestra personalidad que mediante métodos automáticos identifican rasgos físicos únicos e intransferibles de nosotros, como la huella dactilar, geometría de la mano, características de iris y retina, código genético u otros.</p>
                                                </li>
                                                <li>
                                                    <strong>Datos Electrónicos:</strong>
                                                    <p style="text-align: justify">Son aquellos datos relativos a nuestros correos electrónicos particulares, nombres de usuarios, contraseñas, firma electrónica, dirección de IP (Protocolo de Internet) privada, o cualquier dirección de control o información empleada por nosotros, que implique nuestra identificación o acceso en internet, conexión o red de comunicación electrónica.</p>
                                                </li>
                                                <li>
                                                    <strong>Datos de Salud:</strong>
                                                    <p style="text-align: justify">Son aquellos datos relacionados con nuestro estado físico o mental, cualquier atención médica, expediente clínico, diagnósticos, padecimientos, vacunas, intervenciones quirúrgicas, incapacidades médicas, discapacidades, uso de aparatos oftalmológicos, ortopédicos, auditivos o prótesis, consumo de sustancias tóxicas y estupefacientes, sintomatologías o análogos relacionados con nuestra salud.</p>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <p style="padding-top: 0.5rem; text-align: left; color:white">Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a style="color: white" onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white';" target="_blank" href="www.infoem.org.mx/es/contenido/datos-personales">www.infoem.org.mx/es/contenido/datos-personales</a> y la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                        <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->


<!-- Gráficas -->
<section class="team-sec position-relative" id="team-sec">
    <div class="right-overlay" style="background-color: #54ad86"></div>
    <div class="container">
            
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #54ad86">
            <div class="col-18 col-lg-8">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters team-carousel owl-carousel owl-theme">
                        <div class="item text-center">
                            <div class="team-box">
                                <h4 class="card-heading" style="color:white">1.	¿Qué es el Derecho de Acceso?</h4>
                                <p style="padding-top: 0.5rem; text-align: justify; color:white">Derecho de solicitar y recibir información sobre tus datos personales en posesión del Partido Verde Ecologista de México en el Estado de México para conocer las condiciones del tratamiento y finalidad que se les está dando.</p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <h4 class="card-heading" style="color:white">2.	¿Qué es el Derecho de Rectificación?</h4>
                                <p style="padding-top: 0.5rem; text-align: justify; color:white">Derecho de solicitar la corrección de tus datos personales cuando se detecta que son inexactos o incompletos, desactualizados, inadecuados o excesivos respecto de la finalidad para la cual fueron obtenidos.</p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <h4 class="card-heading" style="color:white">3.	¿Qué es el Derecho de Cancelación?</h4>
                                <p style="padding-top: 0.5rem; text-align: justify; color:white">Derecho para solicitar la cancelación de tus datos personales de los archivos, registros, expedientes y sistemas del responsable, con la finalidad de que los mismos ya no estén en su posesión y dejen de ser sometidos a tratamiento.</p>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="team-box">
                                <h4 class="card-heading" style="color:white">4.	¿Qué es el Derecho de Oposición?</h4>
                                <p style="padding-top: 0.5rem; text-align: justify; color:white">Derecho de impedir el tratamiento de tus datos personales, especialmente si la información fue recabada sin consentimiento, causa daño, o tiene un tratamiento automatizado que afecta tus intereses, derechos o libertades.</p>
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
                    <h2 class="heading">¿Qué son los Derechos ARCO?</h2>
                    
                </div>
            </div>
            <div style="z-index: +1; padding: 2rem; color: white; font-size: 20px;">
                <p class="" style="text-align: justify">El derecho a solicitar ante el Partido Verde Ecologista de México en el Estado de México el Acceso, Rectificación, Cancelación y Oposición (ARCO) sobre el tratamiento de tus datos.</p>
                <p class="" style="text-align: justify">Los derechos de acceso, rectificación, cancelación y oposición de datos personales son derechos independientes.</p>
                <p class="" style="text-align: justify">El ejercicio de cualquiera de ellos no es requisito previo no impide el ejercicio de otro. La procedencia de estos derechos, en su caso, se hará efectiva una vez que el titular o su representante legal acrediten su identidad o representación, respectivamente.</p>
            </div>
        </div>
    </div>
</section>
<!--Gráficas End-->

<!-- Cómo realizo una solicitud de datos personales?-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; text-align: justify;  background-color: #4d9b67;">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">¿CÓMO REALIZO UNA SOLICITUD DE DATOS PERSONALES?</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Transparencia  -->
                        <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 20px;">Las solicitudes de Derecho ARCO se pueden realizar a través de tres modalidades:</p>
                        </div>
                        <br>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: #4d9b67;">
                                        1.	Solicitud Verbal
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                        <div class="card-body">
                                            <p style="text-align: justify">Acudiendo directamente a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México ubicada en República de Belice 109, Colonia Américas C.P. 50130, Toluca Estado de México.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="color: #4d9b67;">
                                        2.	Solicitud Escrita
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                        <div class="card-body" style="text-align: justify;">
                                            <p style="text-align: justify">Presentado un escrito libre dirigido a la Unidad de Transparencia del Partido Verde Ecologista de México o llenando los formatos establecidos para la presentación de la misma.</p>
                                            
                                            <p style="text-align: justify">Los formatos podrán ser obtenidos directamente en la Unidad de Transparencia del Partido Verde Ecologista de México o en la página web del Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) en los siguientes links: </p>
                                            <a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio ">https://www.infoem.org.mx/es/contenido/inicio </a> <br>
                                            <a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page ">https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page </a> <br>
                                            <a target="_blank" href="https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  ">https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  </a><br>
                                            <div class="row" style="text-align: left !important;">
                                                <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                                                <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio"><img src="{{ asset(('images/portales/logoInfoem001.png'))}}"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="color: #4d9b67;">
                                        3.	Solicitud Electrónica
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                        <div class="card-body" style="text-align: justify;">
                                        <p style="text-align: justify">Ingresando al Sistema de Acceso, Rectificación, Cancelación y Oposición de Datos Personales del Estado de México (SARCOEM) <a href="https://sarcoem.org.mx" target="_blank">https://sarcoem.org.mx</a> o a la Plataforma de transparencia (PTN)  <a target="_blank" href="https://www.plataformadetransparencia.org.mx">www.plataformadetransparencia.org.mx</a></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <p style="padding-top: 0.5rem; text-align: justify; color:white; font-size: 20px;">Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM)</p>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--Team sec start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #8ecb7f;">
            <div class="col-12 col-lg-8 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">¿QUÉ ES SARCOEM?</h4>
                    <p class="text" style="text-align: justify; font-size: 20px;">El Sistema de Acceso, Rectificación, Cancelación y Oposición del Estado de México (SARCOEM) es un medio electrónico a través del cual es posible formular solicitudes de derechos ARCO y recursos de revisión.</p>
                    <p class="text" style="text-align: justify; font-size: 20px;">De esta manera, tras abrir una cuenta en esta plataforma, es posible darle seguimiento a tu solicitud, desde la presentación hasta la resolución.</p>
                    <p class="text" style="text-align: justify; font-size: 20px;">Para acceder al SARCOEM, necesitas ingresar a www.sarcoem.org.mx o dar clic en el enlace correspondiente, disponible en el apartado de Transparencia de la página oficial del Partido Verde Ecologista de México en el Estado de México en el siguiente link: </p>
                    <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white';" style="color:white" target="_blank" href="https://partidoverdeedomex.org/portal-de-transparencia">https://partidoverdeedomex.org/portal-de-transparencia</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-center">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters ">
                        <img src="{{asset ('transparencia\img\Logos\logoSarcomex.svg')}}" width="440" alt="SAIMEX">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team sec End-->

<!-- Cómo realizo una solicitud de datos personales?-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; text-align: justify;  background-color: #338d67;">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                        <div class="standalone-detail">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">AVISOS DE PRIVACIDAD</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Transparencia  -->
                        <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                            <p class="lead" style="text-align: justify; font-size: 20px;">Es el documento físico, electrónico o en cualquier formato generado por el Partido Verde Ecologista de México en el Estado de México. Éste debe ser puesto a tu disposición para informarte los propósitos del tratamiento al que serán sometidos tus datos personales.</p>
                            <h2 style="text-align: center;">Tipos de aviso de privacidad:</h2>
                        </div>
                        <br>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingEleven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven" style="color: #338d67;">
                                        1.	Aviso de privacidad integral
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                        <div class="card-body">
                                            <p style="text-align: justify; font-size: 20px;">Cuando los datos son proporcionados directamente por los titulares de los datos personales, el aviso de privacidad integral debe ser facilitado en el momento de forma clara e incuestionablemente, a través de los formatos establecidos por el Partido Verde Ecologista de México en el Estado de México.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingTwelve">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve" style="color: #338d67;">
                                        2.	Aviso de privacidad simplificado
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                                        <div class="card-body">
                                            <p style="text-align: justify; font-size: 20px;">Cuando tus datos son obtenidos por cualquier medio electrónico, óptico, sonoro, visual o a través de cualquier otra tecnología, el aviso de privacidad debe ser puesto a tu disposición en lugar visible, considerando los medios o mecanismos para que conozcamos el texto completo del aviso.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div style="color: #FFFFFF; font-family: Roboto, sans-serif;" >
                            <h2 style="text-align: center; padding-bottom: 1rem;">Aviso de privacidad:</h2>
                        </div>
                        <div id="accordion" style="padding-bottom: 1rem;" >
                                <div class="card">
                                    <div class="card-header" id="headingThirdteen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirdteen" aria-expanded="false" aria-controls="collapseThirdteen" style="color: #338d67;">
                                        Elementos básicos del aviso de privacidad
                                        </button>
                                    </div>
                                    <div id="collapseThirdteen" class="collapse" aria-labelledby="headingThirdteen" data-parent="#accordion">
                                        <div class="card-body" style="text-align: justify; padding-left: 2rem;padding-right: 2rem; font-size: 20px;">
                                            
                                        <ol>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Nombre del responsable</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Datos personales que serán sometidos a tratamiento, señalando cuales son sensibles.</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Finalidades del tratamiento.</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Cuando se realicen transferencias de datos personales que requieran consentimiento, se deberá informar:
                                                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a) Destinatario de los datos
                                                    <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b) Finalidad de la transferencia
                                                </li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO.</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Procedimiento mediante el cual se podrá revocar el consentimiento para el tratamiento de los datos.</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Procedimiento para que se ejerza el derecho a la portabilidad.</li>
                                                <li> &nbsp;&nbsp;&nbsp;&nbsp;Datos de contacto del Instituto de Transparencia, Acceso a la Información Pública para que la o el titular pueda recibir asesoría o presentar denuncias por violaciones a las disposiciones de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</li>
                                            </ol>
                                            <br>
                                            <p>Además de estos elementos, se deberán incluir los descritos en el Artículo 31 de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
                <p style="padding-top: 0.5rem; padding-bottom: 1rem; text-align: justify; color:white !important; font-size: 20px;">Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) y la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-bottom" id="avisos" name="avisos">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading">AVISOS DE <span>PRIVACIDAD</span></h4>
                </div>
                <div class="col-md-12 pt-5">
                    
                <div id="js-grid-mosaic1" class="cbp cbp-l-grid-mosaic"> <!-- no sirve -->
                        <div class="cbp-item web logo" style="max-width: 450px;" >
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\Aviso de Privacidad Integral Finanzas Verde 2021 julio.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img" height="150px !important">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center !important;">Finanzas verde</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\Sistema Estatal de Registro de RG y de C PVEM enero 22.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Sistema Estatal de Registro de Representantes Generales y de Casilla PVEM.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\Sistema Estatal de Registro Candidatos PVEM enero 2022.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Sistema Estatal de Registro de  Candidatos PVEM.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web logo" style="max-width: 450px;" >
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\Eventos Secretaría de la Mujer enero 2022.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img" height="150px !important">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Eventos Secretaría de la Mujer.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\eventos, capacitación y asesoría enero 2022.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Eventos, capacitación y asesoría.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\Sistema ARCO enero 2022.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Sistema ARCO de Datos Personales PVEM.</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="cbp-item web logo" style="max-width: 450px;">
                            <a target="blank" href="{{ asset('pdf\avisos-privacidad\CONTROL DE ACCESO A LAS INSTALACIONES enero 2022.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\seguridad-de-datos.png" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="hover-text">
                                        <h4 class="p-hover-title" style="font-weight: 100; text-align: center;">Control de Acceso a las Instalaciones del CEE del PVEM EDOMÉX.</h4>
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


<!--Organismos garantes start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="right-overlay" style="background-color: #69af5a;"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #69af5a; padding-left: 1rem;">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <div class="team-detail wow fadeInLeft">
                    <h4 class="heading">¿QUÉ SON LOS <span style="font-size: 40px;">ORGANISMOS GARANTES?</span></h4>
                </div>
            </div>
            <div class="col-12 col-lg-8 d-flex align-items-center">
                <div class="team-area wow fadeInRight">
                    <div class="row no-gutters ">
                        <p class="text" style="text-align: justify; font-size: 20px;">
                        Son autónomos, especializados, independientes, imparciales y colegiados, con personalidad jurídica y patrimonio propios, con plena autonomía técnica, de gestión, capacidad para decidir sobre el ejercicio de su presupuesto y determinar su organización interna. <br>
                        Son responsables de garantizar el acceso a la información y la protección de los datos personales, en México existen 31 organismos garantes estatales y uno en la CDMX y el INAI.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--organismos garantes End-->

<!-- Cómo realizo una solicitud de datos personales?-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; text-align: justify;  background-color: #00827b;">
            <div class="row no-gutters">
                <div class="col-12">
                <!-- START HEADING SECTION -->
                    <div class="standalone-detail">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                            <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">¿QUÉ ES EL INFOEM?</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Transparencia  -->
                    <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 20px;">El Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios es un órgano público estatal constitucionalmente autónomo, especializado, independiente, imparcial y colegiado dotado de personalidad jurídica y patrimonio propio.
                            <br> Garantiza los derechos de acceso a la información pública y la protección de los datos personales y fomenta la cultura de la transparencia.
                            <br> Dirigido y administrado por un pleno, integrado por 5 Comisionados, de los cuales 1 es el Comisionado Presidente.</p>
                            <img src="{{asset('images\portales\logoInfoem.svg')}}" alt="" height="150">
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--Mapa start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay" style="z-index: -1;"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #8ecb7f;" >
            <div class="content container" style="color: white;">
                <div class="projects">
                    <h4 class="wow fadeInRight" style="font-weight:900; font-size: 40px;">Ubicación</h4>
                    <p class="lead wow fadeInRight">Calle de Pino Suárez sin número, actualmente Carretera Toluca-Ixtapan #111, Colonia La Michoacana; Metepec Estado de México, C.P. 52166 </p>
                    <div id="map2" class="map-2"></div>
                    <div class="row">
                    <div class="col-md-5 padding-top" style="text-align: center;">
                        <h4 style="font-weight: bolder;">Teléfono</h4>
                        <p><a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="tel:+7229147192">01 (722) 226 1980</a>
                    </div>
                    <div class="col-md-5 padding-top" style="text-align: center;">
                    CAT: <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="tel:+01800 821 04 41">01800 821 04 41</a></p>
          <br> <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank"target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio">https://www.infoem.org.mx/es/contenido/inicio</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mapa End-->

<!-- Cómo realizo una solicitud de datos personales?-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center" style="padding-top: 3rem; padding-left: 4rem; padding-right: 4rem; text-align: justify;  background-color: #4c9984;">
            <div class="row no-gutters">
                <div class="col-12">
                <!-- START HEADING SECTION -->
                    <div class="standalone-detail">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                            <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">¿QUÉ ES EL INAI?</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Transparencia  -->
                    <div style="color: #FFFFFF; font-family: Roboto, sans-serif;">
                        <p class="lead" style="text-align: justify; font-size: 20px;">El Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales es el organismo constitucional autónomo garante del cumplimiento de dos derechos fundamentales: el de acceso a la información pública y el de protección de datos personales.
                               <br> Para el primero, garantiza que cualquier autoridad en el ámbito federal, órganos autónomos, partidos políticos, fideicomisos, fondos públicos y sindicato; o cualquier persona física, moral que reciba y ejerza recursos públicos o realice actos de autoridad te entregue la información pública que solicites.
                                <br> Para el segundo, garantiza el uso adecuado de los datos personales, así como el ejercicio y tutela de los derechos de acceso, rectificación, cancelación y oposición que toda persona tiene con respecto a su información.</p>
                            <img src="{{asset('images/portales/Logo_del_INAI.png')}}" alt="" width="200">
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->

<!--Mapa start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="right-overlay" style="z-index: -1; background-color: #339e6a;"></div>
    <div class="container">
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #339e6a">
            <div class="content container" style="color: white">
                <div class="projects">
                <h4 class="wow fadeInLeft" style="font-weight:900; font-size: 40px;text-align: right;">Ubicación</h4>
                    <p class="lead wow fadeInLeft" style="text-align: right;"">Insurgentes Sur No. 3211 Col. Insurgentes Cuicuilco, Alcaldía Coyoacán, C.P. 04530</p>
                    <div id="map3" class="map-2"></div>
                    <div class="row">
                    <div class="col-md-5 padding-top" style="text-align: center;">
                        <h4 style="font-weight: bolder;">Teléfono</h4>
                        <p><a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="tel:+8008354324">8008354324</a>
                    </div>
                    <div class="col-md-5 padding-top" style="text-align: center;">
                    <h4 style="font-weight: bolder;">Conmutador:</h4> <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" >5004 2400</a></p>
                    <br> <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank"target="_blank" href="https://home.inai.org.mx/">https://home.inai.org.mx/</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mapa End-->

<!-- Qué es un rEcurso-->
<section class="main" id="main">
    <!--content-->
    <div class="blog-content">
        <div class="container justify-content-center align-items-center text-center"  style="padding-bottom: 2rem;padding-top: 1rem !important; padding-left: 4rem; padding-right: 4rem; text-align: justify;">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- START HEADING SECTION -->
                    <div class="standalone-detail">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                            <h4 class="heading" style="color: #FFFFFF; font-family: Roboto, sans-serif; font-size: 50px; font-weight: 700; padding-top:2rem;">NORMATIVIDAD</h4>
                            </div>
                        </div>
                    </div>
                <!-- <div class="wrapper">
                    <div class="divider div-transparent"></div>
                </div> -->
                    <!-- tabla 1 -->
                    <div id="accordion" style="padding-bottom: 1rem;" >
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                LGPDPPSO
                                </button>
                            </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="styled-table">
                                        <tbody>
                                            <tr>
                                                <td>LGPDPPSO</td>
                                                <td style="text-align: right;"><a class="linkhov" href="{{asset('pdf/normatividad/L_LGPDPPSO.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tabla 2 -->
                    <div id="accordion" style="padding-bottom: 1rem;" >
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Acuerdos
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="styled-table">
                                        <tbody>
                                            <tr>
                                                <td>Acuerdo para la Elaboracion, Presentacion y Valoracion de Evaluaciones de Impacto en la Proteccion de Datos Personales</td>
                                                <td><a class="linkhov" href="{{asset('pdf/normatividad/acuerdos/A_Acuerdo_para_la_elaboracion_presentacion_y_valoracion_de_evaluaciones_de_impacto_en_la_proteccion_de_datos_personales.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tabla 3 -->
                    <div id="accordion" style="padding-bottom: 1rem;" >
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Lineamientos
                                </button>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="styled-table">
                                        <tbody>
                                            <tr>
                                                <td>Lineamientos Generales de Proteccion de Datos Personales para el Sector Público.</td>
                                                <td><a class="linkhov" target="_blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_Generales_de_Proteccion_de_Datos_Personales_para_el_Sector_Publico.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Lineamientos Generales en Materia de Clasificación y Desclasificación de la información así como para la Elaboración de Versiones Públicas. </td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_generales_en_materia_de_clasificacion_y_desclasificacion_de_la_informacion_asi_como_para_la_elaboracion_de_versiones_publicas.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Lineamientos para la Portabilidad de Datos Personales.</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_para_la_Portabilidad_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tabla 4 -->
                    <div id="accordion" style="padding-bottom: 1rem;" >
                        <div class="card">
                            <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Otros
                                </button>
                            </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="styled-table">
                                        <tbody>
                                            <tr>
                                                <td>Acuerdo Mediante el Cual se Aprueba el Uso e Implementación de la Versión 2.0 del Sistema de Acceso a la Información Mexiquense (SAIMEX) y del Sistema de Acceso, Rectificación y Cancelación.</td>
                                                <td><a class="linkhov" href="{{asset('pdf/normatividad/otros/ACUERDO_MEDIANTE_EL_CUAL_SE_APRUEBA_EL_USO_E_IMPLEMENTACIaN_DE_LA_VERSIaN_2.0_DEL_SISTEMA_DE_ACCESO_A_LA_INFORMACIaN_MEXIQUENSE_SAIMEX_Y_DEL_SISTEMA_DE_ACCESO_RECTIFICACIaN_CANCELACI.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Programa de la Cultura de Transparencia y de Protección de Datos Personales.</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_de_la_Cultura_de_Transparencia_y_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Programa Estatal y Municipal de Protección de Datos Personales.</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_estatal_y_municipal_de_proteccion_de_datos_personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Programa Nacional de Protección de Datos Personales.</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_Nacional_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Recomendaciones para la Designación de Responsables de Sistemas de Datos Personales en Posesión de los Sujetos Obligados.</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Recomendaciones_para_la_designacion_de_responsables_de_sistemas_de_datos_personales_en_posesion_de_los_Sujetos_Obligados.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                            </tr>
                                            <tr >
                                                <td>Programa Estatal y Municipial de Protección de Datos Personales 2020-2022</td>
                                                <td><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/PROGRAMA_ESTATAL_Y_MUNICIPAL_DE_PROTECCIaN_DE_DATOS_PERSONALES_2020-2022.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
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

<!--Mapa start-->
<section class="team-sec position-relative" id="team-sec">
    <div class="left-overlay" style="background-color: #7dc36d; z-index: -1;"></div>
    <div class="container" >
        <div class="row inner-team-sec padding-top padding-bottom" style="background-color: #7dc36d;">
            <div class="content container" style="color: white">
                <div class="projects">
                <h2 class="section-title wow fadeInRight" style="font-weight:900; font-size: 40px;text-align: left;">Contacto del Área de Protección de Datos Personales</h2>
                    <p class="lead wow fadeInRight">República de Belice #109 Colonia Américas C.P. 50130 Toluca de Lerdo </p>
                    <div id="map" class="map-2"></div>
                  
                    <div class="row">
                    <div class="col-md-5 padding-top" style="text-align: center;">
                        <h4 style="font-weight: bolder;">Teléfono</h4>
                        <p><a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank" href="tel:+7229147192">01 (722) 9 14 71 92</a>
                    </div>
                    <div class="col-md-5 padding-top" style="text-align: center;">
                    
                    <br> <a onMouseOver="this.style.cssText='color: white'" onMouseOut="this.style.cssText='color: white'" target="_blank"target="_blank" href="https://partidoverdeedomex.org">https://partidoverdeedomex.org</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Mapa End-->

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
<script src="{{asset ('transparencia/js/script1.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.5.0/d3.min.js"></script>

<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
<script defer src="js/gmap.js"></script>

{{-- Charts --}}
<!-- <script src="https://cdn.jsdelivr.net/npm/britecharts@2/dist/bundled/britecharts.min.js"></script> -->
<!-- {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}} -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
<!-- <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->

<!-- MAPA -->
<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
<script defer src="js/gmap.js"></script>
<script defer src="js/gmap2.js"></script>
<script defer src="js/gmap3.js"></script>


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

function columnGrid(){
	  $('.js-grid-items').each(function(){
		  var colWrap =$(this).width();
		//   var colItem = Math.floor(colWrap / 390);
        var colItem = Math.floor(colWrap / 250);
		  var colFixedItem = Math.floor(colWrap / colItem);
		  $(this).find('.js-grid-item').css({ 'width' : colWrap});
		  $(this).find('.js-grid-item').css({ 'width' : colFixedItem});
	  });
	}

	columnGrid();
</script>
<style>
.img-responsive,
.thumbnail>img,
.thumbnail a>img,
.carousel-inner>.item>img,
.carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
}
.project-description {
    opacity: 0;
    margin-top: 12%;
    line-height: 1.71;
    color: #333333;
    -webkit-transform: translateX(-1rem);
    -ms-transform: translateX(-1rem);
    -o-transform: translateX(-1rem);
    transform: translateY(-1rem);
}
.project-description {
    opacity: 0;
    margin-top: 12%;
    line-height: 1.71;
    color: #333333;
    -webkit-transform: translateX(-1rem);
    -ms-transform: translateX(-1rem);
    -o-transform: translateX(-1rem);
    transform: translateY(-1rem);
}

.project-hover {
    position: absolute;
    z-index: 2;
    left: 0;
    top: 0;
    width: 100.1%;
    height: 100%;
    padding: 4.85rem 3rem;
    -webkit-transition: 0.5s ease;
    -o-transition: 0.5s ease;
    transition: 0.5s ease;
}
.item-shadow {
    position: relative;
}

.item-shadow:before {
    content: '';
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 46%, rgba(0, 0, 0, 0.6) 100%);
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 46%, rgba(0, 0, 0, 0.6) 100%);
}
.project-item {
    position: relative;
    overflow: hidden;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

.project-item img {
    width: 100%;
}
.fondo{
    background-image: url(public\images\bg\hojas.jpg);
} 

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
.grid-items {
    margin: -30px -15px 0 -15px;
}

.grid-items:after {
    content: '';
    clear: both;
    display: block;
}
.js-isotope {
    overflow: hidden;
}
.title-hr {
   margin-bottom: 10px;
    height: 0.28rem;
    background:#dcddd8;
}.title-hr2 {
    width: 7rem;
    max-width: 100%;
   margin-bottom: 10px;
    height: 0.28rem;
    background:black;
}
</style>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>