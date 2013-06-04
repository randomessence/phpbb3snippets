<?php
/**
 *
 * @author Tajgeer (Mateusz Małek) tajgeer@o2.pl
 * @version $Id$
 * @copyright (c) 2012 Tajgeer
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'Full Style Refresh';
$version_config_name = 'fsr_version';
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

$versions = array(
	'1.0.2-RC' => array(
	
		'module_add' => array(
			array('acp', 'ACP_STYLE_MANAGEMENT', array(
				'module_basename'	=> 'styles',
				'modes'				=> array('full_refresh')),
			),
		),
		
	),
	
	'1.0.3-RC' => array(),
	
	'1.1.0' => array(),
	
	'1.1.1' => array(),
);

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
?>