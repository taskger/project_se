@extends('admin.manageruser.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>show img_image</h2>
            <a href="{{ route('manageruser.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <table>
        <tr>
            <td><strong>ชื่อ</strong></td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td><strong>รูปภาพ</strong></td>
            <td>
                <img src="{{ asset('uploads/img/'.$user->img_image) }}" width="200px" height="200px" alt="User Image">
            </td>
        </tr>
    </table>

@endsection
