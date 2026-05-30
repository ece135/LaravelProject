 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link text-center border-bottom border-secondary" style="cursor: default;">
      <span class="brand-text font-weight-bold">Admin Panel</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
            <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Homepage</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{ Route::is('categories.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Categories</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link {{ Route::is('admin.products.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-box"></i>
                    <p>Products</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.reviews.index') }}" class="nav-link {{ Route::is('admin.reviews.*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-star"></i>
                    <p>Reviews</p>
                </a>
            </li>
         
            <li class="nav-item ">
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