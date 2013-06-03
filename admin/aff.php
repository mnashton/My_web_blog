<?php

session_start();
echo 'Pseudo : ',$_SESSION['login'],'<br />
     Age : ',$_SESSION['email'],'<br />';
?>