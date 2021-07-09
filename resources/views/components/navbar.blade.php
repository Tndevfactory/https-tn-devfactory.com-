<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a
            href="{{route('devenir.vendeur', App::getLocale())}}"
            class="h6 ms-4  {{App::isLocale('ar') ? 'devenir_vendeur_ar' : 'devenir_vendeur_fr'}}"
        >
            <span>
                <i
                    class="fas fa-star  {{App::isLocale('ar') ? 'float-right' : 'float-left'}}"
                ></i>
                {{ __("Make it with us !") }}
            </span>
        </a>
    </div>
</nav>

{{-- header --}}
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a
            class="navbar-brand position-relative"
            href="{{ route('welcome', App::getLocale()) }}"
        >
            <span
                class="  {{App::isLocale('ar') ? 'brand_name_ar' : 'brand_name_fr'}}"
            >
                {{(App::isLocale('ar') ? 'تين-فكتوري' : config("app.name", "Laravel"))}}
            </span>
            <span>
                <i
                    class=" {{App::isLocale('ar') ? 'brand_logo_ar' : 'brand_logo_fr'}} fas fa-network-wired position-absolute"
                ></i
            ></span>
        </a>

        <div
            class="collapse navbar-collapse  {{App::isLocale('ar') ? 'parent_search_area_ar' : 'parent_search_area_fr'}} "
            id="navbarSupportedContent"
        >
            <div
                class="navbar-nav {{App::isLocale('ar') ? 'search_area_ar' : 'search_area_fr'}} "
            >
                {{-- search  desktop form--}}
            </div>
        </div>

        <!-- Right Side Of Navbar -->
        <ul
            class="
               
                navbar-nav
                 gap-3
                flex-row
                
                 {{App::isLocale('ar') ? ' connect_cart_ul_ar' : ' connect_cart_ul_fr '}}
               
                
            "
        >
            <!-- Authentication Links -->
            @guest

            <li class="nav-item">
                <a
                    class=" {{App::isLocale('ar') ? 'sign_in_btn_ar' : 'sign_in_btn_fr'}} btn btn-outline-primary btn-sm"
                    href="{{ route('login', App::getLocale() ) }}"
                >
                    <span class="d-none d-md-inline-flex small"
                        >{{ __("Sign in") }}
                    </span>
                    <span
                        ><i
                            class="fas fa-sign-in-alt d-md-inline-flex small"
                        ></i
                    ></span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class=" {{App::isLocale('ar') ? 'sign_in_btn_ar' : 'sign_in_btn_fr'}} btn btn-outline-primary btn-sm"
                    href="{{ route('login', App::getLocale() ) }}"
                >
                    <span class="d-none d-md-inline-flex small"
                        >{{ __("Sign up") }}
                    </span>
                    <span>
                        <i class="fas fa-user-plus d-md-inline-flex small"></i
                    ></span>
                </a>
            </li>

            @else
            <li class="nav-item dropdown">
                <a
                    id="navbarDropdown"
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    v-pre
                >
                    {{ Auth::user()->name }}
                </a>
                <a
                    class="dropdown-item"
                    href="{{ route('logout', App::getLocale()) }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
                >
                    {{ __("Logout") }}
                </a>
                <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdown"
                >
                    <form
                        id="logout-form"
                        action="{{ route('logout', App::getLocale()) }}"
                        method="POST"
                        class="d-none"
                    >
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
        @include('components.lang_switcher')
    </div>
</nav>

{{-- menu desktop  --}}

<nav class="navbar navbar-expand-md bg-light sticky-top">
    <div class="container d-flex gap-3 gap-md-0">
        <a
            class=" {{App::isLocale('ar') ? 'drawer_toggle_ar' : 'drawer_toggle_fr '}} "
            href="#"
        >
            <i class="menu_btn_icon fas fa-bars mt-md-2"></i>
        </a>

        <div
            style="min-width: 100%"
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >
            <ul
                class="navbar-nav mx-auto gap-3 {{App::isLocale('ar') ? 'navbar_placement_ar' : 'navbar_placement_fr'}}"
            >
                {{--
                <li class="homme_menu_item nav-item position-relative">
                    <a
                        class="nav-link menu_principal text-capitalize"
                        href="{{route('welcome', App::getLocale())}}"
                    >
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                --}}

                <li class="table_art_item nav-item">
                    <div class="hover_zone">
                        <a
                            class="nav-link menu_principal text-capitalize"
                            href="#"
                        >
                            {{ __("Agency") }}
                        </a>
                        @include('components.mega_menu.table_art_mm')
                    </div>
                </li>

                <li class="decorations_item nav-item">
                    <div class="hover_zone">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                        >
                            {{ __("Entrepreneur") }}
                        </a>
                        @include('components.mega_menu.decorations_mm')
                    </div>
                </li>
                <li class="bijoux_item nav-item">
                    <div class="hover_zone">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                        >
                            {{ __("Education") }}
                        </a>
                        @include('components.mega_menu.bijoux_mm')
                    </div>
                </li>
                <li class="habillement_item nav-item">
                    <div class="hover_zone">
                        <a
                            class="menu_principal nav-link text-capitalize"
                            href="#"
                        >
                            {{ __("Government") }}
                        </a>
                        @include('components.mega_menu.habillement_mm')
                    </div>
                </li>
            </ul>
            <form
                class="d-flex search_desktop_form"
                action="{{ route('search', App::getLocale() ) }}"
                method="get"
            >
                @csrf
                <div class="input-group">
                    <input
                        type="text"
                        name="search"
                        class="form-control search_input_desktop"
                        placeholder=""
                        aria-label="Recipient's username"
                    />
                    <button
                        class="{{App::isLocale('ar') ? 'btn_search_desktop_ar' : ''}} btn btn-outline-primary"
                        type="submit"
                    >
                        <i
                            class="{{App::isLocale('ar') ? 'btn_search_icon_ar' : ''}} fas fa-search"
                        ></i>
                    </button>
                </div>
            </form>
        </div>

        {{-- search form mobile --}}
        <div class="navbar-nav w-75 me-3 mx-auto">
            <form
                class="d-flex d-md-none"
                action="{{ route('search', App::getLocale() ) }}"
                method="post"
            >
                @csrf
                <!-- {{ __('Search for products') }} -->
                <div class="input-group">
                    <input
                        type="text"
                        class="search_input_mobile form-control"
                        placeholder=""
                        aria-label="Recipient's username"
                    />
                    <button
                        class="{{App::isLocale('ar') ? 'btn_search_mobile_ar' : ''}} btn btn-outline-info"
                        type="submit"
                    >
                        <i
                            class="{{App::isLocale('ar') ? 'btn_search_icon_ar' : ''}} fas fa-search"
                        ></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>

@include('components.drawer')
