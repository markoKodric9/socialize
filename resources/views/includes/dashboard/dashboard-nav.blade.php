<div class="main-wrapper">
  <div class="app" id="app">
    <header class="header wow slideInDown">
      <div class="header-block header-block-collapse hidden-lg-up">
        <button class="collapse-btn" id="sidebar-collapse-btn">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="header-block header-block-search hidden-sm-down">
        <form role="search">
          <div class="input-container"> <i class="fa fa-search"></i>
            <input type="search" placeholder="Search">
            <div class="underline"></div>
          </div>
        </form>
      </div>
      <div class="header-block header-block-nav">
        <ul class="nav-profile">
        <li class="profile dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="img" style="background-image: url('{{ asset('images/user.svg')}}') "> </div>
            <span class="name">{{ Auth::user()->name }}<i class="fa fa-angle-down fa-fw icon"></i></span> </a>
            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
            <a class="dropdown-item" href="#">
                <span class="email">{{ Auth::user()->email }}</span><br />
                <span class="plan">Basic User</span>
                
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-user fa-fw icon"></i> Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-gear fa-fw icon"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off fa-fw icon" aria-hidden="true"></i> Logout
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </a>
            </div>
          </li>
          <li class="notifications new">
            <a href="" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <sup><span class="counter">5</span></sup>
            </a>
            <div class="dropdown-menu notifications-dropdown-menu">
              <ul class="notifications-container">
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      <div class="img" style="background-image: url('{{ asset('images/user.svg')}}')"></div>
                    </div>
                    <div class="body-col">
                      <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>.
                      </p>
                    </div>
                  </a>
                </li>

              </ul>
              <footer>
                <ul>
                  <li> <a href="">View All</a> </li>
                </ul>
              </footer>
            </div>
          </li>
          <li class="notifications new">
            <a href="" data-toggle="dropdown">
              <i class="fa fa-user-o"></i>
              <sup><span class="counter">1</span></sup>
            </a>
            <div class="dropdown-menu notifications-dropdown-menu">
              <ul class="notifications-container">
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      <div class="img" style="background-image: url('{{ asset('images/user.svg')}}')"></div>
                    </div>
                    <div class="body-col">
                      <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>.
                      </p>
                    </div>
                  </a>
                </li>

              </ul>
              <footer>
                <ul>
                  <li> <a href="">View All</a> </li>
                </ul>
              </footer>
            </div>
          </li>
          <li class="notifications new">
            <a href="" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <sup><span class="counter">8</span></sup>
            </a>
            <div class="dropdown-menu notifications-dropdown-menu">
              <ul class="notifications-container">
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      <div class="img" style="background-image: url('{{ asset('images/user.svg')}}')"></div>
                    </div>
                    <div class="body-col">
                      <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>.
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      <div class="img" style="background-image: url('{{ asset('images/user.svg')}}')"></div>
                    </div>
                    <div class="body-col">
                      <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>.
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      <div class="img" style="background-image: url('{{ asset('images/user.svg')}}')"></div>
                    </div>
                    <div class="body-col">
                      <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                    </div>
                  </a>
                </li>
              </ul>
              <footer>
                <ul>
                  <li> <a href="">View All</a> </li>
                </ul>
              </footer>
            </div>
          </li>
          
        </ul>
      </div>
    </header>
    <aside class="sidebar  wow slideInLeft">
      <div class="sidebar-container">
        <div class="sidebar-header">
          <div class="brand">
            <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span>
              <span class="l l5"></span> </div> Socialize </div>
        </div>
        <nav class="menu">
          <ul class="nav metismenu" id="sidebar-menu">
              @yield('menu')
          </ul>
        </nav>
      </div>

    </aside>
    <div class="sidebar-overlay" id="sidebar-overlay"></div>