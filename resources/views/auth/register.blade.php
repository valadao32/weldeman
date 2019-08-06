@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="app-brand">
                    <a href="/index.html">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                        </svg>
                        <span class="brand-name">Weldeman Dashboard</span>
                    </a>
                    </div>
                </div>
                <div class="card-body p-5">
                    <h4 class="text-dark mb-5">Registre-se</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                            <input type="text" class="form-control input-lg @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group col-md-12 mb-4">
                            <input type="email" class="form-control input-lg @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="E-mail"  name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group col-md-12 ">
                            <input type="password" name="password" required autocomplete="new-password" class="form-control input-lg @error('password') is-invalid @enderror" id="password" placeholder="Senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group col-md-12 ">
                                <input type="password" class="form-control input-lg" id="password-confirm" placeholder="Confirme a Senha" name="password_confirmation" required autocomplete="new-password">
                                {{ __('Confirm Password') }}    
                            </div>
                            <div class="col-md-12">
                            <div class="d-inline-block mr-3">
                                <label class="control control-checkbox">
                                    
                                    <input type="checkbox" />
                                    <div class="control-indicator"></div>
                                    Eu aceito as condições
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">{{ __('Register') }}</button>
                            <p>Já possui uma conta!?
                                <a class="text-blue" href="/login">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
