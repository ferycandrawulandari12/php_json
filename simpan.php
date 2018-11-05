<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id            = $_POST['id'];
$username      = $_POST['usernmae'];
$password      = $_POST['password'];
$level         = $_POST['level'];
$fullname      = $_POST['fullname'];
// query SQL untuk insert data
$query="INSERT INTO users SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>