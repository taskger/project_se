@extends('admin.manageruser.layout')
<link rel="stylesheet" href="{{ asset('css/stylemanager.css')}}">

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentss</title>
</head>
<body>
<div class="row">
        
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ระบบจัดการสมาชิก</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('manageruser.index') }}" > สมาชิกในระบบ</a>
                <a class="btn btn-info" href="{{ route('manageruser.adminmanager') }}"> แอดมินในระบบ</a>
                <a class="btn btn-info" href="{{ route('manageruser.employeemanager') }}"> พนักงานในระบบ</a>
            </div>
        </div>
</div>
   
    @if ($message = Session::get('success'))
    
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br><a class="button" href="{{ route('manageruser.create') }}" >

    <img width="40px" class="plus_icon" src="{{URL::asset('/img/plus_icongreen.png')}}">

    </a>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Surname</th>
            <th>telephone</th>
            <th>Role</th>
            <th>Email</th>
            <th width="180px">Action</th>
        </tr>
        </thead>
        @php
            $rowNumber = 1;
        @endphp

        @foreach ($users as $user)
            <tr> 
                <td>{{ $rowNumber }}</td>
                <td>
                     <img class="profile" src="{{ asset('uploads/profiles/'.$user->profile_image) }}" width="70px" height="70px" alt="Image">
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('manageruser.destroy',$user->id) }}" method="POST">

                        <a class="btns" href="{{ route('manageruser.edit',$user->id) }} ">
                            <img  width="20px"  src="{{URL::asset('/img/edit.png')}}">
                        </a>

    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-link" onclick="return myFunction();">
                            <img  width="20px" class="plus_icon" src="{{URL::asset('/img/delete-32.png')}}">
                        </button>
                    </form>
                </td>
            </tr>
                @php
                    $rowNumber++;
                @endphp
        @endforeach
    </table>

    <script>
  function myFunction() {
      if(!confirm("คุณยืนยันที่จะลบข้อมูล"))
      event.preventDefault();
  }
 </script>     
</body>
</html>
@endsection