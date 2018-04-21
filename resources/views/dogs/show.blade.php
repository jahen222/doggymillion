<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Doggymillion</title>
        <meta name="description" content="Buscamos a través de nuestra web fomentar la buena convivencia y Unión de propietarios y mascotas además de crear una base de datos perpetua de 1 millón de fotos de nuestros perritos en la red Internet! Por sólo 1$ Por cada foto.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta itemprop="og:title" property="og:title" content="{{ $dog->name }}" />
        <meta itemprop="og:type" property="og:type" content="article" />
        <meta itemprop="og:image" property="og:image" content="{{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture', array('width' => '820', 'height' => '572')) }}" />
        <meta itemprop="og:description" property="og:description" content="{{ $dog->bio }}" />
		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('html_front/img/favicon.ico') }}">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500italic,500,400italic,700italic,900,100,300' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/bootstrap.min.css') }}">
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/font-awesome.min.css') }}">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('html_front/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('html_front/css/owl.transitions.css') }}">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('html_front/lib/css/nivo-slider.css') }}" type="text/css" />
		<link rel="stylesheet" href="{{ asset('html_front/lib/css/preview.css') }}" type="text/css" media="screen" />
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/jquery-ui.css') }}">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/meanmenu.min.css') }}">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/animate.css') }}">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/normalize.css') }}">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/main.css') }}">
		<!-- shortcodes CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/shortcodes/shortcodes.css') }}">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/style.css') }}">
        <!-- Custom - Theme Color CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/color-two.css') }}">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('html_front/css/responsive.css') }}">
		<!-- modernizr JS
		============================================ -->
        <script src="{{ asset('html_front/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
      <div class="wrapper home-v2">
              <!-- Start Header Area -->
      	<div class="spectar"></div>
        <header id="header" class="solid-bg-header clear">
          <div class="header-v2">
            <!-- Start Header Top -->
            <div class="header-top clear">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 hidden-xs hidden-sm">
                    <div class="header-top-left header-top-info">
                      <a href="{{ route('dog.register') }}" class="btn btn-success" style="background-color: #07b193; border-color:#07b193;">Registra tu Perro</a>
                      <p><a href="#"><i class="fa fa-phone"></i>+59-167630096</a></p>
                      <p><a href="#"><i class="fa fa-envelope"></i>doggymillon@outlook.com</a></p>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="header-top-right pull-right">
                      <ul>
                        <li>
                          <div id="google_translate_element"></div>
                        </li>
                        <li class="search-bar">
                          <div class="search-form">
                            <form action="{{ route('search') }}">
                              <button type="submit"><i class="fa fa-search"></i></button>
                              <input type="text" placeholder="Buscador" name="search">
                            </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Header Bottom -->
            <div class="header-bottom">
              <div class="container">
                <div class="row hidden-xs hidden-sm">
                  <!-- Start Main Menu -->
                    <div class="col-md-12 text-center">
                        <div class="menu-wrap">
                            <nav class="primary-menu">
                                <ul>
                                    <li class="current"><a href="{{ route('inicio') }}">Inicio</a></li>
                                    <li><a href="{{ route('about') }}">Nosotros</a></li>
                                    <li><a href="{{ route('paises') }}">Países</a></li>
                                    <li><a href="{{ route('razas') }}">Razas</a></li>
                                    <li class="menu-logo-2">
                                      <div class="header-logo-2">
                                        <a href="{{ route('inicio') }}"><img src="{{ asset('assets/256_pixels/1_Primary_logo_on_transparent_256_v2.png') }}" alt="main logo" /></a>
                                      </div>
                                    </li>
                                    <li><a href="https://www.facebook.com/Doggymillon-190986285034679/">Facebook</a></li>
                                    <li><a href="https://instagram.com/download/?r=7555864405">Instagram</a></li>
                                    <li><a href="{{ route('instruction') }}">Instrucciones</a></li>
                                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                  <!-- End Main Menu -->
                </div>
                  <div class="col-sm-3 hidden-md hidden-lg">
                    <div class="mobile-logo">
                      <a href="{{ route('inicio') }}"><img src="{{ asset('assets/256_pixels/mobile.png') }}" alt="main logo" /></a>
                    </div>
                  </div>
                  <div class="col-sm-9 hidden-md hidden-lg">
                    <!-- Main Menu End -->
                    <div class='mobile-menu-area'>
                      <nav id="mobile-menu">
                        <ul>
                          <li><a href="{{ route('inicio') }}">Inicio</a></li>
                          <li><a href="{{ route('about') }}">Nosotros</a></li>
                          <li><a href="{{ route('paises') }}">Países</a></li>
                          <li><a href="{{ route('razas') }}">Razas</a></li>
                          <li><a href="https://www.facebook.com/Doggymillon-190986285034679/">Facebook</a></li>
                          <li><a href="https://instagram.com/download/?r=7555864405">Instagram</a></li>
                          <li><a href="{{ route('instruction') }}">Instrucciones</a></li>
                          <li><a href="{{ route('contact') }}">Contacto</a></li>
                        </ul>
                      </nav>
                    </div>
                    <!-- Main Menu End -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Header Bottom -->
          </div>
        </header>
        <!-- End Header Area -->

  <section class="course-details-area padding100 bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-8 left-side-wrap">
          <!-- Start Single Courses -->
          <div class="single-course big-post">
            <div class="course-thumb">
              {{ Html::image(route('dogimage', ['image' => $dog->image]), 'a picture', array('width' => '820', 'height' => '572')) }}
              <div class="price-sticker">
                <span>{{ $dog->name }}</span>
              </div>
            </div>
            <div class="course-content">
              <h2 class="course-title"><a href="#">{{ $dog->name }}</a></h2>
              <div class="author"><a href="#">Dueño</a> {{ $dog->owner_name }} <a href="#">Bio:</a> {{ $dog->bio }}</div>
            </div>
            <div class="rating">
              <ul>
                <li>
                  <p><span><i class="fa fa-book"></i></span>Correo: {{ $dog->owner_email }}</p>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Single Courses -->
        </div>
        <div class="col-md-4 right-side-wrap">
          <div class="right-side-inner">
            <aside class="widget wg-courses-detail">
              <h3 class="sidebar-title">Detalles</h3>
              <ul class="wg-courses-detail-menu">
                <li><h5>Edad <span>{{ $dog->age }} años</span></h5></li>
                <li><h5>Estado <span>@if( $dog->dead  =='1') Muerto @else Vivo @endif</span></h5></li>
                <li><h5>Genero <span>{{ $dog->gender }}</span></h5></li>
                <li><h5>Raza <span>{{ $dog->race->name }}</span></h5></li>
                <li><h5>País <span>{{ $dog->country->name }}</span></h5></li>
              </ul>
            </aside>
            <div class="form-group">
              <br>
              <a href="{!! route('inicio') !!}" class="btn btn-default">Atras</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- Start Brands logo Area -->
