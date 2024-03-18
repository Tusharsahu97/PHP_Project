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
    <h1>Volunteer Information</h1>
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
                         
                         <center> <table width="800"  border="1" cellpadding="10" bgcolor="pink">
                          <tr bgcolor="skyblue" height='40'>
                          <th>Action</th>
                          
                          <th>NAME</th>
                          <th>EMAIL</th>
                          <th>CONTACT NO.</th>
                         
                          <th>ADDRESS</th>
                          
                          <th>IMG</th>
                          <th>Date</th>
                          </tr>
                                <?php
                                require'db_conn.php';
                                if(isset($_POST["sub"]))
                                {
                                   $ser=$_POST["srch"];
                                   $q1=mysqli_query($conn,"select * from volunteer ");
                                }
                                else
                                {
                                   $q1=mysqli_query($conn,"select * from volunteer");
                                }

                                $i=1;

                                while($row=mysqli_fetch_assoc($q1)) 
                                {
                                
                                    $yn=$row["yn"];
                                    $ye=$row["ye"];
                                    $cno=$row["cno"];
                                    $adr=$row["adr"];
                                    $img=$row["img"];
                                    $dt=$row["dt"];
                                   
                                echo"<tr height='40'>
                                <td><input type='checkbox' name='chk[]' value='$yn'>
                                <td>$yn<td>$ye<td>$cno<td>$adr<td align='center'><img src='../volunteer_photo/$img' width='100' height='120'><td>$dt<td>
                             
                                ";
                                $i++;
                                }
                                echo"<tr><td colspan=7 align='center'>
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
                                $q1=mysqli_query($conn,"delete from Volunteer where yn='$yn'");
                                }
                                }
                                if($q1)
                                {
                                echo "<script>
                                alert('Deleted successfully');
                                window.location='volunteer_view.php';
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