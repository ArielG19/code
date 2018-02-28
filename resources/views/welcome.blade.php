@extends('layouts.app')
@section('title','Inicio')
@section('content')
<!-- header section -->

<section role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> 
        <a class="logo" href=""><span class="icon icon-genius"> </span> Grupo Logic</a>
          <nav class="navigation" role="navigation">
            <ul class="primary-nav">
              <li><a href="#home">Inicio</a></li>
              <li><a href="#intro">Promociones</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#contact">Contacto</a></li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                

            </ul>
          </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header> 
</section>
<!-- header section -->


    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(estilos/images/slider/mo.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
              <div class="item" style="background-image: url(estilos/images/slider/mo.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Best Solution</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore.</p>
                                    <a class="btn btn-primary btn-lg" href="#package">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Our Products</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="/estilos/images/slider/mo.jpg" alt="img">
            <div class="caption">
              <h3>Social Media</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="/estilos/images/slider/mo.jpg" alt="img">
            <div class="caption">
              <h3>Digital Curve</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="/estilos/images/slider/mo.jpg" alt="img">
            <div class="caption">
              <h3>E-Commerce</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum</p>

            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- intro section -->

<!-- footer1 section -->
<section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
                  <div class="col-md-12">
                    <blockquote>
                      <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                         semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                      <p>Chris Mentsl</p>
                    </blockquote>
                  </div>
    </div>
  </div>
</section>
<!-- footer1 section -->

<!-- Footer section -->
<footer class="footer">
    <div class="container-fluid">
        <div id="map-row" class="row">
          <div class="col-xs-12">
                  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124838.69816625335!2d-86.32850178569495!3d12.097818083973918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f71560dd907880b%3A0x6c5ef4a2144f4c6a!2sManagua!5e0!3m2!1sen!2sni!4v1519606791745"></iframe>

                <div id="map-overlay" class="col-xs-5 col-xs-offset-6" style="">
              <h2 style="margin-top:0;color:#fff;">Contact us</h2>
              <address style="color:#fff;">
                <strong>Company name</strong><br>
                1234 Street Dr.<br>
                Vancouver, BC<br>
                Canada<br>
                V6G 1G9<br>
                <abbr title="Phone">Tel:</abbr> (604) 555-4321
              </address>
              © 2018 Company Name. Template by <a target="_blank" href="http://webthemez.com/" title="Bootstrap Themes and HTML Templates">WebThemez.com</a>
            </div>
          </div>
      </div>
  </div>
</footer>
<!-- Footer section -->
@endsection