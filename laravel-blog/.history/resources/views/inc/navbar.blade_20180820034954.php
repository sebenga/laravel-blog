

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="http://localhost/lsapp/public/">Home</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="http://localhost/lsapp/public/about">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link disabled" href="http://localhost/lsapp/public/services">Services</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link disabled" href="http://localhost/lsapp/public/posts">Skills Sets</a>
              </li>
              
           </ul>
           
             <!-- Right Side Of Navbar -->
             <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-item"><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                <li class="dropdown-item">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                        </li>
                    @endif
                </ul>
        </div>
    </div>
</nav>

