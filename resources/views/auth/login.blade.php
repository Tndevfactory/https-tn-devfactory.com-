@extends('layouts.app') 

@section('head')

<title>login</title>

@endsection

@section('content')


<div class="container login  my-5">
    <div class="row  justify-content-center  ">
        <div class="col-md-6 ">
            <div class="card shadow-sm">
                <div class="card-header mb-5 fw-bolder text-uppercase text-muted">{{ __("Connectez-vous à votre compte") }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login', App::getLocale()) }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label
                                for="email"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("E-Mail") }}</label
                            >

                            <div class="col-md-6">
                                <input
                                    id="email"
                                    type="email"
                                    class="
                                        form-control
                                        @error('email')
                                        is-invalid
                                        @enderror
                                    "
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label
                                for="password"
                                class="col-md-4 col-form-label text-md-right"
                                >{{ __("Password") }}</label
                            >

                            <div class="col-md-6 position-relative">

                                <div class="login_show_hide_password position-absolute">
                                    <span class="login_show_password d-block">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="login_hide_password d-none">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>

                                <input
                                    id="login_password"
                                    type="password"
                                    class="
                                        form-control
                                        @error('password')
                                        is-invalid
                                        @enderror
                                    "
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"
                                    type="checkbox" name="remember"
                                    id="remember"
                                    {{ old("remember") ? "checked" : "" }}>

                                    <label
                                        class="form-check-label"
                                        for="remember"
                                    >
                                        {{ __("Remember Me") }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("Login") }}
                                </button>

                                @if (Route::has('password.request'))
                                <a
                                    class="btn btn-link text-decoration-none text-muted"
                                    href="{{ route('password.request' , App::getLocale()) }}"
                                >
                                    {{ __("Oubli mot de passe?") }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="d-grid gap-2 mt-2">
                        <a href="{{ route('register' , App::getLocale()) }}" class="btn btn-default text-muted" type="button">Pas de compte ? Créez-en un</a>
                       
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
