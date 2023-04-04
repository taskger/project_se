@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
@section('content')
<i class="fa fa-user"></i>
@if(session()->has('alert'))
    <script>
        alert('{{ session()->get('alert') }}');
    </script>
@endif 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SIGN IN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-6">

                                <input  id="email" type="email" placeholder="กรอกอีเมล" class="fa-user icon form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="กรอกรหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger" >
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        <div class="row mb-0">
                            <div class="form-group offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="SINGUP">
                                <p> Don't have a account? <a href="register">SIGN UP</a> </p>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
