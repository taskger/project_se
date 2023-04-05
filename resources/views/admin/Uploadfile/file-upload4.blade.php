<!DOCTYPE html>
<html>
<head>
  <title></title> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/addfile.css')}}">
</head>
<body>
<div class="container mt-4">
    <h1 class = "m1">ประกัน AxA</h1>
      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >
        @csrf         
              <h3 class = "png">สำเนากรมธรรม์ประกันรถยนต์ฉบับปัจจุบันที่กำลังจะหมดอายุ</h3>
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file4" placeholder="Choose file" id="file" class = "btnadd">
                        @error('file')
                        <div class="mt-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>   
              <div class="col-md-12">
                  <button type="submit" class="btn" id="submit">Submit</button>
                  <a class="btnreturn" href="{{ route('admin.home') }}">เสร็จสิ้น</a>
              </div>
          </div>     
      </form>
</div> 
</div>  
</body>
</html>