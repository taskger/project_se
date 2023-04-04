@extends('admin.manageruser.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ระบบจัดการแอดมิน</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('manageruser.index') }}"> สมาชิกในระบบ</a>
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
    <br><a class="btn btn-success btn-lg btn-block" href="{{ route('manageruser.create') }}"> Create New user</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Surname</th>
            <th>telephone</th>
            <th>Role</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $rowNumber = 1;
        @endphp

        @foreach ($users as $user)
            <tr> 
                <td>{{ $rowNumber }}</td>
                <td>
                     <img src="{{ asset('uploads/profiles/'.$user->profile_image) }}" width="70px" height="70px" alt="Image">
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('manageruser.destroy',$user->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('manageruser.show',$user->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('manageruser.edit',$user->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger" onclick="return myFunction();">Delete</button>
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
@endsection