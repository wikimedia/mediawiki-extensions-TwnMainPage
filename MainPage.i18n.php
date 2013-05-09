<?php

$messages = array();

/** English
 * @author Nike
 */
$messages['en'] = array(
	'twnmp-desc' => 'Provides the translatewiki.net main page',
	'twnmp-mainpage' => 'Main page',

	'twnmp-s-translators' => 'Translators',
	'twnmp-s-projects' => 'Projects',
	'twnmp-s-languages' => 'Languages',
	'twnmp-s-messages' => 'Messages to translate',

	'twnmp-bannerwho' => 'Image $1',

	'twnmp-show-more-projects' => 'Show more projects...',
	'twnmp-brand-motto' => 'Open source translation community',
	'twnmp-login' => 'Log in',
	'twnmp-search-placeholder' => 'Find and fix translations',
	'twnmp-search-button' => 'Find',
	'twnmp-search-choose-project' => 'Choose a project to translate',
	'twnmp-translate-link' => 'Translate',
	'twnmp-proofread-link' => 'Proofread',
	'twnmp-translate-button' => 'Translate',
	'twnmp-proofread-button' => 'Proofread',

	'twnmp-your-translations-stats' => 'Your translation statistics',
	'twnmp-your-view-language-stats' => 'View language statistics',
	'twnmp-translations-per-month' => 'Translations/month',
	'twnmp-reviews-per-month' => 'Reviews/month',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Ranked}} $2 of $3 translators<br />in $4',

	'twnmp-bottom-help' => 'Help',
	'twnmp-bottom-special-pages' => 'Special pages',
	'twnmp-bottom-languages-supported' => 'Supported languages',
	'twnmp-bottom-about' => 'About',
	'twnmp-signup-username-placeholder' => 'Username',
	'twnmp-signup-password-placeholder' => 'Password',
	'twnmp-signup-email-placeholder' => 'Email',
	'twnmp-create-account-button' => 'Create account',

	'twnmp-become-translator' => 'Become a translator',
	'twnmp-choose-languages-you-know' => 'Choose languages you know',
	'twnmp-choose-another-language' => 'Choose another language...',
	'twnmp-choose-fill-account-details' => 'Fill in your account details',

	'twnmp-stats-number-k' => '$1k',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Nike
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'twnmp-desc' => '{{desc|name=Twn Main Page}}',
	'twnmp-mainpage' => '{{doc-special|MainPage|unlisted=1}}
{{Identical|Main page}}',
	'twnmp-s-translators' => 'Appears in a box on the main page.

Preceded by the number of the translators at the site.

See example: [[Special:MainPage]]
{{Identical|Translator}}',
	'twnmp-s-projects' => 'Appears in a box on the main page.

Preceded by the number of the projects supported at the site.

See example: [[Special:MainPage]]
{{Identical|Project}}',
	'twnmp-s-languages' => 'Appears in a box on the main page.

Preceded by the number of the languages supported at the site.

See example: [[Special:MainPage]]
{{Identical|Language}}',
	'twnmp-s-messages' => 'Appears in a box on the main page.

Preceded by the number of the messages (strings) to translate at the site.

See example: [[Special:MainPage]]',
	'twnmp-bannerwho' => 'Banner image attribution. Parameters:
* $1 - usually contains the name of the photographer and license abbreviation. e.g. CC-BY Jack1234

See example: [[Special:MainPage]]',
	'twnmp-show-more-projects' => 'Shown in large font in a box at the bottom of the main page next to boxes with icons and names of other projects.',
	'twnmp-brand-motto' => 'A motto shown under the site name at the top of the main page.',
	'twnmp-login' => 'A link for logging in.
{{Identical|Log in}}',
	'twnmp-search-placeholder' => 'A placeholder for the search box on the main page.',
	'twnmp-search-button' => 'A label for the search button on the main page.
{{Identical|Find}}',
	'twnmp-search-choose-project' => 'A heading for the project icons buttons section.',
	'twnmp-translate-link' => 'A link that appears at the bottom of a box with the project icon near {{msg-mw|twnmp-proofread-link}}.
{{Identical|Translate}}',
	'twnmp-proofread-link' => 'A link that appears at the bottom of a box with the project icon near {{msg-mw|twnmp-translate-link}}.
{{Identical|Proofread}}',
	'twnmp-translate-button' => "A label for the button that appears near the user's translation statistics.
