<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <img src="{{ asset('images/b.png') }}" alt="logo" class="img-fluid rounded-circle img-responsive" title="brand logo" style="width: 60px; margin-left: 50px; cursor: pointer">
    <h2 class="p-2 text-white" style="font-family: Comic Sans MS"><span style="color:rgb(3, 3, 114)">Talk</span>Tak<span style="color:rgb(13, 243, 63)">Tik</span></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center justify-content-center">
            @role('admin')
            <li class="nav-item">
                <a style="margin-left: 20px" class="nav-link text-white {{ 'admin' == request()->path() ? 'active' : '' }}" href="{{ '/admin' }}">Dashboard</a>
            </li>
            @endrole
            @role('writer')
            <li class="nav-item">
                <a class="nav-link text-white {{ 'dashboard' == request()->path() ? 'active' : '' }}" href="{{ '/dashboard' }}">Dashboard</a>
            </li>
            @endrole
            <li class="nav-item">
                <a class="nav-link text-white {{ 'recent-post' == request()->path() ? 'active' : '' }}" href="{{ '/recent-post' }}">Recent Posts</a>
            </li>
            @role('admin')
            <span class="nav-line"></span>
            <li class="nav-item">
                <a class="nav-link text-white {{ 'contact' == request()->path() ? 'active' : '' }}" href="{{ '/contact' }}">Contacts</a>
            </li>
            <span class="nav-line"></span>
            <li class="nav-item">
                <a class="nav-link text-white {{ 'log' == request()->path() ? 'active' : '' }}" href="{{ '/log' }}">Logs</a>
            </li>
            <span class="nav-line"></span>

            <div class="dropdown">
                <a class="btn dropdown-toggle" id="buttt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="select3">
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-white {{ 'admin/roles' == request()->path() ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">Roles</a>
                    </li>
                    <span class="nav-line"></span>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-white {{ 'admin/permissions' == request()->path() ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}">Permissions</a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-left: 20px" class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}" href="{{ route('admin.users.index') }}">Users</a>
                    </li>
                </div>
            </div>
            @endrole
        </ul>
        <ul class="navbar-nav ms-auto">
            <div class="dropdown dropstart">
                <img src="
                {{(Auth::user()->gender === 'Male') ? asset('images/male.png') : ''}}
                {{(Auth::user()->gender === 'Female') ? asset('images/female.png') : ''}}
                {{(Auth::user()->gender === 'Transgender') ? asset('images/transgender.png') : ''}}
                {{(Auth::user()->gender === 'Bisexual') ? asset('images/bisexual.png') : ''}}
                " title="profile" class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 15px; font-size: 35px; cursor: pointer; padding: 5px 9px 5px 9px; border: 1px solid black; border-radius: 50%; width: 50px; height: 50px;; background-color:rgba(255, 255, 255, 0.531)">
                <ul class="dropdown-menu" id="select2">
                    <img id="profile-image" style="width: 35px; border: 1px solid rgb(246, 246, 246); padding: 4px; height: 35px; border-radius: 50%;" src="
                    {{(Auth::user()->gender === 'Transgender') ? asset('images/transgender.png') : ''}}
                    {{(Auth::user()->gender === 'Male') ? asset('images/male.png') : ''}}
                    {{(Auth::user()->gender === 'Female') ? asset('images/female.png') : ''}}
                    {{(Auth::user()->gender === 'Bisexual') ? asset('images/bisexual.png') : ''}}
                    ">
                    <span id="profile-name"><a href="{{ '/my-post' }}">{{Auth::user()->name}}</a></span>
                    <li><a class="dropdown-item mt-4" href="{{ '/my-post' }}" id="select"><i class="fa-light fa-square-user"></i> My Post</a></li>
                    <li><a href="{{ '/logout' }}" class="dropdown-item" id="select"><i class="fa-regular fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
        </ul>
    </div>
</nav>

<style>
    #profile-name {
        font-size: 18px;
        border-bottom: 1px solid white;
        padding-bottom: 10px;
    }
    #profile-image {
        margin-left: 15px;
    }
    #buttt {
        border: none;
        background-color: rgba(17, 162, 172, 0.37);
        color: rgb(255, 255, 255);
    }
    #buttt:hover {
        background-color: rgb(17, 162, 172);
    }
    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }
    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);
        color: rgb(255, 255, 255);
    }
    .navbar-nav a{
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }
    .navbar-nav a:hover{
        background-color: rgb(17, 162, 172);
        border-radius: 5px;
    }
    .navbar {
        background-image: linear-gradient(to right, rgb(99, 34, 228), rgb(19, 131, 65));
    }
    .active {
        background-color: rgb(17, 162, 172);
    }
    #select {
        color: white;
    }
    #select2 {
        background-color: rgb(19, 131, 65);
        width: 300px;
    }
    #select3 {
        background-color: rgb(19, 131, 65);
    }
    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }
</style>
