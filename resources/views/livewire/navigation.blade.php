<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}" style="max-height:5rem; width:auto;">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <hr class="my-3">
    <h6 class="navbar-heading text-muted">Sistema</h6>
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('customers.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('customers.index') ? 'active' : '' }}"
                href="{{ route('customers.index') }}" wire:navigate>
                <i class="fas fa-users text-blue"></i> Customers
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('vehicles.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('vehicles.index') ? 'active' : '' }}"
                href="{{ route('vehicles.index') }}" wire:navigate>
                <i class="fas fa-car text-info"></i> Vehículos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('maintenances.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('maintenances.index') ? 'active' : '' }}"
                href="{{ route('maintenances.index') }}" wire:navigate>
                <i class="fas fa-wrench text-warning"></i> Mantenimientos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('recommendations.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('recommendations.index') ? 'active' : '' }}"
                href="{{ route('recommendations.index') }}" wire:navigate>
                <i class="fas fa-lightbulb text-success"></i> Recomendaciones
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('spareparts.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('spareparts.index') ? 'active' : '' }}"
                href="{{ route('spareparts.index') }}" wire:navigate>
                <i class="fas fa-cogs text-purple"></i> Repuestos
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('services.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('services.index') ? 'active' : '' }}"
                href="{{ route('services.index') }}" wire:navigate>
                <i class="fas fa-concierge-bell text-indigo"></i> Servicios
            </a>
        </li>

        <li class="nav-item {{ Request::route()->named('technicians.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('technicians.index') ? 'active' : '' }}"
                href="{{ route('technicians.index') }}" wire:navigate>
                <i class="fas fa-user-cog text-teal"></i> Técnicos
            </a>
        </li>
    </ul>

</div>
