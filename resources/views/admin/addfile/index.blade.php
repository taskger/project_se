<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/addfile.css')}}">
    <title>Document</title>
</head>
<body>
    <h1 class = "m1">ประกัน Axa</h1>
    <h3 class = "txtbox">สำเนาบัตรประชาชน</h3>
    <div class = "box">
        <input accept=".png,.jpg,.pdf" type="file" name = "File" class = "pngfile">
    </div>
    <h3 class = "txtbox">สำเนาใบขับขี่รถยนต์</h3>
    <div class = "box">
        <input accept=".png,.jpg,.pdf" type="file" name = "File" class = "pngfile">
    </div>
    <h3 class = "txtbox">สำเนาหนังสือการจดทะเบียนรถยนต์</h3>
    <div class = "box">
        <input accept=".png,.jpg,.pdf" type="file" name = "File" class = "pngfile">
    </div>
    <h3 class = "txtbox">สำเนากรมธรรม์ประกันรถยนต์ฉบับปัจจุบันที่กำลังจะหมดอายุ</h3>
    <div class = "box">
         <input accept=".png,.jpg,.pdf" type="file" name = "File" class = "pngfile">
    </div>
    <div>
        <button id = "btn" class = "btnargree">ยืนยัน</button>
        <button  class = "btndisargree">ยกเลิก</button>
    </div>
</body>
</html>