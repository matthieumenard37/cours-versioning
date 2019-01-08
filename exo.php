<?php
	$personnes = [
		'personne_1' => [
			'nom' => 'Roche',
			'prenom' => 'Pierre',
			'age' => '32',
		],
		'personne_2' => [
			'nom' => 'Poulpe',
			'prenom' => 'Paul',
			'age' => '23',
		],
		'personne_3' => [
			'nom' => 'Ichanne',
			'prenom' => 'Jacques',
			'age' => '8',
		],
		'personne_4' => [
			'nom' => 'Bandemou',
			'prenom' => 'James',
			'age' => '45',
		],
		'personne_5' => [
			'nom' => 'Duck',
			'prenom' => 'Donald',
			'age' => '7',
		],
		'personne_6' => [
			'nom' => 'Leblanc',
			'prenom' => 'Gandalf',
			'age' => '72',
		]

	];

	foreach ($personnes as $personne) { 
		if ($personne['age'] > 18) {
			echo $personne['prenom']."\n\n";
		}
	}

?>