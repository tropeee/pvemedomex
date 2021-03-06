<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')

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

</style>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="animsition">

    <section style="padding-top:8rem !important; padding-bottom: 2rem;" class="section">
        <div >
            <img width="100%" class="img-responsive" src="{{ asset('images/bg/DatosPersonales_Banner.png')}}">
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

         <!-- ??Qu?? hacemos? -->
         <section style="padding-top: 0; padding-bottom:1rem" class="section-que">
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
                                  <h4><b class="fn"><a>??Qu?? es la Protecci??n de los Datos Personales?</a></b></h4>
                                </div>
                                <p class="lead" style="text-align: justify">Es un derecho humano fundamental que nos otorga el poder de controlar la informaci??n personal que compartimos con otras personas e instituciones para prevenir cualquier da??o a nuestra privacidad.</p>
                                <br>
                                <p><small>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) <a target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></small></p>
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
                                  <h4><b class="fn"><a>??Qu?? son los Datos Personales?</a></b></h4>
                                </div>
                                <p class="lead">Los Datos Personales Son toda aquella informaci??n que pertenece a una persona f??sica o jur??dica colectiva que puede ser usada para la identificaci??n directa o indirectamente a trav??s de cualquier documento informativo f??sico o electr??nico.</p>
                                <br>
                                <p><small>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) <a target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></small></p>
                            </div>
                            <div style="align-self:center;">
                              <center><a href="https://micrositios.inai.org.mx/vulnerometro/" target="_blank"><img width="50%" class="img-responsive" src="{{ asset('images\portales\vulnerometro.webp')}}"></a> </center>  
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
          
        <section class="section bg-dots" style="padding-top:3rem;">
            <div class="content container">
                <div style="text-align: center"><span class="text-dark icon-medium-small icon-layers"></span></div>
                <br>
                <h2 style="text-align: justify" class="section-title">Los datos personales se clasifican en diversas categor??as atendiendo a las caracter??sticas del dato que se trate en el Partido Verde Ecologista de M??xico ponemos a su disposici??n lo siguiente:</h2>
                <br>
                <br>
                <div class="projects acordeon2">
                    <button class="accordion">1.	Datos Personales de Identificaci??n</button>
                    <div style="overflow-x:auto;" class="panel">
                        <ul style="padding-top: 1rem">
                            <li>Nombre</li>
                            <li>Domicilio</li>
                            <li>Tel??fono particular y/o celular</li>
                            <li>Correo electr??nico personal</li>
                            <li>Estado civil</li>
                            <li>Firma</li>
                            <li>Firma electr??nica</li>
                            <li>Cartilla militar</li>
                            <li>Lugar y fecha de nacimiento</li>
                            <li>Nacionalidad</li>
                            <li>Edad</li>
                            <li>Fotograf??a</li>
                            <li>Clave del Registro Federal de Contribuyentes (RFC)</li>
                            <li>Clave ??nica de Registro de Poblaci??n (CURP)</li>
                            <li>Nombres de familiares, dependientes y/o beneficiarios.</li>
                        </ul>
                    </div>

                    <button class="accordion">2. Datos Laborales</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="padding-top: 1rem">Pueden referirse a los contenidos en:</p>
                        <ul>
                            <li>Las solicitudes de empleo</li>
                            <li>Correo electr??nico institucional</li>
                            <li>Tel??fono institucional</li>
                            <li>Actividades extracurriculares</li>
                            <li>Referencias laborales</li>
                            <li>Referencias personales</li>
                            <li>Recomendaciones</li>
                            <li>Capacitaciones</li>
                            <li>Documentos de selecci??n</li>
                            <li>Reclutamiento</li>
                            <li>Nombramiento</li>
                            <li>Incidencias</li>
                            <li>Hojas de servicio y otras generadas derivadas de nuestra relaci??n laboral.</li>
                        </ul>
                    </div>

                    <button class="accordion">3. Datos Patrimoniales</button>
                    <div style="overflow-x:auto;" class="panel">
                        <ul style="padding-top: 1rem">
                            <li>Se refiere a los bienes muebles e inmuebles</li>
                            <li>Ingresos y egresos</li>
                            <li>Cuentas bancarias</li>
                            <li>Seguros</li>
                            <li>Fianzas</li>
                            <li>Afores</li>
                            <li>Historial crediticio</li>
                            <li>Informaci??n fiscal</li>
                            <li>Servicios contratados y afines.</li>
                        </ul>
                    </div>

                    <button class="accordion">4. Datos Sobre Procedimientos Administrativos y Jurisdiccionales</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Es aquella informaci??n relacionada ??ntimamente a nosotros disponible en procedimientos administrativos o juicios en materia</p>
                        <ul>
                            <li>Laboral</li>
                            <li>Civil</li>
                            <li>Penal</li>
                            <li>Fiscal</li>
                            <li>Mercantil o de cualquier otra rama del Derecho.</li>
                        </ul>
                    </div>

                    <button class="accordion">5. Datos Acad??micos</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Son los datos que permiten identificar nuestra trayectoria acad??mica y formaci??n profesional como son calificaciones, boletas, constancias, certificados, reconocimientos, t??tulos, c??dulas profesionales.</p>
                    </div>

                    <button class="accordion">6. Datos de Transito y Movimientos Migratorios</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Informaci??n necesaria para nuestro tr??nsito dentro y fuera de pa??s.</p>
                    </div>

                    <button class="accordion">7. Datos personales sensibles</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Son los datos referentes a la esfera m??s ??ntima de su titular cuya utilizaci??n indebida puede dar origen a discriminaci??n o conlleve un riesgo grave para ??ste, se clasifican en:</p>
                       <br>
                        <ol>
                            <li>
                                <p><strong>Datos Ideol??gicos:</strong></p>
                                <p style="text-align: justify">Estos datos incluyen aquellas creencias religiosas, ideol??gicas, de afiliaci??n pol??tica y/o sindical, y pertenencia a organizaciones de la sociedad civil y/o asociaciones religiosas, entre otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Vida Sexual:</strong></p>
                                <p style="text-align: justify">Es aquella informaci??n privada referente a la preferencia sexual y h??bitos sexuales, entre otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Origen:</strong></p>
                                <p style="text-align: justify">Es aquella informaci??n relativa al origen ??tnico y racial.</p>
                            </li>
                            <li>
                                <p><strong>Datos Biom??dicos:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relacionados con propiedades biol??gicas, caracter??sticas fisiol??gicas o rasgos de nuestra personalidad que mediante m??todos autom??ticos identifican rasgos f??sicos ??nicos e intransferibles de nosotros, como la huella dactilar, geometr??a de la mano, caracter??sticas de iris y retina, c??digo gen??tico u otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos Electr??nicos:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relativos a nuestros correos electr??nicos particulares, nombres de usuarios, contrase??as, firma electr??nica, direcci??n de IP (Protocolo de Internet) privada, o cualquier direcci??n de control o informaci??n empleada por nosotros, que implique nuestra identificaci??n o acceso en internet, conexi??n o red de comunicaci??n electr??nica.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Salud:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relacionados con nuestro estado f??sico o mental, cualquier atenci??n m??dica, expediente cl??nico, diagn??sticos, padecimientos, vacunas, intervenciones quir??rgicas, incapacidades m??dicas, discapacidades, uso de aparatos oftalmol??gicos, ortop??dicos, auditivos o pr??tesis, consumo de sustancias t??xicas y estupefacientes, sintomatolog??as o an??logos relacionados con nuestra salud.</p>
                            </li>
                        </ol>
                    </div>

                    <p>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) <a style="color:#50B948;" target="_blank" href="www.infoem.org.mx/es/contenido/datos-personales">www.infoem.org.mx/es/contenido/datos-personales</a> y la Ley de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios.</p>


                </div>
            </div>
        </section>

        {{-- <section style="padding-top: 0; padding-bottom:0" class="section-que">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                  <div class="section-add-comment">
                    <div class="comments">
                      <div class="comments-area">
                        <ol class="comment-list">
                          <li class="comment">
                            <article class="comment-body">
                              <div class="comment-content">
                                <div class="comment-metadata">
                                  <h4><b class="fn"><a>??Qu?? son los Derechos ARCO?</a></b></h4>
                                </div>
                                <p class="lead" style="text-align: justify">El derecho a solicitar ante el Partido Verde Ecologista de M??xico en el Estado de M??xico el Acceso, Rectificaci??n, Cancelaci??n y Oposici??n (ARCO) sobre el tratamiento de tus datos.</p>
                                <br>
                                <p class="lead" style="text-align: justify">Los derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de datos personales son derechos independientes.</p>
                                <br>
                                <p class="lead" style="text-align: justify">El ejercicio de cualquiera de ellos no es requisito previo no impide el ejercicio de otro. La procedencia de estos derechos, en su caso, se har?? efectiva una vez que el titular o su representante legal acrediten su identidad o representaci??n, respectivamente.</p>
                                <br>
                                <button class="accordion">1.	??Qu?? es el Derecho de Acceso?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de solicitar y recibir informaci??n sobre tus datos personales en posesi??n del Partido Verde Ecologista de M??xico en el Estado de M??xico para conocer las condiciones del tratamiento y finalidad que se les est?? dando.</p>
                                </div>

                                <button class="accordion">2.	??Qu?? es el Derecho de Rectificaci??n?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de solicitar la correcci??n de tus datos personales cuando se detecta que son inexactos o incompletos, desactualizados, inadecuados o excesivos respecto de la finalidad para la cual fueron obtenidos.</p>
                                </div>

                                <button class="accordion">3.	??Qu?? es el Derecho de Cancelaci??n?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho para solicitar la cancelaci??n de tus datos personales de los archivos, registros, expedientes y sistemas del responsable, con la finalidad de que los mismos ya no est??n en su posesi??n y dejen de ser sometidos a tratamiento.</p>
                                </div>
                                <button class="accordion">4.	??Qu?? es el Derecho de Oposici??n?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de impedir el tratamiento de tus datos personales, especialmente si la informaci??n fue recabada sin consentimiento, causa da??o, o tiene un tratamiento automatizado que afecta tus intereses, derechos o libertades.</p>
                                </div>

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
        </section> --}}


        <section class="section">
            <div class="content container">
                <h2 class="section-title"><span class="text-dark icon-medium-small icon-file-empty"></span> ??Qu?? son los Derechos ARCO?</h2>
                <br>
                <div class="projects acordeon2">

                    <p class="lead" style="text-align: justify">El derecho a solicitar ante el Partido Verde Ecologista de M??xico en el Estado de M??xico el Acceso, Rectificaci??n, Cancelaci??n y Oposici??n (ARCO) sobre el tratamiento de tus datos.</p>
                    <br>
                    <p class="lead" style="text-align: justify">Los derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de datos personales son derechos independientes.</p>
                    <br>
                    <p class="lead" style="text-align: justify">El ejercicio de cualquiera de ellos no es requisito previo no impide el ejercicio de otro. La procedencia de estos derechos, en su caso, se har?? efectiva una vez que el titular o su representante legal acrediten su identidad o representaci??n, respectivamente.</p>
                    <br>
                    <button class="accordion">1.	??Qu?? es el Derecho de Acceso?</button>
                    <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Derecho de solicitar y recibir informaci??n sobre tus datos personales en posesi??n del Partido Verde Ecologista de M??xico en el Estado de M??xico para conocer las condiciones del tratamiento y finalidad que se les est?? dando.</p>
                    </div>

                    <button class="accordion">2.	??Qu?? es el Derecho de Rectificaci??n?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho de solicitar la correcci??n de tus datos personales cuando se detecta que son inexactos o incompletos, desactualizados, inadecuados o excesivos respecto de la finalidad para la cual fueron obtenidos.</p>
                    </div>

                    <button class="accordion">3.	??Qu?? es el Derecho de Cancelaci??n?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho para solicitar la cancelaci??n de tus datos personales de los archivos, registros, expedientes y sistemas del responsable, con la finalidad de que los mismos ya no est??n en su posesi??n y dejen de ser sometidos a tratamiento.</p>
                    </div>

                    <button class="accordion">4.	??Qu?? es el Derecho de Oposici??n?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho de impedir el tratamiento de tus datos personales, especialmente si la informaci??n fue recabada sin consentimiento, causa da??o, o tiene un tratamiento automatizado que afecta tus intereses, derechos o libertades.</p>
                    </div>

                </div>
            </div>
        </section>


        {{-- <section class="section-que bg-dots">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <div class="section-add-comment">
                  <div class="comments">
                    <div class="comments-area">
                      <ol class="comment-list">
                        <li class="comment">
                          <article class="comment-body">
                            <div class="comment-content">
                              <div class="comment-metadata">
                                <h4><b class="fn"><a><span class="text-dark icon-medium-small icon-question-circle"></span>??C??mo realizo una solicitud de datos personales?</a></b></h4>
                              </div>
                              <p class="lead" style="text-align: justify">Las solicitudes de Derecho ARCO se pueden realizar a trav??s de tres modalidades:</p>
                              <br>
                              <button class="accordion">1.	Solicitud Verbal</button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Acudiendo directamente a la Unidad de Transparencia del Partido Verde Ecologista de M??xico en el Estado de M??xico ubicada en Rep??blica de Belice 109, Colonia Am??ricas C.P. 50130, Toluca Estado de M??xico.</p>
                              </div>

                              <button class="accordion">2.	Solicitud Escrita</button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Presentado un escrito libre dirigido a la Unidad de Transparencia del Partido Verde Ecologista de M??xico o llenando los formatos establecidos para la presentaci??n de la misma.</p>
                                  <br>
                                  <p style="text-align: justify">Los formatos podr??n ser obtenidos directamente en la Unidad de Transparencia del Partido Verde Ecologista de M??xico o en la p??gina web del Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) en los siguientes links: </p>
                                  <br>
                                  <a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio ">https://www.infoem.org.mx/es/contenido/inicio </a>
                                  <a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page ">https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page </a>
                                  <a target="_blank" href="https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  ">https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  </a>
                                  <div class="row">
                                    <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                                    <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio"><img src="{{ asset(('images/portales/logoInfoem001.png'))}}"></a></div>
                                  </div>
                              </div>

                              <button class="accordion">3.	Solicitud Electr??nica </button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Ingresando al Sistema de Acceso, Rectificaci??n, Cancelaci??n y Oposici??n de Datos Personales del Estado de M??xico (SARCOEM) <a href="https://sarcoem.org.mx" target="_blank">https://sarcoem.org.mx</a> o a la Plataforma de transparencia (PTN)  <a target="_blank" href="https://www.plataformadetransparencia.org.mx">www.plataformadetransparencia.org.mx</a></p>
                              </div>

                              <p>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM)</p>

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
      </section> --}}


      <section class="section bg-dots">
        <div class="content container">
            <h2 class="section-title"><span class="text-dark icon-medium-small icon-document"></span> ??C??mo realizo una solicitud de datos personales?</h2>
            <br>
            <div class="projects acordeon2">

                <p class="lead" style="text-align: justify">Las solicitudes de Derecho ARCO se pueden realizar a trav??s de tres modalidades:</p>

                <br>
                <button class="accordion">1.	Solicitud Verbal</button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Acudiendo directamente a la Unidad de Transparencia del Partido Verde Ecologista de M??xico en el Estado de M??xico ubicada en Rep??blica de Belice 109, Colonia Am??ricas C.P. 50130, Toluca Estado de M??xico.</p>
                </div>

                <button class="accordion">2.	Solicitud Escrita</button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Presentado un escrito libre dirigido a la Unidad de Transparencia del Partido Verde Ecologista de M??xico o llenando los formatos establecidos para la presentaci??n de la misma.</p>
                    <br>
                    <p style="text-align: justify">Los <a style="color:#50B948;" target="_blank" href="{{ route('Formatos') }}">formatos</a> podr??n ser obtenidos directamente en la Unidad de Transparencia del Partido Verde Ecologista de M??xico o en la p??gina web del Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) en los siguientes links: </p>
                    <br>


                    <a style="color:#50B948;" target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio ">https://www.infoem.org.mx/es/contenido/inicio </a><br>
                    <a style="color:#50B948;" target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page ">https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page </a><br>
                    <a style="color:#50B948;" target="_blank" href="https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  ">https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  </a>

                    <div class="row">

                      <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                      <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio"><img src="{{ asset(('images/portales/logoInfoem001.png'))}}"></a></div>

                </div>
                </div>

                <button class="accordion">3.	Solicitud Electr??nica </button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Ingresando al Sistema de Acceso, Rectificaci??n, Cancelaci??n y Oposici??n de Datos Personales del Estado de M??xico (SARCOEM) <a href="https://sarcoem.org.mx" target="_blank">https://sarcoem.org.mx</a> o a la Plataforma de transparencia (PTN)  <a target="_blank" href="https://www.plataformadetransparencia.org.mx">www.plataformadetransparencia.org.mx</a></p>
                </div>

                <p>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM)</p>


            </div>
        </div>
    </section>


    <div class="content">
        <div class="page-inner">
          <section class="section about-info">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">??Qu?? es SARCOEM?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">El Sistema de Acceso, Rectificaci??n, Cancelaci??n y Oposici??n del Estado de M??xico (SARCOEM) es un medio electr??nico a trav??s del cual es posible formular solicitudes de derechos ARCO y recursos de revisi??n.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">De esta manera, tras abrir una cuenta en esta plataforma, es posible darle seguimiento a tu solicitud, desde la presentaci??n hasta la resoluci??n.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para acceder al SARCOEM, necesitas ingresar a www.sarcoem.org.mx o dar clic en el enlace correspondiente, disponible en el apartado de Transparencia de la p??gina oficial del Partido Verde Ecologista de M??xico en el Estado de M??xico en el siguiente link: </p>

                    <a class="lead" style="color:#50B948;" target="_blank" href="https://partidoverdeedomex.org/portal-de-transparencia">https://partidoverdeedomex.org/portal-de-transparencia</a>
                    <br>
                    <br>
                    <p><small>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM)</small></p>
                  </div>
                </div>
              </div>
            </div>
          </section>
            </div>
        </div>
    </div>


      {{-- <section class="section-que bg-dots">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
              <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>Aviso de Privacidad</a></b></h4>
                            </div>
                            <p class="lead" style="text-align: justify">Es el documento f??sico, electr??nico o en cualquier formato generado por el Partido Verde Ecologista de M??xico en el Estado de M??xico. ??ste debe ser puesto a tu disposici??n para informarte los prop??sitos del tratamiento al que ser??n sometidos tus datos personales.</p>
                            <br>
                            <p class="lead">Tipos de aviso de privacidad</p>
                            <br>
                            <button class="accordion">1.	Aviso de privacidad integral</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify">Cuando los datos son proporcionados directamente por los titulares de los datos personales, el aviso de privacidad integral debe ser facilitado en el momento de forma clara e incuestionablemente, a trav??s de los formatos establecidos por el Partido Verde Ecologista de M??xico en el Estado de M??xico.</p>
                            </div>

                            <button class="accordion">2.    Aviso de privacidad simplificado</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify">Cuando tus datos son obtenidos por cualquier medio electr??nico, ??ptico, sonoro, visual o a trav??s de cualquier otra tecnolog??a, el aviso de privacidad debe ser puesto a tu disposici??n en lugar visible, considerando los medios o mecanismos para que conozcamos el texto completo del aviso.</p>

                            </div>

                            <p class="lead">Elementos b??sicos del aviso de privacidad</p>
                            <br>
                            <button class="accordion">Elementos b??sicos del aviso de privacidad</button>
                            <div style="overflow-x:auto;" class="panel">
                                <ol>
                                    <li>Nombre del responsable</li>
                                    <li>Datos personales que ser??n sometidos a tratamiento, se??alando cuales son sensibles.</li>
                                    <li>Finalidades del tratamiento.</li>
                                    <li>Cuando se realicen transferencias de datos personales que requieran consentimiento, se deber?? informar:
                                        <br> a) Destinatario de los datos
                                        <br> b) Finalidad de la transferencia
                                    </li>
                                    <li>Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO.</li>
                                    <li>Procedimiento mediante el cual se podr?? revocar el consentimiento para el tratamiento de los datos.</li>
                                    <li>Procedimiento para que se ejerza el derecho a la portabilidad.</li>
                                    <li>Datos de contacto del Instituto de Transparencia, Acceso a la Informaci??n P??blica para que la o el titular pueda recibir asesor??a o presentar denuncias por violaciones a las disposiciones de la Ley de Protecci??n de Datos en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios.</li>
                                </ol>
                                <br>
                                <p>Adem??s de estos elementos, se deber??n incluir los descritos en el Art??culo 31 de la Ley de Protecci??n de Datos en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios.</p>
                            </div>

                            <small>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) y la Ley de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios. </small>


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
    </section> --}}


    <section class="section bg-dots">
        <div class="content container">
            <h2 class="section-title"><span class="text-dark icon-medium-small icon-lock"></span> Aviso de Privacidad </h2>
            <br>
            <div class="projects acordeon2">

                <p class="lead" style="text-align: justify">Es el documento f??sico, electr??nico o en cualquier formato generado por el Partido Verde Ecologista de M??xico en el Estado de M??xico. ??ste debe ser puesto a tu disposici??n para informarte los prop??sitos del tratamiento al que ser??n sometidos tus datos personales.</p>
                            <br>
                            <p class="lead"><b>Tipos de aviso de privacidad:</b></p>
                            <br>
                            <button class="accordion">1.	Aviso de privacidad integral</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify; padding-top: 1rem">Cuando los datos son proporcionados directamente por los titulares de los datos personales, el aviso de privacidad integral debe ser facilitado en el momento de forma clara e incuestionablemente, a trav??s de los formatos establecidos por el Partido Verde Ecologista de M??xico en el Estado de M??xico.</p>
                            </div>

                            <button class="accordion">2.    Aviso de privacidad simplificado</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify; padding-top: 1rem">Cuando tus datos son obtenidos por cualquier medio electr??nico, ??ptico, sonoro, visual o a trav??s de cualquier otra tecnolog??a, el aviso de privacidad debe ser puesto a tu disposici??n en lugar visible, considerando los medios o mecanismos para que conozcamos el texto completo del aviso.</p>

                            </div>
                            <br>
                            <p class="lead"><b>Elementos b??sicos del aviso de privacidad:</b></p>
                            <br>
                            <button class="accordion">Elementos b??sicos del aviso de privacidad</button>
                            <div style="overflow-x:auto;" class="panel">
                                <ol style="padding-top: 1rem">
                                    <li>Nombre del responsable</li>
                                    <li>Datos personales que ser??n sometidos a tratamiento, se??alando cuales son sensibles.</li>
                                    <li>Finalidades del tratamiento.</li>
                                    <li>Cuando se realicen transferencias de datos personales que requieran consentimiento, se deber?? informar:
                                        <br> a) Destinatario de los datos
                                        <br> b) Finalidad de la transferencia
                                    </li>
                                    <li>Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO.</li>
                                    <li>Procedimiento mediante el cual se podr?? revocar el consentimiento para el tratamiento de los datos.</li>
                                    <li>Procedimiento para que se ejerza el derecho a la portabilidad.</li>
                                    <li>Datos de contacto del Instituto de Transparencia, Acceso a la Informaci??n P??blica para que la o el titular pueda recibir asesor??a o presentar denuncias por violaciones a las disposiciones de la Ley de Protecci??n de Datos en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios.</li>
                                </ol>
                                <br>
                                <p>Adem??s de estos elementos, se deber??n incluir los descritos en el Art??culo 31 de la Ley de Protecci??n de Datos en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios.</p>
                            </div>

                            <p>Fuente: Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios (INFOEM) y la Ley de Protecci??n de Datos Personales en Posesi??n de Sujetos Obligados del Estado de M??xico y Municipios. </p>


            </div>
        </div>
    </section>


    {{-- <section style="padding-top: 0; padding-bottom:0" class="section-que">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
              <div class="section-add-comment">
                <div class="comments">
                  <div class="comments-area">
                    <ol class="comment-list">
                      <li class="comment">
                        <article class="comment-body">
                          <div class="comment-content">
                            <div class="comment-metadata">
                              <h4><b class="fn"><a>Avisos de Privacidad del Partido Verde Ecologista de M??xico en el Estado de M??xico</a></b></h4>
                            </div>
                            <br>
                            <button class="accordion">1.	Finanzas Verde  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">2.	Candidatos PVEM Proceso Electoral Federal 2018 </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">3.	Eventos Secretar??a de la Mujer </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">4.	Sistema Integral de Estructura Electoral </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">5.	Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">6.	Eventos, Capacitaci??n y Asesor??a </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

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
    </section> --}}

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">Avisos de Privacidad</div>
                  </div>
                </div>
            </div>
          <div class="content">
            <div class="projects">
              <div class="grid-items js-isotope js-grid-items">
                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                    <a style="text-decoration: none;" href="#">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Finanzas Verde.</p>
                      </div>
                    </div>
                    </a>
                    <a  href="#" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                  <div class="project-item item-shadow">
                    <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                    <a style="text-decoration: none;"  href="">
                    <div class="project-hover">
                      <div class="project-hover-content">
                        <p class="project-description">Candidatos PVEM Proceso Electoral Federal 2018.</p>
                      </div>
                    </div>
                    </a>
                    <a  href="" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos Secretar??a de la Mujer.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Sistema Integral de Estructura Electoral.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos, Capacitaci??n y Asesor??a.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver m??s <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    {{-- <section style="padding-bottom: 0" class="section">
        <div class="content container">
            <h2 class="section-title">Avisos de Privacidad del Partido Verde Ecologista de M??xico en el Estado de M??xico</h2>
            <br>
            <div class="projects acordeones">

                            <br>
                            <button class="accordion">1.	Finanzas Verde  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">2.	Candidatos PVEM Proceso Electoral Federal 2018 </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">3.	Eventos Secretar??a de la Mujer </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">4.	Sistema Integral de Estructura Electoral </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">5.	Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">6.	Eventos, Capacitaci??n y Asesor??a </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>
            </div>
        </div>
    </section> --}}


    <div class="content">
        <div class="page-inner">
          <section style="padding-top:10rem;" class="section about-info bg-dots">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">Organismos garantes de la protecci??n de los datos personales</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h4>??Qu?? son los Organismos garantes?</h4>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">Son aut??nomos, especializados, independientes, imparciales y colegiados, con personalidad jur??dica y patrimonio propios, con plena autonom??a t??cnica, de gesti??n, capacidad para decidir sobre el ejercicio de su presupuesto y determinar su organizaci??n interna.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Son responsables de garantizar el acceso a la informaci??n y la protecci??n de los datos personales, en M??xico existen 31 organismos garantes estatales y uno en la CDMX y el INAI.</p>

                 </div>
                </div>
              </div>
              </div>
          </section>
        </div>
    </div>

    <div class="content">
        <div class="page-inner">
          <section style="padding-bottom: 0" class="section about-info">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">??Qu?? es el INFOEM?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank"><img src="{{ asset(('images/portales/logoInfoem001_0_0.png'))}}"></a></div>
                  <div>
                    <p class="lead" style="text-align: justify;line-height: 2;">El Instituto de Transparencia, Acceso a la Informaci??n P??blica y Protecci??n de Datos Personales del Estado de M??xico y Municipios es un ??rgano p??blico estatal constitucionalmente aut??nomo, especializado, independiente, imparcial y colegiado dotado de personalidad jur??dica y patrimonio propio.</p>
                    <p class="lead" style="text-align: justify;line-height: 2;">Garantiza los derechos de acceso a la informaci??n p??blica y la protecci??n de los datos personales y fomenta la cultura de la transparencia.</p>
                    <p class="lead" style="text-align: justify;line-height: 2;">Dirigido y administrado por un pleno, integrado por 5 Comisionados, de los cuales 1 es el Comisionado Presidente.</p>

                 </div>
                </div>
              </div>
              <br>
              <h4>Ubicaci??n</h4>
          <p class="lead">Calle de Pino Su??rez sin n??mero, actualmente Carretera Toluca-Ixtapan #111, Colonia La Michoacana; Metepec Estado de M??xico, C.P. 52166 </p>
          <div id="map2" class="map-2"></div>
          <h4>Tel??fono</h4>
          <p><a style="color: gray" href="tel:+7229147192">01 (722) 226 1980</a>, CAT: <a style="color: gray" href="tel:+01800 821 04 41">01800 821 04 41</a></p>
          <a style="color: gray" target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio">https://www.infoem.org.mx/es/contenido/inicio</a>
            </div>
          </section>
        </div>
    </div>

    <div class="content">
        <div class="page-inner">
          <section style="padding-top:10rem" class="section about-info bg-dots">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr"></div>
                    <div class="info-title">??Qu?? es el INAI?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://home.inai.org.mx/" target="_blank"><img width="140" src="{{ asset(('images/portales/Logo_del_INAI.png'))}}"></a></div>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">El Instituto Nacional de Transparencia, Acceso a la Informaci??n y Protecci??n de Datos Personales es el organismo constitucional aut??nomo garante del cumplimiento de dos derechos fundamentales: el de acceso a la informaci??n p??blica y el de protecci??n de datos personales.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para el primero, garantiza que cualquier autoridad en el ??mbito federal, ??rganos aut??nomos, partidos pol??ticos, fideicomisos, fondos p??blicos y sindicato; o cualquier persona f??sica, moral que reciba y ejerza recursos p??blicos o realice actos de autoridad te entregue la informaci??n p??blica que solicites.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para el segundo, garantiza el uso adecuado de los datos personales, as?? como el ejercicio y tutela de los derechos de acceso, rectificaci??n, cancelaci??n y oposici??n que toda persona tiene con respecto a su informaci??n.</p>

                 </div>
                </div>
              </div>
              <br>
              <h4>Ubicaci??n</h4>
          <p class="lead">Insurgentes Sur No. 3211 Col. Insurgentes Cuicuilco, Alcald??a Coyoac??n, C.P. 04530</p>
          <div id="map3" class="map-2"></div>
          <h4>Tel??fono</h4>
          <p><a style="color: gray" href="tel:+8008354324">8008354324</a>, Conmutador: 5004 2400</p>
          <a style="color: gray" target="_blank" href="https://home.inai.org.mx/">https://home.inai.org.mx/</a>
            </div>
          </section>
        </div>
    </div>

    <section class="section">
        <div class="content container">
            <h2 class="section-title">Normatividad</h2>
            <br>
            <div class="projects">

                <button class="accordion">LGPDPPSO</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>LGPDPPSO</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/normatividad/L_LGPDPPSO.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Acuerdos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>Acuerdo para la Elaboracion, Presentacion y Valoracion de Evaluaciones de Impacto en la Proteccion de Datos Personales</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/normatividad/acuerdos/A_Acuerdo_para_la_elaboracion_presentacion_y_valoracion_de_evaluaciones_de_impacto_en_la_proteccion_de_datos_personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Lineamientos</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>Lineamientos Generales de Proteccion de Datos Personales para el Sector P??blico.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_Generales_de_Proteccion_de_Datos_Personales_para_el_Sector_Publico.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Lineamientos Generales en Materia de Clasificaci??n y Desclasificaci??n de la informaci??n as?? como para la Elaboraci??n de Versiones P??blicas. </td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_generales_en_materia_de_clasificacion_y_desclasificacion_de_la_informacion_asi_como_para_la_elaboracion_de_versiones_publicas.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Lineamientos para la Portabilidad de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_para_la_Portabilidad_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Otros</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>Acuerdo Mediante el Cual se Aprueba el Uso e Implementaci??n de la Versi??n 2.0 del Sistema de Acceso a la Informaci??n Mexiquense (SAIMEX) y del Sistema de Acceso, Rectificaci??n y Cancelaci??n.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/ACUERDO_MEDIANTE_EL_CUAL_SE_APRUEBA_EL_USO_E_IMPLEMENTACIaN_DE_LA_VERSIaN_2.0_DEL_SISTEMA_DE_ACCESO_A_LA_INFORMACIaN_MEXIQUENSE_SAIMEX_Y_DEL_SISTEMA_DE_ACCESO_RECTIFICACIaN_CANCELACI.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa de la Cultura de Transparencia y de Protecci??n de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_de_la_Cultura_de_Transparencia_y_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Estatal y Municipal de Protecci??n de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_estatal_y_municipal_de_proteccion_de_datos_personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Nacional de Protecci??n de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_Nacional_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Recomendaciones para la Designaci??n de Responsables de Sistemas de Datos Personales en Posesi??n de los Sujetos Obligados.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Recomendaciones_para_la_designacion_de_responsables_de_sistemas_de_datos_personales_en_posesion_de_los_Sujetos_Obligados.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Estatal y Municipial de Protecci??n de Datos Personales 2020-2022</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/PROGRAMA_ESTATAL_Y_MUNICIPAL_DE_PROTECCIaN_DE_DATOS_PERSONALES_2020-2022.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dots">
        <div class="content container">
            <h2 class="section-title">Contacto del ??rea de Protecci??n de Datos Personales</h2>
            <br>
            <div class="projects">

                <h4>Ubicaci??n</h4>
                <p class="lead">Rep??blica de Belice 109, Colonia Am??ricas C.P. 50130, Toluca, Estado de M??xico</p>
                <div id="map" class="map-2"></div>
                <h4>Tel??fono</h4>
                <p><a style="color: gray" href="tel:+7229147192 ">722 9147192 </a></p>
            </div>
        </div>
    </section>


    <!-- Aplicabilidad -->
    {{-- <section class="section bg-dots">
        <div class="content container">
            <h2 class="section-title">Avisos de Privacidad</h2>
            <br>
            <div class="projects">

                <button class="accordion">Aviso de Privacidad de la Secretar??a de Finanzas</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s de su Secretar??a de Fianzas, est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado ???Finanzas Verde???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/avisos-privacidad/Finanzas-Verde.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de la Secretar??a de la Mujer</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s de su Secretar??a de la Mujer, est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el sistema de datos personales denominado ???Eventos Secretar??a de la Mujer???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/avisos-privacidad/Eventos-Secretar??a-de-la-Mujer.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de la Secretar??a de Procesos Electorales</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s de su Secretar??a de Procesos Electorales, est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el sistema de datos personales denominado ???Candidatos PVEM Procesos Electorales???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/Candidatos-PVEM-Procesos-Electorales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad Sistema Integral de Estructura Electoral</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s del Comit?? Ejecutivo Estatal est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado ???Sistema Integral de Estructura Electoral???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/Sistema-Integral-de-Estructura-Electoral.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de Eventos, Capacitaci??n y Asesor??a</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s del Comit?? Ejecutivo Estatal est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado ???Eventos, Capacitaci??n y Asesor??a???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/eventos-capacitaci??n-y-asesor??a.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad del Control de Acceso a las Instalaciones</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de M??xico del Estado de M??xico (en adelante, ???El Partido???) a trav??s del Comit?? Ejecutivo Estatal est?? facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado ???Control de Acceso a las Instalaciones del CEE del PVEM EDOM??X???, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/CONTROL-DE-ACCESO-A-LAS-INSTALACIONES.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section> --}}


    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- jQuery -->
@include('partials.scripts')

<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyC4gTAuib1crrHv7SdAxcG2dUzZGz2leV8"></script>
<script defer src="js/gmap.js"></script>
<script defer src="js/gmap2.js"></script>
<script defer src="js/gmap3.js"></script>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

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
</script>

</body>
</html>
