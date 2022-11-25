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
    <div class="w-50  mx-auto border p-3 mt-5">
    <a href="index.php">Kembali ke Home</a>
    <form action="add.php" method="post">
    <label for="nis">NIS</label>
    <input type="text" id="nis" name="nis"  class="form-control" required>

    <label for="nis">Nama</label>  
    <input type="text" id="nama"name="nama" class="form-control" required>
    
    <label for="jurusan">Jurusan</label>
    <select name="jurusan" id="jurusan" class="form-select form-control" required >
        <option>Pilih Jurusan</option>
        <option value="RPL">RPL</option>
        <option value="Pemesinan">Pemesinan</option>
        <option value="Tekstil">Tekstil</option>
        <option value="Otomitif">Otomotif</option>
    </select>

    <label for="nis">Alamat</label>
    <input type="text" id="alamat" name="alamat" class="form-control" required>

    <label for="nis">Telepon</label>
    <input type="text" id="telp" name="telp" class="form-control" required>

    <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">
    </form>
    </div>
   
   <?php
    if(isset($_POST['tambah'])){
        $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $jurusanSelect= $_POST['jurusan'];
    if ($jurusanSelect == 'RPL'){
        $jurusan = 'RPL';
    }    
    if ($jurusanSelect == 'Pemesinan'){
        $jurusan = 'Pemesinan';
    }    
    if ($jurusanSelect == 'Tekstil'){
        $jurusan = 'Tekstil';
    }    
    if ($jurusanSelect == 'Otomotif'){
        $jurusan = 'Otomotif';
    }    

    $sqlGet = "SELECT * FROM mahasiswa";
    $queryGet = mysqli_query($conn, $sqlGet);
    $cek = mysqli_num_rows($queryGet);

    $sqlInsert = "INSERT INTO mahasiswa(nis,nama,jurusan,alamat,telp)
                  VALUE ('$nis','$nama','$jurusan','$alamat','$telp')";
    
    try {
        $queryInsert = mysqli_query($conn, $sqlInsert);
        echo ("<div class='alert alert-success'>Data Berhasil Ditambahkan<a href='index.php'>Lihat Data</a></div>");
    } catch (\Throwable $th) {
        // var_dump($th);
        echo ("<div class='alert alert-danger'>Data Gagal Ditambahkan <a href='index.php'>Lihat Data</a></div>");
        // die();
    }
    
    }
    
   ?> 
</body>
</html>