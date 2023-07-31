<div class="sticky">
    <div class="app-sidebar">

        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Menu</h3>
                </li>

                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item has-link" data-bs-toggle="slide"><i
                            class="side-menu__icon fas fa-home"></i><span class="side-menu__label">Home</span></a>
                </li>

                <li class="slide">
                    <a href="{{ route('companies.index') }}" class="side-menu__item has-link" data-bs-toggle="slide"><i
                            class="side-menu__icon fas fa-building"></i><span
                            class="side-menu__label">Companies</span></a>
                </li>
                <li class="slide">
                    <a href="{{ route('employees.index') }}" class="side-menu__item has-link" data-bs-toggle="slide"><i
                            class="side-menu__icon fas fa-users"></i><span class="side-menu__label">Employees</span></a>
                </li>

                <li class="slide">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();"
                            style="cursor: pointer" class="side-menu__item has-link" data-bs-toggle="slide"><i
                                class="side-menu__icon fas fa-sign-out-alt"></i><span
                                class="side-menu__label">{{ __('Log Out') }}</span></a>
                    </form>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
