 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" target="_iblank" class="nav-link fw-bold" style="color: #6f42c1;">
                <i class="fas fa-globe"></i> Display Website
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link text-danger fw-bold" style="text-decoration: none;" onclick="return confirm('Are you sure you want to signout?')">
                    <i class="fas fa-sign-out-alt"></i> Sign Out
                </button>
            </form>
        </li>
        
    </ul>
</nav>