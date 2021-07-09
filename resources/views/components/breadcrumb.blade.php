<nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
    <ol class="breadcrumb my-3">
        <li class="breadcrumb-item">
            <a href="{{route('welcome', App::getLocale())}}"><i class="fas fa-home"></i></a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">{{ $data["level1"] }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ $data["level2"] }}
        </li>
    </ol>
</nav>
