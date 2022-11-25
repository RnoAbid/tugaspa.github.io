<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <a href="add.php" class='btn btn-primary btn-md mb-3'>Tambah Data</a>
    <table class="table table-striped table-hover table-bordered mt-5">
        <thead class="table-dark">
            <th>NIS</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </thead>
        <?php
        $sqlGET = "SELECT * FROM mahasiswa";
        $query = mysqli_query($conn, $sqlGET);

        while($data = mysqli_fetch_array($query)){
         echo "
         <tbody>
         <tr>
           <td>$data[nis]</td>
           <td>$data[nama]</td>
           <td>$data[jurusan]</td>
           <td>$data[alamat]</td>
           <td>$data[telp]</td>
           <td class='row'>
               <div class='col d-flex justify-content-center'>
               <a href='update.php?nis=$data[nis]' class='btn btn-sm btn-warning'>Update</a>
               </div>
               <div class='col d-flex justify-content-center'>
               <a href='delete.php?nis=$data[nis]' class='btn btn-sm btn-danger'>Delete</a>
               </div>
           </td>
         </tr>  
        </tbody>
             ";
        }
        ?>

    </table>
    </div>
 
</body>
</html>