Pressing the button brings the user to the translation editor. Parallel to {{msg-mw|twnmp-proofread-button}}.
{{Identical|Translate}}",
	'twnmp-proofread-button' => "A label for the button that appears near the user's translation statistics.
Pressing the button brings the user to the translation editor in proofread mode. Parallel to {{msg-mw|twnmp-translate-button}}.
{{Identical|Proofread}}",
	'twnmp-your-translations-stats' => "A header for the user's translation statistics.

See example: [[Special:MainPage]]",
	'twnmp-your-view-language-stats' => "A link that appears under the user's translation statistics.",
	'twnmp-translations-per-month' => "Appears in the user's statistics box near a number.
Means that the users performs that number of translations every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.",
	'twnmp-reviews-per-month' => "Appears in the user's statistics box near a number.
Means that the users performs that number of review actions every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.",
	'twnmp-translations-translator-ranking' => 'Shown in the "Translate" and "Proofread" boxes in the center of the main page.
Can be broken to two lines. &lt;br /> is a line break. Break it in any way that is natural in your language.
Parameters:
* $1 - the username, which can be used for GENDER.
* $2 - the ranking of this user.
* $3 - the total number of translators into that language.
* $4 - the language name.',
	'twnmp-bottom-help' => 'A link that appears at the bottom of the main page.

The link points to [[Translating:Index]].
{{Identical|Help}}',
	'twnmp-bottom-special-pages' => 'A link that appears at the bottom of the main page.

The link points to [[Special:SpecialPages]].
{{Identical|Special page}}',
	'twnmp-bottom-languages-supported' => 'A link that appears at the bottom of the main page.

The link points to [[Special:SupportedLanguages]].
{{Identical|Supported language}}',
	'twnmp-bottom-about' => 'A link that appears at the bottom of the main page.

The link points to [[Special:MyLanguage/Project:About]].
{{Identical|About}}',
	'twnmp-signup-username-placeholder' => 'A placeholder for the username field in the sign up form.

The field is NOT preceded by a label.

See [[Special:MainPage]] as an anonymous user.
{{Identical|Username}}',
	'twnmp-signup-password-placeholder' => 'A placeholder for the password field in the sign up form.

The field is NOT preceded by a label.

See [[Special:MainPage]] as an anonymous user.
{{Identical|Password}}',
	'twnmp-signup-email-placeholder' => 'A placeholder for the email field in the sign up form.

The field is NOT preceded by a label.

See [[Special:MainPage]] as an anonymous user.
{{Identical|E-mail}}',
	'twnmp-create-account-button' => 'A label for the button that submits the account creation form.
{{Identical|Create account}}',
	'twnmp-become-translator' => 'The top heading to the sign up form. A call to action to sign up to the site.',
	'twnmp-choose-languages-you-know' => 'Used as heading.

Followed by list of auto-detected languages.

See [[Special:MainPage]] as an anonymous user.',
	'twnmp-choose-another-language' => "Used as label for a link to choose a language that doesn't appear in the list.",
	'twnmp-choose-fill-account-details' => 'A heading for the personal details (username, password and email) form.

See [[Special:MainPage]] as an anonymous user.',
	'twnmp-stats-number-k' => '$1 is the number of the thousands of messages or users on the site.
