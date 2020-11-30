@extends('template')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/upload.css') }}">


<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container ">
        <div class="col col-lg-8 ">
            <h3>Silahkan Upload Dokumen Kamu!</h3>
            <br>
            <br>
            <form role="form" method="post" action="{{ route('upload-employee') }}" enctype="multipart/form-data">
                {{ csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Company </label>
                    <input type="text" name="company" class="form-control" placeholder="Masukkan nama company">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan email">
                </div>


                <button type="submit" id="buttonUpload" class="btn btn-primary">Upload</button>

            </form>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
</body>
@endsection