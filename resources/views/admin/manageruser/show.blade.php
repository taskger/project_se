@extends('admin.manageruser.layout')
<link rel="stylesheet" href="{{ asset('css/stylecreate.css')}}">

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <a href="{{ url()->previous() }}" class="btn btn-link">
                <img width="40px" class="plus_icon" src="{{URL::asset('/img/arrow-back-8.png')}}">
            </a>
        </div>
    </div>
    <div class="bg">
        <tr>
            <td>
            <img src="{{ asset('uploads/profiles/'.$user->profile_image) }}" width="300px" height="300px" alt="Image">
            </td>
        </tr>
        <div class="textbox">
                    <td><strong>{{ $user->name }} {{ $user->surname }}</strong></td>
                    <br>
                    <td>อีเมล์ &nbsp;</td>
                    {{ $user->email }}
                    <br>
                    <a<strong>เบอร์ &nbsp;</a>
                    {{ $user->telephone }}


        </div>
    </div>
@endsection
