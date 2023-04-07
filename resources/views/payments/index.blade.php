<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/money1.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/js/index.js'); ?>">
    <title>คิดเงิน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>CHECK PAYMENT</h2>
                </div>
                <div>
                    <a href="{{ route('checkcay.index')}}" class="btn btn-success">create Check</a> 
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Pass</th>
                        <th>Not pass</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach($payments as $Checkpay)
                        <tr>
                            <td>{{ $Checkpay->id }}</td>
                            <td>{{ $Checkpay->pass }}</td>
                            <td>{{ $Checkpay->notpass }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    
    </body>
</html>