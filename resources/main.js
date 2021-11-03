/* JavaScript for the Tunic skin */
(function() {
    'use strict';
	VisualStyleCompile();
	CompileVisualL10N();

})();

function CompileVisualL10N() {

/* Visual Themes */
var visualColorNames_l10n = [mw.msg( 'tunic-color-factorycolors' ), mw.msg( 'tunic-color-lunacolors' ), mw.msg( 'tunic-color-classicforced' ), mw.msg( 'tunic-color-classicforced' ) + ' II', mw.msg( 'tunic-color-campbellforced' ), mw.msg( 'tunic-color-forced' ), mw.msg( 'tunic-color-forced' ) + ' II', mw.msg( 'tunic-color-forced' ) + ' III', mw.msg( 'tunic-color-tangoforced' ),mw.msg( 'tunic-color-rgbcolors' ),mw.msg( 'tunic-color-retro' ),mw.msg( 'tunic-color-retro' ) + ' II',mw.msg( 'tunic-color-retro' ) + ' III',mw.msg( 'tunic-color-retro' ) + ' IV',mw.msg( 'tunic-color-retro' ) + ' V',mw.msg( 'tunic-color-retro' ) + ' VI',mw.msg( 'tunic-color-retro' ) + ' VII',mw.msg( 'tunic-color-fandomcolors' ),mw.msg( 'tunic-color-fandomcolors' ) + ' II',mw.msg( 'tunic-color-fandomcolors' ) + ' III', mw.msg( 'tunic-color-candycrush' ), mw.msg( 'tunic-color-candycrush' ) + ' II' , mw.msg( 'tunic-color-discord' ),'tunic OS'];

// Changes Strings into l10ned version
/* Visual Colors */
	for (let i = 0; i < visualColorNames_l10n.length; i++) {
		var str = '<a onclick="VisualColor(' + i + ')">' + visualColorNames_l10n[i] + '</a>'
		$('li[id="color' + i + '"]').html(str);
	}
}