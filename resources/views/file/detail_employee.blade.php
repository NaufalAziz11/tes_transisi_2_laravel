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
            <form id="form-add-course" role="form" method="post" action="{{ route('update_employee') }}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $employee->id}}">
                {{ csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama file" name="nama" value="{{$employee->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">company</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama company" name="company" value="{{$employee->company}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" placeholder="Masukkan email" name="email" value="{{$employee->email}}">
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