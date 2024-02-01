<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Partido Verde Estado de México">
<meta name="author" content="Partido Verde Estado de México">
<meta  name ="csrf-token" content="{{csrf_token()}}" >


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
 <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=header&aut=partidoverdeedomex.org" type="text/javascript"></script>
 <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=body&aut=partidoverdeedomex.org" type="text/javascript"></script>
 <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=footer&aut=partidoverdeedomex.org" type="text/javascript"></script>
<script type = "text/javascript">
$(document).ready(function(){
   $("#uploadModal").modal("show");  
   $(".modal").on("shown.bs.modal", function (e) {
   $(this).insertAfter($(".modal-backdrop"));

   if (!readCookie('hasLaunch')) {
        //launch it
        launchWindow('#dialog1');               
        //then set the cookie, so next time the modal won't be displaying again.
        createCookie('hasLaunch', 1, 365);
}

});
$.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  

     }
 }); 


  //
 $('#integra2positive').on('click',function(){
    
       event.preventDefault();
          var integra2_positive=1;
          var integra2_negative=0;


       $.ajax({
        
                   method: 'POST',
                   url: "/integra2-positive",
                   data: {integra2_positive:1, integra2_negative:0},
                   success: function(){
                        alert('Gracias por tu respuesta');
                   },
                   error: function(){
                       alert('Tu respuesta no fue recibida');
                   },
               })
           
      });

  //

   //
 $('#integra2negative').on('click',function(){
       event.preventDefault();
     var integra2_positive=0;
     var integra2_negative=1;
       $.ajax({
                   type:"ajax",
                   url: "/integra2-negative",
                   type: 'POST',
                   data: {integra2_positive:0, integra2_negative:1},
                   success: function(){
                        alert('Gracias por tu respuesta');
                   },
                   error: function(){
                       alert('Tu respuesta no fue recibida');
                   },
               })
           
      });

  //


}); 
</script>  


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
          <li><a href="{{ route('Interes-Publico') }}">Información de Interés Público</a></li>
          <li><a href="{{ route('Covid19') }}">Covid-19 </a></li>
          <li>
            <a href="#">Nosotros</a>
            <ul>
              <li><a href="{{ route('Estructura') }}">Estructura</a></li>
              <li><a href="{{ route('Historia') }}">Historia</a></li>
              {{-- <li><a href="{{ route('Normatividad') }}">Normatividad</a></li> --}}
            </ul>
          </li>
          <li>
            <a href="{{ route('Candidatos') }}">Gobiernos Verdes</a>
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
              <li><a href="{{route ('Proactividad')}}">Proactividad</a></li>
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
      {{-- <address class="navbar-address visible-lg">call us: <span class="text-dark">(+080) 9684 32 45 789</span></address> --}}
      <div class="social-list hidden-xs">
        <a href="https://twitter.com/verdeedomex" class="icon ion-social-twitter"></a>
        <a href="https://www.facebook.com/partidoverdeedomex" class="icon ion-social-facebook"></a>
        <a href="https://www.instagram.com/partidoverdeedomex" class="icon ion-social-instagram"></a>
        <a class="brand" target="_blank" href="https://www.saimex.org.mx/"><img class="brand-img-white" src="images\logos verde 15 de septiembre\Saimex.png"  width="70" height="40"><img class="brand-img" src="images\logos verde 15 de septiembre\Saimex negro.png"  width="70" height="40"></a>
        <a class="brand" target="_blank" href="https://bit.ly/3p7w6KO"> <img class="brand-img-white" src="images\logos verde 15 de septiembre\logoIpomex.png"  width="80" height="50"><img class="brand-img" src="images\logos verde 15 de septiembre\logoDenuncias1 negro.png"  width="80" height="50"></a>
        <a class="brand" target="_blank" href="https://bit.ly/2U1yUuS"><img class="brand-img-white" src="images\logos verde 15 de septiembre\logoPNT.png"  width="70" height="40"><img class="brand-img" src="images\logos verde 15 de septiembre\logoPNT NEGRO.png"  width="70" height="40"></a>
        <a class="brand" target="_blank" href="https://www.sarcoem.org.mx/"><img class="brand-img-white" src="images\logos verde 15 de septiembre\logoSarcomex.png"  width="70" height="40"><img class="brand-img" src="images\logos verde 15 de septiembre\logoSarcomex negro.png"  width="70" height="40"></a>
        <a class="brand" target="_blank" href="http://www.ipomex.org.mx/"><img class="brand-img-white" src="images\logos verde 15 de septiembre\ipom.png"  width="65" height="25"><img class="brand-img" src="images\logos verde 15 de septiembre\logoIpomex negro.png"  width="65" height="25"></a>  &nbsp;    
         <a  target="_blank" href="{{route('Transparencia')}}" ><FONT SIZE=4><font face="Calibri"><b>TRANSPARENCIA </b>  &nbsp;</a> 
        <a  target="_blank" href="{{route('Covid19')}}" ><FONT SIZE=4><font face="Calibri"><b> COVID-19</b></a>
          
        
    </header>
  <!-- modal finish -->
    <div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times; cerrar</button>
        <h4 class="modal-title">INTEGRA2</h4>
        <small class="text-success">        
        Comprometidos con la inclusión y a fin de garantizar el derecho de acceso a la información pública de la ciudadanía; a partir del 02 de diciembre de 2022 esta página web oficial del Comité Ejecutivo Estatal del Partido Verde Ecologista de México en el Estado de México cuenta con la herramienta  <b>INTEGRA2 desarrollado por la Comisión Estatal para el Acceso a la Información Pública de Sinaloa </b> para ponerla a disposición -en específico- de los grupos vulnerables que requiera este apoyo.  <br>
      </div>
      <div class="modal-body">
        
         <b> ¿Qué es? </b>
          <br>
