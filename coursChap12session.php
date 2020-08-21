<?php
	session_start();
	$fond=$SESSION['fond'];
	$page=$SESSION['page'];
?>
<!DOCTYPE">
	<html>
		<head>
			<meta charset="utf-8" />
			<title>Exercice 7 Chapitre 12</title>
			<style >
				body {
					background-color: <?php echo $fond ?> ; 
					color: <?php echo $page ?> ;
				}
			</style>
		</head>
	<body>
		<p>
			page 
			<a href="page1.php">Principale</a>
		</p>
	</body>
	</html>