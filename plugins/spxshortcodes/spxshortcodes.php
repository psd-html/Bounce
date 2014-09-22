<?php
/**
 * Plugin spxlightbox
 *
 * @package SPX
 * @version	
 * @date	07/09/2013
 * @author	EVRARD J
 **/
class spxshortcodes extends plxPlugin {
	
	
	/**
	 * Constructeur de la classe tynimce
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	
	 **/
	public function __construct($default_lang) {
		
		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# droits pour accéder à la page config.php du plugin
		$this->initconfiguration();
		$this->setConfigProfil(PROFIL_ADMIN);
		$this->spxname="spxshorcodes";

		
		# Déclarations des hooks
		
		if(!defined('PLX_ADMIN')) {
			$this->addHook('IndexBegin', 'IndexBegin');
			$this->addHook('IndexEnd', 'IndexEnd');
			
			$this->addHook('plxMotorParseArticle', 'shortcode_p_Articles');
  			$this->addHook('plxShowStaticContent', 'shortcode_p_Statics');
		}
		
		
		
	}

	public function initconfiguration() {
		# VARIOUS PARAMS

		//if (plxUtils::strCheck($this->getParam('article'))=="") $this->setParam('article', '1', 'string');
		
	}
	
	# include shorcode librairy and parse all
	public function IndexBegin() {
		function add_filter() {}
		require(PLX_PLUGINS.'spxshortcodes/assets/lib/shortcodes.php');
		
		# inclusion de shortcode venant de plugin externe
		$this->addons_shortcode_plugins();
		# Chargement du fichier de config du theme comprenant la declaration des shorcodes
		$plxMotor = plxMotor::getInstance();
		$configtheme = PLX_ROOT.$plxMotor->aConf['racine_themes'].$plxMotor->style.'/config.php';
		if(file_exists($configtheme) AND filesize($configtheme) > 0) {
			require($configtheme);
		}
	}
	# parse shorcode in output
	public function IndexEnd() {
		$string = '
			$output = do_shortcode($output);
		';
		echo '<?php '.$string.' ?>';
	}
	
	/**
	 * Méthode qui remplace dans les articles les appels [-p-nomdushortcode ...] par les shortcodes seuls sans balise p autour et sans le préfixe "-p-" qui demande la suppression de la balise p
	 *
	 * @return	stdio
	 * @author Francis D.
	 **/
	public function shortcode_p_Articles() {
		echo '<?php
			$art["chapo"] = spxshortcodes::shortcode_p_replace($art["chapo"]);
			$art["content"] = spxshortcodes::shortcode_p_replace($art["content"]);
		      ?>';
	}

	/**
	 * Méthode qui remplace dans les pages statiques les appels [-p-nomdushortcode ...] par les shortcodes seuls sans balise p autour et sans le préfixe "-p-" de suppression de la balise p
	 *
	 * @return	stdio
	 * @author Francis D.
	 **/
	public function shortcode_p_Statics() {
		echo '<?php
			$output = spxshortcodes::shortcode_p_replace($output);
		      ?>';
	}
	
	# del p for shorcode with <p>[-p-...][/-p-]</p>
	 public static function shortcode_p_replace($txtcontenu) {
		$pattern = '/(<p[^>]*>[^<]*\[-p-(.*)\][^<]*<\/p>)/u';
		$existe_lignecode = false;
		$existe_lignecode = preg_match_all($pattern, $txtcontenu, $tab_shortcodes, PREG_SET_ORDER);
		if ($existe_lignecode) {
		  foreach ($tab_shortcodes as $tab_shortcodecourant) { 
			  $shortcode_avec_balise_p = $tab_shortcodecourant[1];
			  $shortcode_seul = "[" . $tab_shortcodecourant[2] . "]";
			  $txtcontenu = str_replace($shortcode_avec_balise_p, $shortcode_seul, $txtcontenu);
		  } 
	
		} 
	
		return $txtcontenu;
	}
	
	# add shortcode from external plugin
	private  function addons_shortcode_plugins() {
		$plxMotor = plxMotor::getInstance();
		$tmp = $plxMotor->plxPlugins->aPlugins;
	
		foreach($tmp as $key => $value) {
			//echo ("key=".$key);
			if ($value->getParam("spxshortcodes_shortcode")=="1"){
				$path = PLX_PLUGINS.$key.'/spxshortcodes/config.php';
				if(is_file($path)) {
					require($path);
				}
			}
		}
	}




}

?>