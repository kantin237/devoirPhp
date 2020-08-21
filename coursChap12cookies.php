<?php
print_r($_COOKIE);

if(isset($_POST["choix"]))
{
if(isset($_COOKIE["votant"]) && $_COOKIE["vote"]) 
{
$vote = $_COOKIE["vote"];
?>

<script type="text/javascript" >
alert('Vous avez déjà voté pour <?php echo $vote ?>!')
</script>

<?php
}else
{
setcookie("votant","true",time()+300);
setcookie("vote","{$_POST['choix']}",time()+300);
$vote = $_COOKIE["vote"];

if(file_exists("sondage.txt") )
{
if($id_file=fopen("sondage.txt","a"))
{
flock($id_file,2);
fwrite($id_file,$_POST['choix']."\n");
flock($id_file,3);
fclose($id_file);
}else{ echo "Fichier inaccessible";}
}else
{
$id_file=fopen("sondage.txt","w");
fwrite($id_file,$_POST['choix']."\n");
fclose($id_file);
}
?>

<script type="text/javascript" >
alert('Merci de votre vote pour <?php echo $_POST["choix"] ?> ! ')
</script>

<?php
}
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Sondage</title>
</head>
<body>
	<h2>Bienvenue sur le site PHP 7</h2>
	<form method="POST" action="">
		<fieldset>
			<legend>Votez pour votre technologie internet pr&eacute;f&eacute;r&eacute;e</legend>
			<table>
				<tbody>
					<tr>
						<td>Choix 1: PHP/MySQL</td>
						<td>
							<input type="radio" name="choix" value="PHP et MySQL" />
						</td>
					</tr>
					<tr>
						<td>Choix 2: ASP.Net</td>
						<td>
							<input type="radio" name="choix" value="ASP.Net" />
						</td>
					</tr>
					<tr>
						<td>Choix 3: JSP</td>
						<td>
							<input type="radio" name="choix" value="JSP" />
						</td>
					</tr>
					<tr>
						<td><b>Votez !</b></td>
						<td>
							<input type="submit" value="envoi">
						</td>
					</tr>

				</tbody>
			</table>
		</fieldset>
	</form>


</body>
</html>