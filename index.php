<html>
<head>
</head>
	<title>ApiCon TheMovie</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="panel">
	<div class="panel-heading">
		<table class="table">
			<form method="get">
			<tr>
			<td >Digite um número: </td>
			<td><input class="form-control" type="number" name="codigo" id="codigo" min="11"></td>
			<td><button type="submit" class="btn btn-primary">Research</button></td>	
			</tr>
			</form>
		</table>
	<div class="panel-body">
	</div>
	</div>
	</div>
<p style="color:green;">Nesse teste você insere um número de 11 á 49998 e ele retorna os dados principais do programa encontrado através da API &nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-info" href="https://www.themoviedb.org/"> TheMovieDB </a></p>
<?php

$url = 'https://api.themoviedb.org/';
$key = '?api_key=b5147bc48922cf736a3dcc3031ad0e8a';
$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhWQiOiJiNTE0N2JjNDg5MjJjZjczNmEzZGNjMzAzMWFkMGU4YSIsInN1YiI6IjU5N2ExNGVlOTI1MTQxMDdjYzAxNzhmNiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.dNtHVxTJ_GRGO9kjiGGUwV2904_Z_CDZf57wyA8-UwQ';

$codigo = $_GET['codigo'];
$search = '3/movie/'. $codigo;


if($codigo){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.$search.$key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close ($ch);

$var = json_decode($data);

echo '<pre>';
var_dump($var);
}

?>

</div>
</body>
</html>