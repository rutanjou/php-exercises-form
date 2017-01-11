<?php 
if (isset ($_GET['genre']) && ($_GET['nom']) && ($_GET['prenom'])){
	echo "Bonjour " .$_GET['genre'] .$_GET['nom'] .$_GET['prenom'] ." . " ;

}
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Formulaire6</title>
 </head>
 <body>

 	<form method="GET" action="">
 	<select name="genre">
    <option>Mr</option>
    <option>Mme</option>
    </select>
 		<label for="nom">Nom: </label>
 		<input type="text" name="nom">
 		<label for="prenom">Prénom: </label>
 		<input type="text" name="prenom">
 		<input type="submit" value="Envoyer">
 	</form>
 </body>
 </html>