<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="{{url('/')}}"> <i class="fas fa-truck"></i> Grupo Logic</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{url('/usuarios')}}">
                      
                      <i class="fas fa-user"></i>
                      <span class="nav-link-text">Usuarios</span>
                    </a>
                  </li>

                </ul>
                <ul class="navbar-nav sidenav-toggler">
                  <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                      <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                      <i class="fas fa-arrow-circle-left"></i> Salir</a>
                  </li>
                </ul>
          </div>
  </nav>
