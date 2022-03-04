@extends('partials.base')
<!-- Metas -->
@section('descripcion')
Candidatas y Candidatos del Partido Verde Estado de México
@endsection
@section('titulo')
Candidatas y Candidatos
@endsection
@section('imagen')
{{ asset('images/Logo_PVEM_300x300.png')}}
@endsection
@section('url')
https://partidoverdeedomex.org/candidatas-y-candidatos
@endsection
<!-- Metas -->

<!-- Contenido -->

@section('contenido')
    <!-- Pageheader -->
    <main class="page-header">
        <div class="container"><h1>Candidatas y Candidatos</h1></div>
    </main>


    <section class="section">
        <div class="container">
          <!-- FEDERALES INICIO -->
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Diputación Federal:</div>
                <br>
                {{-- <div style="font-size:75% !important" class="info-title">Municipio:</div>
                <br> --}}
                {{-- <select class="selectpicker" id="municipio" name="municipio">
                    <option value="Todos">Todos</option>
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
                </select> --}}
                <select class="selectpicker" id="distrito" name="distrito">
                    <option value="Todos">Distrito</option>
                    <option value="1">01</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="31">31</option>
                    <option value="33">33</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                </select>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">

                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Federal')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro" style="min-height: 410px !important;" id="{{$c->distrito}}">
                            <div class="team-profile">
                                <img alt="{{ $c->nombre }}" src="{{ asset($c->foto) }}">
                                    <div class="team-name" style="color:#cee002;">
                                        <h6 >{{ $c->nombre }}</h6>
                                        <div class="team-spec">Distrito {{ $c->distrito }}</div>
                                        <div class="team-spec">{{ $c->cabecera }}</div>
                                    </div>
                                      <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                  @endif
                @endforeach

              </div>
            </div>
                  <!-- FEDERALES FIN -->

          </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
          <!-- LOCALES INICIO -->
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Diputación Local:</div>
                <br>
                <select class="selectpicker1" id="distrito1" name="distrito1">
                    <option value="Todos">Distrito</option>
                    <option value="1">01</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="31">31</option>
                    <option value="33">33</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                </select>
              </div>
            </div>
            <!-- Muestra candidatos  -->
            <div class="col-md-9">
              <div class="row-team row">
                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Local')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro1" style="min-height: 410px !important;" id="{{$c->distrito}}">
                            <div class="team-profile">
                                <img alt="{{ $c->nombre }}" src="{{ asset($c->foto) }}">
                                <!-- <div class="team-hover">
                                    <div class="team-content">
                                        <div class="team-name">
                                        <h6>{{ $c->nombre }}</h6>
                                        <div class="team-spec">Distrito {{ $c->distrito }}</div>
                                        <div class="team-spec">{{ $c->cabecera }}</div>
                                        </div>
                                        <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div> -->
                                    <div class="team-name" style="color:#cee002;">
                                        <h6>{{ $c->nombre }}</h6>
                                        <div class="team-spec">Distrito {{ $c->distrito }}</div>
                                        <div class="team-spec">{{ $c->cabecera }}</div>
                                    </div>
                                      <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                  @endif
                @endforeach
              </div>
            </div>
                  <!-- MUNICIPALES FIN -->
          </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
          <!-- MUNICIPALES INICIO -->
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Presidencia Municipal:</div>
                <br>
                <div style="font-size:75% !important" class="info-title">Municipio:</div>
                <br>
                <select class="selectpicker2" id="distrito2" name="distrito2">
                    <option value="Todos">Municipio</option>
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
                    <option value="Xonacatlan">Xonacatlán</option>
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
              </div>
            </div>
            <!-- Muestra candidatos  -->
            <div class="col-md-9">
              <div class="row-team row">
                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Municipal')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro2" id="{{$c->municipio}}">
                            <div class="team-profile" style="min-height: 410px !important;">
                                <img alt="{{ $c->nombre }}" src="{{ asset($c->foto) }}">
                                <!-- <div class="team-hover">
                                    <div class="team-content">
                                        <div class="team-name">
                                        <h6>{{ $c->nombre }}</h6>
                                        <div class="team-spec">Municipio {{$c->municipio }}</div>
                                        </div>
                                        <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div> -->
                                    <div class="team-name" style="color:#cee002;">
                                        <h6>{{ $c->nombre }}</h6>
                                        <div class="team-spec">Municipio {{$c->municipio }}</div>
                                      </div>
                                      <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                  @endif
                @endforeach
              </div>
            </div>
                  <!-- MUNICIPALES FIN -->

          </div>
        </div>
    </section>

    <!-- <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Candidato al Ayuntamiento:</div>
                <br>
                <div style="font-size:75% !important" class="info-title">Municipio:</div>
                <br>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">

                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Miembro')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro3" id="{{$c->municipio}}">
                            <div class="team-profile">
                                <img alt="{{ $c->nombre }}" src="{{ asset($c->foto) }}">
                                <div class="team-hover">
                                    <div class="team-content">
                                        <div class="team-name">
                                        <h6>{{ $c->nombre }}</h6>
                                        <div class="team-spec">Municipio {{$c->municipio }}</div>
                                        </div>
                                        <a target="_blank" href="{{ route('Candidatos.Show', [$c->slug]) }}" class="link-arrow">Ver más... <i class="icon ion-ios-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </section> -->

    <style>
        .team-hover:hover{
            cursor: pointer;
        }
    </style>


@endsection

@section('scripts')
<script>

$('.selectpicker').selectpicker();

$('#distrito').change(function (e) {
  let d = this.value;
  
  // $('#' + d).hide();

  $(".cuadro").each(function(){
    if(d == "Todos"){
      $(this).show();
    }else{
      if(($(this).attr('id')) == d ){
      $(this).show();
    }else{
      $(this).hide();
    }
    }
  });

});

$('.selectpicker1').selectpicker();

$('#distrito1').change(function (e) {
  let mun = this.value;
  
  // $('#' + d).hide();

  $(".cuadro1").each(function(){
    if(mun == "Todos"){
      $(this).show();
    }else{
      if(($(this).attr('id')) == mun ){
      $(this).show();
    }else{
      $(this).hide();
    }
    }
  });

});

$('.selectpicker2').selectpicker();

$('#distrito2').change(function (e) {
  let mun = this.value;
  // $('#' + d).hide();
  
  $(".cuadro2").each(function(){
    // console.log($(this).attr('id'));
    let optionValue = $(this).attr('id');
    if(optionValue == 'Xonacatlán') {
      console.log(optionValue);
    }
    if(mun == "Todos"){
      $(this).show();
    }else{
      // if($(this).attr('id')=='Xonacatlán'){
      //   console.log('Huevos');
      // }
      if(($(this).attr('id')) == mun ){
      $(this).show();
    }else{
      $(this).hide();
    }
    }
  });

});

function link(data){
    let slug = data;
    let route = "{{route('Candidatos.Show','')}}";
    let ruta = route+"/"+slug;
    console.log(ruta);
    window.open(ruta);
}

// $('#municipio').change(function (e) {
//   let m = this.value;
//   // $('#' + m).hide();

//   $(".cuadro").each(function(){

//     if(m == "Todos"){
//       $(this).show();
//     }else{
//       if(($(this).attr('id')) == m ){
//       $(this).show();
//     }else{
//       $(this).hide();
//     }
//     }
//   });

// });

</script>
@endsection
