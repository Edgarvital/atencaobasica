<style>
    a, b {
        font-weight: bolder;
        font-family: Arial;
        font-size: 18px;
        color: black;
    }
</style>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: -15%">
            <img src="{{asset('images/atencao_basica.png')}}" width="40px" height="40px">
            <small><b>Indicadores</b></small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @if(\Illuminate\Support\Facades\Auth::user()->tipo_usuario_id == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuario.cadastrar')}}">Usuário</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">Relatório</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Base de dados</a>
                </li>
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Olá, <b>{{ Auth::user()->name }}</b>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
