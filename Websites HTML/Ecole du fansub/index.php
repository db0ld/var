<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>L'École du Fansub, par Zéro fansub</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="DC.Language" scheme="RFC3066" content="fr" />
	<meta name="author" content="The db0 company, http://db0.fr Contact db0company@gmail.com" />
	<meta name="copyright" content="The db0 company, Copyright 2010, Tout droits résérvés. Si du contenu vous appartient et que vous souhaitez qu'il soit retiré du 	site, demandez-le par mail db0company@gmail.com" />
	<meta name="Keywords" content="école ecole fansub fan sub apprendre ASS Aegisub karaoké karaoke time timing edtion édition scantrad scantraduction traduction 	photoshop HTML XHTML japonais anglais CSS programmation cours en ligne encodage vidéo video français grammaire conjugaison adaptation syntaxe " />
	<meta name="description" content="L'École du fansub, par Zéro fansub : Donner les moyens à des personnes motivées mais n'ayant aucune éxpérience en fansub d'entrer dans une équipe en les formant depuis la base." />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" /> 
	<link rel="shortcut icon" href="fav.ico">
</head>
<body>
<div id="top"></div>
<div id="main">
	<div id="header">
		<div id="bg1"><div id="bg2">
			<img src="img/logo.png" alt="L'École du Fansub, par Zéro fansub" />
		</div></div>
	</div>
	<div id="menu">
		<a href="."><img src="img/menu/accueil.png" alt="Accueil" /></a>
		<ul>
			<a href="irc://irc.fansub-irc.eu/ecole"><li class="button">Channel IRC</li></a>
			<a href="http://forum.zerofansub.net/f246.htm" target="_blank"><li class="button">Forum</li></a>
			<a href="mailto:zero.fansub@gmail.com"><li class="button">Contact</li></a>
		</ul>
		<img src="img/menu/lecole.png" alt="L'école" />
		<ul>
			<a href="?page=presentation"><li class="button">Présentation</li></a>
			<a href="?page=matieres"><li class="button">Les Matières</li></a>
			<a href="?page=eleves"><li class="button">Les élèves</li></a>
			<a href="?page=postuler"><li class="button">Postuler</li></a>
		</ul>
		<img src="img/menu/projets.png" alt="Projets" />
		<ul>
			<a href="?page=series/mayoi_neko_overrun"><li class="button">Mayoi Neko Overrun!</li></a>
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
		if (file_exists("pages/$page.html")) {
		require_once("pages/$page.html");
		}
		else {
		require_once("pages/error.html");
		}
		?>
	</div>
	
	<div id="footer">
		<a href="#top">
			<div id="up">
			</div>
		</a>
		<div id="content">
			© Copyright 2010 - Tout droits résérvés<br />
			<a href="http://zerofansub.net/archives/ecole">L'École du Fansub</a>, par <a href="http://zerofansub.net" target="_blank">Zéro fansub</a> - <br />
			Design/Code/Hébergeur/Gestion : <a href="http://db0.fr" target="_blank">db0</a>
		</div>
	</div>
</div>
</body>
</html>