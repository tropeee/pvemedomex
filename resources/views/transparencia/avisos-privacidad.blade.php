<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- <main style="margin-top: 8rem !important" class="page-header">
        <div class="container"><h1>Gestión Documental (Archivo)</h1></div>
    </main> --}}

<div class="animsition">
  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    @include('partials.menu')

    <!-- Navbar -->

    @include('partials.navbar')

    <!-- Pageheader -->

    <main class="page-header">
        <div class="container"><h1>Avisos de Privacidad</h1></div>
    </main>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">Avisos de Privacidad</div>
                  </div>
                </div>
            </div>
          <div class="content">
            <div class="projects">
              <div class="grid-items js-isotope js-grid-items">
                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                    <a style="text-decoration: none;" href="#">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Finanzas Verde.</p>
                      </div>
                    </div>
                    </a>
                    <a  href="#" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                    <a style="text-decoration: none;"  href="">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Candidatos PVEM Proceso Electoral Federal 2018.</p>
                      </div>
                    </div>
                    </a>
                    <a  href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos Secretaría de la Mujer.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Sistema Integral de Estructura Electoral.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos, Capacitación y Asesoría.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- jQuery -->
@include('partials.scripts')

</body>
</html>
