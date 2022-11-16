<!doctype html>
<html>
<head>
        <tittle> menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input-karyawan.php" method="post">
            <div class="form-group">
                <label for="nik"><b>NIK </b></label>
                <Input type="text" name="nik" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>NAMA</b></label>
                <Input type="text" name="nama"class="form-control">
            </div>
            <div class="form-group">
                <label for="tgl_lahir"><b>TGL_Lahir</b></label>
                <Input type="date" name="tgl_lahir"class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                <select name="jenis_kelamin" class="form-control">
                <option value ="Laki-laki"> Laki-Laki</option>
                <option value ="Perempuan"> Perempuan</option>
            </select>
            </div>
            <div class="form-group">
                <label for="agama"><b>AGAMA</b></label>
                <Input type="text" name="agama"class="form-control">
            </div>
            <div class="form-group">
                <label for="status"><b> SATATUS</b></label>
                <select name="status" class="form-control">
                <option value ="belum nikah"> Belum Nikah</option>
                <option value ="nikah"> NIKAH</option>
            </select>
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <textarea name="alamat"class="form-control"></textarea><br>
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>