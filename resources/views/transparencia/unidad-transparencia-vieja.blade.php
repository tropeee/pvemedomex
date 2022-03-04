<!DOCTYPE HTML>
<html lang="es">

@include('partials.header')
<link href="https://cdn.jsdelivr.net/npm/britecharts@2.17.6/dist/css/britecharts.min.css" rel="stylesheet">
<style>
    .accordion {
      background-color: #50B948;
      color: white;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }

    .active, .accordion:hover {
      background-color: #CEE002;
      color:black
    }

    .accordion:after {
      content: '\002B';
      color: #777;
      font-weight: bold;
      float: right;
      margin-left: 5px;
    }

    .active:after {
      content: "\2212";
    }

    .panel {
      padding: 0 18px;
      background-color: white;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
    }

    .styled-table {
    text-align: justify;
    width: 100% !important;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
    /* background-color: #009879; */
    background-color: #50B948;
    color: #ffffff;
    text-align: left;
    }

    .styled-table th,
    .styled-table td {
    padding: 12px 15px;
    }

    .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
    /* border-bottom: 2px solid #009879; */
    border-bottom: 2px solid #50B948;
    }

    .styled-table tbody tr.active-row {
    font-weight: bold;
    /* color: #009879; */
    color: #50B948;
    }

    .linkhov{
        color: #666666;
    }

    .linkhov:hover{
        color: #cee002;
    }

    @media screen and (max-width: 600px) {
        .img-movil{
            width: 60%;
        }
    }

    @media screen and (min-width: 600px) {
        .derecha{
            text-align: right
        }

        .izquierda{
            text-align: left
        }
    }

