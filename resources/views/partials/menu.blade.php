<!-- Sidebar Menu-->

<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <ul class="menu-list right-boxed">
      <li class="active">
        <a  href="{{ route('Inicio') }}">Inicio</a>
      </li>
       <li><a href="{{ route('Interes-Publico') }}">Interés Público</a></li>
      <li>
        <a href="works.html">Nosotros</a>
        <ul>
          <li><a href="{{ route('Estructura') }}">Estructura</a></li>
          <li><a href="{{ route('Historia') }}">Historia</a></li>
          {{-- <li><a href="{{ route('Normatividad') }}">Normatividad</a></li> --}}
        </ul>
      </li>
      <li>
        <a href="{{ route('Candidatos') }}">Candidatos</a>
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
        <a href="" class="icon ion-social-twitter"></a>
        <a href="" class="icon ion-social-facebook"></a>
        <a href="" class="icon ion-social-instagram"></a>
      </div>
      <div class="copy">© Partido Verde Estado de México<br></div>
    </div>
  </div>
