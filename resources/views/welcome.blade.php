<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Liga Contra el Cáncer</title>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="images/x-icon" href="{{url('bolas/favicon/favicon.ico')}}" />

    <meta name="description" content="La Liga Contra el Cáncer es la primera institución del Perú en realizar acciones de detección y prevención del cáncer. En sus más de 60 años de funcionamiento, ha contribuido a disminuir la alta incidencia de la enfermedad en nuestro país a través de acciones de prevención. ">
    <meta name="keywords" content="Liga, cancer, peru, prevencion, campaña">
    <meta name="author" content="Orange-360">
    <meta name="author" content="Luis Gomez">


      <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <meta name="_token" content="{!! csrf_token() !!}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('bolas/css/open-iconic-bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('bolas/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('bolas/css/aos.css') }}">

         <!-- Jq alertify-->
    {{ Html::style('bolas/css/alertify.min.css') }}

    <link rel="stylesheet" href="{{ asset('bolas/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bolas/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('bolas/css/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('bolas/css/icomoon.css') }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('bolas/css/style.css') }}">

     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130677453-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130677453-1');
    </script>

    <style type="text/css">
      .error{
        font-size: 16px;
        color:#ff0000;
      }
    </style>

  </head>
  <body>


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
    <div class="container">
      <a class="navbar-brand " href="#"><img src="{{ asset('bolas/images/LCC.png') }}" class="" width="120px" height="60px"></a>

      <a class="navbar-brand d-sm-none d-md-block" href="#"><img src="{{ asset('bolas/images/logo.png') }}" class="d-sm-none d-md-block" width="120px" height="40px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="#banner"  class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="#jingle" class="nav-link js-scroll-trigger" >Jingle Balls</a></li>
          <li class="nav-item"><a href="#schedule" class="nav-link js-scroll-trigger" >Agenda tu cita</a></li>
          <li class="nav-item"><a href="#spokesmen" class="nav-link js-scroll-trigger" >Voceros</a></li>
          <!--<li class="nav-item"><a href="#contact" class="nav-link js-scroll-trigger" >Contacto</a></li>-->

          <li class="nav-item cta"><a href="https://m.me/LigaCancer" target="_blank" class="nav-link"><span>Adquiere tu Pack</span></a></li>
          <a class="navbar-brand tex-center d-none d-sm-block" href="#"><img src="images/logo.png" class="d-md-none d-xl-none d-sm-block" width="200px" height="80px"></a>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url({{ asset('bolas/images/background.png') }});" id="banner">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth pr-md-4 ftco-animate align-self-sm-center text-center" data-scrollax=" properties: { translateY: '80%' }">
            <img src="{{ asset('bolas/images/3.png') }}" class="img-fluid" width="430px" height="500px"><br>
            <a class="btn btn-lg btn-warning text-white" href="https://m.me/LigaCancer" target="_blank"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Adquiere tu Pack </a>
          </div>

          <div class="one-half align-self-md-end align-self-sm-center" >
            <div class="slider-carousel owl-carousel" style="margin-bottom:129px">
                <div class="item">
                      <img src="{{ asset('bolas/images/2.png') }}" class="img-fluid img"alt="">
                  </div>
                  <div class="item">
                      <img src="{{ asset('bolas/images/2.png') }}" class="img-fluid img"alt="">
                  </div>
                  <div class="item">
                      <img src="{{ asset('bolas/images/2.png') }}" class="img-fluid img"alt="">
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section" style="background-image: url({{ asset('bolas/images/background.png') }});" id="jingle">
        <div class="container">
        <div class="row justify-content-center mb-5 mt-5">
          <div class="col-md-6  ftco-animate">
            <a href="#" class="js-video-button"  data-video-id='7ylTTiv0NKs'>
              <img src="{{ asset('bolas/images/jingle.png') }}" class="img-fluid "  alt="">
            </a>
         </div>
          <div class="col-md-6 text-center ftco-animate">
            <h2 class="mb-4  text-white">“JINGLE BALLS”</h2>
             <p class="text-white">
              Campaña de la Liga Contra el Cáncer que tiene por objetivo invitar a los varones a regalarse o regalar salud en esta navidad.
            </p>
          </div>
        </div>

        </div>
    </section>


    <section id="buy" class="ftco-section contact-section " style="background-image: url({{ asset('bolas/images/bg2.png') }});" id="contact">
      <div class="container-fluid">
        <div class="row d-flex  mb-5 contact-info ">
          <div class="col-md-12 mb-4">
            <h2 class="h4 text-center ftco-animate">Packs Jingle Balls</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row">
          <div class="col-md-4">
              <h3 class="text-center ftco-animate"> Opci&oacute;n 1 </h3>
              <div class="item ftco-animate">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/man.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">
                       <strong>PACK JINGLE BALLS PARA VARÓN MENOR DE 40 AÑOS</strong>
                    </p>
                    <p> Incluye 1 tarjeta de despistaje clínico de cáncer de testículos, pene y tetillas + 2 bolas decorativas de navidad. </p>
                    <p>Donaci&oacute;n: S/. 50.00</p>
                     <a class="btn btn-lg btn-warning text-white text-center btnBuysA"  href="https://m.me/LigaCancer" style="margin-left: 20%" target="_blank"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Adquiere tu Pack </a>

                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <h3 class="text-center ftco-animate"> Opci&oacute;n 2 </h3>
             <div class="item">
                <div class="card ftco-animate">
                  <img class="card-img-top" src="{{ asset('bolas/images/man.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">
                          <strong>PACK JINGLE BALLS PARA VARÓN MAYOR DE 40 AÑOS</strong>
                    </p>
                    <p>  Incluye 1 tarjeta de consulta urológica y examen de PSA (Prueba de Antígeno Prostático) + 2 bolas decorativas de navidad. </p>
                    <p>Donaci&oacute;n: S/. 90.00</p>
                    <a class="btn btn-lg btn-warning text-white text-center btnBuysA"  href="https://m.me/LigaCancer" style="margin-left: 20%" target="_blank"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Adquiere tu Pack </a>
                  </div>
                </div>
              </div>

          </div>
          <div class="col-md-4">
            <h3 class="text-center ftco-animate"> Opci&oacute;n 3 </h3>
             <div class="item">
                <div class="card ftco-animate">
                  <img class="card-img-top" src="{{ asset('bolas/images/woman.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                     <p class="card-text text-black " style="color: #000">
                      <strong>PACK JINGLE BALLS PARA MUJERES</strong>
                    </p><br>
                    <p>Incluye una tarjeta de despistaje clínico de cáncer de cuello uterino, mama, piel, ganglios y tiroides + 2 bolas decorativas de navidad. </p>
                    <p>Donaci&oacute;n: S/. 50.00</p>
                     <a class="btn btn-lg btn-warning text-white btnBuysA"   href="https://m.me/LigaCancer" target="_blank" style="margin-left: 20%"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Adquiere tu Pack </a>
                  </div>
                </div>
              </div>



          </div>
        </div>

      </div>
    </section>



    <section class="ftco-section" style="background-image: url({{ asset('bolas/images/bg2.png') }});" id="schedule">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">

            <h2 class="mb-4">Agenda tu cita</h2>
          </div>
            </div>
            <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
               <div class="d-md-flex">
                <div class="col-md-6">
                  <div class="one-forth order-last align-self-center ftco-animate">
                    <img src="{{ asset('bolas/images/text_agendatucita.png') }}" class="img-fluid" wiclass="border" width="440px" height="360px" alt="">
                     <div class="w-100"></div>
                      <div class="w-100"></div>
                  </div>
                </div>
                <div class="col-md-6 ftco-animate" >
                  <div class="one-half order-first mr-md-5 align-self-center ftco-animate">
                    <h2 class="mb-4">
                     <form id="registerForm" method="get" action="">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <input type="text" name="last_name" class="form-control" placeholder=" Apellido paterno">
                        </div>
                        <div class="form-group">
                          <input type="text" name="mother_last_name" class="form-control" placeholder="Apellido materno">
                        </div>
                        <div class="form-group">
                          <input type="text"  name="email" class="form-control" placeholder="Correo">
                        </div>
                        <div class="form-group">
                          <input type="text" name="cellphone" id="cellphone" class="form-control" placeholder="Ejemplo: (codigo)000-000-000">

                        </div>

                        <div class="w-100"></div>
                        <div class="form-group">

                             <div class="g-recaptcha" data-sitekey="6LehqYAUAAAAABuTXtnqYmClB36tHoo17k245Pqj"
                          data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"
                          > </div>

                             <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary py-3 px-5 button-register" disabled>Registrar</button>
                          <!--<input type="submit" value="Registrar" disabled class="btn btn-primary py-3 px-5">-->
                        </div>
                        <input type="hidden" name="path" value="{{route('template.registerForm')}}">
                      </form>
                    </h2>
                  </div>
                </div>
                 </div>
            </div>
          </div>
        </div>
        </div>
    </section>

    <section class="ftco-section testimony-section " style="background-image: url({{ asset('bolas/images/bg2.png') }});" id="spokesmen">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Voceros</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12 col-sm-6">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <a href="" class="js-video-button"  data-video-id='UfknM__OBDM'>
              <div class="item">
                <div class="card" >
                  <img class="card-img-top" src="{{ asset('bolas/images/person8.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Aldo Miyashiro - <small>Conductor de Televisiòn</small></p>


                  </div>
                </div>
              </div>
              </a>
              <a href="" class="js-video-button"  data-video-id='__Qk89LY0oM'>
              <div class="item ">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person7.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Erick Elera - <small>Actor</small></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="" class="js-video-button"  data-video-id='ZIT6c3g2eIw'>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person6.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Guillermo Castañeda - <small>Actor</small></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="" class="js-video-button"  data-video-id='xd-Dt9nFPDc'>
              <div class="item ">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person1.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Luigi Monteghirfo - <small>Reportero</small></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="" class="js-video-button"  data-video-id='weedhxhyqo4'>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person5.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Mart&iacute;n Arredondo - <small>Productor de Televisi&oacute;n</small></p>
                  </div>
                </div>
              </div>
             </a>
              <a href="" class="js-video-button"  data-video-id='6cnxtnpsDuY'>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person4.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Miguel Santivañez - <small>Arbitro FIFA</small></p>
                  </div>
                </div>
              </div>
             </a>
             <a href="" class="js-video-button"  data-video-id='yeMR94b_UY4'>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person3.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">Askia Bernaola - <small>Actriz</small></p>
                  </div>
                </div>
              </div>
             </a>
             <a href="" class="js-video-button"  data-video-id='9dUoVscZ6Sc'>
              <div class="item">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('bolas/images/person2.png') }}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-black" style="color: #000">V&iacute;ctor Hugo D&aacute;vila - <small>Reportero</small></p>
                  </div>
                </div>
              </div>
             </a>



            </div>
          </div>
        </div>
      </div>
    </section>
