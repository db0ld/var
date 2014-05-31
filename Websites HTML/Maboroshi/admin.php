<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="Normal" />  
<div class="article">
<div class="titre">Administration de Maboroshi no fansub</div>
<p>Bonjour et bienvenue dans l'administration de Maboroshi no fansub. Cette page explique comment gérer le site. Elle est déstinée à Tohru, administratrice, mais aussi à toutes les personnes devant éventuellement s'en occuper à sa place, en cas, par exemple, d'indisponibilité.</p>
<h3>Sommaire</h3>
<ul>
<li>Connexion au ftp</li>
<li>Généralités de syntaxe de texte xhtml</li>
<li>1. Faire une news + commentaires</li>
<li>2. Modifier les 3 dernières sorties</li>
<li>3. Ajouter un épisode</li>
<li>4. Ajouter une série</li>
<li>5. Ajouter un membre dans l'équipe</li>
<li>6. Mettre à jour l'avancement des épisodes</li>
<li>7. Ajouter des images dans la galerie</li>
<li>8. Ajouter des musiques + fonds dans la radio et les OST</li>
<li>9. Archiver une news</li>
<li>10. Ajouter un partenaire ou un distribuant</li>
</ul>


<div class="titre">Connexion au ftp</div>
<p>
Pour modifier le site Maboroshi, il faut avoir accés au ftp. Pour cela, demandez-le à Tohru. Elle seule a le droit de juger s'il est nécéssaire ou pas pour vous d'avoir ces accés. Si vous les avez, voilà comment se connecter sur le ftp :<br />
Télécharger "Filezilla" ou "Fireftp". Entrez les informations suivantes pour vous connecter :<br />
Hôte : maboroshinofansub.com<br />
Login : Demander à Tohru<br />
Pass : Demander à Tohru<br />
Port : 21<br />
Une fois ici, se trouvent toutes les informations du site.<br />
ATTENTION !! Il est important de savoir qu'en aucun cas les pages suivantes ne doivent être modifiées !!<br />
"index.php",<br />
"style.css",<br />
"index.html",<br />
dossier galerie complet sauf dossier "gal"<br />
dossier images/interface<br />
dossier radio complet sauf dossier "mp3"<br />
et en général toutes les pages qui ne sont pas demandé de toucher dans le tutorial suivant... Même si vous croyez bien faire !! Au moindre doute, contactez <a href="http://db0.fr" target="_blank">db0</a>. En général, le site est fait pour qu'on est pas à modifier l'index grâce au merveilleux "php". Pour modifier les pages du site, il faut télécharger "Notepad++" et pour les images un logiciel d'image (je conseille Photofiltre <b>Studio</b>).
</p>


