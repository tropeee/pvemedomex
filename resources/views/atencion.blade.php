<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
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
          <h1>Atención Ciudadana</h1>
        </div>
    </main>

    <div class="content">
        <section style="padding-top: 0 !important" class="section-message section">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title">Atención Ciudadana</div>
                </div>
              </div>
              <div class="col-md-9">

                <form id="afiliacionForm" action="{{ route('atenciones.store') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group col-sm-12 col-lg-12">
                        <label>Seleccione su municipio:</label>
                        <br>
                        <select class="selectpicker" id="municipio" name="municipio">
                            <option value=""></option>
                            <option value="Acambay">Acambay</option>
                            <option value="Acolman">Acolman</option>
                            <option value="Aculco">Aculco</option>
                            <option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
                            <option value="Almoloya de Juárez">Almoloya de Juárez</option>
                            <option value="Almoloya del Río">Almoloya del Río</option>
                            <option value="Amanalco">Amanalco</option>
                            <option value="Amatepec">Amatepec</option>
                            <option value="Amecameca">Amecameca</option>
                            <option value="Apaxco">Apaxco</option>
                            <option value="Atenco">Atenco</option>
                            <option value="Atizapán">Atizapán</option>
                            <option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
                            <option value="Atlacomulco">Atlacomulco</option>
                            <option value="Atlautla">Atlautla</option>
                            <option value="Axapusco">Axapusco</option>
                            <option value="Ayapango">Ayapango</option>
                            <option value="Calimaya">Calimaya</option>
                            <option value="Capulhuac">Capulhuac</option>
                            <option value="Coacalco de Berriozábal">Coacalco de Berriozábal</option>
                            <option value="Coatepec Harinas">Coatepec Harinas</option>
                            <option value="Cocotitlán">Cocotitlán</option>
                            <option value="Coyotepec">Coyotepec</option>
                            <option value="Cuautitlán">Cuautitlán</option>
                            <option value="Chalco">Chalco</option>
                            <option value="Chapa de Mota">Chapa de Mota</option>
                            <option value="Chapultepec">Chapultepec</option>
                            <option value="Chiautla">Chiautla</option>
                            <option value="Chicoloapan">Chicoloapan</option>
                            <option value="Chiconcuac">Chiconcuac</option>
                            <option value="Chimalhuacán">Chimalhuacán</option>
                            <option value="Donato Guerra">Donato Guerra</option>
                            <option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
                            <option value="Ecatzingo">Ecatzingo</option>
                            <option value="Huehuetoca">Huehuetoca</option>
                            <option value="Hueypoxtla">Hueypoxtla</option>
                            <option value="Huixquilucan">Huixquilucan</option>
                            <option value="Isidro Fabela">Isidro Fabela</option>
                            <option value="Ixtapaluca">Ixtapaluca</option>
                            <option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
                            <option value="Ixtapan del Oro">Ixtapan del Oro</option>
                            <option value="Ixtlahuaca">Ixtlahuaca</option>
                            <option value="Xalatlaco">Xalatlaco</option>
                            <option value="Jaltenco">Jaltenco</option>
                            <option value="Jilotepec">Jilotepec</option>
                            <option value="Jilotzingo">Jilotzingo</option>
                            <option value="Jiquipilco">Jiquipilco</option>
                            <option value="Jocotitlán">Jocotitlán</option>
                            <option value="Joquicingo">Joquicingo</option>
                            <option value="Juchitepec">Juchitepec</option>
                            <option value="Lerma">Lerma</option>
                            <option value="Malinalco">Malinalco</option>
                            <option value="Melchor Ocampo">Melchor Ocampo</option>
                            <option value="Metepec">Metepec</option>
                            <option value="Mexicaltzingo">Mexicaltzingo</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
                            <option value="Nezahualcóyotl">Nezahualcóyotl</option>
                            <option value="Nextlalpan">Nextlalpan</option>
                            <option value="Nicolás Romero">Nicolás Romero</option>
                            <option value="Nopaltepec">Nopaltepec</option>
                            <option value="Ocoyoacac">Ocoyoacac</option>
                            <option value="Ocuilan">Ocuilan</option>
                            <option value="El Oro">El Oro</option>
                            <option value="Otumba">Otumba</option>
                            <option value="Otzoloapan">Otzoloapan</option>
                            <option value="Otzolotepec">Otzolotepec</option>
                            <option value="Ozumba">Ozumba</option>
                            <option value="Papalotla">Papalotla</option>
                            <option value="La Paz">La Paz</option>
                            <option value="Polotitlán">Polotitlán</option>
                            <option value="Rayón">Rayón</option>
                            <option value="San Antonio la Isla">San Antonio la Isla</option>
                            <option value="San Felipe del Progreso">San Felipe del Progreso</option>
                            <option value="San Martín de las Pirámides">San Martín de las Pirámides</option>
                            <option value="San Mateo Atenco">San Mateo Atenco</option>
                            <option value="San Simón de Guerrero">San Simón de Guerrero</option>
                            <option value="Santo Tomás">Santo Tomás</option>
                            <option value="Soyaniquilpan de Juárez">Soyaniquilpan de Juárez</option>
                            <option value="Sultepec">Sultepec</option>
                            <option value="Tecámac">Tecámac</option>
                            <option value="Tejupilco">Tejupilco</option>
                            <option value="Temamatla">Temamatla</option>
                            <option value="Temascalapa">Temascalapa</option>
                            <option value="Temascalcingo">Temascalcingo</option>
                            <option value="Temascaltepec">Temascaltepec</option>
                            <option value="Temoaya">Temoaya</option>
                            <option value="Tenancingo">Tenancingo</option>
                            <option value="Tenango del Aire">Tenango del Aire</option>
                            <option value="Tenango del Valle">Tenango del Valle</option>
                            <option value="Teoloyucan">Teoloyucan</option>
                            <option value="Teotihuacán">Teotihuacán</option>
                            <option value="Tepetlaoxtoc">Tepetlaoxtoc</option>
                            <option value="Tepetlixpa">Tepetlixpa</option>
                            <option value="Tepotzotlán">Tepotzotlán</option>
                            <option value="Tequixquiac">Tequixquiac</option>
                            <option value="Texcaltitlán">Texcaltitlán</option>
                            <option value="Texcalyacac">Texcalyacac</option>
                            <option value="Texcoco">Texcoco</option>
                            <option value="Tezoyuca">Tezoyuca</option>
                            <option value="Tianguistenco">Tianguistenco</option>
                            <option value="Timilpan">Timilpan</option>
                            <option value="Tlalmanalco">Tlalmanalco</option>
                            <option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
                            <option value="Tlatlaya">Tlatlaya</option>
                            <option value="Toluca">Toluca</option>
                            <option value="Tonatico">Tonatico</option>
                            <option value="Tultepec">Tultepec</option>
                            <option value="Tultitlán">Tultitlán</option>
                            <option value="Valle de Bravo">Valle de Bravo</option>
                            <option value="Villa de Allende">Villa de Allende</option>
                            <option value="Villa del Carbón">Villa del Carbón</option>
                            <option value="Villa Guerrero">Villa Guerrero</option>
                            <option value="Villa Victoria">Villa Victoria</option>
                            <option value="Xonacatlán">Xonacatlán</option>
                            <option value="Zacazonapan">Zacazonapan</option>
                            <option value="Zacualpan">Zacualpan</option>
                            <option value="Zinacantepec">Zinacantepec</option>
                            <option value="Zumpahuacán">Zumpahuacán</option>
                            <option value="Zumpango">Zumpango</option>
                            <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
                            <option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
                            <option value="Luvianos">Luvianos</option>
                            <option value="San José del Rincón">San José del Rincón</option>
                            <option value="Tonanitla">Tonanitla</option>
                        </select>
                        @if ($errors->has('municipio'))
                          <span style="color: #FF0000">{{ $errors->first('municipio') }}</span>
                        @endif
                      </div>
                      <div class="form-group col-sm-12 col-lg-12">
                        <label>Tipo de solicitud:</label>
                        <br>
                        <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Apoyo económico">Apoyo económico
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Apoyo material">Apoyo material
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Trabajo">Trabajo
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Presentar proyecto">Presentar proyecto
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Invitación a evento">Invitación a evento
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="tipo_solicitud" value="Otro" checked>Otro
                          </label>
                        @if ($errors->has('tipo_solicitud'))
                          <span style="color: #FF0000">{{ $errors->first('tipo_solicitud') }}</span>
                        @endif
                      </div>
                      <div class="form-group col-sm-12 col-lg-12">
                        <label>Justificación de la solicitud:</label>
                        <textarea class="input-gray" name="justificacion" value="{{old('justificacion')}}" id="justificacion" placeholder="Por favor explique brevemente el motivo de su solicitud"></textarea>
                        @if ($errors->has('justificacion'))
                          <span style="color: #FF0000">{{ $errors->first('justificacion') }}</span>
                        @endif
                      </div>
                    <div class="form-group col-sm-12 col-lg-12">
                        <input type="checkbox" id="check" name="check" value="check">
                        <b>&nbsp Al utilizar este formulario, usted acepta las políticas de almacenamiento y protección de datos personales visibles en este sitio web.</b>
                        @if ($errors->has('check'))
                            <span style="color: #FF0000">{{ $errors->first('check') }}</span>
                        @endif
                    </div>
                    <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Enviar</button></div>
                  </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script>
    $('.selectpicker').selectpicker();
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
