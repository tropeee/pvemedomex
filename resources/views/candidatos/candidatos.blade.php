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

<!--
    <section class="section">
        <div class="container">
         
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Diputación Federal:</div>
                <br>
                
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
                

          </div>
        </div>
    </section> -->

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
                    <option value='ALMOLOYA DEL RIO'>ALMOLOYA DEL RIO</option>
  <option value='JOQUICINGO'>JOQUICINGO</option>
 <option value='MALINALCO'>MALINALCO</option>
 <option value='OCOYOACAC'>OCOYOACAC</option>
 <option value='SULTEPEC'>SULTEPEC</option>
 <option value='TENANGO DEL AIRE'>TENANGO DEL AIRE</option>
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
                 
          </div>
        </div>
    </section>


<section class="section">
        <div class="container">
          <!-- SINDICOS INICIO -->
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Sindicos:</div>
                <br>
                <div style="font-size:75% !important" class="info-title">Municipio:</div>
                <br>
                <select class="selectpicker3" id="distrito3" name="distrito3">
                    <option value="Todos">Municipio</option>
                   

 <option value='ALMOLOYA DEL RIO'>ALMOLOYA DEL RIO</option>
  <option value='JOQUICINGO'>JOQUICINGO</option>
 <option value='MALINALCO'>MALINALCO</option>
 <option value='OCOYOACAC'>OCOYOACAC</option>
 <option value='SULTEPEC'>SULTEPEC</option>
 <option value='TENANGO DEL AIRE'>TENANGO DEL AIRE</option>
               </select>
              </div>
            </div>
            <!-- Muestra candidatos  -->
            <div class="col-md-9">
              <div class="row-team row">
                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Sindico')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro3" id="{{$c->municipio}}">
                            <div class="team-profile" style="min-height: 300px !important;">
                                <img alt="{{ $c->nombre }}" src="{{ asset($c->foto) }}">
                              
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
                 
          </div>
        </div>
    </section>


    
<section class="section">
        <div class="container">
          <!-- REGIDORES -->
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Regidores:</div>
                <br>
                <div style="font-size:75% !important" class="info-title">Municipio:</div>
                <br>
                <select class="selectpicker4" id="distrito4" name="distrito4">
                    <option value="Todos">Municipio</option>
                     <option value='ACULCO'>ACULCO</option>
 <option value='ALMOLOYA DE JUAREZ'>ALMOLOYA DE JUAREZ</option>
 <option value='ALMOLOYA DEL RIO'>ALMOLOYA DEL RIO</option>
 <option value='AMECAMECA'>AMECAMECA</option>
 <option value='APAXCO'>APAXCO</option>
 <option value='ATIZAPAN DE ZARAGOZA'>ATIZAPAN DE ZARAGOZA</option>
 <option value='COACALCO'>COACALCO</option>
 <option value='CUAUTITLAN'>CUAUTITLAN</option>
 <option value='CUAUTITLAN IZCALLI'>CUAUTITLAN IZCALLI</option>
 <option value='CHALCO'>CHALCO</option>
 <option value='CHAPULTEPEC'>CHAPULTEPEC</option>
 <option value='DONATO GUERRA'>DONATO GUERRA</option>
 <option value='ECATZINGO'>ECATZINGO</option>
 <option value='HUEHUETOCA'>HUEHUETOCA</option>
 <option value='HUEYPOXTLA'>HUEYPOXTLA</option>
 <option value='ISIDRO FABELA'>ISIDRO FABELA</option>
 <option value='IXTAPAN DE LA SAL'>IXTAPAN DE LA SAL</option>
 <option value='JILOTEPEC'>JILOTEPEC</option>
 <option value='JOQUICINGO'>JOQUICINGO</option>
 <option value='JUCHITEPEC'>JUCHITEPEC</option>
 <option value='MALINALCO'>MALINALCO</option>
 <option value='MELCHOR OCAMPO'>MELCHOR OCAMPO</option>
 <option value='OCOYOACAC'>OCOYOACAC</option>
 <option value='OCUILAN'>OCUILAN</option>
 <option value='OTUMBA'>OTUMBA</option>
 <option value='PAPALOTLA'>PAPALOTLA</option>
 <option value='POLOTITLAN'>POLOTITLAN</option>
 <option value='SOYANIQUILPAN DE JUAREZ'>SOYANIQUILPAN DE JUAREZ</option>
 <option value='SULTEPEC'>SULTEPEC</option>
 <option value='TECAMAC'>TECAMAC</option>
 <option value='TEMAMATLA'>TEMAMATLA</option>
 <option value='TEMASCALCINGO'>TEMASCALCINGO</option>
 <option value='TEMASCALTEPEC'>TEMASCALTEPEC</option>
 <option value='TENANCINGO'>TENANCINGO</option>
 <option value='TENANGO DEL AIRE'>TENANGO DEL AIRE</option>
 <option value='TENANGO DEL VALLE'>TENANGO DEL VALLE</option>
 <option value='TEPETLIXPA'>TEPETLIXPA</option>
 <option value='TEXCALYACAC'>TEXCALYACAC</option>
 <option value='TEXCOCO'>TEXCOCO</option>
 <option value='TIANGUISTENCO'>TIANGUISTENCO</option>
 <option value='TIMILPAN'>TIMILPAN</option>
 <option value='TULTITLAN'>TULTITLAN</option>
 <option value='VALLE DE BRAVO'>VALLE DE BRAVO</option>
 <option value='VILLA DEL CARBON'>VILLA DEL CARBON</option>
 <option value='VILLA GUERRERO'>VILLA GUERRERO</option>
 <option value='VILLA VICTORIA'>VILLA VICTORIA</option>
 <option value='ZINACANTEPEC'>ZINACANTEPEC</option>
 <option value='VALLE DE CHALCO SOLIDARIDAD'>VALLE DE CHALCO SOLIDARIDAD</option>
 <option value='SAN JOSE DEL RINCON'>SAN JOSE DEL RINCON</option>
          
                   
                </select>
              </div>
            </div>
            <!-- Muestra candidatos  -->
            <div class="col-md-9">
              <div class="row-team row">
                @foreach ($candidatos as $c)
                    @if($c->tipo == 'Regidor')
                        <div onclick="link('{{$c->slug}}')" class="col-team col-xs-6 col-md-4 cuadro4" id="{{$c->municipio}}">
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
                 
          </div>
        </div>
    </section>

    <style>
        .team-hover:hover{
            cursor: pointer;
        }
    </style>


@endsection

@section('scripts')

<!-- JavaScript -->
<script>

$('.selectpicker3').selectpicker();

$('#distrito3').change(function (e) {
  let d = this.value;
  
  // $('#' + d).hide();

  $(".cuadro3").each(function(){
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
$('.selectpicker4').selectpicker();

$('#distrito4').change(function (e) {
  let d = this.value;
  
  // $('#' + d).hide();

  $(".cuadro4").each(function(){
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
