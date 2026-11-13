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
	'RECAPTCHA_LANG'	=> 'en-GB',
	'CAPTCHA_RECAPTCHA'	=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'	=> 'reCaptcha v3',
	'RECAPTCHA_INCORRECT'	=> 'Løsningen du ga var feil',
	'RECAPTCHA_NOSCRIPT'	=> 'Vennligst aktiver JavaScript i nettleseren din for å laste utfordringen.',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'For å bruke reCaptcha må du opprette en konto på <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'	=> 'Denne CAPTCHA er faktisk usynlig. For å bekrefte at den fungerer, bør et lite ikon vises i det nederste høyre hjørnet av siden.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Du har overgått det maksimale antall innloggningsforsøk tillatt.<br>I tillegg til brukernavn og passord vil den usynlige reCAPTCHA v3 bli brukt til å autentisere sesjonen din.',
	'RECAPTCHA_PUBLIC'	=> 'Nettstedet nøkkel',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'Du kan få nøklene på <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>Bruk reCAPTCHA v2 &gt; Invisible reCAPTCHA type skilt.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Du kan få nøklene på <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>Vær så snill, bruk reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'	=> 'Hemmelig nøkkel',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Din hemmelige reCAPTCHA-nøkkel. <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>Bruk reCAPTCHA v2 &gt; Invisible reCAPTCHA type skilt.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Din hemmelige reCAPTCHA-nøkkel. <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>Vær så snill, bruk reCAPTCHA v3.',
	'RECAPTCHA_V3_DOMAIN'	=> 'Anmodningsdomene',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'	=> 'Domænet for å hente skriptet fra og bruke når forespørselen verifiseres.<br>Bruk <samp>recaptcha.net</samp> når <samp>google.com</samp> er ikke tilgjengelig.',
	'RECAPTCHA_V3_METHOD'	=> 'Anmodningsmetode',
	'RECAPTCHA_V3_METHOD_EXPLAIN'	=> 'Metoden som skal brukes ved verifisering av anmodningen.<br>Inaktiverte alternativer er ikke tilgjengelige i innstillingen din.',
	'RECAPTCHA_V3_METHOD_CURL'	=> 'CURL',
	'RECAPTCHA_V3_METHOD_POST'	=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'	=> 'Støtte',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT'	=> 'Forutsettelsesgrensen',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Brukes når ingen av de andre tiltakene er gjeldende.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'	=> 'Trøskel for innlogging',
	'RECAPTCHA_V3_THRESHOLD_POST'	=> 'Trøskel etter',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'	=> 'Registreringsgrensen',
	'RECAPTCHA_V3_THRESHOLD_REPORT'	=> 'Rapporteringsgrensen',
	'RECAPTCHA_V3_THRESHOLDS'	=> 'Trøskelværdier',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'	=> 'reCAPTCHA v3 returnerer et resultat (<samp>1.0</samp> er svært sannsynlig en god samspill, <samp>0.0</samp> Her kan du sette den minste poengsummen per handling.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'	=> 'reCAPTCHA v3 krever å vite hvilken tilgjengelig metode du ønsker å bruke når du verifiserer forespørselen.',
));
