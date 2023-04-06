

@section('content')

     <div class="row mt-5">
       <div class="col-md-12">
         <h2>Show Post</h2>
       </div>
     </div>

     <div class="row">
       <div class="card">
         <div class="card-a">
           <strong>a:</strong>
           <img src="{{ asset('uploads/img/'.$adverts->img_image) }}" width="200" alt="Advert Image">
         </div>
       </div>
     </div>

@endsection
