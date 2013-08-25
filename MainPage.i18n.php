<?php
/**
 * Internationalisation file for extension TwnMainPage.
 *
 * @file
 * @ingroup Extensions
 */

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
 * @author Lloffiwr
 * @author Nemo bis
 * @author Nike
 * @author Purodha
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
	'twnmp-brand-motto' => 'A motto shown under the site name at the top of the main page: open source translations by a community part of open source movement, or "translation community (which is a part) of open source (movement)".',
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
	'twnmp-translations-per-month' => "Used in [[Special:Mainpage]].
Appears in the user's statistics box near a number.
Means that the users performs that number of translations every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.",
	'twnmp-reviews-per-month' => "Appears in the user's statistics box near a number.
Means that the users performs that number of review actions every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.
{{Identical|Review}}",
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
	'twnmp-stats-number-k' => 'Used in [[Special:Mainpage]].
$1 is the number of the thousands of messages or users on the site.
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

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'twnmp-desc' => 'Ufre la páxina principal de translatewiki.net',
	'twnmp-mainpage' => 'Portada',
	'twnmp-s-translators' => 'Traductores',
	'twnmp-s-projects' => 'Proyeutos',
	'twnmp-s-languages' => 'Llingües',
	'twnmp-s-messages' => 'Mensaxes a traducir',
	'twnmp-bannerwho' => 'Imaxe $1',
	'twnmp-show-more-projects' => 'Ver más proyeutos...',
	'twnmp-brand-motto' => 'Comunidá de traducción de códigu abiertu',
	'twnmp-login' => 'Aniciar sesión',
	'twnmp-search-placeholder' => 'Alcontrar y correxir traducciones',
	'twnmp-search-button' => 'Alcontrar',
	'twnmp-search-choose-project' => 'Escueya un proyeutu pa traducir',
	'twnmp-translate-link' => 'Traducir',
	'twnmp-proofread-link' => 'Correxir',
	'twnmp-translate-button' => 'Traducir',
	'twnmp-proofread-button' => 'Correxir',
	'twnmp-your-translations-stats' => 'Les sos estadístiques de traducción',
	'twnmp-your-view-language-stats' => 'Ver estadístiques de llingua',
	'twnmp-translations-per-month' => 'traducciones/mes',
	'twnmp-reviews-per-month' => 'Revisiones/mes',
	'twnmp-translations-translator-ranking' => 'Ta {{GENDER:$1|nel puestu}} $2 de $3 traductores<br />pal $4',
	'twnmp-bottom-help' => 'Ayuda',
	'twnmp-bottom-special-pages' => 'Páxines especiales',
	'twnmp-bottom-languages-supported' => 'Llingües sofitaes',
	'twnmp-bottom-about' => 'Tocante a',
	'twnmp-signup-username-placeholder' => "Nome d'usuariu",
	'twnmp-signup-password-placeholder' => 'Contraseña',
	'twnmp-signup-email-placeholder' => 'Corréu',
	'twnmp-create-account-button' => 'Crear una cuenta',
	'twnmp-become-translator' => 'Faigase traductor',
	'twnmp-choose-languages-you-know' => 'Esbille les llingües que sabe',
	'twnmp-choose-another-language' => 'Escoyer otra llingua...',
	'twnmp-choose-fill-account-details' => 'Rellene los detalles de la cuenta de so',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'twnmp-bottom-special-pages' => 'Специални страници',
	'twnmp-bottom-languages-supported' => 'Поддържани езици',
	'twnmp-bottom-about' => 'Относно',
	'twnmp-signup-username-placeholder' => 'Потребителско име',
	'twnmp-signup-password-placeholder' => 'Парола',
	'twnmp-signup-email-placeholder' => 'Електронна поща',
	'twnmp-create-account-button' => 'Създаване на сметка',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'twnmp-desc' => 'translatewiki.net প্রধান পাতা রয়েছে',
	'twnmp-mainpage' => 'প্রধান পাতা',
	'twnmp-s-translators' => 'অনুবাদকগণ',
	'twnmp-s-projects' => 'প্রকল্পসমূহ',
	'twnmp-s-languages' => 'ভাষাসমূহ',
	'twnmp-s-messages' => 'অনুবাদের জন্য বার্তাসমূহ',
	'twnmp-bannerwho' => 'চিত্র $1',
	'twnmp-show-more-projects' => 'আরও প্রকল্প দেখাও...',
	'twnmp-brand-motto' => 'ওপেন সোর্স অনুবাদ সম্প্রদায়',
	'twnmp-login' => 'প্রবেশ',
	'twnmp-search-placeholder' => 'অনুবাদ অনুসন্ধান এবং ঠিক করুন',
	'twnmp-search-button' => 'অনুসন্ধান করুন',
	'twnmp-search-choose-project' => 'অনুবাদের জন্য কোনো প্রকল্প পছন্দ করুন',
	'twnmp-translate-link' => 'অনুবাদ',
	'twnmp-proofread-link' => 'প্রুফরিড',
	'twnmp-translate-button' => 'অনুবাদ',
	'twnmp-proofread-button' => 'প্রুফরিড',
	'twnmp-your-translations-stats' => 'আপনার অনুবাদ পরিসংখ্যান',
	'twnmp-your-view-language-stats' => 'ভাষার পরিসংখ্যান দেখাও',
	'twnmp-translations-per-month' => 'অনুবাদ/মাস',
	'twnmp-reviews-per-month' => 'পর্যালোচনা/মাস',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|র‍্যাংক}} $4 ভাষায় $3 অনুবাদকের মধ্যে $2 নম্বর',
	'twnmp-bottom-help' => 'সাহায্য',
	'twnmp-bottom-special-pages' => 'বিশেষ পাতাসমূহ',
	'twnmp-bottom-languages-supported' => 'সমর্থিত ভাষাসমূহ',
	'twnmp-bottom-about' => 'পরিচিতি',
	'twnmp-signup-username-placeholder' => 'ব্যবহারকারী নাম',
	'twnmp-signup-password-placeholder' => 'শব্দচাবি (Password)',
	'twnmp-signup-email-placeholder' => 'ইমেইল',
	'twnmp-create-account-button' => 'অ্যাকাউন্ট তৈরি করুন',
	'twnmp-become-translator' => 'অনুবাদক হোন',
	'twnmp-choose-languages-you-know' => 'আপনি যে ভাষাসমূহ জানেন তা নির্বাচন করুন',
	'twnmp-choose-another-language' => 'অন্য একটি ভাষা নির্বাচন করুন...',
	'twnmp-choose-fill-account-details' => 'আপনার অ্যাকাউন্ট বিস্তারিত পূরণ করুন',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'twnmp-mainpage' => 'Degemer',
	'twnmp-s-translators' => 'Troerien',
	'twnmp-s-projects' => 'Raktresoù',
	'twnmp-s-languages' => 'Yezhoù',
	'twnmp-s-messages' => 'Kemennadennoù da dreiñ',
	'twnmp-bannerwho' => 'Skeudenn $1',
	'twnmp-show-more-projects' => 'Diskouez raktresoù ouzhpenn...',
	'twnmp-login' => 'Kevreañ',
	'twnmp-search-button' => 'Klask',
	'twnmp-search-choose-project' => 'Dibab ur raktres da dreiñ',
	'twnmp-translate-link' => 'Treiñ',
	'twnmp-translate-button' => 'Treiñ',
	'twnmp-your-translations-stats' => 'Ho stadegoù treiñ',
	'twnmp-your-view-language-stats' => 'Diskouez ar stadegoù yezh',
	'twnmp-translations-per-month' => 'Troidigezh/miz',
	'twnmp-bottom-help' => 'Skoazell',
	'twnmp-bottom-special-pages' => 'Pajennoù dibar',
	'twnmp-bottom-languages-supported' => 'Yezhoù skoret',
	'twnmp-bottom-about' => 'Diwar-benn',
	'twnmp-signup-username-placeholder' => 'Anv implijer',
	'twnmp-signup-password-placeholder' => 'Ger-tremen',
	'twnmp-signup-email-placeholder' => 'Postel',
	'twnmp-create-account-button' => 'Krouiñ ur gont',
	'twnmp-become-translator' => 'Dont da vezañ troer',
	'twnmp-choose-languages-you-know' => 'Dibabit ar yezhoù a anavezit',
	'twnmp-choose-another-language' => 'Dibab ur yezh all...',
	'twnmp-choose-fill-account-details' => 'Klokaat titouroù ho kont',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'twnmp-s-languages' => 'ѩꙁꙑци',
	'twnmp-bottom-help' => 'помощь',
	'twnmp-bottom-special-pages' => 'нарочьнꙑ страницѧ',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'twnmp-desc' => 'Yn darparu hafan translatewiki.net',
	'twnmp-mainpage' => 'Hafan',
	'twnmp-s-translators' => 'o gyfieithwyr',
	'twnmp-s-projects' => 'o brosiectau',
	'twnmp-s-languages' => 'o ieithoedd',
	'twnmp-s-messages' => "o negeseuon i'w cyfieithu",
	'twnmp-bannerwho' => 'Llun $1',
	'twnmp-show-more-projects' => 'Dangos rhagor o brosiectau...',
	'twnmp-brand-motto' => 'Cymuned cyfieithu meddalwedd agored',
	'twnmp-login' => 'Mewngofnodi',
	'twnmp-search-placeholder' => "Canfod cyfieithiadau a'u newid",
	'twnmp-search-button' => 'Canfydder',
	'twnmp-search-choose-project' => "Dewis prosiect i'w gyfieithu",
	'twnmp-translate-link' => 'Cyfieithu',
	'twnmp-proofread-link' => 'Adolygu',
	'twnmp-translate-button' => 'Cyfieithu',
	'twnmp-proofread-button' => 'Adolygu',
	'twnmp-your-translations-stats' => 'Ystadegau eich gwaith cyfieithu',
	'twnmp-your-view-language-stats' => "Ystadegau'r iaith",
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rhif}} $2 o ran gweithgarwch ymhlith<br />y $3 cyfieithydd $4',
	'twnmp-bottom-help' => 'Cymorth',
	'twnmp-bottom-special-pages' => 'Tudalennau arbennig',
	'twnmp-bottom-languages-supported' => 'Ieithoedd a gynhelir',
	'twnmp-bottom-about' => 'Amdanom',
	'twnmp-signup-username-placeholder' => 'Enw Defnyddiwr',
	'twnmp-signup-password-placeholder' => 'Cyfrinair',
	'twnmp-signup-email-placeholder' => 'E-bost',
	'twnmp-create-account-button' => 'Creer y cyfrif',
	'twnmp-become-translator' => 'Ymuno i gyfieithu',
	'twnmp-choose-languages-you-know' => 'Dewis eich ieithoedd',
	'twnmp-choose-another-language' => 'Dewis iaith arall...',
	'twnmp-choose-fill-account-details' => 'Rhoi manylion eich cyfrif',
	'twnmp-stats-number-k' => '$1 mil',
);

