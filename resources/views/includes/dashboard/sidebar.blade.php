<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is("dashboard") ? "active" :"" }}"" aria-current="page" href="{{ route('dashboard') }}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link {{ Request::is("dashboard/user*") ? "active" :"" }}""  href="/dashboard/user">
              <span data-feather="user-plus" class="align-text-bottom"></span>
              Pengguna
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is("dashboard/buku*") ? "active" :"" }}""  href="/dashboard/buku">
              <span data-feather="list" class="align-text-bottom"></span>
              Buku
            </a>
          </li>

          {{-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Customers
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ Request::is("dashboard/order*") ? "active" :"" }}"" href="/dashboard/order">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Order
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is("dashboard/report*") ? "active" :"" }}"" href="/dashboard/report">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>


          {{-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li> --}}
        </ul>

        {{-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul> --}}
      </div>
    </nav>
  </div>
</div>