Herramienta web de accesibilidad para personas con discapacidad auditiva, manual, dislexia, presbicia, deuteranopia, ritanopia, otras formas de daltonismo, problemas o discapacidades visuales y cognitivas. </small>
             
                       <div class="text-center">
<iframe width="560" height="315" src="https://www.youtube.com/embed/QD7ClqKzcNs" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br>
¿Haz utilizado esta herramienta? 

<form id="form1" name="form1">
  @csrf
 <button data-dismiss="modal" id ="integra2positive"name="integra2positive"><center><b>Si</b>&nbsp; </center> </button> &nbsp;<button  data-dismiss="modal" id="integra2negative" name="integra2negative"><b>No</b></button>
</form>



                       </div>
                       </div>                  
                       </div>
                       </div>
                       </div>

<!-- modal finish-->
  <div class="copy-bottom white boxed">© Partido Verde Estado de México</div>
  <div class="pagepiling">
    <div class="pp-scrollable text-white section section-1">      
         <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/Fondo-web.webp);"></div>
            <div class="scrollable-content">
              <div class="vertical-centred">
                <div class="boxed boxed-inner">
                  <div class="vertical-title hidden-xs hidden-sm">
                    <span>Fuerza Verde 2023</span></div>
                  <div class="boxed">
                    <div class="container">
                      <div class="intro">
                        <div class="row ">
                          <div class="col-md-8 col-lg-6" style="background: rgba(80,185,72,0.8); padding: 2rem;">
                            <h1 class="display-2 text-white"><span>¡FUERZA <br> </span> VERDE 2023!</h1>
                           <!-- <p class="subtitle-top" >Da click <a href="{{route ('Propuestas')}}">aquí</a></p>-->
                            <div class="hr-bottom"></div>
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
      <!-- APARTADO CARRUSEL 2 -->
      
      {{--<div class="pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/back-ground.webp);"></div>
            <div class="scrollable-content">
              <div class="vertical-centred">
                <div class="boxed boxed-inner">
                  <div class="vertical-title hidden-xs hidden-sm"><span>Candidatos</span></div>
                  <div class="boxed">
                    <div class="container">
                      <div class="intro">
                        <div class="row ">
                          <div class="col-md-8 col-lg-6" style="background: rgba(80,185,72,0.8); padding: 2rem;">
                            <h1 class="display-2 text-white"><span>¡Conoce</span> a tu Candidato!</h1>
                            <p class="subtitle-top" >Da click <a href="{{route ('Candidatos')}}">aquí</a></p>
                            <div class="hr-bottom"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>--}}
      

    <!-- Seccion de lo demás -->

      <div class="pp-scrollable section section-2">
        <div class="scroll-wrap">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Misión</span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-5 col-lg-5">
                          <h2 class="title-uppercase text-primary">Misión:</h2>
                          <ul class="service-list">
                            <li style="text-align: justify">El Partido Verde Ecologista de México es una organización de ciudadanos ecologistas, comprometidos con el respeto por todas las manifestaciones de la vida, la protección del medio ambiente y la contención del deterioro ecológico; y cuya acción política se orienta a la promoción de un desarrollo sustentable que permita a los seres humanos vivir en una sociedad justa, libre y en armonía con la naturaleza.</li>
                          </ul>
                        </div>
                        <div class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-2">
                            <h2 class="title-uppercase text-primary">Visión:</h2>
                            <ul class="service-list">
                              <li style="text-align: justify">El Partido Verde Ecologista de México es la fuerza política de los ciudadanos que participan democrática y libremente en las decisiones fundamentales de la sociedad, para garantizar la sustentabilidad de los recursos naturales y el derecho de cada persona a su desarrollo económico, político, social e individual en un ambiente sano, de respeto por la vida y la naturaleza y dentro de una sociedad más justa.</li>
                            </ul>
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
<!-- APARTADO CARRUSEL 2 -->
      
