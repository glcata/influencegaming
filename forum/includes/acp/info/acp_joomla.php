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
* @package module_install
*/

class acp_joomla_info
{
	function module()
	{
	return array(
		'filename'	=> 'acp_joomla',
		'title'		=> 'RokBB3',
		'version'	=> '1.0.0',
		'modes'		=> array(
			'global_conf'		=> array('title' => 'Global configuration', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'populus'		=> array('title' => 'Populus', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'mediamogul'		=> array('title' => 'MediaMogul', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'hivemind'		=> array('title' => 'HiveMind', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'dimensions'		=> array('title' => 'Dimensions', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'synapse'		=> array('title' => 'Synapse', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'chromatophore'		=> array('title' => 'Chromatophore', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'catalyst'		=> array('title' => 'Catalyst', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'hyperion'		=> array('title' => 'Hyperion', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'terrant'		=> array('title' => 'TerranTribune', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'tt_dark'		=> array('title' => 'TerranTribune Dark', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'perihelion'		=> array('title' => 'Perihelion', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'metamorph'		=> array('title' => 'Metamorph', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'metamorph2'		=> array('title' => 'Metamorph 2', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'replicant2'		=> array('title' => 'Replicant 2', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'versatility4'		=> array('title' => 'Versatility 4', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'vertigo'		=> array('title' => 'Vertigo', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'mixxmag'		=> array('title' => 'Mixxmag', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'akiraka'		=> array('title' => 'Akiraka', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'meridian'		=> array('title' => 'Meridian', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'mynxx'			=> array('title' => 'Mynxx', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'solarsentinel'			=> array('title' => 'SolarSentinel', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'versatility3'			=> array('title' => 'Versatility3', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'refraction'			=> array('title' => 'Refraction', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'affinity'			=> array('title' => 'Affinity', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'vortex'			=> array('title' => 'Vortex', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			'nexus'			=> array('title' => 'Nexus', 'auth' => 'acl_a_group', 'cat' => array('ACP_AUTOMATION')),
			),
		);
		
	}
							
	function install()
	{
	}
								
	function uninstall()
	{
	}

}
?>