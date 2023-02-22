<?php
// No direct access
defined( '_JEXEC' ) or die;

/**
 * Consent Manager Installer Script
 * 
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @since  1.0
 */
class plgSystemConsentmanagerInstallerScript
{
	function postflight( $type, $parent )
	{
		JFactory::getApplication()->enqueueMessage(JText::_('PLG_SYSTEM_CONSENTMANAGER_POST_INSTALLTION'), 'notice');
	}
}