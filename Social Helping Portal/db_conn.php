
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="Project";
try
{
$conn=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname") or die ("Could not connect to mysql");

}
catch(Exception $q1)
{
  echo $q1->getMessage();
}
?>