<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')

<style>
    .styled-table {
    text-align: justify;
    width: 100% !important;
    /* border-collapse: collapse; */
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

    @media screen and (max-width: 600px) {
        .ocultar{
        display:none;
        }

        .team-name h6, .team-name div{
            font-size:2.5vw;
        }
    }

    @media screen and (min-width: 600px) {
        .ocultar2{
        display:none;
        }
    }

</style>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- <main style="margin-top: 8rem !important" class="page-header">
        <div class="container"><h1>Gestión Documental (Archivo)</h1></div>
    </main> --}}

<div class="animsition">

    <section style="padding-top:8rem !important; padding-bottom: 2rem;" class="section">
        <div >
            <img width="100%" class="img-responsive" src="{{ asset('images/archivo/SIA_Banner.webp')}}">
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
    <section style="padding-top: 10px;">
        <div class="container">
            <div class="intro">
                <div class="row" style="text-align: justify; align-items: center; padding: 3rem;">
                    <div class="">
                    <!-- <h1 class="display-2 text-white"><span>Partido Verde</span> del Estado de México</h1> -->
                    <p class="subtitle-top" style="color: black;  font-size: x-large; font-weight: 150;">En cumplimiento a lo dispuesto por los <strong>artículos 41</strong> de la <strong>Constitución Política de los Estados Unidos Mexicanos; 210, 251</strong> de la <strong>Ley General de Instituciones y Procedimientos Electorales; 12</strong> de la <strong>Constitución Política del Estado Libre y Soberano de México; y 263</strong> del Código Electoral del Estado de México, con la finalidad de generar condiciones para que la ciudadanía reflexione el sentido de su voto en libertad, se hace de su conocimiento que <strong>durante el periodo comprendido del 03 de junio hasta la conclusión de la jornada electoral, se suspenderá la difusión en medios sociales de todo tipo de propaganda electoral.</strong></p>
                    <!-- <div class="hr-bottom"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section style="padding-top:0 !important" class="section">
        <div >
            <img class="img-responsive" src="{{ asset('images/archivo/SIA_Banner.webp')}}">
        </div>
    </section> --}}

    <section class="section bg-dots">
        <div class="container">

            <img class="img-responsive ocultar2" style=" margin:auto;" src="{{ asset('images/archivo/SIA_B_1x1.png')}}">
            <img class="img-responsive ocultar" style=" margin:auto;" src="{{ asset('images/archivo/SIA_B.png')}}">
        </div>
    </section>


    <section class="section-que">
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
                            <span class="text-dark icon-medium-small icon-book"></span>
                          </div>
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>MARCO LEGAL</a></b></h4>
                            </div>
                            <ul>
                                <li class="lead">
                                    Ley General de Archivos, artículos 20 y 21.
                                    <br>
                                    <a href="http://www.diputados.gob.mx/LeyesBiblio/pdf/LGA_150618.pdf" target="_blank">http://www.diputados.gob.mx/LeyesBiblio/pdf/LGA_150618.pdf</a>
                                </li>
                                <li class="lead">
                                    Ley de Archivos y Administración de Documentos del Estado de México y Municipios, artículos 20 y 21.
                                    <br>
                                    <a target="_blank" href="https://partidoverdeedomex.org/pdf/marco-normativo/Ley_de_Archivos_Administracion_de_Documentos_del_Estado_de_Mexico_y_Municipios.pdf">https://partidoverdeedomex.org/pdf/marco-normativo/Ley_de_Archivos_Administracion_de_Documentos_del_Estado_de_Mexico_y_Municipios.pdf</a>
                                </li>
                            </ul>
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
                              <h4><b class="fn"><a>¿CONOCES QUE ES EL SISTEMA INSTITUCIONAL DE ARCHIVOS (SIA)?</a></b></h4>
                            </div>
                            <p class="lead">Es el conjunto de registros, procesos, procedimientos, criterios, estructuras, herramientas y funciones que desarrolla cada Sujeto Obligado y sustenta la Actividad Archivística, de acuerdo con los procesos de Gestión Documental.<br>
                                Todos los Documentos de Archivo en posesión de los Sujetos Obligados formarán parte del Sistema Institucional.</p>
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

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Estructura</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/archivo/Fabian-Perez.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ÁREA COORDINADORA DE ARCHIVOS</h6>
                          <div class="team-spec">TITULAR: <br>FABIAN PÉREZ LOPE</div>
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
                    <img alt="" src="{{ asset('images/archivo/Diana-Lozano.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ÁREA DE CORRESPONDENCIA</h6>
                          <div class="team-spec">RESPONSABLE: <br>DIANA LOZANO HERNÁNDEZ</div>
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
                    <img alt="" src="{{ asset('images/archivo/Veronica-Perez.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: SECRETARÍA GENERAL</h6>
                          <div class="team-spec">RESPONSABLE: <br>VERÓNICA PÉREZ MARTÍNEZ</div>
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
                    <img alt="" src="{{ asset('images/archivo/Dulce-Maria.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: SECRETARÍA DE ORGANIZACIÓN</h6>
                          <div class="team-spec">RESPONSABLE: <br>DULCE MARÍA GUTIÉRREZ BECERRIL</div>
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
                    <img alt="" src="{{ asset('images/archivo/Hector-Paul.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: SECRETARÍA DE PROCESOS ELECTORALES</h6>
                          <div class="team-spec">RESPONSABLE: <br>HÉCTOR PAUL LÓPEZ QUIROZ</div>
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
                    <img alt="" src="{{ asset('images/archivo/Susana-Pereyra.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: UNIDAD DE TRANSPARENCIA</h6>
                          <div class="team-spec">RESPONSABLE: <br>SUSANA PICHARDO PEREYRA</div>
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
                      <img alt="" src="{{ asset('images/archivo/Veronica-Perez.webp') }}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>ARCHIVO DE TRÁMITE: SECRETARÍA DE FINANZAS</h6>
                            <div class="team-spec">RESPONSABLE: <br>VERÓNICA PÉREZ MARTÍNEZ</div>
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
                    <img alt="" src="{{ asset('images/archivo/Elizabeth-Pereyra.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: ÁREA DE PROTECCIÓN DE DATOS PERSONALES</h6>
                          <div class="team-spec">RESPONSABLE:<br> ELIZABETH PICHARDO PEREYRA</div>
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
                    <img alt="" src="{{ asset('images/archivo/Abraham-Fabian.webp') }}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: ÁREA COORDINADORA DE ARCHIVOS</h6>
                          <div class="team-spec">RESPONSABLE:<br> ABRAHAM FABIÁN HERNÁNDEZ</div>
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
                    <img alt="" src="{{ asset('images/comite-transparencia/profile.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: ÁREA JURÍDICA</h6>
                          <div class="team-spec">RESPONSABLE:<br> EN TRÁMITE DE DESIGNACIÓN</div>
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
                    <img alt="" src="{{ asset('images/comite-transparencia/profile.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE TRÁMITE: ASUNTOS DE LA JUVENTUD</h6>
                          <div class="team-spec">RESPONSABLE:<br> EN TRÁMITE DE DESIGNACIÓN</div>
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
                    <img alt="" src="{{ asset('images/comite-transparencia/profile.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>ARCHIVO DE CONCENTRACIÓN: EN TRÁMITE ASIGNACIÓN DE ESPACIO</h6>
                          <div class="team-spec">RESPONSABLE:<br> EN TRÁMITE DE DESIGNACIÓN</div>
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




    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- jQuery -->
@include('partials.scripts')

</body>
</html>
