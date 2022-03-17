<?php
 use MediaWiki\User\UserOptionsLookup;
 use MediaWiki\MediaWikiServices;

class SkinTunic extends SkinMustache {
	public const TEMPLATE_DIR = __DIR__ . '/templates';
	
	/**
	 * @param BagOStuff $localServerObjectCache
	 * @param array $options
	 */
	public function __construct( BagOStuff $localServerObjectCache, array $options ) {
		$options['templateDirectory'] = self::TEMPLATE_DIR;
		parent::__construct( $options );

		$this->templateParser = new TemplateParser( $this->options['templateDirectory'], $localServerObjectCache );
	}

    /**
     * Extends the getTemplateData function to add a template key 'html-myskin-hello-world'
     * which can be rendered in skin.mustache using {{{html-myskin-hello-world}}
     */
    public function getTemplateData() {
        $data = parent::getTemplateData();
        $data["html-titlealt"] =  $this->getOutput()->getTitle(); // Page Title
		$data["has-no-color-management"] = $this->getConfig()->get( 'EvelutionDisableColorManagement' );
		$data["has-box-alias"] = $this->getConfig()->get ( 'EvelutionChangeMessageBoxesToBanners' );
		$data["is-loggedin"] = $this->getSkin()->getUser()->isRegistered();


		$data["has-servelution-3.2.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '3.2.0');
		$data["has-servelution-3.1.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '3.1.0');
		$data["has-servelution-3.0.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '3.0.0');
		$data["has-servelution-2.8.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.8.0');
		$data["has-servelution-2.7.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.7.0');
		$data["has-servelution-2.6.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.6.0');
		$data["has-servelution-2.5.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.5.0');
		$data["has-servelution-2.4.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.4.0');
		$data["has-servelution-2.3.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.3.0');
		$data["has-servelution-2.2.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.2.0');
		$data["has-servelution-2.1.0"] =  ($this->getConfig()->get ( 'EvelutionServelutionRelease' ) == '2.1.0');
		// Outdated Servelution
		$data["has-servelution-old"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"] || $data["has-servelution-2.8.0"] || $data["has-servelution-3.0.0"] || $data["has-servelution-3.1.0"] || $data["has-servelution-3.2.0"]);
		// Custom Secondary Background and Text Color
		$data["has-servelution-no-custom-2ndbg"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"] || $data["has-servelution-2.8.0"] || $data["has-servelution-3.0.0"] || $data["has-servelution-3.1.0"] || $data["has-servelution-3.2.0"]);
		// Mica/Luna Levit
		$data["has-servelution-no-mica"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"] || $data["has-servelution-2.8.0"] || $data["has-servelution-3.0.0"] || $data["has-servelution-3.1.0"]);
		// Image Filter
		$data["has-servelution-no-imagefilter"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"] || $data["has-servelution-2.8.0"] || $data["has-servelution-3.0.0"]);
		// Custom Primary Font
		$data["has-servelution-no-customfont"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"] || $data["has-servelution-2.8.0"]);
		// Custom Acryllic opacity
		$data["has-servelution-no-customacryllic"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"] || $data["has-servelution-2.7.0"]);
		// Luna Accent (Unfocus)
		$data["has-servelution-no-newluna"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"] || $data["has-servelution-2.6.0"]);
		// Luna Accent
		$data["has-servelution-no-accent"] = ( $data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"] || $data["has-servelution-2.5.0"]);
		// Dynamic Generic Colors
		$data["has-servelution-no-dgeneric"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"] || $data["has-servelution-2.4.0"]);
		// Floating Actions
		$data["has-servelution-no-actions"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"] || $data["has-servelution-2.3.0"]);
		// Custom Header Color
		$data["has-servelution-no-headertext"] = ($data["has-servelution-2.1.0"] || $data["has-servelution-2.2.0"]);
		// Dual Foreground Color
		$data["has-servelution-no-dground"] = ($data["has-servelution-2.1.0"]);
		/* Theming Stuff */
		$data["data-theme-A"] = $this->getConfig()->get ( 'EvelutionThemeA' );
		$data["data-theme-B"] = $this->getConfig()->get ( 'EvelutionThemeB' );
		$data["data-theme-C"] = $this->getConfig()->get ( 'EvelutionThemeC' );
		$data["data-theme-D"] = $this->getConfig()->get ( 'EvelutionThemeD' );
		$data["data-theme-E"] = $this->getConfig()->get ( 'EvelutionThemeE' );
		$data["data-theme-F"] = $this->getConfig()->get ( 'EvelutionThemeF' );
		$data["data-theme-G"] = $this->getConfig()->get ( 'EvelutionThemeG' );
		$data["data-theme-H"] = $this->getConfig()->get ( 'EvelutionThemeH' );
        return $data;
    }


}
