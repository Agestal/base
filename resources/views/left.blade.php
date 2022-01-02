  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ url('dist/img/AdminLTELogo.png') }} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TR peritaciones</span>
    </a>
    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="#" class="nav-link "><i class="nav-icon fas fa-tachometer-alt"></i><p>Menu<i class="right fas fa-angle-left"></i></p></a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('clientes') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('aseguradoras') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aseguradoras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('siniestros') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Siniestro</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>

    </div>

  </aside>