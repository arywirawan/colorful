<?php
session_start();
require 'koneksi.php';
if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
}

$id = $_GET["id"];
$halo = getdata("SELECT * FROM tb_user WHERE id_user = " . $id)[0];

$sql =   "SELECT * FROM tb_produk";
$sql_query = mysqli_query($koneksi, $sql);



if (isset($_POST["submit"])) {

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $tgl =  $_POST['tgl'];
    $tgl = date('Y-m-d', strtotime($tgl));
    $id_produk = $_POST['id_produk'];
    $pesan = $_POST['pesan'];

    $kolom = "(id_user, nama, tanggal, id_produk, pesan)";
    $nilai = "('$id_user','$nama','$tgl','$id_produk','$pesan')";
    $nama_tbl = "tb_pesan";

    if (insertData($nama_tbl, $kolom, $nilai) > 0) {
        echo "
    <script>alert('Message Sent Successfully!!');
    document.location.href='opsiUser.php?id=$id_user';
    </script>
    ";
    } else {
        echo "
    <script>alert('Message Failed to Send!');
    </script>
    ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>MESSAGE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/color-wheel.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/styleinput.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    </style>
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="POST">
                <span class="contact100-form-title" style="font-family: 'Lobster', cursive;">
                    Colorful
                </span>
                <span class="judul">
                    Send Us Massage!
                </span>
                <div>
                    <input type="hidden" name="id_user" value="<?php echo $halo['id_user']; ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" value="<?php echo $halo['username']; ?>" disabled placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="nama" placeholder="Enter your name">
                    <span class="focus-input100"></span>
                </div>
                <div>
                    <input type="hidden" name="tgl" value="<?php echo date("Y-m-d"); ?>">
                </div>

                <div class="wrap-input100 input100-select">
                    <span class="label-input100">Product</span>
                    <div>

                        <select class="selection-2" name="id_produk">
                            <option disabled="disabled" selected="selected">Choose Product</option>
                            <?php
                            while ($data = mysqli_fetch_array($sql_query)) {

                            ?>

                                <option value="<?php echo $data['id_produk']; ?>""><?php echo $data['nama_produk']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>  
                    <span class=" focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <span class="label-input100">Message</span>
                        <textarea class="input100" name="pesan" placeholder="Your message here..."></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn" type="submit" name="submit">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-80">
                        <span class="txt1">
                            Have you entered a message?
                        </span>

                        <a class="txt2" href="logoutuser.php">
                            Log Out |
                        </a>
                        <a href="index.php">
                            Return
                        </a>

                        <span class="txt1">
                            Change your message?
                        </span>
                        <a class="txt2" href="dashboardUser.php">
                            Change
                        </a>
                    </div>



            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>