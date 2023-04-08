@extends('layouts.app')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<div class="row">
        
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EVCARE
                <a class="btn btn-primary" href="http://127.0.0.1:8000/adverts" > แนะนำการเลือกประกัน </a>
                <a class="btn btn-secondary" href="http://127.0.0.1:8000/file-upload"> ต่อประกันรถยนต์</a>
                <a class="btn btn-warning" href="http://127.0.0.1:8000/posts"> เช็คสถานะรถ</a>
                <a class="btn btn-dark" href="http://127.0.0.1:8000/profile"> profile</a>

                </h2>
            </div>

            
        </div>
</div>