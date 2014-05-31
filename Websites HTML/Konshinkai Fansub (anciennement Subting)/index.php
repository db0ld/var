<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>Konshinkai fansub :: Réunions amicales des fansubbeurs français</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
<link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
</head>
<body>
<div id="main">
<div id="header"><font style="font-size: 26px; font-weight: bold; padding: 0; margin: 0;">Konshinkai<br />fansub</font>
Réunions amicales des<br />fansubbeurs français</div>
<div id="menu">
<ul>
<a href="index.php"><li>Le projet</li></a>
<a href="?page=invites"><li>Invités</li></a>
<a href="?page=rdv"><li>Le Rendez-vous</li></a>
<a href="http://www.chibi-japan-expo.com/" target="_blank"><li>Chibi Japan Expo</li></a>
<a href="?page=futursrdv"><li>Futurs Rendez-vous</li></a>
<a href="?page=contact"><li>Contact</li></a>
<a href="?page=who"><li>Qui sommes-nous ?</li></a>
<a href="?page=aide"><li>Nous aider</li></a>
<a href="?page=archives"><li>Archives & Photos</li></a>
<a href="http://www.i-services.net/membres/livredor/livredor.php?uid=154226&sid=100601" target="_blank"><li>Livre d'Or</li></a>
</ul>
</div>
<div id="page">
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
</div>
<div id="footer">
copyright ce site est trop beau c'est normal c'est moi qui l'ai fait hahaha<br />
<a href="index.php">Le projet</a> - <a href="?page=invites">Invités</a> - <a href="?page=rdv">Le Rendez-vous</a> - <a href="?page=futursrdv">Futurs Rendez-vous</a> - <a href="?page=contact">Contact</a> - <a href="?page=archives">Archives & Photos</a> - <a href="http://www.i-services.net/membres/livredor/livredor.php?uid=154226&sid=100601" target="_blank">Livre d'Or</a>
</div>
</div>
</body>
</html>