</style>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="animsition">

    <section style="padding-top:8rem !important; padding-bottom: 2rem;" class="section">
        <div >
            <img width="100%" class="img-responsive" src="{{ asset('images/comite-transparencia/UnidadTransparencia_Banner.png')}}">
        </div>
    </section>

  <div class="wrapper boxed">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    @include('partials.menu')

    <!-- Navbar -->

    @include('partials.navbar')

    <!-- Pageheader -->

    {{-- <main class="page-header">
        <div class="container"><h1>Unidad de Transparencia</h1></div>
    </main> --}}


    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Titular de la Unidad de Transparencia y Funcionarios Partidistas Habilitados</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/estructura/Mayra.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Mayra Erendira Gómez Bravo</h6>
                          <div class="team-spec">Titular de la Unidad de Transparencia</div>
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
                    <img alt="" src="{{ asset('images/estructura/Dulce-Maria.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Dulce María Gutiérrez Becerril</h6>
                          <div class="team-spec">FPH Secretaría de Organización</div>
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
                    <img alt="" src="{{ asset('images/estructura/Hector-Paul.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Héctor Paul López Quiroz</h6>
                          <div class="team-spec">FPH Secretaría de Procesos Electorales</div>
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
                    <img alt="" src="{{ asset('images/estructura/Veronica.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Verónica Pérez Martínez</h6>
                          <div class="team-spec">FPH Secretaría de Finanzas y Secretaría General</div>
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
                    <img alt="" src="{{ asset('images/estructura/Abraham-Fabian.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Abraham Fabián Hernández</h6>
                          <div class="team-spec">FPH Área Coordinadora de Archivo y Secretaría de Asuntos de la Juventud</div>
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
                      <img alt="" src="{{ asset('images/estructura/Susana-Pereyra.webp')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Susana Pichardo Pereyra</h6>
                            <div class="team-spec">FPH Unidad de Transparencia y Secretaría de Ecología y Medio Ambiente</div>
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
                        <img alt="" src="{{ asset('images/estructura/alhely-rubio.webp')}}">
                        <div class="team-hover">
                        <div class="team-content">
                            <div class="team-name">
                            <h6>Alhely Rubio Arronis</h6>
                            <div class="team-spec">FPH Área Jurídica</div>
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
                    <img alt="" src="{{ asset('images/estructura/Elizabeth-Pereyra.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Elizabeth Pichardo Pereyra</h6>
                          <div class="team-spec">FPH Secretaría de Comunicación Social y Secretaría de la Mujer</div>
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
              </div>
            </div>
          </div>
        </div>
    </section>


             <!-- ¿Qué hacemos? -->
        <section style="padding-top: 0; padding-bottom:0" class="section-que">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                  <div class="section-add-comment">
                    <div class="comments">
                      <div class="comments-area">
                        <ol class="comment-list">
                          <li class="comment">
                            <article class="comment-body">
                              <div class="avatar">
                                <span class="text-dark icon-medium-small icon-question-circle"></span>
                              </div>
                              <div class="comment-content">
                                <div class="comment-metadata">
                                  <h4><b class="fn"><a>¿Qué es Transparencia?</a></b></h4>
                                </div>
                                <p class="lead" style="text-align: justify">Se encuentra directamente relacionada con el derecho a la información de la sociedad en general y sus objetivos son el fortalecimiento de un sistema democrático y participativo.</p>
                                <p style="text-align: right; padding-top: 1rem;"><small>Fuente: <a style="color: #43B02A !important;" target="blank" href="https://www.infoem.org.mx/es/contenido/transparencia">https://www.infoem.org.mx/es/contenido/transparencia</a>
                            </div>
                            </article>
                          </li>
                          <li class="comment">
                            <article class="comment-body">
                              <div class="avatar">
                                <span class="text-dark icon-medium-small icon-question-circle"></span>
                              </div>
                              <div class="comment-content" style="text-align: justify">
                                <div class="comment-metadata">
                                  <h4><b class="fn"><a>¿Qué es Transparencia Proactiva?</a></b></h4>
                                </div>
                                <p class="lead">Es el conjunto de actividades e iniciativas ordenadas, que van más allá de las obligaciones que marca la ley. Conoce más en el siguiente link:</p>
                                <p style="text-align: right !important; padding-top: 1rem; margin-bottom:10px;">Fuente: <a style="color: #43B02A !important;" target="blank" href="https://www.infoem.org.mx/es/contenido/transparencia-proactiva"> https://www.infoem.org.mx/es/contenido/transparencia-proactiva</a></small></p>
                            </div>
                            </article>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

    <section class="section bg-dots" style="padding-top: 3rem;">
            <div class="container acordeones">
            <button class="accordion" style="text-size-adjust: auto;">¿Qué es el Acceso a la Información Pública?</button>
                <div style="overflow-x:auto;" class="panel">
                    <div>
                        <p style="text-align: justify; padding-top: 1rem; margin-bottom:10px">Es la prerrogativa de las personas para buscar, difundir, investigar, recabar, recibir y solicitar toda la información pública generada, obtenida, administrada o en posesión de este Instituto Político que es pública y accesible sin necesidad de acreditar personalidad ni interés público.</p>
                    </div>
            </div>
            </div>
            
        </div>
    </section>

    <section style="margin-top: 0" class="section">
        <div class="container acordeones">
            <h2 class="section-title">¿Cómo solicitar información?</h2>
            <br><br>
            <button class="accordion">Presencial</button>
                    <div style="overflow-x:auto;" class="panel">
                        <div>
                            <p style="text-align: justify; padding-top: 1rem; margin-bottom:10px">Presentado un escrito libre o llenar el formato, pudiendo hacerlo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México, o bien, entregándolo personalmente en el Módulo de Acceso el Comité Ejecutivo Estatal.</p>
                            <p>Para obtener el formato da click <a href="{{ asset('pdf/formatos/Formato_Solicitud_Informacion_Publica.pdf') }}" target="_blank">aquí</a> </p>
                        </div>
                    </div>

            <br>
            <button class="accordion">Verbal</button>
                    <div style="overflow-x:auto;" class="panel">
                        <div>
                            <p style="text-align: justify; padding-top: 1rem; margin-bottom:10px" >Acudiendo directamente al Módulo de Acceso y/o la Unidad de Transparencia.</p>
                        </div>
                    </div>

            <br>
            <button class="accordion">Por escrito</button>
                    <div style="overflow-x:auto;" class="panel">
                        <div>
                            <p style="text-align: justify; padding-top: 1rem; margin-bottom:10px" >Haciéndolo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de Transparencia del Partido verde Ecologista de México, o bien entregándolo personalmente.</p>
                        </div>
                    </div>

            <br>
            <button class="accordion">Electrónica</button>
                    <div style="overflow-x:auto;" class="panel">
            <div >
                <p style="padding-top: 1rem; margin-bottom:10px">Ingresando en el portal <a style="color: #43B02A !important" target="_blank" href="https://www.saimex.org.mx">SAIMEX</a>  o bien en la <a style="color: #43B02A !important" target="_blank" href="https://www.plataformadetransparencia.org.mx">PNT</a>.</p>
            </div>
            </div>
        </div>
    </section>

    <!-- SAIMEX -->
    <section style="margin-top: 0" class="section-que bg-dots">
        <div class="container">
              <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div style="padding-top: 5%" class="avatar">
                            <img src="{{ asset (('images/portales/saimex_logo2-150x150.png'))}}">
                          </div>
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>¿Qué es SAIMEX? </a></b></h4>
                            </div>
                            <p style="text-align: justify">El Sistema de Acceso a la Información Mexiquense es el medio electrónico a través del cual se formulan las solicitudes de información público y se interponen los Recursos de Revisión. </p>
                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información (Anual)</h5>
                    <div class="">
                    <div class="js-donut-chart-container2 donut-chart-container" style="width: 300px; height: auto; margin:auto;"></div>
                    <div class="js-legend-chart-container2 legend-chart-container"></div>
                    </div>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión (Anual)</h5>
                    <div class="">
                    <div class="js-donut-chart-container donut-chart-container" style="width: 300px; height: auto; margin:auto;"></div>
                    <div class="js-legend-chart-container legend-chart-container"></div>
                    </div>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información 2020</h5>
                    <div style="margin:auto;" class="bar-container"></div>
                        <p style="margin: 0"><b>A</b>: Solicitudes ingresadas por la PNT</p>
                        <p style="margin: 0"><b>B</b>: Solicitudes ingresadas por SAIMEX</p>
                        <p style="margin: 0"><b>C</b>: Concluidas</p>
                        <p><b>D</b>: Recurso de Revisión</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión 2020</h5>
                    <div style="margin:auto;" class="bar-container2"></div>
                        <p style="margin: 0"><b>A</b>: Manifestaciones del Informe de Cumplimiento</p>
                        <p style="margin: 0"><b>B</b>: Notificación de la Resolución</p>
                        <p style="margin: 0"><b>C</b>: Acuerdo Cumplimiento/Incumplimiento</p>
                        <p><b>D</b>: Alcace a la Entrega de Información</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información 2019</h5>
                    <div style="margin:auto;" class="bar-container3"></div>
                        <p style="margin: 0"><b>A</b>: Solicitudes ingresadas por la PNT</p>
                        <p style="margin: 0"><b>B</b>: Solicitudes ingresadas por SAIMEX</p>
                        <p style="margin: 0"><b>C</b>: Concluidas</p>
                        <p><b>D</b>: Recurso de Revisión</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión 2019</h5>
                    <div style="margin:auto;" class="bar-container4"></div>
                        <p style="margin: 0"><b>A</b>: Manifestaciones del Informe de Cumplimiento</p>
                        <p style="margin: 0"><b>B</b>: Notificación de la Resolución</p>
                        <p style="margin: 0"><b>C</b>: Acuerdo Cumplimiento/Incumplimiento</p>
                        <p><b>D</b>: Alcace a la Entrega de Información</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información 2018</h5>
                    <div style="margin:auto;" class="bar-container5"></div>
                        <p style="margin: 0"><b>A</b>: Solicitudes ingresadas por la PNT</p>
                        <p style="margin: 0"><b>B</b>: Solicitudes ingresadas por SAIMEX</p>
                        <p style="margin: 0"><b>C</b>: Concluidas</p>
                        <p><b>D</b>: Recurso de Revisión</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión 2018</h5>
                    <div style="margin:auto;" class="bar-container6"></div>
                        <p style="margin: 0"><b>A</b>: Manifestaciones del Informe de Cumplimiento</p>
                        <p style="margin: 0"><b>B</b>: Notificación de la Resolución</p>
                        <p style="margin: 0"><b>C</b>: Acuerdo Cumplimiento/Incumplimiento</p>
                        <p><b>D</b>: Alcace a la Entrega de Información</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información 2017</h5>
                    <div style="margin:auto;" class="bar-container7"></div>
                        <p style="margin: 0"><b>A</b>: Solicitudes ingresadas por la PNT</p>
                        <p style="margin: 0"><b>B</b>: Solicitudes ingresadas por SAIMEX</p>
                        <p style="margin: 0"><b>C</b>: Concluidas</p>
                        <p><b>D</b>: Recurso de Revisión</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión 2017</h5>
                    <div style="margin:auto;" class="bar-container8"></div>
                        <p style="margin: 0"><b>A</b>: Manifestaciones del Informe de Cumplimiento</p>
                        <p style="margin: 0"><b>B</b>: Notificación de la Resolución</p>
                        <p style="margin: 0"><b>C</b>: Acuerdo Cumplimiento/Incumplimiento</p>
                        <p><b>D</b>: Alcace a la Entrega de Información</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Solicitudes de Información 2016</h5>
                    <div style="margin:auto;" class="bar-container9"></div>
                        <p style="margin: 0"><b>A</b>: Solicitudes ingresadas por la PNT</p>
                        <p style="margin: 0"><b>B</b>: Solicitudes ingresadas por SAIMEX</p>
                        <p style="margin: 0"><b>C</b>: Concluidas</p>
                        <p><b>D</b>: Recurso de Revisión</p>
                </div>
                <div class="col-sm-6" style="text-align: center;">
                    <h5>Recursos de Revisión 2016</h5>
                    <div style="margin:auto;" class="bar-container10"></div>
                        <p style="margin: 0"><b>A</b>: Manifestaciones del Informe de Cumplimiento</p>
                        <p style="margin: 0"><b>B</b>: Notificación de la Resolución</p>
                        <p style="margin: 0"><b>C</b>: Acuerdo Cumplimiento/Incumplimiento</p>
                        <p><b>D</b>: Alcace a la Entrega de Información</p>
                </div>
            </div>
            <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div style="padding-top: 5%" class="avatar">
                            <span class="text-dark icon-medium-small icon-question-circle"></span>
                          </div>
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>¿Qué es un Recurso de Revisión?</a></b></h4>
                            </div>
                            <p class="lead" style="text-align: justify">Si consideras que la respuesta proporcionada por la Unidad de Transparencia no es adecuada, 
                            no corresponde a la información requerida, es incompleta o no satisface tu solicitud; podrás presentar este recurso ya que es la garantía 
                            secundaria mediante la cual se pretende reparar cualquier posible afectación al derecho de acceso a la información pública, atendiendo lo 
                            establecido en el Título Octavo de la LTAIPEMY.
                            <br> <br>
                            <ul > <p class="lead" style="text-align: justify; font-weight: bold;">Formas de interponer un Recurso de Revisión </p> &nbsp 
                                <li style="text-align:justify;"><span style="font-weight: bold;">Presencial.</span>  Presentado un escrito libre o 
                                llenar el <a href="{{ asset('pdf\formatos\Formato_Recurso_Revision.pdf') }}" target="_blank">formato</a> , 
                                pudiendo hacerlo llegar por paquetería, telégrafos, o por correo, ya sea convencional o electrónico, a la Unidad de 
                                Transparencia del Partido Verde Ecologista de México en el Estado de México, o bien, entregándolo personalmente en 
                                el Módulo de Acceso el Comité Ejecutivo Estatal.</li>
                                <li> <span style="font-weight: bold;">Verbal.</span> Acudiendo directamente al Módulo de Acceso y/o la Unidad de Transparencia. </li>
                                <li><span style="font-weight: bold;">Electrónica. </span>Ingresando en el portal SAIMEX <a href="https://www.saimex.org.mx" target="_blank">www.saimex.org.mx</a>  o bien en la PNT 
                                <a href="https://www.plataformadetransparencia.org.mx" target="_blank">www.plataformadetransparencia.org.mx</a></li>
                            </ul> 
                            <br>
                                <button class="accordion">Versiones públicas de los Recursos de Revisión</button>
                    
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
                                                    <td>Solicitud de Información</td>
                                                    <td><a class="linkhov" href="{{asset('pdf\formatos\Formato_Solicitud_Informacion_Publica.pdf')}}" target="_blank"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                </tr>
                                                <tr >
                                                    <td>Recurso de Revisión presentado por ciudadano</td>
                                                    <td><a class="linkhov" target="blank" href="{{asset('pdf\formatos\Formato_Recurso_Revision.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                </tr>
                                                <tr >
                                                    <td>Respuesta de los Recursos de Revisión por parte de la Unidad de Transparencia</td>
                                                    <td><a class="linkhov" target="blank" href="{{asset('pdf\formatos\Formato_Recepcion_Informacion.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IPOMEX -->
    <section style="margin-top: 0" class="section-que">
        <div class="container">
              <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div style="padding-top: 5%" class="avatar">
                            <img src="{{ asset (('images/portales/ipomex_logo2-150x150.png'))}}">
                          </div>
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>¿Qué es IPOMEX? </a></b></h4>
                            </div>
                            <p class="lead" style="text-align: justify">Sistema de Información Pública de Oficio Mexiquense (IPOMEX) permite a los sujetos obligados publicar la información correspondiente a sus obligaciones de transparencia comunes y específicas, así como cualquier otra información que considere conveniente difundir en materia de transparencia y acceso a la información conforme a las <a style="color: black" target="_blank" href="{{ asset(('pdf/126_Tabla_Partido_PVEM.xlsx'))}}"><b>Tablas de Aplicabilidad</b></a> aprobadas por el pleno del IINFOEM.</p>
                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="text-align: center">
                    <h5>Obligaciones Comunes</h5>
                    <button class="accordion">Artículo 92</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Normatividad Aplicable</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>II A</td>
                                    <td>Estructura Orgánica</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/organigramas.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>II B</td>
                                    <td>Organigrama</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Facultades de cada área</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>Metas y objetivos de las áreas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>V A</td>
                                    <td>Indicadores de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>V B</td>
                                    <td>Matriz de indicadores para resultados relacionados con temas de interés público o trascendencia social</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VI A</td>
                                    <td>Indicadores de objetivos y resultados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VI B</td>
                                    <td>Matriz de indicadores de resultados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VII</td>
                                    <td>El directorio de todos los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VIII</td>
                                    <td>Remuneraciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>IX</td>
                                    <td>Gastos por concepto de viáticos y gastos de representación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>X A</td>
                                    <td>Plazas vacantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>X B</td>
                                    <td>Total de plazas vacantes y ocupadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XI</td>
                                    <td>Contrataciones de servicios profesionales por honorarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XII</td>
                                    <td>Perfil de los puestos de los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIII</td>
                                    <td>Declaraciones patrimoniales de los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIV A</td>
                                    <td>Programas de subsidios, estímulos y apoyos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIV B</td>
                                    <td>Padrón de benficiarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XV</td>
                                    <td>Agenda de reuniones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVI</td>
                                    <td>Domicilio de la Unidad de Transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVII</td>
                                    <td>Registros de solicitudes de acceso a la información recibidas y atendidas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVIII</td>
                                    <td>Convocatorias a concursos para ocupar cargos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIX</td>
                                    <td>indices de los expedientes clasificados como reservados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XX A</td>
                                    <td>Normatividad laboral</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XX B</td>
                                    <td>Recursos públicos entregados a sindicatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXI</td>
                                    <td>Información curricular y sanciones administrativas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXII</td>
                                    <td>Servicios públicos con sanciones administrativas definitivas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIII</td>
                                    <td>Servicios requisitos para acceder a ellos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIV</td>
                                    <td>Trámites, requisitos y formatos que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV A</td>
                                    <td>Presupuesto asigando</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV B</td>
                                    <td>Ejercicio de los egresos presupuestarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV C</td>
                                    <td>Información financiera de cuenta pública</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVI</td>
                                    <td>Deuda pública</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII A</td>
                                    <td>Programa anual de comunicación social o equivalente</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII B</td>
                                    <td>Erogacion de los recursos por contratación de servicios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII C</td>
                                    <td>Utilización de los tiempos oficiales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII D</td>
                                    <td>Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVIII</td>
                                    <td>Resultados de auditorias realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIX A</td>
                                    <td>Resultados de procedimeintos de licitación pública e invitación a cuando menos tres personas realiza</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIX B</td>
                                    <td>Resultados de procedimientos de adjudicación directa realizados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXX</td>
                                    <td>Resultados de la dictaminación de los estados financieros</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXI</td>
                                    <td>Personas que usan recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXII</td>
                                    <td>Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIII</td>
                                    <td>Informes emitidos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIV</td>
                                    <td>Estadísticas generadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXV A</td>
                                    <td>Gasto por capítulo, concepto y partida</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXV B</td>
                                    <td>Informes financieros contables presupuestales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVI</td>
                                    <td>Padrón de proveedores y contrataistas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVII</td>
                                    <td>Convenios de coordinación, de concertación con el sector social o privado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII A</td>
                                    <td>Inventario de bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII B</td>
                                    <td>Inventario de altas practicadas a bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII C</td>
                                    <td>Inventario de bajas practicadas a bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII D</td>
                                    <td>Inventario de bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII E</td>
                                    <td>Inventario de altas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_e.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII F</td>
                                    <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_f.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII G</td>
                                    <td>Inventario de bienes muebles e inmuebles donados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_g.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX A</td>
                                    <td>Recomendaciones emitidas por la CNDH</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX B</td>
                                    <td>Casos especiales emitidos por la CNDH u otros organismos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX C</td>
                                    <td>Recomendaciones emitidas por organismos internacionales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XL</td>
                                    <td>Resoluciones y laudos emitidos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xl.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLI A</td>
                                    <td>Mecanismos de participación ciudadana</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLI B</td>
                                    <td>Resultados de los mecanismos de participación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLII A</td>
                                    <td>Programas que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLII B</td>
                                    <td>Trámites para acceder a programa que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII A</td>
                                    <td>Informe de sesiones del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII B</td>
                                    <td>Informe de resoluciones del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII C</td>
                                    <td>Integrantes del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII D</td>
                                    <td>Calendario de sesiones ordinarias del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIV A</td>
                                    <td>Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIV B</td>
                                    <td>Encuestas sobre programas financiados con recursos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLV</td>
                                    <td>Estudios financiados con recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVI A</td>
                                    <td>Hipervínculo al listado de pensionados y jubilados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVI B</td>
                                    <td>Listado de jubilados y pensionados y el monto que reciben</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVII A</td>
                                    <td>Ingresos recibidos por cualquier concpeto por el sujeto obligado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVII B</td>
                                    <td>Responsables de recibir, administrar y ejercer los ingresos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVIII A</td>
                                    <td>Donaciones en dinero realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVIII B</td>
                                    <td>Donaciones en especie realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIX</td>
                                    <td>Catálogo de disposición documental y guía simple de archivos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>L A</td>
                                    <td>Actas del consejo consultivo</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>L B</td>
                                    <td>Opiniones y recomendaciones del consejo consultivo</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI A</td>
                                    <td>Solicitudes de intervención de comunicaciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI B</td>
                                    <td>Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI C</td>
                                    <td>Mensaje</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII A</td>
                                    <td>Información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII B</td>
                                    <td>Preguntas frecuentes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII C</td>
                                    <td>Trasnaprencia proactiva</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <!-- and so on... -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6" style="text-align: center">
                    <h5>Obligaciones Específicas</h5>
                    <button class="accordion">Artículo 100</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Padrón de afiliados o militantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>Acuerdos y resoluciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Convenios de participación con sociedad civil</td>
                                    <td><a class="linkhov" target="blank" href="Convenios de participación con sociedad civil"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>Contratación y convenios de bienes y servicios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>V</td>
                                    <td>Minutas de sesiones del partido</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VI</td>
                                    <td>Responsables de finanzas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VII</td>
                                    <td>Organizaciones sociales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VIII</td>
                                    <td>Cuotas ordinarias y extraordinarias de militantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IX</td>
                                    <td>Financiamiento privado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>X</td>
                                    <td>Aportantes a campañas y precampañas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_x.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XI</td>
                                    <td>Actas de asablea constitutiva</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XII</td>
                                    <td>Demarcaciones electorales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIII</td>
                                    <td>Tiempos que les corresponden en radio y TV</td>
                                    <td><a class="linkhov" target="blank" href=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIV</td>
                                    <td>Documentos básicos, plataformas, programas de gobierno y mecanismos de designación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XV</td>
                                    <td>Directorios de órganos de dirección</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVI</td>
                                    <td>Tabulador de remuneraciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVII</td>
                                    <td>Curriculo de precandidatos y candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVIII</td>
                                    <td>Curriculo de dirigentes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIX</td>
                                    <td>Convenios de frente, coalición, fusión o de participación electoral con agrupaciones políticas nacionales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XX</td>
                                    <td>Convocatorias para eleccion de dirigentes y candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXI</td>
                                    <td>Responsbales de procesos de evaluación y selección de candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXII</td>
                                    <td>Financiamiento público para liderazgo político de las mujeres</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIII</td>
                                    <td>Resoluciones de órgano de control</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIV A</td>
                                    <td>Financiamiento público y descuentos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIV B</td>
                                    <td>Descuentos por motivo de las sanciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV A</td>
                                    <td>Finanzas y patrimonio</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV B</td>
                                    <td>Inventario de bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV C</td>
                                    <td>Inventario de altas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV D</td>
                                    <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVI</td>
                                    <td>Resoluciones de órganos disciplinarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVII</td>
                                    <td>Representantes Electorales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVIII</td>
                                    <td>Mecanismos de control y supervisión de procesos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIX</td>
                                    <td>Fundaciones, asociaciones, centros, institutos de investigación o capacitación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXX</td>
                                    <td>Resoluciones de autoridad electoral sobre ingresos y gastos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12" style="text-align: center">
                    <button class="accordion">Artículo 103</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I y II A
                                        <br>
                                        III A
                                    </td>
                                    <td>Listados con información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>I y II B
                                        <br>
                                        III B
                                    </td>
                                    <td>Información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
              </div>
        </div>
    </section>

    <section class="section bg-dots" style="padding-top:1rem;">
        <div class="container">
            <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>Denuncias</a></b></h4>
                            </div>
                            <p class="lead" style="text-align: justify">Acto mediante el cual, cualquier persona hace del conocimiento del INFOEM la falta de publicación de las obligaciones de transparencia previstas en los artículos 92, 93, 100 y 103 de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios y demás disposiciones jurídicas aplicables a este Instituto Político, en sus respectivos ámbitos de competencia.</p>
                            <br>
                            <p class="lead">Puedes presentar una denuncia a través de:</p>
                            <br>
                            <ul>
                                <li class="lead"><b>Sistema de Registro de Denuncias del INFOEM:</b><br><a style="color: #50B948" target="_blank" href="https://www.transparenciaestadodemexico.org.mx/denciu/denuncia/insert.page">www.transparenciaestadodemexico.org.mx/denciu/denuncia/insert.page</a></li>
                                
                                <div style="text-align: center"><img class="img-movil" width="30%" src="{{ asset(('images/portales/logoInfoem.svg'))}}"></div>
                                <br>
                                <li class="lead"><b>Sistema de Denuncias de la Plataforma Nacional de Transparencia:</b><br><a style="color: #50B948"  target="_blank" href="https://consultapublicamx.inai.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml ">consultapublicamx.inai.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml </a></li>
                                <div style="text-align: center"><img class="img-movil" width="30%" src="{{ asset(('images/portales/denuncias.png'))}}"> <img class="img-movil" width="30%" src="{{ asset(('images/portales/logo-pnt.png'))}}"></div>
                                
                            </ul>
                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top:1rem; padding-bottom:0px;">
        <div class="content container">
            <h2 class="section-title">Ubicación del Módulo de Acceso y Unidad de Transparencia</h2>
            <div class="projects">
                <h4>Ubicación</h4>
                <p class="lead">República de Belice 109, Colonia Américas C.P. 50130, Toluca, Estado de México</p>
                <div id="map" class="map-2"></div>
                <div class="col-md-6">
                    <h4>Teléfono</h4>
                    <p><a style="color: gray" href="tel:+7229147192 ">722-914-7192</a></p>
                </div>
                <div class="col-md-6">
                    <h4>Horario y días de atención:</h4>
                    <p class="lead">Lunes a Viernes: 10:00h a 18:00h</p>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 0; padding-top:1rem;" class="section bg-dots">
        <div class="container">
            <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>Información de Interés Público</a></b></h4>
                            </div>
                            <p class="lead" style="text-align: justify">De conformidad con lo establecido en los artículos 24, fracción XII, 92, fracción LII de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios y el lineamiento tercero de los <i>“Lineamientos para establecer el procedimiento de identificación y revisión de la información adicional que publicarán los Sujetos Obligados por considerarse de interés público”</i>, y en caso de cumplir con los requisitos necesarios, la misma será parte de la publicación del <b>Catálogo de información adicional que deberán publicar los Sujetos Obligados por considerarse de interés público.</b></p>
                            <br>
                          </div>
                        </article>
                        <div style="text-align: center;">
                            <h5> Sujetos Obligados </h5>
                            <div class="">
                            <div class="js-donut-chart-container3 donut-chart-container" style="width: 300px; height: auto; margin:auto;"></div>
                            <div class="js-legend-chart-container3 legend-chart-container"></div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <h5>Sujetos Obligados que NO atendieron el requerimiento del INFOEM</h5>
                            <div style="margin:auto;" class="bar-container11"></div>
                            <div class="row">
                                <p class="col-sm-4 derecha" style="margin: 0;"><b>A</b>: Partidos Políticos &nbsp&nbsp <b>6</b></p>
                                <p class="col-sm-4" style="margin: 0;"><b>B</b>: Autónomo &nbsp&nbsp <b>3</b></p>
                                <p class="col-sm-4 izquierda" style="margin: 0;"><b>C</b>: Ayuntamientos &nbsp&nbsp <b>100</b></p>
                                <p class="col-sm-4 derecha" style="margin: 0"><b>D</b>: DIF &nbsp&nbsp <b>39</b></p>
                                <p class="col-sm-4" style="margin: 0"><b>E</b>: Fideicomisos &nbsp&nbsp <b>2</b></p>
                                <p class="col-sm-4 izquierda" style="margin: 0"><b>F</b>: Organismos de Agua &nbsp&nbsp <b>27</b></p>
                                <p class="col-sm-4 derecha" style="margin: 0"><b>G</b>: Persona Jurídico Coectiva &nbsp&nbsp <b>1</b></p>
                                <p class="col-sm-4" style="margin: 0"><b>H</b>: Poder Ejecutivo &nbsp&nbsp <b>69</b></p>
                                <p class="col-sm-4 izquierda" style="margin: 0"><b>I</b>: Poder Legislativo &nbsp&nbsp <b>1</b></p>
                                <p><b>J</b>: Sindicato &nbsp&nbsp <b>7</b></p>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <h5>Partidos Políticos</h5>
                            <div style="margin:auto;" class="bar-container12"></div>
                            <div class="row">
                                <p class="col-sm-3 " style="margin: 0;"><b>A</b>: No Tiene</p>
                                <p class="col-sm-3" style="margin: 0;"><b>B</b>: No Cumple con los Requisitos para publicar:<br> <b>Partido Verde, PT, Movimiento Ciudadano</b></p>
                                <p class="col-sm-3" style="margin: 0;"><b>C</b>: Sí Cumple con los Requisitos para publicar</p>
                                <p class="col-sm-3"><b>D</b>: No atendió el requerimiento del INFOEM:<br> <b>PAN, PRI, PRD, Nueva Alianza, Morena, PES</b> </p>
                            </div>
                        </div>
                      </li>
                      <li class="comment">
                        <article class="comment-body">
                          <div class="comment-content">
                              <br>
                            <p class="lead" style="text-align: justify">Los Sujetos Obligados debemos poner a disposición información que se considera es de interés pública, con la finalidad de que el Pleno del INFOEM determine si esta debe ser presentada a la ciudadanía; por lo anterior para el segundo semestre de 2019 y el primer semestre de 2020 el Instituto a través del <a style="color: black" target="_blank" href="https://www.infoem.org.mx/es/contenido/acuerdo-cat%C3%A1logo-de-informaci%C3%B3n-adicional-que-deber%C3%A1n-publicar-los-sujetos-obligados"><u>Acuerdo mediante el cual  se aprueba el Catálogo de información adicional que deberán publicar los Sujetos Obligados por considerarse de interés público correspondiente al ejercicio 2019 y el primer semestre de 2020</u></a>, consideró que la misma no cumple con los requisitos; por lo que seguiremos trabajando.</p>
                            <br>
                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
            </div>
        </div>
    </section>

    

    <section style="padding-bottom:0; padding-top:1rem;" class="section">
        <div class="container">
            <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div style="padding-top: 3%" class="avatar">
                            <a style="text-decoration: none" target="_blank" href="{{ asset(('pdf/informes/Informe_Anual_2020.pdf'))}}"><span class="text-dark icon-medium-small icon-file-zip"></span></a>
                          </div>
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a target="_blank" href="{{ asset(('pdf/informes/Informe_Anual_2020.pdf'))}}">Informes Anuales <ion-icon style="font-size: 22px" name="download-outline"></ion-icon></a></b></h4>
                            </div>
                          </div>
                        </article>
                      </li>
                    </ol>
                  </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Aplicabilidad -->
    {{-- <div class="section aplicabilidad">
        <div class="content container">
            <h2 class="section-title">Tablas de Aplicabilidad</h2>
            <br>
            <div class="projects">

                <button class="accordion">Ley General de Transparencia y Acceso a la Información Pública</button>
                <div style="overflow-x:auto;" class="panel">
                    <h4>Ley General de Transparencia y Acceso a la Información Pública</h4>
                    <p>Artículo 70. De las obligaciones de transparencia comunes:</p>
                    <table class="table" >
                        <tbody>
                            <tr>
                                <td style="background: #92D050; border: solid #fff 1.0pt;">
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                                </td>
                                <td style="background: #92D050; border: solid #fff 1.0pt">
                                    <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <p style="text-align: center; ">I, II, III, IV, V, VI, VII, IX, X, XI, XIII, XIV, XIX, XX, XXIII, XXIV, XXV, XXIX, XXXII, XXXIII, XXXIV, XXXVII, XXXIX, XLIII, XLV, XLVIII</p>
                                </td>
                                <td >
                                    <p style="text-align: center;">VIII, XII, XV, XVIII, XXI, XXII, XXVIII, XVI, XVII, XXXI, XXXV, XXXVI, XXXVIII, XLII, XLIV, XLVI, XLVII</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Artículo 76. De las obligaciones de transparencia específicas:</p>
                    <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <p style="text-align: center; ">I, II, IV, V, VI, VII, VIII, IX, X, XII, XIII, XIV, XV, XVI, XVIII, XIX, XX, XXI, XXII, XXIII, XXIV, XXV, XXVII, XXVIII, XXIX, XXX</p>
                            </td>
                            <td >
                                <p style="text-align: center;">III, XI, XVII, XXVI</p>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>

                <button class="accordion">Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios</button>
                <div style="overflow-x:auto;" class="panel">
                    <h4>Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios</h4>
                <p>Artículo 92. De las obligaciones de transparencia comunes:</p>
                <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                             <td >
                                <p style="text-align: center; ">I, II, III, IV, V, VI, VII, IX, X, XI, XV, XVI, XVII, XVIII, XIX, XX, XXII, XXV, XXVIII, XXIX, XXX, XXXII, XXXIII, XXXIV, XLV, XXXVIII, XXXIX, XL, XLI, XLIII, XLVII, XLIX, LII</p>
                            </td>
                             <td >
                                <p style="text-align: center;">VIII, XII, XIII, XIV, XVIII, XXI, XXVI, XXVII, XXXI, XXXV, XXXVI, XXXVIII, XLII, XLIV, XLVI, XLVII, L, LI</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Artículo 93. Tablas de aplicabilidad y de actualización:</p>
                <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                             <td >
                                <p style="text-align: center; ">I</p>
                            </td>
                             <td >
                                <p style="text-align: center;">Sin información</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Artículo 100. De las obligaciones de transparencia específicas:</p>
                <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                             <td >
                                <p style="text-align: center; ">I, II, IV, V, VI, VII, VIII, IX, X, XII, XIII, XIV, XV, XVI, XVIII, XIX, XX, XXI, XXII, XXIII, XXIV, XXV, XXVII, XXVIII, XXIX, XXX</p>
                            </td>
                             <td >
                                <p style="text-align: center;">III, XI, XVII, XXVI</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Artículo 103. Información adicional:</p>
                <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                             <td >
                                <p style="text-align: center; ">I, II, III A</p>
                                <p style="text-align: center; ">I, II, III B</p>
                            </td>
                             <td >
                                <p style="text-align: center;">Sin </p>
                                <p style="text-align: center;">información</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Ver archivos:</p>
                <table class="table" >
                    <tbody>
                        <tr>
                            <td style="background: #92D050; border: solid #fff 1.0pt;">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">Aplican</span></p>
                            </td>
                            <td style="background: #92D050; border: solid #fff 1.0pt">
                                <p style="margin-bottom: .0001pt; text-align: center; line-height: normal;"><span style="color: white;">No aplican</span></p>
                            </td>
                        </tr>
                        <tr>
                             <td >
                                <p style="text-align: center;"><a style="color: #43B02A" target="blank" href="https://partidoverdeedomex.org/wp-content/uploads/2020/03/Tabla-de-Aplicabilidad.xlsx">Ver tabla de aplicabilidad</a></p>
                            </td>
                             <td >
                                <p style="text-align: center;"><a style="color: #43B02A" target="blank" href="https://partidoverdeedomex.org/wp-content/uploads/2020/03/Tablas-de-conservaci%C3%B3n.docx">Ver tabla de conservación</a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- Artículos -->
    {{-- <div class="section">
            <div class="content container acordeones">
                <h2 class="section-title">Obligaciones Comunes y Específicas de Transparencia</h2>
                <br><br>
                <div class="projects">

                    <button class="accordion">Artículo 92</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table texto">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Normatividad Aplicable</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>II A</td>
                                    <td>Estructura Orgánica</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/organigramas.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>II B</td>
                                    <td>Organigrama</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Facultades de cada área</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>Metas y objetivos de las áreas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>V A</td>
                                    <td>Indicadores de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>V B</td>
                                    <td>Matriz de indicadores para resultados relacionados con temas de interés público o trascendencia social</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_v_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VI A</td>
                                    <td>Indicadores de objetivos y resultados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VI B</td>
                                    <td>Matriz de indicadores de resultados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VII</td>
                                    <td>El directorio de todos los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>VIII</td>
                                    <td>Remuneraciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>IX</td>
                                    <td>Gastos por concepto de viáticos y gastos de representación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>X A</td>
                                    <td>Plazas vacantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>X B</td>
                                    <td>Total de plazas vacantes y ocupadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_x_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XI</td>
                                    <td>Contrataciones de servicios profesionales por honorarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XII</td>
                                    <td>Perfil de los puestos de los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIII</td>
                                    <td>Declaraciones patrimoniales de los servidores públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIV A</td>
                                    <td>Programas de subsidios, estímulos y apoyos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIV B</td>
                                    <td>Padrón de benficiarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XV</td>
                                    <td>Agenda de reuniones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_ix_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVI</td>
                                    <td>Domicilio de la Unidad de Transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVII</td>
                                    <td>Registros de solicitudes de acceso a la información recibidas y atendidas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XVIII</td>
                                    <td>Convocatorias a concursos para ocupar cargos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XIX</td>
                                    <td>indices de los expedientes clasificados como reservados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XX A</td>
                                    <td>Normatividad laboral</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XX B</td>
                                    <td>Recursos públicos entregados a sindicatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xx_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXI</td>
                                    <td>Información curricular y sanciones administrativas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXII</td>
                                    <td>Servicios públicos con sanciones administrativas definitivas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIII</td>
                                    <td>Servicios requisitos para acceder a ellos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIV</td>
                                    <td>Trámites, requisitos y formatos que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV A</td>
                                    <td>Presupuesto asigando</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV B</td>
                                    <td>Ejercicio de los egresos presupuestarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXV C</td>
                                    <td>Información financiera de cuenta pública</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVI</td>
                                    <td>Deuda pública</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII A</td>
                                    <td>Programa anual de comunicación social o equivalente</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII B</td>
                                    <td>Erogacion de los recursos por contratación de servicios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII C</td>
                                    <td>Utilización de los tiempos oficiales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVII D</td>
                                    <td>Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxvii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXVIII</td>
                                    <td>Resultados de auditorias realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIX A</td>
                                    <td>Resultados de procedimeintos de licitación pública e invitación a cuando menos tres personas realiza</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXIX B</td>
                                    <td>Resultados de procedimientos de adjudicación directa realizados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXX</td>
                                    <td>Resultados de la dictaminación de los estados financieros</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXI</td>
                                    <td>Personas que usan recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXII</td>
                                    <td>Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIII</td>
                                    <td>Informes emitidos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIV</td>
                                    <td>Estadísticas generadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXV A</td>
                                    <td>Gasto por capítulo, concepto y partida</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXV B</td>
                                    <td>Informes financieros contables presupuestales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVI</td>
                                    <td>Padrón de proveedores y contrataistas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVII</td>
                                    <td>Convenios de coordinación, de concertación con el sector social o privado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII A</td>
                                    <td>Inventario de bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII B</td>
                                    <td>Inventario de altas practicadas a bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII C</td>
                                    <td>Inventario de bajas practicadas a bienes muebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII D</td>
                                    <td>Inventario de bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII E</td>
                                    <td>Inventario de altas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_e.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII F</td>
                                    <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_f.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXVIII G</td>
                                    <td>Inventario de bienes muebles e inmuebles donados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxviii_g.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX A</td>
                                    <td>Recomendaciones emitidas por la CNDH</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX B</td>
                                    <td>Casos especiales emitidos por la CNDH u otros organismos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XXXIX C</td>
                                    <td>Recomendaciones emitidas por organismos internacionales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xxxix_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XL</td>
                                    <td>Resoluciones y laudos emitidos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xl.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLI A</td>
                                    <td>Mecanismos de participación ciudadana</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLI B</td>
                                    <td>Resultados de los mecanismos de participación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xli_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLII A</td>
                                    <td>Programas que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLII B</td>
                                    <td>Trámites para acceder a programa que ofrecen</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII A</td>
                                    <td>Informe de sesiones del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII B</td>
                                    <td>Informe de resoluciones del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII C</td>
                                    <td>Integrantes del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIII D</td>
                                    <td>Calendario de sesiones ordinarias del comité de transparencia</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliii_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIV A</td>
                                    <td>Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIV B</td>
                                    <td>Encuestas sobre programas financiados con recursos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xliv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLV</td>
                                    <td>Estudios financiados con recursos públicos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVI A</td>
                                    <td>Hipervínculo al listado de pensionados y jubilados</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVI B</td>
                                    <td>Listado de jubilados y pensionados y el monto que reciben</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvi_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVII A</td>
                                    <td>Ingresos recibidos por cualquier concpeto por el sujeto obligado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVII B</td>
                                    <td>Responsables de recibir, administrar y ejercer los ingresos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlvii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVIII A</td>
                                    <td>Donaciones en dinero realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLVIII B</td>
                                    <td>Donaciones en especie realizadas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlviii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>XLIX</td>
                                    <td>Catálogo de disposición documental y guía simple de archivos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_xlix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>L A</td>
                                    <td>Actas del consejo consultivo</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>L B</td>
                                    <td>Opiniones y recomendaciones del consejo consultivo</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_l_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI A</td>
                                    <td>Solicitudes de intervención de comunicaciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI B</td>
                                    <td>Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LI C</td>
                                    <td>Mensaje</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_li_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII A</td>
                                    <td>Información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII B</td>
                                    <td>Preguntas frecuentes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr >
                                    <td>LII C</td>
                                    <td>Trasnaprencia proactiva</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_92_lii_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <!-- and so on... -->
                            </tbody>
                        </table>
                    </div>

                    <button class="accordion">Artículo 93</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Tablas de aplicabilidad y de actualización</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_93_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="accordion">Artículo 100</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table texto">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I</td>
                                    <td>Padrón de afiliados o militantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_i.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>Acuerdos y resoluciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Convenios de participación con sociedad civil</td>
                                    <td><a class="linkhov" target="blank" href="Convenios de participación con sociedad civil"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>Contratación y convenios de bienes y servicios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_iv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>V</td>
                                    <td>Minutas de sesiones del partido</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_v.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VI</td>
                                    <td>Responsables de finanzas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VII</td>
                                    <td>Organizaciones sociales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_vii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>VIII</td>
                                    <td>Cuotas ordinarias y extraordinarias de militantes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_viii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>IX</td>
                                    <td>Financiamiento privado</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_ix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>X</td>
                                    <td>Aportantes a campañas y precampañas</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_x.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XI</td>
                                    <td>Actas de asablea constitutiva</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XII</td>
                                    <td>Demarcaciones electorales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIII</td>
                                    <td>Tiempos que les corresponden en radio y TV</td>
                                    <td><a class="linkhov" target="blank" href=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIV</td>
                                    <td>Documentos básicos, plataformas, programas de gobierno y mecanismos de designación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xiv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XV</td>
                                    <td>Directorios de órganos de dirección</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xv.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVI</td>
                                    <td>Tabulador de remuneraciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVII</td>
                                    <td>Curriculo de precandidatos y candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XVIII</td>
                                    <td>Curriculo de dirigentes</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XIX</td>
                                    <td>Convenios de frente, coalición, fusión o de participación electoral con agrupaciones políticas nacionales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XX</td>
                                    <td>Convocatorias para eleccion de dirigentes y candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXI</td>
                                    <td>Responsbales de procesos de evaluación y selección de candidatos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXII</td>
                                    <td>Financiamiento público para liderazgo político de las mujeres</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIII</td>
                                    <td>Resoluciones de órgano de control</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIV A</td>
                                    <td>Financiamiento público y descuentos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIV B</td>
                                    <td>Descuentos por motivo de las sanciones</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxiv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV A</td>
                                    <td>Finanzas y patrimonio</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV B</td>
                                    <td>Inventario de bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV C</td>
                                    <td>Inventario de altas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_c.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXV D</td>
                                    <td>Inventario de bajas practicadas a bienes inmuebles</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxv_d.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVI</td>
                                    <td>Resoluciones de órganos disciplinarios</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvi.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVII</td>
                                    <td>Representantes Electorales</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxvii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXVIII</td>
                                    <td>Mecanismos de control y supervisión de procesos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxviii.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXIX</td>
                                    <td>Fundaciones, asociaciones, centros, institutos de investigación o capacitación</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxix.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>XXX</td>
                                    <td>Resoluciones de autoridad electoral sobre ingresos y gastos</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_100_xxx.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button class="accordion">Artículo 103</button>
                    <div style="overflow-x:auto;" class="panel">
                        <table class="styled-table texto">
                            <thead>
                                <tr>
                                    <th style="text-align: justify;">Fracción</th>
                                    <th style="text-align: justify;">Nombre</th>
                                    <th style="text-align: justify;">URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>I y II A
                                        <br>
                                        III A
                                    </td>
                                    <td>Listados con información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_a.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                                <tr>
                                    <td>I y II B
                                        <br>
                                        III B
                                    </td>
                                    <td>Información de interés público</td>
                                    <td><a class="linkhov" target="blank" href="https://www.ipomex.org.mx/ipo3/lgt/indice/PVERDE/art_103_i_b.web"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
    </div> --}}

    <!-- Normatividad -->
    {{-- <div class="section">
        <div class="content container">
            <h2 class="section-title">Normatividad</h2>
            <br>
            <div class="projects">

                <button class="accordion">Constitución Política de los Estados Unidos Mexicanos</button>
                <div style="text-align: center" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>Constitución Política de los Estados Unidos Mexicanos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Constitución Política del Estado Libre y Soberano de México</button>
                <div style="text-align: center" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>Constitución Política del Estado Libre y Soberano de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Tratados Internacionales</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Pacto Internacional de Derechos Civiles y Políticos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>2. Convención Americana sobre Derechos Humanos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>3. Pacto Internacional de Derechos Económicos, Sociales y Culturales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Leyes Generales, Federales y Locales</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>2. Ley Federal de Transparencia y Acceso a la Información Pública</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>3. Ley Federal de Consulta Popular</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>4. Ley General de Instituciones y Procedimientos Electorales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>5. Ley General de Partido Políticos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>6. Ley General del Sistema de Medios de Impugnación en Materia Electoral</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>7. Ley General en Materia de Delitos Electorales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>8. Ley General de Transparencia y Acceso a la Información Pública</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>9. Ley Federal de Archivos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>10. Ley General de Archivos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>11. Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>12. Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Reglamentos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Reglamento de Elecciones INE</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>2. Reglamento de Fiscalización</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>3. Reglamento de Financiamiento de la Secretaria de Finanzas del Partido Verde Ecologista de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>4. Reglamento de Transparencia y Acceso a la Información Pública, Archivos y Protección de Datos Personales del Partido Verde Ecologista de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Códigos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Código Electoral del Estado de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Criterios normativos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Criterio 7/14 INAI. Solicitudes de acceso. Deben admitirse aun cuando se fundamenten en el artículo 8º Constitucional</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>2. Criterio 6/14 INAI. Acceso a información gubernamental. No debe condicionarse a que el solicitante acredite su personalidad, demuestre interés alguno o justifique su utilización</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>3. Criterio 9/13 INAI. Periodo de búsqueda de la información, cuando no se precisa en la solicitud de información</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>4. Criterio 29/10 INAI. La clasificación y la inexistencia de información son conceptos que no pueden coexistir</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>5. Criterio 28/10 INAI. Cuando en una solicitud de información no se identifique un documento en específico, si ésta tiene una expresión documental, el sujeto obligado deberá entregar al particular el documento en específico</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>6. Criterio 20/10 INAI. Los anexos son parte integral del documento principal</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>7. Criterio 10/09 INAI. Recurso de revisión. Procede aun cuando el documento con el que se da respuesta no sea una resolución emitida por el Comité de Información</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>8. Criterio 7/09 INAI. Los documentos sin firma o membrete emitidos y/o notificados por las Unidades de Enlace de las dependencias o entidades son válidos en el ámbito de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental cuando se proporcionan a través del sistema Infomex</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>9. Criterio 13/2017 INAI. Incompetencia</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>10.Criterio 12/2017 INAI. Régimen de subcontratación por sujetos obligados</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>11. Criterio 11/2017 INAI. Cuentas bancarias y/o CLABE interbancaria de sujetos obligados que reciben y/o transfieren recursos públicos, son información pública</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>12. Criterio 10/2017 INAI. Cuentas bancarias y/o CLABE interbancaria de personas físicas y morales privadas</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>13. Criterios 09/2017 INAI. Cuotas sindicales. No están sujetas al escrutinio público</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>14. Criterio 08/2017 INAI. Modalidad de entrega. Procedencia de proporcionar la información solicitada en una diversa a la elegida por el solicitante</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>15. Criterio 07/2017 INAI. Casos en los que no es necesario que el Comité de Transparencia confirme formalmente la inexistencia de la información</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>16. Criterios 06/2017 INAI. Copias certificadas, como modalidad de entrega en la Ley Federal de Transparencia y Acceso a la Información Pública corrobora que el documento es una copia fiel del que obra en los archivos del sujeto obligado</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>17. Criterio 05/2017 INAI. La información patrimonial de personas morales de derecho público no lesiona el bien jurídico tutelado que ampara el secreto fiscal</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>18. Criterio 04/2017 INAI. Resoluciones del Comité de Transparencia, gozan de validez siempre que contengan la firma de quien los emite</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>19. Criterio 03/2017 INAI. No existe obligación de elaborar documentos ad hoc para atender las solicitudes de acceso a la información</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>20. Criterio 02/2017 INAI. Congruencia y exhaustividad. Sus alcances para garantizar el derecho de acceso a la información</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>21. Criterio 01/2017 INAI. Es improcedente ampliar las solicitudes de acceso a la información, a través de la interposición del recurso de revisión</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Otros documentos normativos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>1. Acuerdo mediante el cual se aprueba el procedimiento para el registro, turnado, sustanciación y seguimiento a las resoluciones de los recursos de revisión emitidas por el Pleno del Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales, en los Sistemas de Gestión de Medios de Impugnación y de Comunicación entre Organismos Garantes y Sujetos Obligados de la Federación</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>2. Estatutos del Partido Verde Ecologista de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>3. Declaración de Principios</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>4. Lineamientos Técnicos Generales para la Publicación, Homologación y Estandarización de la Información de las Obligaciones establecidas en el Título Quinto y en la Fracción IV del Artículo 31 de la Ley General de Transparencia y Acceso a la Información Pública, que deben de difundir los Sujetos Obligados en los portales de internet y en la Plataforma Nacional de Transparencia</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>5. Lineamientos para la recepción, trámite y resolución de las solicitudes de Acceso a la Información Pública, Acceso, Modificación, Sustitución, Rectificación o Supresión Parcial o total de datos personales, así como de los recursos de revisión que deberán observar los sujetos obligados por la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>6. Acuerdo del Instituto de Transparencia y Acceso a la Información Pública del Estado de México y Municipios, respecto al contenido y alcance de las obligaciones de transparencia o información pública del oficio con relación a la denominada “Veda Electoral”</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>7. Lineamientos por los que se establecen las políticas, criterios y procedimientos que deberán observar los sujetos obligados, para proveer la aplicación e implementación de la Ley de Protección de Datos Personales del Estado de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>8. Lineamientos sobre medidas de seguridad aplicables a los sistemas de datos personales que se encuentran en posesión de los sujetos obligados de la Ley de Protección de Datos Personales del Estado de México</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>9. Recomendaciones para la designación de la persona responsable o titular de la Unidad de Información de los Sujetos Obligados</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>10. Calendario Oficial en materia de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios, para el año 2015 y enero 2016	</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>11. Recomendaciones para la designación de responsables de sistemas de datos personales en posesión de los Sujetos Obligados</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>12. Lineamientos para la Organización y Conservación de los Archivos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>13. Lineamientos para la implementación y operación de la Plataforma Nacional de Transparencia</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>14. Lineamientos que deberán observar los sujetos obligados para la atención de requerimientos, observaciones, recomendaciones y criterios que emita el Sistema Nacional de Transparencia, Acceso a la Información Pública y Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>15. Modificación de los Lineamientos técnicos generales para la publicación, homologación y estandarización de la información de las obligaciones establecidas en el Título Quinto y en la fracción IV del artículo 31 de la Ley General de Transparencia y Acceso a la Información Pública, que deben de difundir los sujetos obligados en los portales de Internet y en la Plataforma Nacional de Transparencia</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>16. Lineamientos para determinar los catálogos y publicación de información de interés público; y para la emisión y evaluación de políticas de transparencia proactiva</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>17. Lineamientos generales en materia de clasificación y desclasificación de la información, así como para la elaboración de versiones públicas</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>18. Programa de la Cultura de Transparencia y de Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>19. Estándares de Protección de Datos Personales para los Estados Iberoamericanos</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>20. Lineamientos para la elaboración, ejecución y evaluación del Programa Nacional de Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>21. Acuerdo por el que se emiten los Criterios mínimos y metodología para el diseño y documentación de Políticas de Acceso a la Información, Transparencia Proactiva y Gobierno Abierto, así como su Catálogo como referente para los integrantes del Sistema Nacional de Transparencia, Acceso a la Información Pública y Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>22. Acuerdo por el que se emiten las Políticas de Gobierno Abierto y Transparencia Proactiva emitido por el Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales como un instrumento de referencia para el cumplimiento de los artículos 56 y 59 de la Ley General de Transparencia y Acceso a la Información Pública</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>23. Acuerdo mediante el cual se aprueba el Programa Nacional de Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>24. Lineamientos Técnicos para la publicación, homologación y estandarización de la información establecida en el Título Quinto, Capítulos II, III y IV, y el Título Noveno de la Ley de Transparencia y Acceso a la Información Pública del Estado de México y Municipios; adicional de aquella contemplada en el Título Quinto de la Ley General de Transparencia y Acceso a la Información Pública</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>25. Programa Estatal y Municipal de Protección de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>26. Convenio Nº 108 del consejo de Europa, de 28 de Enero de 1981, para la Protección de las Personas con Respecto al Tratamiento Automatizado de Datos de Carácter Personal</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>27. Lineamientos para la Portabilidad de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>28. Acuerdo para la elaboración, presentación y valoración de evaluaciones de impacto en la protección de datos personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>29. Acuerdo mediante el cual se hace del conocimiento de los Sujetos Obligados, el acuerdo del Consejo Nacional del Sistema Nacional de Transparencia, Acceso a la Información Pública y Protección de Datos Personales, en el que se adoptan como criterios y buenas prácticas recomendables para los Sujetos Obligados, los documentos “Combate al tráfico ilícito del patrimonio documental”, “Principios básicos sobre el papel de archiveros y gestores de documentos en la defensa de los derechos humanos” y “Declaración de la Ciudad de México suscrita por la Asociación Latinoamericana de Archivos y el Consejo Internacional de Archivos del 29 de noviembre del 2017, en el Marco de la Conferencia Anual ALA-ICA 2017”</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>30. Acuerdo mediante el cual se aprueban las políticas de transparencia proactiva del Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>31. Acuerdo mediante el cual se aprueba el procedimiento para el registro, turnado, sustanciación y seguimiento a las resoluciones de los recursos de revisión emitidas por el Pleno del Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales, en los Sistemas de Gestión de Medios de Impugnación y de Comunicación entre Organismos Garantes y Sujetos Obligados de la Federación</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" src=""><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- Scripts -->
@include('partials.scripts')

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


</body>
</html>
