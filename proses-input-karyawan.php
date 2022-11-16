<?php

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("insert into karyawan(nik,nama,tgl_lahir,jenis_kelamin,agama,status,alamat) 
                        values('$nik','$nama','$tgl_lahir','$jenis_kelamin','$agama','$status','$alamat')");

if($simpan==true){

    header("location:tampil_karyawan.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>