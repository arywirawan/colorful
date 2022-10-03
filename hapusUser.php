<?php

require "koneksi.php";

$id = $_GET["id"];

if (deleteData("tb_user", "id_user", $id) > 0) {
    echo "
    <script>alert('Data Deleted Successfully!!');
    document.location.href='user.php';
    </script>
    ";
} else {
    echo "
    <script>alert('Data Failed to Delete!! ');
    document.location.href='user.php';
    </script>
    ";
}
