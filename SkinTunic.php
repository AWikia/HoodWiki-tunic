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

}
