
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Social Helping Portal</title>
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
 session_start();

require'adminheader.php';
 ?>




    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">

            <h3 class="display-3 font-weight-bold text-white">Reset Password</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Reset Here</span></p>
            
            </div>
            <div class="row">
                <div class="col-lg-3 mb-5"></div>
                <div class="col-lg-6 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="">
                            <div class="control-group">
                                <input type="text" class="form-control" name="nw" placeholder="New Password" >
                                 <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="cnw" placeholder="Confirm Password" >
                                <p class="help-block text-danger"></p>
                            </div>
                             
                     
                             <div>
                                 <button type="submit" name='sub' class="btn btn-primary px-4">Submit</button>
                             </div>
                                
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Contact End -->


 



<?php 

require'db_conn.php';
if(isset($_POST["sub"]))
{   
    $un=$_SESSION["uname"];
    $nps=$_POST["nw"];
    $cps=$_POST["cnw"];
    if($nps==$cps)
    {
        
       $q1=mysqli_query($conn,"update Adminlogin set  ps='$nps'"); 
       if($q1)
       {
        echo"<script>alert('Updated successfully');
   window.location='../login.php';
      </script>";  
       } 
       else
       {
        echo"<script>alert('Sorry try again');
      </script>";  
       }
    }
    else
    {

        echo"<script>alert('password not match');
      </script>";  
    }
}



    require'adminfooter.php';?>
</body>

</html>