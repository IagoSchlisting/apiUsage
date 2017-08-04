<?php


require_once("../Classes/ApiData.php");
require_once("../Classes/Paginator.php");

	if(!isset($_SESSION['busca']))
	{
		session_start();
		$_SESSION['busca'] = $_GET['busca'];
		header('Location: ../Views/pesquisa.phtml?page=1');

	}
	else
	{
		$number = $_GET['page'];
		$search = '3/search/movie';
		$query = '&query=' . $_SESSION['busca'];
		$page = '&page=' .$number;

		$api = new ApiData();
		$url = $api->getUrl();
		$key = $api->getKey();

		$method = $url.$search.$key.$query.$page;

		$data = $api->conectaApi($method);

		$var = $api->transformData($data);

		$paginator = new Paginator('pesquisa.phtml' ,$var->page, $var->total_pages);
		
	}
?>
