<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Left Side Of Navbar -->
        <div class="row">

            <div class="input-group col-md-4 pull-right">
                <!-- Right Side Of Navbar -->
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right list-inline">
                        <!-- Authentication Links -->
                        <li><a href="/cart"><img height="22" width="25"
                                                 src="{{ asset('images/cart-icon.png') }}">
                                Items: <span
                                        id="nav-items">{{ session('cartProducts') ? count(session('cartProducts'))-1 : 0 }}</span>
                                Total: <span
                                        id="nav-total">{{ session('cartProducts') ? session('cartProducts')['total'] : 0 }}</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('admin.logout') }}">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</nav>