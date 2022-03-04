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

         <!-- ¿Qué hacemos? -->
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
                                  <h4><b class="fn"><a>¿Qué es la Protección de los Datos Personales?</a></b></h4>
                                </div>
                                <p class="lead" style="text-align: justify">Es un derecho humano fundamental que nos otorga el poder de controlar la información personal que compartimos con otras personas e instituciones para prevenir cualquier daño a nuestra privacidad.</p>
                                <br>
                                <p><small>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></small></p>
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
                                  <h4><b class="fn"><a>¿Qué son los Datos Personales?</a></b></h4>
                                </div>
                                <p class="lead">Los Datos Personales Son toda aquella información que pertenece a una persona física o jurídica colectiva que puede ser usada para la identificación directa o indirectamente a través de cualquier documento informativo físico o electrónico.</p>
                                <br>
                                <p><small>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a target="_blank" href="https://www.infoem.org.mx/es/contenido/datos-personales">https://www.infoem.org.mx/es/contenido/datos-personales</a></small></p>
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
                <h2 style="text-align: justify" class="section-title">Los datos personales se clasifican en diversas categorías atendiendo a las características del dato que se trate en el Partido Verde Ecologista de México ponemos a su disposición lo siguiente:</h2>
                <br>
                <br>
                <div class="projects acordeon2">
                    <button class="accordion">1.	Datos Personales de Identificación</button>
                    <div style="overflow-x:auto;" class="panel">
                        <ul style="padding-top: 1rem">
                            <li>Nombre</li>
                            <li>Domicilio</li>
                            <li>Teléfono particular y/o celular</li>
                            <li>Correo electrónico personal</li>
                            <li>Estado civil</li>
                            <li>Firma</li>
                            <li>Firma electrónica</li>
                            <li>Cartilla militar</li>
                            <li>Lugar y fecha de nacimiento</li>
                            <li>Nacionalidad</li>
                            <li>Edad</li>
                            <li>Fotografía</li>
                            <li>Clave del Registro Federal de Contribuyentes (RFC)</li>
                            <li>Clave Única de Registro de Población (CURP)</li>
                            <li>Nombres de familiares, dependientes y/o beneficiarios.</li>
                        </ul>
                    </div>

                    <button class="accordion">2. Datos Laborales</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="padding-top: 1rem">Pueden referirse a los contenidos en:</p>
                        <ul>
                            <li>Las solicitudes de empleo</li>
                            <li>Correo electrónico institucional</li>
                            <li>Teléfono institucional</li>
                            <li>Actividades extracurriculares</li>
                            <li>Referencias laborales</li>
                            <li>Referencias personales</li>
                            <li>Recomendaciones</li>
                            <li>Capacitaciones</li>
                            <li>Documentos de selección</li>
                            <li>Reclutamiento</li>
                            <li>Nombramiento</li>
                            <li>Incidencias</li>
                            <li>Hojas de servicio y otras generadas derivadas de nuestra relación laboral.</li>
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
                            <li>Información fiscal</li>
                            <li>Servicios contratados y afines.</li>
                        </ul>
                    </div>

                    <button class="accordion">4. Datos Sobre Procedimientos Administrativos y Jurisdiccionales</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Es aquella información relacionada íntimamente a nosotros disponible en procedimientos administrativos o juicios en materia</p>
                        <ul>
                            <li>Laboral</li>
                            <li>Civil</li>
                            <li>Penal</li>
                            <li>Fiscal</li>
                            <li>Mercantil o de cualquier otra rama del Derecho.</li>
                        </ul>
                    </div>

                    <button class="accordion">5. Datos Académicos</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Son los datos que permiten identificar nuestra trayectoria académica y formación profesional como son calificaciones, boletas, constancias, certificados, reconocimientos, títulos, cédulas profesionales.</p>
                    </div>

                    <button class="accordion">6. Datos de Transito y Movimientos Migratorios</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Información necesaria para nuestro tránsito dentro y fuera de país.</p>
                    </div>

                    <button class="accordion">7. Datos personales sensibles</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Son los datos referentes a la esfera más íntima de su titular cuya utilización indebida puede dar origen a discriminación o conlleve un riesgo grave para éste, se clasifican en:</p>
                       <br>
                        <ol>
                            <li>
                                <p><strong>Datos Ideológicos:</strong></p>
                                <p style="text-align: justify">Estos datos incluyen aquellas creencias religiosas, ideológicas, de afiliación política y/o sindical, y pertenencia a organizaciones de la sociedad civil y/o asociaciones religiosas, entre otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Vida Sexual:</strong></p>
                                <p style="text-align: justify">Es aquella información privada referente a la preferencia sexual y hábitos sexuales, entre otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Origen:</strong></p>
                                <p style="text-align: justify">Es aquella información relativa al origen étnico y racial.</p>
                            </li>
                            <li>
                                <p><strong>Datos Biomédicos:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relacionados con propiedades biológicas, características fisiológicas o rasgos de nuestra personalidad que mediante métodos automáticos identifican rasgos físicos únicos e intransferibles de nosotros, como la huella dactilar, geometría de la mano, características de iris y retina, código genético u otros.</p>
                            </li>
                            <li>
                                <p><strong>Datos Electrónicos:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relativos a nuestros correos electrónicos particulares, nombres de usuarios, contraseñas, firma electrónica, dirección de IP (Protocolo de Internet) privada, o cualquier dirección de control o información empleada por nosotros, que implique nuestra identificación o acceso en internet, conexión o red de comunicación electrónica.</p>
                            </li>
                            <li>
                                <p><strong>Datos de Salud:</strong></p>
                                <p style="text-align: justify">Son aquellos datos relacionados con nuestro estado físico o mental, cualquier atención médica, expediente clínico, diagnósticos, padecimientos, vacunas, intervenciones quirúrgicas, incapacidades médicas, discapacidades, uso de aparatos oftalmológicos, ortopédicos, auditivos o prótesis, consumo de sustancias tóxicas y estupefacientes, sintomatologías o análogos relacionados con nuestra salud.</p>
                            </li>
                        </ol>
                    </div>

                    <p>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) <a style="color:#50B948;" target="_blank" href="www.infoem.org.mx/es/contenido/datos-personales">www.infoem.org.mx/es/contenido/datos-personales</a> y la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>


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
                                  <h4><b class="fn"><a>¿Qué son los Derechos ARCO?</a></b></h4>
                                </div>
                                <p class="lead" style="text-align: justify">El derecho a solicitar ante el Partido Verde Ecologista de México en el Estado de México el Acceso, Rectificación, Cancelación y Oposición (ARCO) sobre el tratamiento de tus datos.</p>
                                <br>
                                <p class="lead" style="text-align: justify">Los derechos de acceso, rectificación, cancelación y oposición de datos personales son derechos independientes.</p>
                                <br>
                                <p class="lead" style="text-align: justify">El ejercicio de cualquiera de ellos no es requisito previo no impide el ejercicio de otro. La procedencia de estos derechos, en su caso, se hará efectiva una vez que el titular o su representante legal acrediten su identidad o representación, respectivamente.</p>
                                <br>
                                <button class="accordion">1.	¿Qué es el Derecho de Acceso?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de solicitar y recibir información sobre tus datos personales en posesión del Partido Verde Ecologista de México en el Estado de México para conocer las condiciones del tratamiento y finalidad que se les está dando.</p>
                                </div>

                                <button class="accordion">2.	¿Qué es el Derecho de Rectificación?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de solicitar la corrección de tus datos personales cuando se detecta que son inexactos o incompletos, desactualizados, inadecuados o excesivos respecto de la finalidad para la cual fueron obtenidos.</p>
                                </div>

                                <button class="accordion">3.	¿Qué es el Derecho de Cancelación?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho para solicitar la cancelación de tus datos personales de los archivos, registros, expedientes y sistemas del responsable, con la finalidad de que los mismos ya no estén en su posesión y dejen de ser sometidos a tratamiento.</p>
                                </div>
                                <button class="accordion">4.	¿Qué es el Derecho de Oposición?</button>
                                <div style="overflow-x:auto;" class="panel">
                                    <p style="text-align: justify">Derecho de impedir el tratamiento de tus datos personales, especialmente si la información fue recabada sin consentimiento, causa daño, o tiene un tratamiento automatizado que afecta tus intereses, derechos o libertades.</p>
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
                <h2 class="section-title"><span class="text-dark icon-medium-small icon-file-empty"></span> ¿Qué son los Derechos ARCO?</h2>
                <br>
                <div class="projects acordeon2">

                    <p class="lead" style="text-align: justify">El derecho a solicitar ante el Partido Verde Ecologista de México en el Estado de México el Acceso, Rectificación, Cancelación y Oposición (ARCO) sobre el tratamiento de tus datos.</p>
                    <br>
                    <p class="lead" style="text-align: justify">Los derechos de acceso, rectificación, cancelación y oposición de datos personales son derechos independientes.</p>
                    <br>
                    <p class="lead" style="text-align: justify">El ejercicio de cualquiera de ellos no es requisito previo no impide el ejercicio de otro. La procedencia de estos derechos, en su caso, se hará efectiva una vez que el titular o su representante legal acrediten su identidad o representación, respectivamente.</p>
                    <br>
                    <button class="accordion">1.	¿Qué es el Derecho de Acceso?</button>
                    <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Derecho de solicitar y recibir información sobre tus datos personales en posesión del Partido Verde Ecologista de México en el Estado de México para conocer las condiciones del tratamiento y finalidad que se les está dando.</p>
                    </div>

                    <button class="accordion">2.	¿Qué es el Derecho de Rectificación?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho de solicitar la corrección de tus datos personales cuando se detecta que son inexactos o incompletos, desactualizados, inadecuados o excesivos respecto de la finalidad para la cual fueron obtenidos.</p>
                    </div>

                    <button class="accordion">3.	¿Qué es el Derecho de Cancelación?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho para solicitar la cancelación de tus datos personales de los archivos, registros, expedientes y sistemas del responsable, con la finalidad de que los mismos ya no estén en su posesión y dejen de ser sometidos a tratamiento.</p>
                    </div>

                    <button class="accordion">4.	¿Qué es el Derecho de Oposición?</button>
                    <div style="overflow-x:auto;" class="panel">
                        <p style="text-align: justify; padding-top: 1rem">Derecho de impedir el tratamiento de tus datos personales, especialmente si la información fue recabada sin consentimiento, causa daño, o tiene un tratamiento automatizado que afecta tus intereses, derechos o libertades.</p>
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
                                <h4><b class="fn"><a><span class="text-dark icon-medium-small icon-question-circle"></span>¿Cómo realizo una solicitud de datos personales?</a></b></h4>
                              </div>
                              <p class="lead" style="text-align: justify">Las solicitudes de Derecho ARCO se pueden realizar a través de tres modalidades:</p>
                              <br>
                              <button class="accordion">1.	Solicitud Verbal</button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Acudiendo directamente a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México ubicada en República de Belice 109, Colonia Américas C.P. 50130, Toluca Estado de México.</p>
                              </div>

                              <button class="accordion">2.	Solicitud Escrita</button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Presentado un escrito libre dirigido a la Unidad de Transparencia del Partido Verde Ecologista de México o llenando los formatos establecidos para la presentación de la misma.</p>
                                  <br>
                                  <p style="text-align: justify">Los formatos podrán ser obtenidos directamente en la Unidad de Transparencia del Partido Verde Ecologista de México o en la página web del Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) en los siguientes links: </p>
                                  <br>
                                  <a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio ">https://www.infoem.org.mx/es/contenido/inicio </a>
                                  <a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page ">https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page </a>
                                  <a target="_blank" href="https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  ">https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  </a>
                                  <div class="row">
                                    <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                                    <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio"><img src="{{ asset(('images/portales/logoInfoem001.png'))}}"></a></div>
                                  </div>
                              </div>

                              <button class="accordion">3.	Solicitud Electrónica </button>
                              <div style="overflow-x:auto;" class="panel">
                                  <p style="text-align: justify">Ingresando al Sistema de Acceso, Rectificación, Cancelación y Oposición de Datos Personales del Estado de México (SARCOEM) <a href="https://sarcoem.org.mx" target="_blank">https://sarcoem.org.mx</a> o a la Plataforma de transparencia (PTN)  <a target="_blank" href="https://www.plataformadetransparencia.org.mx">www.plataformadetransparencia.org.mx</a></p>
                              </div>

                              <p>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM)</p>

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
            <h2 class="section-title"><span class="text-dark icon-medium-small icon-document"></span> ¿Cómo realizo una solicitud de datos personales?</h2>
            <br>
            <div class="projects acordeon2">

                <p class="lead" style="text-align: justify">Las solicitudes de Derecho ARCO se pueden realizar a través de tres modalidades:</p>

                <br>
                <button class="accordion">1.	Solicitud Verbal</button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Acudiendo directamente a la Unidad de Transparencia del Partido Verde Ecologista de México en el Estado de México ubicada en República de Belice 109, Colonia Américas C.P. 50130, Toluca Estado de México.</p>
                </div>

                <button class="accordion">2.	Solicitud Escrita</button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Presentado un escrito libre dirigido a la Unidad de Transparencia del Partido Verde Ecologista de México o llenando los formatos establecidos para la presentación de la misma.</p>
                    <br>
                    <p style="text-align: justify">Los <a style="color:#50B948;" target="_blank" href="{{ route('Formatos') }}">formatos</a> podrán ser obtenidos directamente en la Unidad de Transparencia del Partido Verde Ecologista de México o en la página web del Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) en los siguientes links: </p>
                    <br>


                    <a style="color:#50B948;" target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio ">https://www.infoem.org.mx/es/contenido/inicio </a><br>
                    <a style="color:#50B948;" target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page ">https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page </a><br>
                    <a style="color:#50B948;" target="_blank" href="https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  ">https://www.infoem.org.mx/es/contenido/conocenos/formatos-de-solicitud  </a>

                    <div class="row">

                      <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                      <div style="text-align: center" class="col-sm-6"><a target="_blank" href="https://www.infoem.org.mx/es/contenido/inicio"><img src="{{ asset(('images/portales/logoInfoem001.png'))}}"></a></div>

                </div>
                </div>

                <button class="accordion">3.	Solicitud Electrónica </button>
                <div style="overflow-x:auto;" class="panel">
                    <p style="text-align: justify; padding-top: 1rem">Ingresando al Sistema de Acceso, Rectificación, Cancelación y Oposición de Datos Personales del Estado de México (SARCOEM) <a href="https://sarcoem.org.mx" target="_blank">https://sarcoem.org.mx</a> o a la Plataforma de transparencia (PTN)  <a target="_blank" href="https://www.plataformadetransparencia.org.mx">www.plataformadetransparencia.org.mx</a></p>
                </div>

                <p>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM)</p>


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
                    <div class="info-title">¿Qué es SARCOEM?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank"><img src="{{ asset(('images/portales/sarcoem_logo2-150x150.png'))}}"></a></div>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">El Sistema de Acceso, Rectificación, Cancelación y Oposición del Estado de México (SARCOEM) es un medio electrónico a través del cual es posible formular solicitudes de derechos ARCO y recursos de revisión.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">De esta manera, tras abrir una cuenta en esta plataforma, es posible darle seguimiento a tu solicitud, desde la presentación hasta la resolución.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para acceder al SARCOEM, necesitas ingresar a www.sarcoem.org.mx o dar clic en el enlace correspondiente, disponible en el apartado de Transparencia de la página oficial del Partido Verde Ecologista de México en el Estado de México en el siguiente link: </p>

                    <a class="lead" style="color:#50B948;" target="_blank" href="https://partidoverdeedomex.org/portal-de-transparencia">https://partidoverdeedomex.org/portal-de-transparencia</a>
                    <br>
                    <br>
                    <p><small>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM)</small></p>
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
                            <p class="lead" style="text-align: justify">Es el documento físico, electrónico o en cualquier formato generado por el Partido Verde Ecologista de México en el Estado de México. Éste debe ser puesto a tu disposición para informarte los propósitos del tratamiento al que serán sometidos tus datos personales.</p>
                            <br>
                            <p class="lead">Tipos de aviso de privacidad</p>
                            <br>
                            <button class="accordion">1.	Aviso de privacidad integral</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify">Cuando los datos son proporcionados directamente por los titulares de los datos personales, el aviso de privacidad integral debe ser facilitado en el momento de forma clara e incuestionablemente, a través de los formatos establecidos por el Partido Verde Ecologista de México en el Estado de México.</p>
                            </div>

                            <button class="accordion">2.    Aviso de privacidad simplificado</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify">Cuando tus datos son obtenidos por cualquier medio electrónico, óptico, sonoro, visual o a través de cualquier otra tecnología, el aviso de privacidad debe ser puesto a tu disposición en lugar visible, considerando los medios o mecanismos para que conozcamos el texto completo del aviso.</p>

                            </div>

                            <p class="lead">Elementos básicos del aviso de privacidad</p>
                            <br>
                            <button class="accordion">Elementos básicos del aviso de privacidad</button>
                            <div style="overflow-x:auto;" class="panel">
                                <ol>
                                    <li>Nombre del responsable</li>
                                    <li>Datos personales que serán sometidos a tratamiento, señalando cuales son sensibles.</li>
                                    <li>Finalidades del tratamiento.</li>
                                    <li>Cuando se realicen transferencias de datos personales que requieran consentimiento, se deberá informar:
                                        <br> a) Destinatario de los datos
                                        <br> b) Finalidad de la transferencia
                                    </li>
                                    <li>Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO.</li>
                                    <li>Procedimiento mediante el cual se podrá revocar el consentimiento para el tratamiento de los datos.</li>
                                    <li>Procedimiento para que se ejerza el derecho a la portabilidad.</li>
                                    <li>Datos de contacto del Instituto de Transparencia, Acceso a la Información Pública para que la o el titular pueda recibir asesoría o presentar denuncias por violaciones a las disposiciones de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</li>
                                </ol>
                                <br>
                                <p>Además de estos elementos, se deberán incluir los descritos en el Artículo 31 de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                            </div>

                            <small>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) y la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios. </small>


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

                <p class="lead" style="text-align: justify">Es el documento físico, electrónico o en cualquier formato generado por el Partido Verde Ecologista de México en el Estado de México. Éste debe ser puesto a tu disposición para informarte los propósitos del tratamiento al que serán sometidos tus datos personales.</p>
                            <br>
                            <p class="lead"><b>Tipos de aviso de privacidad:</b></p>
                            <br>
                            <button class="accordion">1.	Aviso de privacidad integral</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify; padding-top: 1rem">Cuando los datos son proporcionados directamente por los titulares de los datos personales, el aviso de privacidad integral debe ser facilitado en el momento de forma clara e incuestionablemente, a través de los formatos establecidos por el Partido Verde Ecologista de México en el Estado de México.</p>
                            </div>

                            <button class="accordion">2.    Aviso de privacidad simplificado</button>
                            <div style="overflow-x:auto;" class="panel">
                                <p style="text-align: justify; padding-top: 1rem">Cuando tus datos son obtenidos por cualquier medio electrónico, óptico, sonoro, visual o a través de cualquier otra tecnología, el aviso de privacidad debe ser puesto a tu disposición en lugar visible, considerando los medios o mecanismos para que conozcamos el texto completo del aviso.</p>

                            </div>
                            <br>
                            <p class="lead"><b>Elementos básicos del aviso de privacidad:</b></p>
                            <br>
                            <button class="accordion">Elementos básicos del aviso de privacidad</button>
                            <div style="overflow-x:auto;" class="panel">
                                <ol style="padding-top: 1rem">
                                    <li>Nombre del responsable</li>
                                    <li>Datos personales que serán sometidos a tratamiento, señalando cuales son sensibles.</li>
                                    <li>Finalidades del tratamiento.</li>
                                    <li>Cuando se realicen transferencias de datos personales que requieran consentimiento, se deberá informar:
                                        <br> a) Destinatario de los datos
                                        <br> b) Finalidad de la transferencia
                                    </li>
                                    <li>Mecanismos, medios y procedimientos disponibles para ejercer los derechos ARCO.</li>
                                    <li>Procedimiento mediante el cual se podrá revocar el consentimiento para el tratamiento de los datos.</li>
                                    <li>Procedimiento para que se ejerza el derecho a la portabilidad.</li>
                                    <li>Datos de contacto del Instituto de Transparencia, Acceso a la Información Pública para que la o el titular pueda recibir asesoría o presentar denuncias por violaciones a las disposiciones de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</li>
                                </ol>
                                <br>
                                <p>Además de estos elementos, se deberán incluir los descritos en el Artículo 31 de la Ley de Protección de Datos en Posesión de Sujetos Obligados del Estado de México y Municipios.</p>
                            </div>

                            <p>Fuente: Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios (INFOEM) y la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de México y Municipios. </p>


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
                              <h4><b class="fn"><a>Avisos de Privacidad del Partido Verde Ecologista de México en el Estado de México</a></b></h4>
                            </div>
                            <br>
                            <button class="accordion">1.	Finanzas Verde  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">2.	Candidatos PVEM Proceso Electoral Federal 2018 </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">3.	Eventos Secretaría de la Mujer </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">4.	Sistema Integral de Estructura Electoral </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">5.	Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">6.	Eventos, Capacitación y Asesoría </button>
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
                    <a  href="#" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
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
                    <a  href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                  </div>
                </div>

                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos Secretaría de la Mujer.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
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
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
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
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
                <div class="grid-item building js-isotope-item js-grid-item">
                    <div class="project-item item-shadow">
                      <img alt="" class="img-responsive" src="{{ asset('images/marco-normativo/leydearchivos.jpg')}}">
                      <a style="text-decoration: none;" href="">
                      <div class="project-hover">
                        <div class="project-hover-content">
                          <p class="project-description">Eventos, Capacitación y Asesoría.</p>
                        </div>
                      </div>
                      </a>
                      <a href="" class="link-arrow">Ver más <i class="icon ion-ios-arrow-right"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    {{-- <section style="padding-bottom: 0" class="section">
        <div class="content container">
            <h2 class="section-title">Avisos de Privacidad del Partido Verde Ecologista de México en el Estado de México</h2>
            <br>
            <div class="projects acordeones">

                            <br>
                            <button class="accordion">1.	Finanzas Verde  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">2.	Candidatos PVEM Proceso Electoral Federal 2018 </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">3.	Eventos Secretaría de la Mujer </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">4.	Sistema Integral de Estructura Electoral </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">5.	Control de Acceso a las Instalaciones del CEE del PVEM EDOMEX  </button>
                            <div style="overflow-x:auto;" class="panel">

                            </div>

                            <button class="accordion">6.	Eventos, Capacitación y Asesoría </button>
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
                    <div class="info-title">Organismos garantes de la protección de los datos personales</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <h4>¿Qué son los Organismos garantes?</h4>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">Son autónomos, especializados, independientes, imparciales y colegiados, con personalidad jurídica y patrimonio propios, con plena autonomía técnica, de gestión, capacidad para decidir sobre el ejercicio de su presupuesto y determinar su organización interna.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Son responsables de garantizar el acceso a la información y la protección de los datos personales, en México existen 31 organismos garantes estatales y uno en la CDMX y el INAI.</p>

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
                    <div class="info-title">¿Qué es el INFOEM?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://www.sarcoem.org.mx/sarcoem/ciudadano/login.page" target="_blank"><img src="{{ asset(('images/portales/logoInfoem001_0_0.png'))}}"></a></div>
                  <div>
                    <p class="lead" style="text-align: justify;line-height: 2;">El Instituto de Transparencia, Acceso a la Información Pública y Protección de Datos Personales del Estado de México y Municipios es un órgano público estatal constitucionalmente autónomo, especializado, independiente, imparcial y colegiado dotado de personalidad jurídica y patrimonio propio.</p>
                    <p class="lead" style="text-align: justify;line-height: 2;">Garantiza los derechos de acceso a la información pública y la protección de los datos personales y fomenta la cultura de la transparencia.</p>
                    <p class="lead" style="text-align: justify;line-height: 2;">Dirigido y administrado por un pleno, integrado por 5 Comisionados, de los cuales 1 es el Comisionado Presidente.</p>

                 </div>
                </div>
              </div>
              <br>
              <h4>Ubicación</h4>
          <p class="lead">Calle de Pino Suárez sin número, actualmente Carretera Toluca-Ixtapan #111, Colonia La Michoacana; Metepec Estado de México, C.P. 52166 </p>
          <div id="map2" class="map-2"></div>
          <h4>Teléfono</h4>
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
                    <div class="info-title">¿Qué es el INAI?</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div style="text-align: center"><a href="https://home.inai.org.mx/" target="_blank"><img width="140" src="{{ asset(('images/portales/Logo_del_INAI.png'))}}"></a></div>
                  <div><p class="lead" style="text-align: justify;line-height: 2;">El Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales es el organismo constitucional autónomo garante del cumplimiento de dos derechos fundamentales: el de acceso a la información pública y el de protección de datos personales.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para el primero, garantiza que cualquier autoridad en el ámbito federal, órganos autónomos, partidos políticos, fideicomisos, fondos públicos y sindicato; o cualquier persona física, moral que reciba y ejerza recursos públicos o realice actos de autoridad te entregue la información pública que solicites.</p>

                    <p class="lead" style="text-align: justify;line-height: 2;">Para el segundo, garantiza el uso adecuado de los datos personales, así como el ejercicio y tutela de los derechos de acceso, rectificación, cancelación y oposición que toda persona tiene con respecto a su información.</p>

                 </div>
                </div>
              </div>
              <br>
              <h4>Ubicación</h4>
          <p class="lead">Insurgentes Sur No. 3211 Col. Insurgentes Cuicuilco, Alcaldía Coyoacán, C.P. 04530</p>
          <div id="map3" class="map-2"></div>
          <h4>Teléfono</h4>
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
                                <td>Lineamientos Generales de Proteccion de Datos Personales para el Sector Público.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/lineamientos/LI_Lineamientos_Generales_de_Proteccion_de_Datos_Personales_para_el_Sector_Publico.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Lineamientos Generales en Materia de Clasificación y Desclasificación de la información así como para la Elaboración de Versiones Públicas. </td>
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
                                <td>Acuerdo Mediante el Cual se Aprueba el Uso e Implementación de la Versión 2.0 del Sistema de Acceso a la Información Mexiquense (SAIMEX) y del Sistema de Acceso, Rectificación y Cancelación.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/ACUERDO_MEDIANTE_EL_CUAL_SE_APRUEBA_EL_USO_E_IMPLEMENTACIaN_DE_LA_VERSIaN_2.0_DEL_SISTEMA_DE_ACCESO_A_LA_INFORMACIaN_MEXIQUENSE_SAIMEX_Y_DEL_SISTEMA_DE_ACCESO_RECTIFICACIaN_CANCELACI.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa de la Cultura de Transparencia y de Protección de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_de_la_Cultura_de_Transparencia_y_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Estatal y Municipal de Protección de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_estatal_y_municipal_de_proteccion_de_datos_personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Nacional de Protección de Datos Personales.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Programa_Nacional_de_Proteccion_de_Datos_Personales.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Recomendaciones para la Designación de Responsables de Sistemas de Datos Personales en Posesión de los Sujetos Obligados.</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/normatividad/otros/O_Recomendaciones_para_la_designacion_de_responsables_de_sistemas_de_datos_personales_en_posesion_de_los_Sujetos_Obligados.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                            <tr>
                                <td>Programa Estatal y Municipial de Protección de Datos Personales 2020-2022</td>
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
            <h2 class="section-title">Contacto del Área de Protección de Datos Personales</h2>
            <br>
            <div class="projects">

                <h4>Ubicación</h4>
                <p class="lead">República de Belice 109, Colonia Américas C.P. 50130, Toluca, Estado de México</p>
                <div id="map" class="map-2"></div>
                <h4>Teléfono</h4>
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

                <button class="accordion">Aviso de Privacidad de la Secretaría de Finanzas</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través de su Secretaría de Fianzas, está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado “Finanzas Verde”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/avisos-privacidad/Finanzas-Verde.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de la Secretaría de la Mujer</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través de su Secretaría de la Mujer, está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el sistema de datos personales denominado “Eventos Secretaría de la Mujer”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{ asset('pdf/avisos-privacidad/Eventos-Secretaría-de-la-Mujer.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de la Secretaría de Procesos Electorales</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través de su Secretaría de Procesos Electorales, está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el sistema de datos personales denominado “Candidatos PVEM Procesos Electorales”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
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
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través del Comité Ejecutivo Estatal está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado “Sistema Integral de Estructura Electoral”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/Sistema-Integral-de-Estructura-Electoral.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad de Eventos, Capacitación y Asesoría</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través del Comité Ejecutivo Estatal está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado “Eventos, Capacitación y Asesoría”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
                                <td style="text-align: right"><a class="linkhov" target="blank" href="{{asset('pdf/avisos-privacidad/eventos-capacitación-y-asesoría.pdf')}}"><ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Aviso de Privacidad del Control de Acceso a las Instalaciones</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td>El Partido Verde Ecologista de México del Estado de México (en adelante, “El Partido”) a través del Comité Ejecutivo Estatal está facultado para llevar a cabo el tratamiento de los datos personales recabados, tratados y protegidos en el Sistema de Datos Personales denominado “Control de Acceso a las Instalaciones del CEE del PVEM EDOMÉX”, por lo cual, con el objeto de que conozca la manera en que protegemos sus datos y los derechos con que cuenta en torno a esta materia, se le informa:</td>
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
