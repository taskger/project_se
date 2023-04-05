
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/usrpnt.css')}}">
    <title>Userdata</title>

</head>
<body>
    <table id = "usr" class = 'usr'>
        <thead>
            <tr>
                <th>prefix</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>phone</th>
                <th>email</th>
                <th>birthday</th>
                <th>identification</th>
                <th>status</th>
                <th>career</th>
                <th>province</th>
                <th>amphoe</th>
                <th>tambon</th>
                <th>input_zipcode</th>
                <th>address</th>
                <th>road</th>
                <th>coverstartdate</th>
                <th>brand</th>
                <th>carmodel</th>
                <th>caryear</th>
                <th>registrationnumber</th>
                <th>registrationprovince</th>
                <th>chassisnumber</th>
                <th>carpaint</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userdatas as $usr )
                <tr>
                    <td>{{$usr->prefix}}</td>
                    <td>{{$usr->firstname}}</td>
                    <td>{{$usr->lastname}}</td>
                    <td>{{$usr->phone}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{$usr->birthday}}</td>
                    <td>{{$usr->identification}}</td>
                    <td>{{$usr->status}}</td>
                    <td>{{$usr->career}}</td>
                    <td>{{$usr->province}}</td>
                    <td>{{$usr->amphoe}}</td>
                    <td>{{$usr->tambon}}</td>
                    <td>{{$usr->input_zipcode}}</td>
                    <td>{{$usr->address}}</td>
                    <td>{{$usr->road}}</td>
                    <td>{{$usr->coverstartdate}}</td>
                    <td>{{$usr->brand}}</td>
                    <td>{{$usr->carmodel}}</td>
                    <td>{{$usr->caryear}}</td>
                    <td>{{$usr->registrationnumber}}</td>
                    <td>{{$usr->registrationprovince}}</td>
                    <td>{{$usr->chassisnumber}}</td>
                    <td>{{$usr->carpaint}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>