/** Danish (dansk)
 * @author Peter Alberti
 */
$messages['da'] = array(
	'twnmp-desc' => 'Giver translatewiki.nets forside',
	'twnmp-mainpage' => 'Forside',
	'twnmp-s-translators' => 'Oversættere',
	'twnmp-s-projects' => 'Projekter',
	'twnmp-s-languages' => 'Sprog',
	'twnmp-s-messages' => 'Beskeder at oversætte',
	'twnmp-bannerwho' => 'Billede $1',
	'twnmp-show-more-projects' => 'Vis flere projekter...',
	'twnmp-brand-motto' => 'Open source-oversættelsesfællesskab',
	'twnmp-login' => 'Log på',
	'twnmp-search-placeholder' => 'Find og ret oversættelser',
	'twnmp-search-button' => 'Find',
	'twnmp-search-choose-project' => 'Vælg et projekt at oversætte',
	'twnmp-translate-link' => 'Oversæt',
	'twnmp-proofread-link' => 'Læs korrektur',
	'twnmp-translate-button' => 'Oversæt',
	'twnmp-proofread-button' => 'Læs korrektur',
	'twnmp-your-translations-stats' => 'Din oversættelsesstatistik',
	'twnmp-your-view-language-stats' => 'Se sprogstatistik',
	'twnmp-translations-per-month' => 'Oversættelser/måned',
	'twnmp-reviews-per-month' => 'Korrekturlæsninger/måned',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Nummer}} $2 af $3 oversættere<br />for $4',
	'twnmp-bottom-help' => 'Hjælp',
	'twnmp-bottom-special-pages' => 'Specialsider',
	'twnmp-bottom-languages-supported' => 'Understøttede sprog',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Brugernavn',
	'twnmp-signup-password-placeholder' => 'Adgangskode',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Opret en konto',
	'twnmp-become-translator' => 'Bliv en oversætter',
	'twnmp-choose-languages-you-know' => 'Vælg de sprog, du kan',
	'twnmp-choose-another-language' => 'Vælg et andet sprog...',
	'twnmp-choose-fill-account-details' => 'Udfyld dine kontooplysninger',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Purodha
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
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rang}} $2 von $3 Übersetzern<br />in die Sprache $4',
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
	'twnmp-stats-number-k' => '$1&nbsp;T',
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
	'twnmp-translations-translator-ranking' => '{{GENDER:$1}}Sijalla $2/$3 kääntäjistä<br />
