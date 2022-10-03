<?php
require "koneksi.php";

$id = $_GET["id"];
$data = getdata("SELECT * FROM tb_anggota WHERE id_anggota = " . $id)[0];





// var_dump($data["nim"]);
if (isset($_POST["submit"])) {
    // $id_pesan = htmlspecialchars($_POST["id_pesan"]);

    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $queryval = "nama = '$nama',  email = '$email', no_telp = '$nohp', alamat = '$alamat' ";


    if (updateData("tb_anggota", $queryval, "id_anggota", $id) > 0) {
        echo "
    <script>alert('Change Data Success!!');
    document.location.href='customer.php';
    </script>
    ";
    } else {
        echo "
    <script>alert('Change Data Failed ! ');
   
    </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/color-wheel.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Produk/css/util.css">
    <link rel="stylesheet" type="text/css" href="Produk/css/main.css">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="POST">
                <span class="contact100-form-title">
                    Colorful's Members
                </span>
                <!-- 
                <div class="wrap-input100 validate-input bg1" data-validate="Please Type The ID MESSAGE">
                    <span class="label-input100">ID MESSAGE</span>
                    <input class="input100" type="text" name="id_pesan" placeholder="Enter The ID Message" disabled value="<?php echo $data["id_pesan"]; ?>">
                </div> -->

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type The Name">
                    <span class="label-input100">NAME </span>
                    <input class="input100" type="text" name="nama" placeholder="Enter The ID User" value="<?php echo $data["nama"]; ?>">
                </div>
                <div class="wrap-input100 validate-input bg1 " data-validate="Enter Your Email (e@a.x)">
                    <span class="label-input100">EMAIL</span>
                    <input class="input100" type="text" name="email" placeholder="Enter Your Email " value="<?php echo $data["email"]; ?>">
                </div>

                <div class="wrap-input100 validate-input bg1  rs1-wrap-input100" data-validate="Please Type The Name">
                    <span class="label-input100">USERNAME </span>
                    <input class="input100" type="text" name="nama" placeholder="Enter The Name" disabled value="<?php echo $data["username"]; ?>">
                </div>
                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Please Type The Name">
                    <span class="label-input100">PASSWORD </span>
                    <input class="input100" type="text" name="nama" placeholder="Enter The Name" disabled value="<?php echo $data["password"]; ?>">
                </div>

                <div class="wrap-input100 validate-input bg1 " data-validate="Please Type The Phone">
                    <span class="label-input100">PHONE</span>
                    <input class="input100" type="text" name="nohp" placeholder="Enter Your Email " value="<?php echo $data["no_telp"]; ?>">
                </div>
                <div class="wrap-input100 validate-input bg1" data-validate="Please Type The Address">
                    <span class="label-input100">ADDRESS</span>
                    <input class="input100" type="text" name="alamat" placeholder="Enter Your Email " value="<?php echo $data["alamat"]; ?>">
                </div>



                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" name="submit">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!--===============================================================================================-->
    <script src="Produk/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/bootstrap/js/popper.js"></script>
    <script src="Produk/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function() {
                $(this).on('select2:close', function(e) {
                    if ($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    } else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/daterangepicker/moment.min.js"></script>
    <script src="Produk/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="Produk/vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [1500, 3900],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
            document.getElementById('value-lower'),
            document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function(values, handle) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
    <!--===============================================================================================-->
    <script src="Produk/js/main.js"></script>

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