It can be a fraction, for example "4.9".
The message should be short, to fit in the box. If you have to translate it and cannot make it short, notify [[Support]].
If "k" is a good thousands marker in your language, do not translate this message.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'twnmp-desc' => 'Verskaf die tuisblad van translatewiki.net',
	'twnmp-mainpage' => 'Tuisblad',
	'twnmp-s-translators' => 'Vertalers',
	'twnmp-s-projects' => 'Projekte',
	'twnmp-s-languages' => 'Tale',
	'twnmp-s-messages' => 'Boodskappe om te vertaal',
	'twnmp-bannerwho' => 'Beeld $1',
	'twnmp-show-more-projects' => 'Wys meer projekte...',
	'twnmp-brand-motto' => 'Oopbron vertaalgemeenskap',
	'twnmp-login' => 'Meld aan',
	'twnmp-search-placeholder' => 'Vind en korrigeer vertalings',
	'twnmp-search-button' => 'Vind',
	'twnmp-search-choose-project' => "Soek 'n projek om te vertaal",
	'twnmp-translate-link' => 'Vertaal',
	'twnmp-proofread-link' => 'Proeflees',
	'twnmp-translate-button' => 'Vertaal',
	'twnmp-proofread-button' => 'Proeflees',
	'twnmp-your-translations-stats' => 'U vertaalstatistieke',
	'twnmp-your-view-language-stats' => 'Wys taalstatistieke',
	'twnmp-translations-per-month' => 'Vertalings/maand',
	'twnmp-reviews-per-month' => 'Hersienings/maand',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Gelys as}} $2 van $3 vertalers<br />in $4',
	'twnmp-bottom-help' => 'Hulp',
	'twnmp-bottom-special-pages' => 'Spesiale bladsye',
	'twnmp-bottom-languages-supported' => 'Ondersteunde tale',
	'twnmp-bottom-about' => 'Aangaande',
	'twnmp-signup-username-placeholder' => 'Gebruikersnaam',
	'twnmp-signup-password-placeholder' => 'Wagwoord',
	'twnmp-signup-email-placeholder' => 'E-pos',
	'twnmp-create-account-button' => 'Skep gebruiker',
	'twnmp-become-translator' => "Word 'n vertaler",
	'twnmp-choose-languages-you-know' => 'Kies tale wat u ken',
	'twnmp-choose-another-language' => 'Kies ander taal...',
	'twnmp-choose-fill-account-details' => 'Verskaf gebruikersdetails',
	'twnmp-stats-number-k' => '$1k',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Se4598
 */
$messages['de'] = array(
	'twnmp-desc' => 'Stellt die translatewiki.net-Hauptseite zur Verfügung',
	'twnmp-mainpage' => 'Hauptseite',
	'twnmp-s-translators' => 'Übersetzer',
	'twnmp-s-projects' => 'Projekte',
	'twnmp-s-languages' => 'Sprachen',
	'twnmp-s-messages' => 'Nachrichten zum Übersetzen',
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Weitere Projekte anzeigen …',
	'twnmp-brand-motto' => 'Open-Source-Übersetzungsgemeinschaft',
	'twnmp-login' => 'Anmelden',
	'twnmp-search-placeholder' => 'Finde und korrigiere Übersetzungen',
	'twnmp-search-button' => 'Suchen',
	'twnmp-search-choose-project' => 'Wähle ein Projekt zum Übersetzen',
	'twnmp-translate-link' => 'Übersetzen',
	'twnmp-proofread-link' => 'Korrekturlesen',
	'twnmp-translate-button' => 'Übersetzen',
	'twnmp-proofread-button' => 'Korrekturlesen',
	'twnmp-your-translations-stats' => 'Deine Übersetzungsstatistiken',
	'twnmp-your-view-language-stats' => 'Sprachstatistiken ansehen',
	'twnmp-translations-per-month' => 'Übersetzungen pro Monat',
	'twnmp-reviews-per-month' => 'Überprüfungen pro Monat',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rang}} $2 von $3 Übersetzern<br />in der Sprache $4',
	'twnmp-bottom-help' => 'Hilfe',
	'twnmp-bottom-special-pages' => 'Spezialseiten',
	'twnmp-bottom-languages-supported' => 'Unterstützte Sprachen',
	'twnmp-bottom-about' => 'Über',
	'twnmp-signup-username-placeholder' => 'Benutzername',
	'twnmp-signup-password-placeholder' => 'Passwort',
	'twnmp-signup-email-placeholder' => 'E-Mail',
	'twnmp-create-account-button' => 'Benutzerkonto erstellen',
	'twnmp-become-translator' => 'Werde Übersetzer',
	'twnmp-choose-languages-you-know' => 'Wähle Sprachen aus, die du kennst.',
	'twnmp-choose-another-language' => 'Eine andere Sprache auswählen …',
	'twnmp-choose-fill-account-details' => 'Gib die Einzelheiten zu deinem Benutzerkonto ein',
);

/** Finnish (suomi)
 * @author Nike
 */
