<?php
$serverName= 'localhost';
$username= 'root';
$password= '';
$databaseName='students';

$conn=mysqli_connect($serverName,$username,$password,$databaseName);

if(mysqli_connect_errno()){
    die('ERROR : ' . mysqli_connect_error());
}
?>