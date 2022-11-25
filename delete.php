<?php
include'koneksi.php';

$nis = $_GET['nis'];
$sqlDelete = "DELETE FROM mahasiswa WHERE nis='$nis'";
mysqli_query($conn, $sqlDelete);

header("location: index.php");
?>