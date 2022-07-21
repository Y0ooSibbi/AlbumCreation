<?php
$server="localhost";
$user="##%#@";
$password="(((((";
$db="(**";
$con =mysqli_connect($server,$user,$password,$db);

if($con){
    echo "<br>";
}else{
    echo "Retry";
}

?>
