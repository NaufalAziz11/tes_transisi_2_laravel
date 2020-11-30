@extends('template')

@section('content')



<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container ">

        <div class="col col-lg-8 ">
            <h3>Berikut adalah Detail Data</h3>
            <br>
            <br>
            <form id="form-add-course" role="form" method="post" action="{{ route('update_companies') }}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $companies->id}}">
                {{ csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama file" name="nama" value="{{$companies->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" placeholder="Masukkan email" name="email" value="{{$companies->email}}">
                </div>
                <section class="jumbotron text-center">
                    <div class="container">
                        <div class="file-upload-wrapper" data-text="Pilih File Kamu!">
                            <input name="logo" type="file" class="file-upload-field" value=" ">
                        </div>

                    </div>
                </section>
                <div class="form-group">
                    <label for="exampleInputEmail1">website</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama website" name="website" value="{{$companies->website}}">
                </div>
                <button type="submit" id="buttonUpload" name="submit" value="update" class="btn btn-warning">Update</button>
                <button type="submit" id="buttonUpload" name="submit" value="delete" class="btn btn-danger">Delete</button>

            </form>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
</body>
@endsection