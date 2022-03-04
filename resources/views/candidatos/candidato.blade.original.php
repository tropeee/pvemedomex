<!DOCTYPE html>
<!--
* PURE - Sublime Coming Soon Template
* Build Date: July-August 2016
* Last Update: March 2017
* Author: Madeon08 for ThemeHelite
* Copyright (C) 2016 ThemeHelite
* This is a premium product available exclusively here : http://themeforest.net/user/Madeon08/portfolio
* -->
<html lang="es" class="no-js">

	<head>
		<meta charset="utf-8">
		<title>{{$candidate->nombre}} - Candidata</title>
		<meta name="description" content="The description should optimally be between 150-160 characters.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="ThemeHelite">

        <!-- ================= Favicons ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="{{ asset('images/Logo-72x72.png')}}">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/Logo-72x72.png')}}">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/Logo-72x72.png')}}">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/Logo-72x72.png')}}">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/Logo-72x72.png')}}">

		<!-- ============== Resources style ============== -->
		<link rel="stylesheet" type="text/css" href="{{ asset('candidatos/css/style.css')}}" />

        {{-- Toastr --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
	</head>

	<body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HFL3X"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

		<!-- +++ Page loading +++ -->
		<div id="loading">

			<div id="preloader" class="animated-middle">

				<!-- Your logo -->
				<img src="{{ asset('images/Logo-72x72.png')}}" alt="" class="loading-logo" />

				{{-- <span class="loading-text">Cargando desde el Verde</span> --}}

				<span class="load">
					<span class="loading-dot"></span>
					<span class="loading-dot"></span>
					<span class="loading-dot"></span>
					<span class="loading-dot"></span>
				</span>

			</div>

		</div>

		<!-- +++ START - Fullpage sections +++ -->
		<div id="fullpage">

			<!-- +++ START - Home +++ -->
			<div class="section" id="section0">

				<!-- Your logo -->
        		<img src="{{ asset('images/Logo-72x72.png')}}" alt="" class="home-logo" />

				<!-- Background slideshow & light overlay -->
                <input class="foto1" type="hidden" value="{{$candidate->foto1}}">
                <input class="foto2" type="hidden" value="{{$candidate->foto2}}">
				<div class="slideshow-home"></div>
				<div class="slide-overlay"></div>

				<div class="intro">


					<h1 class="open-anim opacity-0">{{$candidate->nombre}}</h1>

                    <h3 class="open-anim opacity-0">{{$candidate->municipio}}</h3>
                    <div style="width:100%;">
					<p style="font-size: 20px;" class="open-anim opacity-0">{{$candidate->frase}}</p>
                    </div>

					{{-- <a id="button-more" class="light-btn open-anim opacity-0">More Informations</a> --}}

				</div>

				<!-- Scroll indicator -->
				<div class="scroll-indicator">

					<!-- Line 1695 in js/jquery.fullpage.js is the place to select the anchor scrolling to the section of your choice -->
					<a id="indicator-scroll"><i class="icon ion-ios-arrow-down"></i></a>

				</div>

			</div>
			<!-- +++ END - Home +++ -->

			<!-- +++ START - About +++ -->
			<div class="section" id="section1">

				<section id="about" class="text-left-block">

					<div class="row row-no-margin">

						<!-- The id="invert-slideshow" and id="invert-text" are used for the responsive mode under 1025px. With that, the slideshow is displayed after the text, looking better for the user experience. If you don't want to invert these divs, just remove the id.-->
						<div id="invert-slideshow" class="col-xs-12 col-sm-6 col-lg-6 slideshow-about split-section"></div>

						<div id="invert-text" class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section">

							<div class="left-center-part">

								<h2>Semblanza</h2>

								<p style="text-align: justify; color:white;">{!! $candidate->semblanza !!}</p>

                            </div>



						</div>

					</div>

				</section>

			</div>
			<!-- +++ END - About +++ -->

			<!-- +++ START - Services +++ -->
			<div class="section" id="section2">

				<section id="services" class="text-left-block">

					<div class="row row-no-margin">

						<div class="col-xs-12 col-sm-12 col-lg-12 left-center-text split-section">

							<div class="left-center-part">

								<h2>Propuestas</h2>

								{{-- <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p> --}}

								<!-- +++ START - Carousel +++ -->
								<div id="carousel-services" class="carousel slide" data-interval="6000" data-ride="carousel">

							    	<!-- Carousel indicators -->
							        {{-- <ol class="carousel-indicators">
							            <li data-target="#carousel-services" data-slide-to="0" class="active"></li>
							            <li data-target="#carousel-services" data-slide-to="1"></li>
							            <li data-target="#carousel-services" data-slide-to="2"></li>
							        </ol> --}}

							        <!-- START - Wrapper for carousel items -->
							        <div class="carousel-inner">

							        	<!-- Services 1 -->
							            <div class="active item">

											<div class="row">

												<div class="col-xs-12 col-sm-3 col-lg-4 block-services">

													<span class="icon-services"><ion-icon name="people-outline"></ion-icon></span>

													<h3>JÓVENES</h3>

													<p style="text-align: justify; color:white">{{$candidate->propuesta1}}</p>

												</div>

												<div class="col-xs-12 col-sm-3 col-lg-4 block-services">

													<span class="icon-services"><ion-icon name="woman-outline"></ion-icon></span>

													<h3>MUJERES</h3>

													<p style="text-align: justify; color:white">{{$candidate->propuesta2}}</p>

												</div>

												<div class="col-xs-12 col-sm-3 col-lg-4 block-services">

													<span class="icon-services"><ion-icon name="storefront-outline"></ion-icon></span>

													<h3>COMERCIANTES</h3>

													<p style="text-align: justify; color:white">{{$candidate->propuesta3}}</p>

												</div>

												<div class="col-xs-12 col-sm-3 col-lg-4 block-services">

													<span class="icon-services icon"><ion-icon name="briefcase-outline"></ion-icon></span>

													<h3>PROFESIONISTAS</h3>

													<p style="text-align: justify; color:white">{{$candidate->propuesta4}}</p>

												</div>

                                                <div class="col-lg-4"></div>

                                                <div class="col-xs-12 col-sm-3 col-lg-4 block-services">

													<span class="icon-services"><ion-icon name="hammer-outline"></ion-icon></span>

													<h3>OBRA PÚBLICA</h3>

													<p style="text-align: justify; color:white">{{$candidate->propuesta5}}</p>

												</div>

											</div>

							            </div>

							            <!-- Services 2 -->
							            {{-- <div class="item">


											<div class="row">


												<div class="col-xs-12 col-sm-6 col-lg-6 block-services">

													<span class="icon-services icon ion-ios-navigate-outline"></span>
													<h3>POLÍTICAS</h3>

													<p style="text-align: justify; color:white">Eliminar el fuero al presidente de la República y a todos los altos funcionarios. Política de austeridad que permita contar con un presupuesto suficiente para promover el desarrollo, la producción y el empleo, garantizando el bienestar de todos.</p>

												</div>


												<div class="col-xs-12 col-sm-6 col-lg-6 block-services">

													<span class="icon-services icon ion-ios-pulse"></span>

													<h3>SEGURIDAD</h3>

													<p style="text-align: justify; color:white">Relanzar programa nacional de prevención social de violencia y delincuencia. Establecer labores prioritarias de prevención a grupos en situación de riesgo. Fortalecer capacidades de corporaciones policiacas.</p>

												</div>

											</div>

							            </div> --}}

							            <!-- Services 3 -->
							            {{-- <div class="item">


											<div class="row">


												<div class="col-xs-12 col-sm-6 col-lg-6 block-services">

													<span class="icon-services icon ion-ios-settings"></span>
													<h3>Coded with precision</h3>

													<p style="text-align: justify">Lorem ipsum Do dolor commodo occaecat sit pariatur nisi sit laboris officia exercitation officia laboris ex ullamco nulla do in elit.</p>

												</div>


												<div class="col-xs-12 col-sm-6 col-lg-6 block-services">

													<span class="icon-services icon ion-ios-color-wand-outline"></span>

													<h3>Ready for your project</h3>

													<p>Lorem ipsum Do dolor commodo occaecat sit pariatur nisi sit laboris officia exercitation officia laboris ex ullamco nulla do in elit.</p>

												</div>

											</div>

							            </div> --}}

							        </div>
							        <!-- END - Wrapper for carousel items -->

							        <!-- Left arrow -->
							        {{-- <a class="carousel-control left" href="#carousel-services" data-slide="prev">
							            <span class="icon-prev"></span>
							        </a> --}}

							        <!-- Right arrow -->
							        {{-- <a class="carousel-control right" href="#carousel-services" data-slide="next">
							            <span class="icon-next"></span>
							        </a> --}}

							    </div>
							    <!-- +++ END - Carousel +++ -->

						    </div>

						</div>

						<!-- Slideshow / Image services -->
						{{-- <div class="col-xs-12 col-sm-6 col-lg-6 slideshow-services split-section"></div> --}}

					</div>

				</section>

			</div>
			<!-- +++ END - Services +++ -->

            <!-- +++ START - Contact +++ -->
			<div class="section" id="section4">

<section id="contact" class="text-left-block">

    <div class="row row-no-margin">

        <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section spec-padding-bottom">

            <div class="left-center-part">

                <h2>¿Cuáles son tus propuestas?</h2>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-lg-12">

                        <!-- START - Contact Form -->
                        <form id="propuestasForm" action="{{ route('propuestas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <!-- Full name -->
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="nombre" class="form form-control" placeholder="Nombre completo*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre completo*'" name="nombre" data-name="nombre" required>
                                    </div>
                                    @if ($errors->has('nombre'))
                                            <span style="color: #FF0000">{{ $errors->first('nombre') }}</span>
                                    @endif
                                </div>

                                <!-- Municipio -->
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="municipio" class="form form-control" placeholder="Municipio*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Municipio*'" name="municipio" data-name="municipio" required>
                                    </div>
                                    @if ($errors->has('municipio'))
                                            <span style="color: #FF0000">{{ $errors->first('municipio') }}</span>
                                    @endif
                                </div>

                                <!-- E-mail -->
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form form-control" placeholder="Correo electrónico*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo electrónico*'" name="email" data-name="email" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span style="color: #FF0000">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <!-- Teléfono -->
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" id="telefono" class="form form-control" placeholder="Número de teléfono*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Número de teléfono*'" name="telefono" data-name="telefono" required>
                                    </div>
                                    @if ($errors->has('telefono'))
                                        <span style="color: #FF0000">{{ $errors->first('telefono') }}</span>
                                    @endif
                                </div>

                                <!-- Message -->
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea style="resize: none;" id="propuestas" class="form textarea form-control" placeholder="Dinos tus propuestas*" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dinos tus propuestas*'" name="propuestas" data-name="propuestas" required></textarea>
                                    </div>
                                    @if ($errors->has('propuestas'))
                                        <span style="color: #FF0000">{{ $errors->first('propuestas') }}</span>
                                    @endif
                                    <span class="sub-text">* Campos requeridos</span>
                                </div>

                            </div>

                            <!-- Form submission -->
                            <div style="text-align: center">
                                <button style="color: black" type="submit" class="btn btn-color btn-lg">Enviar</button>
                            {{-- <button type="submit" id="formm" class="btn btn-color">Enviar</button> --}}
                            </div>

                        </form>
                        <!-- END - Contact Form -->

                        <!-- START - Answer for the contact form is displayed in the next div, do not remove it. -->
                        <div id="block-answer">

                            <div id="answer"></div>

                        </div>
                        <!-- END - Answer... -->

                    </div>

                   </div>

                <p class="copyright">© Partido Verde - Estado de México</p>

            </div>

        </div>

        <!-- Map -->
        {{-- <div class="col-xs-12 col-sm-6 col-lg-6 map-info split-section"> --}}

            {{-- <div id="map"></div> --}}
            <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section">

                <div class="left-center-part" style="text-align: center">

                    <h2>Estémos en contacto</h2>
                    <br>
                    <br>
                    <br>


                    <div class="row">


                        <div class="col-xs-12 col-sm-3 col-lg">
                            <a href="{{$candidate->facebook}}" target="_blank"><i style="font-size: 35px !important" class="fa fa-facebook"></i></a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg">
                            <a href="{{$candidate->twitter}}" target="_blank"><i style="font-size: 35px !important" class="fa fa-twitter"></i></a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg">
                            <a href="{{$candidate->instagram}}" target="_blank"><i style="font-size: 35px !important" class="fa fa-instagram"></i></a>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-lg">
                            <a href="https://api.whatsapp.com/send?phone=52{{$candidate->whatsapp}}" target="_blank"><i style="font-size: 35px !important" class="fa fa-whatsapp"></i></a>
                        </div>

                    </div>


                </div>

            </div>

        {{-- </div> --}}

    </div>

</section>

</div>

		</div>
		<!-- +++ END - Fullpage sections +++ -->

		<!-- +++ Button used for opening the newsletter panel +++ -->
		{{-- <a id="open-newsletter" class="action-btn">Notify me</a> --}}



		<!-- +++ List of social media on the bottom right +++ -->
		<div id="social-nav">

			<ul>
				<!-- Facebook -->
				<li>
					<a href="{{$candidate->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
				</li>

				<!-- Twitter -->
				<li>
					<a href="{{$candidate->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
				</li>

				<!-- Linkedin -->
				<li>
					<a href="{{$candidate->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
				</li>

			</ul>

		</div>

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe.
	        	It's a separate element as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides.
		            PhotoSwipe keeps only 3 of them in the DOM to save memory.
		            Don't modify these 3 item elements, data is added later on. -->
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>

		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div>
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		        </div>

		    </div>

		</div>
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

		<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
        <!-- ********** jQuery Resources ********** -->
        <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->

        <!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
        <script src="{{ asset('candidatos/js/jquery.min.js')}}"></script>
        <script src="{{ asset('candidatos/js/jquery.easings.min.js')}}"></script>
        <script src="{{ asset('candidatos/js/bootstrap.min.js')}}"></script>

		<!-- FullPage plugin -->
		<script src="{{ asset('candidatos/js/jquery.fullPage.js')}}"></script>

        <!-- Slideshow plugin -->
        <script src="{{ asset('candidatos/js/vegas.js')}}"></script>

		<!-- Google Maps API and Skin -->
		<script src="http://maps.google.com/maps/api/js"></script>
		<script src="{{ asset('candidatos/js/map.js')}}"></script>

		<!-- PhotoSwipe Core JS file -->
		<script src="{{ asset('candidatos/js/photoswipe.js')}}"></script>

		<!-- PhotoSwipe UI JS file -->
		<script src="{{ asset('candidatos/js/photoswipe-ui-default.js')}}"></script>

		<!-- Contact form plugin -->
		<script src="{{ asset('candidatos/js/contact-me.js')}}"></script>

		<!-- Newsletter plugin -->
		{{-- <script src="{{ asset('candidatos/s/notifyMe.js')}}"></script> --}}

		<!-- Main JS File -->
		<script src="{{ asset('candidatos/js/main-fullpage.js')}}"></script>

        <!-- Ionic Icons-->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
        </script>

	</body>

</html>
