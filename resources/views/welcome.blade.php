<link rel="stylesheet" href="{{ asset('css/stylewelcome.css')}}">

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
            @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                    @endauth
                </div>
            @endif
            <div class="col-lg-12 text-center">
            </div>
            @if ($message = Session :: get('success'))
            <div class = "alert alert-success">
                <p>{{$message}}</p> 
            </div>
            @endif
                @foreach($Adverts as $adverts)
                    <tr>
                        <td>
                            <form action="{{ route('adverts.destroy', $adverts->id ) }}" method="POST">
                                <a class="btn btn-link"href=" http://127.0.0.1:8000/axa ">
                                    <br>
                                    <img src="{{asset('uploads/img/'.$adverts->img_image)}}" width="1000px" height="600px" alt="image">
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!!$Adverts -> links('pagination::bootstrap-5')!!}
        </div>
</body>
</html> 