kielelle $4',
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
 * @author YaronSh
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
	'twnmp-choose-fill-account-details' => 'נא למלא את פרטי החשבון שלך',
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

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'twnmp-s-languages' => 'ენები',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'twnmp-desc' => 'ផ្ដល់ជូននូវទំព័រដើមសម្រាប់ translatewiki.net',
	'twnmp-mainpage' => 'ទំព័រដើម',
	'twnmp-s-translators' => 'អ្នកប្រែសម្រួល',
	'twnmp-s-projects' => 'គម្រោង​នានា',
	'twnmp-s-languages' => 'ភាសា​',
	'twnmp-s-messages' => 'សារដែលត្រូវបកប្រែ',
	'twnmp-bannerwho' => 'រូបភាព $1',
	'twnmp-show-more-projects' => 'បង្ហាញគម្រោងបន្ថែមទៀត...',
	'twnmp-brand-motto' => 'សហគមន៍បកប្រែប្រភពបើកទូលាយ',
	'twnmp-login' => 'កត់ឈ្មោះចូល',
	'twnmp-search-placeholder' => 'ស្វែងរកនិងកែតម្រូវការបកប្រែ',
	'twnmp-search-button' => 'ស្វែងរក',
	'twnmp-search-choose-project' => 'ជ្រើសរើសគម្រោងមួយដើម្បីបកប្រែ',
	'twnmp-translate-link' => 'បកប្រែ',
	'twnmp-proofread-link' => 'ផ្ទៀងផ្ទាត់',
	'twnmp-translate-button' => 'បកប្រែ',
	'twnmp-proofread-button' => 'ផ្ទៀងផ្ទាត់',
	'twnmp-your-translations-stats' => 'ស្ថិតិបកប្រែរបស់អ្នក',
	'twnmp-your-view-language-stats' => 'មើលស្ថិតិ​ភាសា',
	'twnmp-translations-per-month' => 'ចំនួនបកប្រែ/ខែ',
	'twnmp-reviews-per-month' => 'ចំនួនត្រួតពិនិត្យ/ខែ',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|ជាប់ចំណាត់ថ្នាក់លេខ}} $2  ក្នុងចំណោម<br />អ្នកបកប្រែជា$4 ចំនួន $3',
	'twnmp-bottom-help' => 'ជំនួយ',
	'twnmp-bottom-special-pages' => 'ទំព័រពិសេសៗ',
	'twnmp-bottom-languages-supported' => 'ភាសាដែលអាចប្រើបាន',
	'twnmp-bottom-about' => 'អំពី',
	'twnmp-signup-username-placeholder' => 'អត្តនាម',
	'twnmp-signup-password-placeholder' => 'ពាក្យ​សម្ងាត់',
	'twnmp-signup-email-placeholder' => 'អ៊ីមែល',
	'twnmp-create-account-button' => 'បង្កើតគណនី',
	'twnmp-become-translator' => 'ក្លាយជាអ្នកប្រែសម្រួល',
	'twnmp-choose-languages-you-know' => 'ជ្រើសរើសភាសាដែលអ្នកចេះ',
	'twnmp-choose-another-language' => 'ជ្រើសរើសភាសាមួយទៀត...',
	'twnmp-choose-fill-account-details' => 'បំពេញព័ត៌មានពិស្ដារអំពីគណនីរបស់អ្នក',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'twnmp-desc' => 'translatewiki.net 대문을 제공합니다',
	'twnmp-mainpage' => '대문',
	'twnmp-s-translators' => '번역자',
	'twnmp-s-projects' => '프로젝트',
	'twnmp-s-languages' => '언어',
	'twnmp-s-messages' => '번역할 메시지',
	'twnmp-bannerwho' => '그림: $1',
	'twnmp-show-more-projects' => '더 많은 프로젝트 보기...',
	'twnmp-brand-motto' => '오픈 소스 번역 커뮤니티',
	'twnmp-login' => '로그인',
	'twnmp-search-placeholder' => '번역을 찾아서 교정하기',
	'twnmp-search-button' => '찾기',
	'twnmp-search-choose-project' => '번역할 프로젝트를 선택하세요',
	'twnmp-translate-link' => '번역',
	'twnmp-proofread-link' => '교정하기',
	'twnmp-translate-button' => '번역',
	'twnmp-proofread-button' => '교정하기',
	'twnmp-your-translations-stats' => '내 번역 통계',
	'twnmp-your-view-language-stats' => '언어 통계 보기',
	'twnmp-translations-per-month' => '번역/월',
	'twnmp-reviews-per-month' => '검토/월',
	'twnmp-translations-translator-ranking' => '번역자 $3명 중 $2{{GENDER:$1|위}}<br />$4',
	'twnmp-bottom-help' => '도움말',
	'twnmp-bottom-special-pages' => '특수 문서',
	'twnmp-bottom-languages-supported' => '지원하는 언어',
	'twnmp-bottom-about' => '소개',
	'twnmp-signup-username-placeholder' => '사용자 이름',
	'twnmp-signup-password-placeholder' => '비밀번호',
	'twnmp-signup-email-placeholder' => '이메일',
	'twnmp-create-account-button' => '계정 만들기',
	'twnmp-become-translator' => '번역자가 되세요',
	'twnmp-choose-languages-you-know' => '당신이 알고 있는 언어를 선택하세요',
	'twnmp-choose-another-language' => '다른 언어 선택...',
	'twnmp-choose-fill-account-details' => '내 계정 정보를 채우세요',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'twnmp-desc' => '{{GRAMMAR:Gen M |{{ucfirst:{{SITENAME}}}}}} {{int:mainpage}}.',
	'twnmp-mainpage' => '{{int:mainpage}}',
	'twnmp-s-translators' => 'Övversäzer',
	'twnmp-s-projects' => 'Projäkte',
	'twnmp-s-languages' => 'Schprooche',
	'twnmp-s-messages' => 'Täxte un Nohreeschte för ze Övversäze',
	'twnmp-bannerwho' => 'Dat Beld es $1',
	'twnmp-show-more-projects' => 'Mieh aanzeije ...',
	'twnmp-brand-motto' => 'Jemeinschaff vun Övversäzer för offe Quälle',
	'twnmp-login' => 'Enlogge',
	'twnmp-search-placeholder' => 'Fengk Övversäzonge un donn se bäßer maache wann nüüdesch',
	'twnmp-search-button' => 'Lohß Jonn!',
	'twnmp-search-choose-project' => 'Söhk Der e Projäk uß, woh De jät vun övversäze wells:',
	'twnmp-translate-link' => 'Övversäze',
	'twnmp-proofread-link' => 'Jääjelässe',
	'twnmp-translate-button' => 'Övversäze!',
	'twnmp-proofread-button' => 'Jääjelässe!',
	'twnmp-your-translations-stats' => 'Ding Schtatistike fun de Övversäzonge.',
	'twnmp-your-view-language-stats' => 'Schtatistike för de Schprooche',
	'twnmp-translations-per-month' => 'Övversäzonge em Mohnd',
	'twnmp-reviews-per-month' => 'Jääjejelässe em Mohnd',
	'twnmp-translations-translator-ranking' => 'Bes {{PLURAL:$3|der einzejje|de Nommer $2 vun dä $3<br />|keine}}
