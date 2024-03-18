<?php
session_start();
session_destroy();

echo"<center>Your Session has Expired <br>
<a href='../login.php'>click here to again login</a></center>";

 ?>