@extends('layout.master')
@section('content')

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Make Your Article</h2>
            </div>
       </div>
    </div> 
    <div class="cart-box-main">
        <div class="container">
            <form action="{{url('post-artikel')}}" class="form-contact contact_form" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" name="judul" id="judul" type="text" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penulis</label>
                            <input class="form-control" name="author" id="author" type="text" placeholder="Nama Penulis">
                        </div>
                    </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="">Artikel</label>
                        <textarea class="keterangan" name="keterangan" id="keterangan"></textarea>
                        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                        <script>
                            tinymce.init({
                                selector:'textarea.keterangan',
                                width: 900,
                                height: 300
                            });
                        </script>
                    </div>  
                </div>
                <br>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
                </div>
            </form>
            
        </div>
    </div>
</body>
@endsection
