<!DOCTYPE html>
<html lang="es" class="no-js">

	<head>
		<meta charset="utf-8">
		<title>{{$candidate->nombre}} I {{$candidate->sexo}}</title>
		<meta name="description" content="{{$candidate->nombre}} - {{$candidate->sexo}} {{$candidate->tipo}} por el Distrito {{$candidate->distrito}}. {{$candidate->frase}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="PVEM">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@verdeedomex">
        <meta name="twitter:title" content="{{$candidate->nombre}} I {{$candidate->sexo}}">
        <meta name="twitter:description" content="{{$candidate->nombre}} - {{$candidate->sexo}} {{$candidate->tipo}} por el Distrito {{$candidate->distrito}}. {{$candidate->frase}}">
        <meta name="twitter:creator" content="@verdeedomex">

        <!-- Twitter Summary card images. Igual o superar los 200x200px -->
        <meta name="twitter:image" content=" <a href='{{asset($candidate->foto)}}'>{{asset($candidate->foto)}}</a>">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{$candidate->nombre}} I {{$candidate->sexo}}">
        <meta itemprop="description" content="{{$candidate->nombre}} - {{$candidate->sexo}} {{$candidate->tipo}} por el Distrito {{$candidate->distrito}}. {{$candidate->frase}}">
        <meta itemprop="image" content="{{asset($candidate->foto)}}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{$candidate->nombre}} I {{$candidate->sexo}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content=" https://partidoverdeedomex.org/candidatas-y-candidatos/{{$candidate->slug}}" />
        <meta property="og:image" content=" {{asset($candidate->foto1)}}" />
        <meta property="og:description" content="{{$candidate->nombre}} - {{$candidate->sexo}} {{$candidate->tipo}} por el Distrito {{$candidate->distrito}}. {{$candidate->frase}}" />
        <meta property="og:site_name" content="Partido Verde Estado de México" />



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

    <style>

@media screen and (min-width: 600px) {
        .munis{
            padding-left: 15rem; padding-right:15rem
        }
    }

    </style>

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
                    <h2 class="open-anim opacity-0">
                        @if($candidate->tipo=="Local") 
                         Diputado(a)
                      @elseif($candidate->tipo=="Municipal")
                      Presidente(a) Municipal
                      @elseif($candidate->tipo=="Sindico")
                      Síndico(a)
                      @elseif($candidate->tipo=="Regidor")
                      Regidor(a)
                      @endif
                    
                    </h2>



                    @if($candidate->tipo == "Local" || $candidate->tipo == "Federal")
                        <h3 class="open-anim opacity-0">Distrito {{$candidate->distrito}}</h3>
                    @endif
                    <h3 class="open-anim opacity-0 munis">{{$candidate->municipio}}</h3>
                    <div style="width:100%;">
					<p style="font-size: 20px;" class="open-anim opacity-0 munis">{{$candidate->frase}}</p>
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
        @if(($candidate->semblanza != null) || $candidate->semblanza != '')
			<!-- +++ START - About +++ -->
			<div class="section" id="section1">

				<section id="about" class="text-left-block">

					<div class="row row-no-margin">

						<!-- The id="invert-slideshow" and id="invert-text" are used for the responsive mode under 1025px. With that, the slideshow is displayed after the text, looking better for the user experience. If you don't want to invert these divs, just remove the id.-->
						<div id="invert-slideshow" class="col-xs-12 col-sm-6 col-lg-6 slideshow-about split-section"></div>

						<div id="invert-text" class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section">

							<div class="left-center-part">

								<h2 style="color: #003159">Semblanza</h2>

								<p style="text-align: justify; color:#003159;">{!! $candidate->semblanza !!}</p>

                            </div>



						</div>

					</div>

				</section>

			</div>
			<!-- +++ END - About +++ -->
            @endif

