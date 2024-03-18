<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact us /Social Helping Portal</title>
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
      <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
             
            
            <a href="login.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 20px;">
                <img class="img-fluid" src="img/give-love.png" alt="">
                <span class="text-primary">SOCIAL HELPING PORTAL</span>
            </a>

          
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    
                    
                    <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Donate</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="doner.php?cat=c1" class="dropdown-item">Foods Item</a>
                            <a href="doner.php?cat=c2" class="dropdown-item">Cloths</a>
                            <a href="doner.php?cat=c3" class="dropdown-item">Books</a>
                            <a href="doner.php?cat=c4" class="dropdown-item">Domestic Product</a>
                            <a href="fund.php?cat=c5" class="dropdown-item">Funds</a>
                        </div>
                    </div>
                    
                     <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Register Now</a>
                          <div class="dropdown-menu rounded-0 m-0">
                             <a href="receiver.php?cat=c1" class="dropdown-item">For Foods Item </a>
                             <a href="receiver.php?cat=c2" class="dropdown-item">For Cloths</a>
                               <a href="receiver.php?cat=c3" class="dropdown-item">For Books</a>
                             <a href="receiver.php?cat=c4" class="dropdown-item">For Domestic Product</a>
                             <a href="fund.php?cat=c5" class="dropdown-item">For Funds</a>
                           </div>
                           
                      </div>
                    
                </div>        
               
            </div>
        </nav>
    </div>
    
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Contact Us</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2" >
                <p class="section-title px-5" ><span class="px-2">Get In Touch</span></p>
                <h1 class="mb-4">Contact Us For Any Query</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="">
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <p class="help-block text-danger"></p>
                            </div>
                           <div class="control-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Id">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="cno" placeholder="Contact No.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="control-group">
                                <textarea class="form-control"  name="msg" placeholder="Message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" name="sub">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 mb-5">
                    
                    <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Address</h5>
                            <p>LIG-90,Sector 2,Shankar Nagar,Raipur,Chhattisgarh 492004</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p>socialhelpinginfo@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Phone</h5>
                            <p>+91-8085465011</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Opening Hours</h5>
                            <strong>Monday - Sunday:</strong>
                            <p class="m-0">08:00 AM - 08:00 PM </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
      

 <?php
if(isset($_POST["sub"]))
{
   
     $name=$_POST["name"];
     $email=$_POST["email"];
     $cno=$_POST["cno"];
     $city=$_POST["city"];
     $msg=$_POST["msg"];
     $dt=date('d-m-Y');
    require'db_conn.php';
    $q1=mysqli_query($conn,"insert into contact (name,email,cno,city,msg,dt) values('$name','$email','$cno','$city','$msg','$dt')");
    if($q1)
    {
        echo"<script>alert('Message sent Successfully')</script>";
          echo"<script>
        window.location='index.php';
        </script>";
    }

   else
   {
      echo"<script>alert('Sorry try Again')</script>";
   }
}
 





require'myfooter.php';?>


  


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>