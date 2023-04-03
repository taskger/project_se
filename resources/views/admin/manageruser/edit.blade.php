@extends('admin.manageruser.layout')

@section('content')


        <h2>Edit</h2>
        <a href="{{ route('manageruser.index') }}" class="btn btn-primary my-3">Back</a>


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

    <form action="{{ route('manageruser.update', $user->id) }}" method="post">
        @csrf
        @method('put')

                
                <br>
                <div><h1>ข้อมูลของ {{ $user->name }} {{ $user->surname }} </h1></div>

                <div class="left">
                    <br><strong>สถานะ {{ $user->role }}</strong><br>
                </div>               
                <select name="role" id="role" class="form-control" >
                </select>

                <div class="left">
                    <br><strong>ชื่อ</strong><br>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"></input>
                </div>


                <div class="right">
                    <strong>นามสกุล</strong><br>
                    <input type="text" name="surname" value="{{ $user->surname }}" class="form-control" ></input>
                </div>

                <div class="left">
                    <strong>เบอร์</strong><br>
                    <input type="text" name="telephone" value="{{ $user->telephone }}" class="form-control" ></input>
                </div>

                <div class="right">
                    <strong>อีเมล</strong><br>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" ></input>
                </div>

                <div class="submitcreate">
                    <button type="submit" class="btn btn-success my-3">Update</button>
                </div>

            

        
    </form>




@endsection