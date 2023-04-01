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

    <form action="{{ route('manageruser.update') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="role">เลือกสถานะ</label>

                <select name="role" id="role">
                    <option value="user">ผู้ใช้งาน</option>
                    <option value="admin">แอดมิน</option>
                    <option value="employee">พนักงาน</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surname:</strong>
                <input class="form-control" name="surname" placeholder="Surname"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input class="form-control" name="email" placeholder="Email"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone:</strong>
                <input class="form-control" name="telephone" placeholder="Telephone"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="password">
                <strong>Password:</strong>
                <input class="form-control" name="password" placeholder="Password"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>




@endsection