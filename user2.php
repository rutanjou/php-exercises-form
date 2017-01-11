<?php 
$nom = 'Ju';
$prenom = 'Jujus';
if (isset ($_POST['nom']) && ($_POST['prenom'])) {
	echo" Bonjour, mon nom est $nom et mon prénom est $prenom.";
}
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Formulaire 2</title>
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