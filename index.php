<html xmlns="http://www.w3.org/1999/xhtml" class="wf-opensanscondensed-n4-active wf-oxygen-n4-active wf-active">

	<head profile="http://gmpg.org/xfn/11">
		<meta name="author" content="merbou_d">
		<title>my_webblog</title>
		<link rel="stylesheet" type="text/css" href="Feuille_CSS/style.css">
		<link rel="stylesheet" type="text/css" href="Feuille_CSS/reset.css">
		<script rel="stylesheet" type="text/javascript" src="JS_func/index_co.js"></script>

	</head>
	
	<body>

		<div class="Bdiv" id="Bdiv">
					<center><br />
						<fieldset class="fieldset">
							<legend><h2>CODE OF DUTY'S PANEL ADMIN</h2></legend>
							<form method="POST" action="admin/verif.php" </form><br />
							<label for="login">Pseudo:</label>
							<input type="text" name="login"><br>
							<label for="password">Password:</label>
							<input type="password" name="pwd"><br />
							<input type="checkbox" name="option1" value="remember me"> Se souvenir de moi
							<input type="submit" value="Se connecter" >
							</fieldset>
						</center><br />
			</div>
		<div id="header-wrap">
		
		<div id="header-bord"></div>
		<div id="header-img" ></div>

		

		<div id="header" class="wrap">
			<div id="barre">
				<div class="menu">
					<a href="index.php">HOME</a>
					<a  href="DB_function/liste.php">ARTICLES</a>
					<a  href="index.html">RECHERCHER</a>
					<a  href="index.html">CONTACTS</a>
					<a  href="#" onclick="hide_Div('Bdiv');"> CONNEXION</a>
					
				</div>
			</div>
			<div id="titre">
			<h3 class="hl-title">We are foxing with your life</h3>
			<a href="news.php?id={$data['id']}" class="hl-lien">cod</a>
		</div>
		</div>


		
		</div>
		<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F94208766&show_comments=false"></iframe>
		<div id="wrapper">
<?php
	require ("DB_conf/config.php");
	require ("DB_conf/connect.php");
	$sql = "SELECT * FROM billets ORDER BY created DESC LIMIT 0, 8 ";
	$req = mysql_query($sql) or die('erreur SQL'.$sql.mysql_error());
	while ($data = mysql_fetch_assoc($req)) 
	{
	echo "<div id=\"wrapper\"><div id=\"ok3D\"><div id=\"cadre\"><a href=\"news.php?id={$data['id']}\"><div><h1><br>{$data["titre"]}</h1><br>{$data["resume"]}<br><br>{$data["date"]}</div></a>";
	echo "<div><img src=\"{$data[img]}\"/></div></div></div></div>";
	}
?>
	</div>
	<div id="clear"></div>
	<hr>
		<div id="footer">
			<div class="foot link">	
				<ul>
						<li><a href="#"><img src="image/i.ico" alt="info" title="About Us"></a></li>
						<li><a href=m"mailto:#"><img src="image/m.png" alt="mail" title="Contact Us"></a></li>
						<li><a href="#" class="facebook"><img src="image/f.png" alt="facebook" title="Add Us"></a></li>
						<li><a href="#"><img src="image/t.png" alt="twitter" title="Follow Us"></a></li>
						<li><a href="#"><img src="image/fr.png" alt="flux" title="Flux RSS"></a></li>
				</ul>
			</div>
			
			<div class="foot2" id="copy">
				&copy; 2013 Code of Duty.To picture my life boy, you need a higher resolution. 
			</div>

		</div>	
	</body>
<html>