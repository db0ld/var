<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>

        <title>Le téléphone fixe :: Exposé par Ludovic Lacroix</title>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="Content-Language" content="fr" />
           <meta http-equiv="Content-Script-Type" content="text/javascript" />
           <meta http-equiv="Content-Style-Type" content="text/css" />

        <meta name="DC.Language" scheme="RFC3066" content="fr" />

        <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />

   </head>

<body>
<div id="global">
	<div id="header">
		<h1>Titre de votre site</h1>
		
		<ul>

			<li><a href="?page=home">Introduction</a></li>
			<li><a href="?page=partie1">Partie I</a></li>
			<li><a href="?page=partie2">Partie II</a></li>
			<li><a href="?page=conclusion">Conclusion<br /><br /></a></li>
			<li><a href="?page=questions">Questionnaire Bilan</a></li>
			<li><a href="?page=sources">Sources</a></li>
		</ul>

		
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
	
	<div id="footer">
		<p>Lacroix Ludovic - 3° Bergman - Collège Marcel Rivière - FIXE.FR.JE</p>
	</div>
</div>
</body>
</html>