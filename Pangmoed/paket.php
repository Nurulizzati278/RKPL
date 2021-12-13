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
					<a href="menupelanggan.php" class="menu-btn">
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
        <div class="card mt-3" style="background-color: #888484;">
        <div class="card-header text-black text-center">
            <h1 align="center">PAKET</h1>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-striped">
                <tr>
                    <th>PAKET 1 (20K)</th>
                    <th>PAKET 2 (30K)</th>
                    <th>PAKET 3 (35k)</th>
                </tr>
                <tr>
                    <td>Nasi Putih Ayam (Bakar/Penyet)</td>
                    <td>Nasi Putih Ayam (Bakar/Penyet)</td>
                    <td>Nasi Putih Ayam (Bakar/Penyet)</td>
                </tr>
                <tr>
                    <td>Teh Dingin/Lemon Tea/Air Mineral</td>
                    <td>Teh Dingin/Lemon Tea/Air Mineral</td>
                    <td>Teh Dingin/Lemon Tea/Air Mineral</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kentang Goreng</td>
                    <td>Kentang Goreng dan Churros</td>
                </tr>
        </table>
        </div>
        <a href ="Home.php" class="btn btn-danger" type="back" >Back</a>
        <a href ="reservasi.php" class="btn btn-success" type="next">Next</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>