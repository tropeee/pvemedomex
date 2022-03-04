@extends('partials.base')
<!-- Metas -->
@section('descripcion')
Portal de Transparencia del Partido Verde del Estado de México
@endsection

@section('titulo')
Portal de Transparencia
@endsection

@section('imagen')
{{ asset('images/Logo-72x72.png')}}
@endsection

@section('url')
https://partidoverdeedomex.org/portal-de-transparencia
@endsection
<!-- Metas -->

<!-- Contenido -->
@section('contenido')

    <!-- Pageheader -->
    <main class="page-header">
        <div class="container"><h1>Portal de Transparencia</h1></div>
    </main>

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Comité de Transparencia</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="images/estructura/Mayra.webp">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Mayra Eréndira Gómez Bravo</h6>
                          <div class="team-spec">Presidenta<br>Suplente: Susana Pichardo Pereyra</div>
                        </div>
                        <div class="team-social">
                          <a href="" class="icon ion-social-twitter"></a>
                          <a href="" class="icon ion-social-facebook"></a>
                          <a href="" class="icon ion-social-instagram"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/comite-transparencia/fabian1.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Fabián Pérez Lopez</h6>
                          <div class="team-spec">Integrante<br>Suplente: Abraham Fabian Hernández</div>
                        </div>
                        <div class="team-social">
                          <a href="" class="icon ion-social-twitter"></a>
                          <a href="" class="icon ion-social-facebook"></a>
                          <a href="" class="icon ion-social-linkedin"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="images/comite-transparencia/jorge-gomez.webp">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Jorge Gómez Bravo</h6>
                          <div class="team-spec">Integrante<br>Suplente: Alhely Rubio Arronis</div>
                        </div>
                        <div class="team-social">
                          <a href="" class="icon ion-social-twitter"></a>
                          <a href="" class="icon ion-social-facebook"></a>
                          <a href="" class="icon ion-social-linkedin"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4">
                    <div class="team-profile">
                      <img alt="" src="images/consejeros/romina.png">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Romina Poumian González</h6>
                            <div class="team-spec">Secretaría Técnica</div>
                          </div>
                          <div class="team-social">
                            <a href="" class="icon ion-social-twitter"></a>
                            <a href="" class="icon ion-social-facebook"></a>
                            <a href="" class="icon ion-social-instagram"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="images/comite-transparencia/edgar-linares.webp">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Edgar Arturo Linares Olvera</h6>
                          <div class="team-spec">Integrante<br>Suplente: Elizabeth Pichardo Pereyra</div>
                        </div>
                        <div class="team-social">
                          <a href="" class="icon ion-social-twitter"></a>
                          <a href="" class="icon ion-social-facebook"></a>
                          <a href="" class="icon ion-social-linkedin"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div style="padding-top: 4rem" class="col-md-9 col-md-offset-3"><p style="text-align: justify" class="lead">El Comité de Transparencia, sesiona de forma ordinaria y extraordinaria garantizando el funcionamiento para una correcta transparencia, rendición de cuentas, gestión documental y protección de datos personales.</p></div>
          </div>
        </div>
    </section>

    <section style="padding:10.28rem 0 !important " class="section-clients section bg-dots">
        <div class="container">
          <h2 class="section-title">Portales de Transparencia</h2>
          <div class="client-carousel owl-carousel">
            <div class="client-carousel-item">
              <a target="blank" href="https://www.sarcoem.org.mx/"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/sarcoem_logo2-150x150.png')}}"></a>
            </div>
            <div class="client-carousel-item">
                <a target="blank" href="https://www.saimex.org.mx/"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/saimex_logo2-150x150.png')}}"></a>
            </div>
            <div class="client-carousel-item">
                <a target="blank" href="http://www.ipomex.org.mx/"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/ipomex_logo2-150x150.png')}}"></a>
            </div>
            <div class="client-carousel-item">
                <a target="blank" href="https://bit.ly/3p7w6KO"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/004_logo_denuncias2-150x150.png')}}"></a>
            </div>
            <div class="client-carousel-item">
                <a target="blank" href="https://bit.ly/2I5qTTs"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/005_logo_pnt2-150x150.png')}}"></a>
            </div>
            <div class="client-carousel-item">
                <a target="blank" href="https://bit.ly/2U1yUuS"><img style="border-radius: 30% !important" height="150px" alt="" class="client-img" src="{{ asset('images/portales/logoPNT_002_02-150x150.png')}}"></a>
            </div>
          </div>
        </div>
    </section>

    <section class="section bg-dots">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">Marco Normativo</div>
                  </div>
                </div>
            </div>
          <div class="content">
            <div class="projects">
              <div class="grid-items js-isotope js-grid-items">
                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leytransparencia.jpg')}}">
                    <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/marco-normativo/LeyDeTransparenciaAccesoALaInformacionPublicaDelEstadoDeMexicoYMunicipios.pdf')}}">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios.</p>
                      </div>
                    </div>
                    </a>
                    <a target="blank" href="{{ asset('pdf/marco-normativo/LeyDeTransparenciaAccesoALaInformacionPublicaDelEstadoDeMexicoYMunicipios.pdf')}}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydatos.jpg')}}">
                    <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/marco-normativo/LeyDeDatosPersonales.pdf') }}">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                      </div>
                    </div>
                    </a>
                    <a target="blank" href="{{ asset('pdf/marco-normativo/LeyDeDatosPersonales.pdf') }}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/marco-normativo/Ley_de_Archivos_Administracion_de_Documentos_del_Estado_de_Mexico_y_Municipios.pdf')}}">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Ley de Archivos y Administración de Documentos del Estado de México y Municipios.</p>
                        </div>
                      </div>
                      </a>
                      <a target="blank" href="{{ asset('pdf/marco-normativo/Ley_de_Archivos_Administracion_de_Documentos_del_Estado_de_Mexico_y_Municipios.pdf')}}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Actas del 2021 -->
    <section>
    <div class="comment-content">
      <div class="comment-metadata">
        <h4><b class="fn"><a>Actas del año 2021</a></b></h4>
      </div>
      <br>
          <button class="accordion">Actas del año 2021</button>
              <div style="overflow-x:auto; " class="panel ">
                  <table class="styled-table">
                      <thead>
                          <tr>
                              <th style="text-align: justify;">Nombre</th>
                              <th style="text-align: justify;">URL</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Acta de Instalación</td>
                              <td><a class="linkhov" href="{{asset('pdf\actas\acta de instalción.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                          </tr>
                          <tr >
                              <td>Primer Acta Extraordinaria</td>
                              <td><a class="linkhov" target="blank" href="{{asset('pdf\actas\PRIMERA EXTRA.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                          </tr>
                          <tr >
                              <td>Segunda Acta Extraordinaria</td>
                              <td><a class="linkhov" target="blank" href="{{asset('pdf\actas\SEGUNDA EXTRA.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                          </tr>
                          <tr >
                              <td>Tercer Acta Extraordinaria</td>
                              <td><a class="linkhov" target="blank" href="{{asset('pdf\actas\tecera extraordinaria_.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>

    </div>
    </section>
    <!-- Fin Actas 2021 -->

    {{------------------------- Verificaciones Virtuales Oficiosas ----------------------}}
    <section class="section">
        <div class="container">
          <h2 class="section-title">Verificaciones Virtuales Oficiosas</h2>
          <div class="news-carousel owl-carousel">
            <div class="news-item">
              <img alt="" src="{{ asset('images/verificacion-virtual-oficiosa/2017.jpg') }}">
              <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Año 2017</div>
                  <h3 class="news-title">Verificación Virtual Oficiosa</h3>
                </div>
                <a class="read-more" >Verificación Diagnostica</a>
              </div>
            </div>
            <div class="news-item">
              <img alt="" src="{{ asset('images/verificacion-virtual-oficiosa/2018.jpg') }}">
              <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/vvo/2018.pdf') }}">
              <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Año 2018</div>
                  <h3 class="news-title">Verificación Virtual Oficiosa</h3>
                </div>
                <a class="read-more" target="blank" href="{{ asset('pdf/vvo/2018.pdf') }}">Ver más <i class="icon ion-ios-arrow-right"></i></a>
              </div>
              </a>
            </div>
            <div class="news-item">
              <img alt="" src="{{ asset('images/verificacion-virtual-oficiosa/2019.jpg') }}">
              <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/vvo/2019.pdf') }}">
                <div class="news-hover">
                <div class="hover-border"><div></div></div>
                <div class="content">
                  <div class="time">Año 2019</div>
                  <h3 class="news-title">Verificación Virtual Oficiosa</h3>
                </div>
                <a class="read-more" target="blank" href="{{ asset('pdf/vvo/2019.pdf') }}">Ver más <i class="icon ion-ios-arrow-right"></i></a>
              </div>
              </a>
            </div>
            <div class="news-item">
                <img alt="" src="{{ asset('images/verificacion-virtual-oficiosa/2020.jpg') }}">
                <a style="text-decoration: none;" target="blank" href="{{ asset('pdf/vvo/2020.pdf') }}">
                <div class="news-hover">
                  <div class="hover-border"><div></div></div>
                  <div class="content">
                    <div class="time">Año 2020</div>
                    <h3 class="news-title">Verificación Virtual Oficiosa</h3>
                    {{-- <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p> --}}
                  </div>
                  <a class="read-more" target="blank" href="{{ asset('pdf/vvo/2020.pdf') }}">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                </a>
              </div>
          </div>
        </div>
      </section>

      <section class="section bg-dots">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row-services row">
                <div class="col-service col-sm-6 col-lg-4">
                    <img width="50%" class="img-redonda" src="{{ asset('images/comite-transparencia/mayra.png') }}">
                  {{-- <span class="text-dark icon-medium icon-apartment"></span> --}}
                  <h4>Unidad de Transparencia</h4>
                  <p style="text-align: justify">Se encarga del dar seguimiento al acceso a información pública que ingresan de manera electrónica (SAIMEX), físicas o telefónicas y
                    de la rendición de cuentas a
                    través del sistema IPOMEX,
                    además de las diversas
                    actividades en cumplimiento con
                    la materia de transparencia;
                    poniendo a disposición de
                    ciudadanía, de conformidad a sus
                    obligaciones, atribuciones y
                    funciones la información que
                    obra en los archivos de las
                    Secretarías y Áreas que integran
                    este Comité Ejecutivo Estatal del
                    Partido Verde Ecologista de
                    México en el Estado de México.
                    Entra y conoce nuestras acciones
                    en materia de Transparencia.</p>
                    <br>
                    <a href="{{ route('Unidad-Transparencia') }}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                <div class="col-service col-sm-6 col-lg-4">
                    <img width="50%" class="img-redonda" src="{{ asset('images/comite-transparencia/fabian1.png') }}">
                  <h4>Área Coordinadora de Archivos</h4>
                  <p style="text-align: justify"><span></span>Se encarga de la Gestión Documental y
                    Archivos mejorando el tratamiento
                    integral de la documentación a lo largo de
                    su ciclo vital, a través de la ejecución de
                    procesos de producción, organización,
                    acceso, consulta valoración documental y
                    la conservación.</p><br>
                    <p>Entra y conoce nuestras acciones en
                    materia de Archivo.</p>
                    <br>
                    <a href="{{route ('Archivo')}}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                </div>
                <div class="clearfix visible-sm visible-md"></div>
                <div class="col-service col-sm-6 col-lg-4">
                    <img width="50%" class="img-redonda" src="{{asset ('images/comite-transparencia/edgar-linares.webp')}}">
                  <h4>Área de Protección de Datos Personales</h4>
                  <p style="text-align: justify">Los datos personales son toda
                    aquella información que
                    pertenece a una persona física o jurídica colectiva que puede
                    ser usada para identificarla
                    directa o indirectamente. Es
                    por ello por lo que, en el
                    Partido Verde Ecologista de
                    México en el Estado de
                    México, tutelamos tu
                    información.</p><br>
                    <p>Entra y conoce nuestras
                    acciones en materia de
                    Protección de Datos
                    personales. </p>
                    <br>
                    <a href="{{route ('Proteccion-Datos')}}" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section sitios-interes">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Sitios de Interes</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-services row">
                <div class="col-service col-sm-6 col-lg-4">
                    <ul>
                        <li><a target="blank" href="https://home.inai.org.mx/"><h6>INAI</h6></a></li>
                        <li><a target="blank" href="https://www.infoem.org.mx/"><h6>INFOEM</h6></a></li>
                        <li><a target="blank" href="https://www.gob.mx/agn"><h6>Archivo General de la Nación</h6></a></li>
                        <li><a target="blank" href="https://sna.org.mx/"><h6>Sistema Nacional Anticorrupción</h6></a></li>
                        <li><a target="blank" href="https://portal.secogem.gob.mx/sistema-anticorrupcion-estado-mexico-municipios"><h6>Sistema Estatal Anticorrupción</h6></a></li>
                        <li><a target="blank" href="https://www.transparency.org/en/"><h6>Transparencia Internacional</h6></a></li>
                        <li><a target="blank" href="https://www.tm.org.mx/transparencia-internacional/"><h6>Transparencia Mexicana</h6></a></li>
                        <li><a target="blank" href="http://www.amedi.org.mx/"><h6>Asociación Mexicana por el Derecho a la Información</h6></a></li>
                        <li><a target="blank" href="https://www.alaarchivos.org/"><h6>Asociación Latinoamericana de Archivos</h6></a></li>
                    </ul>
                </div>
                <div class="col-service col-sm-6 col-lg-4">
                  <ul>
                    <li><a target="blank" href="https://www.redipd.org/es"><h6>Red Iberoamericana de Protección de Datos</h6></a></li>
                    <li><a target="blank" href="https://www.ica.org/es"><h6>Internacional Council on Archives</h6></a></li>
                    <li><a target="blank" href="https://globalprivacyassembly.org/"><h6>Global Privacy Assembly</h6></a></li>
                    <li><a target="blank" href="https://www.informationcommissioners.org/"><h6>INTERNATIONAL CONFERENCE OF INFORMATION COMMISSIONERS</h6></a></li>
                    <li><a target="blank" href="http://www.programaanticorrupcion.gob.mx/"><h6> Comisión Intersecretarial para la Transparencia y el Combate a la Corrupción (CITCC)</h6></a></li>
                    <li><a target="blank" href="http://www.limac.org.mx/"><h6>Libertad de Información-México A.C. (LIMAC)</h6></a></li>
                  </ul>
                </div>
                <div class="clearfix visible-sm visible-md"></div>
                <div class="col-service col-sm-6 col-lg-4">
                  <ul>
                    <li><a target="blank" href="http://www.colectivoporlatransparencia.org.mx/"><h6>Colectivo por la Transparencia</h6></a></li>
                    <li><a target="blank" href="https://redrta.org/"><h6>Red de Transparencia y Acceso a la Información</h6></a></li>
                    <li><a target="blank" href="https://www.mexicoevalua.org/"><h6> México Evalúa</h6></a></li>
                    <li><a target="blank" href="https://contralacorrupcion.mx/"><h6>Mexicanos contra la corrupción y la Impunidad</h6></a></li>
                    <li><a target="blank" href="http://www.hagaloustedmismo.gob.mx/"><h6>Hágalo usted mismo (Su Caja de Herramientas contra la Corrupción)</h6></a></li>
                    <li><a target="blank" href="http://www.cimtra.org.mx/"><h6>Ciudadanos por Municipios Transparentes (CIMTRA)</h6></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>      
      
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.5.0/d3.min.js"></script>
      <script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
      <script defer src="js/gmap.js"></script>
      {{-- Charts --}}
      <script src="https://cdn.jsdelivr.net/npm/britecharts@2/dist/bundled/britecharts.min.js"></script>
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
      {{-- Acordeon --}}

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }



