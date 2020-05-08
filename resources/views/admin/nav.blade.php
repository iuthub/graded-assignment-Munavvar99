<style>
    nav{
        background: rgba(22, 21, 21, 0.918);
        color:rgba(255,255,255,0.5);
    }
    nav a{
        color: white;
        color:rgba(255,255,255,0.5);
    }

    #navbarDropdownMenuLink-4{
        color:rgba(255,255,255,0.5);
    }

    #navbarDropdownMenuLink-4:hover{
        color:rgba(255,255,255,1);
    }
</style>

<nav class="mb-1 navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="{{ route('admin.home') }}">
                    <i class="fas fa-bell"></i> New products ( {{ $number }} )
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fas fa-user"></i> Profile </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                    <a class="dropdown-item waves-effect waves-light" href="{{ route('admin.statics') }}">Statistics</a>
                    <a class="dropdown-item waves-effect waves-light" href="{{ route('index') }}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
