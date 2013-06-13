<?php
require("../DB_conf/config.php");
require ("../DB_conf/connect.php");
$sql = "DELETE FROM user WHERE id = $_GET['id']";
$req = mysql_query($sql) or die (mysql_error());
?>