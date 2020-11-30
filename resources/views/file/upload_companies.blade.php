@extends('template')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/upload.css') }}">


<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container ">
        <h1> Selamat Datang di DropBix Budi! </h1>

        <br>
        <br>
        <div class="col col-lg-8 ">
            <h3>Silahkan Upload Dokumen Kamu!</h3>
            <br>
            <br>
            <form role="form" method="post" action="{{ route('upload-companies') }}" enctype="multipart/form-data">
                {{ csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email">
                </div>
                <section class="jumbotron text-center">
                    <div class="container">


                        <div class="file-upload-wrapper" data-text="Pilih File Kamu!">
                            <input type="file" name="logo" id="logo" class="file-upload-field" value="">
                        </div>

                    </div>
                </section>
                <div class="form-group">
                    <label for="exampleInputEmail1">website </label>
                    <input type="text" name="website" id="website" class="form-control" placeholder="Masukkan nama website">
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