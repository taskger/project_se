@extends('admin.manageruser.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <a href="{{ route('manageruser.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <div>
    <div>
    <td>{{ $user->name }}</td>


    </div>
    <div class="left">
        <br><strong>ชื่อ</strong><br>
        <div class="box">{{ $user->name }}</div>
    </div>
    </div>

@endsection