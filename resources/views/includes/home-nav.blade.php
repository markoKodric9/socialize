<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a class="brand"><img src="{{ asset("images/logo.png") }}" /> {{ config('app.name', 'Simplify') }}</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav text-uppercase blue">
                <li><a href="index"><i class="fa fa-home fa-fw"></i> Home</a></li>
                <li><a href="features"><i class="fa fa-cogs fa-fw"></i> Features</a></li>
                <li><a href="about"><i class="fa fa-info-circle fa-fw"></i> About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-uppercase">
            @if (Auth::guest())
                <li><a href="support"><i class="fa fa-phone fa-fw"></i> Support</a></li>
                <li class="login-li"><a href="{{ url('/login') }}"><i class="fa fa-sign-in fa-fw"></i> Sign in</a></li>
            @else
                <li><a href="support"><i class="fa fa-phone fa-fw"></i> Support</a></li>
                <li class="dropdown login-li">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                    <li>
                            <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        
                    </ul>
                </li>
            @endif
            </ul>
        </div>
    </div>
</nav>