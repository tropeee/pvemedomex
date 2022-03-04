@extends('partials.base')

<!-- Metas -->
@section('descripcion')
Noticias Partido Verde Estado de México
@endsection
@section('titulo')
Noticias Partido Verde Estado de México
@endsection
@section('imagen')
{{ asset('images/Logo-72x72.png')}}
@endsection
@section('url')
https://partidoverdeedomex.org/noticias
@endsection
<!-- Metas -->

@section('contenido')
<main class="page-header">
    <div class="container"><h1>Noticias</h1></div>
</main>
    <div style="padding-top: 15rem" class="content">
      <div class="container">
        {{-- <div class="filter-content-4">
          <ul class="filter js-filter">
            <li class="active"><a href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".inspiration">Inspiration </a></li>
            <li><a href="#" data-filter=".architecture-inteior">Architecture & Inteior</a></li>
            <li><a href="#" data-filter=".decoration">Decoration</a></li>
            <li><a href="#" data-filter=".plants">Plants</a></li>
          </ul>
        </div> --}}
        <div class="js-isotope">
            <a href="{{route('Noticia1')}}">
          <div class="inspiration card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url({{ asset('images/noticias/n1.webp')}})"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="{{ asset('images/noticias/n1.webp')}}">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">PVEM</a> 7 de abril, 2021</div>
              <h4 class="card-title">EL VERDE SE POSICIONA EN EDOMEX RUMBO A LAS ELECCIONES DEL 6 DE JUNIO</h4>
              <div class="card-text">En el Edoméx el partido del tucán mostró un crecimiento exponencial en las preferencias electorales para Diputaciones locales y Presidentes Municipales....</div>
              <a href="{{route('Noticia1')}}" class="card-read-more">Continuar</a>
            </div>
          </div>
        </a>

          {{-- <div class="architecture-inteior card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(images/news/2-770x555.jpg)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="images/news/2-770x555.jpg">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Rectangle & Square House In Brooklyn</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
          <div class="decoration card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(images/news/3-770x555.jpg)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="images/news/3-770x555.jpg">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Interior Design For Apartment</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div>
          <div class="plants card-row js-isotope-item">
            <div class="card-row-img col-md-7 col-lg-8 hidden-sm hidden-xs" style="background-image:url(images/news/4-770x555.jpg)"></div>
            <img class="visible-sm visible-xs img-responsive" alt="" src="images/news/4-770x555.jpg">
            <div class="card-block col-md-offset-7 col-lg-offset-8">
              <div class="card-posted"><a href="#">Admin</a> on Dec 15th, 2016</div>
              <h4 class="card-title">Small & Minimal House On Paterson Hill</h4>
              <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus faucibus est sed facilisis viverra. Praesent nec accumsan nibh, eu grav da metus. Curabitur quis sagittis nisl. In lectus ligula, varius quis...</div>
              <a href="#" class="card-read-more">Continue</a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>

    @endsection
