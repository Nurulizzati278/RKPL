<?php

//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

//Data akan disimpan Baru
if (isset($_POST['idaftar'])) {
    $simpan = mysqli_query($koneksi, "INSERT INTO register (Nama, Email, NoHp, Password)
                                                                        VALUES ('$_POST[wnama]', 
                                                                                '$_POST[wemail]',
                                                                                '$_POST[wnomor]',
                                                                                '$_POST[wpassword]')
                                                                                ");
    if ($simpan) //jika berhasil disimpan
    {
        echo "<script>
                        alert('Berhasil Mendaftar!');
                        document.location='Home.php';
                </script>";
    } else //jika gagal disimpan
    {
        echo "<script>
                        alert('Gagal Mendaftar!!');
                        document.location='index.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANGMOED</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Login.css">
</head>

<body>
        <div class="data-form">
        <form method="post" action="#">
            <h1 class="text-left"><b>Daftar</b></h1>
            <h6 style="text-align:left">Lengkapi data dirimu dibawah ini</h6>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="wnama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="wemail" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nomor Hp</label>
                <input type="text" name="wnomor" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="wpassword" class="form-control" placeholder="Terdiri dari 8 huruf"required>
                <div class="form-group">
                <div class="d-flex">
                    <div class="mt-3"></div>
                    <div class="mr-auto p-2">
                        <button type="button" class="btn btn-dark center-block" onclick="history.back();">Batal</button>
                    </div>
                    <div class="ml-auto p-2">
                        <button type="submit" class="btn btn-success center-block" name="idaftar">Daftar</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
</body>

</html>