<?php
$_SERVER="localhost"; 
$username="root";
$password="";
$database="users";#name of the collection

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo"success";
}else{
    die("errror".mysqli_connect_error());
}
?>