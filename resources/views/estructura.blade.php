@extends('partials.base')
<!-- Metas -->
@section('descripcion')
Estructura del Partido Verde Estado de México
@endsection

@section('titulo')
Estructura
@endsection

@section('imagen')
{{ asset('images/Logo-72x72.png')}}
@endsection

@section('url')
https://partidoverdeedomex.org/estructura
@endsection
<!-- Metas -->

<!-- Contenido -->
@section('contenido')

    <!-- Pageheader -->
    <main class="page-header">
        <div class="container"><h1>Estructura</h1></div>
    </main>

    {{------------------------------ Secretarios -------------------------------}}

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Comité Ejecutivo Estatal</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                @foreach ($secretario as $s)
                <div class="col-team col-xs-6 col-md-4" style="max-height: 270px; min-height: 270px;">
                  <a href="{{route ('Secretarios.Show',[$s->slug])}}">
                    <div class="team-profile">
                      <img alt="" src="{{ asset($s->foto)}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>{{$s->nombre}}</h6>
                            <div class="team-spec" style="color:black">{{$s->cargo}}</div>
                          </div>
                          <div class="team-social">
                            <a href="" class="icon ion-social-twitter"></a>
                            <a href="" class="icon ion-social-facebook"></a>
                            <a href="" class="icon ion-social-instagram"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
                <!-- <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/estructura/Hector-Raul.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Hector Raúl García González</h6>
                          <div class="team-spec">Secretaría de Organización</div>
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
                    <img alt="" src="{{ asset('images/estructura/Fabian-Enriquez.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Fabián Enríquez Gamiz</h6>
                          <div class="team-spec">Secretaría de Procesos Electorales</div>
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
                    <img alt="" src="{{ asset('images/estructura/Brigida.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Brigida Bolado García</h6>
                          <div class="team-spec">Secretaría de Ecología y Medio Ambiente</div>
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
                    <img alt="" src="{{ asset('images/estructura/Diego.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Diego Martínez Rosillo</h6>
                          <div class="team-spec">Secretaría de Finanzas</div>
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
                      <img alt="" src="{{ asset('images/estructura/Mayra.webp')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Mayra Eréndira Gómez Bravo</h6>
                            <div class="team-spec">Secretaría de la Mujer</div>
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
                      <img alt="" src="{{ asset('images/estructura/Jorge-Luis.webp')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Jorge Luis León Cruz</h6>
                            <div class="team-spec">Secretaría de Asuntos de la Juventud</div>
                          </div>
                          <div class="team-social">
                            <a href="" class="icon ion-social-twitter"></a>
                            <a href="" class="icon ion-social-facebook"></a>
                            <a href="" class="icon ion-social-instagram"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  {{-- <div class="col-team col-xs-6 col-md-4">
                    <div class="team-profile">
                      <img alt="" src="images/secretarios/ian.png">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Ian Karla Schleske de Ariño</h6>
                            <div class="team-spec">Secretaría de Comunicación Social</div>
                          </div>
                          <div class="team-social">
                            <a href="" class="icon ion-social-twitter"></a>
                            <a href="" class="icon ion-social-facebook"></a>
                            <a href="" class="icon ion-social-linkedin"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
              </div>
            </div>
          </div>
        </div>
    </section>

    {{------------------------------ Consejeros -------------------------------}}
    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Consejo Político</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/consejeros/jose-antonio.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>José Antonio Arévalo González</h6>
                          <div class="team-spec">Consejero</div>
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
                    <img alt="" src="{{ asset('images/consejeros/alejandro.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Alejandro Agundis Arias</h6>
                          <div class="team-spec">Consejero</div>
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
                    <img alt="" src="{{ asset('images\avatar-hombre.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Francisco Agundis Arias</h6>
                          <div class="team-spec">Consejero</div>
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
                {{-- <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="images/secretarios/ian.png">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Ian Karla Schleske de Ariño</h6>
                          <div class="team-spec">Consejera</div>
                        </div>
                        <div class="team-social">
                          <a href="" class="icon ion-social-twitter"></a>
                          <a href="" class="icon ion-social-facebook"></a>
                          <a href="" class="icon ion-social-linkedin"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images\avatar-mujer.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>María José Villegas Leal</h6>
                          <div class="team-spec">Consejera</div>
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
                      <img alt="" src="{{ asset('images\avatar-hombre.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Alfonso José Chozas Chozas</h6>
                            <div class="team-spec">Consejero</div>
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
                      <img alt="" src="{{ asset('images\avatar-hombre.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Fernando Flores Picazo</h6>
                            <div class="team-spec">Consejero</div>
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
                      <img alt="" src="{{ asset('images/estructura/Pepe.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>José Alberto Couttolenc Buentello</h6>
                            <div class="team-spec">Consejero</div>
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
                      <img alt="" src="{{ asset('images/consejeros/diego.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Diego Guerrero Rubio</h6>
                            <div class="team-spec">Consejero</div>
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
                      <img alt="" src="{{ asset('images\avatar-hombre.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Esteban Fernández Cruz</h6>
                            <div class="team-spec">Consejero</div>
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
                      <img alt="" src="{{ asset('images\avatar-mujer.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Pilar Guerrero Rubio</h6>
                            <div class="team-spec">Consejera</div>
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
                      <img alt="" src="{{ asset('images\avatar-mujer.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Roberta Fernanda Blazquez Martínez</h6>
                            <div class="team-spec">Consejera</div>
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
                      <img alt="" src="{{ asset('images/consejeros/romina.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>Romina Poumian González</h6>
                            <div class="team-spec">Consejera</div>
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
                      <img alt="" src="{{ asset('images\avatar-mujer.png')}}">
                      <div class="team-hover">
                        <div class="team-content">
                          <div class="team-name">
                            <h6>María del Carmen Peralta Vaqueiro</h6>
                            <div class="team-spec">Consejero</div>
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

    {{------------------------------ Comision Estatal de Honor y Justicia -------------------------------}}

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Comisión Estatal de Honor y Justicia</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/comite-transparencia/jorge-gomez.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Jorge Gómez Bravo</h6>
                          <div class="team-spec">Presidente</div>
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
                    <img alt="" src="{{ asset('images/estructura/Alejandra.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Alejandra Monserrat Sánchez Guzman</h6>
                          <div class="team-spec">Comisionado</div>
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
                    <img alt="" src="{{ asset('images/estructura/paulina-cortes.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Paulina Cortés Álvarez</h6>
                          <div class="team-spec">Comisionado</div>
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
                    <img alt="" src="{{ asset('images/estructura/antonio-fonseca.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Antonio Fonseca León</h6>
                          <div class="team-spec">Comisionado</div>
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

    {{------------------------------ Area Juridica -------------------------------}}

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Área Jurídica</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/comite-transparencia/profile.png')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Titular del Area</h6>
                          <div class="team-spec">Titular</div>
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

    {{------------------------------ Area de Sistemas -------------------------------}}

    <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr"></div>
                <div class="info-title">Área de Sistemas</div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4">
                  <div class="team-profile">
                    <img alt="" src="{{ asset('images/estructura/Fabian.webp')}}">
                    <div class="team-hover">
                      <div class="team-content">
                        <div class="team-name">
                          <h6>Fabian Pérez Lope</h6>
                          <div class="team-spec">Titular</div>
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

@endsection
