<aside
class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2 ps"
id="sidenav-main">
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="/home">
        <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> SGP Processos</span>
    </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse w-auto ps ps--active-y h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('modules.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Modulos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('user-types.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Tipos de usuário</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('users.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('selectors.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Selecionadores</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Clientes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('lawyers.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Advogados</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('processes.index')}}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Processos</span>
            </a>
        </li>
    </ul>
</div>
</aside>