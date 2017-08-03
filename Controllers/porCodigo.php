<?php

session_start();

require_once("../Classes/ApiData.php");

$codigo = $_GET['codigo'];
$search = '3/movie/'. $codigo;

$api = new ApiData();
$url = $api->getUrl();
$key = $api->getKey();

$method = $url.$search.$key;

$data = $api->conectaApi($method);

$_SESSION['data'] = $api->transformData($data);

header('Location: ../Views/codigo.phtml'); exit;

?>

