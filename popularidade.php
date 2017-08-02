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

		<?php // -------------------------------------------PAGINATION --------------------------------------- // ?>
     		<a href="porPopularidade.php?number=<?=1?>" class="btn btn-default" ><?=1?></a> ... 
			
			<?php if($atual == 1) : ?>
				<?php for($i=2; $i < 7; $i++): ?>
				<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
			<?php endfor; ?>
			<?php elseif($atual >= $pages - 5):  ?>
				<?php for($i=$pages - 5; $i < $pages; $i++): ?>
				<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
			<?php endfor; ?>
			<?php else: ?>
				<?php for($i=$atual; $i <= $atual + 4; $i++): ?>
				<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
				<?php endfor; ?>
			<?php endif; ?>

			... <a href="porPopularidade.php?number=<?=$pages?>" class="btn btn-default" ><?=$pages?></a>
		<?php // --------------------------------------------------------------------------------------------- // ?>


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



			<?php // -------------------------------------------PAGINATION ----------------------------------- // ?>
		     		<a href="porPopularidade.php?number=<?=1?>" class="btn btn-default" ><?=1?></a> ... 
					
					<?php if($atual == 1) : ?>
						<?php for($i=2; $i < 7; $i++): ?>
						<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
					<?php endfor; ?>
					<?php elseif($atual >= $pages - 5):  ?>
						<?php for($i=$pages - 5; $i < $pages; $i++): ?>
						<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
					<?php endfor; ?>
					<?php else: ?>
						<?php for($i=$atual; $i <= $atual + 4; $i++): ?>
						<a href="porPopularidade.php?number=<?=$i?>" class="btn btn-default" ><?=$i?></a>
						<?php endfor; ?>
					<?php endif; ?>

					... <a href="porPopularidade.php?number=<?=$pages?>" class="btn btn-default" ><?=$pages?></a>
			<?php // ----------------------------------------------------------------------------------------- // ?>

		</div>
   </div>
</div>
</body>
</html>

<?php

?>