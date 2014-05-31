<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>

        <title>db0 company</title>

<link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="Content-Language" content="fr" />
           <meta http-equiv="Content-Script-Type" content="text/javascript" />
           <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta name="DC.Language" scheme="RFC3066" content="fr" />

        <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />

   </head>

<body>
	<h1 id="header"><span>db0 company</span></h1>
	
	<ul id="menuhorizontal">
		<li><a href="?page=home">Accueil</a></li>
		<li><a href="?page=part">Partennariat</a></li>
		<li><a href="?page=recrut">Recrutement</a></li>
		<li><a href="#">Item n°4</a></li>
		<li><a href="#">Item n°5</a></li>
	</ul>
	
	<p id="connexion">
		Salut ça va ?
	</p>

	<ul id="menuvertical">
	<img src="images/headeressai22.jpg">
		<li><a href="http://zerofansub.net" target="_blank">Zéro fansub</a></li>
		<li><a href="http://zerofansub.net/cosplay" target="_blank">Zéro cosplay</a></li>
		<li><a href="http://doujinfactory.wordpress.net" target="_blank">The doujin factory</a></li>
		<li><a href="http://db0.xooit.fr" target="_blank">forum db0</a></li>
		<li><a href="http://zerofansub.net/hentai" target="_blank">Hentaï Zéro</a></li>
		<li><a href="http://karaokanime.fr.cc" target="_blank">Karaokanime</a></li>
		<li><a href="http://zerofansub.net/sazeyushi" target="_blank">Sazeyushi</a></li>	
</ul>

	<div id="contenu">
<?php if (isset($_GET['page']))
{
$page = $_GET['page'];
}
else
{
$page = "home";
}
if (file_exists("pages/$page.php")) {
require("pages/$page.php");
}
else {
require("pages/home.php");
}
?>

		
		<p id="footer">db0 company</p>
		

</body>
</html>