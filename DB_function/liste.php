<html>
<head>
<title>News</title>
<link rel="stylesheet" type="text/css" href="../Feuille_CSS/news.css"/>
<meta charset="UTF-8">
</head>

<body>
<div id="header"><h2>{ Gestion des news }</h2></div>

<div id="champ"><form action="create.php" method="post">
	<input type="text" name="title" placeholder="Titre de la news"/><br><br>
	<textarea name = "content"  cols="40" rows="12" placeholder="Ecrivez votre article"></textarea>
	<textarea name = "resume" cols="40" rows="12" placeholder="Ecrivez un bref résumé de l'article"></textarea>
	<br>
	<input type="text" name="img" placeholder="entrez le chemin de l'image"/>
	<input type="submit" value="Creer"/>


</form>
</div>


<div id="news">
<?php
include '../DB_conf/config.php';
include "../DB_conf/connect.php";
$sql = "SELECT * FROM billets ORDER BY created DESC" ;
$req = mysql_query($sql) or die (mysql_error());
while ($data = mysql_fetch_assoc($req)) 
{ ?><div class="test"><?
?><h1><? echo $data['title'] ."</h1><br/><h3>". $data['id_author'] . "</h3><br/>". "<a href=\"../news.php?id={$data['id']}\">Voir</a>";
	echo "<br><a href=\"modify.php?id={$data['id']}\">modifier</a>"	;
	echo "<br><a href=\"delete.php?id={$data['id']}\">supprimer</a><br/>";
?></div><?
}
?>
</div>


</body>
</html>