<div class="pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/Banner.webp);"></div>
            <div class="scrollable-content">
              <div class="vertical-centred">
                <div class="boxed boxed-inner">
                  <div class="vertical-title hidden-xs hidden-sm"><span>Súmate</span></div>
                  <div class="boxed">
                    <div class="container">
                      <div class="intro">
                        <div class="row">
                          <div class="col-md-8 col-lg-6">
                            <h1 class="display-2 text-white"><span>¡Súmate</span> al mejor Partido!</h1>
                            <p class="subtitle-top">Súmate al Verde</p>
                            <div class="hr-bottom"></div>
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
      <div class="pp-scrollable text-white section section-3">
        <div class="scroll-wrap">
          <div class="bg-changer">
              {{-- falta foto de pepe --}}
            <div class="section-bg" style="background-image:url(images/secretarios/landing/pepe.webp);"></div>
           <!-- <div class="section-bg" style="background-image:url(images/secretarios/landing/hector.webp);"></div> -->
            <div class="section-bg" style="background-image:url(images/secretarios/landing/fabian.webp);"></div>
            <!--<div class="section-bg" style="background-image:url(images/secretarios/landing/brigida.webp);"></div> -->
             <div class="section-bg" style="background-image:url(images/secretarios/landing/diego.webp);"></div> 
            <!-- <div class="section-bg" style="background-image:url(images/secretarios/landing/mayra.webp);"></div> -->
            <!-- <div class="section-bg" style="background-image:url(images/secretarios/landing/jorge.webp);"></div> -->
          </div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span>secretarios</span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="title-uppercase text-white">Estructura</h2>
                          <div class="row-project-box row">
                            @foreach($secretario as $s)
                            <div class="col-project-box col-sm-6 col-md-4 col-lg-3">
                              <a href="{{route ('Secretarios.Show',[$s->slug])}}" class="project-box">
                                <div class="project-box-inner">
                                  <h5 >{{$s->nombre}}</h5>
                                  <div class="project-category">{{ $s->cargo }}</div>
                                </div>
                              </a>
                            </div>
                            @endforeach
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

      <div class="pp-scrollable section section-2"">
        <div class="scroll-wrap">
            <div class="section-bg" style="background-image:url(images/bg/bg-video.webp);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs text-dark hidden-sm"><span>Videos</span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-5 col-lg-5">
                          <ul style="opacity: 1 !important" class="service-list">
                            <li style="text-align: justify; font-size: 112%"><p>El Comité de Blindaje está listo para traer personas transparentes en las próximas elecciones.</p>
                                <p>Vigilaremos que nuestras futuras candidatas y candidatos sean personas trabajadoras, honestas, transparentes e incluyentes.</p></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1">
                            <div class="post-video">
                                <div class="container">
                                  <div class="embed-responsive embed-responsive-16by9">
                                  <iframe loading="lazy" class="embed-responsive-item" src="https://www.youtube.com/embed/5_yzOEMlnjk"frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                  </div>
                                  
                                </div>
                                
                            </div>
                            
                          </div> 
                        </div>
                        <center> <h2> <b> VISITANTES:</b>  <br>
    <!-- Start of CuterCounter Code --> 
