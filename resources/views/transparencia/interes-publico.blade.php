<style>
label {
  display: inline-block;
  padding: 0;
  cursor: pointer;
  vertical-align: middle;
}

label.reset {
  font-size: 10px;
  border: 1px solid #008000;
  border-radius: 5px;
  margin: 10px 5px;
  padding: 2px 3px;
}

label.star {
  width: 30px;
  height: 27px;
}


/* ocultamos los radiobuttons */

input[name=rating] {
  display: none;
}


/* estrellas inmediatamente despues de un radiobutton van amarillas */

input[type=radio]+label.star svg path {
  fill: #008000
}


/* estrellas a la derecha del radiobutton checked van blanco */

input[type=radio]:checked~label.star svg path {
  fill: #fff;
}
</style>
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
    <title>Interés publico PVEM</title>
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
                                    <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Proteccion-Datos') }}">PROTECCIÓN DE DATOS PERSONALES</a></li>
                                      <li class="nav-item active"><a class="nav-link scroll" href="{{ route('Archivo') }}">GESTIÓN DOCUMENTAL (ARCHIVO)</a></li>
                                     
                                      <li class="nav-item"><a class="nav-link scroll" href="{{ route('Proactividad') }}">PROACTIVIDAD</a></li>
                                  
                                    
                                   
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
        <!--
        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
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
                                  
                                    <li class="nav-item" style="font-size: smaller;"><a class="nav-link scroll" href="{{route('Transparencia')}}">PORTAL DE TRANSPARENCIA</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-link scroll" href="{{route('Unidad-Transparencia')}}">UNIDAD DE TRANSPARENCIA</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-link scroll" href="{{route('Proteccion-Datos')}}">PROTECCIÓN DE DATOS PERSONALES</a></li>
                                        <li class="nav-item" style="font-size: smaller;"><a class="nav-link scroll" href="{{route('Archivo')}}">GESTIÓN DOCUMENTAL (ARCHIVO)</a></li>
                            

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
                    <h4 class="heading" style="font-size: 45px;">INFORMACIÓN DE INTERÉS PÚBLICO<span style="font-size: 40px; font-weight:lighter;"></span></h4>
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
                                    <h4 class="team-spec" style="color: white; text-align: justify; vertical-align: middle;">Es aquella que resulta relevante o beneficiosa para la sociedad y no simplemente de interés individual, su divulgación resulta útil para que las personas comprendan las actividades que realizan los sujetos obligados.</h4>
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

<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                   <h4 class="heading" style="    margin-bottom: -42px;font-size: 13px;">Información Administrativa, Económica y Social, Medio Ambiente, Social. </h4>
                  
                </div>
                
                <div class="col-md-12 pt-5">
                <div class="title-hr" ><div class="title-hr2" ></div></div>

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic" style="margin-left: 0%;">
                      
                        
                        <div class="cbp-item web logo" style="max-width: 300px;">
                            <a target="blank" href="{{ asset('pdf\interes publico\COSTOS.pdf')}}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\costos-thumb.jpg"  alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                      <!--  <h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Costos acceso a la información púbica.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web logo" style="max-width: 350px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/calendario-2022.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\calendario-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                       <!-- <h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Calendario oficial en materia de Transparencia, Acceso a la Información Pública y Protección de Datos Personales</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web logo" style="max-width: 0px;">     </div>
                        
                         <div class="cbp-item web logo" style="max-width: 300px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/sm.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\sm-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                       <!-- <h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Protocolo para Prevenir, Erradicar y Sancionar la Violencia Política de Género del Partido Verde Ecologista de México en el Estado de México.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                         
                            <div class="cbp-item web logo" style="max-width: 300px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/GUIA ATENCIÓN.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\guia-atencion-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                      <!--  <h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Guía de atención del Partido Verde Ecologista de México en casos de violencia política contra las mujeres por razón de género en el Estado de México. 
</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                         <div class="cbp-item web logo" style="max-width: 0px;">     </div>

                         <div class="cbp-item web logo" style="max-width: 285px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/PLAN RESIDUOS.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\residuos-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                  
                                    <div class="hover-text">
                                       
                                        <p class="p-hover-des"> Plan Residuos Electorales 2021.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                         <div class="cbp-item web logo" style="max-width: 300px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/PROPAGANDA.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\propaganda-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <!--<h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Plan de reciclaje de la Propaganda Electoral.</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                          <div class="cbp-item web logo" style="max-width: 300px;">
                            <a target="blank" href="{{ asset('pdf/interes publico/PLAN DE RECICLAJE NEXTLALPAN.pdf') }}" class="cbp-caption" data-title="">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="images\reciclaje-thumb.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <!-- <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div> -->
                                    <div class="hover-text">
                                        <!--<h4 class="p-hover-title">GUÍA ORIENTADORA</h4> -->
                                        <p class="p-hover-des">Plan de Reciclaje de la Propaganda Electoral del Partido Verde Ecologista DE México, para la elección extraordinaria 2021 en el municipio de Nextlalpan.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                          
                       
                    </div>
                </div>
        </div>
    </div>
</section>
<center>
    <b>¿Te pareció útil esta información? </b> <br>
<!-- svg from https://es.wikipedia.org/wiki/Archivo:Star*.svg -->

<input id=rating0 type=radio value=0 name=rating checked />

<label class=star for=rating1>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
<path stroke="#008000" stroke-width="15" 
  d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
</svg>
</label>
<input id=rating1 type=radio value=1 name=rating />

<label class=star for=rating2>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
<path stroke="#008000" stroke-width="15"
 d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
</svg>
</label>
<input id=rating2 type=radio value=2 name=rating />

<label class=star for=rating3>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
<path stroke="#008000" stroke-width="15"
 d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
</svg>
</label>
<input id=rating3 type=radio value=3 name=rating />

<label class=star for=rating4>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
<path stroke="#008000" stroke-width="15"
 d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
</svg>
</label>
<input id=rating4 type=radio value=4 name=rating />

<label class=star for=rating5>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 275">
<path stroke="#008000" stroke-width="15"
 d="M150 25l29 86h90l-72 54 26 86-73-51-73 51 26-86-72-54h90z"/>
</svg>
</label>
<input id=rating5 type=radio value=5 name=rating />

<!-- por último el label del rating 0 ( sin calificar ) -->

<div id=texto></div>
</center>
<!-- Qué es un rEcurso-->



<!-- Gráficas -->

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
<script>
    // para todos los radiobutton rating agregar un on change
const changeRating = document.querySelectorAll('input[name=rating]');
changeRating.forEach((radio) => {
  radio.addEventListener('change', getRating);
});

// buscar el radiobutton checked y armar el texto con el valor ( 0 - 5 )
function getRating() {
  let estrellas = document.querySelector('input[name=rating]:checked').value;
  document.getElementById("texto").innerHTML = (
    0 < estrellas ?
    estrellas + " estrella" + (1 < estrellas ? "s" : "") :
    "sin calificar"
  );

  // opcionalmente agregar un ajax para guardar el rating
}
</script>
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