<!-- +++ START - Services +++ -->
@if(($candidate->propuesta1) != null || ($candidate->propuesta1) != '')
<div class="section" id="section2" >

    <section id="services" class="text-left-block">

        <div class="row row-no-margin">

            <div class="col-xs-12 col-sm-12 col-lg-12 left-center-text split-section">

                <div class="left-center-part">

                    <h2 style="color: #003159">Propuestas</h2>

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

                                        <h3 style="color: #003159">PROPUESTA 1</h3>

                                        <p style="text-align: justify; color:#003159">{{$candidate->propuesta1}}</p>

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-lg-4 block-services">

                                        <span class="icon-services"><ion-icon name="shield-checkmark-outline"></ion-icon></span>

                                        <h3 style="color: #003159">PROPUESTA 2</h3>

                                        <p style="text-align: justify; color:#003159">{{$candidate->propuesta2}}</p>

                                    </div>

                                    <div class="col-xs-12 col-sm-3 col-lg-4 block-services">

                                        <span class="icon-services"><ion-icon name="reader-outline"></ion-icon></span>

                                        <h3 style="color: #003159">PROPUESTA 3</h3>

                                        <p style="text-align: justify; color:#003159">{{$candidate->propuesta3}}</p>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-3 col-lg-4 block-services">

                                        <span class="icon-services icon"><ion-icon name="briefcase-outline"></ion-icon></span>

                                        <h3 style="color: #003159">PROPUESTA 4</h3>

                                        <p style="text-align: justify; color:#003159">{{$candidate->propuesta4}}</p>

                                    </div>

                                    <div class="col-lg-4"></div>

                                    <div class="col-xs-12 col-sm-3 col-lg-4 block-services">

                                        <span class="icon-services"><ion-icon name="hammer-outline"></ion-icon></span>

                                        <h3 style="color: #003159">PROPUESTA 5</h3>

                                        <p style="text-align: justify; color:#003159">{{$candidate->propuesta5}}</p>

                                    </div>

                                </div>

                            </div>

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
@endif
<!-- +++ END - Services +++ -->

<!-- +++ START - Contact +++ -->
<div class="section" id="section4">

    <section id="contact" class="text-left-block">

        <div class="row row-no-margin">

            <div class="col-xs-12 col-sm-6 col-lg-6 left-center-text split-section spec-padding-bottom">

                <div class="left-center-part">

                    <h2 style="color: #003159">Datos de Contacto</h2>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-lg-12">

                            <!-- START - Contact Form -->
                           
                                <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                               <h4> <i class="fa fa-map-marker" aria-hidden="true"></i> {{$candidate->address}} <br><br>
                               <i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{$candidate->phone}}   <br><br>
                               <i class="fa fa-envelope" aria-hidden="true"></i> {{$candidate->email}}  <br><br>


                               </h4>
                        </div>


                        </div>
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

                    <h2 style="color: #003159">Redes Sociales</h2>
                    <br>
                    <br>
                    <br>

                    <div class="row" id="social-form">

                        @if (($candidate->facebook) != null)
                            <div class="col-xs-12 col-sm-{{$col}} col-lg">
                                <a href="{{$candidate->facebook}}" target="_blank"><i style="font-size: 35px !important;" class="fa fa-facebook"></i></a>
                            </div>
                        @endif

                        @if (($candidate->twitter) != null)
                            <div class="col-xs-12 col-sm-{{$col}} col-lg">
                                <a href="{{$candidate->twitter}}" target="_blank"><i style="font-size: 35px !important;" class="fa fa-twitter"></i></a>
                            </div>
                        @endif

                        @if (($candidate->instagram) != null)
                            <div class="col-xs-12 col-sm-{{$col}} col-lg">
                                <a href="{{$candidate->instagram}}" target="_blank"><i style="font-size: 35px !important;" class="fa fa-instagram"></i></a>
                            </div>
                        @endif


                        @php
                        if(($candidate->whatsapp) != null){
                            $whats = "https://api.whatsapp.com/send?phone=52$candidate->whatsapp";
                        }else{
                            $whats = '';
                        }
                        @endphp

                        @if (($candidate->whatsapp) != null)
                            <div class="col-xs-12 col-sm-{{$col}} col-lg">
                                <a href="{{$whats}}" @if($whats != null) target="_blank" @endif><i style="font-size: 35px !important;" class="fa fa-whatsapp"></i></a>
                            </div>
                        @endif


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
                @if (($candidate->facebook) != null)
                <li>
					<a href="{{$candidate->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
				</li>
                @endif

				<!-- Twitter -->
                @if (($candidate->twitter) != null)
                <li>
					<a href="{{$candidate->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
				</li>
                @endif

				<!-- Instagram -->
                @if (($candidate->instagram) != null)
                <li>
					<a href="{{$candidate->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
				</li>
                @endif

                <!-- Whatsapp -->
                @if(($candidate->whatsapp) != null)
				<li>
					<a href="https://api.whatsapp.com/send?phone=52{{$candidate->whatsapp}}" target="_blank"><i class="fa fa-whatsapp"></i></a>
				</li>
                @endif

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
        <!-- Integra2 -->
 <script src='https://code.jquery.com/jquery-3.4.1.min.js' type='text/javascript'></script>
<script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=header&aut=partidoverdeedomex.org" type="text/javascript"></script>
 <script src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=AA171319-AD74-41DF-A441-04AD3EB57837&tipo=body&aut=partidoverdeedomex.org" type="text/javascript"></script>
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
