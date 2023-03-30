@extends('admin.manageruser.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Manager</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ url()->previous() }}">ย้อนกลับ</a>
                
                <a class="btn btn-success" href="{{ route('manageruser.create') }}"> Create New user</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Surname</th>
            <th>telephone</th>
            <th>Role</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr> 
            <td>{{ $user->id }}</td>
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
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection