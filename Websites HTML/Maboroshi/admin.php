<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
<div class="article">
<div class="titre">Administration de Maboroshi no fansub</div>
<p>Bonjour et bienvenue dans l'administration de Maboroshi no fansub. Cette page explique comment g�rer le site. Elle est d�stin�e � Tohru, administratrice, mais aussi � toutes les personnes devant �ventuellement s'en occuper � sa place, en cas, par exemple, d'indisponibilit�.</p>
<h3>Sommaire</h3>
<ul>
<li>Connexion au ftp</li>
<li>G�n�ralit�s de syntaxe de texte xhtml</li>
<li>1. Faire une news + commentaires</li>
<li>2. Modifier les 3 derni�res sorties</li>
<li>3. Ajouter un �pisode</li>
<li>4. Ajouter une s�rie</li>
<li>5. Ajouter un membre dans l'�quipe</li>
<li>6. Mettre � jour l'avancement des �pisodes</li>
<li>7. Ajouter des images dans la galerie</li>
<li>8. Ajouter des musiques + fonds dans la radio et les OST</li>
<li>9. Archiver une news</li>
<li>10. Ajouter un partenaire ou un distribuant</li>
</ul>


<div class="titre">Connexion au ftp</div>
<p>
Pour modifier le site Maboroshi, il faut avoir acc�s au ftp. Pour cela, demandez-le � Tohru. Elle seule a le droit de juger s'il est n�c�ssaire ou pas pour vous d'avoir ces acc�s. Si vous les avez, voil� comment se connecter sur le ftp :<br />
T�l�charger "Filezilla" ou "Fireftp". Entrez les informations suivantes pour vous connecter :<br />
H�te : maboroshinofansub.com<br />
Login : Demander � Tohru<br />
Pass : Demander � Tohru<br />
Port : 21<br />
Une fois ici, se trouvent toutes les informations du site.<br />
ATTENTION !! Il est important de savoir qu'en aucun cas les pages suivantes ne doivent �tre modifi�es !!<br />
"index.php",<br />
"style.css",<br />
"index.html",<br />
dossier galerie complet sauf dossier "gal"<br />
dossier images/interface<br />
dossier radio complet sauf dossier "mp3"<br />
et en g�n�ral toutes les pages qui ne sont pas demand� de toucher dans le tutorial suivant... M�me si vous croyez bien faire !! Au moindre doute, contactez <a href="http://db0.fr" target="_blank">db0</a>. En g�n�ral, le site est fait pour qu'on est pas � modifier l'index gr�ce au merveilleux "php". Pour modifier les pages du site, il faut t�l�charger "Notepad++" et pour les images un logiciel d'image (je conseille Photofiltre <b>Studio</b>).
</p>


