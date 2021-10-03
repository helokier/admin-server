<?php
$host  = "mysql5031.site4now.net"; 
$username = "a7a857_helokit";
$password = "Truongtai_12";
$database = "db_a7a857_helokit";

//Connecttion
$con = mysqli_connect($host, $username, $password, $database);
//check connection
if(!$con){
    // header("Location: error.php");
    die(mysqli_connect_error($con));
}
    // else{
//     echo "Connection successful";
// }

?>
