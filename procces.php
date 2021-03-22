<?php


if(empty($_POST)){
    die;
}

require_once __DIR__ . '/inc/db.php';

$key = 'jlWQy15k37DNsrWm';
$ik_id ='5e1339ca1ae1bd0e008b4585';
$dataSet = $_POST;



unset($dataSet['ik_sign']);
ksort($dataSet, SORT_STRING);
array_push($dataSet, $key);
$signString = implode(':', $dataSet);
$sign = base64_encode(md5($signString, true));

$order = R::load('orders', (int)$dataSet['ik_pm_no']);
if(!$order) die;

if($dataSet['ik_co_id'] != $ik_id || $dataSet ['ik_inv_st'] !='success' || $dataSet['ik_am'] != $order->price || $sign != $_POST['ik_sign']){
    die;
}

$order->status='1';
R::store($order);