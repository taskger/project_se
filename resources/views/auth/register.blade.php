@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
@section('content')

<div class="container">
    <div class="bg-image">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CREATE ACCOUNT') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="ชื่อ" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" placeholder="นามสกุล" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="กรอกอีเมล" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>อีเมล์ไม่ถูกต้อง</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label for="telephone" class="col-md-4 col-form-label text-md-end"></label>

                                <div class="col-md-6">
                                    <input id="telephone" type="telephone" placeholder="0x-xxx-xxxx" maxlength="10" onkeypress="javascript:return isNumber(event)" class="form-control @error('telephone') is-invalid @enderror " name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
                                    <script type="text/javascript">
                                        function isNumber(evt)
                                        {
                                            var charCode = (evt.which) ? evt.which : event.keyCode
                                            if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                return false;
                                    
                                            return true;
                                        }
                                    </script>
                                    @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>กรุณากรอกเบอร์ให้ครบ 10 ตัว</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="ใส่รหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="alert alert-danger">
                                            <strong>รหัสผ่านน้อยกว่า 8 ตัว หรือ รหัสผ่านไม่ตรงกัน</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="กรอกรหัสผ่านอีกครั้ง" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                            <div class="row mb-0">
                                <div class="form-group offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <div class="Already">
                                <p> Already have any account? <a href="login">SING IN</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
