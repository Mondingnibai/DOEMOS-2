<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('images/deoms_logo.jpg') }}" alt="DEOMS Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Don Emilio Osmena</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ Request::routeIs('announcement') || Request::routeIs('add-announcement') || Request::routeIs('edit-announcement') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::routeIs('announcement') || Request::routeIs('add-announcement') || Request::routeIs('edit-announcement') ? 'active' : '' }}">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Announcement
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('announcement') }}" class="nav-link {{ Request::routeIs('announcement') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Announcements</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="{{ route('add-announcement') }}" class="nav-link {{ Request::routeIs('add-announcement') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Announcement</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('forms') }}" class="nav-link {{ Request::routeIs('forms')  || Request::routeIs('newForm') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i><p>Forms</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
