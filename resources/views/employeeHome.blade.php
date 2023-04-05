@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                @if(session()->has('alert'))
                        <script>
                            alert('{{ session()->get('alert') }}');
                        </script>
                    @endif 
                    {{ __('You are logged in!') }}
                    {{ Auth::user()->role }}
                    <a class="btn btn-info" href="{{ route('manageruser.index') }}">ข้อมูล ACCOUNT</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