<div class="titre">G�n�ralit�s de syntaxe de texte xhtml</div>
<p>C'est qu�a !? Bah c'est tout simple. C'est ce qui va te permettre de mettre en forme ton texte pour qu'il soit plus joli ! Youhou ! Choupi Kawaii !!<br />
IMPORTANT ! Tous les texte doivent �tre dans un paragraphe : <input type="text" value="<p>texte</p>" /><br />
Mettre un texte en gras : <input type="text" value="<b>texte</b>" /><br />
Mettre un texte en italique : <input type="text" value="<i>texte</i>" /><br />
Mettre un texte en couleur : <textarea style="width: 540px;  height: 21px;"><span style="color: #XXXXXX ;">texte</span></textarea>(le XXXXXX �tant le code de couleur en h�xad�cimale pouvant �tre choisi <a href="http://www.code-couleur.com/" target="_blank">ici</a>.<br />
Changer la taille d'un texte : <textarea style="width: 540px;  height: 21px;">&lt;span style="font-size: 12px;"&gt;texte&lt;/span&gt;</textarea>(Changer le "12" en la valeur souhait�e)<br />
Centrer un texte : <textarea style="width: 540px;  height: 21px;">&lt;div class="center"&gt;texte&lt;/div&gt;</textarea><br />
Aligner un texte � droite : <textarea style="width: 540px;  height: 21px;">&lt;div class="right"&gt;texte&lt;/div&gt;</textarea><br />
Aligner un texte � gauche : <textarea style="width: 540px;  height: 21px;">&lt;div class="left"&gt;texte&lt;/div&gt;</textarea><br />
Faire un lien : <textarea style="width: 540px;  height: 21px;">&lt;a href="ADRESSE"&gt;texte&lt;/a&gt;</textarea><br />
Faire un lien dans une nouvelle fen�tre : <textarea style="width: 540px;  height: 21px;">&lt;a href="ADRESSE" target="_blank"&gt;texte&lt;/a&gt;</textarea><br />
</p>


<div class="titre">1. Faire une news + commentaires</div>
<p>Ouvrir le ftp. Dans le dossier "page", t�l�charger la page "accueil.php". Ouvrir avec Notepad++. Copier-coller le texte suivant au dessus du texte d�j� existant dans la page :
<textarea name="fiche" style="width: 545px;; padding: 10px; height: 130px; ">
<div class="article">
<div class="titre">TITRE DE LA NEWS</div>
<p>CONTENU DE LA NEWS</p>
<div class="dateauteur">Par AUTEUR le DATE � HEURE</div>
<div class="commentaires"><a href="http://zero.com.1freebb.com/tNUMERO.htm" target="_blank">Commentaires</a> ~ <a href="http://zero.com.1freebb.com/posting.php?mode=reply&t=NUMERO" target="_blank">Ajouter un commentaire</a></div>
</div>
</textarea>
Remplacer ensuite tout ce qui est en majuscule par ce qui est demand�. Il est possible de mettre plusieurs paragraphes en mettant plusieurs fois : &lt;p&gt;texte&lt;/p&gt;&nbsp;&lt;p&gt;texte&lt;/p&gt;&nbsp;&lt;p&gt;texte&lt;/p&gt;<br />
Les "NUMERO" � remplacer, c'est pour les commentaires. Pour faire les commentaires, aller � <a href="http://zero.com.1freebb.com/index.php?theme=test" target="_blank">cette page</a> et se connecter ou s'inscrire. Puis dans le sous-forum appel� "Maboroshi no fansub", cr�er un nouveau topic comme sur tout les forums. Lui donner le m�me nom qu'� la news et le m�me contenu que celle-ci. Reperer ensuite le num�ro du topic qui se trouve ici :<br />
<img src="images/admin/admin1.jpg" /><br />
Sur l'exemple, le num�ro est "115". Ensuite, reporter ce num�ro � la place de "NUMERO".<br />
Pour ajouter une image dans la news, il faut l'uploader dans le dossier images/news. Elle ne doit pas d�passer 540pixel de largeur !! C'est tr�s important sinon �a deforme le site. Puis ajouter �a : 
<textarea style="width: 540px;  height: 21px;"><img src="images/news/NOMDELIMAGE.FORMAT" style="float:ENDROIT; padding: 10px;" /></textarea>
juste au dessus du paragraphe en rempla�ant NOMDELIMAGE.FORMAT par, par exemple : choupi.jpg ou salut.png ect ect, le m�me nom que l'image qui a �t� upload� dans le dossier pr�cedemment. Puis remplacer "ENDROIT" par l'endroit o� il faut le mettre : si c'est � gauche, il faut mettre "left" et si c'est � droite, il faut mettre "right".<br />
Une fois que la news est termin�, pour qu'elle apparaisse sur le site, r�uploader la page "accueil.php" dans le dossier "page".
</p>


<div class="titre">2. Modifier les 3 derni�res sorties</div>
<p>� chaque sortie d'�pisode, il faut changer les sorties en haut. Pour cela, t�l�charger la page "sortie.php" qui se trouve dans le dossier "sorties". L'ouvrir avec Notepad++. Voil� ce qu'il faut modifier :<br />
<img src="images/admin/admin2.jpg" /><br />
Ce qui est en rouge est ce qu'il faut modifier � chaque fois et ce qui est en rose est ce qu'il faut modifier si jamais on change de serie. Chaque s�rie � un nom (ici : Sora no Manimani) et un acronyme (ici : soranomanimani). Il faut le retenir et n'utiliser que ceux-ci pour chaque s�rie.
Les images � uploader doivent �tre des screenshot. Il faut que celles-ci soient de la taille suivante : 120x72. Cependant, si elles sont plus grandes, elles seront automatiquement affich�es de la bonne taille. Elles doivent �tre upload�e dans le dossier "images/episodes" avec le nom "lastNOMDELASERIE+NUMERODELEPISODE.jpg" exemple : "lastsoranomanimani03.jpg".<br />
Une fois que tout est modifi�e, r�uploader la page "sortie.php" dans le dossier "sorties".
</p>


<div class="titre">3. Ajouter un �pisode</div>
<p>Ouvrir le ftp. Dans le dossier "episodes", t�l�charger la page de l'�pisode + la page de l'�pisode pr�c�dent. Copier-coller le contenu de la page de l'�pisode pr�c�dent dans la page de l'�pisode actuelle. Si c'est une nouvelle s�rie, prendre une page d'une autre s�rie. Remplacer ensuite dans cette page (cliquer sur l'image pour l'agrandir) :<br />
<a href="images/admin/admin3.jpg" target="_blank"><img src="images/admin/admin3.jpg" width="450px"/></a><br />
Ensuite, ouvrir Photofiltre Studio (ou autre), cr�er une image de la taille : largeur 170px et hauteur 270px. Ouvrir une image d'un screenshot o� on voit un personnage de haut en bas et copier-coller d'ans l'image pr�c�dente. Redimmensionner alors le calque ainsi cr�� et enregistrer cette image avec le nom "ACRONYMESERIE+NUMERO.jpg" exemple : "soranomanimani03.jpg" puis uploader dans le dossier images/episodes. V�rifier sur la page s�rie si tout s'affiche correctement.</p>
<div class="titre">3. Ajouter une s�rie</div>
<p>Ouvrir le ftp. Dans le dossier pages/serie, t�l�charger une page de s�rie existante. Enregistrer sous l'acronyme de la nouvelle s�rie. Ouvrir et modifier (cliquer pour agrandir):<br />
<a href="images/admin/admin4.jpg" target="_blank"><img src="images/admin/admin4.jpg" width="450px"/></a><br />
Puis uploader la page avec son nouveau nom dans le dossier pages/serie.<br />
Ouvrir Photofiltre Studio (ou autre) cr�er une image de la taille 376x222 puis copier-coller dessus une image de la nouvelle s�rie. Ecrire le titre dessus (ou pas) avec une joulie police toussa toussa. Enregistrer cette image avec le nom "ACRONYME.jpg" exemple "soranomanimani.jpg" et uploader-la dans le dossier "images/series".<br />
Ensuite, ouvrir le dossier "pages" puis t�l�charger la page "series.php". Copier-coller cette ligne :
<textarea style="width: 540px;  height: 21px;"><a href="?page=serie/ACRONYME"><img src="images/series/ACRONYME_.jpg" alt="NOM DE LA SERIE" /></a><br /><br /></textarea><br />
En remplacant "acronyme" par l'acronyme de la s�rie et "nom de la s�rie" par le nom de la s�rie. (Avais-je besoin de le pr�ciser...?). Uploader ensuite cette page dans le dossier "page".<br />
Ouvrir photofiltre studio (ou autre) et cr�er une image de la taille 430x85 puis copier-coller dessus une image de la s�rie. Appeler cette image "ACRONYME_.jpg" exemple "soranomanimani_.jpg" et uploader-la dans le dossier "images/series".</p>


<div class="titre">5. Ajouter un membre dans l'�quipe</div>
<p>Ouvrir le ftp. T�l�charger la page "team.php" dans le dossier "pages" puis ouvrir avec Notepad++. Copier-coller le texte suivant � la suite de ce qui est d�j� dans la page :<br />
<textarea name="fiche" style="width: 545px;; padding: 10px; height: 130px; ">
<div class="article" style="height:200px; overflow: hidden;">
<div class="titre">PSEUDO</div>
<img src="images/avatar/PSEUDO.png" style="float: right;" alt="avatar" />
<p>
<b>R�le :</b> REMPLIR <br />
<b>Animes Favoris :</b> REMPLIR<br />
<b>Phrase Favorite :</b> REMPLIR<br />
<b>Particularit�s :</b> REMPLIR
</p>
</div>
</textarea><br />
En rempla�ant par ce qui est demand�. Uploader la page dans le dossier "page". Ensuite, chercher sur <a href="http://www.renders-graphiques.fr" target="_blank">http://www.renders-graphiques.fr</a> le personnage du nouveau membre de la team. Ouvrir dans photofiltre studio. Gommer le pseudo de la personne qui a fait le render. Recadrer l'image pour n'avoir que le buste du personnage. R�duire l'image � 200px de hauteur. Enregistrer l'image sous "PSEUDO.png" exemple "tohru.png". Uploader l'image dans le dossier "images/avatar".</p>


<div class="titre">6. Mettre � jour l'avancement des �pisodes</div>
<p>Ouvrir le ftp. T�l�charger la page "avancement.php" dans le dossier "pages". Ouvrir avec Notepad++. Il y a une ligne par �pisode. exemple : "&lt;img src="images/avancement/ep9_raw.jpg" alt=""/&gt;" est la ligne de l'�pisode 9. Pour changer le statut, il faut changer le mot qui est apr�s. Dans l'exemple, c'est "raw". Le mot est celui de la derni�re chose qui a �t� faite. Exemple : si la trad est faite et le check est en cours, il faut mettre "trad". Les mots � mettre sont les suivants : raw - vosta - trad - check - time - edit - qc - enco - distro. Ensuite uploader la page dans le dossier "page". Si jamais il y a plus de 13 eps ou si il y a une nouvelle s�rie, contacter <a href="http://db0.fr" target="_blank">db0</a>.</p>


<div class="titre">7. Ajouter des images dans la galerie</div>
<p>Appeler l'image un certain nom et cr�er une image de 140px de hauteur appel�e du m�me nom sauf qu'il y a "_thb_" devant. Exemple : l'image s'appelle "blabla.jpg" l'autre doit s'appeller "_thb_blabla.jpg". Attention les noms d'image ne doivent pas avoir d'accent ni d'espace ni de caractere speciaux. Uploader les deux images dans le dossier "galerie/gal/DOSSIER". Avec "DOSSIER" �tant le dossier que vous voulez, il doit aussi s'appeler avec un nom sans accent ni espace ni caractere speciaux. Il est possible de faire autant de dossiers qu'il y a besoin.</p>


<div class="titre">8. Ajouter des musiques + fonds dans la radio et les OST</div>
<p>En ajoutant des musiques dans la radio, elles sont aussi dans les ost et inversement. Pour les ajouter, il faut les uploader dans le dossier "radio/mp3". C'est tout. (Enfin un truc facile :P). Attention mp3 uniquement !! Les autres formats ne sont pas lus par la radio.</p>
<p>Pour ajouter des fonds d'�cran dans la radio, il faut les cr�er avec photofiltre studio par exemple de la taille 280x320 et les enregistrer sous le nom "fondradioNUMERO.jpg" exemple "fondradio2.jpg". Uploader cette image dans le dossier "radio" puis t�l�charger et modifier la page "radioconfig.php" dans le dossier radio. Rajouter les noms des fonds mis apr�s la virgule comme expliqu�. R�uploader la page.</p>


<div class="titre">9. Archiver une news</div>
<p>Pour qu'une news ne s'affiche plus sur la page d'accueil mais dans les archives, il faut la copier-coller en entier dans la page correspondant � la cat�gorie de news dans le dossier "pages/archives". Le faire r�guli�rement pour que la page d'accueil ne soit pas trop longue.</p>


<div class="titre">10. Ajouter un partenaire ou un distribuant</div>
<p>T�l�charger et ouvrir la page "partenaires.php" dans le dossier "partenaires" et ajouter une ligne comme �a :<br />
<textarea style="width: 540px;  height: 21px;"><a href="ADRESSE" target="_blank"><li><img src="images/partenaires/PARTENAIRE.jpg" alt="PARTENAIRE" /></li></textarea><br />
Remplacer "ADRESSE" par l'adresse du site partenaire et "PARTENAIRE" par le nom du partenaire. Pareil pour les distribuants. Ensuite, t�l�charger sur le site du partenaire la banni�re 88x31, la renommer en "PARTENAIRE.jpg" et l'uploader dans le dossier images/partenaires. Pour ajouter une banni�re distribuant sur la page distribuant, ouvrir celle-ci et copier-coller le m�me code que pr�cedemment, le copier-coller dans la page "distribuant.php" qui se trouve dans le dossier "pages" avec les autres. Uploader la banni�re renomm�e en "PARTENAIRE_.jpg" dans le dossier "images/partenaires.</p>


<div class="titre">FIN</div>
<p>D'autres questions ? Contacter <a href="http://db0.fr" target="_blank">db0</a> !</p>