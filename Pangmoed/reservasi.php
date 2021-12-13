<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

if(isset($_POST['isimpan']))
    {
        $simpan = mysqli_query($koneksi, "INSERT INTO reservasi (Makanan, Minuman, Paket, Tempat, NomorMeja, Tanggal, Nohp)
                                                                        VALUES ('$_POST[wmakan]', 
                                                                                '$_POST[wminum]', 
                                                                                '$_POST[wpaket]', 
                                                                                '$_POST[wtempat]',
                                                                                '$_POST[wmeja]',
                                                                                '$_POST[wtanggal]',
                                                                                '$_POST[wnomor]')
                                                                    ");
        if($simpan) //jika berhasil disimpan
        {
            echo "<script>
                        alert('Pesanan anda sudah masuk, apabila terdapat perubahan akan kami hubungi!');
                        document.location='reservasipelanggan.php';
                </script>";
        }
        else //jika gagal disimpan
        {
            echo "<script>
                        alert('Pesanan anda gagal!!');
                        document.location='reservasi.php';
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="menupelanggan.css" />
    
    <title>PANGMOED</title>

<style>
    body{
        background-color: rgb(180, 162, 140);
    }
</style>
</head>

<body style="font-family: Poppins, sans-serif">
<div class="container mt-4">
    <div class="data-form">
        <form method="post" action="#">
            <h6 style="text-align:center"><b>Masukkan Reservasi Anda</b></h6>
            <hr color="black">
                <div class="form-group">
                    <label>Makanan</label>
                    <input type="text" name="wmakan" class="form-control" placeholder="contoh : churros (1)">
                </div>
                <div class="form-group">
                    <label>Minuman</label>
                    <input type="text" name="wminum" class="form-control" placeholder="contoh : teh dingin (2)">
                </div>
                <div class="form-group">
                    <label>Paket</label>
                    <input type="text" name="wpaket" class="form-control" placeholder="contoh : paket 1 (1)">
                </div>
                <div class="form-group">
                    <label>Tempat (Lantai 1/Rooftop)</label>
                    <input type="text" name="wtempat" class="form-control" placeholder="contoh : rooftop" required>
                </div>
                <div class="form-group">
                    <label>Nomor Meja</label>
                    <input type="text" name="wmeja" class="form-control" placeholder="contoh : 01" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="wtanggal" class="form-control" placeholder="contoh : tahun-bulan-tanggal" required>
                </div>
                <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" name="wnomor" class="form-control" placeholder="contoh : 081269787809" required>
                </div>
                <div class="d-flex">
                    <div class="mt-3"></div>
                        <div class="mr-auto p-0">
                            <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                        </div>
                        <div class="ml-auto p-0">
                            <button type="submit" class="btn btn-success center-block" name="isimpan">Simpan</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
                <!-- Akhir Card Tabel -->
</div>
</body>

</html>