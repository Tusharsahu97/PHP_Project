<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Social Helping Portal</title>
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
    <h1>User Information</h1>
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
                        <option value="For Foods Item">For Foods Item</option>
                        <option value="For Cloths">For Cloths</option>
                        <option value="For Books">For Books</option>
                        <option value="For Domestic Products">For Domestic Products</option>
                        <option value="For Fund">For Funds</option>
        
                        </select>
                          <input type="submit" name="sub" value="search">
                          <input type="submit" name="ref" value="Reset"> </center>
                          <br></br>
                         <center> <table width="800"  border="1" cellpadding="10" bgcolor="white">
                          <tr bgcolor="skyblue" height='40'>
                          <th>Action</th>
                          <th>ID</th>
                          <th>NAME</th>
                          <th>CN</th>
                          <th>AADHAR NO</th>
                          <th>RASHAN CARD NO</th>
                          <th>ADDRESS</th>
                          <th>DESCRIPTION</th>
                          <th>CATEGORY</th>
                          <th>Date</th>
                          <th>GIVEN</th>
            
                          </tr>
                                <?php
                                require'db_conn.php';
                             if(isset($_POST["sub"]))
                                {
                                   $ser=$_POST["srch"];
                                   $q1=mysqli_query($conn,"select * from receiver where rcat='$ser' and des1=''");
                                }
                                else
                                {
                                   $q1=mysqli_query($conn,"select * from receiver where des1=''");
                                }
                           
                                $i=1;

                                while($row=mysqli_fetch_assoc($q1)) 
                                {
                                    $id=$row["id"];
                                    $rname=$row["rname"];
                                    $cn=$row["cn"];
                                    $adhr=$row["adhr"];
                                    $rshn=$row["rshn"];
                                    $adrs=$row["adrs"];
                                    $des=$row["des"];
                                    $cat=$row["rcat"];
                                    $dt=$row["dt"];
                                if($cat=="c1")
                                {
                                $rcat="For Foods Item";
                                }
                                else if($cat=="c2")
                                {
                                $rcat="For Cloths";
                                }
                                else if($cat=="c3")
                                {
                                $rcat="For Books";
                                }
                                else if($cat=="c4")
                                {
                                $rcat="For Domestic Products";
                                }
                                else if($cat=="c5")
                                {
                                $rcat="For Funds";
                                }
                                echo"<tr height='40'>
                                <td><input type='checkbox' name='chk[]' value='$id'>
                                <td>$id<td>$rname<td>$cn<td>$adhr<td>$rshn<td>$adrs<td>$des<td>$cat<td>$dt<td>  <a href='user_items.php?id=$id'>Donate</a>
                             
                                ";
                                $i++;
                                }
                                echo"<tr><td colspan=11 align='center'>
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
                                $q1=mysqli_query($conn,"delete from receiver where id='$id'");
                                }
                                }
                                if($q1)
                                {
                                echo "<script>
                                alert('Deleted successfully');
                                window.location='user_view.php';
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