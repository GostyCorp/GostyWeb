<?php
	$Prenom = array("Camille", "Louise", "Léa", "Ambre", "Agathe", "Louis", "Gabriel", "Léo", "Paul", "Hugo");
	$Nom = array("Rochefort", "Jardine", "Deblois", "Grondin", "Laisné", "Piedalue", "Marcoux", "Turcotte", "Bourgeois", "Deslauriers");
	$Ville = array("Aubagne", "Marseille", "Paris", "Auriol", "Lascours", "Varages", "St-Maximin", "Pourcieux", "Athène", "Tokyo");
	
	for ($D = 0; $D <= 10 ; $D = $D + 1)
	{
		$A = rand(0, 9);
		$B = rand(0, 9);
		$C = rand(0, 9);
		echo $Prenom[$A], ", ", $Nom[$B], ", ", $Ville[$C], "<br>";
	}
	include ("return.php");
?>