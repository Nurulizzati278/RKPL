<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "delete from reservasi where idreservasi='$_GET[id]' ");

// mengalihkan halaman kembali ke index.php
header("location:Home.php");
