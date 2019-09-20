<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif
</div>
<div class="navbara-color">
    <nav class="navbar navbar-expand-lg border border-secondary">
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><button type="button" class="btn btn-light">Home</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/cursos"><button type="button" class="btn btn-light">Cursos</button></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button type="button" class="btn btn-light">Pesquisar</button>
            </form>
        </div>
    </nav>
</div>