$messages['fi'] = array(
	'twnmp-desc' => 'translatewiki.netin etusivu',
	'twnmp-mainpage' => 'Etusivu',
	'twnmp-s-translators' => 'kääntäjää',
	'twnmp-s-projects' => 'projektia',
	'twnmp-s-languages' => 'kieltä',
	'twnmp-s-messages' => 'käännettävää viestiä',
	'twnmp-bannerwho' => 'Kuva $1',
	'twnmp-show-more-projects' => 'Lisää projekteja...',
	'twnmp-brand-motto' => 'Avoimen lähdekoodin käännösyhteisö',
	'twnmp-login' => 'Kirjaudu sisään',
	'twnmp-search-placeholder' => 'Etsi ja korjaa käännöksiä',
	'twnmp-search-button' => 'Etsi',
	'twnmp-search-choose-project' => 'Valitse käännettävä projekti',
	'twnmp-translate-link' => 'Käännä',
	'twnmp-proofread-link' => 'Oikolue',
	'twnmp-translate-button' => 'Käännä',
	'twnmp-proofread-button' => 'Oikolue',
	'twnmp-your-translations-stats' => 'Henkilökohtaiset käännöstilastot',
	'twnmp-your-view-language-stats' => 'Näytä kielitilastot',
	'twnmp-translations-per-month' => 'käännöstä/kuukausi',
	'twnmp-reviews-per-month' => 'oikolukua/kuukausi',
	'twnmp-translations-translator-ranking' => 'Sijalla $2/$3 kääntäjistä<br />
kielelle $4', # Fuzzy
	'twnmp-bottom-help' => 'Ohjeet',
	'twnmp-bottom-special-pages' => 'Toimintosivut',
	'twnmp-bottom-languages-supported' => 'Tuetut kielet',
	'twnmp-bottom-about' => 'Tietoja',
	'twnmp-signup-username-placeholder' => 'Käyttäjätunnus',
	'twnmp-signup-password-placeholder' => 'Salasana',
	'twnmp-signup-email-placeholder' => 'Sähköposti',
	'twnmp-create-account-button' => 'Luo tunnus',
	'twnmp-become-translator' => 'Ryhdy kääntäjäksi',
	'twnmp-choose-languages-you-know' => 'Valitse kielet, joita osaat',
	'twnmp-choose-another-language' => 'Lisää toinen kieli...',
	'twnmp-choose-fill-account-details' => 'Syötä tunnuksesi tiedot',
);

/** French (français)
 * @author Gomoko
 * @author Metroitendo
 */
