<?php
include('../DB_conf/config.php');
include('../DB_conf/connect.php');
header("Location:liste.php");
extract($_POST);
$sql="INSERT INTO billets (title,content,resume,img,updated) VALUES (\"$title\",\"$content\",\"$resume\",\"$img\",\"$updated\")";
$req=mysql_query($sql) or die (mysql_error());
?>
<html>
<head>
</head>
<body>
</body>
</html>