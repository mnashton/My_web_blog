<?php

session_start();
require('../DB_conf/config.php');
require('../DB_conf/connect.php');
echo 'Pseudo : ',$_SESSION['login'],'<br />
     Age : ',$_SESSION['email'],'<br />';

     $sql = mysql_query("SELECT * FROM users ")or die(mysql_error());
     while ($user = mysql_fetch_assoc($sql)) 
     {
     	echo "<br>Login : ".$user['login']."<br>Mail : ".$user['email'] ."<br>Pwd : ".$user['pwd']."<br>";
     	echo "<a href=\"deletu.php?id={$user['id']}\">Supprimer</a>";
     }



?>