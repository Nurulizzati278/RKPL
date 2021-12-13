<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="sidebar.css" />
    
    <title>PANGMOED</title>

<style>
    body{
        background-color: rgb(180, 162, 140);
    }
</style>
</head>

<body style="font-family: Poppins, sans-serif">
    <div class="container mt-4">
        <h1 align="center" style="background-color: rgba(182, 185, 185, 0.767);">MENU</h1>
<body>
<div class="main-container">
                <!-- Awal Card Tabel -->
                <div class="card mt-3" style="background-color: rgba(182, 185, 185, 0.767);">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <style type="text/css">
                                table td {
                                    border-width: 1px;
                                    padding: 8px;
                                    border-style: solid;
                                    border-color: black;
                                    background-color: #fff;
                                }
                            </style>
                            <tr>
                            <th>No.</th>
                            <th>Makanan</th>
                            <th>Minuman</th>
                            <th>Paket</th>
                            <th>Pilihan</th>
                        </tr>
                        <?php
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * from reservasi order by idreservasi asc");
                        while ($data = mysqli_fetch_array($tampil)) {

                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['Makanan'] ?></td>
                                <td><?= $data['Minuman'] ?></td>
                                <td><?= $data['Paket'] ?></td>
                                <td>
                                    <a href="editmenu.php?hal=edit&id=<?= $data['idreservasi'] ?>" class="btn btn-warning"> Edit </a>
                                    <a href="hapusmenu.php?hal=hapus&id=<?= $data['idreservasi'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                                </td>
                            </tr>
                        <?php } //penutup perulangan while ?>
                    </table>
                    <a href="tambahmenu.php" class="btn btn-info fw-bold text-white mt-2" style="width: 140px; margin:5px;">Tambah Data</a>
                    <a href="homeadmin.php" class="btn btn-danger fw-bold text-white mt-2">Kembali</a>
                </div>
                </div>
                <!-- Akhir Card Tabel -->
			</div>
			<!--main container end-->
    </div>
    </div>
</body>

</html>