@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    {{ __('You are logged in!') }}
                    {{ Auth::user()->role }}

                    <br>
                    <a class="btn btn-info" href="{{ route('manageruser.index') }}">ข้อมูล ACCOUNT</a>
                    <br>
                    <br>
                    <a class="btn btn-info" href="{{ route('contacts.index') }}">ข้อมูลลูกค้า</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
