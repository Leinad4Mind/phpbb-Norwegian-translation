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
	'ACTIVE_TOPICS'	=> 'Aktive emner',
	'ANNOUNCEMENTS'	=> 'Kunngjøringer',
	'FORUM_PERMISSIONS'	=> 'Forumtillatelser',
	'ICON_ANNOUNCEMENT'	=> 'Kunngjøring',
	'ICON_STICKY'	=> 'Festet',
	'LOGIN_NOTIFY_FORUM'	=> 'Du har blitt varslet om dette forumet, logg inn for å vise det.',
	'MARK_TOPICS_READ'	=> 'Merk emner som lest',
	'NEW_POSTS_HOT'	=> 'Nye innlegg [ populært ]',
	'NEW_POSTS_LOCKED'	=> 'Nye innlegg [ låst ]',
	'NO_NEW_POSTS_HOT'	=> 'Ingen nye innlegg [ populært ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Ingen nye innlegg [ låst ]',
	'NO_READ_ACCESS'	=> 'Du har ikke de nødvendige tillatelsene til å se eller lese emner i dette forumet.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Denne kategorien har ingen fora.',
	'NO_UNREAD_POSTS_HOT'	=> 'Ingen uleste innlegg [ populært ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Ingen uleste innlegg [ låst ]',
	'POST_FORUM_LOCKED'	=> 'Forumet er låst',
	'TOPICS_MARKED'	=> 'Emnene for dette forumet er nå merket som lest.',
	'UNREAD_POSTS_HOT'	=> 'Uleste innlegg [ populær ]',
	'UNREAD_POSTS_LOCKED'	=> 'Uleste innlegg [ låst ]',
	'VIEW_FORUM'	=> 'Vis forum',
	'VIEW_FORUM_TOPICS'	=> array(
		1	=> '%d emne',
		2	=> '%d emner',
	),
));
