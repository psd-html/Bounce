<?php if(!defined('PLX_ROOT')) exit; ?>
<style type="text/css">
#spxshortcodes_help img {
	margin:5px;
	border: 1px solid #999;
}
#spxshortcodes_help p {
	margin-bottom:5px;
}
#spxshortcodes_help pre {
	font-size:14px;
	border: 1px solid #999;
	padding: 20px;
	white-space: pre-wrap;
	word-wrap: break-word;
	background-color: #FFF;
}
#spxshortcodes_help .red {color:red;}


#spxshortcodes_help ul#tabnav {
	margin:25px 0 0 0;
	padding:0 0 20px 10px;
	border-bottom:1px solid #025b87
}
	#spxshortcodes_help  ul#tabnav li {
		margin:0;
		padding:0;
		display:inline;
		list-style-type:none;
		float:left
	}
	#spxshortcodes_help ul#tabnav a:link, ul#tabnav a:visited {
		line-height:14px;font-weight:bold;margin:0 10px 4px 10px;text-decoration:none;color:#0084c5
	}
	#spxshortcodes_help ul#tabnav li.active a:link, ul#tabnav li.active a:visited, ul#tabnav a:hover {
		border-bottom:4px solid #025b87;padding-bottom:2px;background:#fff;color:#025b87
	}
	#spxshortcodes_help ul#tabnav a:hover {
		color:#025b87
	}
#spxshortcodes_help h3 {
margin: 12px 0px 7px 0px;
padding: 0px;
font-size: 18px;
color: #555;
}
#spxshortcodes_help h4 {
margin: 12px 0px 7px 0px;
padding: 0px;
font-size: 15px;
color: #555;
}
#spxshortcodes_help ul,
#spxshortcodes_help ol {
  padding: 0;
  margin: 0 0 10px 25px;
  
}



#spxshortcodes_help li {
  line-height: 20px;
}

#spxshortcodes_help ul.unstyled,
#spxshortcodes_help ol.unstyled {
  margin-left: 0;
  list-style: none;
}

#spxshortcodes_help ul.inline,
#spxshortcodes_help ol.inline {
  margin-left: 0;
  list-style: none;
}

#spxshortcodes_help ul.inline > li,
#spxshortcodes_help ol.inline > li {
  display: inline-block;
  *display: inline;
  padding-right: 5px;
  padding-left: 5px;
  *zoom: 1;
}
#spxshortcodes_help li {background: url(../../plugins/spxdatas/img/list_arrow.png) no-repeat 0% 50%; padding: 0 0 0 16px;}

#spxshortcodes_help p {
	
}
</style>
<div id="spxshortcodes_help">
    <h2>Aide du plugin spxshortcodes</h2>
    
    <p>Ce plugin va vous permettre de créer des shortcodes qui seront utilisables dans les fichiers du thème, des articles, des pages statiques.      </p>
    <p>Les shortcodes doivents êtres placés dans un fichier de config à la racine de votre thème.</p>
    <p>Exemple : Créer votre fichier config.php à la racine de votre thème et placer le code suivant : </p>
  <pre>
&lt;?php 
    
function button_shortcode() {<br />    return '&lt;a href=&quot;http://twitter.com/filipstefansson&quot; class=&quot;twitter-button&quot;&gt;Follow me on Twitter!&lt;/a&gt;&quot;';<br />}<br />add_shortcode('button', 'button_shortcode'); 
    
?>
    </pre>
<p>Le code suivant va créer un shortcode button. Pour appeler ce code, utilisez la syntaxe suivante : [button]</p>
    <h3>Option : supression de la balise p</h3>
    <p>Si on utilise un éditeur Wysiwyg, un shortcode sera en général encadré par une balise p, que l'éditeur crée automatiquement.</p>
    <p><br />
    Mais si le shortcode renvoie un bloc div, une liste ul ou un formulaire form, ça fait un peu moche de voir l'ensemble entouré par une balise p.</p>
    <p><br />
      Une option permet  d'enlever la balise p encadrant le shortcode, la demande s'effectuant en ajoutant &quot;-p-&quot; avant le nom du shortcode, juste après le crochet ouvrant.</p>
    <p>&nbsp;</p>
<p><strong>Shortcode normal :</strong></p>
    <pre >[nomdushortcode ...paramètres...] </pre>
      
    <p><br />
      <strong>Shortcode avec suppression de la balise p encadrant le shortcode :</strong></p>
    <pre>[-p-nomdushortcode ...paramètres...]
</pre>
    <p><strong>Pour les enclosing on a donc :</strong></p>
    <pre>[-p-nomdushortcode ...paramètres...]my content[/nomdushortcode]</pre>
    <p>&nbsp;</p>
    <p>Pour plus de détail sur les shorcodes : <a href="http://codex.wordpress.org/Shortcode_API">http://codex.wordpress.org/Shortcode_API</a></p>
    <p>&nbsp;</p>
    </p>
    
  <h3>Ajout de shortcode dans un plugin externe</h3>
    <p>La version 1.2 ou supérieur permet a des plugins externes de déclarer des shortcodes.</p>
   <p><img src="../../plugins/spxshortcodes/lang/img/shortcodes_folder.jpg" width="50%" height="auto" alt="Shortcodes structure" /></p>
   <p>A cet effet vous devez créer une structure de cette sorte : plugins/monplugin/spxshortcodes/config.php</p>
   <p>Rajouter vos shortcodes dans le fichier config.php.</p>
   <p>Dans le constructeur du plugin rajouter al ligne suivante :</p>
   <pre>
   
   $this-&gt;setParam('spxshortcodes_shortcode', '1', 'string');
   
   </pre>
   Les shortcodes déclarés dans le plugin seront alors interprétés.</div>