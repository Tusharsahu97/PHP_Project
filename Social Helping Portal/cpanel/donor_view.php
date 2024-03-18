<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>cpanel/Social Helping Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

</head>

<body>
   <?php
   
require'admin-authorization.php';
require'adminheader.php';
   ?>


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
            <center>
                <br></br>
    <h1>Donor Information</h1>
    <br></br>
    
        </div>
    </div>
    <!-- Header End -->
      




    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                
            
            </div>
            <div class="row">
                <div class="col-lg-12 mb-5">
                 <h3 class="display-3 font-weight-bold text-white"></h3>
                  <form method="POST" action="">
                    <center> <select name="srch" style="width: 370px; height:40px" >
                        <option value="">Select Category</option>
                        <option value="c1">Foods Item</option>
                        <option value="c2">Cloths</option>
                        <option value="c3">Books</option>
                        <option value="c4">Domestic Products</option>
                        <option value="c5">Funds</option>
        
                        </select>
                          <input type="submit" name="sub" value="search">
                          <input type="submit" name="ref" value="Reset"> </center>
                          <br></br>
                         <center>
                        
                            <table style='font-size: 12px;' width="100"  border="1" cellpadding="5" bgcolor="white"></center>

                          <tr bgcolor="skyblue" height='2'>
                          <th>Action</th>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>CNO</th>
                          <th>EMAIL</th>
                          <th>ADDRESS</th>
                          <th>DESCRIPTION</th>
                          <th>CATEGORY</th>
                          <th>DATE</th>    
                          <th>AADHAR</th>
                          <th>PAN NO.</th>
                          <th>PAYMENT METHOD</th>
                          <th>DONATION AMMOUNT</th>
            
                          </tr>
                                <?php
                                require'db_conn.php';
                                if(isset($_POST["sub"]))
                                {
                                   $ser=$_POST["srch"];
                                   $q1=mysqli_query($conn,"select * from donor where dcat='$ser'");
                                }
                                else
                                {
                                   $q1=mysqli_query($conn,"select * from donor");
                                }
                                $i=1;

                                while($row=mysqli_fetch_assoc($q1)) 
                                {
                                    $id=$row["id"];
                                    $dname=$row["dname"];
                                    $cno=$row["cno"];
                                    $em=$row["em"];
                                    $adr=$row["adr"];
                                    $des=$row["des"];
                                    $cat=$row["dcat"];
                                    $dt=$row["dt"];
                                    $adhr=$row["adhr"];
                                    $pn=$row["pn"];
                                    $pm=$row["pm"];
                                    $da=$row["da"];
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
                                echo"<tr height='40'>
                                <td><input type='checkbox' name='chk[]' value='$id'>
                                <td>$i<td>$dname<td>$cno<td>$em<td>$adr<td>$des<td>$dcat<td>$dt<td>$adhr<td>$pn<td>$pm<td>$da
                                ";
                                $i++;
                                }
                                echo"<tr><td colspan=13 align='center'>
                                <input type='submit' name='del' value='Remove' style='width:130px;height:40px;'>
                                </td></tr>";
                                echo "</table>";


                                // delete by checkbox

                                if(isset($_POST["del"]))
                                {
                                for ($i=0; $i < count($_POST["chk"]); $i++) { 
                                if($_POST["chk"][$i]!="")
                                {
                                $id=$_POST["chk"][$i];
                                $q1=mysqli_query($conn,"delete from donor where id='$id'");
                                }
                                }
                                if($q1)
                                {
                                echo "<script>
                                alert('Deleted successfully');
                                window.location='donor_view.php';
                                </script>";
                                }

                                }


                                ?>
                            </table>
                            <br></br>
                </center>
</form>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php require'adminfooter.php';?>
</body>

</html>