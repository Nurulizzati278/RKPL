<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

    if(isset($_POST['isimpan']))
	{
    		if($_GET['hal'] == "edit")
    		{
    			//Data akan di edit
    			$edit = mysqli_query($koneksi, "UPDATE reservasi set
    											 	Makanan = '$_POST[kmakan]',
    											 	Minuman = '$_POST[kminum]',
    												Paket = '$_POST[kpaket]',
    											 	Tempat = '$_POST[ktempat]',
                                                    NomorMeja = '$_POST[kmeja]',
                                                    Tanggal = '$_POST[ktanggal]',
                                                    NoHp = '$_POST[knomor]'
    											WHERE idreservasi = '$_GET[id]'
    										   ");
    			if($edit) //jika edit sukses
    			{
    				echo "<script>
    						alert('Data Berhasil di Edit!');
    						document.location='reservasiadmin.php';
    				     </script>";
    			}
    			else
    			{
    				echo "<script>
    						alert('Data Gagal di Edit!!');
    						document.location='editpelanggan.php';
    				     </script>";
    			}
    		}
    }
    if(isset($_GET['hal']))
    {
        //Pengujian jika edit Data
        if($_GET['hal'] == "edit")
        {
            //Tampilkan Data yang akan diedit
            $tampil = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE idreservasi = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                //Jika data ditemukan, maka data ditampung ke dalam variabel
                $bmakan = $data['Makanan'];
                $bminum = $data['Minuman'];
                $bpaket = $data['Paket'];
                $btempat = $data['Tempat'];
                $bmeja = $data['NomorMeja'];
                $btanggal = $data['Tanggal'];
                $bnomor = $data['NoHp'];
            }
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
            <h6 style="text-align:center"><b>Edit Reservasi</b></h6>
            <hr color="black">
                <div class="form-group">
                    <label>Makanan</label>
                    <input type="text" name="kmakan" value="<?=@$data['Makanan']; ?>" class="form-control" placeholder="contoh : churros (1)">
                </div>
                <div class="form-group">
                    <label>Minuman</label>
                    <input type="text" name="kminum" value="<?=@$data['Minuman']; ?>" class="form-control" placeholder="contoh : teh dingin (2)">
                </div>
                <div class="form-group">
                    <label>Paket</label>
                    <input type="text" name="kpaket" value="<?=@$data['Paket']; ?>" class="form-control" placeholder="contoh : paket 1 (1)">
                </div>
                <div class="form-group">
                    <label>Tempat (Lantai 1/Rooftop)</label>
                    <input type="text" name="ktempat" value="<?=@$data['Tempat']; ?>" class="form-control" placeholder="contoh : rooftop" required>
                </div>
                <div class="form-group">
                    <label>Nomor Meja</label>
                    <input type="text" name="kmeja" value="<?=@$data['NomorMeja']; ?>" class="form-control" placeholder="contoh : 01" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" name="ktanggal" value="<?=@$data['Tanggal']; ?>" class="form-control" placeholder="contoh : tahun-bulan-tanggal" required>
                </div>
                <div class="form-group">
                    <label>Nomor Hp</label>
                    <input type="text" name="knomor" value="<?=@$data['NoHp']; ?>" class="form-control" placeholder="contoh : 081269787809" required>
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