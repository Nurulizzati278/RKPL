<?php

    //Memanggil Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "pangmoed";

    $koneksi = mysqli_connect($server, $user, $password, $database)or die(mysqli_error($koneksi));
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
    <div class="main-container">
        <div class="card mt-3" style="background-color: #c0c0c0;">
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <style type="text/css">
                        table td {
                            border-width: 1px;
                            padding: 8px;
                            border-style: solid;
                            border-color: black;
                            background-color: rgba(0, 0, 0, .03);
                        }
                    </style>
                    <tr>
                        <th>No.</th>
                        <th>Makanan</th>
                        <th>Minuman</th>
                        <th>Paket</th>
                        <th>Tempat</th>
                        <th>Nomor Meja</th>
                        <th>Tanggal</th>
                        <th>Nomor Hp</th>
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
                            <td><?= $data['Tempat'] ?></td>
                            <td><?= $data['NomorMeja'] ?></td>
                            <td><?= $data['Tanggal'] ?></td>
                            <td><?= $data['NoHp'] ?></td>
                            <td>
                                <a href="editpelanggan.php?hal=edit&id=<?= $data['idreservasi'] ?>" class="btn btn-warning"> Edit </a>
                                <a href="hapuspelanggan.php?hal=hapus&id=<?= $data['idreservasi'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                            </td>
                        </tr>
                    <?php } //penutup perulangan while ?>
                </table>
            </div>
        </div>
    </div>
        <a href ="index.php" class="btn btn-danger" type="back" style="margin: 50px">Logout</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>