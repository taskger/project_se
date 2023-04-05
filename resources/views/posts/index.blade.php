@extends('posts.layout');


@section('content')

    <div class="row mt-5">
        <h2>Laravel 8 CRUD -Index</h2>
        <a href="{{  route('posts.create') }}" class="btn-success">Create new post</a>
    </div>

@endsection