<div
    id="lang-switcher"
    class="dropdown {{App::isLocale('ar') ? 'lang_switcher_ar' : 'lang_switcher_fr'}}"
>
    <button
        class="affiche_lang btn btn-sm dropdown-toggle"
        type="button"
        id="dropdownMenuButton1"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        @if (App::getLocale() === 'fr')
        <a href="{{ route(Route::currentRouteName() , 'fr') }}">
            <div class="lang_box lang_box_fr"></div>
        </a>
        @elseif (App::getLocale() === 'en')
        <a href="{{ route(Route::currentRouteName() , 'en') }}">
            <div class="lang_box lang_box_uk"></div>
        </a>
        @else

        <a href="{{ route(Route::currentRouteName() , 'ar') }}">
            <div class="lang_box lang_box_ar"></div>
        </a>
        @endif
    </button>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'ar') }}"
            >
                <div class="lang_box lang_box_ar"></div>
                <span
                    class="arabic d-none d-md-block small  {{App::isLocale('ar') ? 'me-2 arabic_ar' : 'arabic_fr'}}"
                    >العربية</span
                >
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'en') }}"
            >
                <div class="lang_box lang_box_uk"></div>
                <span
                    class="d-none d-md-block small  {{App::isLocale('ar') ? 'me-2' : ''}}"
                    >English</span
                >
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'fr') }}"
            >
                <div class="lang_box lang_box_fr"></div>
                <span
                    class="d-none d-md-block small  {{App::isLocale('ar') ? 'me-2' : ''}}"
                    >Français</span
                >
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'fr') }}"
            >
                <div class="lang_box lang_box_fr"></div>
                <span
                    class="d-none d-md-block small  {{App::isLocale('ar') ? 'me-2' : ''}}"
                    >Deutch</span
                >
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'fr') }}"
            >
                <div class="lang_box lang_box_fr"></div>
                <span
                    class="d-none d-md-block small  {{App::isLocale('ar') ? 'me-2' : ''}}"
                    >Espagnol</span
                >
            </a>
        </li>
        <li>
            <a
                class="dropdown-item"
                href="{{ route(Route::currentRouteName() , 'fr') }}"
            >
                <div class="lang_box lang_box_fr"></div>
                <span
                    class="d-none d-md-block small  {{App::isLocale('ar') ? 'me-2' : ''}}"
                    >Chinese</span
                >
            </a>
        </li>
    </ul>
</div>
