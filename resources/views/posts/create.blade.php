@extends('posts.layout')

@section('content')

   <div class="row mt-5">
       <div class="col-md-12">
       <h2>Add new post</h2>
       <a href="{{ route('posts.index') }}" Class="btn btn-primary my-3">Back</a>
       </div>
   </div>

   @if ($errors->any())
       <div class="alert alert-danger">
        <strong>Whoops!</strong>
        there were some problems with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
       </div>
   @endif

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-grop">
                    <strong>วันตรวจสภาพรถครั้งแรก:</strong>
                    <input type="text" name="a" class="form-control" placeholder="วัน/เดือน/ปี">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-grop">
                    <strong>วันตรวจสภาพรถครั้งต่อไป:</strong>
                    <input type="text" name="b" class="form-control" placeholder="วัน/เดือน/ปี">
            <div class="form-group mb-3">
                <label for="">Student Profile car</label>
                <input type="file" name="profile_car" class="form-control">
            </div>
                
            </div>
        </div>
        <div class="col-md-12">
                <div class="form-grop">
                    <strong>ประกันรถ:</strong>
                    <input type="text" name="c" class="form-control" placeholder="AxA">
                </div>
        <div class="col-md-12">
                <div class="form-grop">
                    <strong>หมดประกัน:</strong>
                    <input type="text" name="d" class="form-control" placeholder="วัน/เดือน/ปี">
                </div>
         <div class="col-md-12">
                <div class="form-grop">
                    <strong>เบอร์ประกันภัย:</strong>
                    <input type="text" name="e" class="form-control" placeholder="02-xxx-xxxx">
                </div>
        <div class="col-md-12">
                <div class="form-grop">
                    <strong>หมายเลขประกัน:</strong>
                    <input type="text" name="f" class="form-control" placeholder="00000-57999/กธ/002233">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </div>
    </form>

@endsection