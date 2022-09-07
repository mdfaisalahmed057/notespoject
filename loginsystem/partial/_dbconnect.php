<?php
$_SERVER="localhost"; 
$username="root";
$password="";
$database="users";#name of the collection

$conn=mysqli_connect("localhost","root","","users");
if($conn){
    echo"success";
}else{
    die("errror".mysqli_connect_error());
}
?>