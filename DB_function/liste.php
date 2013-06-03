<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
<form action="create.php" method="post">
	<input type="text" name="title" placeholder="Titre de la news"><br><br>
	<textarea name = "content"  cols="40" rows="12" placeholder="Ecrivez votre article"></textarea>
	<textarea name = "resume" cols="40" rows="12" placeholder="Ecrivez un bref résumé de l'article"></textarea>
	<br>
	<input type="text" name="img" placeholder="entrez le chemin de l'image">
	<input type="submit" value="Creer">


</form>



<?php
include '../DB_conf/config.php';
include "../DB_conf/connect.php";
$sql = "SELECT * FROM billets ORDER BY created DESC" ;
$req = mysql_query($sql) or die (mysql_error());
while ($data = mysql_fetch_assoc($req)) 
{
	echo $data['title'] ."xxx". $data['id_author'] . "<br>". "<a href=\"../news.php?id={$data['id']}\">Voir</a>";
	echo "<br><a href=\"modify.php?id={$data['id']}\">modifier</a>"	;
	echo "<br><a href=\"delete.php?id={$data['id']}\">supprimer</a>";
}
?>


</body>
</html>