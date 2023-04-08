@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/adminhome.css')}}">

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            
        </div>
    </div>   
    <div class="dropdown1">
    <a class="btn btn-dark" href="{{ route('manageruser.index') }}">ข้อมูล ACCOUNT</a>
            <a class="btn btn-dark" href="{{ route('contacts.index') }}">ข้อมูลลูกค้า</a>
            <a class="btn btn-dark" href="{{ route('file-upload.index') }}">File-Upload</a>
            <a class="btn btn-dark" href="{{ route('chatify') }}">chat</a>
            <a class="btn btn-dark" href="{{ route('payments.index') }}">Payment</a>

    </div>                         

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    {{ __('You are logged in!') }}
                    {{ Auth::user()->role }}

                    <br>
                    <a class="btn btn-info" href="{{ route('manageruser.index') }}">ข้อมูล ACCOUNT</a>
                    <br>
                    <br>
                    <a class="btn btn-info" href="{{ route('contacts.index') }}">ข้อมูลลูกค้า</a>
                    <a class="btn btn-info" href="{{ route('file-upload.index') }}">File-Upload</a>
                    <a class="btn brn-info" href="{{ route('payments.index')}}">Check Payment</a>
                    <a class="btn btn-info" href="{{ route('chatify') }}">chat</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
