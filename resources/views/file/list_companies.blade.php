@extends('template')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#list-file').DataTable();

    });
</script>


<body>
    <br>
    <br>
    <br>
    <br>
    <div class="container ">
        <div class="col col-lg-8 ">
            <h3>Berikut adalah dokumen telah diupload</h3>
            <br>
            <br>
            <table id="list-file" class="display">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $comp)
                    <tr>
                        <td>{{$comp->nama}}</td>
                        <td>{{$comp->email}}</td>
                        <td>{{$comp->logo}}</td>
                        <td>{{$comp->website}}</td>
                        <td> <a href="{{route(('detail-companies'), $comp->id)}}"><button type="submit">Detail</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
</body>
@endsection