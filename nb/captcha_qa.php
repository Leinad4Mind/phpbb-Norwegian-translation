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
	'CAPTCHA_QA'	=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Dette spørsmålet har til hensikt å hindre automatisert skjemainnsending fra spammere.',
	'CONFIRM_QUESTION_WRONG'	=> 'Du har svart feil på spørsmålet.',
	'CONFIRM_QUESTION_MISSING'	=> 'Spørsmål for captcha kunne ikke hentes.',
	'QUESTION_ANSWERS'	=> 'Svar',
	'ANSWERS_EXPLAIN'	=> 'Skriv inn gyldige svar på spørsmålet, ett per linje.',
	'CONFIRM_QUESTION'	=> 'Spørsmål',
	'ANSWER'	=> 'Svar',
	'EDIT_QUESTION'	=> 'Rediger spørsmål',
	'QUESTIONS'	=> 'Spørsmål',
	'QUESTIONS_EXPLAIN'	=> 'For hver skjema innsendelse hvor du har aktivert Q&amp;A-plugin, vil brukere bli spurt et av de spørsmålene som er angitt her. For å bruke dette pluginen må minst ett spørsmål være satt i standardspråket. Disse spørsmålene bør være enkle for målgruppen å svare på, men utover evnen til en bot som kan kjøre en GoogleTM-søk. Bare et enkelt riktig spørsmål er nødvendig. Hvis du begynner å motta spam registreringer, bør spørsmålet endres. Aktivere den strenge innstillingen hvis spørsmålet ditt er basert på blandet tilfelle, punktering eller hvitrom.',
	'QUESTION_DELETED'	=> 'Spørsmål slettet',
	'QUESTION_LANG'	=> 'Språk',
	'QUESTION_LANG_EXPLAIN'	=> 'Språket dette spørsmålet og de tilhørende svarene er skrevet på.',
	'QUESTION_STRICT'	=> 'Streng kontroll',
	'QUESTION_STRICT_EXPLAIN'	=> 'Aktiver for at store/små bokstaver, tegnsetting og skilletegn skal måtte være korrekt.',
	'QUESTION_TEXT'	=> 'Spørsmål',
	'QUESTION_TEXT_EXPLAIN'	=> 'Spørsmålet som vises for brukeren.',
	'QA_ERROR_MSG'	=> 'Fyll ut alle felt og skriv inn minst ett svar.',
	'QA_LAST_QUESTION'	=> 'Du kan ikke slette alle spørsmål mens plugin-modulen er aktiv.',
));
