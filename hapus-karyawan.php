<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from karyawan where id='$id'");

if($hapus==true){

    header("location:tampil_karyawan.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>