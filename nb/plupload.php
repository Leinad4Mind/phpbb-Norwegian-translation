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
	'PLUPLOAD_ADD_FILES'	=> 'Legg til filer',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Legg til filer i opplastingskøen og klikk på startknappen.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s finnes allerede i køen.',
	'PLUPLOAD_CLOSE'	=> 'Lukk',
	'PLUPLOAD_DRAG'	=> 'Dra filer hit.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Feil: Duplikatfil.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Du kan også legge ved filer ved å dra og slippe dem i meldingsboksen.',
	'PLUPLOAD_ERR_INPUT'	=> 'Feil ved åpning av inndatastrøm.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Feil ved flytting av opplastet fil.',
	'PLUPLOAD_ERR_OUTPUT'	=> 'Feil ved åpning av utdatastrøm.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Filen er for stor:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Feil ved filantall.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ugyldig filendelse:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Ikke nok minne tilgjengelig ved kjøring.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Opplastings-URL er kanskje feil eller finnes ikke.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Feil ved filendelse.',
	'PLUPLOAD_FILE'	=> 'Fil: %s',
	'PLUPLOAD_FILE_DETAILS'	=> 'Fil: %s, størrelse: %d, maks. filstørrelse: %d',
	'PLUPLOAD_FILENAME'	=> 'Filnavn',
	'PLUPLOAD_FILES_QUEUED'	=> '%d filer i kø',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Generell feil.',
	'PLUPLOAD_HTTP_ERROR'	=> 'HTTP-feil.',
	'PLUPLOAD_IMAGE_FORMAT'	=> 'Bildeformatet er enten feil eller støttes ikke.',
	'PLUPLOAD_INIT_ERROR'	=> 'Initialiseringsfeil.',
	'PLUPLOAD_IO_ERROR'	=> 'I/U-feil.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'I/T',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Sikkerhetsfeil.',
	'PLUPLOAD_SELECT_FILES'	=> 'Velg filer',
	'PLUPLOAD_SIZE'	=> 'Størrelse',
	'PLUPLOAD_SIZE_ERROR'	=> 'Feil ved filstørrelse.',
	'PLUPLOAD_STATUS'	=> 'Status',
	'PLUPLOAD_START_UPLOAD'	=> 'Start opplasting',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start opplastingskø',
	'PLUPLOAD_STOP_UPLOAD'	=> 'Stopp opplasting',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stopp pågående opplasting',
	'PLUPLOAD_UPLOADED'	=> 'Lastet opp %d/%d filer',
));
