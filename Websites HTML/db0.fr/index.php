<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <title>The db0 company</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Language" content="fr" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="DC.Language" scheme="RFC3066" content="fr" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
</head>
<body><div id="main">
<a href="?page=home"><img src="images/The_db0_company.png" alt="The db0 company" /></a><br />
<div id="iol">
	<img src="images/IOL.png" alt="In Otaku life" /><br />
	<a href="?page=fansub">Fansub</a> ~ <a href="?page=cosplay">Cosplay</a> ~ <a href="?page=web">Web</a> ~ <a href="?page=autre">Autres</a>
</div>
<div id="irl">
	<img src="images/IRL.png" alt="In Real life" /><br />
	<a href="?page=moi">Moi</a> ~ <a href="?page=ecole">Mon école</a> ~ <a href="?page=cv">Mon CV</a>
</div>
<div id="galerie">
	<img src="images/galeries.png" alt="Galeries" /><br />
	<a href="http://zerofansub.net/galerie/index.php?spgmGal=Zero_Cosplay/db0">Photos</a> ~ <a href="http://zerofansub.net/galerie/index.php?spgmGal=Graphisme">Graphisme</a> ~ <a href="http://zerofansub.net/galerie/">Images</a>
</div>
<div id="contact">
	<img src="images/contact.png" alt="Contact" /><br />
	<a href="http://forum.zerofansub.net" target="_blank">Forum</a> ~ <a href="irc://irc.Fansub-IRC.eu/zero">IRC</a> ~ <a href="?page=courrier">Courrier</a> ~ <a href="?page=mail">e-mail</a>
</div>

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
</div>
<div id="footer"><script type="text/javascript"><!--
google_ad_client = "pub-1841682561759438";
/* db0.fr */
google_ad_slot = "7797872780";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><br />
Optimisé pour <a href="http://www.mozilla-europe.org/fr/" target="_blank">firefox</a> ~ Design&code par <a href="http://db0.fr/">db0</a> ~ Tout droits réservés.</div>

</div></body>
</html>