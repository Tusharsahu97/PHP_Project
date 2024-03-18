<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Donate/Social Helping Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
require'myheader.php';
?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">Donor Form</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">
                    <?php
                     echo"You Select <font color='red'>Category</font> Here..";
                    ?>
                </span></p>
            
            </div>
            <br>
                <div class="d-flex justify-content-center">
                            
                            <a href="doner.php?cat=c1"class="btn border-Black btn-sm btn-warning mx-3">Donate Foods Item</a>
                            <a href="doner.php?cat=c2"class="btn border-Black btn-sm btn-warning mx-3" >Donate Cloths</a>
                            <a href="doner.php?cat=c3" class="btn border-Black btn-sm btn-warning mx-3">Donate Books</a>     
                            <a href="doner.php?cat=c4" class="btn border-Black btn-sm btn-warning mx-3">Donate Domestic Product</a>
                            <a href="fund.php?cat=c5" class="btn border-Black btn-sm btn-warning mx-3">Donate Funds</a>
                                      
                </div>
      
        </div>
    </div>
    <!-- Contact End -->





<?php
require'myfooter.php';?>
</body>

</html>