<div class="row padding-t50 bg-white-2">
  <div class="brand-logo-area solid-bg-2">
    <div class="brand-list">
      <div class="single-brand">
        <a href="#"></a><img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
      <div class="single-brand">
        <img src="{{ asset('assets/Imagenes/huella.png') }}" alt="Brand Image" />
      </div>
    </div>
  </div>
</div>
<!-- End Brands logo Area -->
<!-- Start  Footer  Area -->
<footer id="footer-area">
  <!-- Start Footer Top Area -->
  <div class="footer-top-area overlay-bg padding50">
    <div class="container">
      <div class="row">
        <div class="newsletter">
          <div class="col-md-6 col-md-offset-3 text-center">
            <div class="footer-logo">
              <a href="{{ route('inicio') }}"><img src="{{ asset('assets/256_pixels/1_Primary_logo_on_transparent_256_v2.png') }}" alt="footer Logo" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-4">
          <div class="footer-top-menu">
            <h3 class="widget-title">Objetivo</h3>
            <div class="fo-aboutus-container">
              <p>Buscamos a través de nuestra web fomentar la buena convivencia y Unión de propietarios y mascotas además de crear una base de datos perpetua de 1 millón de fotos de nuestros perritos en la red Internet! Por sólo 1$ Por cada foto.</p>
              <address>
                <p><strong>Ubicación :</strong> 650-698 9th St, Sacramento, CA 95814, EEUU.</p>
                <p><strong>Email : </strong><a href="#">doggymillon@outlook.com </a></p>
                <p><strong>Contacto : </strong><a href="#">+59-167630096</a></p>
              </address>
              <div class="footer-social-bookmark">
                <ul>
                  <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_blank" title="Instagram" href="#" class="instagram social-icon"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="footer-top-menu">
            <h3 class="widget-title">Visita</h3>
            <div class="fo-course-container">
              <ul>
                <li>
                  <a href="{{ route('instruction') }}">Instrucciones</a>
                </li>
                <li>
                  <a href="{{ route('about') }}">Nosotros</a>
                </li>
                <li>
                  <a href="{{ route('contact') }}">Contacto</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 hidden-sm">
          <div class="footer-top-menu">
            <h3 class="widget-title">twitter</h3>
            <div class="fo-twitter-feed-container">
              <ul>
                <li>
                  <a href="#" class="user-name">@Jahen222</a>
                  <p>Muy divertida, poder ver los perros de los demas es muy divertido.</p>
                </li>
                <li>
                  <a href="#" class="user-name">@HenryJM</a>
                  <p>En algun punto los perros me hacen una persona mas feliz, espero que puedan llegar a 1000000.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="footer-top-menu">
            <h3 class="widget-title">Siguenos en @doggymillon</h3>
            <div class="blog-flickr">
              <ul>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins1.jpg') }}" alt=""></a></li>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins2.jpg') }}" alt=""></a></li>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins3.jpg') }}" alt=""></a></li>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins4.jpg') }}" alt=""></a></li>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins5.jpg') }}" alt=""></a></li>
                <li><a href="https://instagram.com/download/?r=7555864405"><img src="{{ asset('assets/Imagenes/ins6.jpg') }}" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Top Area -->
  <!-- Start Footer Bottom Area -->
  <div class="footer-bottom-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="copyright-wrap text-center">
            <p>&copy; 2018 <a href="">www.doggymillon.com</a>, All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Bottom Area -->
