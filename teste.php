<?php

$url = 'https://api.themoviedb.org/';
$key = '?api_key=b5147bc48922cf736a3dcc3031ad0e8a';
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhWQiOiJiNTE0N2JjNDg5MjJjZjczNmEzZGNjMzAzMWFkMGU4YSIsInN1YiI6IjU5N2ExNGVlOTI1MTQxMDdjYzAxNzhmNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.dNtHVxTJ_GRGO9kjiGGUwV2904_Z_CDZf57wyA8-UwQ';

$codigo = 11;
$search = '3/movie/'. $codigo;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.$search.$key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close ($ch);

$var = json_decode($data);

var_dump($var);
?>