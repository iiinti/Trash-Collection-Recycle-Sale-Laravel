<!-- leftside bar -->

<ul id="nav-mobile" class="sidenav sidenav-fixed">
  <li>
    <div class="user-view">
        <div class="background">
          <img  src="{{asset('img/img1.jpg')}}" alt="" class="responsive-img">
        </div>
     
        <a href=""><img src="{{ asset('profile/'.Auth::user()->image) }}" alt="" class="circle"></a>
        <span class="white-text name">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span>
        <span class="white-text email">{{ Auth::user()->email }}</span>
    </div>
  </li>
  <!-- side menu items -->
  <li>
    <a href="{{ url('drives/create') }}"><i class="material-icons teal-text">dashboard</i>New Drive</a>
  </li>
  <li>
    <a href="#"><i class="material-icons teal-text">account_box</i>Profile</a>
  </li>
  <!--User dropdown list -->
  <li>
    <a class="dropdown-trigger" href="#!" data-target="dm1"><i class="material-icons teal-text">group</i>Manage Users<i class="material-icons right">arrow_drop_down</i>
    </a>
    <ul id="dm1" class="dropdown-content">
      <li><a href="#"><i class="material-icons teal-text">group</i>New Drive</a></li>
      <li><a href="#"><i class="material-icons teal-text">group</i>User List</a></li>
      <li><a href="#"><i class="material-icons teal-text">group</i>Admin List</a></li>
    </ul>
  </li>

   <!--end User dropdown list -->

  <!--File dropdown list -->
  @if(auth()->user()->role_id == 1)
  <li>
    <a class="dropdown-trigger" href="#!" data-target="file"><i class="material-icons teal-text">attachment</i>Manage Files<i class="material-icons right">arrow_drop_down</i>
    </a>
    <ul id="file" class="dropdown-content">
      <li><a href="#"><i class="material-icons teal-text">backup</i>Category</a></li>
      <li><a href="#"><i class="material-icons teal-text">visibility</i>Documents</a></li>
    </ul>
  </li>
  @elseif(auth()->user()->role_id == 2)
  <li><a href="#"><i class="material-icons teal-text">visibility</i>Documents</a></li>
  @endif
   <!--end File dropdown list -->


  <!-- logout -->
  <li>
    <a  href="#"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
     <i class="material-icons teal-text">exit_to_app</i>Logout
    </a>
  </li>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>


  <!-- footer -->
  <div class="sidebar-footer">
    <ul>
      <li>
        <a href="#" style="color: #bdbdbd; text-align: center">Software © Webcore 2020</a>
      </li>
    </ul>
  </div>
</ul>

<!-- Mobile menu -->
<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>