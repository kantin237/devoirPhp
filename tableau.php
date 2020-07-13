<!DOCTYPE html>
<html>
<head>
	<title>les tableaux en php</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	//premiere facon de creer un tableau ou tableau numerote ou simple
	$prenons = array('pierre', 'paul', 'Jacques');

	/*$prenons[0]= 'pierre';
	$prenons[1]= 'paul';
	$prenons[2]= 'Jacques';*/

	// tableau associatif
	$age = array(
		'Pierre' => 24,
		'Paul' => 22,
		'Jacques' => 'non renseigne'
	);

	/*$age['Pierre'] = 24;
	$age['Paul'] = 22;
	$age['Jacques'] = 'non renseigne';*/

	//lire et affiche les valeaus d'un tableau :
	//on peut utiliser le for, le foreach, echo,  printr
	//lorsqu'on veut utiliser une seule valeur, on utilises echo
	/*echo $prenons[0] .'<br/>'; //affiche pierre
	 echo $age['Pierre'] .'<br/>'//affiche 24;*/

	 //lorsqu'on veut afficher plusieurs valeurs, on utilise le for ou le foreach
	 // utilisation du for pour les tableaux numerotes
	 for ($i =0; $i <= 2; $i++){
	 	echo $prenons[$i].'<br/>';
	 } //rmq: on ne peut pas utiliser la boucle for pour les tableaux associatifs

	 foreach($prenons as $items){
	 	echo $items.'<br/>';
	 }

	 foreach ($age as $valeurs){
	 	echo $valeurs.'<br/>';
	 }

	 foreach ($age as $cle => $valeurs){
	 	echo 'L\'age de ' .$cle. ' est ' .$valeurs. '.<br/>';
	 }
	 // on va utiliser printr car il est important pour le debogage du code
	 echo '<pre>';
	 print_r($age);
	 echo '</pre>';

	 //les derniers types sont les tableaux multi-dimensionnelles

	 	$membres = array(
	 		array('Fomekong', 36, 'fomekong@yahoo.com'),
	 		array('Paul', 22, 'paul@gmail.com'),
	 		array('Orich', 16, 'orich@gmail.com')
	 	);
	 	//echo $membres[0][0]. ' a ' .$membres[0][1]. ' ans. Son mail est ' . $membres[0][2]. '.<br/>';
	 	// utilisation de la boucle pour pour un tableau multi-dimensionnelle
	 	for($ligne = 0; $ligne < 3; $ligne++){
	 		$membre_no = $ligne+1;
	 		echo '<b>Membre numero ' .$membre_no. '</b><br/>';
	 		echo '<ul>';
	 		for($col = 0; $col< 3; $col++){
	 			echo '<li>' .$membres[$ligne][$col]. '</li>';
	 		}
	 		echo '</ul>';
	 	}
	?>
</body>
</html>