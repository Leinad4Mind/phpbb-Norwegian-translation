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
	'CONFIG_NOT_EXIST'	=> 'Konfigurasjonsinnstillingen «%s» finnes ikke, og dette er uventet.',
	'GROUP_NOT_EXIST'	=> 'Gruppen «%s» finnes ikke, og dette er uventet.',
	'MIGRATION_APPLY_DEPENDENCIES'	=> 'Aktiver avhengigheter for %s.',
	'MIGRATION_DATA_DONE'	=> 'Installerte data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_IN_PROGRESS'	=> 'Installerer data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_DATA_RUNNING'	=> 'Installerer data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migreringen er allerede i praksis installert (hopper over): %s',
	'MIGRATION_EXCEPTION_ERROR'	=> 'Noe gikk galt under forespørselen, og det ble utløst et unntak. Endringene som ble gjort før feilen inntraff, ble tilbakeført så godt vi klarer, men du bør kontrollere om systemet har feil.',
	'MIGRATION_NOT_FULFILLABLE'	=> 'Overføringen «%1$s» kan ikke fullføres, migreringen «%2$s» mangler.',
	'MIGRATION_NOT_INSTALLED'	=> 'Migrasjonen "%s" er ikke installert.',
	'MIGRATION_NOT_VALID'	=> '%s er ikke en gyldig migrering.',
	'MIGRATION_SCHEMA_DONE'	=> 'Installert skjema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_IN_PROGRESS'	=> 'Installeringsordning: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_SCHEMA_RUNNING'	=> 'Installerer skjema: %s.',
	'MIGRATION_REVERT_DATA_DONE'	=> 'Omvendte data: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Reversjonsdata: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_DATA_RUNNING'	=> 'Reversjonsdata: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'	=> 'Omvendt skema: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Reversjonsordning: %1$s; Tid: %2$.2f sekunder',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Reversjonsordning: %s.',
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'	=> 'En if-uttalelse hjelper mangler en betingelse.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'	=> 'En if-uttalelse hjelper mangler en gyldig oppfordring til et migrasjonssteg.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'En migrasjon er ugyldig. En kundekallbar funksjon kunne ikke bli kalt.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'	=> 'En migrering er ugyldig. En ukjent type migrering verktøy ble møtt.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'	=> 'En migrasjon er ugyldig. Et ukjent migrationsverktøy ble møtt.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'	=> 'En migrering er ugyldig. En ukjent migrering verktøy metode ble møtt.',
	'MODULE_ERROR'	=> 'Det oppstod en feil ved oppretting av modulen: %s',
	'MODULE_EXISTS'	=> 'En modul eksisterer allerede: %s',
	'MODULE_EXIST_MULTIPLE'	=> 'Flere moduler med det givne modulen langnavnet eksisterer allerede: %s. Prøv å bruke før/etter-nøkkel for å klargjøre modulplasseringen.',
	'MODULE_INFO_FILE_NOT_EXIST'	=> 'En påkrevd modulinformasjonsfil mangler: %2$s',
	'MODULE_NOT_EXIST'	=> 'En påkrevd modul finnes ikke: %s',
	'PARENT_MODULE_FIND_ERROR'	=> 'Det er ikke mulig å bestemme hovedmodulidentifikatoren: %s',
	'PERMISSION_NOT_EXIST'	=> 'Tillatelsesinnstillingen «%s» finnes ikke, og dette er uventet.',
	'ROLE_ASSIGNED_NOT_EXIST'	=> 'Tillatelsesrollen som er tilordnet gruppen «%1$s», finnes uventet ikke. Rolle-ID: «%2$s»',
	'ROLE_NOT_EXIST'	=> 'Tillatelsesrollen «%s» finnes ikke, og dette er uventet.',
));
