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
    {{-- <main style="margin-top: 8rem !important" class="page-header">
        <div class="container"><h1>Gestión Documental (Archivo)</h1></div>
    </main> --}}

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
        <div class="container"><h1>Formatos de Solicitud de Datos Personales</h1></div>
    </main>


    <section style="padding-top: 3rem" class="section">
        <div class="content container">
            <div class="projects">

                <button class="accordion">Formato de Solicitud de Acceso</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td style="text-align: center"><a style="color:#50B948;" target="_blank" href="{{ asset('pdf/formatos/Formato_Solicitud_Acceso.pdf')}}">Descargar Formato <br> <ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Formato de Solicitud de Cancelación</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td style="text-align: center"><a style="color:#50B948;" target="_blank" href="{{ asset('pdf/formatos/Formato_Solicitud_Cancelacion.pdf')}}">Descargar Formato <br> <ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <button class="accordion">Formato de Solicitud de Oposición</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td style="text-align: center"><a style="color:#50B948;" target="_blank" href="{{ asset('pdf/formatos/Formato_Solicitud_Oposicion.pdf')}}">Descargar Formato <br> <ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="accordion">Formato de Solicitud de Portabilidad</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td style="text-align: center"><a style="color:#50B948;" target="_blank" href="{{ asset('pdf/formatos/Formato_Solicitud_Portabilidad.pdf')}}">Descargar Formato <br> <ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="accordion">Formato de Solicitud de Rectificación</button>
                <div style="overflow-x:auto;" class="panel">
                    <table class="styled-table">
                        <tbody>
                            <tr>
                                <td style="text-align: center"><a style="color:#50B948;" target="_blank" href="{{ asset('pdf/formatos/Formato_Solicitud_Rectificacion.pdf')}}">Descargar Formato <br> <ion-icon style="font-size: 22px" name="open-outline"></ion-icon></a></td>
                            </tr>
                        </tbody>
                    </table>
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
