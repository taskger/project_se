@extends('admin.manageruser.layout')
<link rel="stylesheet" href="{{ asset('css/stylecreate.css')}}">

@section('content')
<body>
    <div class="rowdSS">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>เพิ่มข้อมูล</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('manageruser.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('manageruser.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="role">สถานะ</label>

                    <select name="role" id="role">
                        <option value="user">ผู้ใช้งาน</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <label for="">อัพโหลดรูปโปรไฟล์</label>
                    <input type="file" name="profile_image" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="ชื่อ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input class="form-control" name="surname" placeholder="นามสกุล"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input class="form-control" name="email" placeholder="อีเมล์"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input class="form-control" name="telephone" placeholder="เบอร์โทรศัพท์"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="password">
                    <input class="form-control" name="password" placeholder="รหัสผ่าน"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
</body>
@endsection