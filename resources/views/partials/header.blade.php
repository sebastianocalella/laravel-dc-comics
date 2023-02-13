<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home.index')}}">
        <img src="{{Vite::asset('resources/assets/images/dc-logo.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">characters</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">comics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">movies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">tv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">collectibles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">fans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">news</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>