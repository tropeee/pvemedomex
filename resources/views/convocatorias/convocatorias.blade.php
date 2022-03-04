<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')
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

    <main style="margin-bottom: 6.1rem !important" class="page-header-3">
        <div class="container">
          <h1>Convocatorias</h1>
        </div>
    </main>

    <div class="content">
      <div class="grid-items js-isotope js-grid-items">
        <div class="grid-item js-isotope-item js-grid-item">
          <div class="card">
            <img alt="" width="426" height="426" class="img-responsive" src="images/convocatorias/1.jpg">
            <div class="card-block">
              <div class="card-posted"> 30 de Agosto, 2018</div>
              <h4 class="card-title">CONVOCATORIA SESIÓN EXTRAORDINARIA DEL CONSEJO POLÍTICO</h4>
              <div class="card-text">CONVOCATORIA A LOS CC. INTEGRANTES DEL CONSEJO POLÍTICO DEL PARTIDO VERDE ECOLOGISTA DE MÉXICO EN EL ESTADO DE MÉXICO CONSIDERANDO Que el Consejo Político del Estado de México...</div>
              <a href="{{ route('Conv1') }}" class="card-read-more">Leer más</a>
            </div>
          </div>
        </div>
        {{-- <div class="grid-item js-isotope-item js-grid-item">
          <div class="card">
            <img alt="" width="426" height="321" class="img-responsive" src="images/news/1-426x321.jpg">
            <div class="card-block">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Rectangle & Square House At Brooklyn</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
        </div>
        <div class="grid-item js-isotope-item js-grid-item">
          <div class="card">
            <img alt="" width="426" height="550" class="img-responsive" src="images/news/1-426x550.jpg">
            <div class="card-block">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Boxed Concrete House In Winter Forest</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
        </div>
        <div class="grid-item js-isotope-item js-grid-item">
          <div class="card">
            <img alt="" width="426" height="426" class="img-responsive" src="images/news/2-426x426.jpg">
            <div class="card-block">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">The Lodge Wooden Simple In London</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
        </div> --}}

      </div>
    </div>

    <!-- Footer -->
    @include('partials.footer');

  </div>
</div>

<!-- Scripts -->
@include('partials.scripts')

</body>
</html>