Övversäzer noh $4{{GENDER:$1}}',
	'twnmp-bottom-help' => 'Hölp',
	'twnmp-bottom-special-pages' => '{{int:specialpages}}',
	'twnmp-bottom-languages-supported' => 'Ongerschtöz Schprooche',
	'twnmp-bottom-about' => 'Övver {{GRAMMAR:Nominativ|{{ucfirst:{{SITENAME}}}}}}',
	'twnmp-signup-username-placeholder' => 'Dinge Naame als Metmaacher',
	'twnmp-signup-password-placeholder' => 'E Paßwoot för Desch',
	'twnmp-signup-email-placeholder' => 'De Addräß för Ding <i lang="en">e-mail</i>',
	'twnmp-create-account-button' => 'Donn ene neue Zohjang aanlääje',
	'twnmp-become-translator' => 'Donn Övversäzer wääde',
	'twnmp-choose-languages-you-know' => 'Söhk di Schprooche uß, di De kanns',
	'twnmp-choose-another-language' => 'Söhg_en andere Schprooch us{{int:ellipsis}}',
	'twnmp-choose-fill-account-details' => 'De Einzelheite övver Dinge Zohjang:',
	'twnmp-stats-number-k' => '$1&nbsp;Tsd.',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'twnmp-mainpage' => 'Destpêk',
	'twnmp-s-translators' => 'Wergêr',
	'twnmp-s-projects' => 'Proje',
	'twnmp-s-languages' => 'Ziman',
	'twnmp-search-placeholder' => 'Wergeran bibîne û sererast bike',
	'twnmp-translate-link' => 'Wergerîne',
	'twnmp-translate-button' => 'Wergerîne',
	'twnmp-your-translations-stats' => 'Stâtîstîkên te ên wergerê',
	'twnmp-your-view-language-stats' => 'Statîstîkên ziman bibîne',
	'twnmp-bottom-help' => 'Alîkarî',
	'twnmp-bottom-special-pages' => 'Rûpelên taybet',
	'twnmp-signup-username-placeholder' => 'Navê bikarhêner',
	'twnmp-signup-password-placeholder' => 'Şîfre',
	'twnmp-signup-email-placeholder' => 'E-name',
	'twnmp-create-account-button' => 'Hesabê nû çêke',
	'twnmp-become-translator' => 'Bibe wergêrek',
	'twnmp-choose-languages-you-know' => 'Zimanên ku dizanî hilbijêre',
	'twnmp-choose-another-language' => 'Zimanekî din hilbijêre...',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 */