<a href="https://websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
<img style="border: 0px solid; display: inline;" alt="contador de visitas" src="https://websmultimedia.com/contador-de-visitas.php?id=4691"></a><br><!-- End of CuterCounter Code --> </h2></center>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="pp-scrollable text-white section section-5">
        <div class="scroll-wrap">
         <div class="section-bg" style="background-image:url(images/bg/bg-ecologista.webp);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs text-white hidden-sm"><span>El Ecologista</span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-6 col-lg-5">
                          <span class="icon-quote ion-quote"></span>
                          <h2 class="title-uppercase text-white">Revista El Ecologista</h2>
                        </div>
                        <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2 ">
                          <div class="review-carousel owl-carousel">
                           
                             <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_21"><img style="width: 55% !important" src="images/ecologista/por21.jpg"></a>
                                Vol. 21
                            </div>


                           <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_20"><img style="width: 55% !important" src="images/ecologista/por20.jpg"></a>
                                Vol. 20
                            </div>


                           <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/ecologista_19_05"><img style="width: 55% !important" src="images/ecologista/por19.jpg"></a>
                                Vol. 19
                            </div>

                           <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_18"><img style="width: 55% !important" src="images/ecologista/por18.jpg"></a>
                                Vol. 18
                            </div>

                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_17"><img style="width: 55% !important" src="images/ecologista/VOLUMEN17.jpg"></a>
                                Vol. 17
                            </div>

                          <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/ecologista_diciembre_2021"><img style="width: 55% !important" src="images/ecologista/13.jpg"></a>
                                Vol. 16
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/ecologista-octubre"><img style="width: 55% !important" src="images/ecologista/15.JPG"></a>
                                Vol. 15
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/ecologista_abril-junio_3_"><img style="width: 55% !important" src="images/ecologista/14.JPG"></a>
                                Vol. 14
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/01_ecologista_2021_digital"><img style="width: 55% !important" src="images/ecologista/13.1.JPG"></a>
                                Vol. 13
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/10-12-2020_ecologista_12"><img style="width: 55% !important" src="images/elecologista/por12.webp"></a>
                                Vol. 12
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_20ecologista_2011"><img style="width: 55% !important" src="images/elecologista/por11.webp"></a>
                                Vol. 11
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_no_10"><img style="width: 55% !important" src="images/elecologista/por10.webp"></a>
                                Vol. 10
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista__mayo_2020"><img style="width: 55% !important" src="images/elecologista/por9.webp"></a>
                                Vol. 9
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista8"><img style="width: 55% !important" src="images/elecologista/por8.jpg"></a>
                                Vol. 8
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/elecologista7"><img style="width: 55% !important" src="images/elecologista/por7.jpg"></a>
                                Vol. 7
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_n.6"><img style="width: 55% !important" src="images/elecologista/por6.jpg"></a>
                                Vol. 6
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el_ecologista_no.5"><img style="width: 55% !important" src="images/elecologista/por5.webp"></a>
                                Vol. 5
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el-ecologista_vol._4"><img style="width: 55% !important" src="images/elecologista/por4.webp"></a>
                                Vol. 4
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el-ecologista_vol._3_"><img style="width: 55% !important" src="images/elecologista/por3.webp"></a>
                                Vol. 3
                            </div>
                            <div class="review-carousel-item">
                                <a target="blank" href="https://issuu.com/elecologista/docs/el-ecologista_vol._2_corregida"><img style="width: 55% !important" src="images/elecologista/por2.webp"></a>
                                Vol. 2
                            </div>
                            <div class="review-carousel-item">
                              <a target="blank" href="https://issuu.com/elecologista/docs/el-ecologista_vol._1_corregida"><img style="width: 55% !important" src="images/elecologista/por1.webp"></a>
                              Vol. 1
                            </div>
                            {{-- <div class="review-carousel-item">
                              <div class="text">
                              <p>“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</p>
                              <p> Thank you so much for all your design and expertise."</p>
                              </div>
                              <div class="review-author">
                                <div class="author-name">John</div>
                                <i>Apartment view lake at Brooklyn</i>
                              </div>
                            </div> --}}
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

      <div class="pp-scrollable section section-6">
        <div class="scroll-wrap">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm"><span>Contacto</span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro overflow-hidden">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="title-uppercase">Contáctanos</h2>

                          <div class="contact-info">
                            <div class="row-contact-info row">
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-12">Escríbenos</h3>
                                  <div class="col-right col-sm-8 col-md-12 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark">email</strong><br>

                                        <a style="color: gray" href="mailto:hola@partidoverdeedomex.org">hola@partidoverdeedomex.org</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-12">llámanos</h3>
                                  <div class="col-right col-sm-8 col-md-12 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark">Teléfono</strong><br>

                                      <a style="color: gray" href="tel:+7229147192"> 01 (722) 9 14 71 92</a>
                                    </div>
                                    {{-- <div class="contact-info-row col-sm-6 col-md-12 ">
                                      <strong class="text-dark">support</strong><br>
                                      (00232) 568 323 901
                                    </div> --}}
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-12">Ubícanos</h3>
                                  <div class="col-right col-sm-8 col-md-10 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                        República de Belice #109 Colonia Américas C.P. 50130 Toluca de Lerdo
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div id="map" class="map-2"></div> <br>
                         
                          <center> <h4><a href="/proteccion-de-datos-personales#avisos"><strong class="text-dark">Avisos de Privacidad</strong></a> </h4></center>
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
    </div>
  </div>


<!-- jQuery -->
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
