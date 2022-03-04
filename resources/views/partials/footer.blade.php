<footer id="footer" class="footer section boxed">
    <div class="footer-flex">
      <div class="flex-item">
        <a class="brand pull-left" href="{{ route('Inicio') }}">
          <img alt="" src="{{ asset('images/Logo-72x72.png')}}">
          <div class="brand-info">
            <div class="brand-text">Estado de</div>
            <div class="brand-name">México</div>
          </div>
        </a>
      </div>
      <div class="flex-item">
        <div class="inline-block">© Partido Verde EDOMEX - 2021</div>
      </div>
      {{-- <div class="flex-item">
        <ul>
          <li><a href="">Site Map</a></li>
          <li><a href="">Term & Conditions</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Help</a></li>
          <li><a href="">Affiliatep</a></li>
        </ul>
      </div> --}}
      <div class="flex-item">
        <ul>
          <li><a href="{{ route('Inicio') }}">Inicio</a></li>
          <li><a href="{{ route('Afiliacion') }}">Afiliación</a></li>
          <li><a href="{{ route('Atencion') }}">Atención</a></li>
          <li><a href="{{ route('Avisos-Privacidad') }}">Avisos de Privacidad</a></li>
        </ul>
      </div>
      <div class="flex-item">
        <div class="social-list">
            <a href="https://twitter.com/verdeedomex" class="icon ion-social-twitter"></a>
            <a href="https://www.facebook.com/partidoverdeedomex" class="icon ion-social-facebook"></a>
            <a href="https://www.instagram.com/partidoverdeedomex" class="icon ion-social-instagram"></a>
          </div>
      </div>
    </div>
  </footer>
