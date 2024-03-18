
<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page/Social Helping Portal</title>
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
 <script type="text/javascript">
     window.history.forward();
     function noBack() {window.history.forward();}
 </script>   
</head>

<body onload='noBack();' onpageshow='if(event.persisted) noBack();' onunload=''>
 <?php
require'myheader.php';
?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">Admin Login</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Sign In Here</span></p>
            
            </div>
            <div class="row">
                
                <div class="col-lg-4 mb-5"></div>
                <div class="col-lg-4 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="">
                            <div class="control-group">
                                <input type="text" class="form-control" name="un" placeholder="Username" >
                                 <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" name="ps" placeholder="Password" >
                                <p class="help-block text-danger"></p>
                            </div>
                              <div class="col">
                                    <!-- Simple link -->
                                 <a href="forget.php">Forgot password?</a>
                             </div>
                                  
                              
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" name='log'>Login</button>
                            </div>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
if(isset($_POST["log"]))
{   
  
    $un=$_POST["un"];
    $ps=$_POST["ps"];
    
    require'db_conn.php';
    $q1=mysqli_query($conn,"select * from Adminlogin where un='$un'and ps='$ps'");
    $found=mysqli_num_rows($q1);
    if($found==1)
    {
       
        $_SESSION['un']=$un;
        $_SESSION['ps']=$ps;
        $_SESSION['expt']=time()+10*60;

     echo"<script>
        window.location='cpanel/dash.php';
        </script>";
    }
    else
    {
        echo"<script>alert('Invalid username or password');</script>";  
    }
}
 



require'myfooter.php';?>
</body>

</html>