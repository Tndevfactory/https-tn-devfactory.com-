<div class="upload">
    {{-- https://github.com/zanysoft/laravel-zip --}}

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    <img src="images/{{ Session::get('image') }}" />
    @endif @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form
        action="{{route('fImport',App::getLocale())}}"
        method="post"
        enctype="multipart/form-data"
        class="my-5"
    >
        @csrf
        <h2>simple img upoad</h2>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="img1" id="img1" />
            <label id="img1_label" class="input-group-text" for="img1"
                >img-Import1</label
            >
        </div>

        <div class="input-group mb-3">
            <input type="file" class="form-control" name="img2" id="img2" />
            <label id="img2_label" class="input-group-text" for="img2"
                >img-import2
            </label>
        </div>

        <input type="submit" value="upload" class="btn btn-success" />
    </form>

    <!-- ---------------excel import -->

    <form
        action="{{route('excelImport', App::getLocale())}}"
        method="post"
        enctype="multipart/form-data"
        class="my-5"
    >
        <h2>excel import</h2>
        @csrf

        <div class="input-group mb-3">
            <input type="file" class="form-control" name="fexcel" id="fexcel" />
            <label id="fexcel_label" class="input-group-text" for="fexcel"
                >excel Import to server</label
            >
        </div>

        <input type="submit" value="upload" class="btn btn-success" />
        <a href="#" class="btn btn-info"> excel export</a>
        <a href="#" class="btn btn-warning"> csv export</a>
    </form>

    <!-- ---------------zip import -->
    <form
        action="{{route('zipImportExtract',App::getLocale())}}"
        method="post"
        enctype="multipart/form-data"
        class="my-5"
    >
        <h2>zip import extract</h2>
        @csrf

        <div class="input-group mb-3">
            <input type="file" class="form-control" name="fzip" id="fzip" />
            <label id="fzip_label" class="input-group-text" for="fzip"
                >zip-Import to server</label
            >
        </div>

        <input type="submit" value="upload" class="btn btn-success" />
        <a href="#" class="btn btn-info"> zip extract</a>
    </form>
</div>
<!-- cc -->
<!-- cc -->
<!-- cc -->
<!-- cc -->
<div class="container mt-5 text-center">
    <h2 class="mb-4">
        Laravel 7 Import and Export CSV & Excel to Database Example
    </h2>

    <form
        action="{{ route('file-import', App::getLocale()) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto">
            <div class="custom-file text-left">
                <input
                    type="file"
                    name="file"
                    class="custom-file-input"
                    id="customFile"
                />
                <label class="custom-file-label" for="customFile"
                    >Choose file</label
                >
            </div>
        </div>
        <button class="btn btn-primary">Import data</button>
        <a
            class="btn btn-success"
            href="{{ route('file-export', App::getLocale()) }}"
            >Export data</a
        >
    </form>
</div>

<script>
    window.onload = function () {
        let img1 = document.querySelector("#img1");
        let img2 = document.querySelector("#img2");
        let fexcel = document.querySelector("#fexcel");
        let fzip = document.querySelector("#fzip");

        let img1_label = document.querySelector("#img1_label");
        let img2_label = document.querySelector("#img2_label");
        let fexcel_label = document.querySelector("#fexcel_label");
        let fzip_label = document.querySelector("#fzip_label");

        img1.addEventListener("change", (e) => {
            img1_label.innerHTML = e.target.files[0].name;
        });

        img2.addEventListener("change", (e) => {
            img2_label.innerHTML = e.target.files[0].name;
        });

        fexcel.addEventListener("change", (e) => {
            fexcel_label.innerHTML = e.target.files[0].name;
        });

        fzip.addEventListener("change", (e) => {
            fzip_label.innerHTML = e.target.files[0].name;
        });
    };
</script>
