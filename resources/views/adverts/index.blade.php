<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatble" content="IE=edge">
        <meta name="viweport" cotent="width=device-width, inital-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Adverts</h2>
            </div>
            <div>
                <a href="{{route('adverts.create') }}" class="btn btn-success">Create Adverts</a>
            </div>
            @if ($message = Session :: get('success'))
            <div class = "alert alert-success">
                <p>{{$message}}</p> 
            </div>
            @endif


                @foreach($Adverts as $adverts)
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            <form action="{{ route('adverts.destroy', $adverts->id ) }}" method="POST">
                                <a class="btn btn-link" href="{{ route('adverts.show',$adverts->id) }}">
                                    <img src="{{asset('uploads/img/'.$adverts->img_image)}}" width="1400px" height="400px" alt="image">
                                </a>
                                <a class="btn btn-primary" href="{{ route('adverts.edit',$adverts->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!!$Adverts -> links('pagination::bootstrap-5')!!}
        </div>
</body>
</html> 