<li class="mb-1">
    <a
        href="#"
        class="
            btn_level_one btn btn-toggle
            align-items-center
            btn-sm
            rounded
            collapsed
        "
        data-bs-toggle="collapse"
        data-bs-target="#clothing"
        aria-expanded="false"
    >
        <i class="fas fa-pause-circle text-info fa-1x mx-2"></i>

        <span> {{ __("CLOTHING") }}</span>
        <i
            class=" fas  mx-2 {{App::isLocale('ar') ? ' fa-chevron-left' : ' fa-chevron-right'}} "
        ></i>
    </a>

    <div
        class="collapse {{App::isLocale('ar') ? 'me-4' : 'ms-5'}} "
        id="clothing"
    >
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li class="my-2">
                <a
                    href="#"
                    class="
                        btn_level_two btn btn-toggle btn-sm
                        align-items-center
                        rounded
                        collapsed
                    "
                    data-bs-toggle="collapse"
                    data-bs-target="#clothing-level-two-0"
                    aria-expanded="false"
                >
                    <span class="fw-light text-sm">
                        {{ __("Bags and Clothing and footwear") }}</span
                    >
                    <i
                        class=" fas  mx-2 {{App::isLocale('ar') ? ' fa-chevron-left' : ' fa-chevron-right'}} "
                    ></i>
                </a>
                <div
                    class="collapse  {{App::isLocale('ar') ? 'me-4' : 'ms-4'}} "
                    id="clothing-level-two-0"
                >
                    <ul
                        class="
                            btn-toggle-nav
                            list-unstyled
                            fw-normal
                            pb-1
                            small
                        "
                    >
                        <li class="mt-1">
                            <a
                                href="#"
                                class="
                                    btn_level_two
                                    link-dark
                                    rounded
                                    fw-light
                                    text-sm
                                "
                            >
                                Vases1</a
                            >
                        </li>
                       
                    </ul>
                </div>
            </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
