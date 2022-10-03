<?php

require "koneksi.php";

$id = $_GET["id"];

if (deleteData("tb_pesan", "id_pesan", $id) > 0) {
    echo "
    <script>alert('Data Deleted Successfully!!');
    document.location.href='dashboardUser.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data Failed to Delete!! ');
    document.location.href='dashboardUser.php';
    </script>
    ";
}
