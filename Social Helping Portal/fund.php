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
require'myheader.php';
$cat=$_GET["cat"];
if($cat=="c1")
{
    $dcat="Foods Item";
}
else if($cat=="c2")
{
 $dcat="Cloths";
}
else if($cat=="c3")
{
 $dcat="Books";
}
else if($cat=="c4")
{
 $dcat="Domestic Products";
}
else if($cat=="c5")
{
 $dcat="Funds";
}
?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <h3 class="display-3 font-weight-bold text-white">Doner Form</h3>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">
                    <?php
                     echo"You Donate <font color='red'>$dcat</font> Here..";
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
                               <?php echo" <input type='hidden' name='dcat' value='$dcat'>";?>
                                <input type="text" class="form-control" name="dname" placeholder="Donor name" >
                                 <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="cno" placeholder="Contact No" >
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="em" placeholder="Email Id" >
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control" name="adr" placeholder="Address" >
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control" name="adhr" placeholder="Aadhar" >
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="control-group">
                                <input type="text" class="form-control" name="pn" placeholder="PAN No." >
                                <p class="help-block text-danger"></p>
                            </div>
                           
                        <div class="control-group">
                                <select class="form-control" name="pm">
                                    <option value="">Select payment mode</option>
                                    <option value="By Cash">By Cash</option>
                                    <option value="By Cheque">By Cheque</option>
                                    <option value="By Net Banking">By Net Banking</option>
                                    <option value="By Debit/Credit Card">By Debit/Credit Card</option>
                                    <option value="By UPI">By UPI</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                    <div class="control-group">
                                <input type="text" class="form-control" name="da" placeholder="Donation Amount" >
                                <p class="help-block text-danger"></p>
                            </div>
                     
                     
                            <br></br>


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
   
    $dname=$_POST["dname"];
     $cno=$_POST["cno"];
      $em=$_POST["em"];
      $adr=$_POST["adr"];
      $adhr=$_POST["adhr"];
      $pn=$_POST["pn"];
      $dcat=$_POST["dcat"];
      $dt=date('d-m-Y');
      $pm=$_POST["pm"];
      $da=$_POST["da"];
    require'db_conn.php';
    $q1=mysqli_query($conn,"insert into donor (dname,cno,em,adr,adhr,pn,dcat,dt,pm,da) values('$dname','$cno','$em','$adr','$adhr','$pn','$cat','$dt','$pm','$da')");
    if($q1)
    {
        echo"<script>alert('Submitted Successfully')</script>";
    }

   else
   {
      echo"<script>alert('Sorry try Again')</script>";
   }
}
 





require'myfooter.php';?>
</body>

</html>