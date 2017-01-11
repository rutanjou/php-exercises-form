<?php 
$nom = null;
$prenom = null; 
if (isset ($_GET['nom']) && ($_GET['prenom'])) {
	echo "mon nom est " .$_GET['nom']. " et mon prenom est ".$_GET['prenom']. ".";
}
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Formulaire</title>
 </head>
 <body>
 	<form>
 		<label>Nom: </label>
 		<input type="text" name="nom">
 		<label>Prénom: </label>
 		<input type="text" name="prenom">
 		<input type="submit" value="Envoyer">
 	</form>
 </body>
 </html>