<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Zakariya Kévin - Portfolio</title>
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
<a href="?page=home"><div id="header"></div></a>

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
<span style="font-size: 18px; color: #000000;">.</span>
<a href="?page=home"><img src="images/interface/accueil.png" alt="accueil" /></a> 
<a href="?page=cv"><img src="images/interface/cv.png" alt="cv" /></a> 
<a href="?page=experiences"><img src="images/interface/experiences.png" alt="experiences" /></a> 
<a href="?page=monecole"><img src="images/interface/mon-ecole.png" alt="mon ecole" /></a> 
<a href="?page=projetspersonnels"><img src="images/interface/projets-personnels.png" alt="projets personnels" /></a> 
<a href="?page=contact"><img src="images/interface/contact.png" alt="contact" /></a>
 <span style="font-size: 18px; color: #000000;">.</span>
</div>

</div>
</body>
</html>