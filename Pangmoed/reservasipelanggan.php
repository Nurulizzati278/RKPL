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
    <link rel="stylesheet" href="menupelanggan.css" />

    <title>PANGMOED</title>
<style>
    body{
        background-color: rgb(180, 162, 140);
    }
</style>
</head>
<body style="font-family: Poppins, sans-serif">
    <!--wrapper start-->
        <div class="wrapper">

		<!--header menu start-->
		<div class="header">
			<div class="header-menu">
				<div class="title">
					<h6>Hi, Muhammad</h6></span>
				</div>
                <div>
                    <a href="reservasi.php" class="btn btn-secondary">Order Here</a>
                </div>
				<div class="sidebar-btn">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>
		<!--header menu end-->

        <!--sidebar start-->
        <div class="sidebar">
			<div class="sidebar-menu">
                <li class="item">
					<a href="home.php" class="menu-btn active">
						<i class="fas fa-home"></i><span>Home</span>
                    </a>
                </li>
				<li class="item">
					<a href="menupelanggan.php" class="menu-btn active">
						<i class="fas fa-home"></i><span>Menu</span>
					</a>
				</li>
				<li class="item">
					<a href="paket.php" class="menu-btn">
						<i class="fas fa-info-circle"></i><span>Paket</span>
					</a>
				</li>
                <li class="item">
					<a href="reservasipelanggan.php" class="menu-btn">
						<i class="fas fa-info-circle"></i><span>Reservasi</span>
					</a>
				</li>
				<li class="item">
					<a href="index.php" class="menu-btn">
						<i class="fas fa-arrow-left"></i><span>Keluar</span>
					</a>
				</li>
			</div>
		</div>
        <!--sidebar end-->

    <div class="main-container">
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered table-striped">
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
                                <a href="cancel.php?hal=hapus&id=<?= $data['idreservasi'] ?>" onclick="return confirm('Apakah yakin ingin membatalkan pesanan ini?')" class="btn btn-danger"> Cancel </a>
                            </td>
                        </tr>
                    <?php } //penutup perulangan while ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>