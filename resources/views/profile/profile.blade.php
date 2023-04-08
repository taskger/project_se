<link rel="stylesheet" href="{{ asset('css/profile.css')}}">

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    @foreach ($userdatas as $usr )
    <a class="home" href="http://127.0.0.1:8000/home">PROFILE</a>
    {{$usr->profile_image}}
    <p class="private">ข้อมูลส่วนตัว </p>
    <p class="name">ชื่อ-สกุล: {{$usr->firstname}} {{$usr->lastname}}</p>
    <p class="gen">เพศ:{{$usr->prefix}}</p>
    <p class="accout">บัญชีส่วนตัว</p>
    <p class="mail">Email:{{$usr->email}}</p>
    <p class="tel">เบอร์โทรศัพท์:{{$usr->phone}}</p>
    @endforeach
    
</body>
</html>