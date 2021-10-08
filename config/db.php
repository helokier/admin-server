<?php
$host  = "localhost";
$username = "root";
$password = "";
$database = "admin";

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