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
                    @foreach ($artikel as $key => $item)
                    <div class="card mb-4"> 
                        <div class="card-body">
                          <h2 class="card-title">{{$item->judul}}</h2>
                          <p class="card-text">{{str_limit(strip_tags(html_entity_decode($item->keterangan)), 400, '  ...')}}</p>
                          <a href="{{url('selengkapnya', $key)}}" class="btn btn-link btn-sm">Baca Selengkapnya &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                          Posted on {{$item->datetime}} by
                          <a href="#">{{$item->author}}</a>
                          <a class="btn btn-secondary float-right" href="{{url('hapus-artikel', $key)}}">Delete</a>
                          <a class="btn btn-secondary float-right" href="{{url('edit-artikel', $key)}}">Edit</a>
                        </div>
                        </div>  
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
</body>
@endsection


