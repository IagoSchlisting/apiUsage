<html>
<head>
</head>
	<title>ApiCon TheMovie</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top:10px;">
<?php require_once('menu.html');?>
	<div class="panel">
	<div class="panel-heading">
		<table class="table table-striped">
			<tr>
			<td >Código do Filme: </td>
			<td><form method="get"><input class="form-control" type="number" name="codigo" id="codigo" min="11"></td>
			<td><button type="submit" class="btn btn-primary">Search</button></form></td>	
			</tr>
		</table>
	</div>
	<div class="panel-body">
<?php require_once('porCodigo.php'); ?>
<table class="table table-striped">
	<tr>
		<td style="font-weight:600;">Original Title </td>
		<td><input class="form-control" disabled type="text" value="<?=$title?>"></td>	
	</tr>
	<tr>
		<td style="font-weight:bold;">Genres </td>
		<td><input class="form-control" disabled type="text" value="<?php foreach ($genres as $key => $genre) echo $genre->name . ' - ';?>"></td>			
	</tr>
	<tr>
		<td style="font-weight:bold;">Release Data </td>
		<td><input class="form-control" disabled type="text" value="<?=$release_data?>"></td>	
	</tr>
	<tr>
		<td style="font-weight:bold;">Production Contries </td>
		<td><input class="form-control" disabled type="text" value="<?php foreach ($production_countries as $key => $countrie)echo $countrie->name . ' - ';?>"></td>	
	</tr>
	<tr>
		<td style="font-weight:bold;">Overview </td>
		<td><textarea class="form-control" cols="50" rows="5" disabled="true"><?=$overview?></textarea></td>
	</tr>
</table>
<br>
<?php echo '<pre>'; var_dump($var);?>
</div>
</div>
</div>
</body>
</html>