//Chart Dona Solicitudes de informacion

let donutData2 = {
  data:[
    {name: "2016", id: 1, quantity: 9},
    {name: "2017", id: 2, quantity: 29},
    {name: "2018", id: 3, quantity: 25},
    {name: "2019", id: 4, quantity: 22},
    {name: "2020", id: 5, quantity: 15}
  ]
};

function createDonutChart2() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container2'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    // .colorSchema(britecharts.colors.colorSchemas.green)
    .highlightSliceById(2).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(300)
    .height(200)
    // .colorSchema(britecharts.colors.colorSchemas.green)
    .numberFormat('i');

  donutContainer.datum(donutData2.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container2');
  legendContainer.datum(donutData2.data).call(legendChart);


  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData2.data).call(donutChart);

}
createDonutChart2();

//Chart Dona Recursos de Revision

let donutData = {
  data:[
    {name: "2016", id: 1, quantity: 5},
    {name: "2017", id: 2, quantity: 68},
    {name: "2018", id: 3, quantity: 11},
    {name: "2019", id: 4, quantity: 5},
    {name: "2020", id: 5, quantity: 11}
  ]
};

function createDonutChart() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    .highlightSliceById(2).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(300)
    .height(200)
    .numberFormat('i');

  donutContainer.datum(donutData.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container');
  legendContainer.datum(donutData.data).call(legendChart);


  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData.data).call(donutChart);

}
createDonutChart();

