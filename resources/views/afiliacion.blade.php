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

    <!-- Pageheader -->

    <main style="margin-bottom: 6.1rem !important" class="page-header-3">
        <div class="container">
          <h1>Afiliación</h1>
        </div>
    </main>

    <div class="content">
        <section style="padding-top: 0 !important" class="section-message section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Afíliate</div>
                </div>
              </div>
              <div class="col-md-9">

                <form id="afiliacionForm" action="{{ route('afiliaciones.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="form-group col-sm-6 col-lg-12">
                      <label>Nombre(s):</label>
                      <input class="input-gray" type="text" value="{{old('nombres')}}" name="nombres" id="nombres" placeholder="Por favor ingrese su(s) nombre(s)*">
                      @if ($errors->has('nombres'))
                            <span style="color: #FF0000">{{ $errors->first('nombres') }}</span>
                      @endif
                    </div>
                    <div class="form-group col-sm-6 col-lg-12">
                        <label>Apellidos:</label>
                        <input class="input-gray" type="text" id="apellidos" name="apellidos" value="{{old('apellidos')}}" placeholder="Por favor ingrese sus apellidos*">
                        @if ($errors->has('apellidos'))
                            <span style="color: #FF0000">{{ $errors->first('apellidos') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <label>Correo electrónico:</label>
                        <input class="input-gray" type="email" name="email" id="email" value="{{old('email')}}" placeholder="Por favor ingrese un correo electrónico valido*">
                        @if ($errors->has('email'))
                            <span style="color: #FF0000">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-lg-12">
                      <label>Teléfono:</label>
                      <input class="input-gray" type="text" name="telefono" id="telefono" value="{{old('telefono')}}" placeholder="Por favor ingrese su número telefónico*">
                      @if ($errors->has('telefono'))
                        <span style="color: #FF0000">{{ $errors->first('telefono') }}</span>
                      @endif
                    </div>
                    <div class="form-group col-sm-12 col-lg-12" style="text-align: justify">
                        <input type="checkbox" id="check" name="check" value="check">
                        <b> <span> Al utilizar este formulario, usted acepta las políticas de almacenamiento y protección de datos personales visibles en este sitio web.<br><a target="blank" href="{{ asset('pdf/avisos-privacidad/Aviso_privacidad_integral_afiliados2021.pdf') }}">Podrá consultar el aviso de privacidad para el tratamiento de su datos personales.<a> </span></b>

                        @if ($errors->has('check'))
                            <span style="color: #FF0000">{{ $errors->first('check') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Afiliarme</button></div>
                  </div>
                  {{-- <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                  <div class="error-message">Lo sentimos, algo salió mal.</div> --}}
                </form>
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

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>

</body>
</html>
