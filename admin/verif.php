<?php
require '../DB_conf/config.php';
require '../DB_conf/connect.php';
session_start();
$loginOK = false;  
if ( isset($_POST) && (!empty($_POST['login'])) && (!empty($_POST['pwd'])) ) 
{
  extract($_POST);
  $sql = "SELECT id,login,pwd,email,id_role FROM users WHERE login = '".addslashes($login)."'";
  $req = mysql_query($sql) or die(mysql_error());
  
  
  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
    
    
    if ($pwd == $data['pwd']) {
      $loginOK = true;
    }
  }
}

// Si le login a été validé on met les données en sessions
if ($loginOK) {
  $_SESSION['login'] = $data['login'];
  $_SESSION['email'] = $data['email'];
  if ($_SESSION['login'] == "admin") {
    ?><h3>Panel Administration</h3><br><br>
      <?echo '<a href="aff.php">'.'Administration'.'</a><br>';
      echo '<a href="../DB_function/liste.php">'.'Gestion des news'.'</a><br>';
      echo '<a href="aff.php">'.'Gestion des utilisateurs'.'</a>';
  }
  else
  {
    ?><h3>Panel Blogger</h3><br><br>
    <?echo '<a href="../DB_function/liste.php">'.'Gestion des news'.'</a>';
  }

}
else {
  echo 'Une erreur est survenue, veuillez réessayer !'; 
}
?>