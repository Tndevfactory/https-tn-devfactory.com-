<aside
    id="drawer"
    class="drawer {{App::isLocale('ar') ? 'drawer_initial_position_ar' : 'drawer_initial_position_fr'}}  "
>
    <a
        href="#"
        class=" {{App::isLocale('ar') ? 'close_drawer_ar' : 'close_drawer_fr'}} close_drawer btn-sm "
    >
        <i class="far fa-window-close text-white"></i>
    </a>

    <span class="b-example-divider h5">
        <span class="text-info">{{ __("Market Menu") }}</span>
    </span>

    <div class="border-top mt-3 border-primary"></div>
    <div class="border-top my-1 border-info"></div>
    <div class="border-top mb-3 border-primary"></div>

    <div class="flex-shrink-0 ms-3">
        <ul class="list-unstyled ps-0">
            @include('components.drawer_sections.table_art')
            @include('components.drawer_sections.decorations')
            @include('components.drawer_sections.bijoux')
            @include('components.drawer_sections.habillement')
        </ul>
    </div>

    <div class="drawer_copyright">
        <span class="drawer_copyright_text">
            <a href="#" class="text-info">
                &copy; {{ __("hitcom market") }} <i class="fas fa-trademark"></i
            ></a>
        </span>
    </div>
</aside>
