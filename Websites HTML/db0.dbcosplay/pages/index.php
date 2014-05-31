<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>db0 no Cosupulay ! :: idol cosplay db0</title>
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
<div id="main">

	<div id="menu">
		<a href="index.php?page=accueil"><div id="button">Accueil</div></a>
		<a href="index.php?page=cosplay"><div id="button">Cosplay</div></a>
		<a href="index.php?page=evenements"><div id="button">Evenements</div></a>
		<a href="index.php?page=newsletter"><div id="button">Newsletter</div></a>
		<a href="http://db0.fr" target="_blank"><div id="button">db0</div></a>
		<a href="index1.php"><div id="button">In english</div></a>
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
</body>
</html>