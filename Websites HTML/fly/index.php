<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <title>Fly Design</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="DC.Language" scheme="RFC3066" content="fr" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
	<meta name="author" content="" />
	<meta name="copyright" content="" />
	<meta name="Keywords" content="" />
	<meta name="description" content="" />
	<script language="JavaScript">
		if(document.images)
		{
			i436550 = new Image;
			i436550 = "images/interface/accueil0.png";
		}
	</script>
	<script type="text/javascript" language="Javascript">
		function show(nom_champ)
			{
			if (document.getElementById)
				{
					tabler = document.getElementById(nom_champ);
			if (tabler.style.display=="none")
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
	<div id="main">
		<div id="main-1">
			<div id="menu">
				<a href="?page=home"><div id="accueil"></div></a><br />
				<a href="?page=actus"><div id="actus"></div></a><br />
				<a href="?page=portfolio"><div id="portfolio"></div></a><br />
				<a href="mailto:fly.design@free.fr"><div id="contact"></div></a><br />
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
					require_once("pages/$page.php");
				}
				else {
				require_once("pages/home.php");
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>