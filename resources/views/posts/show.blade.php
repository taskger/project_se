@extends('posts.layout')


@section('content')

     <div class="row mt-5">
       <div class="col-md-12">
       <h2 class="im">Show Post</h2>
       <a href="{{ route('posts.index') }}" Class="btn btn-primary my-3">Back</a>
       </div>
   </div>

   <div class="row">
       <div class="card">
           <div class="card-a">
               <strong>วันตรวจสภาพรถครั้งแรก:</strong>
                {{ $post->a}}
           </div>
        <div class="card-b">
               <strong>วันตรวจสภาพรถครั้งต่อไป:</strong>
                {{ $post->b}}
           </div>
           <div class="card-c">
               <strong>ประกันรถ:</strong>
                {{ $post->c}}
           </div> 
           <div class="card-d">
               <strong>หมดประกัน:</strong>
                {{ $post->d}}
           </div>
           <div class="card-e">
               <strong>เบอร์ประกันภัย:</strong>
                {{ $post->e}}
           </div>
           <div class="card-f">
               <strong>หมายเลขประกัน:</strong>
                {{ $post->f}}
           </div >
            <div class="carimage">
                <img  src="{{ asset('uploads/car/'.$post->profile_car) }}" width="500px" height="250px" alt="Image">
            </div>
       </div>
   </div>

  

@endsection