<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="sidebar.css" />
	<link rel="stylesheet" href="home.css" />
    
    <title>PANGMOED</title>
<style>
    body{
        background-color: rgb(180, 162, 140);
    }
</style>
</head>

<body>
    <!--wrapper start-->
	<div class="wrapper">
		<!--header menu start-->
		<div class="header">
			<div class="header-menu">
				<div class="title">
					<h6>SELAMAT DATANG</h6></span>
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
				<div class="data-form">
                    <form method="post" action="#">
                        <hr color="black">
                        <div class="form-group">
                        <br>
                            <h6 style="text-align: center">Jika Anda butuh bantuan kami, silahkan hubungi kami</h6>
                            <a class="link" href="whatsapp://send?text=Hello&phone=+62895611028883">Click Here</a>
                        <br>
                        </div>
                        <hr color="black">
                    </form>
                </div>
			</div>
</body>
</html>