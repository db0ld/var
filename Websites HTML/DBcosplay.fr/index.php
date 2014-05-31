<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>DBcosplay France :: Regroupement de tout les cosplayeurs français Dragon Ball</title>
  <link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
</head>
<body>
<a href="?page=accueil"><div id="header-1"><div id="header-2">
	<div id="boutons">
						<a href="?page=accueil">
						<acronym title="Page d'accueil du site">
						Accueil</acronym></a> &nbsp;&nbsp;&nbsp; 
						<a href="?page=membres">
						<acronym title="Liste des membres du groupe, comment devenir membre">
						Membres</acronym></a> &nbsp;&nbsp;&nbsp;
						<a href="?page=planning">
						<acronym title="Planning des prochaines conventions auquelles le groupe participera">
						Conventions/Planning</acronym></a> &nbsp;&nbsp;&nbsp;
						<a href="?page=photos">
						<acronym title="Les photos et vid&eacute;os des membres du groupes">
						Photos/Vidéos</a> &nbsp;&nbsp;&nbsp;
						<a href="http://cosplayforum.com/viewtopic.php?f=1&t=12517" target="_blank">
						<acronym title="Notre topic sur Cosplay forum. Acc&egrave;s au forum priv&eacute; sur simple demande">
						Forum</acronym></a>
	</div>  
</div></div></a>
<div id="main">
<?php if (isset($_GET['page']))
{
$page = $_GET['page'];
}
else
{
$page = "accueil";
}
if (file_exists("pages/$page.php")) {
require("pages/$page.php");
}
else {
require("pages/accueil.php");
}
?>
</div>
<div id="footer"><a href="http://db0.fr" target="_blank">db0 company</a></div>
</body>
</html>