<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" style="width: 30px; margin-left: 50px">
    <h5 class="p-2">Contact App</h5>
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="{{ '/dashboard' }}">Dashboard</a>
        </li>
        <span></span>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ '/contact' }}">Contacts</a>
        </li>
        <span></span>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ '/log' }}">Logs</a>
        </li>
      </ul>
    <div class="collapse navbar-collapse" id="navbarText">
            <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black; margin-left: 80%"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
    </div>
</nav>

<style>
    .navbar-nav {
        margin-left: 300px;
    }
    .navbar-nav a{
        margin-left: 20px;
        margin-right: 20px;
    }
    span {
        border-right: 1px solid rgba(95, 95, 95, 0.429);
        height: 20px;
        margin-top: 10px;
    }
</style>