$messages['fr'] = array(
	'twnmp-desc' => 'Fournit la page principale de translatewiki.net',
	'twnmp-mainpage' => 'Accueil',
	'twnmp-s-translators' => 'Traducteurs',
	'twnmp-s-projects' => 'Projets',
	'twnmp-s-languages' => 'Langues',
	'twnmp-s-messages' => 'Messages à traduire',
	'twnmp-bannerwho' => 'Image $1',
	'twnmp-show-more-projects' => 'Afficher plus de projets...',
	'twnmp-brand-motto' => 'Communauté de traduction en source libre',
	'twnmp-login' => 'Se connecter',
	'twnmp-search-placeholder' => 'Rechercher et corriger des traductions',
	'twnmp-search-button' => 'Rechercher',
	'twnmp-search-choose-project' => 'Choisir un projet à traduire',
	'twnmp-translate-link' => 'Traduire',
	'twnmp-proofread-link' => 'Relecture',
	'twnmp-translate-button' => 'Traduire',
	'twnmp-proofread-button' => 'Corrigée',
	'twnmp-your-translations-stats' => 'Vos statistiques de traduction',
	'twnmp-your-view-language-stats' => 'Afficher les statistiques de langue',
	'twnmp-translations-per-month' => 'Traductions/mois',
	'twnmp-reviews-per-month' => 'Relectures/mois',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Classé|Classée}} $2 sur $3 traducteurs<br />en $4',
	'twnmp-bottom-help' => 'Aide',
	'twnmp-bottom-special-pages' => 'Pages spéciales',
	'twnmp-bottom-languages-supported' => 'Langues supportées',
	'twnmp-bottom-about' => 'À propos de',
	'twnmp-signup-username-placeholder' => 'Nom d’utilisateur',
	'twnmp-signup-password-placeholder' => 'Mot de passe',
	'twnmp-signup-email-placeholder' => 'Courriel',
	'twnmp-create-account-button' => 'Créer un compte',
	'twnmp-become-translator' => 'Devenir un traducteur',
	'twnmp-choose-languages-you-know' => 'Choisir les langues que vous connaissez',
	'twnmp-choose-another-language' => 'Choisir une autre langue…',
	'twnmp-choose-fill-account-details' => 'Compléter tous les détails de votre compte',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'twnmp-desc' => 'Proporciona a páxina principal de translatewiki.net',
	'twnmp-mainpage' => 'Portada',
	'twnmp-s-translators' => 'tradutores',
	'twnmp-s-projects' => 'proxectos',
	'twnmp-s-languages' => 'linguas',
	'twnmp-s-messages' => 'mensaxes a traducir',
	'twnmp-bannerwho' => 'Imaxe $1',
	'twnmp-show-more-projects' => 'Mostrar máis proxectos...',
	'twnmp-brand-motto' => 'Comunidade de tradución de código aberto',
	'twnmp-login' => 'Rexistro',
	'twnmp-search-placeholder' => 'Atope e corrixa traducións',
	'twnmp-search-button' => 'Buscar',
	'twnmp-search-choose-project' => 'Escolla un proxecto a traducir',
	'twnmp-translate-link' => 'Traducir',
	'twnmp-proofread-link' => 'Corrixir',
	'twnmp-translate-button' => 'Traducir',
	'twnmp-proofread-button' => 'Corrixir',
	'twnmp-your-translations-stats' => 'As súas estatísticas de tradución',
	'twnmp-your-view-language-stats' => 'Ollar as estatísticas da lingua',
	'twnmp-translations-per-month' => 'traducións ao mes',
	'twnmp-reviews-per-month' => 'revisións ao mes',
	'twnmp-translations-translator-ranking' => 'Quedou $2{{GENDER:$1|º|ª}} de $3 tradutores<br />en $4',
	'twnmp-bottom-help' => 'Axuda',
	'twnmp-bottom-special-pages' => 'Páxinas especiais',
	'twnmp-bottom-languages-supported' => 'Linguas soportadas',
	'twnmp-bottom-about' => 'Acerca de',
	'twnmp-signup-username-placeholder' => 'Nome de usuario',
	'twnmp-signup-password-placeholder' => 'Contrasinal',
	'twnmp-signup-email-placeholder' => 'Correo electrónico',
	'twnmp-create-account-button' => 'Crear a conta',
	'twnmp-become-translator' => 'Fágase tradutor',
	'twnmp-choose-languages-you-know' => 'Escolla as linguas que coñece',
	'twnmp-choose-another-language' => 'Elixir outra lingua...',
	'twnmp-choose-fill-account-details' => 'Encha os detalles da súa conta',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'twnmp-desc' => 'דף ראשי עבור אתר translatewiki.net',
	'twnmp-mainpage' => 'דף ראשי',
	'twnmp-s-translators' => 'מתרגמים',
	'twnmp-s-projects' => 'מיזמים',
	'twnmp-s-languages' => 'שפות',
	'twnmp-s-messages' => 'הודעות לתרגם',
	'twnmp-bannerwho' => 'תמונה $1',
	'twnmp-show-more-projects' => 'מיזמים נוספים...',
	'twnmp-brand-motto' => 'קהילת תרגום בקוד פתוח',
	'twnmp-login' => 'כניסה',
	'twnmp-search-placeholder' => 'למצוא ולתקן תרגומים',
	'twnmp-search-button' => 'למצוא',
	'twnmp-search-choose-project' => 'בחירת מיזם לתרגום',
	'twnmp-translate-link' => 'תרגום',
	'twnmp-proofread-link' => 'הגהה',
	'twnmp-translate-button' => 'תרגום',
	'twnmp-proofread-button' => 'הגהה',
	'twnmp-your-translations-stats' => 'סטטיסטיקת התרגומים שלך',
	'twnmp-your-view-language-stats' => 'הצגת הסטטיסטיקה לשפה',
	'twnmp-translations-per-month' => 'תרגומים לחודש',
	'twnmp-reviews-per-month' => 'הגהות לחודש',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|אתה דורג|את מדורגת}} במקום ה{{GRAMMAR:תחילית|$2}} מתוך $3 מתרגמים<br />ל{{GRAMMAR:תחילית|$4}}',
	'twnmp-bottom-help' => 'עזרה',
	'twnmp-bottom-special-pages' => 'דפים מיוחדים',
	'twnmp-bottom-languages-supported' => 'שפות נתמכות',
	'twnmp-bottom-about' => 'אודות',
	'twnmp-signup-username-placeholder' => 'שם משתמש',
	'twnmp-signup-password-placeholder' => 'ססמה',
	'twnmp-signup-email-placeholder' => 'דואר אלקטרוני',
	'twnmp-create-account-button' => 'יצירת חשבון',
	'twnmp-become-translator' => 'בואו להיות מתרגמים',
	'twnmp-choose-languages-you-know' => 'השפה שלך',
	'twnmp-choose-another-language' => 'בחירת שפה אחרת...',
	'twnmp-choose-fill-account-details' => 'הפרטים שלך',
	'twnmp-stats-number-k' => '$1 אלף',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'twnmp-desc' => 'translatewiki.net のメインページを提供する',
	'twnmp-mainpage' => 'メインページ',
	'twnmp-s-translators' => '翻訳者',
	'twnmp-s-projects' => 'プロジェクト',
	'twnmp-s-languages' => '言語',
	'twnmp-s-messages' => '翻訳対象メッセージ',
	'twnmp-bannerwho' => '画像: $1',
	'twnmp-show-more-projects' => 'その他のプロジェクトを表示...',
	'twnmp-brand-motto' => 'オープンソース翻訳コミュニティ',
	'twnmp-login' => 'ログイン',
	'twnmp-search-placeholder' => '修正したい翻訳を検索',
	'twnmp-search-button' => '検索',
	'twnmp-search-choose-project' => '翻訳するプロジェクトの選択',
	'twnmp-translate-link' => '翻訳',
	'twnmp-proofread-link' => '校正',
	'twnmp-translate-button' => '翻訳',
	'twnmp-proofread-button' => '校正',
	'twnmp-your-translations-stats' => 'あなたの翻訳の統計',
	'twnmp-your-view-language-stats' => '言語別翻訳状況を表示',
	'twnmp-translations-per-month' => '翻訳/月',
	'twnmp-reviews-per-month' => '査読/月',
	'twnmp-translations-translator-ranking' => '$2 {{GENDER:$1|位の翻訳者}} ($3 人中)<br />言語: $4',
	'twnmp-bottom-help' => 'ヘルプ',
	'twnmp-bottom-special-pages' => '特別ページ',
	'twnmp-bottom-languages-supported' => 'サポートしている言語',
	'twnmp-bottom-about' => 'このサイトについて',
	'twnmp-signup-username-placeholder' => '利用者名',
	'twnmp-signup-password-placeholder' => 'パスワード',
	'twnmp-signup-email-placeholder' => 'メールアドレス',
	'twnmp-create-account-button' => 'アカウント作成',
	'twnmp-become-translator' => '翻訳者になりませんか',
	'twnmp-choose-languages-you-know' => 'あなたが理解できる言語を選択してください',
	'twnmp-choose-another-language' => '別の言語を選択...',
	'twnmp-choose-fill-account-details' => 'アカウント情報を記入してください',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'twnmp-mainpage' => 'Haaptsäit',
	'twnmp-s-translators' => 'Iwwersetzer',
	'twnmp-s-projects' => 'Projeten',
	'twnmp-s-languages' => 'Sproochen',
	'twnmp-s-messages' => "Message fir z'iwwersetzen",
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Méi Projete weisen...',
	'twnmp-search-choose-project' => "E Projet eraussiche fir z'iwwersetzen",
	'twnmp-translate-link' => 'Iwwersetzen',
	'twnmp-proofread-link' => 'Iwwerliesen',
	'twnmp-translate-button' => 'Iwwersetzen',
	'twnmp-proofread-button' => 'Iwwerliesen',
	'twnmp-your-translations-stats' => 'Är Statistike vun der Iwwersetzung',
	'twnmp-your-view-language-stats' => 'Sproochstatistike weisen',
	'twnmp-translations-per-month' => 'Iwwersetzunge pro Mount',
	'twnmp-bottom-help' => 'Hëllef',
	'twnmp-bottom-special-pages' => 'Spezialsäiten',
	'twnmp-bottom-languages-supported' => 'Ënnerstëtzte Sproochen',
	'twnmp-bottom-about' => 'Iwwer',
	'twnmp-signup-username-placeholder' => 'Benotzernumm',
	'twnmp-signup-password-placeholder' => 'Passwuert',
	'twnmp-signup-email-placeholder' => 'E-Mail',
	'twnmp-create-account-button' => 'Benotzerkont uleeën',
	'twnmp-become-translator' => 'Iwwersetzer ginn',
	'twnmp-choose-languages-you-know' => 'Sproochen eraussichen déi Dir kënnt',
	'twnmp-choose-another-language' => 'Eng aner Sprooch eraussichen...',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'twnmp-desc' => 'Ја дава главната сраница на translatewiki.net',
	'twnmp-mainpage' => 'Главна страница',
	'twnmp-s-translators' => 'Преведувачи',
	'twnmp-s-projects' => 'Проекти',
	'twnmp-s-languages' => 'Јазици',
	'twnmp-s-messages' => 'Пораки за преведување',
	'twnmp-bannerwho' => 'Слика $1',
	'twnmp-show-more-projects' => 'Прикажи уште проекти...',
	'twnmp-brand-motto' => 'Преводна заедница за отворен код',
	'twnmp-login' => 'Најава',
	'twnmp-search-placeholder' => 'Пронајди и исправи преводи',
	'twnmp-search-button' => 'Најди',
	'twnmp-search-choose-project' => 'Одберете проект за преведување',
	'twnmp-translate-link' => 'Преведи',
	'twnmp-proofread-link' => 'Провери',
	'twnmp-translate-button' => 'Преведи',
	'twnmp-proofread-button' => 'Провери',
	'twnmp-your-translations-stats' => 'Ваши преводни статистики',
	'twnmp-your-view-language-stats' => 'Јазични статистики',
	'twnmp-translations-per-month' => 'Преводи месечно',
	'twnmp-reviews-per-month' => 'Проверки месечно',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Рангиран|Рангирана}} на $2 место од вкупно $3 преведувачи<br />на $4',
	'twnmp-bottom-help' => 'Помош',
	'twnmp-bottom-special-pages' => 'Специјални страници',
	'twnmp-bottom-languages-supported' => 'Поддржани јазици',
	'twnmp-bottom-about' => 'За проектот',
	'twnmp-signup-username-placeholder' => 'Корисничко име',
	'twnmp-signup-password-placeholder' => 'Лозинка',
	'twnmp-signup-email-placeholder' => 'Е-пошта',
	'twnmp-create-account-button' => 'Направи сметка',
	'twnmp-become-translator' => 'Станете преведувач',
	'twnmp-choose-languages-you-know' => 'Укажете ги јазиците што ги владеете',
	'twnmp-choose-another-language' => 'Друг јазик...',
	'twnmp-choose-fill-account-details' => 'Пополнете ги податоците за сметката',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'twnmp-desc' => 'Bevat de startpagina van translatewiki.net',
	'twnmp-mainpage' => 'Startpagina',
	'twnmp-s-translators' => 'Vertalers',
	'twnmp-s-projects' => 'Projecten',
	'twnmp-s-languages' => 'Talen',
	'twnmp-s-messages' => 'Vertaaleenheden',
	'twnmp-bannerwho' => 'Afbeelding: $1',
	'twnmp-show-more-projects' => 'Meer projecten weergeven...',
	'twnmp-brand-motto' => 'Community voor het vertalen van open source software',
	'twnmp-login' => 'Aanmelden',
	'twnmp-search-placeholder' => 'Vertalingen vinden en aanpassen',
	'twnmp-search-button' => 'Zoeken',
	'twnmp-search-choose-project' => 'Kies een te vertalen project',
	'twnmp-translate-link' => 'Vertalen',
	'twnmp-proofread-link' => 'Controleren',
	'twnmp-translate-button' => 'Vertalen',
	'twnmp-proofread-button' => 'Controleren',
	'twnmp-your-translations-stats' => 'Uw vertaalstatistieken',
	'twnmp-your-view-language-stats' => 'Taalstatistieken bekijken',
	'twnmp-translations-per-month' => 'Vertalingen/maand',
	'twnmp-reviews-per-month' => 'Gecontroleerd/maand',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Positie}} $2 van $3 vertalers<br />in het $4',
	'twnmp-bottom-help' => 'Hulp',
	'twnmp-bottom-special-pages' => "Speciale pagina's",
	'twnmp-bottom-languages-supported' => 'Ondersteunde talen',
	'twnmp-bottom-about' => 'Over',
	'twnmp-signup-username-placeholder' => 'Gebruikersnaam',
	'twnmp-signup-password-placeholder' => 'Wachtwoord',
	'twnmp-signup-email-placeholder' => 'E-mailadres',
	'twnmp-create-account-button' => 'Registreren',
	'twnmp-become-translator' => 'Word vertaler',
	'twnmp-choose-languages-you-know' => 'Kies talen die u kent',
	'twnmp-choose-another-language' => 'Kies een andere taal...',
	'twnmp-choose-fill-account-details' => 'Geef uw gebruikersgegevens op',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'twnmp-s-translators' => 'అనువాదకులు',
	'twnmp-s-projects' => 'ప్రాజెక్టులు',
	'twnmp-s-languages' => 'భాషలు',
	'twnmp-s-messages' => 'అనువదించాల్సిన సందేశాలు',
	'twnmp-bannerwho' => 'చిత్రం $1',
	'twnmp-show-more-projects' => 'మరిన్ని ప్రాజెక్టులను చూపించు...',
	'twnmp-search-placeholder' => 'అనువాదాలను కనుగొని సరిదిద్దండి',
	'twnmp-search-button' => 'వెతుకు',
	'twnmp-search-choose-project' => 'అనువదించడానికి ప్రాజెక్టును ఎంచుకోండి',
	'twnmp-translate-link' => 'అనువదించండి',
	'twnmp-proofread-link' => 'సమీక్షించండి',
	'twnmp-translate-button' => 'అనువదించండి',
	'twnmp-proofread-button' => 'సమీక్షించండి',
	'twnmp-your-translations-stats' => 'మీ అనువాద గణాంకాలు',
	'twnmp-your-view-language-stats' => 'భాషా గణాంకాలను చూడండి',
	'twnmp-translations-per-month' => 'నెలలో అనువాదాలు',
	'twnmp-reviews-per-month' => 'నెలలో సమీక్షలు',
	'twnmp-translations-translator-ranking' => '$2వ {{GENDER:$1|స్థానం}}
