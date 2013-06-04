<?php
/**
*
* @package phpBB3
* @version $Id: prime_quick_login.php,v 1.2.6 2010/04/29 00:51:00 primehalo Exp $
* @copyright (c) 2008-2010 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Include only once.
*/
if (!class_exists('prime_quick_login'))
{

	/**
	* Options
	*/
	define('PRIME_QUICK_LOGIN_ENABLE',	true);	// Enable this MOD?
	define('PRIME_QUICK_LOGIN_AUTO',	true);	// Display the "Remember me" option?
	define('PRIME_QUICK_LOGIN_HIDE',	true);	// Display the "Hide me" option?
	define('PRIME_QUICK_LOGIN_REMOVE',	false);	// Remove the quick login from the real login page?

	/**
	* Class
	*/
	class prime_quick_login
	{
		/**
		* Constructor
		*/
		function prime_quick_login()
		{
			global $config, $user, $template, $phpbb_root_path, $phpEx;

			if (!PRIME_QUICK_LOGIN_ENABLE || (PRIME_QUICK_LOGIN_REMOVE && !empty($template->_rootref['S_DISPLAY_FULL_LOGIN'])))
			{
				return;
			}
			$redirect = '&amp;redirect=' . urlencode($user->page['page_dir'] ? $user->page['page'] : str_replace('&amp;', '&', build_url(array())));
			$template->assign_var('S_PRIME_QUICK_LOGIN', append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=login' .  $redirect));
			if (PRIME_QUICK_LOGIN_AUTO && $config['allow_autologin'])
			{
				$template->assign_var('S_PRIME_QUICK_LOGIN_AUTO', true);
			}
			if (PRIME_QUICK_LOGIN_HIDE)
			{
				$template->assign_var('S_PRIME_QUICK_LOGIN_HIDE', true);
			}
			if (file_exists($user->lang_path . $user->lang_name . '/mods/prime_quick_login.' . $phpEx))
			{
				$user->add_lang('mods/prime_quick_login');
			}
			else
			{
				$template->assign_var('L_PRIME_QUICK_LOGIN_USERNAME', $user->lang['USERNAME']);
				$template->assign_var('L_PRIME_QUICK_LOGIN_PASSWORD', $user->lang['PASSWORD']);
				$template->assign_var('L_PRIME_QUICK_LOGIN_REMEMBER', $user->lang['LOG_ME_IN']);
				$template->assign_var('L_PRIME_QUICK_LOGIN_HIDE', $user->lang['HIDE_ME']);
			}
			if (!empty($config['login_via_email_enable']) && $config['login_via_email_enable'] == 1 && file_exists($user->lang_path . $user->lang_name . '/mods/prime_login_via_email.' . $phpEx))
			{
				$user->add_lang('mods/prime_login_via_email');
				$template->assign_var('L_PRIME_QUICK_LOGIN_USERNAME', $user->lang['USERNAME_OR_EMAIL']);
			}
		}
	}
	// End class

	$prime_quick_login = new prime_quick_login();
}
?>