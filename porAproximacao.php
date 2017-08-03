<?php

session_start();

$url = 'https://api.themoviedb.org/';
$search = '3/search/movie';
$key = '?api_key=b5147bc48922cf736a3dcc3031ad0e8a&';

$busca = $_GET['busca'];
$query = 'query=' . $busca;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.$search.$key.$query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);

$var = json_decode($data);
$atual_page = $var->page;
$total_pages = $var->total_pages;
$results = $var->results;

$_SESSION['results'] = $results;

header('Location: pesquisa.phtml'); exit;
?>