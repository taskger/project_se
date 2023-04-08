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
    ($userdatas as $usr )
    <a class="home" href="http://127.0.0.1:8000/home">PROFILE</a>
    
    <p class="private">ข้อมูลส่วนตัว </p>
    <p class="name">ชื่อ-สกุล: {{$userdatas->firstname}} {{$userdatas->lastname}}</p>
    <p class="gen">เพศ:{{$userdatas->prefix}}</p>
    <p class="accout">บัญชีส่วนตัว</p>
    <p class="mail">Email:{{$userdatas->email}}</p>
    <p class="tel">เบอร์โทรศัพท์:{{$userdatas->phone}}</p>
    
    
</body>
</html>