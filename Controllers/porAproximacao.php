<?php

session_start();

require_once("../Classes/ApiData.php");

$busca = $_GET['busca'];
$search = '3/search/movie';
$query = '&query=' . $busca;

$api = new ApiData();
$url = $api->getUrl();
$key = $api->getKey();

$method = $url.$search.$key.$query;

$data = $api->conectaApi($method);

$_SESSION['data'] = $api->transformData($data);

header('Location: ../Views/pesquisa.phtml'); exit;

?>
