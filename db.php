<?php

require_once 'rb.php';

$db = [
    'dsn' => 'mysql:host=localhost;dbname=u0880108_gamepay;charset=utf8',
    'user'=> 'u0880108_default',
    'pass'=> '75_DK8mK'
];
R::setup($db['dsn'],$db['user'],$db['pass']);
R::freeze(true);

