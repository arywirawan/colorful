<?php
require "koneksi.php";
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $nama_tbl = "tb_produk";
    $kolom = "(nama_produk, kategori_produk, deskripsi)";
    $nilai = "('$nama','$kategori', '$deskripsi')";

    if (insertData($nama_tbl, $kolom, $nilai)) {
        echo "
    <script>alert('Input Data Success!');
    document.location.href='produk.php';
    </script>
    ";
    } else {
        echo "
    <script>alert('Data Could not be Saved!');
    </script>
    ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Product</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/unauthorized-person (1).png" />
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
                    Colorful's Product
                </span>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Product Name">
                    <span class="label-input100">Product Name</span>
                    <input class="input100" type="text" name="nama" placeholder="Enter Product Name">
                </div>
                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Category</span>
                    <div>
                        <select class="js-select2" name="kategori">
                            <option>Please Chooses</option>
                            <option value="Internet">Internet</option>
                            <option value="Chating">Chating</option>
                            <option value="Calling">Calling</option>
                            <option value="Entertaiment">Entertaiment</option>
                            <option value="Roaming">Roaming</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
                    <span class="label-input100">Descriptions</span>
                    <textarea class="input100" name="deskripsi" placeholder="Your message here..."></textarea>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit" name="submit">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>

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