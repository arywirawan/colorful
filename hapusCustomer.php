<?php

require "koneksi.php";

$id = $_GET["id"];

if (deleteData("tb_anggota", "id_anggota", $id) > 0) {
    echo "
    <script>alert('Data Deleted Successfully!!');
    document.location.href='customer.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data Failed to Delete!! ');
    document.location.href='customer.php';
    </script>
    ";
}
