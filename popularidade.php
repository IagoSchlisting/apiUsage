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
<?php require_once('menu.html');?>
	<div class="panel">
		<div class="panel-heading">
		<?php include("pagination.phtml"); ?>

		<?php // ------------------------------Resultados - FIlmes ------------------------------------------- // ?>

		</div>
		<div class="panel-body">
			<?php foreach ($results as $key=>$result): ?>
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
			<?php // ----------------------------------------------------------------------------------------- // ?>
			<?php include("pagination.phtml"); ?>
		</div>
   </div>
</div>
</body>
</html>
