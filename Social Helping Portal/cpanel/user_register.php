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
require'adminheader.php';
$rcat=$_GET["cat"];
if($rcat=="c1")
{
    $rcat="For Foods Item";
}
else if($rcat=="c2")
{
 $rcat="For Cloths";
}
else if($rcat=="c3")
{
 $rcat="For Books";
}
else if($rcat=="c4")
{
 $rcat="For Domestic Products";
}
else if($rcat=="c5")
{
 $rcat="For Funds";
}
?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">Registration Form</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">
                    <?php
                     echo"You Enroll <font color='red'>$rcat</font> Here..";
                    ?>
                </span></p>
            
            </div>
            <div class="row">
                <div class="col-lg-3 mb-5"></div>
                <div class="col-lg-6 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post" action="">
                            <div class="control-group">
                               <?php echo" <input type='hidden' name='rcat' value='$rcat'>";?>
                                <input type="text" class="form-control" name="rname" placeholder="Name" >
                                 <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="cn" placeholder="Contact No" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="adhr" placeholder="Aadhar No" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="rshn" placeholder="Rashan Card No" >
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control" name="adrs" placeholder="Address" >
                                <p class="help-block text-danger"></p>
                            </div>
                            
                             <div class="control-group">
                                <textarea class="form-control" name="des" placeholder="Details About Items Need" ></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                     
                     
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" name='sub'>Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
if(isset($_POST["sub"]))
{
   
    $rname=$_POST["rname"];
     $cn=$_POST["cn"];
      $adhr=$_POST["adhr"];
       $rshn=$_POST["rshn"];
      $adrs=$_POST["adrs"];
      $des=$_POST["des"];
      $rcat=$_POST["rcat"];
      $dt=date('d-m-Y');
    require'db_conn.php';
    $q1=mysqli_query($conn,"insert into receiver (rname,cn,adhr,rshn,adrs,des,rcat,dt) values('$rname','$cn','$adhr','$rshn','$adrs','$des','$rcat','$dt')");
    if($q1)
    {
        echo"<script>alert('Submitted Successfully')</script>";
    }

   else
   {
      echo"<script>alert('Sorry try Again')</script>";
   }
}
 





require'adminfooter.php';?>
</body>

</html>