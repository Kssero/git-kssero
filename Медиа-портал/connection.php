<?php
$host = 'localhost';
$database = 'u0891829_default';
$user = 'u0891829_default';
$pass = 'N9stp_zO';



$link = mysqli_connect($host,$database,$user,$pass);
if(mysqli_connect_errno()){
    echo 'Ошибка в подключении к базе данных (' .mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}
