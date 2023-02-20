<?php
session_start();
$host = 'localhost';
$username1 = 'root';
$password1 = '';
$database = "veritabani";
$message = "";

try{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username1, $password1);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $error){
    $message = $error->getMessage();
}
?>
