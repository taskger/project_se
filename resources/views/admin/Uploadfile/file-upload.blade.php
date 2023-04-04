<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 File Upload Example - Tutsmake.com</title> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/addfile.css')}}">
</head>
<body>
<div class="container mt-4">
    <h1 class = "m1">ประกัน Axa</h1>
      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >
        @csrf         
          <div class="row">
            <h3 class = "png">สำเนาบัตรประชาชน</h3>
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="mt-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>                 
              
              <h3 class = "png">สำเนาใบขับขี่รถยนต์</h3>
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="mt-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>   
              
              <h3 class = "png">สำเนาหนังสือการจดทะเบียนรถยนต์</h3>
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="mt-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>   
              
              <h3 class = "png">สำเนากรมธรรม์ประกันรถยนต์ฉบับปัจจุบันที่กำลังจะหมดอายุ</h3>
              <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="mt-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>   
              <div class="col-md-12">
                  <button type="submit" class="btn" id="submit">Submit</button>
              </div>
          </div>     
      </form>
</div> 
</div>  
</body>
</html>