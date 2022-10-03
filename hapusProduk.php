<?php

require "koneksi.php";

$id = $_GET["id"];

if (deleteData("tb_produk", "id_produk", $id) > 0) {
    echo "
    <script>alert('Data Deleted Successfully!!');
    document.location.href='produk.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data Failed to Delete!! ');
    document.location.href='user.php';
    </script>
    ";
}
