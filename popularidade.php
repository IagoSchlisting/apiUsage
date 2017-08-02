<html>
<head>
</head>
	<title>ApiCon TheMovie</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php session_start(); $results = $_SESSION['results']; $pages = $_SESSION['pages']; $atual = $_GET['page'];?>
</head>
<body>
<div class="container" style="margin-top:10px;">
	<div class="panel">
		<div class="panel-heading">
			<?php // ------------------------------PAGINATION ---------------------------- // ?>
			<?php echo $atual . PHP_EOL ?>
			<a href="porPopularidade.php?number=<?=1?>" class="btn btn-info" ><?=1?></a> ... 

			<?php for($i=2; $i <= 8; $i++): ?>
			<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-info" ><?=$i?></a>
			<?php endfor; ?>

			... <a href="porPopularidade.php?number=<?=$pages?>" class="btn btn-info" ><?=$pages?></a>

			<?php // ------------------------------PAGINATION ---------------------------- // ?>
		</div>
	</div>
	<?php foreach ($results as $result): ?>
	<table class="table table-striped">
		<tr>
			<td style="font-weight:bold"><input class="form-control" disabled type="text" value="<?=$result->original_title?>"></td>	
		</tr>
		<tr>
			<td><input class="form-control" disabled type="text" value="<?=$result->release_date?>"></td>	
		</tr>
		<tr>
			<td><input class="form-control" disabled type="text" value="<?=$result->overview?>"></td>	
		</tr>
	</table>
	<?php endforeach; ?>

	<?php // ------------------------------PAGINATION ---------------------------- // ?>

	<a href="porPopularidade.php?number=<?=1?>" class="btn btn-info" ><?=1?></a> ... 

	<?php for($i=2; $i <= 8; $i++): ?>
	<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-info" ><?=$i?></a>
	<?php endfor; ?>

	... <a href="porPopularidade.php?number=<?=$pages?>" class="btn btn-info" ><?=$pages?></a>

	<?php // ------------------------------PAGINATION ---------------------------- // ?>

</div>
</body>
</html>

<?php

?>