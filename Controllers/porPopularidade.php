<?php

require_once("../Classes/ApiData.php");
require_once("../Classes/Paginator.php");

function lista($number, $page)
{
	session_start();
	
	$api = new ApiData();
	$url = $api->getUrl();
	$key = $api->getKey();

	$search = '3/movie/popular';
	$page = '&page=' . $number;

	$method = $url.$search.$key.$page;
	$data = $api->conectaApi($method);
	$var = $api->transformData($data);

	$_SESSION['data'] = $var->results;

	$paginator = new Paginator($page ,$var->page, $var->total_pages);
	return $paginator;
}

?>
