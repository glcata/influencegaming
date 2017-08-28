<?php
/** 
*
* acp_joomla [English]
*
* @package language
* @version $Id: v3_modules.xml,v 1.5 2007/12/09 19:45:45 jelly_doughnut Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
					
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
	
}
						
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
						
$lang = array_merge($lang, array(
	
// Global
	'TITLE'	=> 'RokBB3',
	'TITLE_EXPLAIN'	=> 'Here you can set various options for your RocketTheme Phpbb3 style.',
	
	'SITE_NAME' => 'Site name',
	'SITE_DESC' => 'Site description',
	
	'OTHER_CONFIGURATION'	=> 'Global configuration',
	'JOOMLA_CONFIGURATION'	=> 'Joomla configuration',
	'AVATAR_POSITION'	=> 'Avatar position',
	'AVATAR_POSITION_EXPLAIN' => 'Set avatar and user profile position.',
	
        'JOOMLA_MENU_PATH' => 'Joomla menu path',
	'JOOMLA_MENU_PATH_EXPLAIN' => 'Relative path to directory of your Joomla installation.Remember about ending slash.',
	'ALLOW_JMENU'	=> 'Show Joomla menu',
	'INTEGRATION'	=> 'Joomla integration',
	'ALLOW_JCOLUMN' => 'Display right column',
	'ALLOW_JCOLUMN_EXPLAIN' => 'Display right column in your phpbb3 style.',
	
	'JMENU_GUEST_NAME' => 'Guest Menu Filename',
	'JMENU_REG_NAME' => 'Registered Menu Filename',

	'SHOW_COLORSWITCHER'	=> 'Show style switcher',
	'SHOW_COLORSWITCHER_EXPLAIN'	=> 'Show or hide color switcher for quick color variation change.',
// MediaMogul
	'L_SETTINGS' => 'MediaMogul settings',
	'DEFAULT_MM_SCHEME' => 'Color scheme',
	'DEFAULT_MM_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style4, style5, style6',

// Populus	
	'L_POPULUS_SETTINGS' => 'Populus settings',
	'POPULUS_ALLOW_JMENU'	=> 'Show Joomla menu',
	'DEFAULT_POP_SCHEME' => 'Color scheme',
	'DEFAULT_POP_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style4, style5, style6, style7, style8',
// HiveMind
	'L_HIVE_MIND_SETTINGS' => 'HiveMind settings',
	'DEFAULT_JHMMENU' => 'Select menu style',
	'DEFAULT_JHMMENU_EXPLAIN' => 'Default look of your menu.',
	'DEFAULT_JHMFONT' => 'Select font face',
	'DEFAULT_JHMFONT_EXPLAIN' => 'Default font family for your style.',
	'HM_WIDTH' => 'Style width',
	'HM_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
	'HM_SIDECOL_WIDTH' => 'Side column width',
	'HM_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
	'ENABLE_HM_FONTSPANS' => 'Font Spans',
	'ENABLE_HM_FONTSPANS_EXPLAIN' => 'Choose whether module titles are multi-coloured by enabling Font Spans.',
	'SHOW_HM_PATHWAY' => 'Show Pathway',
	'SHOW_HM_PATHWAY_EXPLAIN' => 'The pathway function can be disabled with this setting.',
	'ALLOW_JHMMENU'	=> 'Show Joomla menu',
	'ALLOW_JHMMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
	'SHOW_HMUSER' => 'Display User menu',
	'SHOW_HMUSER_EXPLAIN' => 'Display User menu below Main menu.',
	'HM_MENUPOSITION' => 'Modules position',
	'HM_MENUPOSITION_EXPLAIN' => 'Decide which column use for user menus, statistics..',
	
// Dimensions	
		'L_DIMMENSIONS_SETTINGS' => 'Dimensions settings',
		'ALLOW_JDIMMENU'	=> 'Show Joomla menu',
		'ALLOW_JDIMMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'ALLOW_JDIMCOLUMN' => 'Display right column',
		'ALLOW_JDIMCOLUMN_EXPLAIN' => 'Display right column in your phpbb3 style.',
		'SHOW_JDIMMAIN' => 'Display main navigation',
		'SHOW_JDIMMAIN_EXPLAIN' => 'Display main navigation links(UCP,View your posts etc..) just above forum list.',
		'SHOW_JDIMOTHER' => 'Display Other menu',
		'SHOW_JDIMOTHER_EXPLAIN' => 'Display Other menu below Main menu.',
		'DEFAULT_DIM_SCHEME' => 'Color scheme',
		'DEFAULT_DIM_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style4..... style20',
		
		'L_DIMMENSIONS_PROMO' => 'Promo image',
		
		'ALLOW_JDIMPROMO' => 'Display promo image',
		'ALLOW_JDIMPROMO_EXPLAIN' => 'Decide to show or not to show promo image above forum list.',
		'DIM_PROMO_LINK' => 'Promo link',
		'DIM_PROMO_LINK_EXPLAIN' => 'Promo image link, just above forum list.',
		'DIM_PROMO_SRC' => 'Promo src',
		'DIM_PROMO_SRC_EXPLAIN' => 'Link to promo image.',
		'DIM_PROMO_WIDTH' => 'Width',
		'DIM_PROMO_HEIGHT' => 'Height',
		
// Synapse		
		'L_SYNAPSE_SETTINGS' => 'Synapse settings',
		'ALLOW_JSYNMENU'	=> 'Show Joomla menu',
		'ALLOW_JSYNMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_SYNUSER' => 'Display User menu',
		'SHOW_SYNUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'SYNAPSE_FONTFACE' => 'Font Family',
		'SYNAPSE_HEADER' => 'Header / Footer Style',
		'DEFAULT_SYN_SCHEME' => 'Color scheme',
		'DEFAULT_SYN_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style4..... style10',
// Chromatophore		
		'L_CHROMATOPHORE_SETTINGS' => 'Chromatophore settings',
		'ALLOW_JCHROMMENU'	=> 'Show Joomla menu',
		'ALLOW_JCHROMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_CHROMUSER' => 'Display User menu',
		'SHOW_CHROMUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'CHROMATOPHORE_FONTFACE' => 'Font Family',
	  'CHROMATOPHORE_MENUPOSITION' => 'Modules position',
		'CHROMATOPHORE_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_COLOR_SCHEME' => 'Color scheme',
		'DEFAULT_COLOR_SCHEME_EXPLAIN' => 'Default color scheme if Color Chooser cookie is not set.',
		'SHOW_COLOR_CHOOSER' => 'Show color chooser',
		'SHOW_COLOR_CHOOSER_EXPLAIN' => 'Show or hide Color Chooser.',
		'CHROM_TEMPLATE_PATH' => 'Chromatophore path',
		'CHROM_TEMPLATE_PATH_EXPLAIN' => 'Absolute path to chromatophore theme directory (nedeed for scripts to work).',

		
// Catalyst		
		'L_CATALYST_SETTINGS' => 'Catalyst settings',
		'ALLOW_JCATMENU'	=> 'Show Joomla menu',
		'ALLOW_JCATMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_CATUSER' => 'Display User menu',
		'SHOW_CATUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'CATALYST_FONTFACE' => 'Font Family',
	  'CATALYST_MENUPOSITION' => 'Modules position',
		'CATALYST_MENUPOSITION_EXPLAIN' => 'Decide position for search,  menus, statistics..',
		'CATALYST_HEADER' => 'Header / Footer Style',
		'CATALYST_HEADER_EXPLAIN' => 'You can choose one of the 10 included presets.',
		
		'CATALYST_MODULES_COUNT' => 'How many ads to display ?',
		'CATALYST_MODULES_COUNT_EXPLAIN' => 'Decide how many featured ads display on your forum.',
		'L_FEATURED_MODULE_SETTINGS' => 'Featured module',
		'CATALYST_ADVERT1' => 'Advert 1 title',
		'CATALYST_ADVERT1_DESC' => 'Advert 1 description',
		
		'CATALYST_ADVERT2' => 'Advert 2 title',
		'CATALYST_ADVERT2_DESC' => 'Advert 2 description',
		
		'CATALYST_ADVERT3' => 'Advert 3 title',
		'CATALYST_ADVERT3_DESC' => 'Advert 3 description',
		
		'CATALYST_ADVERT4' => 'Advert 4 title',
		'CATALYST_ADVERT4_DESC' => 'Advert 4 description',
		'DEFAULT_CAT_SCHEME' => 'Color scheme',
		'DEFAULT_CAT_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6',
			
// Hyperion	
		'L_HYPERION_SETTINGS' => 'Hyperion settings',
		'ALLOW_JHYPMENU'	=> 'Show Joomla menu',
		'ALLOW_JHYPMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_HYPUSER' => 'Display User menu',
		'SHOW_HYPUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'HYPERION_FONTFACE' => 'Font Family',
	    'HYPERION_MENUPOSITION' => 'Modules position',
		'HYPERION_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_HYP_SCHEME' => 'Color scheme',
		'DEFAULT_HYP_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6.....,style12',

// TerranTribune		
		'L_TT_SETTINGS' => 'Terran Tribune settings',
		'ALLOW_JTTMENU'	=> 'Show Joomla menu',
		'ALLOW_JTTMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_TTUSER' => 'Display User menu',
		'SHOW_TTUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'TT_FONTFACE' => 'Font Family',
	    'TT_MENUPOSITION' => 'Modules position',
		'TT_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_TT_SCHEME' => 'Color scheme',
		'DEFAULT_TT_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: blue,brown,grey,green,orange,red,purple',
		
// TerranTribune Dark		
		'L_TTDARK_SETTDARKINGS' => 'Terran Tribune Dark settings',
		'ALLOW_JTTDARKMENU'	=> 'Show Joomla menu',
		'ALLOW_JTTDARKMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_TTDARKUSER' => 'Display User menu',
		'SHOW_TTDARKUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'TTDARK_FONTFACE' => 'Font Family',
	    'TTDARK_MENUPOSITION' => 'Modules position',
		'TTDARK_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_TTDARK_SCHEME' => 'Color scheme',
		'DEFAULT_TTDARK_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: blue,brown,grey,green,orange,red,purple',
		
// Perihelion		
		'L_PER_SETTINGS' => 'Perihelion settings',
		'ALLOW_JPERMENU'	=> 'Show Joomla menu',
		'ALLOW_JPERMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_PERUSER' => 'Display User menu',
		'SHOW_PERUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'PER_FONTFACE' => 'Font Family',
	    'PER_MENUPOSITION' => 'Modules position',
		'PER_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_PER_SCHEME' => 'Color scheme',
		'DEFAULT_PER_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5',
		'PER_WIDTH' => 'Style width',
		'PER_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
		'PER_SIDECOL_WIDTH' => 'Side column width',
		'PER_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
		
		'L_PER_BOTTOM_MENU' => 'Bottom menu',
		'PER_BMENU_LINK1_HREF' => 'Item 1 url',
		'PER_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'PER_BMENU_LINK1_DESC' => 'Item 1 description',
		'PER_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'PER_BMENU_LINK2_HREF' => 'Item 2 url',
		'PER_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'PER_BMENU_LINK2_DESC' => 'Item 2 description',
		'PER_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'PER_BMENU_LINK3_HREF' => 'Item 3 url',
		'PER_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'PER_BMENU_LINK3_DESC' => 'Item 3 description',
		'PER_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'PER_BMENU_LINK4_HREF' => 'Item 4 url',
		'PER_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'PER_BMENU_LINK4_DESC' => 'Item 4 description',
		'PER_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'PER_BMENU_LINK5_HREF' => 'Item 5 url',
		'PER_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'PER_BMENU_LINK5_DESC' => 'Item 5 description',
		'PER_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',
// Metamorph		
		
		'L_MET_SETTINGS' => 'Metamorph settings',
		'L_MET_BOTTOM_MENU' => 'Bottom menu',
		'ALLOW_JMETMENU'	=> 'Show Joomla menu',
		'ALLOW_JMETMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_METUSER' => 'Display User menu',
		'SHOW_METUSER_EXPLAIN' => 'Display User menu below Main menu.',
		'MET_FONTFACE' => 'Font Family',
		'MET_MENUPOSITION' => 'Modules position',
		'MET_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_MET_SCHEME' => 'Color scheme',
		'DEFAULT_MET_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6',
		
		'MET_BMENU_LINK1_HREF' => 'Item 1 url',
		'MET_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'MET_BMENU_LINK1_DESC' => 'Item 1 description',
		'MET_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'MET_BMENU_LINK2_HREF' => 'Item 2 url',
		'MET_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'MET_BMENU_LINK2_DESC' => 'Item 2 description',
		'MET_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'MET_BMENU_LINK3_HREF' => 'Item 3 url',
		'MET_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'MET_BMENU_LINK3_DESC' => 'Item 3 description',
		'MET_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'MET_BMENU_LINK4_HREF' => 'Item 4 url',
		'MET_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'MET_BMENU_LINK4_DESC' => 'Item 4 description',
		'MET_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'MET_BMENU_LINK5_HREF' => 'Item 5 url',
		'MET_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'MET_BMENU_LINK5_DESC' => 'Item 5 description',
		'MET_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',
// Replicant2		
		
		'L_REP2_SETTINGS' => 'Replicant 2 settings',
		'L_REP2_BOTTOM_MENU' => 'Bottom menu',
		'ALLOW_JREP2MENU'	=> 'Show Joomla menu',
		'ALLOW_JREP2MENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_REP2USER' => 'Display User menu',
		'SHOW_REP2USER_EXPLAIN' => 'Display User menu below Main menu.',
		'REP2_FONTFACE' => 'Font Family',
		'REP2_MENUPOSITION' => 'Modules position',
		'REP2_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_REP2_SCHEME' => 'Color scheme',
		'DEFAULT_REP2_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6... style 10',
		'REP2_BODYSTYLE' => 'Body style',
		'REP2_BODYSTYLE_EXPLAIN' => 'Default body style. Default available body styles are: bodystyle1, bodystyle2, bodystyle3, bodystyle4.',
		'REP2_WIDTH' => 'Style width',
		'REP2_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
		'REP2_SIDECOL_WIDTH' => 'Side column width',
		'REP2_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
		
		'REP2_BMENU_LINK1_HREF' => 'Item 1 url',
		'REP2_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'REP2_BMENU_LINK1_DESC' => 'Item 1 description',
		'REP2_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'REP2_BMENU_LINK2_HREF' => 'Item 2 url',
		'REP2_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'REP2_BMENU_LINK2_DESC' => 'Item 2 description',
		'REP2_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'REP2_BMENU_LINK3_HREF' => 'Item 3 url',
		'REP2_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'REP2_BMENU_LINK3_DESC' => 'Item 3 description',
		'REP2_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'REP2_BMENU_LINK4_HREF' => 'Item 4 url',
		'REP2_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'REP2_BMENU_LINK4_DESC' => 'Item 4 description',
		'REP2_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'REP2_BMENU_LINK5_HREF' => 'Item 5 url',
		'REP2_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'REP2_BMENU_LINK5_DESC' => 'Item 5 description',
		'REP2_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',
// Metamorph2		
		
		
		'L_MET2_SETTINGS' => 'Metamorph2 settings',
		'L_MET2_BOTTOM_MENU' => 'Bottom menu',
		'ALLOW_JMET2MENU'	=> 'Show Joomla menu',
		'ALLOW_JMET2MENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'SHOW_MET2USER' => 'Display User menu',
		'SHOW_MET2USER_EXPLAIN' => 'Display User menu below Main menu.',
		'MET2_FONTFACE' => 'Font Family',
		'MET2_MENUPOSITION' => 'Modules position',
		'MET2_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_MET2_SCHEME' => 'Color scheme',
		'DEFAULT_MET2_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6',
		
		'MET2_BMENU_LINK1_HREF' => 'Item 1 url',
		'MET2_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'MET2_BMENU_LINK1_DESC' => 'Item 1 description',
		'MET2_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'MET2_BMENU_LINK2_HREF' => 'Item 2 url',
		'MET2_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'MET2_BMENU_LINK2_DESC' => 'Item 2 description',
		'MET2_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'MET2_BMENU_LINK3_HREF' => 'Item 3 url',
		'MET2_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'MET2_BMENU_LINK3_DESC' => 'Item 3 description',
		'MET2_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'MET2_BMENU_LINK4_HREF' => 'Item 4 url',
		'MET2_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'MET2_BMENU_LINK4_DESC' => 'Item 4 description',
		'MET2_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'MET2_BMENU_LINK5_HREF' => 'Item 5 url',
		'MET2_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'MET2_BMENU_LINK5_DESC' => 'Item 5 description',
		'MET2_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',
// Versatility4		
		
		'L_V4_SETTINGS' => 'Versatility4 settings',
		'L_V4_BOTTOM_MENU' => 'Bottom menu',
		'ALLOW_JV4MENU'	=> 'Show Joomla menu',
		'ALLOW_JV4MENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		
		'SHOW_V4USER' => 'Display User menu',
		'SHOW_V4USER_EXPLAIN' => 'Display User menu below Main menu.',
		
		'SHOW_V4MAIN' => 'Display Main menu',
		'SHOW_V4MAIN_EXPLAIN' => 'Enable or disable main menu',
		
		'SHOW_V4SUB' => 'Display Submenu',
		'SHOW_V4SUB_EXPLAIN' => 'Enable or disable submenu under the top navigation.',
		
		'V4_FONTFACE' => 'Font Family',
		'V4_MENUPOSITION' => 'Modules position',
		'V4_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',
		'DEFAULT_V4_SCHEME' => 'Color scheme',
		'DEFAULT_V4_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6.....style10',
		
		'V4_MENU_STYLE' => 'Menu style',
		'V4_MENU_STYLE_EXPLAIN' => 'Default menu style. Default available menu styles are: menustyle1, menustyle2, menustyle3, menustyle4',
		
		'V4_ICON_STYLE' => 'Icon style',
		'V4_ICON_STYLE_EXPLAIN' => 'Default icon style. Default available icon styles are: icon1, icon2, icon3',
		
		'V4_BMENU_LINK1_HREF' => 'Item 1 url',
		'V4_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'V4_BMENU_LINK1_DESC' => 'Item 1 description',
		'V4_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'V4_BMENU_LINK2_HREF' => 'Item 2 url',
		'V4_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'V4_BMENU_LINK2_DESC' => 'Item 2 description',
		'V4_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'V4_BMENU_LINK3_HREF' => 'Item 3 url',
		'V4_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'V4_BMENU_LINK3_DESC' => 'Item 3 description',
		'V4_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'V4_BMENU_LINK4_HREF' => 'Item 4 url',
		'V4_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'V4_BMENU_LINK4_DESC' => 'Item 4 description',
		'V4_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'V4_BMENU_LINK5_HREF' => 'Item 5 url',
		'V4_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'V4_BMENU_LINK5_DESC' => 'Item 5 description',
		'V4_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',	
// Vertigo

		'L_VERT_SETTINGS' => 'Vertigo settings',
		'L_VERT_BOTTOM_MENU' => 'Bottom menu',
		
		'ALLOW_JVERTMENU'	=> 'Show Joomla menu',
		'ALLOW_JVERTMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		
		'SHOW_VERTUSER' => 'Display User menu',
		'SHOW_VERTUSER_EXPLAIN' => 'Display User menu below Main menu.',
		
		'VERT_FONTFACE' => 'Font Family',
		
		'VERT_MENUPOSITION' => 'Modules position',
		'VERT_MENUPOSITION_EXPLAIN' => 'Decide which column use for search, user menus, statistics..',

		'DEFAULT_VERT_SCHEME' => 'Color scheme',
		'DEFAULT_VERT_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5, style6',
		
		'SHOW_VERT_SHOWCASE' => 'Enable Showcase',
		'SHOW_VERT_SHOWCASE_EXPLAIN' => 'The showcase area is where the logo, top and header modules/elements are contained.  With this setting, you can replace this will a plain, white background for the conservative approach.',
		
		'SHOW_VERT_TOPMOD' => 'Enable Header Module',
		'SHOW_VERT_TOPMOD_EXPLAIN' => 'Header module is large frame in showcase area.It displays informations such like username, avatar and others. With this setting you can hide header module and get some free space.',
		'SHOW_VERT_TOPMOD2' => 'Enable Top Module',
		'SHOW_VERT_TOPMOD2_EXPLAIN' => 'Top module is area with site name and description.',

		'ENABLE_VERT_PARALLAX' => 'Enable Parallax',
		'ENABLE_VERT_PARALLAX_EXPLAIN' => 'Parallax is the javascript effect which moves the cloud images in the showcase area from left-right, but in a relative motion.',
		
		'ENABLE_VERT_FONTSPANS' => 'Font Spans',
		'ENABLE_VERT_FONTSPANS_EXPLAIN' => 'Choose whether module titles are multi-coloured by enabling Font Spans.',

		'SHOW_VERT_PATHWAY' => 'Show Pathway',
		'SHOW_VERT_PATHWAY_EXPLAIN' => 'The pathway or breadcrumbs function can be disabled with this setting.',
		
		'SHOW_VERT_LOGO' => 'Show Logo',
		'SHOW_VERT_LOGO_EXPLAIN' => 'Vertigo allows you to turn the logo into a module position (icon) to allow for more flexible control.',
		
		'SHOW_VERT_VALIDATION' => 'Show Validation',
		'SHOW_VERT_VALIDATION_EXPLAIN' => 'This setting allows you to disable the validation buttons in the bottom right of the style.',
		
// Mixxmag

		'L_MIXX_SETTINGS' => 'Mixxmag settings',
		'L_MIXX_BOTTOM_MENU' => 'Bottom menu',
		
		'ALLOW_JMIXXMENU'	=> 'Show Joomla menu',
		'ALLOW_JMIXXMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		
		'SHOW_MIXXUSER' => 'Display User menu',
		'SHOW_MIXXUSER_EXPLAIN' => 'Display User menu below Main menu.',
		
		'MIXX_FONTFACE' => 'Font Family',
		
		'MIXX_MENUPOSITION' => 'Modules position',
		'MIXX_MENUPOSITION_EXPLAIN' => 'Decide which column use menus,login and color variations.',

		'DEFAULT_MIXX_SCHEME' => 'Color scheme',
		'DEFAULT_MIXX_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5... style10',
		
		'SHOW_MIXX_PATHWAY' => 'Show Pathway',
		'SHOW_MIXX_PATHWAY_EXPLAIN' => 'The pathway or breadcrumbs function can be disabled with this setting.',
		
		'SHOW_MIXX_DATE' => 'Show date/last visit date',
		'SHOW_MIXX_DATE_EXPLAIN' => 'This setting allows you to enable/disable the date.',
		
		'SHOW_MIXX_COPYRIGHT' => 'Show copyright',
		'SHOW_MIXX_COPYRIGHT_EXPLAIN' => 'This setting allows you to enable/disable the RocketTheme logo.',
		
		'SHOW_MIXX_LOGO' => 'Show Logo',
		'SHOW_MIXX_LOGO_EXPLAIN' => 'Mixxmag allows you to turn the logo on/off.',
		
		'SHOW_MIXX_FONT' => 'Show Font Controls',
		'SHOW_MIXX_FONT_EXPLAIN' => 'This setting allows you to disable the text size controls in the upper right of the style..',
		
		'SHOW_MIXX_NAVBAR' => 'Show bottom navbar',
		'SHOW_MIXX_NAVBAR_EXPLAIN' => 'This setting allows you to disable the little navbar below "Statistics" modules',
		
		'MIXX_WIDTH' => 'Style width',
		'MIXX_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
		
		'MIXX_SIDECOL_WIDTH' => 'Side column width',
		'MIXX_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
		
		'MIXX_MAIN_WIDTH' => 'Main column width',
		'MIXX_MAIN_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the main column, simply enter pixel value.<strong>Note:</strong> When full-width layout is set - leave this field blank.',

		'MIXX_TOPBAR' => 'Topbar',
		'MIXX_TOPBAR_EXPLAIN' => 'This style configuration option allows you to decide if you want to preserve additional user menu at the top or use site description text instead.',
		
		'MIXX_BMENU_LINK1_HREF' => 'Item 1 url',
		'MIXX_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'MIXX_BMENU_LINK1_DESC' => 'Item 1 description',
		'MIXX_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'MIXX_BMENU_LINK2_HREF' => 'Item 2 url',
		'MIXX_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'MIXX_BMENU_LINK2_DESC' => 'Item 2 description',
		'MIXX_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'MIXX_BMENU_LINK3_HREF' => 'Item 3 url',
		'MIXX_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'MIXX_BMENU_LINK3_DESC' => 'Item 3 description',
		'MIXX_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'MIXX_BMENU_LINK4_HREF' => 'Item 4 url',
		'MIXX_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'MIXX_BMENU_LINK4_DESC' => 'Item 4 description',
		'MIXX_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'MIXX_BMENU_LINK5_HREF' => 'Item 5 url',
		'MIXX_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'MIXX_BMENU_LINK5_DESC' => 'Item 5 description',
		'MIXX_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',	

// Akiraka

		'L_AKIR_SETTINGS' => 'Akiraka settings',
		'L_AKIR_BOTTOM_MENU' => 'Bottom menu',
		
		'ALLOW_JAKIRMENU'	=> 'Show Joomla menu',
		'ALLOW_JAKIRMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		
		'SHOW_AKIRUSER' => 'Display User menu',
		'SHOW_AKIRUSER_EXPLAIN' => 'Display User menu below Main menu.',
		
		'AKIR_FONTFACE' => 'Font Family',
		
		'AKIR_MENUPOSITION' => 'Modules position',
		'AKIR_MENUPOSITION_EXPLAIN' => 'Decide which column use menus,login and color variations.',

		'DEFAULT_AKIR_SCHEME' => 'Color scheme',
		'DEFAULT_AKIR_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5... style10',
		
		'SHOW_AKIR_PATHWAY' => 'Show Pathway',
		'SHOW_AKIR_PATHWAY_EXPLAIN' => 'The pathway or breadcrumbs function can be disabled with this setting.',
		
		'SHOW_AKIR_COPYRIGHT' => 'Show copyright',
		'SHOW_AKIR_COPYRIGHT_EXPLAIN' => 'This setting allows you to enable/disable the RocketTheme logo.',
		
		'SHOW_AKIR_LOGO' => 'Show Logo',
		'SHOW_AKIR_LOGO_EXPLAIN' => 'Mixxmag allows you to turn the logo on/off.',
		
		'SHOW_AKIR_FONT' => 'Show Font Controls',
		'SHOW_AKIR_FONT_EXPLAIN' => 'This setting allows you to disable the text size controls in the upper right of the style..',
		
		'AKIR_WIDTH' => 'Style width',
		'AKIR_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
		
		'AKIR_SIDECOL_WIDTH' => 'Side column width',
		'AKIR_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
		
		'AKIR_MAIN_WIDTH' => 'Main column width',
		'AKIR_MAIN_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the main column, simply enter pixel value.<strong>Note:</strong> When full-width layout is set - leave this field blank.',
		
		'AKIR_BMENU_LINK1_HREF' => 'Item 1 url',
		'AKIR_BMENU_LINK1_HREF_EXPLAIN' => 'An url for 1 item at bottom menu.',
		'AKIR_BMENU_LINK1_DESC' => 'Item 1 description',
		'AKIR_BMENU_LINK1_DESC_EXPLAIN' => 'Description for item 1',
		
		'AKIR_BMENU_LINK2_HREF' => 'Item 2 url',
		'AKIR_BMENU_LINK2_HREF_EXPLAIN' => 'An url for 2 item at bottom menu.',
		'AKIR_BMENU_LINK2_DESC' => 'Item 2 description',
		'AKIR_BMENU_LINK2_DESC_EXPLAIN' => 'Description for item 2',
		
		'AKIR_BMENU_LINK3_HREF' => 'Item 3 url',
		'AKIR_BMENU_LINK3_HREF_EXPLAIN' => 'An url for 3 item at bottom menu.',
		'AKIR_BMENU_LINK3_DESC' => 'Item 3 description',
		'AKIR_BMENU_LINK3_DESC_EXPLAIN' => 'Description for item 3',
		
		'AKIR_BMENU_LINK4_HREF' => 'Item 4 url',
		'AKIR_BMENU_LINK4_HREF_EXPLAIN' => 'An url for 4 item at bottom menu.',
		'AKIR_BMENU_LINK4_DESC' => 'Item 4 description',
		'AKIR_BMENU_LINK4_DESC_EXPLAIN' => 'Description for item 4',
		
		'AKIR_BMENU_LINK5_HREF' => 'Item 5 url',
		'AKIR_BMENU_LINK5_HREF_EXPLAIN' => 'An url for 5 item at bottom menu.',
		'AKIR_BMENU_LINK5_DESC' => 'Item 5 description',
		'AKIR_BMENU_LINK5_DESC_EXPLAIN' => 'Description for item 5',

		'L_AKIR_ROK_COLOR_CHOOSER' => 'RokColorChooser',
		'AKIR_PRESET_STYLE' => 'Preset style',	
		'AKIR_HEADER_COLOR' => 'Header color',		
		'AKIR_BODY_COLOR'=> 'Body color',
		'AKIR_BOTBAR_COLOR'=> 'Bottom bar color',
		'AKIR_BOTSECTION_COLOR'=> 'Bottom section color',
		'AKIR_FOOTER_COLOR'=> 'Footer color',
		'AKIR_LOGO_TEXT'=> 'Logo text',
		'AKIR_HEADER_TEXT'=> 'Header text',
		'AKIR_HEADER_LINK'=> 'Header link',
		'AKIR_BODY_HIGHLIGHT'=> 'Body highlight',
		'AKIR_BODY_TEXT'=> 'Body text',
		'AKIR_BODY_LINK'=> 'Body link',
		'AKIR_BOTBAR_TEXT'=> 'Bottom bar text',
		'AKIR_BOTBAR_LINK'=> 'Bottom bar link',
		'AKIR_BOTSECTION_TEXT'=> 'Bottom section text',
		'AKIR_BOTSECTION_LINK'=> 'Bottom section link',
		'AKIR_FOOTER_TEXT'=> 'Footer text',
		'AKIR_FOOTER_LINK'=> 'Footer link',
		
		'AKIR_HEADER_OVERLAY_STYLE' => 'Header Overlay Style',
		'AKIR_BODY_OVERLAY_STYLE' => 'Main Body Overlay Style',
		'AKIR_BOTSECTION_OVERLAY_STYLE' => 'Bottom Section Overlay Style',
		'AKIR_OVERLAY_TEXTURE_STYLE' => 'Overlay Texture Style',
		'AKIR_FIXED_HEADER' => 'Fixed Header',
		'AKIR_FIXED_HEADER_EXPLAIN' => 'Enable/Disable fixed header.',
		'AKIR_FIXED_FOOTER' => 'Fixed Footer',
		'AKIR_FIXED_FOOTER_EXPLAIN' => 'Enable/Disable fixed footer.',
		
		'SHOW_AKIR_BOTTOM_MAIN_MODULES' => 'Main bottom modules.',
		'SHOW_AKIR_BOTTOM_MAIN_MODULES_EXPLAIN' => 'Enable/Disable bottom main modules.',
		
		'SHOW_AKIR_BOTTOM_SECTION' => 'Bottom section.',
		'SHOW_AKIR_BOTTOM_SECTION_EXPLAIN' => 'Enable/Disable bottom section.',
		
		
		// Meridian

		'L_MERID_SETTINGS' => 'Meridian settings',
		
		'ALLOW_JMERIDMENU'	=> 'Show Joomla menu',
		'ALLOW_JMERIDMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		
		'SHOW_MERIDUSER' => 'Display User menu',
		'SHOW_MERIDUSER_EXPLAIN' => 'Display User menu below Main menu.',
		
		'MERID_FONTFACE' => 'Font Family',
		
		'MERID_MENUPOSITION' => 'Modules position',
		'MERID_MENUPOSITION_EXPLAIN' => 'Decide which column to use for menus,login and color variations.',

		'DEFAULT_MERID_SCHEME' => 'Color scheme',
		'DEFAULT_MERID_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: style1, style2, style3, style5... style10',
		
		'SHOW_MERID_PATHWAY' => 'Show Pathway',
		'SHOW_MERID_PATHWAY_EXPLAIN' => 'The pathway or breadcrumbs function can be disabled with this setting.',
		
		'SHOW_MERID_COPYRIGHT' => 'Show copyright',
		'SHOW_MERID_COPYRIGHT_EXPLAIN' => 'This setting allows you to enable/disable the RocketTheme logo.',
		
		'SHOW_MERID_LOGO' => 'Show Logo',
		'SHOW_MERID_LOGO_EXPLAIN' => 'Mixxmag allows you to turn the logo on/off.',
		
		'SHOW_MERID_FONT' => 'Show Font Controls',
		'SHOW_MERID_FONT_EXPLAIN' => 'This setting allows you to disable the text size controls in the upper right of the style..',
		
		'MERID_WIDTH' => 'Style width',
		'MERID_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the style itself, simply enter pixel value.',
		
		'MERID_SIDECOL_WIDTH' => 'Side column width',
		'MERID_SIDECOL_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the side column, simply enter pixel value. <strong>Note:</strong> Left or Right column layout must be set.',
		
		'MERID_MAIN_WIDTH' => 'Main column width',
		'MERID_MAIN_WIDTH_EXPLAIN' => 'This style configuration option allows you to easily change the width of the main column, simply enter pixel value.<strong>Note:</strong> When full-width layout is set - leave this field blank.',
		
		
		'L_MYNXX_SETTINGS' => 'Mynxx settings',
		'L_MERID_ROK_COLOR_CHOOSER' => 'RokColorChooser',
		'MERID_PRESET_STYLE' => 'Preset style',		
		'MERID_HEADER_STYLE' => 'Header Style',
		'MERID_BODY_STYLE' => 'Main Body Style',
		'MERID_BOTSECTION_OVERLAY_STYLE' => 'Bottom Section Overlay Style',
		'MERID_LINK_COLOR'=> 'Link text color',
		'MERID_TITLES_COLOR'=> 'Titles text color',
		'MERID_BODY_COLOR'=> 'Body text color',
		
		'SHOW_MERID_BOTTOM_SECTION' => 'Bottom section.',
		'SHOW_MERID_BOTTOM_SECTION_EXPLAIN' => 'Enable/Disable bottom section.',
		
// Mynxx			
		'MYNXX_PRIMARY_COLOR'=> 'Primary color',
		'SHOW_MYNXX_FONTFAMILY' => 'Show Font Family Controls',
		'SHOW_MYNXX_FONTFAMILY_EXPLAIN' => 'This setting allows you to disable the font family controls in the upper right of the style..',
		
// SolarSentinel
		'L_SS_SETTINGS' => 'SolarSentinel settings',
		'SS_HEADER_STYLE' => 'Header Style',
		'SS_BG_STYLE' => 'Background Style',
		'SS_FOOTER_STYLE' => 'Footer Style',
// Versatility3		
		'L_V3_SETTINGS' => 'Versatility3 settings',
// Affinity	
		'L_AFF_SETTINGS' => 'Affinity settings',
// Vortex	
		'L_VORT_SETTINGS' => 'Vortex settings',
		'DEFAULT_VORT_SCHEME' => 'Color scheme',
		'DEFAULT_VORT_SCHEME_EXPLAIN' => 'Default color scheme. Default available color schemes are: <strong>blue_green, blue_sienna, dark_orange, dark_blue, light_slate, light_orange</strong>.',
		
// Rafraction	
		'L_REF_SETTINGS' => 'Refraction settings',
		'ENABLE_REF_INFO'                => 'Enable/Disable Board Info',
		'ENABLE_REF_INFO_EXPLAIN'                => 'This setting allows you to disable the Board Info module in the top of the style..',

		
		'REF_PRESET_STYLE'               => 'Preset Style',
		'REF_OVERLAY_STYLE'               => 'Body Overlay Style',
		'REF_BG_STYLE'               => 'Background Style',
		'REF_BG_FIXED'            => 'Background Fixed',
                'REF_SHOWCASE_TITLE'           => 'Forum Headers Color',
                'REF_SHOWCASE_TEXT'            => 'User Control Panel And Other Colors',
                'REF_SHOWCASE_LINK'            => 'Other Link Colors',
                'REF_BODY_TEXT'                => 'Body Text Color',
                'REF_BODY_LINK'                => 'Body Link Color',
// Nexus	
		'L_NEX_SETTINGS' => 'Nexus style configuration',
		'NEX_BOTTOM'                => 'Bottom modules location',
		'NEX_BOTTOM_EXPLAIN'                => 'This setting allows you to set location for bottom modules..',
		'NEX_LOGO_LINK'                => 'Logo link',
		'NEX_LOGO_LINK_EXPLAIN'                => 'Custom logo link. If empty, root forum page will be set.',
		'SHOW_NEX_MINIFAQ'  => 'Mini FAQ',
		'SHOW_NEX_MINIFAQ_EXPLAIN'  => 'This setting allows you to enable/disable the Mini FAQ module in the top Featured area..',
		'L_NEX_COLOR_SETTINGS' => 'Nexus color and style settings',
		'NEX_PRESET_STYLE'  => 'Preset Style',
		'NEX_HEADER_STYLE' => 'Header Style',
		'NEX_BODY_STYLE' => 'Body Style',
		'NEX_SHOWCASE_STYLE' => 'Showcase Style',
		'NEX_PRIMARY_STYLE' => 'Primary Style',
		'NEX_FOOTER_STYLE' => 'Footer Style',

		
));
			
?>