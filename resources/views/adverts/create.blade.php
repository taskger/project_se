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
                <a href="{{route('adverts.index') }}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                {{ session('status')}}
                </div>
            @endif 
            <form action="{{ route('adverts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        <strong>Adverts img</strong>
                        <input type="img" name="img" class="form-control" placeholder="Adverts img">
                        @error('img')
                            <div class="alert alert-denger">{{$message}}</div>
                        @enderror 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mt-3">
                        <strong>Adverts text</strong>
                        <input type="text" name="text" class="form-control" placeholder="Adverts text">
                        @error('text')
                            <div class="alert alert-denger">{{$message}}</div>
                        @enderror 
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Image</label>
                    <input type="file" name="img_image" class="form-control">
                </div>
                <div class="col-md-12">
                     <button type="submit" class="mt-3 btn btn-primary">submit</button>
                </div>
                  </div>
            </form>
        </div>
    </div>
</body>
</html> 