<!--
    <section class="ftco-section contact-section " style="background-image: url({{ asset('bolas/images/bg2.png') }});" id="contact">
      <div class="container">
        <div class="row d-flex  mb-5 contact-info ">
          <div class="col-md-12 mb-4">
            <h2 class="h4 text-center ftco-animate">Contacto</h2>
          </div>
          <div class="w-100"></div>
        </div>
        <div class="row block-9 justify-content-center ftco-animate">
          <div class="col-md-6 col-md-offset-6 pr-md-5">
            <form id="registerForm3" method="get" action="#">
              <div class="form-group">
                <input type="text" name="name" class="form-control ftco-animate" placeholder="Tú Nombre">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control ftco-animate" placeholder="Tú Correo">
              </div>
              <div class="form-group">
               <textarea class="form-control ftco-animate" name="message" rows="4" placeholder="Tú Mensaje"></textarea>
              </div>


              <div class="form-group">

                 <button type="submit" class="btn btn-primary py-3 px-5 button-register3 ftco-animate">Escribenos</button>


               <input type="hidden" name="path_contact" value="{ {route('template.ContactForm')}}">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>-->



    <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="background-image: url({{ asset('bolas/images/background.png') }});">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-5">
               <div class="block-23 mb-3 ftco-animate">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"><b>Sedes</b><br> Av. Brasil 2746, Pueblo Libre <br> Av. Nicolás de Piérola 727, Lima <br> Av. Angamos Este 2514, Surquillo </span></li>
                </ul>
              </div>
          </div>
          <div class="col-md-5">
               <div class="block-23 mb-3 ftco-animate">
                <ul>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text"><b>Central telefónica</b><br>
                   (01) 204 0404</span></a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="row mb-5 ">

          <div class="col-md offset-md-3">

              <div class="">
                  <ul class="ftco-footer-social offset-sm-1 offset-md-2 ">
                    <li class="ftco-animate"><a href="https://twitter.com/LigaCancerPeru"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href=https://www.facebook.com/LigaCancer"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCSm6XdI7acLsUq_KXTt0Bhg/videos"><span class="icon-youtube"></span></a></li>
                    <li class="ftco-animate"><a href="https://www.instagram.com/ligacancer/"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>

            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 text-center ftco-animate">

            <p>
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reservados | Liga Contra el Cáncer <i class="icon-heart" aria-hidden="true"></i>

          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('bolas/js/jquery.min.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('bolas/js/popper.min.js') }}"></script>

  <script src="{{ asset('bolas/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('bolas/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('bolas/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('bolas/js/aos.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('bolas/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('bolas/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('bolas/js/jquery.snow.min.1.0.js') }}"></script>
  <script src="{{ asset('bolas/js/scrolling-nav.js') }}"></script>
  {{ Html::script('bolas/js/jquery.validate.min.js')}}
  {{ Html::script('bolas/js/alertify.min.js') }}
  {{ Html::script('bolas/js/jquery.mask.min.js') }}

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('bolas/js/jquery-modal-video.min.js') }}"></script>

  <!-- recapcha -->

  <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


  <script src="{{ asset('bolas/js/main.js') }}"></script>
  <script src="{{ asset('bolas/js/js_own.js') }}"></script>


    @include('partials.modal')
  </body>
</html>