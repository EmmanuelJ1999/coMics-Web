<header class="bg-dark text-white">
    <div class="container">
        <div class="d-flex bd-highlight align-items-center py-1">
            
            <div class="flex-grow-1 bd-highlight">
                <a href="{{route('home')}}" >
                    <img src="../resources/images/libro-comico.png" alt="" width="32" height="32">
                </a>
            </div>

            <div class="bd-highlight">
                <ul class="navbar-nav me-5">
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('home')}}">Inicio</a></li>
                </ul>
            </div>

            
            <div class="bd-highlight me-4">
                <form class="input-group" action="">
                    <input class="border-0 bg-transparent border-bottom text-white" type="text" name="" id="buscar-comic" placeholder="Buscar comic">
                    <button class="btn border-0 btn-outline-secondary border-bottom btn-sm"><i class="fas fa-search"></i></button>                                     
                </form>                    
            </div>

            <div class="bd-highlight">
                <button class="btn btn-light text-secondary " type="button"><i class="fas fa-user pe-3"></i>Login</button>
            </div>

        </div>
    </div>
</header>