<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link a">
    <img src="{{asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SPSI Indonesia</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="/users" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              MASTER USER
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/users/pengunduran" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Data Pengunduran
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="/berita" class="nav-link">
            <i class="nav-icon fas fa-info"></i>
            <p>
              MASTER BERITA
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/kegiatan" class="nav-link">
            <i class="nav-icon fas fa-stream"></i>
            <p>
              MASTER KEGIATAN
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/struktur" class="nav-link">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
              STRUKTUR SPSI
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>