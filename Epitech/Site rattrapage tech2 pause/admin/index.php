<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Le Blog de Monsieur Pause - Le blog ou on fait des pauses au lieu de coder (c'est pour ca qu'il est pas fini)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="DC.Language" scheme="RFC3066" content="fr" />
    <meta name="author" content="The db0 company, http://db0.fr Contact db0company@gmail.com" />
    <meta name="copyright" content="The db0 company, Copyright 2010, Tout droits résérvés. Si du contenu vous appartient et que vous souhaitez qu'il soit retiré du 	site, demandez-le par mail db0company@gmail.com" />
    <meta name="Keywords" content="REMPLIR" />
    <meta name="description" content="REMPLIR" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" /> 
    <link rel="shortcut icon" href="fav.ico" />
  </head>
  <body>
    <div id="main">

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
      
      <div id="footer">
	copyright toussa - mentions legales - pause tu suxx
      </div>
      
    </div>
  </body>
</html>
