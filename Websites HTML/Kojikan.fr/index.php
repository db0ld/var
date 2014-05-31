<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Kodomo no Jikan ~france~ :: Le Site officiel</title>
  <link rel="icon" type="image/gif" href="fav.gif">
<link rel="shortcut icon" href="fav.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  

</head>


<body style="direction: ltr;">
<div id="main">
<div id="header">
	<div id="pub">
	<script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* kojikan.fr */
google_ad_slot = "9096130309";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	</div>
</div>
<div id="content">
	<div id="menu">
<div id="menu-haut">
</div>
<div id="menu-content">
<a href="/"><img src="images/interface/menu/accueil.png" border="0"></a><br />
<a href="http://zero.com.1freebb.com/t36-Livre-d-Or-Kojikan-fr.htm" target="_blank">Livre d'Or</a><br />
<a href="irc://irc.Fansub-IRC.eu/zero">Chan IRC</a><br />
<a href="http://zero.xooit.fr/" target="_blank">Forum</a><br />
<a href="http://zerofansub.feedxs.com/zero.rss" target="_blank">RSS</a><br />
<a href="?page=dons">Dons</a><br />
<img src="images/interface/menu/laserie.png" border="0"><br />
<a href="?page=serie-histoire">Histoire</a><br />
<a href="?page=serie-personnages">Personnages</a><br />
<a href="?page=serie-doublage">Doublage</a><br />
<a href="?page=serie-censure">Censure</a><br />
<img src="images/interface/menu/saison1.png" border="0"><br />
<a href="?page=saison1-dl">Télecharger</a><br />
<img src="images/interface/menu/saison2.png" border="0"><br />
<a href="?page=saison2-preview">Preview</a><br />
<img src="images/interface/menu/oav.png" border="0"><br />
<a href="?page=oav-dl">Télcharger</a><br />
<img src="images/interface/menu/manga.png" border="0"><br />
<a href="?page=manga-dl">Télécharger</a><br />
<a href="?page=manga-lecture">Lecture en ligne</a><br />
<img src="images/interface/menu/bonus.png" border="0"><br />
<a href="?page=bonus-images">Images, Wall</a><br />
<a href="?page=bonus-products">Produits dérivés</a><br />
<a href="?page=bonus-ost">OST</a><br />
<img src="images/interface/menu/plus18.png" border="0"><br />
<a href="?page=hentai-doujin">Doujins</a><br />
<a href="?page=hentai-images">Images</a><br />
</div>
<div id="menu-bas">
</div>
	</div>
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
</div>
</div>




<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4691079-7");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>