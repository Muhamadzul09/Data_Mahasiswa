<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky ">
      <div style="max-height: 400px; overflow:hidden;">
        <img src="asset/zul.jpg" alt="zul" width="100" class="img-thumbnail rounded-circle img-fluid" >
        <br>
        <span data-feather="home" class="align-text-bottom">Muhamad zul sa'ban</span>
        <br>
        <span data-feather="home" class="align-text-bottom">221011402716</span>
        <hr>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            JADWAL KULIAH
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            KARTU UJIAN
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            RANGKUMAN NILAI
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            KEUANGAN
          </a>
        </li>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
          <span data-feather="file-text" class="align-text-bottom"></span>
          DOKUMEN
        </a>
      </li>
      </ul>

      @can('admin')

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Adminnistrator</span>
      </h6>
      <ul class="nav flex-columnn">
        <li class="nav-item">
           <a class="nav-link {{ Request::is('dashoard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Post Categories
          </a>
        </li>
      </ul>
        
      @endcan
    </div>
  </nav>