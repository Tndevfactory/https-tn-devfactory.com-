@extends('layouts.app') 

@section('head')

<title>Commande</title>


@endsection



@section('content')

<div class="container ">
  
     <?php $data=[
             'level1' => "commande", 
           'level2' => "details" ]
            ?>
     @include('components.breadcrumb', $data)

   
   
     <div class="row row-cols-1 row-cols-sm-2 ">

        <div class="col-sm-8 ">

            <div class="mb-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
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
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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


        </div>

        <div class="col-sm-4 p3" >
          <form action="">

            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between"> <span>Nombre articles</span>  <span>4</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> <span>Frais livraison</span>  <span>30.25 TND</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> <span>Total HT</span>  <span>1330.25 TND</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> 
                  <span>Total TTC</span>  <span>1360.55</span>   </li>
             
            </ul>
            <div class="d-grid gap-2 mt-3">
              <a href="{{route('paiement.details', App::getLocale())}}" class="btn btn-success" type="button">Paiement en ligne</a>
              <a href='{{route('paiement.notification', App::getLocale())}}' class="btn btn-primary" type="button">Paiement à la livraison</a>
            </div>
          </form>

        </div>


     </div>



</div>






@endsection