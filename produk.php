<?php
session_start();
require "koneksi.php";

if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
} else if ($_SESSION['level'] != "admin") {
    header('Location: index.php');
    exit;
}
$data_tbl = getdata("SELECT * FROM tb_produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/unauthorized-person (1).png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>



    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Hello, <?php echo $_SESSION["username"]; ?></a>
        <!-- <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="index.php" style="font-family: 'Lobster', cursive; font-size: 25px;">Colorful</a>
            </li>
        </ul>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                        <span>DATA MANAGEMENT</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <span data-feather="home"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="user.php">
                                <span data-feather="file"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="produk.php">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <span data-feather="shopping-cart"></span>
                                Sign Out
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
               X
                <div class="table-responsive">

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>ID Product</td>
                                <td>Name</td>
                                <td>Category</td>
                                <td>Description</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_tbl  as $data) :  ?>
                                <tr>
                                    <td>
                                        <a href="hapusProduk.php?id=<?php echo $data["id_produk"]; ?>" style="text-decoration: none;"><img src="images/remove.svg" alt="" class="gambar"> </a> |
                                        <a href="editProduk.php?id=<?php echo $data["id_produk"]; ?>" style="text-decoration: none;"><img src="images/edit.svg" alt="" class="gambar"></a>

                                    </td>
                                    <td><?php echo $data["id_produk"]; ?></td>
                                    <td><?php echo $data["nama_produk"]; ?></td>
                                    <td><?php echo $data["kategori_produk"]; ?></td>
                                    <td><?php echo $data["deskripsi"]; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>


            </main>
        </div>
    </div>

</body>

</html>