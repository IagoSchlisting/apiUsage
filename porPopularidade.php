<?php

session_start();

$url = 'https://api.themoviedb.org/';
$search = '3/movie/popular';

$key = '?api_key=b5147bc48922cf736a3dcc3031ad0e8a';
$number = $_GET['number'];
if(!isset($number) or empty($number)) $number = 1;
else $page = '&page=' . $number;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.$search.$key.$page);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);

$var = json_decode($data);
$atual_page = $var->page;
$total_pages = $var->total_pages;
$results = $var->results;

$_SESSION['results'] = $results;
$_SESSION['pages'] = $total_pages;

header('Location: popularidade.php?page='.$atual_page); exit;
?>