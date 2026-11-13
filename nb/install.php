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
	'INSTALL_PANEL'	=> 'Installasjonspanel',
	'SELECT_LANG'	=> 'Velg språk',
	'STAGE_INSTALL'	=> 'Installering av phpBB',
	'INTRODUCTION_TITLE'	=> 'Introduksjon',
	'INTRODUCTION_BODY'	=> 'Velkommen til phpBB3!<br /><br />phpBB® er den mest brukte open source bulletin board løsningen i verden. phpBB3 er den siste avdelingen i en pakkelinje startet i 2000. Som sine forgjengere, er phpBB3 funksjonsrik, brukervennlig og fullt støttet av phpBB Team. phpBB3 forbedrer mye på hva som gjorde phpBB2 populært, og legger til ofte forespurte funksjoner som ikke var til stede i tidligere versjoner. Vi håper det overgår forventningene dine.<br /><br />Dette installasjonssystemet vil veilede deg gjennom å installere phpBB3, oppdatere til den nyeste versjonen av phpBB3 fra tidligere versjoner, samt konvertere til phpBB3 fra et annet diskusjonsbord system (inkludert phpBB2). For mer informasjon oppfordrer vi deg til å lese <a href="%1$s">installasjonsguiden</a>.<br /><br />For å lese phpBB3-lisensen eller lære om å få støtte og vår holdning til den, vennligst velg de respektive alternativene fra sidemenuet.',
	'SUPPORT_TITLE'	=> 'Support',
	'SUPPORT_BODY'	=> 'Full støtte vil bli gitt for den nåværende stabile utgivelsen av phpBB3, gratis.</p><ul><li>installasjon</li><li>konfigurasjon</li><li>tekniske spørsmål</li><li>problemer knyttet til potensielle feil i programvaren</li><li>oppdatering fra Release Candidate (RC) versjoner til den siste stabile versjonen</li><li>konvertere fra phpBB 2.0.x til phpBB3</li><li>konvertere fra andre diskusjonsbord programvare til phpBB3 (se venligst <a href="https://www.phpbb.com/community/viewforum.php?f=486">Converters Forum</a>)</li></ul><p>Vi oppfordrer brukere som fortsatt kjører beta-versjoner av phpBB3 til å erstatte sin installasjon med en ny kopi av den nyeste versjonen.</p><h2>Utvidelser / stiler</h2><p>For spørsmål knyttet til utvidelser, vennligst post i <a href="https://www.phpbb.com/community/viewforum.php?f=451">Utvidelsesforum</a>.<br />For spørsmål knyttet til stilarter, maler og temaer, vennligst post i <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Hvis spørsmålet ditt er knyttet til en bestemt pakke, kan du skrive direkte i emnet som er dedikert til pakken.</p><h2>Å få støtte</h2><p><a href="https://www.phpbb.com/support/">Støtteavdeling</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">En rask oppstartshåndledning</a><br /><br />For å sikre at du holder deg oppdatert med de siste nyhetene og utgivelsene, følg oss på <a href="https://www.x.com/phpbb/">X</a> og <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',
	'LICENSE_TITLE'	=> 'General Public License',
	'INSTALL_INTRO'	=> 'Velkommen til installasjonsprogrammet',
	'INSTALL_INTRO_BODY'	=> 'Med dette alternativet er det mulig å installere phpBB3 på serveren din.</p><p>Hvis du ikke kjenner innstillingene til databasen din, vennligst kontakt vert og spør om dem. Du vil ikke kunne fortsette uten dem.</p>

	<ul>
		<li>Databasetypen-databasen du vil bruke.</li>
		<li>Database-serverens værtsnavn eller DSN-adressen til databaseserveren.</li>
		<li>Databaseserverport-databaseserverens port (ofte er dette ikke nødvendig).</li>
		<li>Databasen navn-navnet på databasen på serveren.</li>
		<li>Databasen brukernavn og passord Databasen-innloggingsdata for å få tilgang til databasen.</li>
	</ul>

	<p><strong>Merk:</strong> Hvis du installerer med SQLite, bør du skrive inn hele veien til databasedateien din i DSN-feltet og la brukernavn- og passordfeltet tomt. Av sikkerhetsgrunner bør du sørge for at databasedateien ikke er lagret på et sted tilgjengelig fra nettet.</p>

	<p>phpBB3 støtter følgende databaser:</p>
	<ul>
		<li>MySQL 4.1.3 eller høyere (MySQLi kreves)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller høyere (direkte eller via ODBC)</li>
		<li>MS SQL Server 2005 eller høyere (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Bare de databasene som er støttet på serveren din vil bli vist.',
	'ACP_LINK'	=> 'Ta meg til <a href="%1$s">AVS</a>',
	'INSTALL_PHPBB_INSTALLED'	=> 'phpBB er allerede installert.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB er ikke installert ennå.',
	'INSTALL_RESTART'	=> 'Å starte installasjonen på nytt',
	'FILE_NOT_EXISTS'	=> 'Fil ikke finnes',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'For å kunne installere phpBB må %1$s-filen eksistere.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'	=> 'Det anbefales at %1$s-filen eksisterer for en bedre forumbrukeropplevelse.',
	'FILE_NOT_WRITABLE'	=> 'Filer kan ikke skrives',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'For å kunne installere phpBB, må %1$s-filen være skrivbar.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Det anbefales at %1$s-filen skrives for en bedre forumbrukeropplevelse.',
	'DIRECTORY_NOT_EXISTS'	=> 'Direktoriet eksisterer ikke',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'	=> 'For å kunne installere phpBB må %1$s-registeret eksistere.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'	=> 'Det anbefales at %1$s-direktoriet eksisterer for en bedre forumbrukeropplevelse.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Direktori er ikke skrivebar',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'For å kunne installere phpBB må %1$s-registret være skrivbart.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Det anbefales at %1$s-direktoriet skrives for en bedre forumbrukeropplevelse.',
	'PHP_VERSION_REQD'	=> 'PHP-versjon',
	'PHP_VERSION_REQD_EXPLAIN'	=> 'phpBB krever PHP-versjon 7.2.0 eller høyere.',
	'PHP_GETIMAGESIZE_SUPPORT'	=> 'PHP getimagesize() funksjon er nødvendig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'For at phpBB skal fungere riktig, må getimagesize-funksjonen være tilgjengelig.',
	'PCRE_UTF_SUPPORT'	=> 'PCRE UTF-8-støtte',
	'PCRE_UTF_SUPPORT_EXPLAIN'	=> 'phpBB vil ikke kjøre hvis PHP-installasjonen din ikke er kompilert med UTF-8-støtte i PCRE-utvidelsen.',
	'PHP_JSON_SUPPORT'	=> 'PHP JSON-støtte',
	'PHP_JSON_SUPPORT_EXPLAIN'	=> 'For at phpBB skal fungere riktig, må PHP JSON-utvidelsen være tilgjengelig.',
	'PHP_MBSTRING_SUPPORT'	=> 'PHP mbstring støtte',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'	=> 'For at phpBB skal fungere riktig, må PHP mbstring-forlengelsen være tilgjengelig.',
	'PHP_XML_SUPPORT'	=> 'PHP XML/DOM-støtte',
	'PHP_XML_SUPPORT_EXPLAIN'	=> 'For at phpBB skal fungere riktig, må PHP XML/DOM-utvidelsen være tilgjengelig.',
	'PHP_SUPPORTED_DB'	=> 'Databaser som støttes',
	'PHP_SUPPORTED_DB_EXPLAIN'	=> 'Du må ha støtte for minst en kompatibel database i PHP. Hvis ingen databasemoduler er vist som tilgjengelige, bør du kontakte din hostingleverandør eller se over den relevante PHP-installationsdokumentasjonen for råd.',
	'RETEST_REQUIREMENTS'	=> 'Krav til gjenprøving',
	'STAGE_REQUIREMENTS'	=> 'Kontrollkrav',
	'INST_ERR_MISSING_DATA'	=> 'Du må fylle ut alle feltene i denne blokken.',
	'TIMEOUT_DETECTED_TITLE'	=> 'Installeren oppdaget en timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Installeren har oppdaget en timeout, kan du prøve å oppdatere siden, noe som kan føre til data korrupsjon. Vi foreslår at du enten øker dine timeout innstillinger eller prøve å bruke CLI.',
	'STAGE_OBTAIN_DATA'	=> 'Sett installasjonsdata',
	'STAGE_ADMINISTRATOR'	=> 'Administratordetaljer',
	'ADMIN_CONFIG'	=> 'Administratorkonfigurasjon',
	'ADMIN_PASSWORD'	=> 'Administrators passord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekreft administratorpassord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Angi et passord på mellom 6 og 30 tegn.',
	'ADMIN_USERNAME'	=> 'Administrators brukernavn',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Angi et brukernavn på mellom 3 og 20 tegn.',
	'INST_ERR_EMAIL_INVALID'	=> 'E-postadressen du angav, er ugyldig.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Passordene du angav, samsvarte ikke.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Passordet du angav, er for langt. Den maksimale lengden er på 30 tegn.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Passordet du angav, er for kort. Den minste lengde er på 6 tegn.',
	'INST_ERR_USER_TOO_LONG'	=> 'Brukernavnet du angav, er for langt. Den maksimale lengden er på 20 tegn.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Brukernavnet du angav, er for kort. Den minste lengden er på 3 tegn.',
	'BOARD_CONFIG'	=> 'Konfigurasjon av meldingsbrettet',
	'DEFAULT_LANGUAGE'	=> 'Standardspråk',
	'BOARD_NAME'	=> 'Tittel på styret',
	'BOARD_DESCRIPTION'	=> 'Kort beskrivelse av forumet',
	'STAGE_DATABASE'	=> 'Databaseinnstillinger',
	'DB_CONFIG'	=> 'Databasekonfigurasjon',
	'DBMS'	=> 'Databasetype',
	'DB_HOST'	=> 'Vertsnavn eller DSN for databaseserver',
	'DB_HOST_EXPLAIN'	=> 'DSN står for «Data Source Name» (Datakildenavn) og er bare relevant for ODBC-installasjoner. På PostgreSQL bruker du localhost til å koble til den lokale serveren via UNIX-domenesocket og 127.0.0.1 til å koble til via TCP. For SQLite skriver du inn hele banen til databasefilen.',
	'DB_PORT'	=> 'Databaseserverport',
	'DB_PORT_EXPLAIN'	=> 'La dette stå tomt hvis du ikke vet at serveren bruker en ikke-standardport.',
	'DB_PASSWORD'	=> 'Databasepassord',
	'DB_NAME'	=> 'Databasenavn',
	'DB_USERNAME'	=> 'Databasebrukernavn',
	'DATABASE_VERSION'	=> 'Databaseversjon',
	'TABLE_PREFIX'	=> 'Prefiks for tabeller i database',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefikset må begynne med en bokstav og kan bare inneholde bokstaver, tall og understreker.',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Innebygd ]',
	'DB_OPTION_MYSQLI'	=> 'MySQL med MySQLi-utvidelse',
	'DB_OPTION_ORACLE'	=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'	=> 'SQLite 3',
	'INST_ERR_DB'	=> 'Database installasjonsfeil',
	'INST_ERR_NO_DB'	=> 'Kan ikke laste inn PHP-modulen for den valgte databasetypen.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Det angitte prefikset er ugyldig. Det må starte med en bokstav og kan bare inneholde bokstaver, tall og understrek.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Det angitte tabellprefikset er for langt. Den maksimale lengden er på %d tegn.',
	'INST_ERR_DB_NO_NAME'	=> 'Intet databasenavn ble angitt.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Databasefilen du angav, er inni systemets mappetre. Du bør legge denne filen på et sted som ikke er tilgjengelig fra web.',
	'INST_ERR_DB_CONNECT'	=> 'Kan ikke koble til databasen, se feilmelding nedenfor.',
	'INST_ERR_DB_NO_WRITABLE'	=> 'Både databasen og kataloget som inneholder den må være skrivelige.',
	'INST_ERR_DB_NO_ERROR'	=> 'Ingen feilmelding ble angitt.',
	'INST_ERR_PREFIX'	=> 'Det finnes allerede tabeller med det angitte prefikset – velg et annet alternativ.',
	'INST_ERR_DB_NO_MYSQLI'	=> 'MySQL-versjonen som er installert på denne maskinen, er inkompatibel med alternativet «MySQL med MySQLi-utvidelse», som du har valgt. Prøv alternativet «MySQL» i stedet.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Versjonen du har installert av SQLite-utvidelsen, er for gammel – den må oppgraderes til minst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'	=> 'Oracle-versjonen som er installert på denne maskinen, krever at du angir parameteren <var>NLS_CHARACTERSET</var> til <var>UTF8</var>. Oppgrader installasjonen til 9.2+ eller endre parameteren.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Databasen du har valgt, ble ikke opprettet med <var>UNICODE</var>- eller <var>UTF8</var>-koding. Prøv å installere med en database med <var>UNICODE</var>- eller <var>UTF8</var>-koding.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Skemafilen er ikke skrivebar',
	'EMAIL_CONFIG'	=> 'E-postkonfigurasjon',
	'PACKAGE_VERSION'	=> 'Pakkeversjon installert',
	'UPDATE_INCOMPLETE'	=> 'phpBB-installasjonen din er ikke oppdatert riktig.',
	'UPDATE_INCOMPLETE_MORE'	=> 'Vennligst les informasjonen nedenfor for å fikse denne feilen.',
	'UPDATE_INCOMPLETE_EXPLAIN'	=> '<h1>Ufullført oppdatering</h1>

		<p>Vi har lagt merke til at den siste oppdateringen av phpBB-installasjonen ikke er fullført. <a href="%1$s" title="%1$s">Database oppdaterer</a>, sikre <em>Bare oppdatere databasen</em> er valgt og klikk på <strong>Sending</strong>Ikke glem å slette "installer" -mappen etter at du har oppdatert databasen med suksess.</p>',
	'UPGRADE_INSTRUCTIONS'	=> 'En ny funksjonsutgivelse <strong>%1$s</strong> Les gjerne. <a href="%2$s" title="%2$s"><strong>kunngjøringen om utgivelse</strong></a> for å lære om hva det har å tilby, og hvordan å oppgradere.',
	'SERVER_CONFIG'	=> 'Serverkonfigurasjon',
	'SCRIPT_PATH'	=> 'Skriptbane',
	'SCRIPT_PATH_EXPLAIN'	=> 'Banen hvor phpBB finnes, relativt til domenenavnet, f.eks. <samp>/phpBB3</samp>.',
	'CONFIG_BOARD_EMAIL_SIG'	=> 'Med hilsen fra ledelsen',
	'CONFIG_SITE_DESC'	=> 'En kort tekst som beskriver forumet',
	'CONFIG_SITENAME'	=> 'dittdomene.com',
	'DEFAULT_INSTALL_POST'	=> '<t>Dette er et eksempelpost i din phpBB3 installasjon. Alt ser ut til å fungere. Du kan slette dette innlegget hvis du vil og fortsette å sette opp forumet ditt. Under installasjonsprosessen blir din første kategori og ditt første forum tildelt et passende sett med tillatelser for de forhåndsdefinerte brukergrupper administratorer, bots, globale moderatorer, gjester, registrerte brukere og registrerte COPPA-brukere. Hvis du også velger å slette din første kategori og ditt første forum, glem ikke å tildele tillatelser for alle disse brukergrupper for alle nye kategorier og fora du oppretter. Det anbefales å omnavne din første kategori og ditt første forum og kopiere tillatelser fra disse mens du oppretter nye kategorier og fora. Ha det gøy!</t>',
	'FORUMS_FIRST_CATEGORY'	=> 'Din første kategori',
	'FORUMS_TEST_FORUM_DESC'	=> 'Beskrivelse av ditt første forum.',
	'FORUMS_TEST_FORUM_TITLE'	=> 'Ditt første forum',
	'RANKS_SITE_ADMIN_TITLE'	=> 'Systemadministrator',
	'REPORT_WAREZ'	=> 'Innlegget inneholder lenker til ulovlig eller piratkopiert programvare.',
	'REPORT_SPAM'	=> 'Det rapporterte innlegg har kun til hensikt å annonsere for et system eller et produkt.',
	'REPORT_OFF_TOPIC'	=> 'Det rapporterte innlegget holder seg ikke til emnet.',
	'REPORT_OTHER'	=> 'Det rapporterte innlegget passer ikke inn i noen andre kategorier, bruk feltet for ytterligere informasjon.',
	'SMILIES_ARROW'	=> 'Pil',
	'SMILIES_CONFUSED'	=> 'Forvirret',
	'SMILIES_COOL'	=> 'Kul',
	'SMILIES_CRYING'	=> 'Gråtende eller svært trist',
	'SMILIES_EMARRASSED'	=> 'Flau',
	'SMILIES_EVIL'	=> 'Ond eller sint',
	'SMILIES_EXCLAMATION'	=> 'Utrop',
	'SMILIES_GEEK'	=> 'Geek',
	'SMILIES_IDEA'	=> 'Idé',
	'SMILIES_LAUGHING'	=> 'Ler',
	'SMILIES_MAD'	=> 'Sint',
	'SMILIES_MR_GREEN'	=> 'Herr grønn',
	'SMILIES_NEUTRAL'	=> 'Nøytral',
	'SMILIES_QUESTION'	=> 'Spørsmål',
	'SMILIES_RAZZ'	=> 'Geip',
	'SMILIES_ROLLING_EYES'	=> 'Himler med øynene',
	'SMILIES_SAD'	=> 'Trist',
	'SMILIES_SHOCKED'	=> 'Sjokkert',
	'SMILIES_SMILE'	=> 'Smil',
	'SMILIES_SURPRISED'	=> 'Overrasket',
	'SMILIES_TWISTED_EVIL'	=> 'Rablende ond',
	'SMILIES_UBER_GEEK'	=> 'Übergeek',
	'SMILIES_VERY_HAPPY'	=> 'Svært glad',
	'SMILIES_WINK'	=> 'Blunk',
	'TOPICS_TOPIC_TITLE'	=> 'Velkommen til phpBB3',
	'MENU_OVERVIEW'	=> 'Oversikt',
	'MENU_INTRO'	=> 'Introduksjon',
	'MENU_LICENSE'	=> 'Lisens',
	'MENU_SUPPORT'	=> 'Support',
	'TASK_CREATE_CONFIG_FILE'	=> 'Å opprette konfigurasjonsfil',
	'TASK_ADD_CONFIG_SETTINGS'	=> 'Legg til konfigurasjonsinnstillinger',
	'TASK_ADD_DEFAULT_DATA'	=> 'Legg til standardinnstillinger i databasen',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Å opprette database skjemapil',
	'TASK_SETUP_DATABASE'	=> 'Innstilling av databaser',
	'TASK_CREATE_TABLES'	=> 'Skape tabeller',
	'TASK_ADD_AI_CRAWLERS'	=> 'Registrering av AI-crawler',
	'TASK_ADD_BOTS'	=> 'Registrering av roboter',
	'TASK_ADD_LANGUAGES'	=> 'Installering av tilgjengelige språk',
	'TASK_ADD_MODULES'	=> 'Installering av moduler',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Å opprette søkindex',
	'TASK_INSTALL_EXTENSIONS'	=> 'Installering av pakket utvidelse',
	'TASK_NOTIFY_USER'	=> 'Sending av melding e-post',
	'TASK_POPULATE_MIGRATIONS'	=> 'Befolkningsmigrasjoner',
	'INSTALLER_FINISHED'	=> 'Installeren er ferdig med suksess.',
	'MODULE_NOT_FOUND'	=> 'Modul ikke funnet',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'En modul kunne ikke bli funnet fordi tjenesten, %s, er ukjent.',
	'TASK_NOT_FOUND'	=> 'Oppgave ikke funnet',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'En oppgave kunne ikke bli funnet fordi tjenesten, %s, er ukjent.',
	'SKIP_MODULE'	=> 'Skip %s modul',
	'SKIP_TASK'	=> 'Skip %s oppgave',
	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Alle installasjonsoppgaver bør starte med installer',
	'TASK_CLASS_NOT_FOUND'	=> 'Installer oppgave tjeneste definisjon er ugyldig. Tjeneste navn %1$s gitt, den forventede klasse navneplassen er %2$s for det. For mer informasjon se dokumentasjonen av task_interface.',
	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Installerkonfigureringsfilen er ikke skrivbar.',
	'CLI_INSTALL_BOARD'	=> 'Installere phpBB',
	'CLI_UPDATE_BOARD'	=> 'Oppdatere phpBB',
	'CLI_INSTALL_SHOW_CONFIG'	=> 'Vis konfigurasjonen som vil bli brukt',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validerer en konfigurasjonsfil',
	'CLI_CONFIG_FILE'	=> 'Konfigureringsfil til bruk',
	'MISSING_FILE'	=> 'Kan ikke få tilgang til fil %1$s',
	'MISSING_DATA'	=> 'Konfigurasjonsfil mangler data eller kan inneholde ugyldige innstillinger.',
	'INVALID_YAML_FILE'	=> 'Kan ikke analysere YAML fil %1$s',
	'CONFIGURATION_VALID'	=> 'Konfigurasjonsfilen er gyldig',
	'UPDATE_INSTALLATION'	=> 'Oppdater phpBB-installasjonen',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Med dette alternativet er det mulig å oppdatere phpBB installasjonen til den nyeste versjonen.<br />I løpet av prosessen vil alle filene dine bli sjekket for deres integritet.<br /><br />Dateioppdateringen kan gjøres på to forskjellige måter.</p><h2>Manuell oppdatering</h2><p>Med denne oppdateringen bare laste ned din personlige sett av endret filer for å sikre at du ikke mister filmodifikasjoner du kan ha gjort. Etter å ha lastet ned denne pakken må du manuelt laste opp filene til deres riktige posisjon under din phpBB rot katalog. Når du er ferdig, kan du gjøre filkontrollfasen igjen for å se om du flyttet filene til deres riktige plassering.</p><h2>Avanceret oppdatering med FTP</h2><p>Denne metoden er lik den første, men uten behov for å laste ned de endret filene og laste dem opp på egen hånd. Dette vil bli gjort for deg. For å bruke denne metoden må du vite dine FTP-loginopplysninger siden du vil bli bedt om dem. Når du er ferdig vil du bli omdirigert til filkontrollen igjen for å sikre at alt er oppdatert riktig.<br /><br />',
	'UPDATE_INSTRUCTIONS'	=> '

		<h1>Utstedelseserklæring</h1>

		<p>Vennligst les utgivelsesmeldingen for den nyeste versjonen før du fortsetter oppdateringsprosessen din, det kan inneholde nyttig informasjon. Det inneholder også full nedlasting lenker samt endring log.</p>

		<br />

		<h1>Hvordan oppdatere installasjonen med Full Package</h1>

		<p>Den anbefalte måten å oppdatere installasjonen din på er å bruke hele pakken. Hvis phpBB-filer har blitt endret i installasjonen din, kan du bruke den avanserte oppdateringspakken for ikke å miste disse endringene. Du kan også oppdatere installasjonen din ved hjelp av de andre metodene som er oppført i INSTALL.html-dokumentet.</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Backup alle bord filer og databasen.</strong></li>
			<li>Gå til <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com laster ned siden</a> og laste ned det siste "Full Package" arkivet.</li>
			<li>Unpack arkivet.</li>
			<li>Fjern (fjern) <code class="inline">config.php</code> og de <code class="inline">/images</code>, <code class="inline">/store</code> og <code class="inline">/files</code> mapper <em>fra pakken</em> (ikke ditt nettsted).</li>
			<li>Gå til AVS-innstillingene og sørg for at prosilver er satt som standardstil.</li>
			<li>Slette <code class="inline">/vendor</code> og <code class="inline">/cache</code> mapper fra root-mappen på hosten.</li>
			<li>Gjennom FTP eller SSH laste opp de resterende filene og mapper (dvs. de resterende innholdene i phpBB3-mappen) til rotmappen i din bordinstallasjon på serveren, overskriver de eksisterende filene. <code class="inline">/ext</code> mappe når du laster opp det nye phpBB3-innholdet.)</li>
			<li><strong><a href="%1$s" title="%1$s">Start nå oppdateringsprosessen ved å vise nettleseren til installasjonsmappen</a>.</strong></li>
			<li>Følg trinnene for å oppdatere databasen og la den kjøre til fullført.</li>
			<li>Gjennom FTP eller SSH slette <code class="inline">/install</code> mappe fra roten av brettinstallingen din.<br><br></li>
		</ol>

		<p>Du har nå et nytt oppdatert bord som inneholder alle dine brukere og innlegg. Følg oppgaver:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Oppdater språkpakken din</li>
			<li>Oppdater stilen din<br><br></li>
		</ul>

		<h1>Hvordan oppdatere installasjonen med Advanced Update Package</h1>

		<p>Den avanserte oppdateringspakken anbefales bare til ekspertbrukere i tilfelle sentrale phpBB-filer har blitt endret i installasjonen din. Du kan også oppdatere installasjonen din ved hjelp av metodene som er oppført i INSTALL.html-dokumentet.</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå til <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com laster ned siden</a> og laste ned "Advanced Update Package" arkivet.</li>
			<li>Unpack arkivet.</li>
			<li>Last opp de komplette ukomprimerte "install" og "selger" mapper til din phpBB rot katalog (hvor din config.php fil er).<br><br></li>
		</ol>

		<p>Når du har lastet opp forumet ditt vil være offline for vanlige brukere på grunn av at den installasjonsdirektøren du lastet opp nå er til stede.<br /><br />
		<strong><a href="%1$s" title="%1$s">Start nå oppdateringsprosessen ved å vise nettleseren til installasjonsmappen</a>.</strong><br />
		<br />
		Du vil deretter bli ledet gjennom oppdateringsprosessen. Du vil bli varslet når oppdateringen er fullført.
		</p>
	',
	'UPDATE_TYPE'	=> 'Typ av oppdatering som skal utføres',
	'UPDATE_TYPE_ALL'	=> 'Oppdatere filsystemet og databasen',
	'UPDATE_TYPE_DB_ONLY'	=> 'Bare oppdatere databasen',
	'UPDATE_FILE_METHOD_TITLE'	=> 'Filopdateringsmetoder',
	'UPDATE_FILE_METHOD'	=> 'Fileroppdateringsmetode',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Last ned modifiserte filer i et arkiv',
	'UPDATE_FILE_METHOD_FTP'	=> 'Oppdatere filer via FTP (Automatisk)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Oppdatere filer via direkte filtilgang (Automatisk)',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Velg arkivformat for nedlasting',
	'FTP_SETTINGS'	=> 'FTP-innstillinger',
	'UPDATE_FILES_NOT_FOUND'	=> 'Ingen gyldig oppdatering katalog ble funnet, vær så snill å sørge for at du lastet opp de relevante filene.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versjonen din er oppdatert. Det er ikke nødvendig å kjøre oppdateringsverktøyet. Hvis du vil kjøre en integritetskontroll av filene, sørger du for at du har lastet opp de riktige oppdateringsfilene.',
	'OLD_UPDATE_FILES'	=> 'Oppdateringsfilene er foreldet. Oppdateringsfilene som ble funnet, er for å oppdatere fra phpBB %1$s til phpBB %2$s, men den nyeste versjonen av phpBB er %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'	=> 'Oppdateringsfilene som ble funnet, er inkompatible med den installerte versjonen. Den installerte versjonen er %1$s, og oppdateringsfilen er for å oppdatere phpBB %2$s til %3$s.',
	'STAGE_UPDATE_FILES'	=> 'Oppdater filer',
	'UPDATE_CHECK_FILES'	=> 'Sjekk filer for oppdatering',
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Dateien differ ikke åpnet %s.',
	'UPDATE_FILE_DIFF'	=> 'Diffing endret filer',
	'ALL_FILES_DIFFED'	=> 'Alle modifiserte filer har blitt differensiert.',
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Oppdater filer',
	'DOWNLOAD'	=> 'Last ned',
	'DOWNLOAD_CONFLICTS'	=> 'Last ned merger konflikter arkiv',
	'DOWNLOAD_CONFLICTS_EXPLAIN'	=> 'Søk etter &lt;&lt;&lt; for å finne konflikter',
	'DOWNLOAD_UPDATE_METHOD'	=> 'Last ned arkiv med endrede filer',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Når du har lastet ned, bør du avpakke arkivet. Du finner de modifiserte filene du trenger å laste opp til din phpBB rotmappe i det.',
	'FILE_ALREADY_UP_TO_DATE'	=> 'Filen er allerede oppdatert.',
	'FILE_DIFF_NOT_ALLOWED'	=> 'Filen kan ikke diffes.',
	'FILE_USED'	=> 'Informasjon brukt fra',
	'FILES_CONFLICT'	=> 'Konfliktfiler',
	'FILES_CONFLICT_EXPLAIN'	=> 'Følgende filer er endret og representerer ikke de opprinnelige filene fra den gamle versjonen. phpBB har faststlått at disse filene skaper konflikter hvis de forsøkes slått sammen. Undersøk konfliktene og prøv å løse dem manuelt eller fortsett oppdateringen med valgte sammenslåingsmetode. Hvis du løser konfliktene manuelt, bør du kontrollere filene på nytt etter at du har endret dem. Du kan også velge foretrukket sammenslåingsmetode for hver enkelt fil. Den første vil gi deg en fil hvor linjene med konflikt fra den gamle filen vil gå tapt, den andre vil gi deg en der linjene fra den nye filen vil gå tapt.',
	'FILES_DELETED'	=> 'Slettede filer',
	'FILES_DELETED_EXPLAIN'	=> 'Følgende filer finnes ikke i den nye versjonen. Disse filene må slettes fra installasjonen.',
	'FILES_MODIFIED'	=> 'Endrede filer',
	'FILES_MODIFIED_EXPLAIN'	=> 'Følgende filer er endret og representerer ikke de opprinnelige filene fra den gamle versjonen. Den oppdaterte filen vil bli en kombinasjon av endringene og den nye filen.',
	'FILES_NEW'	=> 'Nye filer',
	'FILES_NEW_EXPLAIN'	=> 'Følgende filer finnes ikke for øyeblikket i installasjonen. Disse filene vil bli lagt til i installasjonen.',
	'FILES_NEW_CONFLICT'	=> 'Nye filer med konflikt',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Følgende filer er nye for den nyeste versjonen, men det er fastslått at det allerede finnes en fil med samme navn på samme sted. Denne filen vil bli overskrevet av den nye filen.',
	'FILES_NOT_MODIFIED'	=> 'Uendrede filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Følgende filer er uendret og representerer de opprinnelige phpBB-filene fra den versjonen du vil oppdatere fra.',
	'FILES_UP_TO_DATE'	=> 'Allerede oppdaterte filer',
	'FILES_UP_TO_DATE_EXPLAIN'	=> 'Følgende filer er allerede oppdatert og trenger ikke å oppdateres.',
	'FILES_VERSION'	=> 'Filer versjon',
	'TOGGLE_DISPLAY'	=> 'Vis/skjul filliste',
	'UPDATE_UPDATING_FILES'	=> 'Oppdatering av filer',
	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Filopdateren %1$s har feilet. Installeren vil prøve å falle tilbake til %2$s.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Fileroppdateren mislyktes.',
	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Fortsett oppdateringsprosessen',
	'UPDATE_RECHECK_UPDATE_FILES'	=> 'Kontroller filer på nytt',
	'STAGE_UPDATE_DATABASE'	=> 'Oppdater database',
	'INLINE_UPDATE_SUCCESSFUL'	=> 'Databasen oppdatering var vellykket.',
	'TASK_UPDATE_EXTENSIONS'	=> 'Oppdatering av utvidelser',
	'CONVERT_NOT_EXIST'	=> 'Den angitte konvertereren finnes ikke.',
	'DEV_NO_TEST_FILE'	=> 'Det er ikke angitt noen verdi for variabelen test_file i konvertereren. Hvis du er en bruker av denne konvertereren, skal du ikke se denne feilen, og vi ber om at du informerer konvertererens opphavsmann om denne meldingen. Hvis du er konvertererens opphavsmann, må du angi navnet på en fil som finnes på kildesystemet, slik at det er mulig å bekrefte banen til den.',
	'COULD_NOT_COPY'	=> 'Kan ikke kopiere filen <strong>%1$s</strong> til <strong>%2$s</strong><br><br>Kontroller at målmappen finnes og at webserveren kan skrive til den.',
	'COULD_NOT_FIND_PATH'	=> 'Finner ikke banen til det tidligere systemet. Kontroller innstillingene og prøv igjen.<br />» %s ble angitt som kildebane.',
	'CONFIG_PHPBB_EMPTY'	=> 'phpBB3-konfigurasjonsvariabelen for «%s» er tom.',
	'MAKE_FOLDER_WRITABLE'	=> 'Kontroller at denne mappen finnes og kan skrives til av webserveren, og prøv igjen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'	=> 'Kontroller at disse mappene finnes og kan skrives til av webserveren, og prøv igjen: <br />»<strong>%s</strong>.',
	'INSTALL_TEST'	=> 'Test på nytt',
	'NO_TABLES_FOUND'	=> 'Finner ingen tabeller.',
	'TABLES_MISSING'	=> 'Finner ikke disse tabellene<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'	=> 'Kontroller tabellprefikset og prøv igjen.',
	'CATEGORY'	=> 'Kategori',
	'CONTINUE_CONVERT'	=> 'Fortsett konvertering',
	'CONTINUE_CONVERT_BODY'	=> 'Et tidligere konverteringsforsøk er funnet. Du kan nå velge om du vil starte en ny konvertering eller fortsette det tidligere forsøket.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONTINUE_OLD_CONVERSION'	=> 'Fortsett tidligere startet konvertering',
	'POST_ID'	=> 'Innleggs-ID',
	'SUB_INTRO'	=> 'Introduksjon',
	'CONVERT_INTRO'	=> 'Velkommen til phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'	=> 'Herfra kan du importere data fra andre (installerte) forumsystemer. Listen nedenfor viser alle konverteringsmoduler som er tilgjengelig for øyblikket. Hvis det ikke vises noen konverterer for forumprogramvaren du vil konvertere fra, kan du se på systemet vårt, om flere konverteringsmoduler er blitt tilgjengelig for nedlasting.',
	'AVAILABLE_CONVERTORS'	=> 'Tilgjengelige konvertere',
	'NO_CONVERTORS'	=> 'Ingen konverterere er tilgjengelig for bruk.',
	'CONVERT_OPTIONS'	=> 'Alternativer',
	'SOFTWARE'	=> 'Systemprogramvare',
	'VERSION'	=> 'Versjon',
	'CONVERT'	=> 'Konverter',
	'STAGE_SETTINGS'	=> 'Innstillinger',
	'TABLE_PREFIX_SAME'	=> 'Tabellprefikset må være det som brukes av programvaren du konverterer fra.<br />» Det angitte tabellprefikset var %s.',
	'DEFAULT_PREFIX_IS'	=> 'Konvertereren finnes ikke tabeller med det angitte prefikset. Kontroller at du har angitt korrekte detaljer for systemet du konverterer fra. Standard tabellprefiks for %1$s er <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'	=> 'Angi konverteringsalternativer',
	'FORUM_PATH'	=> 'Systembane',
	'FORUM_PATH_EXPLAIN'	=> 'Dette er den <strong>relative</strong> banen på filsystemet til det tidligere systemet, fra <strong>roten av denne phpBB3-installasjonen</strong>.',
	'REFRESH_PAGE'	=> 'Oppdater siden for å fortsette konverteringen',
	'REFRESH_PAGE_EXPLAIN'	=> 'Hvis dette er angitt til ja, vil konvertereren oppdatere siden for å fortsette konverteringen når et trinn er ferdig. Hvis dette er første konvertering, og formålet er testing, anbefaler vi at du angir dette til Nei.',
	'STAGE_IN_PROGRESS'	=> 'Konvertering pågår',
	'AUTHOR_NOTES'	=> 'Forfatterens merknader<br />» %s',
	'STARTING_CONVERT'	=> 'Starter konverteringsprosessen',
	'CONFIG_CONVERT'	=> 'Konverterer konfigurasjonen',
	'DONE'	=> 'Ferdig',
	'PREPROCESS_STEP'	=> 'Kjører forberedende funksjoner/spørringer',
	'FILLING_TABLE'	=> 'Fyller tabellen <strong>%s</strong>',
	'FILLING_TABLES'	=> 'Fyller tabeller',
	'DB_ERR_INSERT'	=> 'Feil ved behandling av <code>INSERT</code>-spørring.',
	'DB_ERR_LAST'	=> 'Feil ved behandling av <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'	=> 'Feil ved behandling av <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Feil ved kjøring av <var>query_first</var>, %s («%s»).',
	'DB_ERR_SELECT'	=> 'Feil ved kjøring av <code>SELECT</code>-spørring.',
	'STEP_PERCENT_COMPLETED'	=> 'Trinn <strong>%d</strong> av <strong>%d</strong>',
	'FINAL_STEP'	=> 'Behandle siste trinn',
	'SYNC_FORUMS'	=> 'Starter synkronisering av fora',
	'SYNC_POST_COUNT'	=> 'Synkroniserer post_counts',
	'SYNC_POST_COUNT_ID'	=> 'Synkroniserer post_counts fra <var>entry</var> %1$s til %2$s.',
	'SYNC_TOPICS'	=> 'Starter synkronisering av emner',
	'SYNC_TOPIC_ID'	=> 'Synkroniserer emner fra <var>topic_id</var> %1$s til %2$s.',
	'PROCESS_LAST'	=> 'Behandler siste setning',
	'UPDATE_TOPICS_POSTED'	=> 'Genererer informasjon om emner som er lagt inn',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Det oppstoe en feil ved generering av informasjon om emner som er lagt inn. Du kan prøve dette trinnet på nytt i ACP etter at konverteringsprosessen er fullført.',
	'CONTINUE_LAST'	=> 'Fortsett med siste setning',
	'CLEAN_VERIFY'	=> 'Rydder opp og kontrollerer den endelige strukturen',
	'NOT_UNDERSTAND'	=> 'Forstår ikke %s #%d, tabell %s («%s»)',
	'NAMING_CONFLICT'	=> 'Navnekonflikt: %s og %s er begge aliaser<br /><br />%s',
	'CONVERT_COMPLETE'	=> 'Konvertering fullført',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nå konvertert forumet ditt til phpBB 3.3. <a href="../">få tilgang til forumet ditt</a>Husk at hjelp til å bruke phpBB er tilgjengelig online via <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Dokumentasjon</a> og <a href="https://www.phpbb.com/community/viewforum.php?f=661">Støtteforum</a>.',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> er det uniforme brukernavnet til:',
	'COLLIDING_USER'	=> '» bruker-ID: <strong>%d</strong> brukernavn: <strong>%s</strong> (%d innlegg)',
	'COLLIDING_USERNAMES_FOUND'	=> 'Det ble funnet brukernavnkonflikter på det gamle systemet. For at konverteringen skal kunne fullføres, må du slette eller bytte navn på disse brukerne, slik at det bare er én bruker på det gamle systemet for hvert uniformerte brukernavn.',
	'CONV_ERR_FATAL'	=> 'Kritisk konverteringsfeil',
	'CONV_ERROR_ATTACH_FTP_DIR'	=> 'FTP-opplasting for vedlegg er aktivert på det gamle systemet. Deaktiver alternativet for FTP-opplasting og kontroller at det er angitt en gyldig opplastingsmappe. Kopier deretter alle vedleggsfiler til denne nye, webtilgjengelige mappen. Når du er ferdig med dette, starter du konvertereren på nytt.',
	'CONV_ERROR_CONFIG_EMPTY'	=> 'Ingen konfigurasjonsinformasjon er tilgjengelig for konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'	=> 'Kan ikke hente informasjon om forumtilgang.',
	'CONV_ERROR_GET_CATEGORIES'	=> 'Kan ikke hente kategorier.',
	'CONV_ERROR_GET_CONFIG'	=> 'Kan ikke hente systemets konfigurasjon.',
	'CONV_ERROR_COULD_NOT_READ'	=> 'Kan ikke nå/lese «%s».',
	'CONV_ERROR_GROUP_ACCESS'	=> 'Kan ikke hente informasjon om gruppeautentisering.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsekvenser i gruppetabellen ble oppdaget i add_bots() - du må legge til alle spesialgrupper hvis du gjør det manuelt.',
	'CONV_ERROR_INSERT_BOT'	=> 'Kan ikke sette inn bot i brukertabellen.',
	'CONV_ERROR_INSERT_BOTGROUP'	=> 'Kan ikke sette inn bot i bottabellen.',
	'CONV_ERROR_INSERT_USER_GROUP'	=> 'Kan ikke sette inn bruker i bruker/gruppe-tabellen.',
	'CONV_ERROR_MESSAGE_PARSER'	=> 'Feil i meldingsparser',
	'CONV_ERROR_NO_AVATAR_PATH'	=> 'Merknad til utvikler: you must specify $convertor[\'avatar_path\'] to use %s.',
	'CONV_ERROR_NO_FORUM_PATH'	=> 'Den relative banen til kildesystemet er ikke angitt.',
	'CONV_ERROR_NO_GALLERY_PATH'	=> 'Merknad til utvikler: you must specify $convertor[\'avatar_gallery_path\'] to use %s.',
	'CONV_ERROR_NO_GROUP'	=> 'Finner ikke gruppen «%1$s» i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'	=> 'Merknad til utvikler: you must specify $convertor[\'ranks_path\'] to use %s.',
	'CONV_ERROR_NO_SMILIES_PATH'	=> 'Merknad til utvikler: you must specify $convertor[\'smilies_path\'] to use %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'	=> 'Merknad til utvikler: you must specify $convertor[\'upload_path\'] to use %s.',
	'CONV_ERROR_PERM_SETTING'	=> 'Kan ikke sette inn/oppdatere tillatelsesinnstilling.',
	'CONV_ERROR_PM_COUNT'	=> 'Kan ikke velge PM-antall i mappe.',
	'CONV_ERROR_REPLACE_CATEGORY'	=> 'Kan ikke sette inn nytt forum som erstatter gammel kategori.',
	'CONV_ERROR_REPLACE_FORUM'	=> 'Kan ikke sette inn nytt forum som erstatter gammelt forum.',
	'CONV_ERROR_USER_ACCESS'	=> 'Kan ikke hente informasjon om brukerautentisering.',
	'CONV_ERROR_WRONG_GROUP'	=> 'Feil gruppe «%1$s» definert i %2$s.',
	'CONV_OPTIONS_BODY'	=> 'Denne siden samler inn data som kreves for å få tilgang til kildesystemet. Skriv inn databasedetaljene for det tidligere systemet – konverteren vil ikke endre noe i databasen som angis nedenfor. Kildesystemet bør være deaktivert for å sikre at konverteringen blir konsekvent.',
	'CONV_SAVED_MESSAGES'	=> 'Lagrede meldinger',
	'PRE_CONVERT_COMPLETE'	=> 'Alle forberedelsestrinnene til konverteringen er fullført uten feil. Du kan nå starte den faktiske konverteringsprosessen. Merk at du kan måtte gjøre og justere flere ting manuelt. Etter konverteringen bør du spesielt kontrollere de tilordnede tillatlesene, gjenoppbygge søkeindeksen, som ikke konverteres, og også sjekke at filene er kopiert riktig, for eksempel avatarer og smilefjes.',
));
