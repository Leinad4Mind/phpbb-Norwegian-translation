<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'	=> 'Her kan du administrere stilene tilgjengelig på forumet ditt.<br>Vær oppmerksom på at du ikke kan uninstallere <strong>Prosilver</strong> stil som det er phpBBs standard og primær foreldre stil.',
	'CANNOT_BE_INSTALLED'	=> 'Kan ikke installeres',
	'CONFIRM_UNINSTALL_STYLES'	=> 'Er du sikker på at du vil avinstallere de valgte stilene?',
	'COPYRIGHT'	=> 'Copyright',
	'DEACTIVATE_DEFAULT'	=> 'Du kan ikke deaktivere standardstilen.',
	'DELETE_FROM_FS'	=> 'Slett fra filsystemet',
	'DELETE_STYLE_FILES_FAILED'	=> 'Feil ved sletting av filer for stilen «%s».',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Filene for stilen «%s» er slettet.',
	'DETAILS'	=> 'Detaljer',
	'INHERITING_FROM'	=> 'Arver fra',
	'INSTALL_STYLE'	=> 'Installer stil',
	'INSTALL_STYLES'	=> 'Installer stiler',
	'INSTALL_STYLES_EXPLAIN'	=> 'Her kan du installere nye stiler.<br>Hvis du ikke finner en bestemt stil i listen nedenfor, kontrollerer du om stilen allerede er installert. Hvis ikke, kontrollerer du om den ble opplastet på riktig måte.',
	'INVALID_STYLE_ID'	=> 'Ugyldig stil-ID.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Ingen stiler samsvarer med spørringen.',
	'NO_UNINSTALLED_STYLE'	=> 'Fant ingen uinstallerte stiler.',
	'PURGED_CACHE'	=> 'Bufferen ble tømt.',
	'REQUIRES_STYLE'	=> 'Denne stilen krever at stilen «%s» er installert.',
	'STYLE_ACTIVATE'	=> 'Aktiver',
	'STYLE_ACTIVE'	=> 'Aktiv',
	'STYLE_DEACTIVATE'	=> 'Deaktiver',
	'STYLE_DEFAULT'	=> 'Gjør stil til standard',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Du må aktivere stilen før du gjør den til standard.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Ugyldig overordnet stil.',
	'STYLE_ERR_NAME_EXIST'	=> 'En stil med det navnet finnes allerede.',
	'STYLE_ERR_STYLE_NAME'	=> 'Du må angi et navn på denne stilen.',
	'STYLE_INSTALLED'	=> 'Stilen «%s» er installert.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Gå tilbake til listen over installerte stiler',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Installer flere stiler',
	'STYLE_NAME'	=> 'Stilnavn',
	'STYLE_NAME_RESERVED'	=> 'Stilen «%s» kan ikke installeres fordi navnet er reservert.',
	'STYLE_NOT_INSTALLED'	=> 'Stilen «%s» ble ikke installert.',
	'STYLE_PATH'	=> 'Stilbane',
	'STYLE_UNINSTALL'	=> 'Avinstaller',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Stilen «%s» kan ikke avinstalleres fordi den har én eller flere underordnede stiler.',
	'STYLE_UNINSTALLED'	=> 'Stilen «%s» er avinstallert.',
	'STYLE_PHPBB_VERSION'	=> 'phpBB-versjon',
	'STYLE_USED_BY'	=> 'Brukes av (inkludert roboter)',
	'STYLE_VERSION'	=> 'Stilversjon',
	'UNINSTALL_PROSILVER'	=> 'Du kan ikke uninstallere stilen prosilver.',
	'UNINSTALL_DEFAULT'	=> 'Du kan ikke avinstallere standardstilen.',
	'BROWSE_STYLES_DATABASE'	=> 'Sjekk stiler database',
));