//Chart Dona Solicitudes de informacion

let donutData3 = {
  data:[
    {name: "No Tienen", id: 1, quantity: 2},
    {name: "Sí Cumple con los Requisitos para publicar", id: 2, quantity: 146},
    {name: "No Cumple con los Requisitos para publicar", id: 3, quantity: 177},
    {name: "No atenderon el requerimiento de INFOEM", id: 4, quantity: 255}
  ]
};

function createDonutChart3() {
  let donutChart = britecharts.donut(),
      donutContainer = d3.select('.js-donut-chart-container3'),
      containerWidth = donutContainer.node() ? donutContainer.node().getBoundingClientRect().width : false,
      legendChart = britecharts.legend(),
      legendContainer;

  donutChart
    .isAnimated(true)
    .highlightSliceById(4).hasFixedHighlightedSlice(true)
    .width(containerWidth)
    .height(containerWidth)
    .externalRadius(containerWidth/3)
    .internalRadius(containerWidth/6)
    .on('customMouseOver', function(data) {
    legendChart.highlight(data.data.id);
  })
    .on('customMouseOut', function() {
    legendChart.clearHighlight();
  });

  legendChart
    .width(365)
    .height(200)
    .numberFormat('i');

  donutContainer.datum(donutData3.data).call(donutChart);
  legendContainer = d3.select('.js-legend-chart-container3');
  legendContainer.datum(donutData3.data).call(legendChart);


  donutChart.highlightSliceById(2).isAnimated(true);
  donutContainer.datum(donutData3.data).call(donutChart);

}
createDonutChart3();

