<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>Maboroshi no fansub présente Sora no Manimani</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
<link rel="icon" href="images/interface/fav.ico">
<link rel="shortcut icon" href="images/interface/fav.ico">

<!-- Javascript pour faire apparaître le détail des épisodes -->
<script type="text/javascript" language="Javascript">
function show(nom_champ)
{
if(document.getElementById)
{
tabler = document.getElementById(nom_champ);
if(tabler.style.display=="none")
{
tabler.style.display="";
}
else
{
tabler.style.display="none";
}
}
}
</script>
</head>
<body>
<div id="top"></div>
<div id="main">
<div id="header">
	<div id="pub">
		<img src="images/pub.png" />
	</div>
<div id="sorties">
<?php if (isset($_GET['sorties']))
{
$page = $_GET['sorties'];
}
else
{
$page = "sortie";
}
if (file_exists("sorties/$sortie.php")) {
require("sorties/$sortie.php");
}
else {
require("sorties/sortie.php");
}
?>

</div>
</div>
<div id="menu-right">
		<img src="images/menu/menu.png" alt="Menu" />
		<ul>
		<a href="?page=accueil"><li>Accueil</li></a>
		<a href="http://maboroshinofansub.xooit.fr/" target="_blank"><li>Forum</li></a>
		<a href="irc://irc.recycled-irc.net/MaboroshiNoFansub"><li>Chan IRC</li></a>
		<a href="?page=contact"><li>Contact</li></a>
		<a href="?page=dons"><li>Dons</li></a>
		<a href="http://www.i-services.net/membres/livredor/livredor.php?uid=107637&sid=56123" target="_blank">
		<li>Livre d'Or</li></a>
		</ul>
		<img src="images/menu/maboroshi.png" alt="Maboroshi" />
		<ul>
		<a href="?page=team"><li>L'équipe</li></a>
		<a href="?page=recrutement"><li>Recrutement</li></a>
		<a href="?page=avancement"><li>Avancement</li></a>
		</ul>
		<img src="images/menu/download.png" alt="Download Télécharger" />
		<ul>
		<a href="?page=serie/soranomanimani"><li>Sora no Manimani</li></a>
		<a href="?page=series"><li>Anciens projets</li></a>
		</ul>
		<img src="images/menu/bonus.png" alt="Bonus" />
		<ul>
		<a href="galerie" target="_blank"><li>Galerie</li></a>
		<a href="#" onclick="window.open('radio','radio','toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, copyhistory=0, menuBar=0, width=280, height=380, left=200, top=200');return(false)"><li>Radio</li></a>
		<a href="radio/mp3" target="_blank"><li>OST</li></a>
		</ul>
</div>
<div id="partenaires">
<?php if (isset($_GET['partenaires']))
{
$page = $_GET['partenaires'];
}
else
{
$page = "partenaire";
}
if (file_exists("partenaires/$sortie.php")) {
require("partenaires/$partenaire.php");
}
else {
require("partenaires/partenaire.php");
}
?>

<div id="page">
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

<div id="footer">
<a href="#top"><img src="images/interface/up.png" alt="Up !" style="float: right;" /></a>
<div id="copyright">
© Copyright 2009 - <a href="http://maboroshinofansub.com">Maboroshi no fansub</a> 4.0 - Tout droits résérvés <br />
Design/Code/Hébergeur/Gestion : <a href="http://db0.fr">db0</a> - Administratrice : Tohru<br />

</div>

</div>
</div>
</body>
</html>