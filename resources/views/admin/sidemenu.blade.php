 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.index') }}" class="nav-link {{ Route::is('admin.index') ? 'active' : '' }}" >
              <i class="fas fa-home"></i>
              <p>
                Homepage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{ Route::is('categories.*') ? 'active' : '' }}">
                  <i class="fas fa-circle"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ Route::is('admin.products.*') ? 'active' : '' }}">
                  <i class="fas fa-circle"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.reviews.index') }}" class="nav-link {{ Route::is('admin.reviews.*') ? 'active' : '' }}">
                  <i class="fas fa-circle"></i>
                  <p>Reviews</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('admin.orders.index') }}" class="nav-link {{ Route::is('admin.orders.*') ? 'active' : '' }}">
              <i class="fas fa-shopping-cart"></i>
              <p>Orders</p>
            </a>
          </li>

          <li class="nav-header">OTHERS</li>
          <li class="nav-item">
            <a href="{{ route('admin.messages.index') }}" class="nav-link {{ Route::is('admin.messages.*') ? 'active' : '' }}">
              <i class="fas fa-comments"></i>
              <p>
                Contact Messages
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.faqs.index') }}" class="nav-link {{ Route::is('admin.faqs.*') ? 'active' : '' }}">
              <i class="fas fa-users"></i>
              <p>
                FAQ
              </p>
            </a>
          </li>
         
          <li class="nav-header">PREFERENCES</li>
          <li class="nav-item">
            <a href="{{ route('admin.settings.index') }}" class="nav-link {{ Route::is('admin.settings.*') ? 'active' : '' }}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link {{ Route::is('admin.users.*') ? 'active' : '' }}">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.informational.index') }}" class="nav-link {{ Route::is('admin.informational.*') ? 'active' : '' }}">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>