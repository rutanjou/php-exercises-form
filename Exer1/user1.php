<?php 
$nom = 'Ju';
$prenom = 'jus';
if (isset ($_GET['nom']) && ($_GET['prenom'])) {
	echo "mon nom est $nom et mon prenom est $prenom.";
}
 