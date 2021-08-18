<header class="section-header border-bottom">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-lg-3 col-12">
                    <a href="{{ route('home') }}" class="brand-wrap">
                        <img
                            class="logo"
                            src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/logo.png"
                        />
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-4 col-lg-5 col-12">
                    <form action="#" class="search">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
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
                        @if(Route::has('login'))
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-outline-primary"
                        >
                            {{ __("Login") }}</a
                        >
                        @endif @if(Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="btn btn-primary"
                        >
                            {{ __("Register") }}</a
                        >
                        @endif
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
