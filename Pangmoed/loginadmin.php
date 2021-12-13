<?php
//Memanggil Koneksi Database
$server = "localhost";
$user = "root";
$password = "";
$database = "pangmoed";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

if (isset($_POST['ilogin'])) {
    $NoHp = $_POST['tnohp'];
    $Password = $_POST['tpassword'];

    $login = mysqli_query($koneksi, "select * from admin where NoHp='$NoHp'");
    $cek = mysqli_num_rows($login);

    if ($cek === 1) {
        $fetch_pass = mysqli_fetch_assoc($login);
        $cek_password = $fetch_pass['Password'];

        if ($cek_password <> $Password) {
            echo "<script>alert('Password salah');</script>";
        } else {
            echo "<script>alert('Login Berhasil');
                document.location='reservasiadmin.php'</script>";
        }
    } else {
        echo "<script>alert('Nomor Hp dan Password Anda belum terdaftar!!');</script>";
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
    body{
        background-color: rgb(180, 162, 140);
    }

    .data-form form{
        background-color: rgba(182, 185, 185, 0.767);
        max-width: 639px;
        height: 357;
        margin: auto;
        padding: 30px 70px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-left-radius: 30px;
        border-bottom-right-radius: 30px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.100);
    }

    .btn_login{
        background: rgba(94, 90, 90, 0.767);
    }
</style>
</head>
<body>
<br/><br/>

        <div class="data-form">
                <form method="post" action="#">
                    <h6 style="text-align:center"><b>Login sebagai Admin :</b></h6>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="number" name="tnohp" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="tpassword" class="form-control" required>
                    </div>
                    <div class="btn_login">
                    <button type="submit" name="ilogin" class="btn btn-block login">LOGIN</button>
                    </div><br>
                    <hr color="black">
                    <center>
                      <a class="link" href="index.php">Batal</a><br>
		                </center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>