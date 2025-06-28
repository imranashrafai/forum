<?php
$server='localhost';
$username='root';
$password="";
$db="php_forum";
$link=mysqli_connect($server,$username,$password,$db);
if(!$link){
    die("Connection Failed!". mysqli_connect_error());
}
?>