$messages['lb'] = array(
	'twnmp-desc' => "Stellt d'translatewiki.net-Haaptsäit zur Verfügung",
	'twnmp-mainpage' => 'Haaptsäit',
	'twnmp-s-translators' => 'Iwwersetzer',
	'twnmp-s-projects' => 'Projeten',
	'twnmp-s-languages' => 'Sproochen',
	'twnmp-s-messages' => "Message fir z'iwwersetzen",
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Méi Projete weisen...',
	'twnmp-brand-motto' => 'Open-Source-Iwwersetzungscommunautéit',
	'twnmp-login' => 'Aloggen',
	'twnmp-search-placeholder' => 'Iwwersetzunge fannen a verbesseren',
	'twnmp-search-button' => 'Fannen',
	'twnmp-search-choose-project' => "E Projet eraussiche fir z'iwwersetzen",
	'twnmp-translate-link' => 'Iwwersetzen',
	'twnmp-proofread-link' => 'Iwwerliesen',
	'twnmp-translate-button' => 'Iwwersetzen',
	'twnmp-proofread-button' => 'Iwwerliesen',
	'twnmp-your-translations-stats' => 'Är Statistike vun der Iwwersetzung',
	'twnmp-your-view-language-stats' => 'Sproochstatistike weisen',
	'twnmp-translations-per-month' => 'Iwwersetzunge pro Mount',
	'twnmp-reviews-per-month' => 'Nogekuckt pro Mount',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Plaz}} $2 vu(n) $3 Iwwersetzer<br />op $4',
	'twnmp-bottom-help' => 'Hëllef',
	'twnmp-bottom-special-pages' => 'Spezialsäiten',
	'twnmp-bottom-languages-supported' => 'Ënnerstëtzt Sproochen',
	'twnmp-bottom-about' => 'Iwwer',
	'twnmp-signup-username-placeholder' => 'Benotzernumm',
	'twnmp-signup-password-placeholder' => 'Passwuert',
	'twnmp-signup-email-placeholder' => 'E-Mail',
	'twnmp-create-account-button' => 'Benotzerkont uleeën',
	'twnmp-become-translator' => 'Iwwersetzer ginn',
	'twnmp-choose-languages-you-know' => 'Sproochen eraussichen déi Dir kënnt',
	'twnmp-choose-another-language' => 'Eng aner Sprooch eraussichen...',
	'twnmp-choose-fill-account-details' => 'Setzt Detailer an Äre Benotzerkont derbäi',
);

/** Literary Chinese (文言)
 * @author Yanteng3
 */
