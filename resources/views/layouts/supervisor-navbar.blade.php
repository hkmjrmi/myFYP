<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="user-panel d-flex">
      <div class="image">
        <img src="{{ asset('vendors/dist/img/user.jpg') }}" class="img-circle elevation-" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Supervisor</a>
      </div>
    </div>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('supervisor.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><form action="{{ route('supervisor.logout') }}" id="logout-form" method="post"><span class="text-danger ml-10">Log out  </span><i class="fas fa-sign-out-alt text-danger"></i>@csrf</form>
        </a>
      </li>
      
    </ul>
</nav>
<!-- /.navbar -->