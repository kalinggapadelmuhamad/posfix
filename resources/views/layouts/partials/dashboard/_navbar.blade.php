<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if (auth()->user()->gender == 'P')
                    <img class="img-profile rounded-circle" src="{{ asset('img/girl.png') }}" style="max-width: 60px">
                @else
                    <img class="img-profile rounded-circle" src="{{ asset('img/boy.png') }}" style="max-width: 60px">
                @endif
                <span class="ml-2 d-none d-lg-inline text-white small">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('createProfile') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                {{-- <form action="{{ route('logout') }}" method="get">
            @csrf --}}
                <a class="dropdown-item" href="{{ route('logout') }}">
                    {{-- <button class="btn d-grid"> --}}
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                    {{-- </button> --}}
                </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
