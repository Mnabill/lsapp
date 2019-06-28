<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name','lsapp')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li >
              <a class="nav-link" href="/">index </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">about</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/services">services</a>
                  </li>
            <li class="nav-item">
                     <a class="nav-link " href="/posts" >Posts</a>
             </li>    
            <li class="nav-item">
                <a class="nav-link "  href="/posts/create" >Create Post</a>
            </li>  
          </ul>
           <!-- Right Side Of Navbar -->
           <ul class="navbar-nav ml-auto">
             <!-- Authentication Links -->
             @guest
             <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
           @if (Route::has('register'))
            <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
           </li>
            @endif
            @else
           <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
             </a>
          
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
           </a>
          
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
            </form>
           </div>
            </li>
             @endguest
          </ul>
        </div>
      </nav>