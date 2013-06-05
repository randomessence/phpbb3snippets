<?php
/**
*
* @package phpBB3
* @version $Id: prime_instant_redirect.php,v 0.0.0 2012/12/03 23:11:00 primehalo Exp $
* @copyright (c) 2009-2012 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* Include only once.
*/
global $prime_instant_redirect;
if (!class_exists('prime_instant_redirect'))
{
	/**
	* Class structure
	*/
	class prime_instant_redirect
	{
		/**
		* Constructor
		*/
		function prime_instant_redirect()
		{
		}

		/**
		*/
		function redirect($url, $time)
		{
			global $user, $phpEx;

			if ($user->page['page_name'] == 'ucp.' . $phpEx && (request_var('mode', '') == 'sendpassword' || request_var('mode', '') == 'resend_act' || request_var('mode', '') == 'activate'))
			{
				return;
			}
			if ($time == 3)
			{
				redirect($url, false);
			}
		}
	}
	// End class

	$prime_instant_redirect = new prime_instant_redirect();
}
?>