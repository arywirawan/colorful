<?php
session_start();
require "koneksi.php";



if (!isset($_SESSION["login"])) {
    header('Location: login.php');
    exit;
}
$data_tbl = getdata("SELECT * FROM tb_pesan INNER JOIN tb_user ON tb_pesan.id_user = tb_user.id_user INNER JOIN tb_produk ON tb_pesan.id_produk = tb_produk.id_produk WHERE tb_pesan.id_user = " . $_SESSION["id_user"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/color-wheel.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <title>Dashboard Users</title>
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
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Message
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ds_user.php">
                                <span data-feather="shopping-cart"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logoutuser.php">
                                <span data-feather="shopping-cart"></span>
                                Sign Out
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="user.php">
                                <span data-feather="file"></span>
                                Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk.php">
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
                        </li> -->
                    </ul>


                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="tekan">
                    <a href="inputPesan.php?id=<?php echo $_SESSION["id_user"]; ?>"><img src="images/add.svg" alt="" class="gambar1"></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <td>Action</td>
                                <td>ID Message</td>
                                <td>Username</td>
                                <td>Name</td>
                                <td>Date</td>
                                <td>Product</td>
                                <td>Message</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_tbl  as $data) :  ?>
                                <tr>
                                    <td>
                                        <a href="hapusDashboardUser.php?id=<?php echo $data["id_pesan"]; ?>" style="text-decoration: none;"><img src="images/remove.svg" alt="" class="gambar"> </a>
                                        <a href="editDashboardUser.php?id=<?php echo $data["id_pesan"]; ?>" style="text-decoration: none;"><img src="images/edit.svg" alt="" class="gambar"></a>

                                    </td>
                                    <td><?php echo $data["id_pesan"]; ?></td>
                                    <td><?php echo $data["username"]; ?></td>
                                    <td><?php echo $data["nama"]; ?></td>
                                    <td><?php echo date('d-M-Y', strtotime($data["tanggal"])); ?></td>
                                    <td><?php echo $data["nama_produk"]; ?></td>
                                    <td><?php echo $data["pesan"]; ?></td>
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