<?php
$host = 'localhost';
$database = 'u0891829_default';
$user = 'u0891829_default';
$pass = 'N9stp_zO';



$link = mysqli_connect('localhost','u0891829_default','N9stp_zO','u0891829_default');
mysqli_set_charset($link,'utf-8');
if(mysqli_connect_errno()){
    echo 'Ошибка в подключении к базе данных (' .mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}
