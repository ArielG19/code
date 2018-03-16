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
      <h2>Nuestros servicios</h2>
      <p>
        Servicios de transporte de carga terrestre y mudanzas con monitoreo GPS. <br>
       Con una cobertura total del territorio nacional. <br>
        Contamos con capacidades de transporte desde 2 hasta 8 toneladas y rastras de 37, 40, 45 y 48 pies. </p>
    </div>
    <div class="row" style="padding-top: 250px;padding-bottom: 140px;">
        <div class="col-sm-6 col-md-4">
                <img style="margin-left: 70px;" src="/estilos/images/cam.png" alt="Generic placeholder image" width="140" height="140">
                
                <h3 style="margin-left: 60px;">Transporte de Carga</h3>
                <hr style="border: solid 1px;">
                <p> 
                    Ofrecemos este servicio con capacidad de carga de 2, 4, 6, 8 y 12 toneladas, resguardando los productos que se estén trasladando en nuestros vehículos. Contamos con un sistema de supervision en tiempo real a través de equipos GPS para su mayor tranquilidad durante todo el recorrido.
                </p>
        </div>
        <div class="col-sm-6 col-md-4">
                <img style="margin-left: 70px;" src="/estilos/images/map.png" alt="Generic placeholder image" width="140" height="140">
                <h3 style="margin-left: 60px;"> Distribución Nacional</h3>
                <hr style="border: solid 1px;">
                <p> 
                    Contamos con un servicio especializado para el traslado de grandes volúmenes en todo el territorio nacional, comprometidos con darle un servicio completo y seguro, garantizamos toda la gestión de sus envíos apegandonos a sus necesidades para desarrollar una logística óptima y personalizada.
                </p>
                
        </div>
        <div class="col-sm-6 col-md-4">
                <img style="margin-left: 70px;" src="/estilos/images/ca.png" alt="Generic placeholder image" width="140" height="140">
                
                <h3 style="margin-left: 60px;"> Mudanza y Menaje </h3><hr style="border: solid 1px;">
                <p> Brindamos servicios para traslados de oficinas y residenciales a nivel local y nacional. Contamos con la debida experiencia para organizar de forma cuidadosa el mobiliario y demás enseres que se deban trasladar para garantizar las perfectas condiciones de los mismos y hacer de su mudanza un proceso eficaz, cómodo y tranquilo.
                </p>
                
        </div>
    </div>
  </div>
</section>
<!-- intro section -->
@include('includes.mapa')
@endsection