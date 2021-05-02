<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom text-light">
    <div class="navbar-brand abs"><a class="text-light" href="{{ route('home') }}"><img src="{{ asset('images/NetAIMLogo.svg') }}" alt="NetAIM" width="70%"></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="nav navbar-nav ml-auto">
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
