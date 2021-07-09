@extends('layouts.app')
@section('head')

<title>register</title>

@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header mb-5 fw-bolder text-uppercase text-muted">{{ __('Créez votre compte') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register', App::getLocale()) }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6 position-relative">

                                <div class="register_show_hide_password position-absolute">
                                    <span class="register_show_password d-block">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="register_hide_password d-none">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>

                                <input id="register_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6 position-relative">
                                <div class="register_confirm_show_hide_password position-absolute">
                                    <span class="register_confirm_show_password d-block">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="register_confirm_hide_password d-none">
                                        <i class="far fa-eye-slash"></i>
                                    </span>
                                </div>

                                <input id="register_password_confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="d-grid gap-2 mt-2">
                        <a href="{{ route('login' , App::getLocale()) }}" 
                        class="btn btn-default text-muted" type="button">Vous avez déjà un compte ? Connectez-vous !
                    </a>
                       
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
