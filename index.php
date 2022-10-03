 <?php
    session_start();
    if (isset($_SESSION['login'])) {
        $user = $_SESSION['username'];
        $username = "hello, " . $user;
        $username_new = strtoupper($username);
    } else {
        $username_new = "NEED LOGIN";
    }



    ?>


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="icon" type="image/png" href="images/color-wheel.png" />
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
     <title>Colorful</title>
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/styleindex.css">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <!-- Splide -->
     <!-- or the reference on CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 </head>

 <body>
     <div class="konten">
         <div class="kepala">
             <h1><a href="#awal"> Colorful</a></h1>
             <ul>
                 <li><a href="#awal">HOME</a></li>
                 <li><a href="#about">SERVICES</a></li>
                 <li><a href="menu.php">PRODUCT</a></li>
                 <li><a href="dashboardUser.php"><?php echo $username_new; ?></a></li>
             </ul>
         </div>
         <div class="home" id="awal">
             <h1>Colorful</h1>
             <h3>Connecting minds, around the world</h3>

             <button class="login"><a href="login.php">LOGIN</a></button>
             <button class="signup"><a href="register.php">SIGNUP</a></button>
         </div>
     </div>

     <div class="service" id="about">
         <h1>THE BEST SERVICES</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             DMus mauris vitae ultricies leo integer malesuada. Duis convallis convallis tellus id interdum velit laoreet id donec.
             Faucibus scelerisque eleifend donec pretium. Ac tortor dignissim convallis aenean et.</p>
         <div class="box">
             <img class="icon" src="images/Group 2.svg" alt="">
             <h4>CHEAP</h4>
         </div>
         <div class="box">
             <img class="icon" src="images/Group 3.svg" alt="">
             <h4>WIDE REACH</h4>
         </div>
         <div class="box">
             <img class="icon" src="images/Group 4.svg" alt="">
             <h4>FAST</h4>
         </div>
     </div>

     <div class="produk" id="belanja">
         <h1>NEWS</h1>
         <p class="deskripsi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

         <div class="atur">
             <!-- splide -->
             <div class="splide" id="splide">
                 <div class="splide__track">
                     <ul class="splide__list">
                         <li class="splide__slide">
                             <!-- Content 1 -->
                             <div class="card shadow-lg m-5">
                                 <img src="images/5g.jpg" class="card-img-top" alt="">
                                 <div class="card-body">
                                     <h5 class="card-title">Colorful Ready to Launch 5G Technology</h5>
                                     <p class="card-text">March 14th, 2021.
                                     </p>
                                     <!-- <h5 class="card-text mb-3">Rp 15k</h5> -->
                                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Learn More</a>
                                 </div>
                             </div>
                         </li>


                         <li class="splide__slide">
                             <!-- Content 2 -->
                             <div class="card shadow-lg m-5">
                                 <img src="images/5g.jpg" class="card-img-top" alt="">
                                 <div class="card-body">
                                     <h5 class="card-title">Colorful Ready to Launch 5G Technology</h5>
                                     <p class="card-text">March 14th, 2021.
                                     </p>
                                     <!-- <h5 class="card-text mb-3">Rp 15k</h5> -->
                                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Learn More</a>
                                 </div>
                             </div>
                         </li>

                         <li class="splide__slide">
                             <!-- Content 3 -->
                             <div class="card shadow-lg m-5">
                                 <img src="images/5g.jpg" class="card-img-top" alt="">
                                 <div class="card-body">
                                     <h5 class="card-title">Colorful Ready to Launch 5G Technology</h5>
                                     <p class="card-text">March 14th, 2021.
                                     </p>
                                     <!-- <h5 class="card-text mb-3">Rp 15k</h5> -->
                                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Learn More</a>
                                 </div>
                             </div>
                         </li>


                         <li class="splide__slide">
                             <!-- Content 4 -->
                             <div class="card shadow-lg m-5">
                                 <img src="images/5g.jpg" class="card-img-top" alt="">
                                 <div class="card-body">
                                     <h5 class="card-title">Colorful Ready to Launch 5G Technology</h5>
                                     <p class="card-text">March 14th, 2021.
                                     </p>
                                     <!-- <h5 class="card-text mb-3">Rp 15k</h5> -->
                                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Learn More</a>
                                 </div>
                             </div>
                         </li>

                         <li class="splide__slide">
                             <!-- Content 5-->
                             <div class="card shadow-lg m-5">
                                 <img src="images/5g.jpg" class="card-img-top" alt="">
                                 <div class="card-body">
                                     <h5 class="card-title">Colorful Ready to Launch 5G Technology</h5>
                                     <p class="card-text">March 14th, 2021.
                                     </p>
                                     <!-- <h5 class="card-text mb-3">Rp 15k</h5> -->
                                     <a href="menu.php" class="btn btn-outline-primary btn-sm">Learn More</a>
                                 </div>
                             </div>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
     </div>





     <div class="tentang" id="story">
         <img class="gambar" src="images/cs.png" alt="">
         <div class="kata">
             <h1>24/7 Customer Services</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Mauris vitae ultricies leo integer.
                 Neque volutpat ac tincidunt vitae semper quis. </p>

             <button><a href="inputPesan.php">Contact Us</a></button>
         </div>
     </div>



     <div class="bg-footer">
         <div class="container py-5">
             <div class="row">
                 <div class="col-md-3">
                     <h1 class="text-white" style=" font-family: 'Lobster', cursive;">Colorful</h1>
                     <p class="text-white" style="font-size: 16px;">Connecting minds, around the world</p>
                 </div>
                 <div class="col-md-3">
                     <h3 class="text-white">Information</h3>
                     <div class="row text-white" style="font-size: 12pt;">
                         <div class="col-md-5">
                             <a href="#about" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Login</a>
                         </div>
                         <div class="col-md-5">
                             <a href="menu.php" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Signup</a>
                         </div>
                         <div class="col-md-5">
                             <a href="#story" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">News</a>
                         </div>
                         <div class="col-md-5">
                             <a href="#contac" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Contact Us</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <h3 class="text-white"> Where to find us </h3>
                     <div class="row">
                         <div class="col-md-2" style="font-size: 30px; ">
                             <a href="https://twitter.com/" class="text-white"> <i class="fab fa-twitter"></i></a>
                         </div>
                         <div class="col-md-2" style="font-size: 30px;">
                             <a href="https://facebook.com/" class="text-white"><i class="fab fa-facebook"></i></a>
                         </div>
                         <div class="col-md-2" style="font-size: 30px;">
                             <a href="https://instagram.com/" class="text-white"><i class="fab fa-instagram"></i></a>
                         </div>
                         <div class="col-md-2" style="font-size: 30px;">
                             <a href="https://tiktok.com/" class="text-white"><i class="fab fa-tiktok"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="ml-5">
                         <h3 class="text-white"> Address </h3>
                         <div class="text-white">
                             <p><i class="fas fa-map-marker-alt"></i> <span class="ml-3">Jl. Raya Kerobokan, Badung</span> </p>
                             <p><i class="fas fa-envelope-open-text"></i> <span class="ml-3">supportcolorful@info.co.id</span> </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="bg-last">
         <p class="text-white text-center py-2">&copy; Colorful. All Right Reserved</p>
     </div>













     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
     <script src="js/scroll.js"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

     <script>
         new Splide('#splide', {
             type: 'loop',
             perPage: 4,
             perMove: 1,
             focus: 'center',
         }).mount();
     </script>

     <script>
         $('#product-list a').on('click', function(e) {
             e.preventDefault()
             $(this).tab('show')
         })
     </script>

 </body>

 </html>