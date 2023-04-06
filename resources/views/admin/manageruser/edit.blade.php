@extends('admin.manageruser.layout')
<link rel="stylesheet" href="{{ asset('css/stylemanager.css')}}">

@section('content')

    <div class="pull-right">
            <a href="{{ route('manageruser.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
        <h2>แก้ไขข้อมูล</h2>
        


    @if ($errors->any())
        <div class="alert alert-danger">
            <br><strong>คุณขาดการกรอกข้อมูล!</strong><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manageruser.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

                
                <br>
                <div class="name">
                    <h1>
                    <img src="{{ asset('uploads/profiles/'.$user->profile_image) }}" width="100px" height="100px" alt="Image">    
                    ข้อมูลของ {{ $user->name }} {{ $user->surname }} 
                        
                    </h1>
                </div>


                <div class="form-group mb-3">
                    <strong><label for="">อัพโหลดรูปโปรไฟล์</label></strong>
                    <input type="file" name="profile_image" class="form-control">
                </div>
                <div class="left">
                    <strong>ชื่อ</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"></input>
                </div>


                <div class="right">
                    <strong>นามสกุล</strong>
                    <input type="text" name="surname" value="{{ $user->surname }}" class="form-control" ></input>
                </div>

                <div class="left">
                    <strong>เบอร์</strong>
                    <input type="text" name="telephone" value="{{ $user->telephone }}" class="form-control" ></input>
                </div>

                <div class="right">
                    <strong>อีเมล</strong>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" ></input>
                </div>

                <div class="right">
                    <strong>พาสเวิร์ด</strong><br>
                    <input type="text" name="password" class="form-control" ></input>
                </div>
                <div class="submitcreate">
                    <button type="submit" class="btn btn-success my-3">Update</button>
                </div>

            

        
    </form>




@endsection