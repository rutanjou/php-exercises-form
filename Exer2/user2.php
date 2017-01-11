<?php 
$nom = 'Ju';
$prenom = 'Jujus';
if (isset ($_POST['nom']) && ($_POST['prenom'])) {
	echo" Bonjour, mon nom est " .$_POST['nom']." et mon prénom est ".$_POST['prenom'];
}
 