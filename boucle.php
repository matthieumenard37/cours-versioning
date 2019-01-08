<?php

for ($repetitions = 0 ; $repetitions < 10 ; $repetitions ++)
{

	echo 'Je ne dois pas copier sur mon voisin '.$repetitions.' fois !'."\n";

}
	$nom = 'MENARD';
	$prenom = 'MATTHIEU';
	echo $nom.' '.$prenom."\n";
	echo "$nom $prenom"."\n";

	$nb = readline('Votre nombre : ');
	if ($nb < 10) {
		echo 'Le nombre est inferieur à 10'."\n\n";
	} elseif ($nb > 10) {
		echo 'Le nombre est superieur à 10'."\n\n";
	} else {
		echo 'Le nombre est égal à 10'."\n\n";
	}

	$plateforme = 'PSj4';

	switch($plateforme){
		case 'PC':
			echo 'Vous achetez un PC';
			break;
		case 'PS4':
			echo 'Vous achetez une PS4';
			break;
		case 'Xbox One':
			echo 'Vous achetez une Xbox One';
			break;
		case 'Switch':
			echo 'Vous achetez une Switch';
			break;
		default:
			echo 'Vous n\'achetez rien';
			break;
	}

	$semaine = [
		' ce Lundi'."\n\n",
		' ce Mardi'."\n\n",
		' ce Mercredi'."\n\n",
		' ce Jeudi'."\n\n",
		' ce Vendredi'."\n\n",
		' ce Samedi'."\n\n",
		' ce Dimanche'."\n\n"
	];

	foreach ($semaine as $jour) {
		echo $jour."\n";
	}


	$articles = [
		'article_1' => [
			'nom' => 'Pasta',
			'contenu' => 'Paquet 500g',
			'date' => '27/02/2019',
		],
		'article_2' => [
			'nom' => 'Riz',
			'contenu' => 'Paquet 300g',
			'date' => '27/03/2019',
		],
		'article_3' => [
			'nom' => 'Lentilles',
			'contenu' => 'Paquet 250g',
			'date' => '17/02/2019',
		]

	];

	foreach ($articles as $article_key => $article) {
			echo "$article_key\n";
		foreach ($article as $key => $value) {
			echo "$key : $value\n";
		}
	}

	//var_dump($articles);
		echo $articles['article_3']['contenu'];

	$compterPersonne = 0;

	while ($compterPersonne <= 50) {
		if ($compterPersonne != 50) {
			echo $compterPersonne.', ';
		} else {
			echo $compterPersonne;
		}
		$compterPersonne++;
	}

	$cpt = 20;

	for($i = 0; $cpt <= 100; $cpt++ && $i++){
		echo 'Ligne numéro : '.$i.' correspond à '.$cpt."\n";
	}
?>