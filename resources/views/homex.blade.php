<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
?>
@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
            คุณ{{ Auth::user()->name }} {{ Auth::user()->surname }} 

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

                    {{ __('You are user') }}
                    {{ Auth::user()->role }}
                    test
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
