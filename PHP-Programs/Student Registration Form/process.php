<?php

$server="localhost";
$user="root";
$password="";
$db="student";

$con= mysqli_connect($server,$user,$password,$db);
if($con){
    echo '<script>alert("connected")</script>'; 
}
else {
    echo "Connection not established";
}   

?>