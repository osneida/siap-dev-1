<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <br><br>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Incio <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="propietarios">
              <span data-feather="file"></span>
              Propietarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuario">
              <span data-feather="file"></span>
              Usuarios
            </a>
          </li>

      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <div class="container-fluid" style="margin-top: 100px">
          @yield('content')
        </div>

      </div>
    </main>
  </div>
</div>
