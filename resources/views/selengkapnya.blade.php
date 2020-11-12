@extends('layout.master')
@section('content')

<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Article</h2>
            </div>
       </div>
    </div> 
    <div class="about-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">  
                    <div class="card mb-4"> 
                        <div class="card-body">
                          <h2 class="card-title">"{{$data["judul"]}}"</h2>
                          <p class="card-text">{{(strip_tags(html_entity_decode($data["keterangan"])))}}</p>  
                        </div>
                        <div class="card-footer text-muted">
                          Posted on "{{$data["datetime"]}}" by
                          <a href="#">"{{$data["author"]}}"</a>
                        </div>
                        </div>  
                    <br>
                </div>
            </div>
        </div>
</body>
@endsection


