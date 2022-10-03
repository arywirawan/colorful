<?php
require 'koneksi.php';

// if ($_POST['password'] == $_POST['password1']) {
//     //proses simpan data, $_POST['pw'] dan $_POST['pw1'] adalah name dari masing masing text password 

// } else {
//     echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
// }




if (isset($_POST["submit"])) {

    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $password1 = htmlspecialchars($_POST["password1"]);
    $no_telp = htmlspecialchars($_POST["no_telp"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $member = $_POST['member'];
    // var_dump($nama, $email, $username, $password, $no_telp, $alamat, $member);
    // $gas = tambahAkun($nama, $email, $username, $password, $no_telp, $alamat, $member);
    // var_dump($gas);

    // $tgl = htmlspecialchars($_POST["tgl_lahir"]);
    // $email = htmlspecialchars($_POST["email"]);
    // $queryinsert = "INSERT INTO tbl_mahasiswa (nim,nm_mahasiswa,jenis_kelamin,tgl_lahir,email) VALUES
    // ('$nim','$nama','$kelamin','$tgl','$email')";

    // $nama_tabel = "transaksi";
    // $kolom = "(id_transaksi, id_barang, jumlah_beli)";
    // $nilai = "('$id_transaksi','$id_barang','$beli')";
    // mysqli_query($koneksi, $queryinsert);
    if ($password != $password1) {
        echo "<script>alert ('The password you entered does not match')</script>";
    } else if (tambahAkun($nama, $email, $username, $password, $no_telp, $alamat, $member) > 0) {
        echo "
    <script>alert('Data Saved Successfully');
    document.location.href='login.php';
    </script>
    ";
    } else {
        echo "
    <script>alert('Data Failed to Save');
    </script>
    ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>
    <link rel="icon" type="image/png" href="images/color-wheel.png" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <!-- <div class="main"> -->


    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="kontainer">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">Create an account</h2>
                <br>
                <br>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="nama" id="nama">
                    <span class="focus-input100" data-placeholder="NAME"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" id="email">
                    <span class="focus-input100" data-placeholder="EMAIL"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="username" id="username">
                    <span class="focus-input100" data-placeholder="USERNAME"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" id="username">
                    <span class="focus-input100" data-placeholder="PASSWORD"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password1" id="password1">
                    <span class="focus-input100" data-placeholder="CONFIRM PASSWORD"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="no_telp" id="no_telp">
                    <span class="focus-input100" data-placeholder="PHONE"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="alamat" id="alamat">
                    <span class="focus-input100" data-placeholder="ADDRESS"></span>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="member" id="agree-term" class="agree-term" value="member" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="sumbit" name="submit">
                            signup
                        </button>
                    </div>
                </div>
            </form>
            <p class="loginhere">
                Have already an account ? <a href="login.php" class="loginhere-link" style="text-decoration:none ;">Login here</a>
            </p>
        </div>
    </div>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>