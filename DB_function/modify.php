<html>
<head>
</head>
<body>

<?php
require("../DB_conf/config.php");
require("../DB_conf/connect.php");

	$id = $_GET['id'];
	$sql = "SELECT * FROM billets WHERE id= $id";
	$req = mysql_query($sql) or die (mysql_error());
	$data = mysql_fetch_assoc($req);


?>

<form action="" method="POST">
Titre : <input type="text" name="titre" value="<?php echo $data['title']; ?>"><br>
Article : <br><textarea name="contenu" cols="40" rows"12"><?php echo $data['content']; ?></textarea>
<input type="submit" value="Modifier">
</form>
<?php

$contenu = $_POST['contenu'];
$titre = $_POST['titre'];
if (!empty($_POST))
{
	extract($_POST);
	$sql = "UPDATE billets SET titre = '".$titre."', contenu = '".$contenu."' WHERE id ='".$id."'";
	$req = mysql_query($sql) or die (mysql_error());
	echo "<a href=\"liste.php\">Retour Admin </a>";
}

?>


<?php  ?>
</body>
</html>