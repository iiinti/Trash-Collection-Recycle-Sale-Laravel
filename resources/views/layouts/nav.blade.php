<!-- Dropdown Structure -->
<ul id="login-dropdown-guest-nav" class="dropdown-content">
  <li>
      <a href="/home">{{ __('Dashboard') }}</a>
  </li>
  <li>
    <a  href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
  </li>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
</ul>

<!-- top nav -->
<nav class="white" role="navigation">
  <div class="nav-wrapper">
    <a id="logo-container" href="{{ url('/') }}" class="brand-logo left">
      <img src='{{ URL::asset("img/Logo.png") }}' width=70% style="margin-top: 5px; margin-right: 15px">
    </a>
    <ul class="right hide-on-med-and-down">
    <!-- username -->
      @guest
          <li>
              <a href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li>
                  <a href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="login-dropdown-guest-nav">{{ Auth::user()->fname }} {{ Auth::user()->lname }}<i class="material-icons right">arrow_drop_down</i></a></li>
      @endguest
</ul>
    
    
    <!-- leftside bar -->
    @if(Auth::check())
      @include('layouts.sidenav')
    @endif

  </div>
</nav>
