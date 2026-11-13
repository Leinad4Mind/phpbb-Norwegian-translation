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
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Verdi mangler for argument %1$s: <strong>%3$s</strong> i klassen <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'	=> 'Kontroller er ikke angitt.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Ingen metode er angitt for kontrolleren.',
	'CONTROLLER_SERVICE_UNDEFINED'	=> 'Tjenesten for kontrolløren <strong>%s</strong> er ikke definert i ./config/services.yml.',
));
