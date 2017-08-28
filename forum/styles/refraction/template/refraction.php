<?php
/**
*
* @package phpbb3-Rokbb3
* phpBB style name: Refraction
* @version 1.0: refraction.php 2008-09 $
* @copyright (c) 2008 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

// Don't allow direct access
die( 'Restricted access' );
?>
<!-- PHP -->
global $config, $template;
$template->assign_vars(array(
// RokBB3 variables

		'REF_FONTFACE'	=>  "{$config['ref_fontface']}",
		'S_SHOW_REFUSER'		=> ($config['show_jrefuser']) ? true : false,
		'S_ALLOW_JREFMENU'		=> ($config['allow_jrefmenu']) ? true : false,
		'REF_MENUPOSITION'	=>  "{$config['ref_menu_position']}",
		'ALLOW_REF_COLORSWITCHER'=> ($config['show_ref_colorswitcher']) ? true : false,
                'SHOW_REF_PATHWAY'		=> ($config['show_ref_pathway']) ? true : false,
                'SHOW_REF_FONT'		=> ($config['show_ref_font']) ? true : false,
                'REF_WIDTH'		=> "{$config['ref_width']}",
                'SHOW_REF_COPYRIGHT'	=> ($config['show_ref_copyright']) ? true : false,
                'ENABLE_REF_INFO'       => ($config['enable_ref_info']) ? true : false,
                'ENABLE_REF_FONTSPANS'   => ($config['enable_ref_fontspans']) ? true : false,    
));

<!-- ENDPHP -->

<!-- IF not REF_MENUPOSITION -->
<!-- PHP -->
	global $template, $config;
	$template->assign_vars(array(
		'REF_MENUPOSITION'		=> "left",
		)
	);	
<!-- ENDPHP -->
<!-- ENDIF -->

<!-- PHP -->
global $template, $config;

if (!isset($config['enable_ref_fontspans'])) {
	$template->assign_vars(array(
		'ENABLE_REF_FONTSPANS'		=> "true",
		)
	);
 }

if (!isset($config['enable_ref_info'])) {
	$template->assign_vars(array(
		'ENABLE_REF_INFO'		=> "true",
		)
	);
 }

if (!isset($config['show_jrefuser'])) {
	$template->assign_vars(array(
		'S_SHOW_REFUSER'		=> "true",
		)
	);
 }

global $template, $config;
 if (!isset($config['show_ref_pathway'])) {
	$template->assign_vars(array(
		'SHOW_REF_PATHWAY'		=> "true",
		)
	);
 }

if (!isset($config['show_ref_colorswitcher'])) {
	$template->assign_vars(array(
		'ALLOW_REF_COLORSWITCHER'		=> "true",
		)
	);
 }
 

if (!isset($config['show_ref_copyright'])) {
	$template->assign_vars(array(
		'SHOW_REF_COPYRIGHT'		=> "true",
		)
	);
 }

<!-- ENDPHP -->
     
