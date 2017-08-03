<?php

require_once("../Classes/ApiData.php");

function lista($number){

	session_start();

	$api = new ApiData();
	$url = $api->getUrl();
	$key = $api->getKey();

	$search = '3/movie/popular';
	$page = '&page=' . $number;

	$method = $url.$search.$key.$page;
	$data = $api->conectaApi($method);
	$var = $api->transformData($data);

	$atual_page = $var->page;
	$total_pages = $var->total_pages;
	$results = $var->results;


	$_SESSION['results'] = $results;
	$_SESSION['total_pages'] = $total_pages;
	$_SESSION['atual_page'] = $atual_page;

}

?>
