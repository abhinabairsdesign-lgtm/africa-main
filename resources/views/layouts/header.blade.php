<nav class="navbar navbar-expand-lg premium-nav">
    <div class="container">

        <!-- ===== LOGO ===== -->
        <a class="navbar-brand logo-area" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo-img">
        </a>

        <!-- toggler -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- ===== MENU ===== -->
        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav mx-auto">
                <li><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><i
                            class="fa-solid fa-house"></i> Home</a></li>
                <li><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}"><i
                            class="fa-solid fa-address-card"></i> About
                        Us</a></li>
                <li><a class="nav-link {{ request()->routeIs('agriculture') ? 'active' : '' }}"
                        href="{{ route('agriculture') }}"><i class="fa-solid fa-seedling"></i>
                        Agriculture</a>
                </li>
                <li><a class="nav-link {{ request()->routeIs('petriliam-gass') ? 'active' : '' }}"
                        href="{{ route('petriliam-gass') }}"><i class="fa-solid fa-gas-pump"></i> Petrolium
                        &
                        Gas</a></li>
                <li><a class="nav-link {{ request()->routeIs('mining') ? 'active' : '' }}"
                        href="{{ route('mining') }}"><i class="fa-solid fa-person-digging"></i>
                        Mining</a>
                </li>
                <li><a class="nav-link {{ request()->routeIs('technology') ? 'active' : '' }}"
                        href="{{ route('technology') }}"><i class="fa-solid fa-laptop"></i>
                        Technology</a>
                </li>
            </ul>

            <!-- right button -->
            <div class="nav-btn ">

                        <select name="language" id="language" class="notranslate">
                            <option value="en">English</option>
                            <option value="fr">French</option>
                        </select>

                        <a href="{{ route('contact') }}" class="btn-start">
                            Get Started
                        </a>
                    </div>
        </div>

    </div>
</nav>
