@extends('layouts.app2')

@section('content')
<div class="container d-flex flex-column justify-content-between vh-100">
    <div class="row justify-content-center mt-5">
    <div class="col-xl-5 col-lg-6 col-md-10">
        <div class="card">
        <div class="card-header bg-primary">
            <div class="app-brand">
            <a href="/home">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                viewBox="0 0 30 33">
                <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                </g>
                </svg>
                <span class="brand-name"><h3>Weldeman</h3></span>
            </a>
            </div>
        </div>
        <div class="card-body p-5">

            <h4 class="text-dark mb-5">Login</h4>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                <input type="email" name="email" class="form-control input-lg @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Digite seu email" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group col-md-12 ">
                <input type="password" name="password" class="form-control input-lg @error('password') is-invalid @enderror" id="password" placeholder="Senha">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-md-12">
                <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                    <label class="control control-checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <div class="control-indicator"></div>
                        <label class="form-check-label" for="remember">
                            Lembrar-me
                        </label>
                    </label>
            
                    </div>
                    <p><a class="text-blue" href="#">Esqueceu a senha?</a></p>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">
                    {{ __('Login') }}   
                </button>
                <p>Ainda não tem conta?
                    <a class="text-blue" href="/register">Registre-se</a>
                </p>
            
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
    <div class="copyright pl-0">
    <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
        <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
    </p>
    </div>
</div>

@endsection
