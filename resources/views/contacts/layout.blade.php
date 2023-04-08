<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>ข้อมูลลูกค้าและการแก้ไข</title>
    <style>
        table, th, td {
            border:2px outset black;
            font-size:20px;
            height: 50px;
            text-align: center;
        }

        strong{
            font-size:28px;
        }

        input{
            font-size: 20px;
            width: 400px;
            height: 50px;
            padding: 0 15px;
        }

        select{
            font-size: 20px;
            width: 300px;
            height: 50px;
            padding: 0 15px;
        }

        h1 {
            background-color: #EEEEEE;
            text-align: center;
            font-size: 30px;
            width: 1050px;
            position: relative;
            left: 50px;
        }

        .left {
            font-size: 30px;
            width: 450px;
            position: relative;
            left: 50px;
            
        }
        .right {
            top: -89px;
            font-size: 30px;
            width: 450px;
            position: relative;
            left: 667px;
        }
        .checkbox {
            font-size: 20px;"
            width: 27px;
            position: relative;
            left: 450px;
        }

        .form {
            border: 2px outset red;
            text-align: center;
            color: red;
            border-radius: 10px;
            width: 1070px;
            position: relative;
            left: 40px;
           
        }

        .form1 {
            border: 5px outset green;
            text-align: center;
            border-radius: 10px;
            width: 470px;
            position: relative;
            left: 533px;

           
        }

        .submitcreate {
            /* font-size: 40px;
            width: 0px; */
            position: relative;
            left: 300px;
        }

        .box {
            font-size: 24px;
            width: 400px;
            height: 50px;
            padding: 0 15px;
            border: 1px solid black;

        }

    </style>
</head>
<body>
    
    <div class="container">
        @yield('content')
    </div>




<script src="/test.js"></script>
</body>
</html>