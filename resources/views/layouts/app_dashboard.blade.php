<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"
>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        @yield('head')

        <script src="{{ asset('js/gsap.min.js') }}" defer></script>
        <script src="{{ asset('js/popper.min.js') }}" defer></script>

        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

        {{--
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        --}}

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="{{ asset('css/roboto.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/oswald.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/tajawal.css') }}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />

        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="{{ asset('fontawesome5112/css/all.min.css') }}"
            rel="stylesheet"
        />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

        <link href="{{ asset('css/app_dashboard.css') }}" rel="stylesheet" />
    </head>

    <body
        dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"
        class=" {{App::isLocale('ar') ? 'tajawal_font' : 'roboto_font'}}"
    >
        <!-- profile-template admin employee vendeur -->
        {{-- @include('components.navbar')
        <main>@yield('content')</main>
        @include('components.back_to_top') @include('components.footer')
        @stack('scripts') --}}

        <div class="px-1 px-md-0">
            <div class="row g-1 bg-light min-vh-100">
                <div
                    class="
                        fixed_drawer
                        col-2
                        bg-light
                        d-none d-md-block
                        px-3
                        pt-3
                        border border-right border-light
                        shadow-sm
                    "
                >
                    <div
                        class="
                            header_dashboard
                            d-flex
                            justify-content-start
                            gap-3
                            mb-5
                        "
                    >
                        <div class="name_connected">DASHBOARD</div>
                    </div>
                    <div class="border-top my-5 border border-light"></div>

                    @yield('fixed_drawer')
                </div>
                {{-- end fixed drawer --}}

                <div
                    class="
                        content_dashboard
                        col-12 col-md-10
                        px-2
                        pt-3
                        bg-light
                    "
                >
                    <div
                        class="
                            header_dashboard
                            d-flex
                            justify-content-end
                            gap-3
                            mb-3
                        "
                    >
                        <a
                            class="
                                open_mobile_drawer
                                text-decoration-none text-dark
                                d-block d-md-none
                            "
                            href="#"
                        >
                            <i class="menu_btn fas fa-bars mt-md-2 fa-2x"></i>
                        </a>

                        <div
                            class="lang d-flex align-items-center me-1 ms-auto"
                        >
                            <span>lANG</span>
                        </div>

                        <div class="name_connected d-flex align-items-center">
                            <span> Foulen ben Foulen</span>
                        </div>

                        <div class="deconnect">
                            <a href="#">
                                <i class="fas fa-sign-out-alt fa-2x me-3"></i
                            ></a>
                        </div>
                    </div>

                    <div
                        class="
                            border-top
                            my-3
                            border-light
                            shadow-sm
                            position-relative
                        "
                    ></div>

                    @yield('dashboard_content')
                </div>
                {{-- content dashboard end --}}
            </div>
        </div>
    </body>
</html>
