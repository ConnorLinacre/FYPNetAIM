<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom text-light">
    <!-- Sets up the SVG image used as the header icon -->
    <div class="navbar-brand abs"><a class="text-light" href="{{ route('home') }}"><img src="{{ asset('images/NetAIMLogo.svg') }}" alt="NetAIM" width="70%"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Moves the items to opposite side of bar and includes links -->
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="nav navbar-nav ml-auto">
            <!-- if the user is logged in, allow them to create campuses, edit their user and logout -->
            @if (Auth::check())
                <li class="nav-item" style="font-size: 20px;">
                    <a class="nav-link" href="{{ route('create_campus') }}">Create Campus</a>
                </li>
                <li class="nav-item" style="font-size: 20px;">
                    <a class="nav-link" href="{{ route('edit_user') }}">Edit User</a>
                </li>
                <li class="nav-item" style="font-size: 20px;">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
            <!-- if the user is not logged in, allow them to login or register -->
            @else
                <li class="nav-item" style="font-size: 20px;">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item" style="font-size: 20px;">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
