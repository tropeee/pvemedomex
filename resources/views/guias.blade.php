<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')
<style>
    .overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 2.5%;
      right: 0;
      height: 100%;
      width: 95%;
      opacity: 0;
      transition: .5s ease;
      background-color: #CEE002;
    }
    #guia:hover .overlay {
      opacity: 1;
    }
    .text {
      color: black;
      font-size: 20px;
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }
    .text2 {
      color: black;
      font-size: 20px;
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
    }
    .text :hover, .ion-ios-arrow-right{
      color: black !important;
    }

</style>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="animsition">
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    @include('partials.menu')

    <!-- Navbar -->

    @include('partials.navbar')

    <!-- Pageheader -->

    <main style="margin-bottom: 6.1rem !important" class="page-header-3">
        <div class="container">
          <h1>Guías</h1>
        </div>
    </main>

    <div class="content">
        <section style="padding-top: 0 !important" class="section-message section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Guías</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="guia" class="col-md-8 ">
                        <img class="img-responsive" src="{{ asset('images/guias/guia-mujeres.png')}}">
                        <div class="overlay">
                            <div class="text2">
                                <h6 style="text-align: center; margin-bottom:1rem !important">Guía de Atención</h6>
                                <p style="font-size: 14px; text-align: justify; line-height: 100% !important "><b>En casos de violencia política contra las mujeres por razones de género en el Estado de México, atribuciones y procedimientos.</b></p>
                            </div>
                            <a target="blank" href="{{ asset('pdf/publicaciones/Guia-de-atencion-de-Observatorio-25-feb.pdf')}}" class="link-arrow text"><span style="font-size: 14px">Ver más... </span><i class="icon ion-ios-arrow-right"></i></a>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </section>
    </div>

    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- Scripts -->
@include('partials.scripts')

</body>
</html>
