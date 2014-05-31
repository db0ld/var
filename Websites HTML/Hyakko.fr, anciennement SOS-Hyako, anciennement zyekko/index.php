<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>SOS-Hyakko :: Super One-shot Hyakko fansubbed ! FR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="Fansub Hyakko anime" />
<meta name="Keywords" content="fansub, hyakko, anime, manga, zéro" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
<!--[if IE 6]><link href="css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->	
</head>
<body>
<div id="pub">
<script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* SOS-Hyakko */
google_ad_slot = "5890174985";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div id="site">
	<div id="header">
		<h1><a href="#" title="Page d'accueil">SOS - <span>Hyakko</span></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="?page=accueil">Accueil</a></li>
			<li><a href="#">Livre d'Or</a></li>
			<li><a href="#">Dons</a></li>
			<li><a href=""></a></li>
			<li><a href="#">Anime Download</a></li>
			<li><a href="#">Anime streaming</a></li>
			<li><a href=""></a></li>
			<li><a href="#">Manga</a></li>
			<li><a href=""></a></li>
			<li><a href="#">Histoire</a></li>
			<li><a href="#">OST</a></li>
			<li><a href="#">Wallpaper</a></li>
			<li><a href="#">Doujin</a></li>
			<li><a href="http://www.kyoutsu.com/" target="_blank"><img src="http://zerofansub.net/images/partenaires/kyoutsu.png" alt="Kyoutsu" border="0"></a></li>
		</ul>
	</div>
	<div id="contenu">
	<div id="texte">
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
	</div>
	<div id="footer">
		<ul>
			<li>&copy; 2009</li>
			<li>Équipe <a href="http://zerofansub.net" target="_blank">Zéro fansub</a> pour One-shot Hyakko</li>
		</ul>
	</div>
</div>
</body>
</html>
