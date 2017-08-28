<?php
/** 
*
* @package acp
* @version $Id: v3_modules.xml,v 1.5 2007/12/09 19:45:45 jelly_doughnut Exp $
* @copyright (c) 2007 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

			
/**
* @package acp
*/
class acp_joomla
{
	var $u_action;
	
	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$user->add_lang('mods/acp_joomla');
		$submit	= isset($_POST['submit']) ? true : false;
		$form_key = 'acp_joomla';
		add_form_key($form_key);

		
$template->assign_vars(array(
'MODE'	=>  $mode,
));	
		
	
function jhmmenu_select($value, $key = '',$jhmmenu_options='')
{
$jhmmenu_options .= '<option value="1"' . (($value == 1) ? ' selected="selected"' : '') . '>Style 1</option>
									 <option value="2"' . (($value == 2) ? ' selected="selected"' : '') . '>Style 2</option>
									 <option value="3"' . (($value == 3) ? ' selected="selected"' : '') . '>Style 3</option>
									 <option value="4"' . (($value == 4) ? ' selected="selected"' : '') . '>Style 4</option>
									 <option value="5"' . (($value == 5) ? ' selected="selected"' : '') . '>Style 5</option>
									 ';
	return $jhmmenu_options;
}
	
	
	
function jhmfont_select($value, $key = '', $jhmfont_options='')
{
$jhmfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 
									 ';
	return $jhmfont_options;
}

function synapse_font($value, $key = '',$synapsefont_options='')
{
$synapsefont_options .= '<option value="ff-synapse"' . (($value == "ff-synapse") ? ' selected="selected"' : '') . '>Synapse</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
					 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>					 
									 ';
	return $synapsefont_options;
}

function chromatophore_font($value, $key = '', $chromatophorefont_options='')
{
$chromatophorefont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $chromatophorefont_options;
}

function chromatophore_menu_position($value, $key = '', $chromatophore_mposition_options='')
{
$chromatophore_mposition_options .= '<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="bottom"' . (($value == "bottom") ? ' selected="selected"' : '') . '>Bottom (Full width)</option>
									 ';
	return $chromatophore_mposition_options;
}



function synapse_texture($value, $key = '', $synapsetexture_options='')
{
$synapsetexture_options .= '<option value="header1"' . (($value == "header1") ? ' selected="selected"' : '') . '>Header1</option>
									 <option value="header2"' . (($value == "header2") ? ' selected="selected"' : '') . '>Header2</option>
									 <option value="header3"' . (($value == "header3") ? ' selected="selected"' : '') . '>Header3</option>
									 <option value="header4"' . (($value == "header4") ? ' selected="selected"' : '') . '>Header4</option>
									 <option value="header5"' . (($value == "header5") ? ' selected="selected"' : '') . '>Header5</option>
									 <option value="header6"' . (($value == "header6") ? ' selected="selected"' : '') . '>Header6</option>	 
									 ';
	return $synapsetexture_options;
}

function catalyst_texture($value, $key = '', $catalysttexture_options='')
{
$catalysttexture_options .= '<option value="header1"' . (($value == "header1") ? ' selected="selected"' : '') . '>Header1</option>
									 <option value="header2"' . (($value == "header2") ? ' selected="selected"' : '') . '>Header2</option>
									 <option value="header3"' . (($value == "header3") ? ' selected="selected"' : '') . '>Header3</option>
									 <option value="header4"' . (($value == "header4") ? ' selected="selected"' : '') . '>Header4</option>
									 <option value="header5"' . (($value == "header5") ? ' selected="selected"' : '') . '>Header5</option>
									 <option value="header6"' . (($value == "header6") ? ' selected="selected"' : '') . '>Header6</option>
									<option value="header7"' . (($value == "header7") ? ' selected="selected"' : '') . '>Header7</option>
									<option value="header8"' . (($value == "header8") ? ' selected="selected"' : '') . '>Header8</option>
									<option value="header9"' . (($value == "header9") ? ' selected="selected"' : '') . '>Header9</option>
									<option value="header10"' . (($value == "header10") ? ' selected="selected"' : '') . '>Header10</option>	 
									 ';
	return $catalysttexture_options;
}


function catalyst_menu_position($value, $key = '', $catalyst_mposition_options = '')
{
$catalyst_mposition_options .= '<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="top"' . (($value == "top") ? ' selected="selected"' : '') . '>Top (Full width)</option>
									 ';
	return $catalyst_mposition_options;
}

function catalyst_font($value, $key = '', $catalystfont_options='')
{
$catalystfont_options .= '<option value="ff-catalyst"' . (($value == "ff-catalyst") ? ' selected="selected"' : '') . '>Catalyst</option>
                   <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $catalystfont_options;
}		

function catalyst_modules_count($value, $key = '', $catalystmodules_options='')
{
$catalystmodules_options .= '
							 <option value="w99"' . (($value == "w99") ? ' selected="selected"' : '') . '>One adverts</option>
							 <option value="w49"' . (($value == "w49") ? ' selected="selected"' : '') . '>Two adverts</option>
							 <option value="w33"' . (($value == "w33") ? ' selected="selected"' : '') . '>Three adverts</option>
							 <option value="w24"' . (($value == "w24") ? ' selected="selected"' : '') . '>Four advert</option>
									 ';
	return $catalystmodules_options;
}		


function hyperion_font($value, $key = '', $hyperionfont_options='')
{
$hyperionfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $hyperionfont_options;
}

function hyperion_menu_position($value, $key = '', $hyperion_mposition_options='')
{
$hyperion_mposition_options .= '<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $hyperion_mposition_options;
}

function tt_menu_position($value, $key = '',$tt_mposition_options = '')
{
$tt_mposition_options .= '<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 ';
	return $tt_mposition_options;
}


function ttdark_menu_position($value, $key = '',$ttdark_mposition_options = '')
{
$ttdark_mposition_options .= '<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $ttdark_mposition_options;
}

function per_menu_position($value, $key = '',$per_mposition_options = '')
{
$per_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $per_mposition_options;
}

function met_menu_position($value, $key = '',$met_mposition_options = '')
{
$met_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $met_mposition_options;
}

function met2_menu_position($value, $key = '',$met2_mposition_options = '')
{
$met2_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $met2_mposition_options;
}

function v4_menu_position($value, $key = '',$v4_mposition_options = '')
{
$v4_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $v4_mposition_options;
}

function vert_menu_position($value, $key = '',$vert_mposition_options = '')
{
$vert_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $vert_mposition_options;
}


function rep2_menu_position($value, $key = '',$rep2_mposition_options = '')
{
$rep2_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $rep2_mposition_options;
}

function hm_menu_position($value, $key = '',$hm_mposition_options = '')
{
$hm_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $hm_mposition_options;
}


function mixx_menu_position($value, $key = '',$mixx_mposition_options = '')
{
$mixx_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $mixx_mposition_options;
}
function mixx_topbar($value, $key = '',$mixx_topbar_options = '')
{
$mixx_topbar_options .= '<option value="user_menu"' . (($value == "user_menu") ? ' selected="selected"' : '') . '>User menu</option>
									 <option value="site_description"' . (($value == "site_description") ? ' selected="selected"' : '') . '>Site description</option>
									 ';
	return $mixx_topbar_options;
}

function akir_menu_position($value, $key = '',$akir_mposition_options = '')
{
$akir_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $akir_mposition_options;
}

function merid_menu_position($value, $key = '',$merid_mposition_options = '')
{
$merid_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $merid_mposition_options;
}


function mynxx_menu_position($value, $key = '',$mynxx_mposition_options = '')
{
$mynxx_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $mynxx_mposition_options;
}

function ss_menu_position($value, $key = '',$ss_mposition_options = '')
{
$ss_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $ss_mposition_options;
}

function ref_menu_position($value, $key = '',$ref_mposition_options = '')
{
$ref_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $ref_mposition_options;
}

function aff_menu_position($value, $key = '',$aff_mposition_options = '')
{
$aff_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $aff_mposition_options;
}

function v3_menu_position($value, $key = '',$v3_mposition_options = '')
{
$v3_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $v3_mposition_options;
}

function vort_menu_position($value, $key = '',$vort_mposition_options = '')
{
$vort_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $vort_mposition_options;
}

function nex_menu_position($value, $key = '',$nex_mposition_options = '')
{
$nex_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									 <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
									 ';
	return $nex_mposition_options;
}

function nex_bottom($value, $key = '',$nex_bottom_options = '')
{
$nex_bottom_options .= '<option value="section"' . (($value == "section") ? ' selected="selected"' : '') . '>Bottom Section</option>
									 <option value="feature"' . (($value == "feature") ? ' selected="selected"' : '') . '>Bottom Feature</option>
									 <option value="footer"' . (($value == "footer") ? ' selected="selected"' : '') . '>Footer</option>
									 ';
	return $nex_bottom_options;
}

function akir_preset_style($value, $key = '',$akir_preset_style_options = '')
{
$akir_preset_style_options .= '<option value="right"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="style4"' . (($value == "style4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="style5"' . (($value == "style5") ? ' selected="selected"' : '') . '>Style5</option>
									 <option value="style6"' . (($value == "style6") ? ' selected="selected"' : '') . '>Style6</option>
									 <option value="style7"' . (($value == "style7") ? ' selected="selected"' : '') . '>Style7</option>
									 <option value="style8"' . (($value == "style8") ? ' selected="selected"' : '') . '>Style8</option>
									 <option value="style9"' . (($value == "style9") ? ' selected="selected"' : '') . '>Style9</option>
									 <option value="style10"' . (($value == "style10") ? ' selected="selected"' : '') . '>Style10</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $akir_preset_style_options;
}


function ss_preset_style($value, $key = '',$ss_preset_style_options = '')
{
$ss_preset_style_options .= '<option value="style1"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="style4"' . (($value == "style4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="style5"' . (($value == "style5") ? ' selected="selected"' : '') . '>Style5</option>
									 <option value="style6"' . (($value == "style6") ? ' selected="selected"' : '') . '>Style6</option>
									 <option value="style7"' . (($value == "style7") ? ' selected="selected"' : '') . '>Style7</option>
									 <option value="style8"' . (($value == "style8") ? ' selected="selected"' : '') . '>Style8</option>
									 <option value="style9"' . (($value == "style9") ? ' selected="selected"' : '') . '>Style9</option>
									 <option value="style10"' . (($value == "style10") ? ' selected="selected"' : '') . '>Style10</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $ss_preset_style_options;
}


function ss_body_style($value, $key = '',$ss_body_style_options = '')
{
$ss_body_style_options .= '<option value="white"' . (($value == "white") ? ' selected="selected"' : '') . '>White</option>
									 <option value="beige"' . (($value == "beige") ? ' selected="selected"' : '') . '>Beige</option>
									 ';
	return $ss_body_style_options;
}

function ss_header_style($value, $key = '',$ss_header_style_options = '')
{
$ss_header_style_options .= '<option value="blue"' . (($value == "blue") ? ' selected="selected"' : '') . '>Blue</option>
									 <option value="red"' . (($value == "red") ? ' selected="selected"' : '') . '>Red</option>
									 <option value="black"' . (($value == "black") ? ' selected="selected"' : '') . '>Black</option>
									 <option value="grey"' . (($value == "grey") ? ' selected="selected"' : '') . '>Grey</option>
									 <option value="orange"' . (($value == "orange") ? ' selected="selected"' : '') . '>Orange</option>
									 <option value="green"' . (($value == "green") ? ' selected="selected"' : '') . '>Green</option>
									 ';
	return $ss_header_style_options;
}

function ss_bg_style($value, $key = '',$ss_bg_style_options = '')
{
$ss_bg_style_options .= '<option value="bg-white"' . (($value == "bg-white") ? ' selected="selected"' : '') . '>White</option>
									 <option value="bg-blue"' . (($value == "bg-blue") ? ' selected="selected"' : '') . '>Blue</option>
									 <option value="bg-red"' . (($value == "bg-red") ? ' selected="selected"' : '') . '>Red</option>
									 <option value="bg-black"' . (($value == "bg-black") ? ' selected="selected"' : '') . '>Black</option>
									 <option value="bg-grey"' . (($value == "bg-grey") ? ' selected="selected"' : '') . '>Grey</option>			
									 ';
	return $ss_bg_style_options;
}

function ss_footer_style($value, $key = '',$ss_footer_style_options = '')
{
$ss_footer_style_options .= '<option value="blue"' . (($value == "blue") ? ' selected="selected"' : '') . '>Blue</option>
									 <option value="red"' . (($value == "red") ? ' selected="selected"' : '') . '>Red</option>
									 <option value="black"' . (($value == "black") ? ' selected="selected"' : '') . '>Black</option>
									 <option value="grey"' . (($value == "grey") ? ' selected="selected"' : '') . '>Grey</option>
									  <option value="orange"' . (($value == "orange") ? ' selected="selected"' : '') . '>Orange</option>
									  <option value="green"' . (($value == "green") ? ' selected="selected"' : '') . '>Green</option>	
									 ';
	return $ss_footer_style_options;
}

function ss_font($value, $key = '', $ssfont_options='')
{
$ssfont_options .= ' <option value="ff-solarsentinel"' . (($value == "ff-solarsentinel") ? ' selected="selected"' : '') . '>SolarSentinel</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $ssfont_options;
}

function ref_font($value, $key = '', $reffont_options='')
{
$reffont_options .= ' <option value="ff-refraction"' . (($value == "ff-refraction") ? ' selected="selected"' : '') . '>Refraction</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $reffont_options;
}

function aff_font($value, $key = '', $afffont_options='')
{
$afffont_options .= ' <option value="ff-affinity"' . (($value == "ff-affinity") ? ' selected="selected"' : '') . '>Affinity</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $afffont_options;
}

function merid_preset_style($value, $key = '',$merid_preset_style_options = '')
{
$merid_preset_style_options .= '<option value="style1"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="style4"' . (($value == "style4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $merid_preset_style_options;
}

function merid_body_style($value, $key = '',$merid_body_style_options = '')
{
$merid_body_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
									 <option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 <option value="beige"' . (($value == "beige") ? ' selected="selected"' : '') . '>Beige</option>
									 <option value="blue"' . (($value == "blue") ? ' selected="selected"' : '') . '>Blue</option>
									 ';
	return $merid_body_style_options;
}

function merid_header_style($value, $key = '',$merid_header_style_options = '')
{
$merid_header_style_options .= '<option value="header1"' . (($value == "header1") ? ' selected="selected"' : '') . '>HEADER1</option>
									 <option value="header2"' . (($value == "header2") ? ' selected="selected"' : '') . '>HEADER2</option>
									 <option value="none"' . (($value == "none") ? ' selected="selected"' : '') . '>None</option>
									 ';
	return $merid_header_style_options;
}

	
	
function mynxx_preset_style($value, $key = '',$mynxx_preset_style_options = '')
{
$mynxx_preset_style_options .= '<option value="dark-red"' . (($value == "dark-red") ? ' selected="selected"' : '') . '>Dark-Red</option>
									 <option value="dark-blue"' . (($value == "dark-blue") ? ' selected="selected"' : '') . '>Dark-Blue</option>
									 <option value="dark-green"' . (($value == "dark-green") ? ' selected="selected"' : '') . '>Dark-Green</option>
									 <option value="dark-orange"' . (($value == "dark-orange") ? ' selected="selected"' : '') . '>Dark-Orange</option>
									 <option value="light-red"' . (($value == "light-red") ? ' selected="selected"' : '') . '>Light-Red</option>
									 <option value="light-blue"' . (($value == "light-blue") ? ' selected="selected"' : '') . '>Light-Blue</option>
									 <option value="light-green"' . (($value == "light-green") ? ' selected="selected"' : '') . '>Light-Green</option>
									 <option value="light-orange"' . (($value == "light-orange") ? ' selected="selected"' : '') . '>Light-Orange</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $mynxx_preset_style_options;
}

function mynxx_body_style($value, $key = '',$mynxx_body_style_options = '')
{
$mynxx_body_style_options .= '<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 <option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
									 ';
	return $mynxx_body_style_options;
}

	
		
function tt_font($value, $key = '', $ttfont_options='')
{
$ttfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $ttfont_options;
}

function ttdark_font($value, $key = '', $ttdarkfont_options='')
{
$ttdarkfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 <option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 ';
	return $ttdarkfont_options;
}

function per_font($value, $key = '', $perfont_options='')
{
$perfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $perfont_options;
}

function met_font($value, $key = '', $metfont_options='')
{
$metfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $metfont_options;
}

function met2_font($value, $key = '', $met2font_options='')
{
$met2font_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $met2font_options;
}

function rep2_font($value, $key = '', $rep2font_options='')
{
$rep2font_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $rep2font_options;
}

function v4_font($value, $key = '', $v4font_options='')
{
$v4font_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $v4font_options;
}


function v3_font($value, $key = '', $v3font_options='')
{
$v3font_options .= '<option value="ff-default"' . (($value == "ff-default") ? ' selected="selected"' : '') . '>Default</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $v3font_options;
}

function vert_font($value, $key = '', $vertfont_options='')
{
$vertfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-vertigo"' . (($value == "ff-vertigo") ? ' selected="selected"' : '') . '>Vertigo</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									  <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 ';
	return $vertfont_options;
}

function mixx_font($value, $key = '', $mixxfont_options='')
{
$mixxfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-mixxmag"' . (($value == "ff-mixxmag") ? ' selected="selected"' : '') . '>Mixxmag</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $mixxfont_options;
}


function akir_font($value, $key = '', $akirfont_options='')
{
$akirfont_options .= '<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									<option value="ff-akiraka"' . (($value == "ff-akiraka") ? ' selected="selected"' : '') . '>Akiraka</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $akirfont_options;
}


function merid_font($value, $key = '', $meridfont_options='')
{
$meridfont_options .= '<option value="ff-meridian"' . (($value == "ff-meridian") ? ' selected="selected"' : '') . '>Meridian</option>
<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $meridfont_options;
}


function mynxx_font($value, $key = '', $mynxxfont_options='')
{
$mynxxfont_options .= '<option value="ff-mynxx"' . (($value == "ff-mynxx") ? ' selected="selected"' : '') . '>Mynxx</option>
<option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida Sans Unicode</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet MS</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>		
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino Linotype</option>
									 ';
	return $mynxxfont_options;
}


function nex_font($value, $key = '', $nexfont_options='')
{
$nexfont_options .= '<option value="ff-nexus"' . (($value == "ff-nexus") ? ' selected="selected"' : '') . '>Nexus</option>
<option value="ff-bebas"' . (($value == "ff-bebas") ? ' selected="selected"' : '') . '>Bebas</option>
									 <option value="ff-continuum"' . (($value == "ff-continuum") ? ' selected="selected"' : '') . '>Continuum</option>
									 <option value="ff-geneva"' . (($value == "ff-geneva") ? ' selected="selected"' : '') . '>Geneva</option>
									 <option value="ff-optima"' . (($value == "ff-optima") ? ' selected="selected"' : '') . '>Optima</option>
									 <option value="ff-helvetica"' . (($value == "ff-helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
									 <option value="ff-trebuchet"' . (($value == "ff-trebuchet") ? ' selected="selected"' : '') . '>Trebuchet</option>		
									 <option value="ff-lucida"' . (($value == "ff-lucida") ? ' selected="selected"' : '') . '>Lucida</option>
									 <option value="ff-georgia"' . (($value == "ff-georgia") ? ' selected="selected"' : '') . '>Georgia</option>
									 <option value="ff-palatino"' . (($value == "ff-palatino") ? ' selected="selected"' : '') . '>Palatino</option>
									 ';
	return $nexfont_options;
}


function avatar_position($value, $key = '', $avatar_position_options='')
{
$avatar_position_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
									<option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
									 ';
	return $avatar_position_options;
}

//  akiraka combo's
function akir_header_overlay_style($value, $key = '', $akir_header_overlay_style_options='')
{
$akir_header_overlay_style_options .= '<option value="h-light"' . (($value == "h-light") ? ' selected="selected"' : '') . '>Light Color Scheme</option>
									<option value="h-dark"' . (($value == "h-dark") ? ' selected="selected"' : '') . '>Dark Color Scheme</option>
									 ';
	return $akir_header_overlay_style_options;
}

function akir_showcase_overlay_style($value, $key = '', $akir_showcase_overlay_style_options='')
{
$akir_showcase_overlay_style_options .= '<option value="s-light"' . (($value == "s-light") ? ' selected="selected"' : '') . '>Light Color Scheme</option>
									<option value="s-dark"' . (($value == "s-dark") ? ' selected="selected"' : '') . '>Dark Color Scheme</option>
									 ';
	return $akir_showcase_overlay_style_options;
}


function akir_body_overlay_style($value, $key = '', $akir_body_overlay_style_options='')
{
$akir_body_overlay_style_options .= '<option value="b-light"' . (($value == "b-light") ? ' selected="selected"' : '') . '>Light Color Scheme</option>
									<option value="b-dark"' . (($value == "b-dark") ? ' selected="selected"' : '') . '>Dark Color Scheme</option>
									 ';
	return $akir_body_overlay_style_options;
}

function akir_botsection_overlay_style($value, $key = '', $akir_botsection_overlay_style_options='')
{
$akir_botsection_overlay_style_options .= '<option value="bt-light"' . (($value == "bt-light") ? ' selected="selected"' : '') . '>Light Color Scheme</option>
									<option value="bt-dark"' . (($value == "bt-dark") ? ' selected="selected"' : '') . '>Dark Color Scheme</option>
									 ';
	return $akir_botsection_overlay_style_options;
}

function akir_overlay_texture_style($value, $key = '', $akir_overlay_texture_style_options='')
{
$akir_overlay_texture_style_options .= '<option value="texture1"' . (($value == "texture1") ? ' selected="selected"' : '') . '>Japanese Textures</option>
									<option value="texture2"' . (($value == "texture2") ? ' selected="selected"' : '') . '>Grunge Textures</option>
									<option value="texture3"' . (($value == "texture3") ? ' selected="selected"' : '') . '>Abstract Textures</option>
									<option value="texture4"' . (($value == "texture4") ? ' selected="selected"' : '') . '>Rough Textures</option>
									<option value="notexture"' . (($value == "notexture") ? ' selected="selected"' : '') . '>No Texture</option>
									 ';
	return $akir_overlay_texture_style_options;
}

//  refraction combo's
function ref_preset_style($value, $key = '',$ref_preset_style_options = '')
{
$ref_preset_style_options .= '<option value="style1"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="style4"' . (($value == "style4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="style5"' . (($value == "style5") ? ' selected="selected"' : '') . '>Style5</option>
									 <option value="style6"' . (($value == "style6") ? ' selected="selected"' : '') . '>Style6</option>
									 <option value="style7"' . (($value == "style7") ? ' selected="selected"' : '') . '>Style7</option>
									 <option value="style8"' . (($value == "style8") ? ' selected="selected"' : '') . '>Style8</option>
									 <option value="style9"' . (($value == "style9") ? ' selected="selected"' : '') . '>Style9</option>
									 <option value="style10"' . (($value == "style10") ? ' selected="selected"' : '') . '>Style10</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $ref_preset_style_options;
}


function ref_overlay_style($value, $key = '', $ref_overlay_style_options='')
{
$ref_overlay_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
									<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 ';
	return $ref_overlay_style_options;
}
function ref_bg_style($value, $key = '', $ref_bg_style_options='')
{
$ref_bg_style_options .= '<option value="bgstyle1"' . (($value == "bgstyle1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="bgstyle2"' . (($value == "bgstyle2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="bgstyle3"' . (($value == "bgstyle3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="bgstyle4"' . (($value == "bgstyle4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="bgstyle5"' . (($value == "bgstyle5") ? ' selected="selected"' : '') . '>Style5</option>
									 <option value="bgstyle6"' . (($value == "bgstyle6") ? ' selected="selected"' : '') . '>Style6</option>
									 <option value="bgstyle7"' . (($value == "bgstyle7") ? ' selected="selected"' : '') . '>Style7</option>
									 <option value="bgstyle8"' . (($value == "bgstyle8") ? ' selected="selected"' : '') . '>Style8</option>
									 <option value="bgstyle9"' . (($value == "bgstyle9") ? ' selected="selected"' : '') . '>Style9</option>
									 <option value="bgstyle10"' . (($value == "bgstyle10") ? ' selected="selected"' : '') . '>Style10</option>
									 ';
	return $ref_bg_style_options;
}
function ref_bg_fixed($value, $key = '', $ref_bg_fixed_options='')
{
$ref_bg_fixed_options .= '<option value="fixed"' . (($value == "fixed") ? ' selected="selected"' : '') . '>Fixed</option>
									<option value="scroll"' . (($value == "scroll") ? ' selected="selected"' : '') . '>Not fixed</option>
									 ';
	return $ref_bg_fixed_options;
}



//  nexus combo's

function nex_preset_style($value, $key = '',$nex_preset_style_options = '')
{
$nex_preset_style_options .= '<option value="style1"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
									 <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
									 <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
									 <option value="style4"' . (($value == "style4") ? ' selected="selected"' : '') . '>Style4</option>
									 <option value="style5"' . (($value == "style5") ? ' selected="selected"' : '') . '>Style5</option>
									 <option value="style6"' . (($value == "style6") ? ' selected="selected"' : '') . '>Style6</option>
									 <option value="style7"' . (($value == "style7") ? ' selected="selected"' : '') . '>Style7</option>
									 <option value="style8"' . (($value == "style8") ? ' selected="selected"' : '') . '>Style8</option>
									 <option value="style9"' . (($value == "style9") ? ' selected="selected"' : '') . '>Style9</option>
									 <option value="style10"' . (($value == "style10") ? ' selected="selected"' : '') . '>Style10</option>
									 <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
									 ';
	return $nex_preset_style_options;
}

function nex_header_style($value, $key = '',$nex_header_style_options = '')
{
$nex_header_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
				<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 ';
	return $nex_header_style_options;
}

function nex_body_style($value, $key = '',$nex_body_style_options = '')
{
$nex_body_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
				<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 ';
	return $nex_body_style_options;
}

function nex_showcase_style($value, $key = '',$nex_showcase_style_options = '')
{
$nex_showcase_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
				<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 ';
	return $nex_showcase_style_options;
}



function nex_primary_style($value, $key = '',$nex_primary_style_options = '')
{
$nex_primary_style_options .= '<option value="yellow"' . (($value == "yellow") ? ' selected="selected"' : '') . '>Yellow Color Style</option>
				 <option value="darkyellow"' . (($value == "darkyellow") ? ' selected="selected"' : '') . '>Dark Yello Color Style</option>
                                 <option value="lightblue"' . (($value == "lightblue") ? ' selected="selected"' : '') . '>Light Blue Color Style</option>
                                 <option value="blue"' . (($value == "blue") ? ' selected="blue"' : '') . '>Blue Color Style</option>
                                 <option value="darkblue"' . (($value == "darkblue") ? ' selected="selected"' : '') . '>Dark Blue Color Style</option>
                                 <option value="orange"' . (($value == "orange") ? ' selected="selected"' : '') . '>Orange Color Style</option>
                                 <option value="green"' . (($value == "green") ? ' selected="selected"' : '') . '>Green Color Style</option>
                                 <option value="grey"' . (($value == "grey") ? ' selected="selected"' : '') . '>Grey Color Style</option>
                                 <option value="brown"' . (($value == "brown") ? ' selected="selected"' : '') . '>Brown Color Style</option>
                                 <option value="red"' . (($value == "red") ? ' selected="selected"' : '') . '>Red Color Style</option>
									 ';
	return $nex_primary_style_options;
}


function nex_footer_style($value, $key = '',$nex_footer_style_options = '')
{
$nex_footer_style_options .= '<option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
				<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
									 ';
	return $nex_footer_style_options;
}

//  configuration fields
	
		if ($mode == 'populus')
		{		
$display_vars = array(
		'vars'	=> array(

	'legend1'				=> 'L_POPULUS_SETTINGS',
	'default_pop_scheme'			=> array('lang' => 'DEFAULT_POP_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
     'show_pop_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);

			
		}
		
// MediaMogul configuration fields	
	
	if ($mode == 'mediamogul')
		{		
$display_vars = array(
		'vars'	=> array(

	'legend1'				=> 'L_SETTINGS',
	'allow_jcolumn'			=> array('lang' => 'ALLOW_JCOLUMN',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'default_mm_scheme'			=> array('lang' => 'DEFAULT_MM_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_mm_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);

			
		}
// HiveMind configuration fields	
		if ($mode == 'hivemind')
		{
$display_vars = array(
		'vars'	=> array(

	'legend2'				=> 'L_HIVE_MIND_SETTINGS',
	'show_jhmuser'			=> array('lang' => 'SHOW_HMUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'hm_menu_position'			=> array('lang' => 'HM_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'hm_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'select_jhmmenu'			=> array('lang' => 'DEFAULT_JHMMENU',		'validate' => 'string',	'type' => 'select', 'function' => 'jhmmenu_select', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'select_jhmfont'			=> array('lang' => 'DEFAULT_JHMFONT',		'validate' => 'string',	'type' => 'select', 'function' => 'jhmfont_select', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_hm_pathway'			=> array('lang' => 'SHOW_HM_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'hm_width'			=> array('lang' => 'HM_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'hm_sidecol_width'			=> array('lang' => 'HM_SIDECOL_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'enable_hm_fontspans'			=> array('lang' => 'ENABLE_HM_FONTSPANS',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
				)
				);

			
		}
// Dimensions configuration fields	
	
			if ($mode == 'dimensions')
		{
$display_vars = array(
		'vars'	=> array(

	'legend3'				=> 'L_DIMMENSIONS_SETTINGS',
	'allow_jdimcolumn'			=> array('lang' => 'ALLOW_JDIMCOLUMN',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		'show_jdimmain'			=> array('lang' => 'SHOW_JDIMMAIN',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
			'show_jdimother'			=> array('lang' => 'SHOW_JDIMOTHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		'default_dim_scheme'			=> array('lang' => 'DEFAULT_DIM_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'show_dim_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		'legend4'				=> 'L_DIMMENSIONS_PROMO',
		
		'allow_jdimpromo'			=> array('lang' => 'ALLOW_JDIMPROMO',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		'dim_promo_link'			=> array('lang' => 'DIM_PROMO_LINK',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'dim_promo_src'			=> array('lang' => 'DIM_PROMO_SRC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'dim_promo_width'			=> array('lang' => 'DIM_PROMO_WIDTH',	'validate' => 'int',	'type' => 'text:5:255', 'explain' => false),
		'dim_promo_height'			=> array('lang' => 'DIM_PROMO_HEIGHT',	'validate' => 'int',	'type' => 'text:5:255', 'explain' => false),
				)
				);

			
		}
// Synapse configuration fields		
		
		if ($mode == 'synapse')
		{
$display_vars = array(
		'vars'	=> array(

	'legend4'				=> 'L_SYNAPSE_SETTINGS',
	'show_jsynuser'			=> array('lang' => 'SHOW_SYNUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'synapse_fontface'			=> array('lang' => 'SYNAPSE_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'synapse_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'synapse_header'			=> array('lang' => 'SYNAPSE_HEADER',		'validate' => 'string',	'type' => 'select', 'function' => 'synapse_texture', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_syn_scheme'			=> array('lang' => 'DEFAULT_SYN_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_syn_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);

			
		}
	
// Chromatophore configuration fields		
				if ($mode == 'chromatophore')
		{
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_CHROMATOPHORE_SETTINGS',
	'show_jchromuser'			=> array('lang' => 'SHOW_CHROMUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'chromatophore_fontface'			=> array('lang' => 'CHROMATOPHORE_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'chromatophore_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
'chromatophore_menu_position'			=> array('lang' => 'CHROMATOPHORE_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'chromatophore_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
'default_color_scheme'			=> array('lang' => 'DEFAULT_COLOR_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
'show_colorschooser'			=> array('lang' => 'SHOW_COLOR_CHOOSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);

			
		}
		
// Catalyst configuration fields	
		if ($mode == 'catalyst')
		{
$display_vars = array(
		'vars'	=> array(

	'legend6'				=> 'L_CATALYST_SETTINGS',
	'show_catuser'			=> array('lang' => 'SHOW_CATUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'catalyst_fontface'			=> array('lang' => 'CATALYST_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'catalyst_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'catalyst_menu_position'			=> array('lang' => 'CATALYST_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'catalyst_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
		'catalyst_header'			=> array('lang' => 'CATALYST_HEADER',		'validate' => 'string',	'type' => 'select', 'function' => 'catalyst_texture', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
			'default_cat_scheme'			=> array('lang' => 'DEFAULT_CAT_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
			'show_cat_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		
		
		
		'legend7'				=> 'L_FEATURED_MODULE_SETTINGS',
		
		'catalyst_modules_count'			=> array('lang' => 'CATALYST_MODULES_COUNT',		'validate' => 'string',	'type' => 'select', 'function' => 'catalyst_modules_count', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
		'catalyst_advert1'			=> array('lang' => 'CATALYST_ADVERT1',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'catalyst_advert1_desc'			=> array('lang' => 'CATALYST_ADVERT1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		
		'catalyst_advert2'			=> array('lang' => 'CATALYST_ADVERT2',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'catalyst_advert2_desc'			=> array('lang' => 'CATALYST_ADVERT2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
			
		'catalyst_advert3'			=> array('lang' => 'CATALYST_ADVERT3',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'catalyst_advert3_desc'			=> array('lang' => 'CATALYST_ADVERT3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
				
		'catalyst_advert4'			=> array('lang' => 'CATALYST_ADVERT4',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		'catalyst_advert4_desc'			=> array('lang' => 'CATALYST_ADVERT4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
		
				)
				);

			
		}
// Hyperion configuration fields	
	if ($mode == 'hyperion')
		{
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_HYPERION_SETTINGS',
	'show_jhypuser'			=> array('lang' => 'SHOW_HYPUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'hyperion_fontface'			=> array('lang' => 'HYPERION_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'hyperion_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'hyperion_menu_position'			=> array('lang' => 'HYPERION_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'hyperion_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_hyp_scheme'			=> array('lang' => 'DEFAULT_HYP_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_hyp_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),

				)
				);

			
		}
// TerranTribune configuration fields		
		
		if ($mode == 'terrant')
		{
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_TT_SETTINGS',
	'show_jttuser'			=> array('lang' => 'SHOW_TTUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'tt_fontface'			=> array('lang' => 'TT_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'tt_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'tt_menu_position'			=> array('lang' => 'TT_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'tt_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_tt_scheme'			=> array('lang' => 'DEFAULT_TT_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_tt_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);
				
						
		}


// TerranTribune Dark configuration fields		
		
		if ($mode == 'tt_dark')
		{
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_TTDARK_SETTDARKINGS',
	'show_jttdarkuser'			=> array('lang' => 'SHOW_TTDARKUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'ttdark_fontface'			=> array('lang' => 'TTDARK_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'ttdark_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ttdark_menu_position'			=> array('lang' => 'TTDARK_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'ttdark_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_ttdark_scheme'			=> array('lang' => 'DEFAULT_TTDARK_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_ttdark_font'			=> array('lang' => 'SHOW_MIXX_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_ttdark_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	
	'legend6'				=> 'L_PER_BOTTOM_MENU',
	'ttdark_link1_desc'			=> array('lang' => 'PER_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ttdark_link1_href'			=> array('lang' => 'PER_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'ttdark_link2_desc'			=> array('lang' => 'PER_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ttdark_link2_href'			=> array('lang' => 'PER_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'ttdark_link3_desc'			=> array('lang' => 'PER_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ttdark_link3_href'			=> array('lang' => 'PER_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'ttdark_link4_desc'			=> array('lang' => 'PER_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ttdark_link4_href'			=> array('lang' => 'PER_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'ttdark_link5_desc'			=> array('lang' => 'PER_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ttdark_link5_href'			=> array('lang' => 'PER_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
				)
				);
				
						
		}
		
	
// Perihelion configuration fields	
		if ($mode == 'perihelion')
		{
			
			
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_PER_SETTINGS',
	'show_jperuser'			=> array('lang' => 'SHOW_PERUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'per_fontface'			=> array('lang' => 'PER_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'per_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'per_menu_position'			=> array('lang' => 'PER_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'per_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'per_width'			=> array('lang' => 'PER_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_sidecol_width'			=> array('lang' => 'PER_SIDECOL_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'default_per_scheme'			=> array('lang' => 'DEFAULT_PER_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_per_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	
		'legend6'				=> 'L_PER_BOTTOM_MENU',
	'per_link1_desc'			=> array('lang' => 'PER_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_link1_href'			=> array('lang' => 'PER_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'per_link2_desc'			=> array('lang' => 'PER_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_link2_href'			=> array('lang' => 'PER_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'per_link3_desc'			=> array('lang' => 'PER_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_link3_href'			=> array('lang' => 'PER_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'per_link4_desc'			=> array('lang' => 'PER_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_link4_href'			=> array('lang' => 'PER_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'per_link5_desc'			=> array('lang' => 'PER_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'per_link5_href'			=> array('lang' => 'PER_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
				)
				);			

			
		}
		
// Metamorph configuration fields		
		if ($mode == 'metamorph')
		{
			
			
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_MET_SETTINGS',
	'show_jmetuser'			=> array('lang' => 'SHOW_METUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'met_fontface'			=> array('lang' => 'MET_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'met_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'met_menu_position'			=> array('lang' => 'MET_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'met_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_met_scheme'			=> array('lang' => 'DEFAULT_MET_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_met_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	'legend6'				=> 'L_MET_BOTTOM_MENU',
	'met_link1_desc'			=> array('lang' => 'MET_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met_link1_href'			=> array('lang' => 'MET_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met_link2_desc'			=> array('lang' => 'MET_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met_link2_href'			=> array('lang' => 'MET_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met_link3_desc'			=> array('lang' => 'MET_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met_link3_href'			=> array('lang' => 'MET_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met_link4_desc'			=> array('lang' => 'MET_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met_link4_href'			=> array('lang' => 'MET_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met_link5_desc'			=> array('lang' => 'MET_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met_link5_href'			=> array('lang' => 'MET_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
				)
				);			

			
		}
// Replicant2 configuration fields

if ($mode == 'replicant2')
		{		
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_REP2_SETTINGS',
	'show_jrep2user'			=> array('lang' => 'SHOW_REP2USER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'rep2_fontface'			=> array('lang' => 'REP2_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'rep2_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'rep2_menu_position'			=> array('lang' => 'REP2_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'rep2_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'rep2_width'			=> array('lang' => 'REP2_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_sidecol_width'			=> array('lang' => 'REP2_SIDECOL_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'default_rep2_scheme'			=> array('lang' => 'DEFAULT_REP2_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_bodystyle'			=> array('lang' => 'REP2_BODYSTYLE',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_rep2_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	'legend6'				=> 'L_REP2_BOTTOM_MENU',
	'rep2_link1_desc'			=> array('lang' => 'REP2_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_link1_href'			=> array('lang' => 'REP2_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'rep2_link2_desc'			=> array('lang' => 'REP2_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_link2_href'			=> array('lang' => 'REP2_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'rep2_link3_desc'			=> array('lang' => 'REP2_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_link3_href'			=> array('lang' => 'REP2_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'rep2_link4_desc'			=> array('lang' => 'REP2_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_link4_href'			=> array('lang' => 'REP2_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'rep2_link5_desc'			=> array('lang' => 'REP2_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'rep2_link5_href'			=> array('lang' => 'REP2_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
				)
				);			

			
		}

// Metamorph2 configuration fields	
				if ($mode == 'metamorph2')
		{
			
			
$display_vars = array(
		'vars'	=> array(

	'legend5'				=> 'L_MET2_SETTINGS',
	'show_jmet2user'			=> array('lang' => 'SHOW_MET2USER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'met2_fontface'			=> array('lang' => 'MET2_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'met2_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'met2_menu_position'			=> array('lang' => 'MET2_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'met2_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_met2_scheme'			=> array('lang' => 'DEFAULT_MET2_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_met2_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	'legend6'				=> 'L_MET2_BOTTOM_MENU',
	'met2_link1_desc'			=> array('lang' => 'MET2_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met2_link1_href'			=> array('lang' => 'MET2_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'met2_link2_desc'			=> array('lang' => 'MET2_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met2_link2_href'			=> array('lang' => 'MET2_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met2_link3_desc'			=> array('lang' => 'MET2_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met2_link3_href'			=> array('lang' => 'MET2_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
	'met2_link4_desc'			=> array('lang' => 'MET2_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met2_link4_href'			=> array('lang' => 'MET2_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	
	'met2_link5_desc'			=> array('lang' => 'MET2_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'met2_link5_href'			=> array('lang' => 'MET2_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
				)
				);			

			
		}
		
// Versatility4 configuration fields
if ($mode == 'versatility4')
		{
			
			
$display_vars = array(
	'vars'	=> array(

	'legend5'				=> 'L_V4_SETTINGS',
	'show_jv4user'			=> array('lang' => 'SHOW_V4USER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_v4sub'			=> array('lang' => 'SHOW_V4SUB',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_v4main'			=> array('lang' => 'SHOW_V4MAIN',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'v4_fontface'			=> array('lang' => 'V4_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'v4_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'v4_menu_position'			=> array('lang' => 'V4_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'v4_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_v4_scheme'			=> array('lang' => 'DEFAULT_V4_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_menu_style'			=> array('lang' => 'V4_MENU_STYLE',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_icon_style'			=> array('lang' => 'V4_ICON_STYLE',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_v4_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	'legend6'				=> 'L_V4_BOTTOM_MENU',
	'v4_link1_desc'			=> array('lang' => 'V4_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_link1_href'			=> array('lang' => 'V4_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	'v4_link2_desc'			=> array('lang' => 'V4_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_link2_href'			=> array('lang' => 'V4_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	'v4_link3_desc'			=> array('lang' => 'V4_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_link3_href'			=> array('lang' => 'V4_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	'v4_link4_desc'			=> array('lang' => 'V4_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_link4_href'			=> array('lang' => 'V4_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	'v4_link5_desc'			=> array('lang' => 'V4_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'v4_link5_href'			=> array('lang' => 'V4_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
	
				)
				);			

			
		}

// Vertigo configuration fields
if ($mode == 'vertigo')
		{		
$display_vars = array(
	'vars'	=> array(
	'legend5'				=> 'L_VERT_SETTINGS',
	'show_jvertuser'			=> array('lang' => 'SHOW_VERTUSER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'vert_fontface'			=> array('lang' => 'VERT_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'vert_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'vert_menu_position'			=> array('lang' => 'VERT_MENUPOSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'vert_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_vert_scheme'			=> array('lang' => 'DEFAULT_VERT_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_vert_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_showcase'			=> array('lang' => 'SHOW_VERT_SHOWCASE',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_topmod'			=> array('lang' => 'SHOW_VERT_TOPMOD',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_topmod2'			=> array('lang' => 'SHOW_VERT_TOPMOD2',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'enable_vert_parallax'			=> array('lang' => 'ENABLE_VERT_PARALLAX',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'enable_vert_fontspans'			=> array('lang' => 'ENABLE_VERT_FONTSPANS',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_pathway'			=> array('lang' => 'SHOW_VERT_PATHWAY',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_logo'			=> array('lang' => 'SHOW_VERT_LOGO',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vert_validation'			=> array('lang' => 'SHOW_VERT_VALIDATION',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);				
		}
// Mixxmag configuration fields
if ($mode == 'mixxmag')
		{	
$display_vars = array(
	'vars'	=> array(
	'legend5'				=> 'L_MIXX_SETTINGS',
	'show_jmixxuser'			=> array('lang' => 'SHOW_MIXXUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'mixx_fontface'			=> array('lang' => 'MIXX_FONTFACE','validate' => 'string',	'type' => 'select', 'function' => 'mixx_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'mixx_menu_position'			=> array('lang' => 'MIXX_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'mixx_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_mixx_scheme'			=> array('lang' => 'DEFAULT_MIXX_SCHEME','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_mixx_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mixx_pathway'			=> array('lang' => 'SHOW_MIXX_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mixx_logo'			=> array('lang' => 'SHOW_MIXX_LOGO','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'mixx_width'			=> array('lang' => 'MIXX_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_sidecol_width'			=> array('lang' => 'MIXX_SIDECOL_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_main_width'			=> array('lang' => 'MIXX_MAIN_WIDTH','validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_mixx_date'			=> array('lang' => 'SHOW_MIXX_DATE','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mixx_copyright'			=> array('lang' => 'SHOW_MIXX_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mixx_font'			=> array('lang' => 'SHOW_MIXX_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mixx_navbar'			=> array('lang' => 'SHOW_MIXX_NAVBAR','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'mixx_topbar'			=> array('lang' => 'MIXX_TOPBAR',	'validate' => 'string',	'type' => 'select', 'function' => 'mixx_topbar', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
// Bottom menu
	'legend6'				=> 'L_MIXX_BOTTOM_MENU',
	'mixx_link1_desc'			=> array('lang' => 'MIXX_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link1_href'			=> array('lang' => 'MIXX_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link2_desc'			=> array('lang' => 'MIXX_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link2_href'			=> array('lang' => 'MIXX_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link3_desc'			=> array('lang' => 'MIXX_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link3_href'			=> array('lang' => 'MIXX_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link4_desc'			=> array('lang' => 'MIXX_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link4_href'			=> array('lang' => 'MIXX_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link5_desc'			=> array('lang' => 'MIXX_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mixx_link5_href'			=> array('lang' => 'MIXX_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
				)
				);				
		}
		
		// Akiraka configuration fields
if ($mode == 'akiraka')
		{
$display_vars = array(
	'vars'	=> array(
	'legend1'				=> 'L_AKIR_ROK_COLOR_CHOOSER',	
	'akir_preset_style'			=> array('lang' => 'AKIR_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'akir_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),	
	'akir_header_color'			=> array('lang' => 'AKIR_HEADER_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_logo_text'			=> array('lang' => 'AKIR_LOGO_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_header_text'			=> array('lang' => 'AKIR_HEADER_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_header_link'			=> array('lang' => 'AKIR_HEADER_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_header_overlay_style'			=> array('lang' => 'AKIR_HEADER_OVERLAY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'akir_header_overlay_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),	
	
	
	'akir_body_color'			=> array('lang' => 'AKIR_BODY_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_body_highlight'		=> array('lang' => 'AKIR_BODY_HIGHLIGHT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_body_text'			=> array('lang' => 'AKIR_BODY_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_body_link'			=> array('lang' => 'AKIR_BODY_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_body_overlay_style'			=> array('lang' => 'AKIR_BODY_OVERLAY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'akir_body_overlay_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),	
	
	'akir_botbar_color'			=> array('lang' => 'AKIR_BOTBAR_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_botbar_text'			=> array('lang' => 'AKIR_BOTBAR_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_botbar_link'			=> array('lang' => 'AKIR_BOTBAR_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	
	'akir_botsection_color'		=> array('lang' => 'AKIR_BOTSECTION_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_botsection_text'		=> array('lang' => 'AKIR_BOTSECTION_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_botsection_link'		=> array('lang' => 'AKIR_BOTSECTION_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_botsection_overlay_style'			=> array('lang' => 'AKIR_BOTSECTION_OVERLAY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'akir_botsection_overlay_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	
	'akir_footer_color'			=> array('lang' => 'AKIR_FOOTER_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_footer_text'			=> array('lang' => 'AKIR_FOOTER_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_footer_link'			=> array('lang' => 'AKIR_FOOTER_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'akir_overlay_texture_style'			=> array('lang' => 'AKIR_OVERLAY_TEXTURE_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'akir_overlay_texture_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
		
	'legend2'				=> 'L_AKIR_SETTINGS',
	'sitename'				=> array('lang' => 'SITE_NAME',				'validate' => 'string',	'type' => 'text:40:255', 'explain' => false),
	'site_desc'				=> array('lang' => 'SITE_DESC',				'validate' => 'string',	'type' => 'text:40:255', 'explain' => false),
	'show_jakiruser'			=> array('lang' => 'SHOW_AKIRUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'akir_fontface'			=> array('lang' => 'AKIR_FONTFACE','validate' => 'string',	'type' => 'select', 'function' => 'akir_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'akir_menu_position'			=> array('lang' => 'AKIR_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'akir_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_akir_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_pathway'			=> array('lang' => 'SHOW_AKIR_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_logo'			=> array('lang' => 'SHOW_AKIR_LOGO','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'akir_width'			=> array('lang' => 'AKIR_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'akir_sidecol_width'			=> array('lang' => 'AKIR_SIDECOL_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'akir_main_width'			=> array('lang' => 'AKIR_MAIN_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'akir_fixed_header'			=> array('lang' => 'AKIR_FIXED_HEADER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'akir_fixed_footer'			=> array('lang' => 'AKIR_FIXED_FOOTER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_copyright'			=> array('lang' => 'SHOW_AKIR_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_font'			=> array('lang' => 'SHOW_AKIR_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_bottom_main_modules'		=> array('lang' => 'SHOW_AKIR_BOTTOM_MAIN_MODULES','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_akir_bottom_section'		=> array('lang' => 'SHOW_AKIR_BOTTOM_SECTION','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
		
// Bottom menu
	'legend4'				=> 'L_AKIR_BOTTOM_MENU',
	'akir_link1_desc'			=> array('lang' => 'AKIR_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link1_href'			=> array('lang' => 'AKIR_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link2_desc'			=> array('lang' => 'AKIR_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link2_href'			=> array('lang' => 'AKIR_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link3_desc'			=> array('lang' => 'AKIR_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link3_href'			=> array('lang' => 'AKIR_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link4_desc'			=> array('lang' => 'AKIR_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link4_href'			=> array('lang' => 'AKIR_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link5_desc'			=> array('lang' => 'AKIR_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'akir_link5_href'			=> array('lang' => 'AKIR_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
				)
				);				
		}
		
		
// Meridian configuration fields
if ($mode == 'meridian')
		{
$display_vars = array(
	'vars'	=> array(
	'legend1'				=> 'L_MERID_ROK_COLOR_CHOOSER',	
	'merid_preset_style'			=> array('lang' => 'MERID_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'merid_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'merid_body_style'			=> array('lang' => 'MERID_BODY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'merid_body_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'merid_header_style'			=> array('lang' => 'MERID_HEADER_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'merid_header_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'merid_titles_color'			=> array('lang' => 'MERID_TITLES_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'merid_body_color'			=> array('lang' => 'MERID_BODY_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'merid_link_color'			=> array('lang' => 'MERID_LINK_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'legend2'				=> 'L_MERID_SETTINGS',
	'sitename'				=> array('lang' => 'SITE_NAME',				'validate' => 'string',	'type' => 'text:40:255', 'explain' => false),
	'site_desc'				=> array('lang' => 'SITE_DESC',				'validate' => 'string',	'type' => 'text:40:255', 'explain' => false),
	'show_jmeriduser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'merid_fontface'			=> array('lang' => 'MERID_FONTFACE','validate' => 'string',	'type' => 'select', 'function' => 'merid_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'merid_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'merid_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_merid_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_merid_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'merid_width'			=> array('lang' => 'MERID_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'merid_sidecol_width'			=> array('lang' => 'MERID_SIDECOL_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'merid_main_width'			=> array('lang' => 'MERID_MAIN_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'show_merid_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_merid_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);				
		}
		
// Mynxx configuration fields
if ($mode == 'mynxx')
		{
$display_vars = array(
	'vars'	=> array(
		
	'legend1'				=> 'L_MERID_ROK_COLOR_CHOOSER',	
	'mynxx_preset_style'			=> array('lang' => 'MERID_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'mynxx_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'mynxx_body_style'			=> array('lang' => 'MERID_BODY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'mynxx_body_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'mynxx_primary_color'			=> array('lang' => 'MYNXX_PRIMARY_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),	
		
	'legend2'				=> 'L_MYNXX_SETTINGS',
	'sitename'				=> array('lang' => 'SITE_NAME',				'validate' => 'string',	'type' => 'text:40:255', 'explain' => false),
	'show_jmynxxuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'mynxx_fontface'			=> array('lang' => 'MERID_FONTFACE','validate' => 'string',	'type' => 'select', 'function' => 'mynxx_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'mynxx_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'mynxx_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_mynxx_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mynxx_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'mynxx_width'			=> array('lang' => 'MERID_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_sidecol_width'			=> array('lang' => 'MERID_SIDECOL_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'show_mynxx_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mynxx_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_mynxx_fontfamily'			=> array('lang' => 'SHOW_MYNXX_FONTFAMILY','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	
	// Bottom menu
	'legend4'				=> 'L_AKIR_BOTTOM_MENU',
	'mynxx_link1_desc'			=> array('lang' => 'AKIR_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link1_href'			=> array('lang' => 'AKIR_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link2_desc'			=> array('lang' => 'AKIR_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link2_href'			=> array('lang' => 'AKIR_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link3_desc'			=> array('lang' => 'AKIR_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link3_href'			=> array('lang' => 'AKIR_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link4_desc'			=> array('lang' => 'AKIR_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link4_href'			=> array('lang' => 'AKIR_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link5_desc'			=> array('lang' => 'AKIR_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'mynxx_link5_href'			=> array('lang' => 'AKIR_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
				)
				);				
		}
	

// SolarSentinel configuration fields
if ($mode == 'solarsentinel')
		{
$display_vars = array(
	'vars'	=> array(
		
	'legend1'				=> 'L_MERID_ROK_COLOR_CHOOSER',	
	'ss_preset_style'			=> array('lang' => 'MERID_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ss_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ss_header_style'			=> array('lang' => 'SS_HEADER_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ss_header_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ss_body_style'			=> array('lang' => 'MERID_BODY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ss_body_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ss_bg_style'			=> array('lang' => 'SS_BG_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ss_bg_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ss_footer_style'			=> array('lang' => 'SS_FOOTER_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ss_footer_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ss_primary_color'			=> array('lang' => 'MYNXX_PRIMARY_COLOR', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),	
		
	'legend2'			=> 'L_SS_SETTINGS',
	'show_jssuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'ss_fontface'			=> array('lang' => 'MERID_FONTFACE','validate' => 'string',	'type' => 'select', 'function' => 'ss_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ss_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'ss_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_ss_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_ss_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'ss_width'			=> array('lang' => 'MERID_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'show_ss_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_ss_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	
	// Bottom menu
	'legend4'				=> 'L_AKIR_BOTTOM_MENU',
	'ss_link1_desc'			=> array('lang' => 'AKIR_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link1_href'			=> array('lang' => 'AKIR_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link2_desc'			=> array('lang' => 'AKIR_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link2_href'			=> array('lang' => 'AKIR_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link3_desc'			=> array('lang' => 'AKIR_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link3_href'			=> array('lang' => 'AKIR_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link4_desc'			=> array('lang' => 'AKIR_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link4_href'			=> array('lang' => 'AKIR_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link5_desc'			=> array('lang' => 'AKIR_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'ss_link5_href'			=> array('lang' => 'AKIR_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	
				)
				);				
		}
	
	
	// Versatility3 configuration fields
if ($mode == 'versatility3')
		{
$display_vars = array(
	'vars'	=> array(	
	'legend2'			=> 'L_V3_SETTINGS',
	'show_jv3user'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'v3_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'v3_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_v3_scheme'			=> array('lang' => 'DEFAULT_V4_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_v3_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'v3_width'			=> array('lang' => 'MERID_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'show_v3_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);				
		}
	
	
		// Refraction3 configuration fields
if ($mode == 'refraction')
		{
$display_vars = array(
	'vars'	=> array(
		
	'legend1'				=> 'L_MERID_ROK_COLOR_CHOOSER',	
	'ref_preset_style'			=> array('lang' => 'REF_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ref_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'ref_overlay_style'			=> array('lang' => 'REF_OVERLAY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ref_overlay_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ref_bg_style'			=> array('lang' => 'REF_BG_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'ref_bg_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ref_bg_fixed'			=> array('lang' => 'REF_BG_FIXED','validate' => 'string',	'type' => 'select', 'function' => 'ref_bg_fixed', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ref_showcase_title'			=> array('lang' => 'REF_SHOWCASE_TITLE', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'ref_showcase_text'			=> array('lang' => 'REF_SHOWCASE_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'ref_showcase_link'			=> array('lang' => 'REF_SHOWCASE_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'ref_body_text'			=> array('lang' => 'REF_BODY_TEXT', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
	'ref_body_link'			=> array('lang' => 'REF_BODY_LINK', 'validate' => 'string','type' => 'text:7:255', 'explain' => false),
		
		
	'legend2'			=> 'L_REF_SETTINGS',
	'show_jrefuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'ref_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'ref_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'ref_fontface'			=> array('lang' => 'V4_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'ref_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'show_ref_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_ref_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'ref_width'			=> array('lang' => 'MERID_WIDTH','validate' => 'int',	'type' => 'text:20:255', 'explain' => true),
	'enable_ref_fontspans'			=> array('lang' => 'ENABLE_VERT_FONTSPANS',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'enable_ref_info'			=> array('lang' => 'ENABLE_REF_INFO',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_ref_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
				)
				);				
		}
		
	
		// Affinity configuration fields
if ($mode == 'affinity')
		{
$display_vars = array(
	'vars'	=> array(
			
	'legend2'			=> 'L_AFF_SETTINGS',
	'show_jaffuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'aff_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'aff_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'aff_fontface'			=> array('lang' => 'V4_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'aff_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_aff_scheme'			=> array('lang' => 'DEFAULT_V4_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_aff_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_aff_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'enable_aff_fontspans'			=> array('lang' => 'ENABLE_VERT_FONTSPANS',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_aff_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_aff_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	
	// Bottom menu
	'legend4'				=> 'L_AKIR_BOTTOM_MENU',
	'aff_link1_desc'			=> array('lang' => 'AKIR_BMENU_LINK1_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link1_href'			=> array('lang' => 'AKIR_BMENU_LINK1_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link2_desc'			=> array('lang' => 'AKIR_BMENU_LINK2_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link2_href'			=> array('lang' => 'AKIR_BMENU_LINK2_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link3_desc'			=> array('lang' => 'AKIR_BMENU_LINK3_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link3_href'			=> array('lang' => 'AKIR_BMENU_LINK3_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link4_desc'			=> array('lang' => 'AKIR_BMENU_LINK4_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link4_href'			=> array('lang' => 'AKIR_BMENU_LINK4_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link5_desc'			=> array('lang' => 'AKIR_BMENU_LINK5_DESC',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'aff_link5_href'			=> array('lang' => 'AKIR_BMENU_LINK5_HREF',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),			
				
				)
				);				
		}		
		
		// Vortex configuration fields
if ($mode == 'vortex')
		{
$display_vars = array(
	'vars'	=> array(
			
	'legend2'			=> 'L_VORT_SETTINGS',
	'show_jvortuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'vort_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'vort_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_vort_scheme'			=> array('lang' => 'DEFAULT_VORT_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_vort_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vort_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vort_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_vort_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),			
				)
				);				
		}

// Nexus configuration fields
if ($mode == 'nexus')
		{
$display_vars = array(
	'vars'	=> array(
	'legend1'			=> 'L_NEX_COLOR_SETTINGS',		
'nex_preset_style'			=> array('lang' => 'NEX_PRESET_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'nex_header_style'			=> array('lang' => 'NEX_HEADER_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_header_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'nex_body_style'			=> array('lang' => 'NEX_BODY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_body_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'nex_showcase_style'			=> array('lang' => 'NEX_SHOWCASE_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_showcase_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'nex_primary_style'			=> array('lang' => 'NEX_PRIMARY_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_primary_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	'nex_footer_style'			=> array('lang' => 'NEX_FOOTER_STYLE','validate' => 'string',	'type' => 'select', 'function' => 'nex_footer_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),
	
	'legend2'			=> 'L_NEX_SETTINGS',
	'show_jnexuser'			=> array('lang' => 'SHOW_MERIDUSER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'nex_menu_position'			=> array('lang' => 'MERID_MENUPOSITION',	'validate' => 'string',	'type' => 'select', 'function' => 'nex_menu_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'nex_bottom'			=> array('lang' => 'NEX_BOTTOM',		'validate' => 'string',	'type' => 'select', 'function' => 'nex_bottom', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'nex_fontface'			=> array('lang' => 'V4_FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'nex_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
	'default_nex_scheme'			=> array('lang' => 'DEFAULT_V4_SCHEME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'show_nex_colorswitcher'			=> array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_nex_pathway'			=> array('lang' => 'SHOW_MERID_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'enable_nex_fontspans'			=> array('lang' => 'ENABLE_VERT_FONTSPANS',				'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_nex_font'			=> array('lang' => 'SHOW_MERID_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_nex_copyright'			=> array('lang' => 'SHOW_MERID_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'show_nex_minifaq'			=> array('lang' => 'SHOW_NEX_MINIFAQ','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'nex_logo_link'			=> array('lang' => 'NEX_LOGO_LINK',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
				
				)
				);				
		}		



if ($mode == 'global_conf')
		{
			
			
$display_vars = array(
	'vars'	=> array(
	'legend1'				=> 'JOOMLA_CONFIGURATION',
	'allow_jmenu'			=> array('lang' => 'ALLOW_JMERIDMENU','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
	'jmenu_path'			=> array('lang' => 'JOOMLA_MENU_PATH',	'validate' => 'jpath',	'type' => 'text:20:255', 'explain' => true),
	
	'jmenu_guest_name'			=> array('lang' => 'JMENU_GUEST_NAME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
	'jmenu_reg_name'			=> array('lang' => 'JMENU_REG_NAME',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),

	'legend2'				=> 'OTHER_CONFIGURATION',
	'avatar_position'			=> array('lang' => 'AVATAR_POSITION',		'validate' => 'string',	'type' => 'select', 'function' => 'avatar_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true)
				)
				);			

			
		}
	


		
			if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}

		$this->new_config = $config;
		$cfg_array = (isset($_REQUEST['config'])) ? utf8_normalize_nfc(request_var('config', array('' => ''), true)) : $this->new_config;
		$error = array();
		

		
		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		if ($submit && !check_form_key($form_key) && file_exists($config['joomla_path']) && @is_writable($config['joomla_path']))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			if ($config_name == 'auth_method')
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($config_name == 'email_function_name')
			{
				$this->new_config['email_function_name'] = trim(str_replace(array('(', ')'), array('', ''), $this->new_config['email_function_name']));
				$this->new_config['email_function_name'] = (empty($this->new_config['email_function_name']) || !function_exists($this->new_config['email_function_name'])) ? 'mail' : $this->new_config['email_function_name'];
				$config_value = $this->new_config['email_function_name'];
			}

			if ($submit)
			{
				set_config($config_name, $config_value);
			}
		}

		if ($mode == 'auth')
		{
			// Retrieve a list of auth plugins and check their config values
			$auth_plugins = array();

			$dp = @opendir($phpbb_root_path . 'includes/auth');

			if ($dp)
			{
				while (($file = readdir($dp)) !== false)
				{
					if (preg_match('#^auth_(.*?)\.' . $phpEx . '$#', $file))
					{
						$auth_plugins[] = basename(preg_replace('#^auth_(.*?)\.' . $phpEx . '$#', '\1', $file));
					}
				}
				closedir($dp);

				sort($auth_plugins);
			}

			$updated_auth_settings = false;
			$old_auth_config = array();
			foreach ($auth_plugins as $method)
			{
				if ($method && file_exists($phpbb_root_path . 'includes/auth/auth_' . $method . '.' . $phpEx))
				{
					include_once($phpbb_root_path . 'includes/auth/auth_' . $method . '.' . $phpEx);

					$method = 'acp_' . $method;
					if (function_exists($method))
					{
						if ($fields = $method($this->new_config))
						{
							// Check if we need to create config fields for this plugin and save config when submit was pressed
							foreach ($fields['config'] as $field)
							{
								if (!isset($config[$field]))
								{
									set_config($field, '');
								}

								if (!isset($cfg_array[$field]) || strpos($field, 'legend') !== false)
								{
									continue;
								}

								$old_auth_config[$field] = $this->new_config[$field];
								$config_value = $cfg_array[$field];
								$this->new_config[$field] = $config_value;

								if ($submit)
								{
									$updated_auth_settings = true;
									set_config($field, $config_value);
								}
							}
						}
						unset($fields);
					}
				}
			}

			if ($submit && (($cfg_array['auth_method'] != $this->new_config['auth_method']) || $updated_auth_settings))
			{
				$method = basename($cfg_array['auth_method']);
				if ($method && in_array($method, $auth_plugins))
				{
					include_once($phpbb_root_path . 'includes/auth/auth_' . $method . '.' . $phpEx);

					$method = 'init_' . $method;
					if (function_exists($method))
					{
						if ($error = $method())
						{
							foreach ($old_auth_config as $config_name => $config_value)
							{
								set_config($config_name, $config_value);
							}
							trigger_error($error . adm_back_link($this->u_action), E_USER_WARNING);
						}
					}
					set_config('auth_method', basename($cfg_array['auth_method']));
				}
				else
				{
					trigger_error('NO_AUTH_PLUGIN', E_USER_ERROR);
				}
			}
		}

		if ($submit)
		{
			add_log('admin', 'LOG_CONFIG_' . strtoupper($mode));

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->tpl_name = 'acp_joomla';

		$template->assign_vars(array(
			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),
			'U_ACTION'			=> $this->u_action)
	
			
		);

		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$template->assign_block_vars('options', array(
				'KEY'			=> $config_key,
				'TITLE'			=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'		=> $vars['explain'],
				'TITLE_EXPLAIN'	=> $l_explain,
				'CONTENT'		=> build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars),
				)
			);
		
			unset($display_vars['vars'][$config_key]);
		}

		if ($mode == 'auth')
		{
			$template->assign_var('S_AUTH', true);

			foreach ($auth_plugins as $method)
			{
				if ($method && file_exists($phpbb_root_path . 'includes/auth/auth_' . $method . '.' . $phpEx))
				{
					$method = 'acp_' . $method;
					if (function_exists($method))
					{
						$fields = $method($this->new_config);

						if ($fields['tpl'])
						{
							$template->assign_block_vars('auth_tpl', array(
								'TPL'	=> $fields['tpl'])
								
							);
						}
						unset($fields);
					}
				}
			}
		}
	}







	

	/**
	* Select bump interval
	*/
	function bump_interval($value, $key)
	{
		global $user;

		$s_bump_type = '';
		$types = array('m' => 'MINUTES', 'h' => 'HOURS', 'd' => 'DAYS');
		foreach ($types as $type => $lang)
		{
			$selected = ($this->new_config['bump_type'] == $type) ? ' selected="selected"' : '';
			$s_bump_type .= '<option value="' . $type . '"' . $selected . '>' . $user->lang[$lang] . '</option>';
		}

		return '<input id="' . $key . '" type="text" size="3" maxlength="4" name="config[bump_interval]" value="' . $value . '" />&nbsp;<select name="config[bump_type]">' . $s_bump_type . '</select>';
	}

	
}


			
?>