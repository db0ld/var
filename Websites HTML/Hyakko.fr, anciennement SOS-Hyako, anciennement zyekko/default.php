		<div id="texte">
		<a name="top" id="top"></a>
			<h2>Bienvenue sur Squarr</h2>
			<h3>Un kit graphique simple et magnifique !</h3>
			<p><strong>Squarr</strong> est un kit graphique 100% CSS concocté par <a href="http://www.zwatla.com/">Zwatla</a> et <a href="http://www.lagouache.com/" title="conception de site web">Lagouache</a>.</p>
			<h4>Comment utiliser ce kit graphique ?</h4>
			<p><a href="#"><img src="images/image.jpg" width="120" height="90" alt="image" /></a>Commencez par modifier la page index. Modifiez le code HTML en utilisant un &eacute;diteur de texte ou n'importe quel &eacute;diteur HTML qui 
				affiche le code. Personnalisez le nom du site et la page du titre. Mettez vos mots cl&eacute;s et description dans les balises meta. Adaptez les 
				deux menus, le menu horizontal (&lt;div id=&quot;menu&quot;&gt;), en mettant vos propres liens. Ins&eacute;rez votre signature dans le pied de page (&lt;div 
				id=&quot;footer&quot;&gt;). Enfin, personnalisez le contenu proprement dit en r&eacute;digeant vos articles et en ajoutant vos photos. Modifiez 
				ainsi chaque page. Mettez en ligne chez votre h&eacute;bergeur, c'est pr&ecirc;t !</p>

	<hr/>

	<h2>Balises</h2>

	<h3>Titres</h3>
	<h1>Titre H1</h1>
	<h2>Titre H2</h2>
	<h3>Titre H3</h3>
	<h4>Titre H4</h4>
	<h5>Titre H5</h5>
	<h6>Titre H6</h6>

	<hr/>
	
	<h3>Texte</h3>
	<p>Ceci est un paragraphe qui contient du texte normal.</p>
	<p>Ceci est aussi un paragraphe qui contient du texte normal. On peut aussi écrire du <em>texte avec balise "em"</em>, du <strong>texte avec balise "strong"</strong>, un <acronym title="Ceci est un acronyme">acronyme</acronym>, du <del>texte barré</del> <a href="#">et bien sur des liens.</a></p>
	<code>Ceci est un bloc de code</code>
	<blockquote>
		<p>Même quand les phrases ont l'apparence d'une citation, elles ne doivent à aucun moment faire oublier qu'elles s'appliquent à quelqu'un de particulier. <strong>Peter Handke</strong></p>
	</blockquote>
	
	<hr/>
	
	<h3>Listes</h3>
	<h4>liste non ordonnée</h4>
	<ul>
		<li>élément de la liste</li>
		<li>élément de la liste
			<ul>
				<li>élément de la sous-liste</li>
				<li>élément de la sous-liste</li>
			</ul>
		</li>
		<li>élément de la liste</li>
	</ul>
	
	<h4>liste ordonnée</h4>
	<ol>
		<li>élément de la liste</li>
		<li>élément de la liste
			<ol>
				<li>élément de la sous-liste</li>
				<li>élément de la sous-liste</li>
			</ol>
		</li>
		<li>élément de la liste</li>          
	</ol>
	
	<h4>liste de définitions</h4>
	<dl>
		<dt>titre de la définition 1</dt>
		<dd>description de la définition 1</dd>
		<dt>titre de la définition 2</dt>
		<dd>description de la définition 2</dd>
	</dl>
	
	<hr/>
	
	<h3>Tableaux</h3>
	<table>
		<thead>
			<tr>
				<th scope="col">&nbsp;</th>
				<th scope="col">En-tête</th>
				<th scope="col">En-tête</th>
				<th scope="col">En-tête</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="4">Pied du tableau</td>
					</tr>
		</tfoot>
		<tbody>
			<tr>
				<th scope="row">Cellule</th>
				<td>Cellule</td>
				<td>Cellule</td>
				<td>Cellule</td>
			</tr> 
			<tr>
				<th scope="row">Cellule</th>
				<td>Cellule</td>
				<td>Cellule</td>
				<td>Cellule</td>
			</tr>
		</tbody>                           
	</table>

	<hr/>
	
	<h3>Formulaires</h3>
	<form method="post" action="#">            
		<fieldset>
		<legend>Titre</legend>
			<p><label for="f1">Texte</label><input type="text" name="" id="f1" value="boite de texte" /></p>
			<p><label for="f2">Mot de Passe</label><input type="password" name="" id="f2" value="password" /></p>
			<p><label for="f3">Menu déroulant</label>
				<select name="" id="f3">
					<option value="select option 1">select option 1</option>
					<option value="select option 2">select option 2</option>
					<option value="select option 3">select option 3</option>
				</select>
			</p>
			<p><label>Boutons Radio</label></p>
			<ul>
				<li><input type="radio" name="f4" id="f41" /><label for="f41">Bouton radio 1</label></li>
				<li><input type="radio" name="f4" id="f42" /><label for="f42">Bouton radio 2</label></li>
				<li><input type="radio" name="f4" id="f43" /><label for="f43">Bouton radio 3</label></li>
			</ul>
			<p><label>Cases à cocher</label></p>
			<ul>
				<li><input type="checkbox" name="f5" id="f51" /> <label for="f51">Case 1</label></li>
				<li><input type="checkbox" name="f5" id="f52" /> <label for="f52">Case 2</label></li>
				<li><input type="checkbox" name="f5" id="f53" /> <label for="f53">Case 3</label></li>
		</ul> 
			 <p><label for="f6">Texte</label><textarea name="" id="f6" rows="10" cols="3">Zone de texte</textarea></p>
			 <p><label>&nbsp;</label> <input type="submit" value="Valider" class="bouton" /></p>
		</fieldset>
	</form>
	
	<p><a href="#top">Retour en haut de page</a></p>
	
		</div>