<div class="titre">Généralités de syntaxe de texte xhtml</div>
<p>C'est quôa !? Bah c'est tout simple. C'est ce qui va te permettre de mettre en forme ton texte pour qu'il soit plus joli ! Youhou ! Choupi Kawaii !!<br />
IMPORTANT ! Tous les texte doivent être dans un paragraphe : <input type="text" value="<p>texte</p>" /><br />
Mettre un texte en gras : <input type="text" value="<b>texte</b>" /><br />
Mettre un texte en italique : <input type="text" value="<i>texte</i>" /><br />
Mettre un texte en couleur : <textarea style="width: 540px;  height: 21px;"><span style="color: #XXXXXX ;">texte</span></textarea>(le XXXXXX étant le code de couleur en héxadécimale pouvant être choisi <a href="http://www.code-couleur.com/" target="_blank">ici</a>.<br />
Changer la taille d'un texte : <textarea style="width: 540px;  height: 21px;">&lt;span style="font-size: 12px;"&gt;texte&lt;/span&gt;</textarea>(Changer le "12" en la valeur souhaitée)<br />
Centrer un texte : <textarea style="width: 540px;  height: 21px;">&lt;div class="center"&gt;texte&lt;/div&gt;</textarea><br />
Aligner un texte à droite : <textarea style="width: 540px;  height: 21px;">&lt;div class="right"&gt;texte&lt;/div&gt;</textarea><br />
Aligner un texte à gauche : <textarea style="width: 540px;  height: 21px;">&lt;div class="left"&gt;texte&lt;/div&gt;</textarea><br />
Faire un lien : <textarea style="width: 540px;  height: 21px;">&lt;a href="ADRESSE"&gt;texte&lt;/a&gt;</textarea><br />
Faire un lien dans une nouvelle fenêtre : <textarea style="width: 540px;  height: 21px;">&lt;a href="ADRESSE" target="_blank"&gt;texte&lt;/a&gt;</textarea><br />
</p>


<div class="titre">1. Faire une news + commentaires</div>
<p>Ouvrir le ftp. Dans le dossier "page", télécharger la page "accueil.php". Ouvrir avec Notepad++. Copier-coller le texte suivant au dessus du texte déjà existant dans la page :
<textarea name="fiche" style="width: 545px;; padding: 10px; height: 130px; ">
<div class="article">
<div class="titre">TITRE DE LA NEWS</div>
<p>CONTENU DE LA NEWS</p>
<div class="dateauteur">Par AUTEUR le DATE à HEURE</div>
<div class="commentaires"><a href="http://zero.com.1freebb.com/tNUMERO.htm" target="_blank">Commentaires</a> ~ <a href="http://zero.com.1freebb.com/posting.php?mode=reply&t=NUMERO" target="_blank">Ajouter un commentaire</a></div>
</div>
</textarea>
Remplacer ensuite tout ce qui est en majuscule par ce qui est demandé. Il est possible de mettre plusieurs paragraphes en mettant plusieurs fois : &lt;p&gt;texte&lt;/p&gt;&nbsp;&lt;p&gt;texte&lt;/p&gt;&nbsp;&lt;p&gt;texte&lt;/p&gt;<br />
Les "NUMERO" à remplacer, c'est pour les commentaires. Pour faire les commentaires, aller à <a href="http://zero.com.1freebb.com/index.php?theme=test" target="_blank">cette page</a> et se connecter ou s'inscrire. Puis dans le sous-forum appelé "Maboroshi no fansub", créer un nouveau topic comme sur tout les forums. Lui donner le même nom qu'à la news et le même contenu que celle-ci. Reperer ensuite le numéro du topic qui se trouve ici :<br />
<img src="images/admin/admin1.jpg" /><br />
Sur l'exemple, le numéro est "115". Ensuite, reporter ce numéro à la place de "NUMERO".<br />
Pour ajouter une image dans la news, il faut l'uploader dans le dossier images/news. Elle ne doit pas dépasser 540pixel de largeur !! C'est très important sinon ça deforme le site. Puis ajouter ça : 
<textarea style="width: 540px;  height: 21px;"><img src="images/news/NOMDELIMAGE.FORMAT" style="float:ENDROIT; padding: 10px;" /></textarea>
juste au dessus du paragraphe en remplaçant NOMDELIMAGE.FORMAT par, par exemple : choupi.jpg ou salut.png ect ect, le même nom que l'image qui a été uploadé dans le dossier précedemment. Puis remplacer "ENDROIT" par l'endroit où il faut le mettre : si c'est à gauche, il faut mettre "left" et si c'est à droite, il faut mettre "right".<br />
Une fois que la news est terminé, pour qu'elle apparaisse sur le site, réuploader la page "accueil.php" dans le dossier "page".
</p>


<div class="titre">2. Modifier les 3 dernières sorties</div>
<p>À chaque sortie d'épisode, il faut changer les sorties en haut. Pour cela, télécharger la page "sortie.php" qui se trouve dans le dossier "sorties". L'ouvrir avec Notepad++. Voilà ce qu'il faut modifier :<br />
<img src="images/admin/admin2.jpg" /><br />
Ce qui est en rouge est ce qu'il faut modifier à chaque fois et ce qui est en rose est ce qu'il faut modifier si jamais on change de serie. Chaque série à un nom (ici : Sora no Manimani) et un acronyme (ici : soranomanimani). Il faut le retenir et n'utiliser que ceux-ci pour chaque série.
Les images à uploader doivent être des screenshot. Il faut que celles-ci soient de la taille suivante : 120x72. Cependant, si elles sont plus grandes, elles seront automatiquement affichées de la bonne taille. Elles doivent être uploadée dans le dossier "images/episodes" avec le nom "lastNOMDELASERIE+NUMERODELEPISODE.jpg" exemple : "lastsoranomanimani03.jpg".<br />
Une fois que tout est modifiée, réuploader la page "sortie.php" dans le dossier "sorties".
</p>


<div class="titre">3. Ajouter un épisode</div>
<p>Ouvrir le ftp. Dans le dossier "episodes", télécharger la page de l'épisode + la page de l'épisode précédent. Copier-coller le contenu de la page de l'épisode précédent dans la page de l'épisode actuelle. Si c'est une nouvelle série, prendre une page d'une autre série. Remplacer ensuite dans cette page (cliquer sur l'image pour l'agrandir) :<br />
<a href="images/admin/admin3.jpg" target="_blank"><img src="images/admin/admin3.jpg" width="450px"/></a><br />
Ensuite, ouvrir Photofiltre Studio (ou autre), créer une image de la taille : largeur 170px et hauteur 270px. Ouvrir une image d'un screenshot où on voit un personnage de haut en bas et copier-coller d'ans l'image précédente. Redimmensionner alors le calque ainsi créé et enregistrer cette image avec le nom "ACRONYMESERIE+NUMERO.jpg" exemple : "soranomanimani03.jpg" puis uploader dans le dossier images/episodes. Vérifier sur la page série si tout s'affiche correctement.</p>
<div class="titre">3. Ajouter une série</div>
<p>Ouvrir le ftp. Dans le dossier pages/serie, télécharger une page de série existante. Enregistrer sous l'acronyme de la nouvelle série. Ouvrir et modifier (cliquer pour agrandir):<br />
<a href="images/admin/admin4.jpg" target="_blank"><img src="images/admin/admin4.jpg" width="450px"/></a><br />
Puis uploader la page avec son nouveau nom dans le dossier pages/serie.<br />
Ouvrir Photofiltre Studio (ou autre) créer une image de la taille 376x222 puis copier-coller dessus une image de la nouvelle série. Ecrire le titre dessus (ou pas) avec une joulie police toussa toussa. Enregistrer cette image avec le nom "ACRONYME.jpg" exemple "soranomanimani.jpg" et uploader-la dans le dossier "images/series".<br />
Ensuite, ouvrir le dossier "pages" puis télécharger la page "series.php". Copier-coller cette ligne :
<textarea style="width: 540px;  height: 21px;"><a href="?page=serie/ACRONYME"><img src="images/series/ACRONYME_.jpg" alt="NOM DE LA SERIE" /></a><br /><br /></textarea><br />
En remplacant "acronyme" par l'acronyme de la série et "nom de la série" par le nom de la série. (Avais-je besoin de le préciser...?). Uploader ensuite cette page dans le dossier "page".<br />
Ouvrir photofiltre studio (ou autre) et créer une image de la taille 430x85 puis copier-coller dessus une image de la série. Appeler cette image "ACRONYME_.jpg" exemple "soranomanimani_.jpg" et uploader-la dans le dossier "images/series".</p>


<div class="titre">5. Ajouter un membre dans l'équipe</div>
<p>Ouvrir le ftp. Télécharger la page "team.php" dans le dossier "pages" puis ouvrir avec Notepad++. Copier-coller le texte suivant à la suite de ce qui est déjà dans la page :<br />
<textarea name="fiche" style="width: 545px;; padding: 10px; height: 130px; ">
<div class="article" style="height:200px; overflow: hidden;">
<div class="titre">PSEUDO</div>
<img src="images/avatar/PSEUDO.png" style="float: right;" alt="avatar" />
<p>
<b>Rôle :</b> REMPLIR <br />
<b>Animes Favoris :</b> REMPLIR<br />
<b>Phrase Favorite :</b> REMPLIR<br />
<b>Particularités :</b> REMPLIR
</p>
</div>
</textarea><br />
En remplaçant par ce qui est demandé. Uploader la page dans le dossier "page". Ensuite, chercher sur <a href="http://www.renders-graphiques.fr" target="_blank">http://www.renders-graphiques.fr</a> le personnage du nouveau membre de la team. Ouvrir dans photofiltre studio. Gommer le pseudo de la personne qui a fait le render. Recadrer l'image pour n'avoir que le buste du personnage. Réduire l'image à 200px de hauteur. Enregistrer l'image sous "PSEUDO.png" exemple "tohru.png". Uploader l'image dans le dossier "images/avatar".</p>


<div class="titre">6. Mettre à jour l'avancement des épisodes</div>
<p>Ouvrir le ftp. Télécharger la page "avancement.php" dans le dossier "pages". Ouvrir avec Notepad++. Il y a une ligne par épisode. exemple : "&lt;img src="images/avancement/ep9_raw.jpg" alt=""/&gt;" est la ligne de l'épisode 9. Pour changer le statut, il faut changer le mot qui est après. Dans l'exemple, c'est "raw". Le mot est celui de la dernière chose qui a été faite. Exemple : si la trad est faite et le check est en cours, il faut mettre "trad". Les mots à mettre sont les suivants : raw - vosta - trad - check - time - edit - qc - enco - distro. Ensuite uploader la page dans le dossier "page". Si jamais il y a plus de 13 eps ou si il y a une nouvelle série, contacter <a href="http://db0.fr" target="_blank">db0</a>.</p>


<div class="titre">7. Ajouter des images dans la galerie</div>
<p>Appeler l'image un certain nom et créer une image de 140px de hauteur appelée du même nom sauf qu'il y a "_thb_" devant. Exemple : l'image s'appelle "blabla.jpg" l'autre doit s'appeller "_thb_blabla.jpg". Attention les noms d'image ne doivent pas avoir d'accent ni d'espace ni de caractere speciaux. Uploader les deux images dans le dossier "galerie/gal/DOSSIER". Avec "DOSSIER" étant le dossier que vous voulez, il doit aussi s'appeler avec un nom sans accent ni espace ni caractere speciaux. Il est possible de faire autant de dossiers qu'il y a besoin.</p>


<div class="titre">8. Ajouter des musiques + fonds dans la radio et les OST</div>
<p>En ajoutant des musiques dans la radio, elles sont aussi dans les ost et inversement. Pour les ajouter, il faut les uploader dans le dossier "radio/mp3". C'est tout. (Enfin un truc facile :P). Attention mp3 uniquement !! Les autres formats ne sont pas lus par la radio.</p>
<p>Pour ajouter des fonds d'écran dans la radio, il faut les créer avec photofiltre studio par exemple de la taille 280x320 et les enregistrer sous le nom "fondradioNUMERO.jpg" exemple "fondradio2.jpg". Uploader cette image dans le dossier "radio" puis télécharger et modifier la page "radioconfig.php" dans le dossier radio. Rajouter les noms des fonds mis après la virgule comme expliqué. Réuploader la page.</p>


<div class="titre">9. Archiver une news</div>
<p>Pour qu'une news ne s'affiche plus sur la page d'accueil mais dans les archives, il faut la copier-coller en entier dans la page correspondant à la catégorie de news dans le dossier "pages/archives". Le faire réguliérement pour que la page d'accueil ne soit pas trop longue.</p>


<div class="titre">10. Ajouter un partenaire ou un distribuant</div>
<p>Télécharger et ouvrir la page "partenaires.php" dans le dossier "partenaires" et ajouter une ligne comme ça :<br />
<textarea style="width: 540px;  height: 21px;"><a href="ADRESSE" target="_blank"><li><img src="images/partenaires/PARTENAIRE.jpg" alt="PARTENAIRE" /></li></textarea><br />
Remplacer "ADRESSE" par l'adresse du site partenaire et "PARTENAIRE" par le nom du partenaire. Pareil pour les distribuants. Ensuite, télécharger sur le site du partenaire la bannière 88x31, la renommer en "PARTENAIRE.jpg" et l'uploader dans le dossier images/partenaires. Pour ajouter une bannière distribuant sur la page distribuant, ouvrir celle-ci et copier-coller le même code que précedemment, le copier-coller dans la page "distribuant.php" qui se trouve dans le dossier "pages" avec les autres. Uploader la bannière renommée en "PARTENAIRE_.jpg" dans le dossier "images/partenaires.</p>


<div class="titre">FIN</div>
<p>D'autres questions ? Contacter <a href="http://db0.fr" target="_blank">db0</a> !</p>