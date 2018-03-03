 <!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Listo para salir ?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                  </button>
              </div>
              <div class="modal-body">Seleccione "Salir" a continuación si desea finalizar su sesión actual. O  panel si desea regresar a panel de administracion.</div>
              <div class="modal-footer">
                  
                  <a class="btn btn-warning btn-sm" href="{{url('home')}}">Panel</a>
                  <a  class="btn btn-primary btn-lg" href="{{ url('/logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Salir
                  </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                  </form>
              </div>
          </div>
      </div>
</div>