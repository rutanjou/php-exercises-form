<?php 
$nom = null;
$prenom = null; 
if (isset ($_GET['nom']) && ($_GET['prenom'])) {
	echo "mon nom est " .$_GET['nom']. " et mon prenom est ".$_GET['prenom']. ".";
}
 