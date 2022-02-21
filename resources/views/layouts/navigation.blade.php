<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    @auth
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
                </svg>
                {{ __('Home') }}
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ url('perekaman-data') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-pencil') }}"></use>
                </svg> {{ __('Perekamaan Data') }}</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('informasi') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-info') }}"></use>
                </svg> {{ __('Informasi') }}</a></li>

        <li class="nav-divider"></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('icons/coreui.svg#cil-settings') }}"></use>
                </svg> Master</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('pemerintah-daerah') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-institution') }}"></use>
                        </svg> {{ __('Pemda') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kecamatan') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-lan') }}"></use>
                        </svg> {{ __('Kecamatan') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kelurahan') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-lan') }}"></use>
                        </svg> {{ __('Kelurahan') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('resource') }}" target="_top">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-list-rich') }}"></use>
                        </svg>{{ __('Resource') }}</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                        </svg>
                        {{ __('Users') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-group') }}"></use>
                        </svg>
                        {{ __('Roles') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clients.index') }}">
                        <svg class="nav-icon">
                            <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
                        </svg>
                        {{ __('Clients') }}
                    </a>
                </li>
            </ul>
    @endauth
</ul>
