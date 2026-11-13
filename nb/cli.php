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
	'CLI_APCU_CACHE_NOTICE'	=> 'APCu- cache må rengjøres gjennom Administrasjonskontrollpanelet.',
	'CLI_CONFIG_CANNOT_CACHED'	=> 'Angi dette alternativet hvis konfigurasjonsalternativet endres for ofte til å bli bufret på en effektiv måte.',
	'CLI_CONFIG_CURRENT'	=> 'Gjeldende konfigurasjonsverdi, bruk 0 og 1 til å angi boolske verdier',
	'CLI_CONFIG_DELETE_SUCCESS'	=> 'Slettet konfigurasjon %s.',
	'CLI_CONFIG_NEW'	=> 'Ny konfigurasjonsverdi, bruk 0 og 1 til å angi boolske verdier',
	'CLI_CONFIG_NOT_EXISTS'	=> 'Konfigurasjon %s finnes ikke',
	'CLI_CONFIG_OPTION_NAME'	=> 'Navnet på konfigurasjonsalternativet',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Angi dette alternativet hvis verdien skal vises uten linjeskift på slutten.',
	'CLI_CONFIG_INCREMENT_BY'	=> 'Økes med',
	'CLI_CONFIG_INCREMENT_SUCCESS'	=> 'Konfigurasjon %s er økt',
	'CLI_CONFIG_SET_FAILURE'	=> 'Kan ikke angi konfigurasjon %s',
	'CLI_CONFIG_SET_SUCCESS'	=> 'Konfigurasjon %s angitt',
	'CLI_DESCRIPTION_CRON_LIST'	=> 'Viser en liste over klare og ikke-klare cron-jobber.',
	'CLI_DESCRIPTION_CRON_RUN'	=> 'Kjør alle klare cron-oppgaver.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Navnet på oppgaven som skal kjøres',
	'CLI_DESCRIPTION_DB_LIST'	=> 'Liste alle installerte og tilgjengelige migrasjoner.',
	'CLI_DESCRIPTION_DB_MIGRATE'	=> 'Oppdaterer databasen ved å aktivere migreringer.',
	'CLI_DESCRIPTION_DB_REVERT'	=> 'Tilbake en migrasjon.',
	'CLI_DESCRIPTION_DELETE_CONFIG'	=> 'Sletter et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'	=> 'Deaktiverer angitt utvidelse.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'	=> 'Aktiverer angitt utvidelse.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'	=> 'Finner migrasjoner som ikke er avhengig av.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'	=> 'Reparerer forumets og modulens trestruktur.',
	'CLI_DESCRIPTION_GET_CONFIG'	=> 'Henter verdien til et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'	=> 'Inkrementer et konfigurasjonsalternativs tallverdi',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'	=> 'Viser alle utvidelser i databasen og på filsystemet.',
	'CLI_DESCRIPTION_OPTION_ENV'	=> 'Miljønavnet.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'	=> 'Kjør i Sikker modus (uten utvidelser).',
	'CLI_DESCRIPTION_OPTION_SHELL'	=> 'Start shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'	=> 'Tømmer den angitte utvidelsen.',
	'CLI_DESCRIPTION_REPARSER_LIST'	=> 'Lister opp de typer tekst som kan gjenopprettes.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'	=> 'Tilgjengelige reparsere:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'	=> 'Reparerer lagret tekst med den aktuelle text_formatter-tjenesten.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Type tekst å reparere.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'	=> 'Ikke lagre noen endringer; bare skrive ut hva som ville skje',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Legg merke til at alle tidligere deaktiverte BBC-koder vil bli omarbeidet, aktiveret og full renderet.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Mindste registrerings-ID å behandle',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Høyeste registrerings-ID til behandling',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Omfattende antall opptegnelser som skal behandles på et tidspunkt',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'	=> 'Begynn å reparere hvor den siste henrettelsen stoppet.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'	=> 'Angir verdien til et konfigurasjonsalternativ bare hvis gammel og gjeldende verdi er lik',
	'CLI_DESCRIPTION_SET_CONFIG'	=> 'Angir verdien til et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_THUMBNAIL_DELETE'	=> 'Slett alle eksisterende miniaturer.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Generere alle manglende miniaturer.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Gjennomføre alle miniaturer.',
	'CLI_DESCRIPTION_UPDATE_CHECK'	=> 'Sjekk om styret er oppdatert.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'	=> 'Navn på utvidelsen som skal kontrolleres (hvis det er noen, sjekk alle utvidelser)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'	=> 'Kjør kontrollkommando med cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Kjør kommandoen som velger å sjekke bare stabile eller ustabile versjoner.',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'	=> 'Oppdaterer utdaterte passord hasher som skal hashes med bcrypt.',
	'CLI_ERROR_INVALID_STABILITY'	=> '"%s" må settes til "stabil" eller " ustabil".',
	'CLI_DESCRIPTION_USER_ACTIVATE'	=> 'Aktivere (eller deaktivere) en brukerkonto.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Brukernavn på kontoen som skal aktiveres.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktivere brukerkontoen',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'	=> 'Brukeren er allerede aktiv.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Brukeren er allerede inaktiv.',
	'CLI_DESCRIPTION_USER_ADD'	=> 'Legg til en ny bruker.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Brukernavn til den nye brukeren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Passord for den nye brukeren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'	=> 'E-postadresse til den nye brukeren',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Send kontoaktivering e-post til den nye brukeren (ikke sendt som standard)',
	'CLI_DESCRIPTION_USER_DELETE'	=> 'Slette en brukerkonto.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'	=> 'Brukernavn for brukeren å slette',
	'CLI_DESCRIPTION_USER_DELETE_ID'	=> 'Slette brukerkontoer med ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Bruker-ID for brukerne å slette',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Slette alle innlegg fra brukeren. Uten dette alternativet vil brukerens innlegg bli beholdt.',
	'CLI_DESCRIPTION_USER_RECLEAN'	=> 'Rengjør nytt brukernavn.',
	'CLI_EXTENSION_DISABLE_FAILURE'	=> 'Kan ikke deaktivere utvidelsen %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'	=> 'Utvidelsen %s er deaktivert',
	'CLI_EXTENSION_DISABLED'	=> 'Utvidelse %s er ikke aktivert',
	'CLI_EXTENSION_ENABLE_FAILURE'	=> 'Kan ikke aktivere utvidelsen %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'	=> 'Utvidelsen %s er aktivert',
	'CLI_EXTENSION_ENABLED'	=> 'Utvidelse %s er allerede aktivert',
	'CLI_EXTENSION_NOT_EXIST'	=> 'Utvidelse %s eksisterer ikke',
	'CLI_EXTENSION_NAME'	=> 'Navnet på utvidelsen',
	'CLI_EXTENSION_PURGE_FAILURE'	=> 'Kan ikke tømme utvidelsen %s',
	'CLI_EXTENSION_PURGE_SUCCESS'	=> 'Utvidelsen %s er tømt',
	'CLI_EXTENSION_UPDATE_FAILURE'	=> 'Kan ikke oppdatere utvidelsen %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'	=> 'Er lykkedes med å oppdatere utvidelsen %s',
	'CLI_EXTENSION_NOT_FOUND'	=> 'Fant ingen utvidelser.',
	'CLI_EXTENSION_NOT_ENABLEABLE'	=> 'Utvidelse av %s er ikke mulig.',
	'CLI_EXTENSIONS_AVAILABLE'	=> 'Tilgjengelig',
	'CLI_EXTENSIONS_DISABLED'	=> 'Deaktivert',
	'CLI_EXTENSIONS_ENABLED'	=> 'Aktivert',
	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'	=> 'Reparerte trestrukturen til forum og moduler med suksess.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'	=> 'Oppdatert oppdatert passord hashes til bcrypt.',
	'CLI_MIGRATION_NAME'	=> 'Migrationsnavn, inkludert navnrommet (bruk fremover-slasher i stedet for bakslasher for å unngå problemer).',
	'CLI_MIGRATIONS_AVAILABLE'	=> 'Tilgjengelige migrasjoner',
	'CLI_MIGRATIONS_INSTALLED'	=> 'Installerte migrasjoner',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'	=> 'Viser bare tilgjengelige migrasjoner',
	'CLI_MIGRATIONS_EMPTY'	=> 'Ingen migrasjoner.',
	'CLI_REPARSER_REPARSE_REPARSING'	=> 'Reparsjon av %1$s (område %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparasjon av %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'	=> 'Reparsing endte med suksess',
	'CLI_THUMBNAIL_DELETED'	=> '%1$s (%2$s) slettes.',
	'CLI_THUMBNAIL_DELETING'	=> 'Å slette miniaturer',
	'CLI_THUMBNAIL_SKIPPED'	=> '%1$s (%2$s) har gått over.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generert.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Generering av miniaturer',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Alle miniaturer er gjenopprettet.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Alle miniaturer er slettet.',
	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Ingen miniaturer å generere.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Ingen miniaturer å slette.',
	'CLI_USER_ADD_SUCCESS'	=> 'Successivt lagt til bruker %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Er du sikker på at du vil slette %s?',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Er du sikker på at du vil slette bruker-IDene %s?',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Bruker-IDs slettet med suksess.',
	'CLI_USER_DELETE_ID_START'	=> 'Å slette brukere med ID',
	'CLI_USER_DELETE_NONE'	=> 'Ingen brukere ble slettet med bruker-ID.',
	'CLI_USER_RECLEAN_START'	=> 'Å rengjøre brukernavn',
	'CLI_USER_RECLEAN_DONE'	=> array(
		0	=> 'Ingen brukernavn trenger å bli renset.',
		1	=> '%d brukernavn er ryddet.',
		2	=> '%d brukernavnene er renset.',
	),
	'CLI_HELP_CRON_RUN'	=> 'Kjør alle ferdige cronoppgaver. Alternativt kan du spesifisere et cronoppgave navn for å kjøre bare den angitte cronoppgaven.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktivere en brukerkonto, eller deaktivere en konto ved hjelp av <info>--deaktivere</info> Alternativt for å sende en aktivering e-post til brukeren, bruk <info>--sende e-post</info> alternativ.',
	'CLI_HELP_USER_ADD'	=> 'De <info>%command.name%</info> Kommandoen legger til en ny bruker: Hvis dette kommandoen kjører uten alternativer, vil du bli bedt om å skrive dem inn. <info>--sende e-post</info> alternativ.',
	'CLI_HELP_USER_RECLEAN'	=> 'Re-clean brukernavn vil sjekke alle lagrede brukernavn og sikre at rene versjoner også er lagret.',
));
