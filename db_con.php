<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "sam_medi";

$con = mysqli_connect($server , $user , $password , $database );

if(!$con){
    die("connection Failed".mysqli_connect_error($con));
}
else{
   // echo"connection successful";
}


?>