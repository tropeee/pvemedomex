<!DOCTYPE HTML>
<html lang="es">
@include('partials.header')
<style>
    .animation{
        animation-duration: 1s;
        animation-name: slidein;
    }
    @keyframes slidein {
        from {
            margin-left: 100%;
            width: 300%
        }

        to {
            margin-left: 0%;
            width: 100%;
        }
    }
</style>
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

    <main class="page-header">
        <div class="container"><h1>Artículos</h1></div>
      </main>

    <div class="content container">
        <div class="projects">
          <div>
            <div style="margin-bottom: 3% !important" class="filter-content-2">
              <ul class="filter">
                <li id="b92" class="active"><a href="#" onclick="a92()">Artículo 92</a></li>
                <li id="b100" class=""><a href="#" onclick="a100()">Artículo 100</a></li>
                <li id="b103" class=""><a href="#" onclick="a103()">Artículo 103</a></li>
              </ul>
            </div>
          </div>


          <script>
            function a92(){

              document.getElementById("b92").className += " active";
              document.getElementById("b103").classList.remove("active");
              //document.getElementById("tabla92").className += " animation";
              document.getElementById("b100").classList.remove("active");

              document.getElementById("tabla92").style.display="block";
              document.getElementById("tabla100").style.display="none";
              document.getElementById("tabla103").style.display="none";
            }
            function a100(){
              document.getElementById("b92").classList.remove("active");
              document.getElementById("b103").classList.remove("active");
              //document.getElementById("tabla100").className += " animation";
              document.getElementById("b100").className += " active";

              document.getElementById("tabla92").style.display="none";
              document.getElementById("tabla100").style.display="block";
              document.getElementById("tabla103").style.display="none";
              document.getElementById("uno").style.display="none";
            }
            function a103(){
                document.getElementById("b92").classList.remove("active");
                document.getElementById("b100").classList.remove("active");
                //document.getElementById("tabla103").className += " animation";
                document.getElementById("b103").className += " active";

                document.getElementById("tabla92").style.display="none";
                document.getElementById("tabla100").style.display="none";
                document.getElementById("tabla103").style.display="block";
            }

            function a922019(){
                document.getElementById("b92-2020").classList.remove("active");
                document.getElementById("b92-2018").classList.remove("active");
                document.getElementById("b92-2019").className += " active";
                document.getElementById("t92-2019").className += " animation";

                document.getElementById("t92-2018").style.display="none";
                document.getElementById("t92-2020").style.display="none";
                document.getElementById("t92-2019").style.display="block";
            }
            function a922020(){
                document.getElementById("b92-2019").classList.remove("active");
                document.getElementById("b92-2018").classList.remove("active");
                document.getElementById("b92-2020").className += " active";
                document.getElementById("t92-2020").className += " animation";

                document.getElementById("t92-2018").style.display="none";
                document.getElementById("t92-2020").style.display="block";
                document.getElementById("t92-2019").style.display="none";
            }
            function a922018(){
                document.getElementById("b92-2019").classList.remove("active");
                document.getElementById("b92-2020").classList.remove("active");
                document.getElementById("b92-2018").className += " active";
                document.getElementById("t92-2018").className += " animation";

                document.getElementById("t92-2020").style.display="none";
                document.getElementById("t92-2018").style.display="block";
                document.getElementById("t92-2019").style.display="none";
            }

            function a1002019(){
                document.getElementById("b100-2020").classList.remove("active");
                document.getElementById("b100-2018").classList.remove("active");
                document.getElementById("b100-2019").className += " active";
                document.getElementById("t100-2019").className += " animation";

                document.getElementById("t100-2020").style.display="none";
                document.getElementById("t100-2018").style.display="none";
                document.getElementById("t100-2019").style.display="block";
            }
            function a1002020(){
                document.getElementById("b100-2019").classList.remove("active");
                document.getElementById("b100-2018").classList.remove("active");
                document.getElementById("b100-2020").className += " active";
                document.getElementById("t100-2020").className += " animation";

                document.getElementById("t100-2020").style.display="block";
                document.getElementById("t100-2019").style.display="none";
                document.getElementById("t100-2018").style.display="none";
            }
            function a1002018(){
                document.getElementById("b100-2019").classList.remove("active");
                document.getElementById("b100-2020").classList.remove("active");
                document.getElementById("b100-2018").className += " active";
                document.getElementById("t100-2018").className += " animation";

                document.getElementById("t100-2018").style.display="block";
                document.getElementById("t100-2019").style.display="none";
                document.getElementById("t100-2020").style.display="none";
            }

            function a1032019(){
                document.getElementById("b103-2020").classList.remove("active");
                document.getElementById("b103-2018").classList.remove("active");
                document.getElementById("b103-2019").className += " active";
                document.getElementById("t103-2019").className += " animation";

                document.getElementById("t103-2020").style.display="none";
                document.getElementById("t103-2018").style.display="none";
                document.getElementById("t103-2019").style.display="block";
            }
            function a1032020(){
                document.getElementById("b103-2019").classList.remove("active");
                document.getElementById("b103-2018").classList.remove("active");
                document.getElementById("b103-2020").className += " active";
                document.getElementById("t103-2020").className += " animation";

                document.getElementById("t103-2019").style.display="none";
                document.getElementById("t103-2020").style.display="block";
                document.getElementById("t103-2018").style.display="none";
            }
            function a1032018(){
                document.getElementById("b103-2019").classList.remove("active");
                document.getElementById("b103-2020").classList.remove("active");
                document.getElementById("b103-2018").className += " active";
                document.getElementById("t103-2018").className += " animation";

                document.getElementById("t103-2019").style.display="none";
                document.getElementById("t103-2018").style.display="block";
                document.getElementById("t103-2020").style.display="none";
            }
        </script>


            {{------------------ Artículo 92 ------------------}}
            <div id="tabla92" style="width:100%" >
                <div style="margin-bottom: 2% !important;" class="filter-content-2">
                    <ul style="font-size: 1rem !important" class="filter">
                      <li id="b92-2020" class="active"><a href="#" onclick="a922020()">2020</a></li>
                      <li id="b92-2019" class=""><a href="#" onclick="a922019()">2019</a></li>
                      <li id="b92-2018" class=""><a href="#" onclick="a922018()">2018</a></li>
                    </ul>
                </div>
                {{------------------ 2020 ------------------}}
                <table id="t92-2020" style="width: 100%;" class="table-hover tabla-norma animation">
                  <tbody>
                    <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>I. Normatividad Aplicable</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>II. A. Estructura Orgánica</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>II. B. Organigrama</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>III. Facultades de las Áreas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>IV. Metas y objetivos de las áreas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>V. A. Indicadores Interés Público</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>V. B. Matriz de Indicadores para Resultados relacionados con temas de interés público o trascendencia social</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>VI. A. Indicadores de objetivos y resultados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>VI. B. Matriz de Indicadores de Resultados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>VII. El directorio de todos los servidores públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>VIII. Remuneraciones</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>IX. Gastos por concepto de viáticos y gastos de representación</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>X. A. Plazas Vacantes</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>X. B. Total de plazas vacantes y ocupadas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XI. Contrataciones de servicios profesionales por honorarios</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XII. Perfil de los puestos de los servidores públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XIII. Declaraciones patrimoniales de los servidores públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XIV. A. Programas de subsidios, estímulos y apoyos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XIV. B. Padrón de beneficiarios</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XV. Agenda de reuniones</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XVI. Domicilio de la unidad de transparencia</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XVII. Registro de solicitudes de acceso a la información recibidas y atendidas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XVIII. Convocatorias a concursos para ocupar cargos públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XIX. Índices de los expedientes clasificados como reservados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XX. A. Normatividad Laboral</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XX. B. Recursos públicos entregados a sindicatos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXI. Información curricular y sanciones administrativas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXII. Servidores públicos con sanciones administrativas definitivas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXIII. Servicios requisitos para acceder a ellos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXIV. Trámites, requisitos y formatos que ofrecen</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXV. A. Presupuesto asignado</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXV. B. Ejercicio de los egresos presupuestarios</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXV. C. Información financiera de cuenta pública</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVI. Deuda pública</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVII A. Programa anual de comunicación social o equivalente</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVII B. Erogación de recursos por contratación de servicios</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVII C. Utilización de los tiempos oficiales</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVII D. Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXVIII. Resultados de auditorías realizadas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXIX. A. Resultados de procedimientos de licitación pública e invitación a cuando menos tres personas realiza</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXIX. B. Resultados de procedimientos de adjudicación directa realizados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXX. Resultados de la dictaminación de los estados financieros</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXI. Personas que usan recursos públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXII. Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXIII. Informes emitidos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXIV. Estadísticas generadas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXV A. Gasto por capítulo, concepto y partida</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXV B. Informes financieros contables, presupuestales</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVI. Padrón de proveedores y contratistas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVII. Convenios de coordinación, de concertación con el sector social o privado</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII A. Inventario de bienes muebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII B. Inventario de altas practicadas a bienes muebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII C. Inventario de bajas practicadas a bienes muebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII D. Inventario de bienes inmuebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII E. Inventario de altas practicadas a bienes inmuebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII F. Inventario de bajas practicadas a bienes inmuebles</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXVIII G. Inventario de bienes muebles e inmuebles donados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXIX A. Recomendaciones emitidas por la Comisión Nacional de Derechos Humanos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXIX B. Casos especiales emitidos por la CNDH u otros organismos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XXXIX C. Recomendaciones emitidas por organismos internacionales</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XL. Resoluciones y laudos emitidos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLI A. Mecanismos de participación ciudadana</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLI B. Resultado de los mecanismos de participación</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLII A. Programas que ofrecen</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLII B. Trámites para acceder a programas que ofrecen</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIII A. Informe de sesiones del comité de transparencia</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIII B. Informe de resoluciones del comité de transparencia</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIII C. Integrantes del comité de transparencia</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIII D. Calendario de sesiones ordinarias del comité de transparencia</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIV A. Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIV B. Encuestas sobre programas financiados con recursos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLV A. Estudios financiados con recursos públicos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVI A. Hipervínculo al listado de pensionados y jubilados</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVI B. Listado de jubilados y pensionados y el monto que reciben</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVII A. Ingresos recibidos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVII B. Responsables de recibir, administrar y ejercer los ingresos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVIII A. Donaciones en dinero realizadas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLVIII B. Donaciones en especie realizadas</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>XLIX. Catálogo de disposición documental y guía simple de archivos</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>L. Actas del Consejo Consultivo</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>L B. Opiniones y recomendaciones del consejo consultivo</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LI A. Solicitudes de intervención de comunicaciones</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LI B. Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LI C. Mensaje</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LII A. Información de interés público</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LII B. Preguntas frecuentes</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                        <td>LII C. Transparencia proactiva</td>
                        <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                      </tr>
                  </tbody>
                </table>

                {{------------------ 2019 ------------------}}
                <table id="t92-2019" style="width: 100%;" class="table-hover tabla-norma">
                    <tbody>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>I. Normatividad Aplicable</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>II. A. Estructura Orgánica</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>II. B. Organigrama</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>III. Facultades de las Áreas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>IV. Metas y objetivos de las áreas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_4-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>V. A. Indicadores Interés Público</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_5_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>V. B. Matriz de Indicadores para Resultados relacionados con temas de interés público o trascendencia social</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_5_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VI. A. Indicadores de objetivos y resultados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_6_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VI. B. Matriz de Indicadores de Resultados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_6_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VII. El directorio de todos los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VIII. Remuneraciones</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>IX. Gastos por concepto de viáticos y gastos de representación</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_9-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>X. A. Plazas Vacantes</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_10_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>X. B. Total de plazas vacantes y ocupadas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_10_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XI. Contrataciones de servicios profesionales por honorarios</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_11-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XII. Perfil de los puestos de los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIII. Declaraciones patrimoniales de los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIV. A. Programas de subsidios, estímulos y apoyos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIV. B. Padrón de beneficiarios</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XV. Agenda de reuniones</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_15-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVI. Domicilio de la unidad de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVII. Registro de solicitudes de acceso a la información recibidas y atendidas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_17-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVIII. Convocatorias a concursos para ocupar cargos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_18-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIX. Índices de los expedientes clasificados como reservados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_19-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XX. A. Normatividad Laboral</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_20_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XX. B. Recursos públicos entregados a sindicatos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_20_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXI. Información curricular y sanciones administrativas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_21-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXII. Servidores públicos con sanciones administrativas definitivas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIII. Servicios requisitos para acceder a ellos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIV. Trámites, requisitos y formatos que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. A. Presupuesto asignado</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. B. Ejercicio de los egresos presupuestarios</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. C. Información financiera de cuenta pública</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVI. Deuda pública</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII A. Programa anual de comunicación social o equivalente</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII B. Erogación de recursos por contratación de servicios</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII C. Utilización de los tiempos oficiales</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_C-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII D. Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_D-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVIII. Resultados de auditorías realizadas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_28-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIX. A. Resultados de procedimientos de licitación pública e invitación a cuando menos tres personas realiza</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIX. B. Resultados de procedimientos de adjudicación directa realizados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXX. Resultados de la dictaminación de los estados financieros</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_30-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXI. Personas que usan recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXII. Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIII. Informes emitidos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_33-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIV. Estadísticas generadas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_34-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXV A. Gasto por capítulo, concepto y partida</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXV B. Informes financieros contables, presupuestales</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVI. Padrón de proveedores y contratistas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_36-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVII. Convenios de coordinación, de concertación con el sector social o privado</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_37-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII A. Inventario de bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII B. Inventario de altas practicadas a bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII C. Inventario de bajas practicadas a bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_C-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII D. Inventario de bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_D-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII E. Inventario de altas practicadas a bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_E-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII F. Inventario de bajas practicadas a bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_F-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII G. Inventario de bienes muebles e inmuebles donados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_G-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX A. Recomendaciones emitidas por la Comisión Nacional de Derechos Humanos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX B. Casos especiales emitidos por la CNDH u otros organismos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX C. Recomendaciones emitidas por organismos internacionales</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XL. Resoluciones y laudos emitidos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLI A. Mecanismos de participación ciudadana</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLI B. Resultado de los mecanismos de participación</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLII A. Programas que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLII B. Trámites para acceder a programas que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII A. Informe de sesiones del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII B. Informe de resoluciones del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII C. Integrantes del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII D. Calendario de sesiones ordinarias del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_43_D-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIV A. Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_44_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIV B. Encuestas sobre programas financiados con recursos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_44_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLV A. Estudios financiados con recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_45-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVI A. Hipervínculo al listado de pensionados y jubilados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVI B. Listado de jubilados y pensionados y el monto que reciben</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVII A. Ingresos recibidos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_47_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVII B. Responsables de recibir, administrar y ejercer los ingresos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_47_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVIII A. Donaciones en dinero realizadas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVIII B. Donaciones en especie realizadas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIX. Catálogo de disposición documental y guía simple de archivos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>L. Actas del Consejo Consultivo</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>L B. Opiniones y recomendaciones del consejo consultivo</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI A. Solicitudes de intervención de comunicaciones</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI B. Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI C. Mensaje</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII A. Información de interés público</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_52_A-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII B. Preguntas frecuentes</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_52_B-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII C. Transparencia proactiva</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_52_C-2019.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                  </table>

                {{------------------ 2018 ------------------}}
                <table id="t92-2018" style="width: 100%;" class="table-hover tabla-norma">
                    <tbody>
                      <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>I. Normatividad Aplicable</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>II. A. Estructura Orgánica</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>II. B. Organigrama</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>III. Facultades de las Áreas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>IV. Metas y objetivos de las áreas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_4-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>V. A. Indicadores Interés Público</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_5_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>V. B. Matriz de Indicadores para Resultados relacionados con temas de interés público o trascendencia social</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_5_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VI. A. Indicadores de objetivos y resultados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_6_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VI. B. Matriz de Indicadores de Resultados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_6_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VII. El directorio de todos los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>VIII. Remuneraciones</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>IX. Gastos por concepto de viáticos y gastos de representación</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_9-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>X. A. Plazas Vacantes</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>X. B. Total de plazas vacantes y ocupadas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XI. Contrataciones de servicios profesionales por honorarios</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_11-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XII. Perfil de los puestos de los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIII. Declaraciones patrimoniales de los servidores públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIV. A. Programas de subsidios, estímulos y apoyos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIV. B. Padrón de beneficiarios</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XV. Agenda de reuniones</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_15-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVI. Domicilio de la unidad de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVII. Registro de solicitudes de acceso a la información recibidas y atendidas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_17-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XVIII. Convocatorias a concursos para ocupar cargos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_18-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XIX. Índices de los expedientes clasificados como reservados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_19-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XX. A. Normatividad Laboral</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_20_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XX. B. Recursos públicos entregados a sindicatos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_20_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXI. Información curricular y sanciones administrativas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXII. Servidores públicos con sanciones administrativas definitivas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIII. Servicios requisitos para acceder a ellos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIV. Trámites, requisitos y formatos que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. A. Presupuesto asignado</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. B. Ejercicio de los egresos presupuestarios</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXV. C. Información financiera de cuenta pública</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVI. Deuda pública</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII A. Programa anual de comunicación social o equivalente</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII B. Erogación de recursos por contratación de servicios</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII C. Utilización de los tiempos oficiales</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_C-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVII D. Mensaje e hipervínculo a la información relacionada con los tiempos oficiales</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_27_D-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXVIII. Resultados de auditorías realizadas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_28-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIX. A. Resultados de procedimientos de licitación pública e invitación a cuando menos tres personas realiza</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXIX. B. Resultados de procedimientos de adjudicación directa realizados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXX. Resultados de la dictaminación de los estados financieros</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_30-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXI. Personas que usan recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXII. Las concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIII. Informes emitidos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_33-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIV. Estadísticas generadas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_34-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXV A. Gasto por capítulo, concepto y partida</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXV B. Informes financieros contables, presupuestales</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVI. Padrón de proveedores y contratistas</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_36-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVII. Convenios de coordinación, de concertación con el sector social o privado</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_37-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII A. Inventario de bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII B. Inventario de altas practicadas a bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII C. Inventario de bajas practicadas a bienes muebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_C-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII D. Inventario de bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII E. Inventario de altas practicadas a bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_E-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII F. Inventario de bajas practicadas a bienes inmuebles</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_F-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXVIII G. Inventario de bienes muebles e inmuebles donados</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_38_G-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX A. Recomendaciones emitidas por la Comisión Nacional de Derechos Humanos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX B. Casos especiales emitidos por la CNDH u otros organismos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XXXIX C. Recomendaciones emitidas por organismos internacionales</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XL. Resoluciones y laudos emitidos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLI A. Mecanismos de participación ciudadana</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLI B. Resultado de los mecanismos de participación</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLII A. Programas que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLII B. Trámites para acceder a programas que ofrecen</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII A. Informe de sesiones del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII B. Informe de resoluciones del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII C. Integrantes del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIII D. Calendario de sesiones ordinarias del comité de transparencia</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_43_D-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIV A. Evaluaciones y encuestas a programas financiados con recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_44_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIV B. Encuestas sobre programas financiados con recursos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_44_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLV A. Estudios financiados con recursos públicos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_45-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVI A. Hipervínculo al listado de pensionados y jubilados</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVI B. Listado de jubilados y pensionados y el monto que reciben</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVII A. Ingresos recibidos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_47_A-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVII B. Responsables de recibir, administrar y ejercer los ingresos</td>
                          <td class="texto-centrado-tabla"><a href="https://partidoverdeedomex.org/wp-content/uploads/2020/06/info_Art92_47_B-2018.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVIII A. Donaciones en dinero realizadas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLVIII B. Donaciones en especie realizadas</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>XLIX. Catálogo de disposición documental y guía simple de archivos</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>L. Actas del Consejo Consultivo</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>L B. Opiniones y recomendaciones del consejo consultivo</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI A. Solicitudes de intervención de comunicaciones</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI B. Solicitudes de registro de comunicaciones y de registro de localización geográfica</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LI C. Mensaje</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII A. Información de interés público</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII B. Preguntas frecuentes</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                          <td>LII C. Transparencia proactiva</td>
                          <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                  </table>
            </div>

            {{------------------ Artículo 100 ------------------}}
            <div id="tabla100" style="width: 100%; display: none">
                <div style="margin-bottom: 2% !important;" class="filter-content-2">
                    <ul style="font-size: 1rem !important" class="filter">
                      <li id="b100-2020" class="active"><a href="#" onclick="a1002020()">2020</a></li>
                      <li id="b100-2019" class=""><a href="#" onclick="a1002019()">2019</a></li>
                      <li id="b100-2018" class=""><a href="#" onclick="a1002018()">2018</a></li>
                    </ul>
                </div>

                {{------------------ 2020 ------------------}}
                <table id="t100-2020" style="width: 100%;" class="table-hover tabla-norma animation">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2020</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>

                {{------------------ 2019 ------------------}}
                <table id="t100-2019" style="width: 100%; display:none;" class="table-hover tabla-norma">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2019</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>

                {{------------------ 2018 ------------------}}
                <table id="t100-2018" style="width: 100%; display:none;" class="table-hover tabla-norma">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2018</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{------------------ Artículo 103 ------------------}}
            <div id="tabla103" style="width: 100%; display: none">
                <div style="margin-bottom: 2% !important;" class="filter-content-2">
                    <ul style="font-size: 1rem !important" class="filter">
                      <li id="b103-2020" class="active"><a href="#" onclick="a1032020()">2020</a></li>
                      <li id="b103-2019" class=""><a href="#" onclick="a1032019()">2019</a></li>
                      <li id="b103-2018" class=""><a href="#" onclick="a1032018()">2018</a></li>
                    </ul>
                </div>
                {{------------------ 2020 ------------------}}
                <table id="t103-2020" style="width: 100%;" class="table-hover tabla-norma animation">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2020</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>

                {{------------------ 2019 ------------------}}
                <table id="t103-2019" style="width: 100%; display:none;" class="table-hover tabla-norma">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2019</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>

                {{------------------ 2018 ------------------}}
                <table id="t103-2018" style="width: 100%; display:none;" class="table-hover tabla-norma">
                    <tbody>
                        <tr style="background-color: #f3f6da; border-bottom: 10px solid #fff;">
                            <td>I. Normatividad Aplicable 2018</td>
                            <td class="texto-centrado-tabla"><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.footer')

  </div>
</div>

<!-- Scripts -->
@include('partials.scripts')

</body>
</html>