//Solicitudes de informacion 2020
function createBarChart(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 9 },
        { name: 'B', value: 12 },
        { name: 'C', value: 19 },
        { name: 'D', value: 2 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart();

//Recursos de revision 2020
function createBarChart2(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container2');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 1 },
        { name: 'B', value: 1 },
        { name: 'C', value: 0 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart2();

//Solicitudes de informacion 2019
function createBarChart3(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container3');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 17 },
        { name: 'B', value: 13 },
        { name: 'C', value: 29 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart3();

//Recursos de revision 2019
function createBarChart4(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container4');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 0 },
        { name: 'C', value: 1 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart4();

//Solicitudes de informacion 2018
function createBarChart5(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container5');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 10 },
        { name: 'B', value: 24 },
        { name: 'C', value: 33 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart5();

//Recursos de revision 2018
function createBarChart6(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container6');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 0 },
        { name: 'C', value: 1 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart6();

//Solicitudes de informacion 2017
function createBarChart7(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container7');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 33 },
        { name: 'B', value: 7 },
        { name: 'C', value: 27 },
        { name: 'D', value: 13 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart7();

//Recursos de revision 2017
function createBarChart8(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container8');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 2 },
        { name: 'B', value: 3 },
        { name: 'C', value: 5 },
        { name: 'D', value: 2 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart8();

//Solicitudes de informacion 2016
function createBarChart9(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container9');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 33 },
        { name: 'B', value: 0 },
        { name: 'C', value: 11 },
        { name: 'D', value: 1 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart9();

//Recursos de revision 2016
function createBarChart10(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container10');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 1 },
        { name: 'C', value: 0 },
        { name: 'D', value: 0 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart10();

//Sujetos oobligados que no atendieron el requerimiento del INFOEM
function createBarChart11(){
    const barChart = britecharts.bar();
    const container = d3.select('.bar-container11');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 6 },
        { name: 'B', value: 3 },
        { name: 'C', value: 100 },
        { name: 'D', value: 39 },
        { name: 'E', value: 2 },
        { name: 'F', value: 27 },
        { name: 'G', value: 1 },
        { name: 'H', value: 69 },
        { name: 'I', value: 1 },
        { name: 'J', value: 7 }
    ];

    // Configure chart
    barChart
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container.datum(barData).call(barChart);
}
createBarChart11();

//Partidos politicos
function createBarChart12(){
    const barChart2 = britecharts.bar();
    const container2 = d3.select('.bar-container12');

    // Create Dataset with proper shape


    const barData = [
        { name: 'A', value: 0 },
        { name: 'B', value: 3 },
        { name: 'C', value: 0 },
        { name: 'D', value: 6 }
    ];

    // Configure chart
    barChart2
        // .margin({ left: 100 })
        // .isHorizontal(true)
        .height(300)
        .colorSchema(britecharts.colors.colorSchemas.britecharts)
        .width(380);

    container2.datum(barData).call(barChart2);
}
createBarChart12();


</script>
@endsection
