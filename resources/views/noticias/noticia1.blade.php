@extends('partials.base')

<!-- Metas -->
@section('descripcion')
En el Edoméx el partido del tucán mostró un crecimiento exponencial en las preferencias electorales para Diputaciones locales y Presidentes Municipales.
@endsection
@section('titulo')
EL VERDE SE POSICIONA EN EDOMEX RUMBO A LAS ELECCIONES DEL 6 DE JUNIO
@endsection
@section('imagen')
{{ asset('images/noticias/n1-og.png')}}
@endsection
@section('url')
https://partidoverdeedomex.org/noticias/7-abril-2021
@endsection
<!-- Metas -->

@section('contenido')
     <!-- Pageheader -->

    <main class="page-header-2">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
            <div class="title-info">9 de Abril, 2021</div>
            <h1 style="text-align: justify" class="display-1">EL VERDE SE POSICIONA EN EDOMEX RUMBO A LAS ELECCIONES DEL 6 DE JUNIO</h1>
          </div>
        </div>
      </div>
    </main>

    <div class="post-gallery">
      <div class="slider-prev icon-chevron-left hidden-xs"></div>
      <div class="slider-next icon-chevron-right hidden-xs"></div>
      <div class="rev_slider_wrapper">
        <div id="rev_slider3" class="rev_slider tp-overflow-hidden fullscreenbanner">
          <ul>

            <!-- Slide 1 -->

            <li data-transition="slotzoom-horizontal"  data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="{{ asset('images/noticias/n1-2.webp')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="page-content">
      <div class="primary">
        <div class="container">
          <article class="post">
            {{-- <div class="row">
              <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <div class="posted-on">
                   <a class="url fn n" href="#">Admin</a>
                    on Dec 15th, 2016
                </div>
              </div>
            </div> --}}
            <div class="entry-content">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                  <h3 style="text-align: justify" class="entry-description">En el <strong>Edoméx</strong> el <strong>partido del tucán</strong> mostró un crecimiento exponencial en las preferencias electorales para <strong>Diputaciones locales</strong> y <strong>Presidentes Municipales.</strong></h3>
                  <p style="text-align: justify">Luego de ser considerado como partido satélite durante años, el Partido Verde Ecologista de México se consolidó como una fuerza real que puede obtener resultados positivos en las próximas elecciones del 6 de junio en el Estado de México.</p>
                  <p style="text-align: justify">Sondeos recientes lo posicionan de forma importante en la entidad debido a que se dio un giro en los liderazgos y en la línea de una política sin mucha grilla, trabajo, estrategia y una dirigencia estatal joven.</p>
                  <p style="text-align: justify">Analistas políticos y los últimos resultados en elecciones recientes prevén que los ciudadanos decidan elegir otras opciones, reales y con posibilidades de hacerse con más espacios de representación cada día. </p>
                  <p style="text-align: justify">Datos anteriores a que iniciara el actual proceso electoral posicionaron al verde en el Edomex como en los primeros lugares de las preferencias en la elección de Presidente de la República, a la altura del partido en el poder, el Revolucionario Institucional (PRI). </p>
                  <p style="text-align: justify">En el Estado de México el partido del tucán mostró un crecimiento exponencial en las preferencias electorales para Diputaciones locales y Presidentes Municipales, por lo que podría ser la sorpresa en la elección de este 6 de junio.</p>
                  <p style="text-align: right"><strong>FUENTE: MVS Noticias</strong></p>
                </div>
              </div>
            </div>
            <div class="entry-footer">
              <div class="row">
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                  {{-- <div class="tags-links">
                    <span>Tags:</span>
                    <a href="">Inspiration</a>,
                    <a href="">Workspace</a>,
                    <a href="">Minimal</a>,
                    <a href="">Decoation</a>
                  </div> --}}
                  <div class="post-share">
                    <span>Comparte:</span>
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://partidoverdeedomex.org/noticias/7-abril-2021" class="icon ion-social-facebook"></a>
                    <a target="_blank" href="https://twitter.com/intent/tweet?text=&url=https://partidoverdeedomex.org/noticias/7-abril-2021&hashtags=" class="icon ion-social-twitter"></a>
                    <a target="_blank" href="https://api.whatsapp.com/send?text=https://partidoverdeedomex.org/noticias/7-abril-2021" class="icon ion-social-whatsapp"></a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          {{-- <section class="related-posts">
            <div class="row">
              <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <h6 class="related-post-title">Related Posts</h6>
              </div>
            </div>
            <div class="news-carousel owl-carousel">
              <div class="news-item">
                <img alt="" src="images/news/1-370x370.jpg">
                <div class="news-hover">
                  <div class="hover-border"><div></div></div>
                  <div class="content">
                    <div class="time">Dec 15th, 2016</div>
                    <h3 class="news-title">Discover Architecture Of Bario</h3>
                    <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                  </div>
                  <a class="read-more" href="#">Continue</a>
                </div>
              </div>
              <div class="news-item">
                <img alt="" src="images/news/2-370x370.jpg">
                <div class="news-hover">
                  <div class="hover-border"><div></div></div>
                  <div class="content">
                    <div class="time">Dec 15th, 2016</div>
                    <h3 class="news-title">Discover Architecture Of Bario</h3>
                    <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                  </div>
                  <a class="read-more" href="#">Continue</a>
                </div>
              </div>
              <div class="news-item">
                <img alt="" src="images/news/3-370x370.jpg">
                <div class="news-hover">
                  <div class="hover-border"><div></div></div>
                  <div class="content">
                    <div class="time">Dec 15th, 2016</div>
                    <h3 class="news-title">Discover Architecture Of Bario</h3>
                    <p class="news-description">Lorem ipsum dolor sit amet, consect etur adipiscing elit. Mauris vel auctorol est. Integer nunc ipsum...</p>
                  </div>
                  <a class="read-more" href="#">Continue</a>
                </div>
              </div>
            </div>
          </section> --}}
        </div>
      </div>
      {{-- <section class="section-comments">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                <div class="section-add-comment">
                  <div class="comments">
                    <div class="comments-area">
                      <h6 class="comments-title">02 Comments</h6>
                      <ol class="comment-list">
                        <li class="comment">
                          <article class="comment-body">
                            <div class="avatar">
                              <img alt="" src="images/users/1-70x70.jpg" height="70" width="70">
                            </div>
                            <div class="comment-content">
                              <div class="comment-metadata">
                                <b class="fn"><a href="">Daniel Vandaft</a></b> -
                                <a class="comment-time" href="http://test.paul-themes.com/wp/felix/felix-demo/2012/01/03/template-comments/#comment-6">
                                  <time datetime="">
                                    Jul 17,2015 at 15 hours ago </time>
                                </a>
                              </div>
                              <p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. Lorem In euismod urna ac massa adipiscing interdum.</p>
                              <div class="reply"><a rel="nofollow" class="comment-reply-link" href='#'>Reply</a></div>
                            </div>
                          </article>
                        </li>
                        <li class="comment">
                          <article class="comment-body">
                            <div class="avatar">
                              <img alt="" src="images/users/2-70x70.jpg" height="70" width="70">
                            </div>
                            <div class="comment-content">
                              <div class="comment-metadata">
                                <b class="fn"><a href="">Vanessa Elina</a></b> -
                                <a class="comment-time" href="http://test.paul-themes.com/wp/felix/felix-demo/2012/01/03/template-comments/#comment-6">
                                  <time datetime="">
                                    Jul 17,2015 at 15 hours ago </time>
                                </a>
                              </div>
                              <p>Comment example here. Nulla risus lacus, vehicula id mi vitae, auctor accumsan nulla. Sed a mi quam. Lorem In euismod urna ac massa adipiscing interdum.</p>
                              <div class="reply"><a rel="nofollow" class="comment-reply-link" href='#'>Reply</a></div>
                            </div>
                          </article>
                        </li>
                      </ol>
                    </div>
                  </div>
                  <div class="comment-respond">
                    <h6 class="comment-reply-title">Post a comment</h6>
                    <form class="js-form">
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <input type="text" name="name" required placeholder="Name*">
                        </div>
                        <div class="form-group col-sm-6">
                          <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-12">
                          <input type="text" placeholder="Subject (Optinal)">
                        </div>
                        <div class="form-group col-sm-12">
                          <textarea name="message"  required  placeholder="Message*"></textarea>
                        </div>
                        <div class="col-sm-12"><button type="submit" class="btn">Post Comment</button></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
    </div>

    @endsection
