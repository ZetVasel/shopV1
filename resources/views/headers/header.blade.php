@include('layouts.defaultHeader')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="links" style="margin: 1% 5% 1% 1%; ">
        <a href="{{URL::to('links.linkOne')}}">Link-One</a>
        <a href="{{URL::to('links.linkTwo')}}">Link-Two</a>
        <a href="#">Link-3</a>
        <a href="{{URL::to('product/4')}}">Product(test)-4</a>
        <a href="#">Link-5</a>
        <a href="#">Link-6</a>
    </div>
    <a class="navbar-brand" href="{{'/'}}">Main elements
        <img src="{{URL('storage/icons/shopping-bag.svg')}}" width="30" height="30" alt="No icon">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown ( for PDF )
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{URL::to('templateTest')}}">PDF templat</a>
                    <a class="dropdown-item" href="{{URL::to('template')}}">PDF download</a>
                    <div class="dropdown-divider"></div>
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <!--<a href="{{ url('/home') }}">Home</a>-->
                                <a class="dropdown-item" href="#">Login as: {{ Auth::user()->name }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                    @endif
                                    @endauth
                        </div>
                    @endif
                </div>
            </li>
        </ul>
        <form action="search.search" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a class="navbar-brand" href="#">Cart
            <img src="{{URL('storage/icons/shopping-cart.svg')}}" width="30" height="30" alt="No icon">
        </a>
    </div>
</nav>
