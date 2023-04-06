@extends('posts.layout');


@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
        <h2>ระบบจัดการรถยนต์</h2>
        <a href="{{  route('posts.create') }}" class="btn btn-success my-3">Create new car</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">

       <tr>
        <th>จำนวน</th>
        <th>วันตรวจสภาพรถครั้งแรก</th>
        <th>วันตรวจสภาพรถครั้งต่อไป</th>
        <th>ประกันรถ</th>
        <th>หมดประกัน</th>
        <th>เบอร์ประกันภัย</th>
        <th>หมายเลขประกัน</th>
        <th>car</th>
        <th with="280px">Action</th>


       </tr>

       @foreach ($data as $key => $value)
       <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->a }}</td>
        <td>{{ $value->b }}</td>
        <td>{{ $value->c }}</td>
        <td>{{ $value->d }}</td>
        <td>{{ $value->e }}</td>
        <td>{{ $value->f }}</td>        
            <td>
                <img src="{{ asset('uploads/car/'.$value->profile_car) }}" width="70px" height="70px" alt="Image">
                </td>
            <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                        <td>            

                <a href="{{ route('posts.show', $value->id) }}" Class="btn btn-primary">Show</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" Class="btn btn-danger">Delete</button>
            </form>

        </td>
       </tr>
       @endforeach

    </table>

@endsection