<br />$3గురు $4 అనువాదకులలో.',
	'twnmp-bottom-help' => 'సహాయం',
	'twnmp-bottom-special-pages' => 'ప్రత్యేక పేజీలు',
	'twnmp-bottom-languages-supported' => 'తోడ్పాటు ఉన్న భాషలు',
	'twnmp-bottom-about' => 'గురించి',
	'twnmp-signup-username-placeholder' => 'వాడుకరి పేరు',
	'twnmp-signup-password-placeholder' => 'సంకేతపదం',
	'twnmp-signup-email-placeholder' => 'ఈమెయిలు',
	'twnmp-create-account-button' => 'ఖాతాని సృష్టించు',
	'twnmp-become-translator' => 'అనువాదకులవ్వండి',
	'twnmp-choose-languages-you-know' => 'మీకు తెలిసిన భాషలను ఎంచుకోండి',
	'twnmp-choose-another-language' => 'మరో భాషను ఎంచుకోండి...',
	'twnmp-choose-fill-account-details' => 'మీ ఖాతా వివరాలను పూరించండి',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'twnmp-desc' => '提供 translatewiki.net 的主要頁面',
	'twnmp-mainpage' => '首頁',
	'twnmp-s-translators' => '翻譯者',
	'twnmp-s-projects' => '計劃',
	'twnmp-s-languages' => '語言',
	'twnmp-s-messages' => '要翻譯的訊息',
	'twnmp-bannerwho' => '圖像$1',
	'twnmp-show-more-projects' => '顯示更多的計劃...',
	'twnmp-brand-motto' => '開源翻譯社區',
	'twnmp-login' => '登入',
	'twnmp-search-placeholder' => '尋找和修復的翻譯',
	'twnmp-search-button' => '尋找',
	'twnmp-search-choose-project' => '選擇一個項目翻譯',
	'twnmp-translate-link' => '翻譯',
	'twnmp-proofread-link' => '校對',
	'twnmp-translate-button' => '翻譯',
	'twnmp-proofread-button' => '校對',
	'twnmp-your-translations-stats' => '您的翻譯統計',
	'twnmp-your-view-language-stats' => '查看語言統計資訊',
	'twnmp-translations-per-month' => '翻譯每月',
	'twnmp-reviews-per-month' => '檢查/每月',
	'twnmp-translations-translator-ranking' => '在$3位$4翻譯者中{{GENDER:$1|排名}}第$2',
	'twnmp-bottom-help' => '幫助',
	'twnmp-bottom-special-pages' => '特殊頁面',
	'twnmp-bottom-languages-supported' => '支援的語言',
	'twnmp-bottom-about' => '關於',
	'twnmp-signup-username-placeholder' => '用戶名',
	'twnmp-signup-password-placeholder' => '密碼',
	'twnmp-signup-email-placeholder' => '電郵',
	'twnmp-create-account-button' => '建立帳戶',
	'twnmp-become-translator' => '成為一個翻譯者',
	'twnmp-choose-languages-you-know' => '選擇你會的語言',
	'twnmp-choose-another-language' => '選擇其他語言...',
	'twnmp-choose-fill-account-details' => '填寫您的帳戶詳細資訊',
);
