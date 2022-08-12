<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')

<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 3px solid #008f39;
}

div.gallery img {
  width: auto;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 20.0%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}


.responsive1 {
  padding: 0 6px;
  float: left;
  width: 25.0%;
}

@media only screen and (max-width: 700px) {
  .responsive1 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive1 {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

    .styled-table {
    text-align: justify;
    width: 100% !important;
    /* border-collapse: collapse; */
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

    @media screen and (max-width: 600px) {
        .ocultar{
        display:none;
        }

        .team-name h6, .team-name div{
            font-size:2.5vw;
        }
    }

    @media screen and (min-width: 600px) {
        .ocultar2{
        display:none;
        }
    }

</style>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     <main style="margin-top: 8rem !important" class="page-header">
        <div class="container"><h1>COVID-19 </h1></div>
    </main> 

<div class="animsition">

   
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    @include('partials.menu')

    <!-- Navbar -->

    @include('partials.navbar')

    <!-- Pageheader -->
    <section style="padding-top: 10px;">
        <div class="container">
            <div class="intro">
                <div class="row" style="text-align: justify; align-items: center; padding: 3rem;">
                    <div class="">
                    <!-- <h1 class="display-2 text-white"><span>Partido Verde</span> del Estado de México</h1> -->
                    <p class="subtitle-top" style="color: black;  font-size: large; font-weight: 150;">El Partido Verde Ecologista de México en el Estado de México, pone a su disposición este micrositio con el objetivo de brindar información clara y precisa sobre la emergencia sanitaria por la enfermedad del coronavirus Covid-19.</p>
                    <!-- <div class="hr-bottom"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section style="padding-top:0 !important" class="section">
        <div >
          <center>
           
           <div class="responsive1">
  <div class="gallery">
    <a target="_blank" href="{{ asset('pdf\covid\01 COVID19 - ÁREAS.pdf')}}">
      <img src="{{ asset('images/covid/instrumentacion1.png')}}" alt="..." width="1000" height="200">
    </a>
    <div class="desc"> INTRUMENTACIÓN DE CONTROL PARA EL INGRESO – EGRESO DE
COMPAÑEROS DEL COMITÉ EJECUTIVO ESTATAL, FAMILIA VERDE, VISITAS,
Y PROVEEDORES.</div>
  </div>
</div>

        <div class="responsive1">
  <div class="gallery">
    <a target="_blank" href="{{ asset('pdf\covid\02 Manual Campaña Segura_PVEM_COVID-19_01.pdf')}}">
      <img src="{{ asset('images/covid/campaña1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">MANUAL Y LINEAMIENTOS DEL PARTIDO VERDE ECOLOGISTA DE MÉXICO ANTE EL COVID-19.</div>
  </div>
</div>

      <div class="responsive1">
  <div class="gallery">
    <a target="_blank" href="{{ asset('pdf\covid\03 Medidas prevencion de COVID 2021.pdf')}}">
      <img src="{{ asset('images/covid/medidas1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">RECOMENDACIONES PARA LAS MEDIDAS DE PREVENCIÓN DE CONTAGIOS EN EL COMITÉ ESTATAL ESTADO DE MEXICO DURANTE CONTINGENCIA SEMAFORO ROJO. </div>
  </div>
</div>

  <div class="responsive1">
  <div class="gallery">
    <a target="_blank" href="{{ asset('pdf\covid\04 Protocolo de seguridad COVID.pdf')}}">
      <img src="{{ asset('images/covid/protocolo1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">PROTOCOLO DE SEGURIDAD ANTE EL COVID-19 Y LA NUEVA NORMALIDAD.</div>    
  </div>
</div>


<!--<div class="clearfix"></div>
         <a target="blank" href="{{ asset('pdf\proactividad\2. Infografía Solicitud de Derechos ARCO.pdf')}}" class="cbp-caption" data-title=""> <img src="{{ asset('images/covid/instrumentacion.png')}}"  width="300" height="300" >     </a>
          <img src="{{ asset('images/covid/campaña.png')}}" width="300" height="300" >
           <img src="{{ asset('images/covid/medidas.png')}}" width="300" height="300" >
            <img src="{{ asset('images/covid/protocolo.png')}}" width="300" height="300" >-->
             </center>
            
        </div>


    </section> 

    <section class="section bg-dots">
        <br><br><br><br><br><br><br><br>
        <div class="container">
<center>
 <h1 style="color:#008f39;"> DISTRIBUCIÓN DE CASOS POR MUNICIPIO</h1></center>
        
           <a target="blank" href="https://edomex.gob.mx/covid-19" class="cbp-caption" data-title=""> <img class="img-responsive ocultar" style=" margin:auto; border-radius: 8px;" src="{{ asset('images/covid/mapa.png')}}">  </a>
          <!-- <img class="img-responsive ocultar" style=" margin:auto;" src=" https://appsn4.cggedomex.gob.mx:84/imgcovid/Mapa1.png">-->
        </div>
    </section>

<section style="padding-top:0 !important" class="section">
       
          <center>
           <h2 style="color:#008f39;"> INFORMACIÓN EN LENGUAS ORGINARIAS MEXIQUENSES </h2>
           <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://mazahua.edomex.gob.mx/sites/mazahua.edomex.gob.mx/files/files/inicio/corona.mp4 ">
     <img src="{{ asset('images/covid/camara1.png')}}" width="420"  height="240"></img>
    </a>
    <div class="desc"> MAZAHUA</div>
  </div>
</div>

        <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://otomi.edomex.gob.mx/sites/otomi.edomex.gob.mx/files/files/inicio/corona.mp4">
      <img src="{{ asset('images/covid/camara1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">OTOMÍ</div>
  </div>
</div>

      <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://matlazinca.edomex.gob.mx/sites/matlazinca.edomex.gob.mx/files/files/inicio/corona.mp4 ">
      <img src="{{ asset('images/covid/camara1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">MATLAZINCA </div>
  </div>
</div>

  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://nahuatl.edomex.gob.mx/sites/nahuatl.edomex.gob.mx/files/files/inicio/corona.mp4 ">
      <img src="{{ asset('images/covid/camara1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">NÁHUATL</div>    
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://tlahuica.edomex.gob.mx/sites/tlahuica.edomex.gob.mx/files/files/inicio/corona.mp4 ">
      <img src="{{ asset('images/covid/camara1.png')}}" alt="..." width="300" height="200">
    </a>
     <div class="desc">TLAHUICA</div>    
  </div>
</div>
<!--<div class="clearfix"></div>
         <a target="blank" href="{{ asset('pdf\proactividad\2. Infografía Solicitud de Derechos ARCO.pdf')}}" class="cbp-caption" data-title=""> <img src="{{ asset('images/covid/instrumentacion.png')}}"  width="300" height="300" >     </a>
          <img src="{{ asset('images/covid/campaña.png')}}" width="300" height="300" >
           <img src="{{ asset('images/covid/medidas.png')}}" width="300" height="300" >
            <img src="{{ asset('images/covid/protocolo.png')}}" width="300" height="300" >-->


             </center>
            
        </div>
<!-- Contador de visitas -->
<br>
<center><a href="https://websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
<img style="border: 0px solid; display: inline;" alt="contador de visitas" src="https://websmultimedia.com/contador-de-visitas.php?id=4690"></a><br>
<!-- Fin Contador de visitas --> </center>

    </section> 


    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- jQuery -->

@include('partials.scripts')

</body>
</html>
