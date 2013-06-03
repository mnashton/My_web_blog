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
  echo "ok";
}
else {
  echo 'Une erreur est survenue, veuillez réessayer !'; 
}
?>