<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control" id="company" name="company">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>