</footer>
<!-- End Footer  Area -->
<div class="spectar"></div>
</div>


<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="modal-product">
          <!-- Start product images -->
          <div class="product-images">
            <div class="main-image images">
              <img alt="" src="{{ asset('html_front/img/product/quickview.jpg') }}">
            </div>
          </div>
          <!-- end product images -->
          <div class="product-info">
            <h1>Adobe Photoshop Tuts</h1>
            <div class="price-box-3">
              <div class="s-price-box">
                <span class="new-price">$17.20</span>
                <span class="old-price">$45.00</span>
              </div>
            </div>
            <a href="shop.html" class="see-all">See all features</a>
            <div class="quick-add-to-cart">
              <form method="post" class="cart">
                <div class="numbers-row">
                  <input type="number" id="french-hens" value="3">
                </div>
                <a href="#" class="estut-btn-v2 color-v2">Add to cart</a>
              </form>
            </div>
            <div class="quick-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
            </div>
            <div class="social-sharing">
              <div class="widget widget_socialsharing_widget">
                <h3 class="widget-title-modal">Share this product</h3>
                <ul class="social-icons">
                  <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                  <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div><!-- .product-info -->
        </div><!-- .modal-product -->
      </div><!-- .modal-body -->
    </div><!-- .modal-content -->
  </div><!-- .modal-dialog -->
</div>
<!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->
<!-- jquery
============================================ -->
  <script src="{{ asset('html_front/js/vendor/jquery-1.11.3.min.js') }}"></script>
<!-- mixitup JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.mixitup.js') }}"></script>
<!-- bootstrap JS
============================================ -->
  <script src="{{ asset('html_front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('html_front/js/bootstrap-select.min.js') }}"></script>
<!-- wow JS
============================================ -->
  <script src="{{ asset('html_front/js/wow.min.js') }}"></script>
<!-- price-slider JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery-price-slider.js') }}"></script>
<!-- meanmenu JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.meanmenu.js') }}"></script>
<!-- owl.carousel JS
============================================ -->
  <script src="{{ asset('html_front/js/owl.carousel.min.js') }}"></script>
<!-- counterup JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.counterup.min.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- sliphover JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.sliphover.min.js') }}"></script>
<!-- Nivo slider js
============================================ -->
<script src="{{ asset('html_front/lib/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
<script src="{{ asset('html_front/lib/home.js') }}" type="text/javascript"></script>
<!-- scrollUp JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.scrollUp.min.js') }}"></script>
  <!-- bxslider JS
============================================ -->
  <script src="{{ asset('html_front/js/jquery.bxslider.min.js') }}"></script>
<!-- masonry JS
============================================ -->
  <script src="{{ asset('html_front/js/masonry.pkgd.min.js') }}"></script>
<!-- plugins JS
============================================ -->
  <script src="{{ asset('html_front/js/plugins.js') }}"></script>
<!-- main JS
============================================ -->
  <script src="{{ asset('html_front/js/main.js') }}"></script>

  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
