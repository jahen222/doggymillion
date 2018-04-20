<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Doggymillion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                      <p><a href="#"><i class="glyphicon glyphicon-user"></i>Contacto: </a></p>
                      <p><a href="tel:+3211234567"><i class="fa fa-phone"></i>+59-167630096</a></p>
                      <p><a href="mailto:admib@bootexperts.com"><i class="fa fa-envelope"></i>hucor_666@hotmail.com</a></p>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="header-top-right pull-right">
                      <ul>
                        <li class="search-bar">
                          <div class="search-form">
                            <form method="get" action="#">
                              <button type="submit"><i class="fa fa-search"></i></button>
                              <input type="text" placeholder="Buscador" id="search" name="search">
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
                                    <li class="current"><a href="{{ route('inicio') }}">Inicio </a></li>
                                    <li><a href="#">Nosotros </a></li>
                                    <li><a href="{{ route('paises') }}">Países </a></li>
                                    <li><a href="#">Contacto </a></li>
                                    <li class="menu-logo-2">
                                      <div class="header-logo-2">
                                        <a href="{{ route('inicio') }}"><img src="{{ asset('assets/256_pixels/1_Primary_logo_on_transparent_256_v2.png') }}" alt="main logo" /></a>
                                      </div>
                                    </li>
                                    <li><a href="#">Otras</a></li>
                                    <li><a href="#">Otras</a></li>
                                    <li><a href="#">Otras</a></li>
                                    <li><a href="#">Otras</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                  <!-- End Main Menu -->
                </div>
                  <div class="col-sm-3 hidden-md hidden-lg">
                    <div class="mobile-logo">
                      <a href="{{ route('inicio') }}"><img src="{{ asset('assets/256_pixels/1_Primary_logo_on_transparent_256_v2.png') }}" alt="main logo" /></a>
                    </div>
                  </div>
                  <div class="col-sm-9 hidden-md hidden-lg">
                    <!-- Main Menu End -->
                    <div class='mobile-menu-area'>
                      <nav id="mobile-menu">
                        <ul>
                          <li><a href="{{ route('inicio') }}">Inicio</a></li>
                          <li><a href="#">Nosotros </a></li>
                          <li><a href="#">Países</a></li>
                          <li><a href="#">Contacto</a></li>
                          <li><a href="#">Otras</a></li>
                          <li><a href="#">Otras</a></li>
                          <li><a href="#">Otras</a></li>
                          <li><a href="#">Otras</a></li>
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

        <!-- Content -->
        @yield('content')

        <!-- Start Brands logo Area -->
        <div class="row padding-t50 bg-white-2">
          <div class="brand-logo-area solid-bg-2">
            <div class="brand-list">
              <div class="single-brand">
                <a href="#"></a><img src="{{ asset('html_front/img/brand/1.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/2.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/3.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/4.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/5.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/6.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/3.png') }}" alt="Brand Image" />
              </div>
              <div class="single-brand">
                <img src="{{ asset('html_front/img/brand/5.png') }}" alt="Brand Image" />
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
                    <div class="newsletter-form">
                      <form action="#" method="get">
                        <input class="email-box" type="email" name="email" id="email" placeholder="Enter your email here..."/>
                        <button type="submit"><i class="fa fa-envelope-o"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="footer-top-menu">
                    <h3 class="widget-title">ABOUT US</h3>
                    <div class="fo-aboutus-container">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sem quis lacinia faucibus.</p>
                      <address>
                        <p><strong>Add :</strong> 12345 Random Str., Random State,
                        Random City, Random Country.</p>
                        <p><strong>Email : </strong><a href="mailto:admin@bootexperts.com ">admin@bootexperts.com </a></p>
                        <p><strong>Phone : </strong><a href="tel:+8801973833508">(01) 123 456 - (01) 659 786</a></p>
                      </address>
                      <div class="footer-social-bookmark">
                        <ul>
                          <li><a target="_blank" href="#" class="facebook"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a target="_blank" href="#" class="twitter"><i class="fa fa-twitter-square"></i></a></li>
                          <li><a target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus-square"></i></a></li>
                          <li><a target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                          <li><a target="_blank" href="#" class="behance"><i class="fa fa-behance-square"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="footer-top-menu">
                    <h3 class="widget-title">Latest Courses</h3>
                    <div class="fo-course-container">
                      <ul>
                        <li>
                          <a href="#">Course of Creative Art</a>
                          <p class="date">Dec 18, 2015</p>
                        </li>
                        <li>
                          <a href="#">Course of Creative Art</a>
                          <p class="date">Dec 18, 2015</p>
                        </li>
                        <li>
                          <a href="#">Course of Creative Art</a>
                          <p class="date">Dec 18, 2015</p>
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
                          <a href="#" class="user-name">@John Doe</a>
                          <p>Aliquam nec elementum odio, non loare congue ligula curabitur. Nulla venenatis malesuada diam volutpat vulputate. Suspendisse et tortor mauris.</p>
                        </li>
                        <li>
                          <a href="#" class="user-name">@John Doe</a>
                          <p>Duis id nulla sodales, dapibus enim sed. Vestibulum lobortis sed sit amet gravida.</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="footer-top-menu">
                    <h3 class="widget-title">FOLLOW US @ INSTAGRAM</h3>
                    <div class="blog-flickr">
                      <ul>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/1.jpg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/2.jpg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/3.jpg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/4.jpg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/5.jpg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('html_front/img/blog/flickr/6.jpg') }}" alt=""></a></li>
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
                    <p>&copy; 2016 <a href="http://bootexperts.com/">Bootexperts.</a> All Rights Reserved</p>
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
      </body>
  </html>
