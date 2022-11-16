<?php

//$koneksi= new mysqli('localhost', 'user', 'password', 'database');

$koneksi= new mysqli('localhost', 'root','','panglong');

if($koneksi==true){
	echo "koneksi berhasil";
	echo"<br>";

}
?>