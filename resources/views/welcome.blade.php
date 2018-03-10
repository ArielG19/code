@extends('layouts.app')
@section('title','Inicio')
@section('content')
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
@include('includes.mapa')
@endsection