@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       <!-- <div class="form-group row">
                            <label for="choixType" class="col-md-4 col-form-label text-md-right">Vous êtes?</label>
                            <div class="form-group row">-->
                                <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Vous êtes?</label>
 
                                  <div class="col-md-6">
                                <select name="type" class="form-control" >
                                     <!--<select onchange="type = this.value;">-->
                                <option value="" disabled selected>Type de client</option>
                                 <option value ="particulier">Particulier</option>
                                 <option value ="entreprise">Entreprise</option>
                                 <option value ="organisme_public">Organisme Public</option>
                            </select>
                            </div>
                        </div>
                     

                         <!-- <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">Vous êtes?</label>
                                <div class="col-md-6">
                                <select id="select-action" name="type">
                                    <div class="col-md-6">
                                 <option value="" disabled selected>Choose your option</option>
                                 <option value ="particulier">Particulier</option>
                                 <option value ="entreprise">Entreprise</option>
                                 <option value ="organisme_public">Organisme Public</option>
                                 </div>
                            </div>-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Votre Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Votre Adrese mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Votre Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Suivant') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
