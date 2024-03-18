 <?php
    session_start();
    if(!empty($_SESSION["un"]))
    {
    $un=$_SESSION["un"];
    $ps=$_SESSION["ps"];
 }
 else
 {
   echo"<script>
        window.location='session_expire.php';
        </script>";
 }

    require'db_conn.php';
    
    $q1=mysqli_query($conn,"select * from Adminlogin where un='$un' and ps='$ps'");
    $found=mysqli_num_rows($q1);
    if($found!=1)
    {

     echo"<script>
        window.location='session_expire.php';
        </script>";
    }
   
     $nowt=time();
     if($nowt>$_SESSION['expt'])
     {
       echo"<script>
        window.location='session_expire.php';
        </script>";
     }
     else
     {
        $_SESSION['expt']=$nowt+10*60;
     }
     
 
 ?>