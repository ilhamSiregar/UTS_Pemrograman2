<!doctype html>
<html>
<head>
    <tittle> Data Karyawan</tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Karyawan</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td> <center><b> NIM </center></td> <td> <center><b>Nama </center></td>
        <td><center><b>TGL_Lahir </center></td>
        <td><center><b>Jenis kelamin </center></td> <td> <center><b>AGAMA </center></td>
        <td> <center><b>Status </center></td><td> <center><b>Alamat </center></td>

        <th> 
            <a href="input-karyawan.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from karyawan order by nik ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['nik'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['tgl_lahir'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_kelamin'] ?> </center> </td>
         <td> <center> <?php echo $row['agama'] ?> </center> </td>
         <td> <center> <?php echo $row['status'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>
         <td>
         <a href="edit-karyawan.php?id=<?php echo $row['id']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-karyawan.php?id=<?php echo $row['id']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>

</div> </div></div>

        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
        
</body>
</html>