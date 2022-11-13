<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$bd = 'sysweb';

$conectMysqli = new mysqli($server,$user,$pass,$bd);
if($conectMysqli->connect_error){
    die('error'.$conectMysqli->mysqli_error);
    
}



?>
