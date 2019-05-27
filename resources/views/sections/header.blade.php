<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect " href="{{ route('store.index') }}">
            <strong class="deep-orange-text">Marketland</strong>
        </a>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Search form -->
            <form class="form-inline active-cyan-4">
                <input class="form-control mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                <a href="{{ route('store.search') }}" class="text-dark">
                    <i class="material-icons">search</i>
                </a>
            </form>

        </div>
            <!-- Right -->
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect" href="{{ route('store.cart') }}">
                    <span class="badge deep-orange z-depth-1 mr-1"> 1 </span>
                    <i class="fas fa-shopping-cart"></i>
                    <span class="clearfix d-none d-lg-inline-block"> Cart </span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item dropleft avatar">

                <a class="nav-link p-0" id="navbarDropdownMenuLink-User" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if(Auth::check())
                    @if(is_null(auth()->user()->profile_image_path))
                        <i class="fas fa-user-circle align-middle" style="font-size:34px"></i>
                    @else
                        <img src="{{ $user->profile_image_path }}" class="rounded-circle z-depth-1 img-fluid"  height="35" width="35">
                    @endif
                    <span class="clearfix d-none d-lg-inline-block align-middle">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</span>

                @else
                    <i class="fas fa-user-circle align-middle" style="font-size:34px"></i>

                @endif

                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-User">
                    @if(Auth::check())
                        <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ route('user.editProfile') }}">Edit Profile</a>
                        <a class="dropdown-item" href="{{ route('store.orders') }}">My Orders</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                    @else
                        <a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a>
                        <a class="dropdown-item" href="{{ route('user.signin') }}">Signin</a>
                    @endif
                </div>

            </li>
        </ul>
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>
</nav>
<!-- Navbar -->
