<header class="section-header border-bottom">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-lg-3 col-12">
                    <a href="{{ route('home') }}" class="brand-wrap">
                        <img class="logo" src="{{ url('logo.png') }}" />
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-4 col-lg-5 col-12">
                    <form action="{{ route('search') }}" class="search">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                name="q"
                                placeholder="Search"
                            />

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-search"
                                        viewBox="0 0 16 16"
                                    >
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- search-wrap .end// -->
                </div>
                <!-- col.// -->
                <div class="col-md-5 col-lg-4 col-sm-12 col-12 text-md-right">
                    <div>
                        @auth
                        <span class="dropdown">
                            <a
                                class="dropdown-toggle mr-2"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <i class="fa fa-user rounded-circle mr-2"></i>
                                {{auth()->user()->full_name}}
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown"
                            >
                                @if(auth()->user()->hasRole('administrator'))
                                <a
                                    class="dropdown-item"
                                    href="{{ route('shopper.dashboard') }}"
                                    >Admin Dashboard</a
                                >
                                @endif
                                <div class="dropdown-divider"></div>
                                <a
                                    class="dropdown-item"
                                    href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >Sign Out</a
                                >

                                <form
                                    id="logout-form"
                                    action="{{ route('app.logout') }}"
                                    method="POST"
                                    style="display: none"
                                ></form>
                            </div>
                        </span>

                        <!-- <div class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <i class="fa fa-user rounded-circle mr-2"></i>
                                Profile
                            </a>
                        </div> -->
                        <!-- <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                aria-expanded="false"
                            >
                                <i class="fa fa-user rounded-circle mr-2"></i>
                                Profile
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown"
                            >
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#"
                                    >Account Settings</a
                                >
                                <a class="dropdown-item" href="#">Newsletter</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Sign Out</a>
                            </div>
                        </li> -->
                        @endauth

                        <a href="{{ route('cart') }}" class="btn btn-light">
                            Cart
                            <span class="ml-2 badge badge-warning">{{
                                $cartCount
                            }}</span>
                        </a>
                        <button
                            class="btn float-right btn-light d-md-none"
                            type="button"
                            data-toggle="collapse"
                            data-target="#main_nav8"
                            aria-controls="main_nav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->
</header>
