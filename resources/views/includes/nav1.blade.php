<!-- header section -->
<section role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> 
        <a class="logo" href="">Grupo Logic <i class="fas fa-truck"></i></a>
          <nav class="navigation" role="navigation">
            <ul class="primary-nav">
              <li><a href="/">Inicio</a></li>
              <li><a href="#intro">Promociones</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="{{url('contactanos')}}">Contacto</a></li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" data-toggle="modal" data-target="#exampleModal">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </li>

                    @endif
                

            </ul>
          </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header> 
</section>
<!-- header section -->