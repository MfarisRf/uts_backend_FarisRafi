<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @if (Auth::check())
            <a href="/profile63" class="d-block">{{ Auth::user()->name }}</a>
            @else
            <a href="/login63" class="d-block">Guest</a>
            @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <p>Home</p>
                </a>
            </li>
            {{-- @if (Auth::check()) --}}
                @if ($role == "Admin")
                <li class="nav-item">
                    <a href="/users63" class="nav-link">
                    <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/agama63" class="nav-link">
                    <p>Agama</p>
                    </a>
                </li>
                @endif
            {{-- @endif --}}
            <li class="nav-item">
                @if (!Auth::check())
                <a href="/login63" class="nav-link">
                  <p>Login</p>
                </a>
                @else
                <a href="/logout63" class="nav-link">
                  <p>Logout</p>
                </a>
                @endif
            </li>
        </ul>
      </nav>
    </div>
  </aside>