$messages['lzh'] = array(
	'twnmp-mainpage' => '卷首',
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
	'twnmp-stats-number-k' => '$1 илј.',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'twnmp-mainpage' => 'Hovedside',
	'twnmp-s-translators' => 'Oversettere',
	'twnmp-s-projects' => 'Prosjekter',
	'twnmp-s-languages' => 'Språk',
	'twnmp-s-messages' => 'Meldinger å oversette',
	'twnmp-bannerwho' => 'Bilde $1',
	'twnmp-show-more-projects' => 'Vis flere prosjekter...',
	'twnmp-brand-motto' => 'Åpen kildekode-oversettelsesfelleskap',
	'twnmp-login' => 'Logg inn',
	'twnmp-search-placeholder' => 'Finn og korriger oversettelser',
	'twnmp-search-button' => 'Søk',
	'twnmp-search-choose-project' => 'Velg prosjekt å oversette',
	'twnmp-translate-link' => 'Oversett',
	'twnmp-proofread-link' => 'Korrekturles',
	'twnmp-translate-button' => 'Oversett',
	'twnmp-proofread-button' => 'Korrekturles',
	'twnmp-your-translations-stats' => 'Din oversettelsesstatistikk',
	'twnmp-your-view-language-stats' => 'Vis språkstatistikk',
	'twnmp-translations-per-month' => 'Oversettelser/måned',
	'twnmp-reviews-per-month' => 'Gjennomganger/måned',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rangert}} som $2 av $3 oversettere<br />i $4',
	'twnmp-bottom-help' => 'Hjelp',
	'twnmp-bottom-special-pages' => 'Spesialsider',
	'twnmp-bottom-languages-supported' => 'Støttede språk',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Brukernavn',
	'twnmp-signup-password-placeholder' => 'Passord',
	'twnmp-signup-email-placeholder' => 'E-post',
	'twnmp-create-account-button' => 'Opprett konto',
	'twnmp-become-translator' => 'Bli en oversetter',
	'twnmp-choose-languages-you-know' => 'Velg språk du kan',
	'twnmp-choose-another-language' => 'Velg et annet språk...',
	'twnmp-choose-fill-account-details' => 'Fyll inn kontodetaljene dine',
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

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'twnmp-desc' => 'د translatewiki.net لومړی مخ جوړوي',
	'twnmp-mainpage' => 'لومړی مخ',
	'twnmp-s-translators' => 'ژباړونکي',
	'twnmp-s-projects' => 'پروژې',
	'twnmp-s-languages' => 'ژبې',
	'twnmp-s-messages' => 'د ژباړې پيغامونه',
	'twnmp-bannerwho' => 'انځور $1',
	'twnmp-show-more-projects' => 'نورې پروژې ښکاره کول...',
	'twnmp-brand-motto' => 'د پرانيستې سرچينې د ژباړې ټولنه',
	'twnmp-login' => 'ننوتل',
	'twnmp-search-placeholder' => 'ژباړې موندل او سمول',
	'twnmp-search-button' => 'موندل',
	'twnmp-search-choose-project' => 'د ژباړلو لپاره يوه پروژه وټاکۍ',
	'twnmp-translate-link' => 'ژباړل',
	'twnmp-proofread-link' => 'کره لوستنه',
	'twnmp-translate-button' => 'ژباړل',
	'twnmp-proofread-button' => 'کره لوستنه',
	'twnmp-your-translations-stats' => 'ستاسې د ژباړې شمارنې',
	'twnmp-your-view-language-stats' => 'د ژبې شمارنې کتل',
	'twnmp-translations-per-month' => 'ژباړې/مياشت',
	'twnmp-reviews-per-month' => 'بياکتنې/مياشت',
	'twnmp-bottom-help' => 'لارښود',
	'twnmp-bottom-special-pages' => 'ځانګړي مخونه',
	'twnmp-bottom-languages-supported' => 'ملاتړې ژبې',
	'twnmp-bottom-about' => 'په اړه',
	'twnmp-signup-username-placeholder' => 'کارن-نوم',
	'twnmp-signup-password-placeholder' => 'پټنوم',
	'twnmp-signup-email-placeholder' => 'برېښليک',
	'twnmp-create-account-button' => 'ګڼون جوړول',
	'twnmp-become-translator' => 'يو ژباړن شۍ',
	'twnmp-choose-languages-you-know' => 'هغه ژبې مو چې زده دي وټاکۍ',
	'twnmp-choose-another-language' => 'بله ژبه ټاکل...',
	'twnmp-choose-fill-account-details' => 'د ګڼون تفصيل مو وليکۍ',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'twnmp-mainpage' => 'Página principal',
	'twnmp-s-translators' => 'Tradutores',
	'twnmp-s-projects' => 'Projetos',
	'twnmp-s-languages' => 'Línguas',
	'twnmp-s-messages' => 'Mensagens para traduzir',
	'twnmp-bannerwho' => 'Imagem $1',
	'twnmp-show-more-projects' => 'Mostrar mais projetos...',
	'twnmp-translate-link' => 'Traduzir',
	'twnmp-translate-button' => 'Traduzir',
	'twnmp-your-translations-stats' => 'Suas estatísticas de tradução',
	'twnmp-translations-per-month' => 'Traduções/mês',
	'twnmp-reviews-per-month' => 'Revisões/mês',
	'twnmp-bottom-help' => 'Ajuda',
	'twnmp-bottom-special-pages' => 'Páginas especiais',
	'twnmp-bottom-languages-supported' => 'Línguas suportadas',
	'twnmp-bottom-about' => 'Sobre',
	'twnmp-signup-username-placeholder' => 'Nome de usuário',
	'twnmp-signup-password-placeholder' => 'Senha',
	'twnmp-create-account-button' => 'Criar conta',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'twnmp-desc' => 'Furnizează pagina principală pentru translatewiki.net',
	'twnmp-mainpage' => 'Pagina principală',
	'twnmp-s-translators' => 'Traducători',
	'twnmp-s-projects' => 'Proiecte',
	'twnmp-s-languages' => 'Limbi',
	'twnmp-s-messages' => 'Mesaje de tradus',
	'twnmp-bannerwho' => 'Imaginea: $1',
	'twnmp-show-more-projects' => 'Arată mai multe proiecte...',
	'twnmp-brand-motto' => 'Comunitate de traducere cu sursă deschisă',
	'twnmp-login' => 'Autentificare',
	'twnmp-search-placeholder' => 'Căutați și corectați traduceri',
	'twnmp-search-button' => 'Caută',
	'twnmp-search-choose-project' => 'Alegeți un proiect pentru a traduce',
	'twnmp-translate-link' => 'Traducere',
	'twnmp-proofread-link' => 'Verificare',
	'twnmp-translate-button' => 'Traducere',
	'twnmp-proofread-button' => 'Verificare',
	'twnmp-your-translations-stats' => 'Statisticile dv. de traducere',
	'twnmp-your-view-language-stats' => 'Vezi statisticile de limbă',
	'twnmp-translations-per-month' => 'Traduceri/lună',
	'twnmp-reviews-per-month' => 'Verificări/lună',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Clasat|Clasată}} pe locul $2 din $3 traducători<br />în $4',
	'twnmp-bottom-help' => 'Ajutor',
	'twnmp-bottom-special-pages' => 'Pagini speciale',
	'twnmp-bottom-languages-supported' => 'Limbi întreținute',
	'twnmp-bottom-about' => 'Despre',
	'twnmp-signup-username-placeholder' => 'Nume de utilizator',
	'twnmp-signup-password-placeholder' => 'Parolă',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Creare cont',
	'twnmp-become-translator' => 'Deveniți un traducător',
	'twnmp-choose-languages-you-know' => 'Alegeți limbile pe care le cunoașteți',
	'twnmp-choose-another-language' => 'Alegeți încă o limbă...',
	'twnmp-choose-fill-account-details' => 'Completați detaliile contului dumnevoastră',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'twnmp-desc' => "Dèje 'a pàgene prengepàle de translatewiki.net",
	'twnmp-mainpage' => 'Pàgena Prengepàle',
	'twnmp-s-translators' => 'Tradutture',
	'twnmp-s-projects' => 'Pruggette',
	'twnmp-s-languages' => 'Lènghe',
	'twnmp-s-messages' => 'Messàgge da traducere',
	'twnmp-bannerwho' => 'Immaggine $1',
	'twnmp-show-more-projects' => 'Fà vedè cchiù pruggette...',
	'twnmp-brand-motto' => "Iapre 'a comunitate origgenale de traduzione",
	'twnmp-login' => 'Tràse',
	'twnmp-search-placeholder' => 'Iacchie e corregge le traduziune',
	'twnmp-search-button' => 'Iacchie',
	'twnmp-search-choose-project' => "Scacchie 'nu proggette da traducere",
	'twnmp-translate-link' => 'Traduce',
	'twnmp-proofread-link' => 'Corregge',
	'twnmp-translate-button' => 'Traduce',
	'twnmp-proofread-button' => 'Corregge',
	'twnmp-your-translations-stats' => 'Le statisteche de le traduziune tune',
	'twnmp-your-view-language-stats' => "'Ndruche le statisteche d'a lènghe",
	'twnmp-translations-per-month' => 'Traduziune/mese',
	'twnmp-reviews-per-month' => 'Revisite/mese',
	'twnmp-translations-translator-ranking' => "{{GENDER:$1|Posizionate}} $2 de $3 tradutture<br />jndr'à $4",
	'twnmp-bottom-help' => 'Aijute',
	'twnmp-bottom-special-pages' => 'Pàggene speciale',
	'twnmp-bottom-languages-supported' => 'Lènghe supportate',
	'twnmp-bottom-about' => 'Sus a',
	'twnmp-signup-username-placeholder' => 'Nome utende',
	'twnmp-signup-password-placeholder' => 'Passuord',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => "Ccreje 'nu cunde utende",
	'twnmp-become-translator' => "Devinde 'nu traduttore",
	'twnmp-choose-languages-you-know' => "Scacchie 'na lènghe ca canusce",
	'twnmp-choose-another-language' => "Scacchie 'n'otra lènghe...",
	'twnmp-choose-fill-account-details' => "Inghie le dettaglie d'u cunde tune",
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'twnmp-mainpage' => 'Главна страна',
	'twnmp-s-translators' => 'Преводиоци',
	'twnmp-s-projects' => 'Пројекти',
	'twnmp-s-languages' => 'Језици',
	'twnmp-bannerwho' => 'Слика $1',
	'twnmp-login' => 'Пријавите се',
	'twnmp-search-button' => 'Пронађи',
	'twnmp-translate-link' => 'Преведи',
	'twnmp-proofread-link' => 'Провера',
	'twnmp-translate-button' => 'Преведи',
	'twnmp-proofread-button' => 'Провера',
	'twnmp-bottom-help' => 'Помоћ',
	'twnmp-bottom-special-pages' => 'Посебне странице',
	'twnmp-bottom-languages-supported' => 'Подржани језици',
	'twnmp-bottom-about' => 'О програму',
	'twnmp-signup-username-placeholder' => 'Корисничко име',
	'twnmp-signup-password-placeholder' => 'Лозинка',
	'twnmp-signup-email-placeholder' => 'Е-пошта',
	'twnmp-create-account-button' => 'Отвори налог',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'twnmp-desc' => 'Tillhandahåller translatewiki.net:s huvudsida',
	'twnmp-mainpage' => 'Huvudsida',
	'twnmp-s-translators' => 'Översättare',
	'twnmp-s-projects' => 'Projekt',
	'twnmp-s-languages' => 'Språk',
	'twnmp-s-messages' => 'Meddelanden att översätta',
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Visa fler projekt...',
	'twnmp-brand-motto' => 'Gemenskap för översättningar med öppen källkod',
	'twnmp-login' => 'Logga in',
	'twnmp-search-placeholder' => 'Hitta och korrigera översättningar',
	'twnmp-search-button' => 'Hitta',
	'twnmp-search-choose-project' => 'Välj ett projekt att översätta',
	'twnmp-translate-link' => 'Översätt',
	'twnmp-proofread-link' => 'Korrekturläs',
	'twnmp-translate-button' => 'Översätt',
	'twnmp-proofread-button' => 'Korrekturläs',
	'twnmp-your-translations-stats' => 'Din översättningsstatistik',
	'twnmp-your-view-language-stats' => 'Visa språkstatistik',
	'twnmp-translations-per-month' => 'Översättningar/månad',
	'twnmp-reviews-per-month' => 'Granskningar/månad',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rankad}} som $2 av $3 översättare<br />på $4',
	'twnmp-bottom-help' => 'Hjälp',
	'twnmp-bottom-special-pages' => 'Specialsidor',
	'twnmp-bottom-languages-supported' => 'Språk som stöds',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Användarnamn',
	'twnmp-signup-password-placeholder' => 'Lösenord',
	'twnmp-signup-email-placeholder' => 'E-post',
	'twnmp-create-account-button' => 'Skapa konto',
	'twnmp-become-translator' => 'Bli en översättare',
	'twnmp-choose-languages-you-know' => 'Välj språken du kan',
	'twnmp-choose-another-language' => 'Välj ett annat språk...',
	'twnmp-choose-fill-account-details' => 'Fyll i dina kontouppgifter',
);

