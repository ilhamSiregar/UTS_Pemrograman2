<?php

include "koneksi.php";
$id=$_POST['id'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update karyawan set nik='$nik', nama='$nama', tgl_lahir='$tgl_lahir', 
jenis_kelamin='$jenis_kelamin', agama='$agama', status='$status', alamat='$alamat' where id='$id'");

if($ubah==true){

    header("location:tampil_karyawan.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>