/** Swahili (Kiswahili)
 * @author Lloffiwr
 */
$messages['sw'] = array(
	'twnmp-mainpage' => 'Mwanzo',
	'twnmp-login' => 'Ingia',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'twnmp-mainpage' => 'మొదటి పేజీ',
	'twnmp-s-translators' => 'అనువాదకులు',
	'twnmp-s-projects' => 'ప్రాజెక్టులు',
	'twnmp-s-languages' => 'భాషలు',
	'twnmp-s-messages' => 'అనువదించాల్సిన సందేశాలు',
	'twnmp-bannerwho' => 'చిత్రం $1',
	'twnmp-show-more-projects' => 'మరిన్ని ప్రాజెక్టులను చూపించు...',
	'twnmp-brand-motto' => 'బహిరంగాకర అనువాద సమాజం',
	'twnmp-login' => 'ప్రవేశించండి',
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

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'twnmp-desc' => 'Забезпечує головну сторінку translatewiki.net',
	'twnmp-mainpage' => 'Головна сторінка',
	'twnmp-s-translators' => 'перекладачів',
	'twnmp-s-projects' => 'проектів',
	'twnmp-s-languages' => 'мови',
	'twnmp-s-messages' => 'повідомлень для перекладу',
	'twnmp-bannerwho' => 'Зображення $1',
	'twnmp-show-more-projects' => 'Показати більше проектів...',
	'twnmp-brand-motto' => 'Спільнота перекладачів відкритих вихідних кодів',
	'twnmp-login' => 'Увійти',
	'twnmp-search-placeholder' => 'Знайти та виправити переклади',
	'twnmp-search-button' => 'Шукати',
	'twnmp-search-choose-project' => 'Виберіть проект для перекладу',
	'twnmp-translate-link' => 'Перекласти',
	'twnmp-proofread-link' => 'Перевірити',
	'twnmp-translate-button' => 'Переклад',
	'twnmp-proofread-button' => 'Перевірка',
	'twnmp-your-translations-stats' => 'Статистика Ваших перекладів',
	'twnmp-your-view-language-stats' => 'Переглянути мовну статистику',
	'twnmp-translations-per-month' => 'перекладів/місяць',
	'twnmp-reviews-per-month' => 'перевірок/місяць',
	'twnmp-translations-translator-ranking' => '$2 {{GENDER:$1|за рейтингом}} з $3 перекладачів<br />мовою "$4"',
	'twnmp-bottom-help' => 'Довідка',
	'twnmp-bottom-special-pages' => 'Спеціальні сторінки',
	'twnmp-bottom-languages-supported' => 'Підтримувані мови',
	'twnmp-bottom-about' => 'Опис',
	'twnmp-signup-username-placeholder' => "Ім'я користувача",
	'twnmp-signup-password-placeholder' => 'Пароль',
	'twnmp-signup-email-placeholder' => 'Ел. пошта',
	'twnmp-create-account-button' => 'Створити обліковий запис',
	'twnmp-become-translator' => 'Стати перекладачем',
	'twnmp-choose-languages-you-know' => 'Виберіть мови, які Ви знаєте',
	'twnmp-choose-another-language' => 'Виберіть іншу мову...',
	'twnmp-choose-fill-account-details' => 'Заповніть Ваші дані',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'twnmp-desc' => 'Cung cấp trang đầu của translatewiki.net',
	'twnmp-mainpage' => 'Trang chính',
	'twnmp-s-translators' => 'Biên dịch viên',
	'twnmp-s-projects' => 'Dự án',
	'twnmp-s-languages' => 'Ngôn ngữ',
	'twnmp-s-messages' => 'Thông điệp để dịch',
	'twnmp-bannerwho' => 'Hình của $1',
	'twnmp-show-more-projects' => 'Xem thêm dự án…',
	'twnmp-brand-motto' => 'Cộng đồng biên dịch mã nguồn mở',
	'twnmp-login' => 'Đăng nhập',
	'twnmp-search-placeholder' => 'Tìm và sửa bản dịch',
	'twnmp-search-button' => 'Tìm kiếm',
	'twnmp-search-choose-project' => 'Chọn một dự án để dịch',
	'twnmp-translate-link' => 'Biên dịch',
	'twnmp-proofread-link' => 'Hiệu đính',
	'twnmp-translate-button' => 'Biên dịch',
	'twnmp-proofread-button' => 'Hiệu đính',
	'twnmp-your-translations-stats' => 'Thống kê biên dịch của bạn',
	'twnmp-your-view-language-stats' => 'Xem thống kê ngôn ngữ',
	'twnmp-translations-per-month' => 'Bản dịch/tháng',
	'twnmp-reviews-per-month' => 'Đánh giá/tháng',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1}}Đứng hạng $2<br />trên tổng $3 biên dịch viên $4',
	'twnmp-bottom-help' => 'Trợ giúp',
	'twnmp-bottom-special-pages' => 'Trang đặc biệt',
	'twnmp-bottom-languages-supported' => 'Ngôn ngữ có sẵn',
	'twnmp-bottom-about' => 'Giới thiệu',
	'twnmp-signup-username-placeholder' => 'Tên người dùng',
	'twnmp-signup-password-placeholder' => 'Mật khẩu',
	'twnmp-signup-email-placeholder' => 'Thư điện tử',
	'twnmp-create-account-button' => 'Mở tài khoản',
	'twnmp-become-translator' => 'Trở thành biên dịch viên',
	'twnmp-choose-languages-you-know' => 'Chọn các ngôn ngữ quen thuộc',
	'twnmp-choose-another-language' => 'Chọn một ngôn ngữ khác…',
	'twnmp-choose-fill-account-details' => 'Điền vào các chi tiết tài khoản của bạn',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shirayuki
 * @author Timothy Gu
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'twnmp-mainpage' => '首页',
	'twnmp-s-translators' => '译者',
	'twnmp-s-projects' => '项目',
	'twnmp-s-languages' => '语言',
	'twnmp-s-messages' => '需要翻译的词条',
	'twnmp-bannerwho' => '图片：$1',
	'twnmp-show-more-projects' => '显示更多的项目...',
	'twnmp-login' => '登录',
	'twnmp-search-button' => '查找',
	'twnmp-translate-link' => '翻译',
	'twnmp-proofread-link' => '校对',
	'twnmp-translate-button' => '翻译',
	'twnmp-proofread-button' => '校对',
	'twnmp-your-translations-stats' => '您的翻译统计',
	'twnmp-your-view-language-stats' => '查看语言统计',
	'twnmp-translations-per-month' => '翻译每月',
	'twnmp-reviews-per-month' => '复审每月',
	'twnmp-bottom-help' => '帮助',
	'twnmp-bottom-special-pages' => '特殊页面',
	'twnmp-bottom-languages-supported' => '支持的语言',
	'twnmp-bottom-about' => '关于',
	'twnmp-signup-username-placeholder' => '用户名',
	'twnmp-signup-password-placeholder' => '密码',
	'twnmp-signup-email-placeholder' => '电子邮件',
	'twnmp-create-account-button' => '创建账户',
	'twnmp-choose-another-language' => '选择其他语言...',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'twnmp-desc' => '提供 translatewiki.net 的主要頁面',
	'twnmp-mainpage' => '首頁',
	'twnmp-s-translators' => '位翻譯者',
	'twnmp-s-projects' => '個計劃',
	'twnmp-s-languages' => '種語言',
	'twnmp-s-messages' => '條要翻譯的訊息',
	'twnmp-bannerwho' => '$1的圖像',
	'twnmp-show-more-projects' => '顯示更多的計劃...',
	'twnmp-brand-motto' => '開源翻譯社區',
	'twnmp-login' => '登入',
	'twnmp-search-placeholder' => '尋找和修復翻譯',
	'twnmp-search-button' => '尋找',
	'twnmp-search-choose-project' => '選擇一個項目翻譯',
	'twnmp-translate-link' => '翻譯',
	'twnmp-proofread-link' => '校對',
	'twnmp-translate-button' => '翻譯',
	'twnmp-proofread-button' => '校對',
	'twnmp-your-translations-stats' => '您的翻譯統計',
	'twnmp-your-view-language-stats' => '查看語言統計資訊',
	'twnmp-translations-per-month' => '翻譯每月',
	'twnmp-reviews-per-month' => '檢查每月',
	'twnmp-translations-translator-ranking' => '在$3位$4翻譯者中{{GENDER:$1|排名}}第$2',
	'twnmp-bottom-help' => '幫助',
	'twnmp-bottom-special-pages' => '特殊頁面',
	'twnmp-bottom-languages-supported' => '支援的語言',
	'twnmp-bottom-about' => '關於',
	'twnmp-signup-username-placeholder' => '用戶名',
	'twnmp-signup-password-placeholder' => '密碼',
	'twnmp-signup-email-placeholder' => '電郵',
	'twnmp-create-account-button' => '建立帳戶',
	'twnmp-become-translator' => '成為一位翻譯者',
	'twnmp-choose-languages-you-know' => '選擇你懂的語言',
	'twnmp-choose-another-language' => '選擇其他語言...',
	'twnmp-choose-fill-account-details' => '填寫您的帳戶詳細資訊',
);
