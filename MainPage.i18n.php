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
 * @author Amire80
 */
$messages['en'] = array(
	'twnmp-desc' => 'Provides the translatewiki.net main page',
	'twnmp-mainpage' => 'Main page',

	'twnmp-s-translators' => '{{PLURAL:$1|Translator|Translators}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Project|Projects}}',
	'twnmp-s-languages' => 'Active {{PLURAL:$1|language|languages}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Message|Messages}} to translate',

	'twnmp-bannerwho' => 'Image $1',

	'twnmp-show-more-projects' => 'Show all projects...',
	'twnmp-brand-motto' => 'Open source translation community',
	'twnmp-login' => 'Log in',
	'twnmp-logout' => 'Log out',
	'twnmp-search-placeholder' => 'Find and fix translations',
	'twnmp-search-button' => 'Find',
	'twnmp-search-choose-project' => 'Choose a project to translate',
	'twnmp-translate-link' => 'Translate',
	'twnmp-proofread-link' => 'Review',
	'twnmp-view-link' => 'View translations',
	'twnmp-translate-button' => 'Translate',
	'twnmp-proofread-button' => 'Review',
	'twnmp-view-button' => 'View translations',

	'twnmp-your-translations-stats' => 'Your translation statistics',
	'twnmp-your-translations-stats-all-languages' => 'For all languages',
	'twnmp-your-view-language-stats' => 'View language statistics',
	'twnmp-translations-per-month' => 'Translations/month',
	'twnmp-translations-in-sandbox' => 'Translations',
	'twnmp-reviews-per-month' => 'Reviews/month',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=You are the only one<br />for $4|{{GENDER:$1|Ranked}} $2 of $3<br />for $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=You are the only one|{{GENDER:$1|Ranked}} $2 of $3}}',

	'twnmp-add-project' => 'Add your open source project for translation',

	'twnmp-sandboxed' => 'You need to provide more translations to get full translation rights.',
	'twnmp-sandboxed-limit' => 'You reached the translation limit. Our team will verify and upgrade your account soon.',

	'twnmp-bottom-help' => 'Help',
	'twnmp-bottom-support' => 'Support desk',
	'twnmp-bottom-languages-supported' => 'Supported languages',
	'twnmp-bottom-about' => 'About',
	'twnmp-signup-username-placeholder' => 'Username',
	'twnmp-signup-password-placeholder' => 'Password',
	'twnmp-signup-email-placeholder' => 'Email',
	'twnmp-create-account-button' => 'Create account',

	'twnmp-become-translator' => 'Become a translator',
	'twnmp-choose-languages-you-know' => 'Choose languages you know',
	'twnmp-choose-another-language' => 'Choose another language...',
	'twnmp-choose-fill-account-details' => 'Enter your account details',

	'twnmp-join-community' => 'Join the community',
	'twnmp-join-community-desc' => 'If you are a developer interested in documenting translations, or just exploring the platform, you are also welcome.',
	'twnmp-join-community-reason' => 'Why are you interested in joining?',
	'twnmp-create-account-cancel' => 'Cancel',
	'twnmp-join-community-info' => 'Not a translator? You can still join the community.',

	'twnmp-stats-number-k' => '$1k',
	'twnmp-select-target-language' => 'Select language',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|One message|$1 messages}}',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Lloffiwr
 * @author Nemo bis
 * @author Nike
 * @author Purodha
 * @author Shirayuki
 * @author 아라
 */
$messages['qqq'] = array(
	'twnmp-desc' => '{{desc|name=Twn Main Page}}',
	'twnmp-mainpage' => '{{doc-special|MainPage|unlisted=1}}
{{Identical|Main page}}',
	'twnmp-s-translators' => 'Appears in a box on the main page. Parameters:
* $1 - the relevant number

Preceded by the number of the translators at the site.

See example: [[Special:MainPage]]
{{Identical|Translator}}',
	'twnmp-s-projects' => 'Appears in a box on the main page.
* $1 the relevant number.

Preceded by the number of the projects supported at the site.

See example: [[Special:MainPage]]
{{Identical|Project}}',
	'twnmp-s-languages' => 'Appears in a box on the main page. Parameters:
* $1 - number of languages, for PLURAL support

Preceded by the number of the languages supported at the site.

See example: [[Special:MainPage]]',
	'twnmp-s-messages' => 'Appears in a box on the main page.
* $1 the relevant number.

Preceded by the number of the messages (strings) to translate at the site.

See example: [[Special:MainPage]]',
	'twnmp-bannerwho' => 'Banner image attribution. Parameters:
* $1 - usually contains the name of the photographer and license abbreviation. e.g. CC-BY Jack1234

See example: [[Special:MainPage]]',
	'twnmp-show-more-projects' => 'Shown in large font in a box at the bottom of the main page next to boxes with icons and names of other projects.',
	'twnmp-brand-motto' => 'A motto shown under the site name at the top of the main page: open source translations by a community part of open source movement, or "translation community (which is a part) of open source (movement)".',
	'twnmp-login' => 'A link for logging in.
{{Identical|Log in}}',
	'twnmp-logout' => 'A link for logging out.
{{Identical|Log out}}',
	'twnmp-search-placeholder' => 'A placeholder for the search box on the main page.',
	'twnmp-search-button' => 'A label for the search button on the main page.
{{Identical|Find}}',
	'twnmp-search-choose-project' => 'A heading for the project icons buttons section.',
	'twnmp-translate-link' => 'A link that appears at the bottom of a box with the project icon near {{msg-mw|twnmp-proofread-link}}.
{{Identical|Translate}}',
	'twnmp-proofread-link' => 'A link that appears at the bottom of a box with the project icon near {{msg-mw|twnmp-translate-link}}.
{{Identical|Review}}',
	'twnmp-view-link' => 'A link that appears at the bottom of a box with the project icon.
{{Identical|View translation}}',
	'twnmp-translate-button' => "A label for the button that appears near the user's translation statistics.
Pressing the button brings the user to the translation editor. Parallel to {{msg-mw|twnmp-proofread-button}}.
{{Identical|Translate}}",
	'twnmp-view-button' => "A label for the button that appears near the user's translation statistics when the maximum number of translations in sandbox has already been done.
{{Identical|View translation}}",
	'twnmp-proofread-button' => "A label for the button that appears near the user's translation statistics.
Pressing the button brings the user to the translation editor in review mode. Parallel to {{msg-mw|twnmp-translate-button}}.
{{Identical|Review}}",
	'twnmp-your-translations-stats' => "A header for the user's translation statistics.

See example: [[Special:MainPage]]",
	'twnmp-your-translations-stats-all-languages' => 'Appears under the <code><nowiki><h2></nowiki></code> heading {{msg-mw|Twnmp-your-translations-stats}} when the user language is the same as the source language for all translations.

See example of English version: [{{canonicalurl:Special:MainPage|uselang=en Special:MainPage}}]',
	'twnmp-your-view-language-stats' => "A link that appears under the user's translation statistics.",
	'twnmp-translations-per-month' => "Used in [[Special:Mainpage]].
Appears in the user's statistics box near a number.
Means that the users performs that number of translations every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.",
	'twnmp-translations-in-sandbox' => 'Similar to {{msg-mw|Twnmp-translations-per-month}} but for sandboxed users.
{{Identical|Translation}}',
	'twnmp-reviews-per-month' => "Appears in the user's statistics box near a number.
Means that the users performs that number of review actions every month.
Translate it in a way that is natural to your language - you don't have to use the '/' character.
{{Identical|Review}}",
	'twnmp-translations-translator-ranking' => 'Shown in the "Translate" and "Review" boxes in the center of [[Special:MainPage]].

Refers to the ranking of the user among other translators or reviewers to that language.

Can be broken to two lines. <code><nowiki><br /></nowiki></code> is a line break. Break it in any way that is natural in your language.

Parameters:
* $1 - the username, which can be used for GENDER
* $2 - the ranking of this user
* $3 - the total number of translators into that language, can be used for PLURAL
* $4 - the language name
See also:
* {{msg-mw|Twnmp-translations-translator-ranking-source}}',
	'twnmp-translations-translator-ranking-source' => 'Shown in the "Translate" and "Review" boxes in the center of [[Special:MainPage]] when it is shown in the source language of all message groups.

Refers to the ranking of the users among other translators on the site.

Parameters:
* $1 - the username, which can be used for GENDER
* $2 - the ranking of this user
* $3 - the total number of translators, can be used for PLURAL
See also:
* {{msg-mw|Twnmp-translations-translator-ranking}}.',
	'twnmp-add-project' => 'Used as link text for the link pointing to [[Special:MyLanguage/Translating:New project|Translating:New project]].

See example: [[Special:MainPage]]',
	'twnmp-sandboxed' => 'A text shown to sandboxed users in their personal area on the main page instead of proofreading statistics.',
	'twnmp-sandboxed-limit' => 'A text shown to sandboxed users in their personal area on the main page instead of proofreading statistics.',
	'twnmp-bottom-help' => 'A link that appears at the bottom of the main page.

The link points to [[Translating:Index]].
{{Identical|Help}}',
	'twnmp-bottom-support' => 'Used in [[Special:MainPage]].

Used as link text for the link pointing to [[Support]].

Preceded by {{msg-mw|Twnmp-bottom-languages-supported}}.

Followed by {{msg-mw|Twnmp-bottom-help}}.',
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
	'twnmp-join-community' => 'Header in the signup form for non-translators.

Followed by {{msg-mw|Twnmp-join-community-desc}}.',
	'twnmp-join-community-desc' => 'Not for non-translators who are signing up via the main page',
	'twnmp-join-community-reason' => 'Label for a text area',
	'twnmp-create-account-cancel' => 'Cancel button text.
{{Identical|Cancel}}',
	'twnmp-join-community-info' => 'A note at the end of the sign up form in the main page',
	'twnmp-stats-number-k' => 'Used in [[Special:Mainpage]].

Parameters:
* $1 - the number of the thousands of messages or users on the site; can be a decimal fraction. e.g. "4.9"

The message should be short, to fit in the box. If you have to translate it and cannot make it short, notify [[Support]].

If "k" is a good thousands marker in your language, do not translate this message.

{{Identical|$1k}}',
	'twnmp-select-target-language' => 'Label of button to choose a different language if current language is same as source of all message groups.
{{Identical|Select language}}',
	'twn-mainpage-total-messages-in-language' => 'Text displaying number of messages in a language.

Parameters:
* $1 - total number of messages.',
);

/** Afrikaans (Afrikaans)
 * @author Andriykopanytsia
 * @author Naudefj
 */
$messages['af'] = array(
	'twnmp-desc' => 'Verskaf die tuisblad van translatewiki.net',
	'twnmp-mainpage' => 'Tuisblad',
	'twnmp-s-translators' => 'Vertalers', # Fuzzy
	'twnmp-s-projects' => 'Projekte', # Fuzzy
	'twnmp-s-languages' => 'Tale', # Fuzzy
	'twnmp-s-messages' => 'Boodskappe om te vertaal', # Fuzzy
	'twnmp-bannerwho' => 'Beeld $1',
	'twnmp-show-more-projects' => 'Wys meer projekte...', # Fuzzy
	'twnmp-brand-motto' => 'Oopbron vertaalgemeenskap',
	'twnmp-login' => 'Meld aan',
	'twnmp-search-placeholder' => 'Vind en korrigeer vertalings',
	'twnmp-search-button' => 'Vind',
	'twnmp-search-choose-project' => "Soek 'n projek om te vertaal",
	'twnmp-translate-link' => 'Vertaal',
	'twnmp-proofread-link' => 'Proeflees', # Fuzzy
	'twnmp-translate-button' => 'Vertaal',
	'twnmp-proofread-button' => 'Proeflees', # Fuzzy
	'twnmp-your-translations-stats' => 'U vertaalstatistieke',
	'twnmp-your-view-language-stats' => 'Wys taalstatistieke',
	'twnmp-translations-per-month' => 'Vertalings/maand',
	'twnmp-reviews-per-month' => 'Hersienings/maand',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Gelys as}} $2 van $3 vertalers<br />in $4', # Fuzzy
	'twnmp-bottom-help' => 'Hulp',
	'twnmp-bottom-languages-supported' => 'Ondersteunde tale',
	'twnmp-bottom-about' => 'Aangaande',
	'twnmp-signup-username-placeholder' => 'Gebruikersnaam',
	'twnmp-signup-password-placeholder' => 'Wagwoord',
	'twnmp-signup-email-placeholder' => 'E-pos',
	'twnmp-create-account-button' => 'Skep gebruiker',
	'twnmp-become-translator' => "Word 'n vertaler",
	'twnmp-choose-languages-you-know' => 'Kies tale wat u ken',
	'twnmp-choose-another-language' => 'Kies ander taal...',
	'twnmp-choose-fill-account-details' => 'Verskaf gebruikersdetails', # Fuzzy
	'twnmp-stats-number-k' => '$1k',
);

/** Arabic (العربية)
 * @author مشعل الحربي
 */
$messages['ar'] = array(
	'twnmp-view-button' => 'عرض الترجمات',
	'twnmp-translations-in-sandbox' => 'ترجمات',
	'twnmp-sandboxed' => 'أنت بحاجة إلى تقديم المزيد من الترجمات للحصول على صلاحيات الترجمة الكاملة.',
	'twnmp-sandboxed-limit' => 'لقد بلغت حد الترجمة. سيقوم فريقنا بتأكيد وترقية حسابك قريبًا.',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'twnmp-desc' => 'Ufre la páxina principal de translatewiki.net',
	'twnmp-mainpage' => 'Portada',
	'twnmp-s-translators' => '{{PLURAL:$1|Traductor|Traductores}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Proyeutu|Proyeutos}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Llingua activa|Llingües actives}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Mensaxe|Mensaxes}} a traducir',
	'twnmp-bannerwho' => 'Imaxe $1',
	'twnmp-show-more-projects' => 'Ver tolos proyeutos...',
	'twnmp-brand-motto' => 'Comunidá de traducción de códigu abiertu',
	'twnmp-login' => 'Aniciar sesión',
	'twnmp-logout' => 'Salir',
	'twnmp-search-placeholder' => 'Alcontrar y correxir traducciones',
	'twnmp-search-button' => 'Alcontrar',
	'twnmp-search-choose-project' => 'Escueya un proyeutu pa traducir',
	'twnmp-translate-link' => 'Traducir',
	'twnmp-proofread-link' => 'Revisar',
	'twnmp-translate-button' => 'Traducir',
	'twnmp-view-button' => 'Ver les traducciones',
	'twnmp-proofread-button' => 'Revisar',
	'twnmp-your-translations-stats' => 'Les sos estadístiques de traducción',
	'twnmp-your-translations-stats-all-languages' => 'Pa toles llingües',
	'twnmp-your-view-language-stats' => 'Ver estadístiques de llingua',
	'twnmp-translations-per-month' => 'traducciones/mes',
	'twnmp-translations-in-sandbox' => 'Traducciones',
	'twnmp-reviews-per-month' => 'Revisiones/mes',
	'twnmp-translations-translator-ranking' => "{{PLURAL:$3|1=Ye {{GENDER:$1|l'únicu|la única}}<br />pal $4|{{GENDER:$1|Ta}} nel puestu $2 de $3<br />pal $4}}",
	'twnmp-translations-translator-ranking-source' => "{{PLURAL:$3|1=Ye {{GENDER:$1|l'únicu|la única}}|{{GENDER:$1|Ta}} nel puestu $2 de $3}}",
	'twnmp-add-project' => "Amieste'l so proyeutu de códigu abiertu pa traducilu",
	'twnmp-sandboxed' => 'Tien de facer más traducciones pa consiguir permisu de traducción completu.',
	'twnmp-sandboxed-limit' => 'Llegó a la llende de traducciones. El nuesu equipu comprobará y promocionará la so cuenta pronto.',
	'twnmp-bottom-help' => 'Ayuda',
	'twnmp-bottom-support' => 'Serviciu de sofitu',
	'twnmp-bottom-languages-supported' => 'Llingües sofitaes',
	'twnmp-bottom-about' => 'Tocante a',
	'twnmp-signup-username-placeholder' => "Nome d'usuariu",
	'twnmp-signup-password-placeholder' => 'Contraseña',
	'twnmp-signup-email-placeholder' => 'Corréu',
	'twnmp-create-account-button' => 'Crear una cuenta',
	'twnmp-become-translator' => 'Faigase traductor',
	'twnmp-choose-languages-you-know' => 'Esbille les llingües que sabe',
	'twnmp-choose-another-language' => 'Escoyer otra llingua...',
	'twnmp-choose-fill-account-details' => 'Rellene los detalles de la cuenta de so', # Fuzzy
	'twnmp-join-community' => 'Xunise a la comunidá',
	'twnmp-join-community-desc' => 'Si ye un desendolcador interesáu en documentar traducciones, o si namái ta esplorando la plataforma, tamién ye bienveníu.',
	'twnmp-join-community-reason' => '¿Por qué ta interesáu en xunise?',
	'twnmp-create-account-cancel' => 'Encaboxar',
	'twnmp-join-community-info' => '¿Nun ye un traductor? Tamién pue xunise a la comunidá.',
	'twnmp-select-target-language' => 'Escoyer llingua',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un mensaxe|$1 mensaxes}}',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
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
	'twnmp-s-translators' => 'অনুবাদকগণ', # Fuzzy
	'twnmp-s-projects' => 'প্রকল্পসমূহ', # Fuzzy
	'twnmp-s-languages' => 'ভাষাসমূহ', # Fuzzy
	'twnmp-s-messages' => 'অনুবাদের জন্য বার্তাসমূহ', # Fuzzy
	'twnmp-bannerwho' => 'চিত্র $1',
	'twnmp-show-more-projects' => 'আরও প্রকল্প দেখাও...', # Fuzzy
	'twnmp-brand-motto' => 'ওপেন সোর্স অনুবাদ সম্প্রদায়',
	'twnmp-login' => 'প্রবেশ',
	'twnmp-search-placeholder' => 'অনুবাদ অনুসন্ধান এবং ঠিক করুন',
	'twnmp-search-button' => 'অনুসন্ধান করুন',
	'twnmp-search-choose-project' => 'অনুবাদের জন্য কোনো প্রকল্প পছন্দ করুন',
	'twnmp-translate-link' => 'অনুবাদ',
	'twnmp-proofread-link' => 'প্রুফরিড', # Fuzzy
	'twnmp-translate-button' => 'অনুবাদ',
	'twnmp-proofread-button' => 'প্রুফরিড', # Fuzzy
	'twnmp-your-translations-stats' => 'আপনার অনুবাদ পরিসংখ্যান',
	'twnmp-your-view-language-stats' => 'ভাষার পরিসংখ্যান দেখাও',
	'twnmp-translations-per-month' => 'অনুবাদ/মাস',
	'twnmp-reviews-per-month' => 'পর্যালোচনা/মাস',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|র‍্যাংক}} $4 ভাষায় $3 অনুবাদকের মধ্যে $2 নম্বর', # Fuzzy
	'twnmp-bottom-help' => 'সাহায্য',
	'twnmp-bottom-languages-supported' => 'সমর্থিত ভাষাসমূহ',
	'twnmp-bottom-about' => 'পরিচিতি',
	'twnmp-signup-username-placeholder' => 'ব্যবহারকারী নাম',
	'twnmp-signup-password-placeholder' => 'শব্দচাবি (Password)',
	'twnmp-signup-email-placeholder' => 'ইমেইল',
	'twnmp-create-account-button' => 'অ্যাকাউন্ট তৈরি করুন',
	'twnmp-become-translator' => 'অনুবাদক হোন',
	'twnmp-choose-languages-you-know' => 'আপনি যে ভাষাসমূহ জানেন তা নির্বাচন করুন',
	'twnmp-choose-another-language' => 'অন্য একটি ভাষা নির্বাচন করুন...',
	'twnmp-choose-fill-account-details' => 'আপনার অ্যাকাউন্ট বিস্তারিত পূরণ করুন', # Fuzzy
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'twnmp-mainpage' => 'Degemer',
	'twnmp-s-translators' => '{{PLURAL:$1|Troer}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Raktres}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Yezh}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Kemennadenn}} da dreiñ',
	'twnmp-bannerwho' => 'Skeudenn $1',
	'twnmp-show-more-projects' => 'Diskouez an holl raktresoù...',
	'twnmp-login' => 'Kevreañ',
	'twnmp-search-button' => 'Klask',
	'twnmp-search-choose-project' => 'Dibab ur raktres da dreiñ',
	'twnmp-translate-link' => 'Treiñ',
	'twnmp-proofread-link' => 'Adwelet',
	'twnmp-translate-button' => 'Treiñ',
	'twnmp-view-button' => 'Gwelet an troidigezhioù',
	'twnmp-proofread-button' => 'Adwelet',
	'twnmp-your-translations-stats' => 'Ho stadegoù treiñ',
	'twnmp-your-view-language-stats' => 'Diskouez ar stadegoù yezh',
	'twnmp-translations-per-month' => 'Troidigezh/miz',
	'twnmp-translations-in-sandbox' => 'Troidigezhioù',
	'twnmp-bottom-help' => 'Skoazell',
	'twnmp-bottom-languages-supported' => 'Yezhoù skoret',
	'twnmp-bottom-about' => 'Diwar-benn',
	'twnmp-signup-username-placeholder' => 'Anv implijer',
	'twnmp-signup-password-placeholder' => 'Ger-tremen',
	'twnmp-signup-email-placeholder' => 'Postel',
	'twnmp-create-account-button' => 'Krouiñ ur gont',
	'twnmp-become-translator' => 'Dont da vezañ troer',
	'twnmp-choose-languages-you-know' => 'Dibabit ar yezhoù a anavezit',
	'twnmp-choose-another-language' => 'Dibab ur yezh all...',
	'twnmp-choose-fill-account-details' => 'Klokaat titouroù ho kont', # Fuzzy
	'twnmp-create-account-cancel' => 'Nullañ',
	'twnmp-select-target-language' => 'Dibab ar yezh',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Ur gemennadenn|$1 kemennadenn}}',
);

/** Catalan (català)
 * @author Fitoschido
 * @author Pginer
 * @author Toniher
 */
$messages['ca'] = array(
	'twnmp-desc' => 'Proporciona la pàgina principal de translatewiki.net',
	'twnmp-mainpage' => 'Pàgina principal',
	'twnmp-s-translators' => '{{PLURAL:$1|traductor|traductors}}',
	'twnmp-s-projects' => '{{PLURAL:$1|projecte|projectes}}',
	'twnmp-s-languages' => '{{PLURAL:$1|llengua activa|llengües actives}}',
	'twnmp-s-messages' => '{{PLURAL:$1|missatge|missatges}} per traduir',
	'twnmp-bannerwho' => 'Imatge $1',
	'twnmp-show-more-projects' => 'Mostra totes els projectes...',
	'twnmp-brand-motto' => 'Comunitat de traducció de programari de codi obert',
	'twnmp-login' => 'Inici de sessió',
	'twnmp-logout' => 'Finalitza la sessió',
	'twnmp-search-placeholder' => 'Cerca i correcció de traduccions',
	'twnmp-search-button' => 'Cerca',
	'twnmp-search-choose-project' => 'Trieu un projecte per traduir',
	'twnmp-translate-link' => 'Tradueix',
	'twnmp-proofread-link' => 'Revisió',
	'twnmp-translate-button' => 'Tradueix',
	'twnmp-view-button' => 'Mostra les traduccions',
	'twnmp-proofread-button' => 'Revisió',
	'twnmp-your-translations-stats' => 'Les vostres estadístiques de traducció',
	'twnmp-your-translations-stats-all-languages' => 'Totes les llengües',
	'twnmp-your-view-language-stats' => 'Mostra les estadístiques de la llengua',
	'twnmp-translations-per-month' => 'traduccions/mes',
	'twnmp-translations-in-sandbox' => 'Traduccions',
	'twnmp-reviews-per-month' => 'Revisions/mes',
	'twnmp-translations-translator-ranking' => "{{PLURAL:$3|1=Sou l'únic que tradueix<br />en $4|{{GENDER:$1|Sou el número}} $2 de $3<br /> que tradueix en $4}}",
	'twnmp-translations-translator-ranking-source' => "{{PLURAL:$3|1=Sou l'únic|{{GENDER:$1|Sou el}} $2 de $3}}",
	'twnmp-add-project' => 'Afegeix el teu projecte de codi obert per traduir-lo',
	'twnmp-sandboxed' => 'Cal que feu més traduccions per obtenir plens permisos de traducció.',
	'twnmp-sandboxed-limit' => 'Heu arribat al límit de traducció. El nostre equip verificarà i actualitzarà el vostre compte ben aviat.',
	'twnmp-bottom-help' => 'Ajuda',
	'twnmp-bottom-support' => 'Assistència',
	'twnmp-bottom-languages-supported' => 'Llengües incloses',
	'twnmp-bottom-about' => 'Quant a',
	'twnmp-signup-username-placeholder' => "Nom d'usuari",
	'twnmp-signup-password-placeholder' => 'Contrasenya',
	'twnmp-signup-email-placeholder' => 'Adreça electrònica',
	'twnmp-create-account-button' => 'Crea un compte',
	'twnmp-become-translator' => 'Convertiu-vos en un traductor',
	'twnmp-choose-languages-you-know' => 'Trieu les llengües que coneixeu',
	'twnmp-choose-another-language' => 'Trieu una altra llengua…',
	'twnmp-choose-fill-account-details' => 'Introduïu els detalls del compte',
	'twnmp-join-community' => 'Uniu-vos a la comunitat',
	'twnmp-join-community-desc' => 'Si sou un desenvolupador interessat en documentar traduccions o simplement en explorar la plataforma també sou benvingut.',
	'twnmp-join-community-reason' => 'Per què us interessa unir-vos-hi?',
	'twnmp-create-account-cancel' => 'Cancel·la',
	'twnmp-join-community-info' => 'No sou un traductor? També podeu unir-vos a la comunitat.',
	'twnmp-select-target-language' => 'Selecciona una llengua',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un missatge|$1 missatges}}',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'twnmp-mainpage' => 'Коьрта агӀо',
	'twnmp-s-translators' => '{{PLURAL:$1|гочдархо|гочдархой}}',
	'twnmp-s-projects' => '{{PLURAL:$1|проект|проекташ}}',
	'twnmp-s-languages' => '{{PLURAL:$1|жигара мотт|жигара меттанаш}}',
	'twnmp-s-messages' => '{{PLURAL:$1|интерфейсан гочдан хаам|интерфейсан гочдан хаамаш}}',
	'twnmp-bannerwho' => 'Сурт: $1',
	'twnmp-show-more-projects' => 'Гайта ерриг проекташ...', # Fuzzy
	'twnmp-brand-motto' => 'Гочдаран маьрша хьост',
	'twnmp-logout' => 'Болх дӀаберзор',
	'twnmp-search-placeholder' => 'Гоч динарг лахар а нисдар а',
	'twnmp-search-button' => 'Лаха',
	'twnmp-search-choose-project' => 'Гочдан проект харжа',
	'twnmp-translate-link' => 'Гоч',
	'twnmp-translate-button' => 'Гоч',
	'twnmp-your-translations-stats' => 'Хьан гочдаршан статистика',
	'twnmp-your-view-language-stats' => 'Меттан статистике хьажар',
	'twnmp-translations-per-month' => 'Батта чохь гоч йина',
	'twnmp-translations-in-sandbox' => 'Гочдинарш',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Хьо цхьаъ<br />ву/ю гочдархо $4|{{GENDER:$1|Хьа}} $2- меттиг ю $3 юкъехь<br />{{PLURAL:$3|гочдархо|гочдархой}} $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Хьо цхьаъ ву/ю гочдархо|{{GENDER:$1|Хьа}} $2- меттиг ю $3 юкъехь}}',
	'twnmp-create-account-cancel' => 'Цаоьшу',
	'twnmp-stats-number-k' => '$1&nbsp;эза.',
);

/** Czech (čeština)
 * @author Littledogboy
 * @author Mormegil
 */
$messages['cs'] = array(
	'twnmp-desc' => 'Poskytuje hlavní stranu translatewiki.net',
	'twnmp-mainpage' => 'Hlavní strana',
	'twnmp-s-translators' => '{{PLURAL:$1|překladatel|překladatelé|překladatelů}}',
	'twnmp-s-projects' => '{{PLURAL:$1|projekt|projekty|projektů}}',
	'twnmp-s-languages' => '{{PLURAL:$1|aktivní jazyk|aktivní jazyky|aktivních jazyků}}',
	'twnmp-s-messages' => '{{PLURAL:$1|zpráva|zprávy|zpráv}} k&nbsp;překladu',
	'twnmp-bannerwho' => 'Obrázek: $1',
	'twnmp-show-more-projects' => 'Zobrazit všechny projekty…',
	'twnmp-brand-motto' => 'Open-source překladatelská komunita',
	'twnmp-login' => 'Přihlásit se',
	'twnmp-logout' => 'Odhlásit se',
	'twnmp-search-placeholder' => 'Hledat a opravit překlady',
	'twnmp-search-button' => 'Najít',
	'twnmp-search-choose-project' => 'Vyberte projekt, který chcete překládat',
	'twnmp-translate-link' => 'Překládat',
	'twnmp-proofread-link' => 'Dělat korektury',
	'twnmp-translate-button' => 'Překládat',
	'twnmp-view-button' => 'Zobrazit překlady',
	'twnmp-proofread-button' => 'Dělat korektury',
	'twnmp-your-translations-stats' => 'Vaše statistika překladů',
	'twnmp-your-translations-stats-all-languages' => 'Všechny jazyky',
	'twnmp-your-view-language-stats' => 'Zobrazit jazykové statistiky',
	'twnmp-translations-per-month' => 'překladů za měsíc',
	'twnmp-translations-in-sandbox' => 'překladů',
	'twnmp-reviews-per-month' => 'korektur za měsíc',
	'twnmp-translations-translator-ranking' => 'Jste {{PLURAL:$3|1={{GENDER:$1|jediný|jediná}}|$2. z $3}}<br />pro jazyk $4',
	'twnmp-translations-translator-ranking-source' => 'Jste {{PLURAL:$3|1={{GENDER:$1|jediný|jediná}}|$2. z $3}}',
	'twnmp-add-project' => 'Přidejte svůj open-source projekt k překladu',
	'twnmp-sandboxed' => 'Abyste {{GENDER:|získal|získala|získali}} překladatelská oprávnění, musíte poskytnout více překladů.',
	'twnmp-sandboxed-limit' => '{{GENDER:|Dosáhl|Dosáhla|Dosáhli}} jste limitu překladů. Náš tým váš účet brzy ověří a povýší.',
	'twnmp-bottom-help' => 'Nápověda',
	'twnmp-bottom-support' => 'Stránka podpory',
	'twnmp-bottom-languages-supported' => 'Podporované jazyky',
	'twnmp-bottom-about' => 'O projektu',
	'twnmp-signup-username-placeholder' => 'Uživatelské jméno',
	'twnmp-signup-password-placeholder' => 'Heslo',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Vytvořit účet',
	'twnmp-become-translator' => 'Staňte se překladatelem',
	'twnmp-choose-languages-you-know' => 'Vyberte jazyky, které znáte',
	'twnmp-choose-another-language' => 'Vybrat jiný jazyk…',
	'twnmp-choose-fill-account-details' => 'Vyplňte údaje svého účtu', # Fuzzy
	'twnmp-join-community' => 'Připojit se ke komunitě',
	'twnmp-join-community-desc' => 'Pokud jste vývojář, kterého zajímá dokumentace překladů nebo jen chcete vyzkoušet tuto platformu, jste také vítáni.',
	'twnmp-join-community-reason' => 'Proč se chcete připojit?',
	'twnmp-create-account-cancel' => 'Storno',
	'twnmp-join-community-info' => 'Nejste překladatel? I tak se můžete ke komunitě připojit.',
	'twnmp-stats-number-k' => '$1&nbsp;k',
	'twnmp-select-target-language' => 'Zvolte si jazyk',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Jedna zpráva|$1 zprávy|$1 zpráv}}',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'twnmp-s-languages' => 'ѩꙁꙑци', # Fuzzy
	'twnmp-bottom-help' => 'помощь',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'twnmp-desc' => 'Yn darparu hafan translatewiki.net',
	'twnmp-mainpage' => 'Hafan',
	'twnmp-s-translators' => '{{PLURAL:$1|cyfieithwyr|cyfieithydd|o gyfieithwyr}}',
	'twnmp-s-projects' => '{{PLURAL:$1|prosiectau|prosiect|o brosiectau}}',
	'twnmp-s-languages' => '{{PLURAL:$1|ieithoedd|iaith|o ieithoedd}} ar y gweill',
	'twnmp-s-messages' => "{{PLURAL:$1|negeseuon|neges|o negeseuon}} i'w cyfieithu",
	'twnmp-bannerwho' => 'Llun $1',
	'twnmp-show-more-projects' => 'Dangos yr holl brosiectau...',
	'twnmp-brand-motto' => 'Cymuned cyfieithu meddalwedd agored',
	'twnmp-login' => 'Mewngofnodi',
	'twnmp-logout' => 'Allgofnoder',
	'twnmp-search-placeholder' => "Canfod cyfieithiadau a'u newid",
	'twnmp-search-button' => 'Canfydder',
	'twnmp-search-choose-project' => "Dewis prosiect i'w gyfieithu",
	'twnmp-translate-link' => 'Cyfieithu',
	'twnmp-proofread-link' => 'Adolygu',
	'twnmp-translate-button' => 'Cyfieithu',
	'twnmp-view-button' => 'Gweld y cyfieithiadau',
	'twnmp-proofread-button' => 'Adolygu',
	'twnmp-your-translations-stats' => 'Ystadegau eich gwaith cyfieithu',
	'twnmp-your-translations-stats-all-languages' => "I'r holl ieithoedd",
	'twnmp-your-view-language-stats' => "Ystadegau'r iaith",
	'twnmp-translations-per-month' => 'Cyfieithiadau bob mis',
	'twnmp-translations-in-sandbox' => 'Cyfieithiadau',
	'twnmp-reviews-per-month' => 'Adogyliadau bob mis',
	'twnmp-translations-translator-ranking' => "{{PLURAL:$3||Chi yw'r unig cyfieithydd<br /> $4|{{GENDER:$1|Rhif}} $2 o ran gweithgarwch ymhlith<br />y $3 gyfieithydd $4|Rhif $2 o ran gweithgarwch ymhlith<br />y $3 chyfieithydd $4|Rhif $2 o ran gweithgarwch ymhlith<br />y $3 chyfieithydd $4|Rhif $2 o ran gweithgarwch ymhlith<br />y $3 cyfieithydd $4}}",
	'twnmp-translations-translator-ranking-source' => "{{PLURAL:$3|1=Chi yw'r unig un|{{GENDER:$1|Rhif}} $2 o $3}}",
	'twnmp-add-project' => "Ychwanegwch eich prosiect cynnwys agored i'w gyfieithu yma",
	'twnmp-sandboxed' => 'Mae angen i chi gynnig rhagor o gyfieithiadau cyn derbyn yn llwyr y gallu i gyfieithu.',
	'twnmp-sandboxed-limit' => 'Rydych wedi cyrraedd terfyn y cyfieithiadau. Cyn hir bydd ein tîm yn gwirio hyn ac yn uwchraddio eich cyfrif.',
	'twnmp-bottom-help' => 'Cymorth',
	'twnmp-bottom-support' => 'Y ddesg gymorth',
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
	'twnmp-join-community' => "Ymunwch â'r gymuned",
	'twnmp-join-community-desc' => "Os ydych yn ddatblygwr a diddordeb mewn ychwanegu nodiadau i'r negeseuon, neu am bori'r wefan i'w ddeall yn well, mae croeso hefyd i chwithau.",
	'twnmp-join-community-reason' => 'Pam bod diddordeb gennych yn ymuno gyda ni?',
	'twnmp-create-account-cancel' => 'Diddymer',
	'twnmp-join-community-info' => "Ddim yn gyfieithydd? Eto i gyd, gallwch ymuno â'r gymuned.",
	'twnmp-stats-number-k' => '$1 mil',
	'twnmp-select-target-language' => 'Dewis iaith',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|$1 neges}}',
);

/** Danish (dansk)
 * @author Christian List
 * @author Peter Alberti
 * @author Shirayuki
 */
$messages['da'] = array(
	'twnmp-desc' => 'Giver translatewiki.nets forside',
	'twnmp-mainpage' => 'Forside',
	'twnmp-s-translators' => 'Oversættere', # Fuzzy
	'twnmp-s-projects' => 'Projekter', # Fuzzy
	'twnmp-s-languages' => 'Sprog', # Fuzzy
	'twnmp-s-messages' => 'Beskeder at oversætte', # Fuzzy
	'twnmp-bannerwho' => 'Billede $1',
	'twnmp-show-more-projects' => 'Vis flere projekter...', # Fuzzy
	'twnmp-brand-motto' => 'Fællesskab for oversættelse af open source',
	'twnmp-login' => 'Log på',
	'twnmp-logout' => 'Log af',
	'twnmp-search-placeholder' => 'Find og ret oversættelser',
	'twnmp-search-button' => 'Find',
	'twnmp-search-choose-project' => 'Vælg et projekt at oversætte',
	'twnmp-translate-link' => 'Oversæt',
	'twnmp-proofread-link' => 'Læs korrektur', # Fuzzy
	'twnmp-translate-button' => 'Oversæt',
	'twnmp-proofread-button' => 'Læs korrektur', # Fuzzy
	'twnmp-your-translations-stats' => 'Din oversættelsesstatistik',
	'twnmp-your-view-language-stats' => 'Se sprogstatistik',
	'twnmp-translations-per-month' => 'Oversættelser/måned',
	'twnmp-reviews-per-month' => 'Korrekturlæsninger/måned',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Nummer}} $2 af $3 oversættere<br />for $4', # Fuzzy
	'twnmp-bottom-help' => 'Hjælp',
	'twnmp-bottom-languages-supported' => 'Understøttede sprog',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Brugernavn',
	'twnmp-signup-password-placeholder' => 'Adgangskode',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Opret en konto',
	'twnmp-become-translator' => 'Bliv en oversætter',
	'twnmp-choose-languages-you-know' => 'Vælg de sprog, du kan',
	'twnmp-choose-another-language' => 'Vælg et andet sprog...',
	'twnmp-choose-fill-account-details' => 'Udfyld dine kontooplysninger', # Fuzzy
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Purodha
 * @author Se4598
 */
$messages['de'] = array(
	'twnmp-desc' => 'Stellt die translatewiki.net-Hauptseite zur Verfügung',
	'twnmp-mainpage' => 'Hauptseite',
	'twnmp-s-translators' => '{{PLURAL:$1|Übersetzer}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projekt|Projekte}}',
	'twnmp-s-languages' => 'Aktive {{PLURAL:$1|Sprache|Sprachen}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Nachricht|Nachrichten}} zum Übersetzen',
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Alle Projekte anzeigen …',
	'twnmp-brand-motto' => 'Open-Source-Übersetzungsgemeinschaft',
	'twnmp-login' => 'Anmelden',
	'twnmp-logout' => 'Abmelden',
	'twnmp-search-placeholder' => 'Finde und korrigiere Übersetzungen',
	'twnmp-search-button' => 'Suchen',
	'twnmp-search-choose-project' => 'Wähle ein Projekt zum Übersetzen',
	'twnmp-translate-link' => 'Übersetzen',
	'twnmp-proofread-link' => 'Überprüfen',
	'twnmp-translate-button' => 'Übersetzen',
	'twnmp-view-button' => 'Übersetzungen ansehen',
	'twnmp-proofread-button' => 'Überprüfen',
	'twnmp-your-translations-stats' => 'Deine Übersetzungsstatistiken',
	'twnmp-your-translations-stats-all-languages' => 'Für alle Sprachen',
	'twnmp-your-view-language-stats' => 'Sprachstatistiken ansehen',
	'twnmp-translations-per-month' => 'Übersetzungen pro Monat',
	'twnmp-translations-in-sandbox' => 'Übersetzungen',
	'twnmp-reviews-per-month' => 'Überprüfungen pro Monat',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Du bist der einzige<!-- $1 --><br />für $4|Rang $2 von $3<br />für $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Du bist der einzige<!-- $1 -->|Rang $2 von $3}}',
	'twnmp-add-project' => 'Füge dein Open-Source-Projekt zur Übersetzung hinzu',
	'twnmp-sandboxed' => 'Du musst mehr Übersetzungen durchführen, um die vollen Übersetzerrechte zu erhalten.',
	'twnmp-sandboxed-limit' => 'Du hast das Übersetzungslimit erreicht. Unser Team wird dein Benutzerkonto bald verifizieren und hochstufen.',
	'twnmp-bottom-help' => 'Hilfe',
	'twnmp-bottom-support' => 'Unterstützung',
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
	'twnmp-join-community' => 'Der Gemeinschaft beitreten',
	'twnmp-join-community-desc' => 'Falls du ein Entwickler bist, der an der Dokumentation von Übersetzungen interessiert ist oder nur die Plattform entdecken will, bist du ebenfalls willkommen.',
	'twnmp-join-community-reason' => 'Warum bist du an einem Beitritt interessiert?',
	'twnmp-create-account-cancel' => 'Abbrechen',
	'twnmp-join-community-info' => 'Kein Übersetzer? Du kannst der Gemeinschaft beitreten.',
	'twnmp-stats-number-k' => '$1&nbsp;T',
	'twnmp-select-target-language' => 'Sprache auswählen',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Eine Nachricht|$1 Nachrichten}}',
);

/** Zazaki (Zazaki)
 * @author Marmase
 */
$messages['diq'] = array(
	'twnmp-mainpage' => 'Pera Seri',
	'twnmp-s-translators' => '{{PLURAL:$1|Açerner|Açerneri}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Proca|Procey}}',
	'twnmp-s-languages' => '{{PLURAL:$1|zıwan|Zıwani}} biya aktiv',
	'twnmp-bannerwho' => 'Resim $1',
	'twnmp-login' => 'Dekewtış',
	'twnmp-logout' => 'Veciyayış',
	'twnmp-search-button' => 'Bıvin',
	'twnmp-search-choose-project' => 'Qande çerğkerdışi proca weçine',
	'twnmp-translate-link' => 'Açarnayış',
	'twnmp-proofread-link' => 'Barıyayış',
	'twnmp-translate-button' => 'Açarnayış',
	'twnmp-view-button' => 'Açarnayışa bıvin',
	'twnmp-proofread-button' => 'Barıyayış',
	'twnmp-your-translations-stats' => 'Açarnayışe İstatıstıkan',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'twnmp-desc' => 'Staja głowny bok translatewiki.net k dispoziciji',
	'twnmp-mainpage' => 'Głowny bok',
	'twnmp-s-translators' => '{{PLURAL:$1|pśełožowaŕ|pśełožowarja|pśełožowarje|pśełožowarjow}}',
	'twnmp-s-projects' => '{{PLURAL:$1|projekt|projekta|projekty|projektow}}',
	'twnmp-s-languages' => '{{PLURAL:$1|aktiwna rěc|aktiwnej rěcy|aktiwne rěcy|aktiwnych rěcow}}',
	'twnmp-s-messages' => '{{PLURAL:$1|powěźeńka, kótaraž musy|powěźeńce, kótarejž musytej|powěźeńki, kótarež muse|powěźeńkow, kótarež musy}} se pśełožyś',
	'twnmp-bannerwho' => 'Wobraz $1',
	'twnmp-show-more-projects' => 'Wšykne projekty pokazaś...',
	'twnmp-brand-motto' => 'Zgromaźeństwo pśełožkow zjawnego žrědła',
	'twnmp-login' => 'Pśizjawiś',
	'twnmp-logout' => 'Wótzjawiś',
	'twnmp-search-placeholder' => 'Pytaj a skorigěruj pśełožki',
	'twnmp-search-button' => 'Pytaś',
	'twnmp-search-choose-project' => 'Wubjeŕ projekt za pśełožowanje',
	'twnmp-translate-link' => 'Pśełožyś',
	'twnmp-proofread-link' => 'Pśeglědaś',
	'twnmp-translate-button' => 'Pśełožyś',
	'twnmp-view-button' => 'Pśełožki se woglědaś',
	'twnmp-proofread-button' => 'Pśeglědaś',
	'twnmp-your-translations-stats' => 'Twója statistika pśełožkow',
	'twnmp-your-translations-stats-all-languages' => 'Za wšykne rěcy',
	'twnmp-your-view-language-stats' => 'Rěcnu statistiku pokazaś',
	'twnmp-translations-per-month' => 'Pśełožki na mjasec',
	'twnmp-translations-in-sandbox' => 'Pśełožki',
	'twnmp-reviews-per-month' => 'Pśeglědanja na mjasec',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Sy {{GENDER:$1|jadnučki|jadnučka}}<br />za $4|městno $2 z $3<br />za $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Sy {{GENDER:$1|jadnučki|jadnučka}}|městno $2 z $3}}',
	'twnmp-add-project' => 'Pśidaj swój projekt zjawnego žrědła za pśełožowanje',
	'twnmp-sandboxed' => 'Musyš dalšne přełožki pśewjasć, aby połne pśełožowańske pšawa dostał.',
	'twnmp-sandboxed-limit' => 'Sy pśełožowański limit dojśpił. Naš team buźo twójo konto skóro pśeglědowaś a aktualizěrowaś.',
	'twnmp-bottom-help' => 'Pomoc',
	'twnmp-bottom-support' => 'Pódpěra',
	'twnmp-bottom-languages-supported' => 'Pódpěrane rěcy',
	'twnmp-bottom-about' => 'Wó',
	'twnmp-signup-username-placeholder' => 'Wužywarske mě',
	'twnmp-signup-password-placeholder' => 'Gronidło',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Konto załožyś',
	'twnmp-become-translator' => 'Buź pśełožowaŕ',
	'twnmp-choose-languages-you-know' => 'Wubjeŕ rěcy, kótarež wumějoš',
	'twnmp-choose-another-language' => 'Wubjeŕ drugu rěc...',
	'twnmp-choose-fill-account-details' => 'Zapódaj swóje kontowe drobnosći',
	'twnmp-join-community' => 'Zgromaźeństwu pśistupiś',
	'twnmp-join-community-desc' => 'Jolic sy wuwijaŕ, kótaryž zajmujo se za dokumentěrowanje pśełožkow, abo jadnorje pśeslěźujo platformu, sy teke witany.',
	'twnmp-join-community-reason' => 'Cogodla coš pśistupiś?',
	'twnmp-create-account-cancel' => 'Pśetergnuś',
	'twnmp-join-community-info' => 'Njejsy pśełožowaŕ? Móžoš weto zgromaźeństwu pśitupiś.',
	'twnmp-stats-number-k' => '$1&nbsp;tys.',
	'twnmp-select-target-language' => 'Rěc wubraś',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Jadna powěźeńka|$1 powěźeńce|$1 powěźeńki|$1 powěźeńkow}}',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Ovruni
 */
$messages['es'] = array(
	'twnmp-desc' => 'Proporciona la página principal de translatewiki.net',
	'twnmp-mainpage' => 'Página principal',
	'twnmp-s-translators' => '{{PLURAL:$1|traductor|traductores}}',
	'twnmp-s-projects' => '{{PLURAL:$1|proyecto|proyectos}}',
	'twnmp-s-languages' => '{{PLURAL:$1|idioma activo|idiomas activos}}',
	'twnmp-s-messages' => '{{PLURAL:$1|mensaje|mensajes}} para traducir',
	'twnmp-bannerwho' => 'Imagen $1',
	'twnmp-show-more-projects' => 'Mostrar todos los proyectos',
	'twnmp-brand-motto' => 'Comunidad de traducción de código abierto',
	'twnmp-login' => 'Iniciar sesión',
	'twnmp-logout' => 'Cerrar sesión',
	'twnmp-search-placeholder' => 'Buscar y corregir traducciones',
	'twnmp-search-button' => 'Buscar',
	'twnmp-search-choose-project' => 'Elige un proyecto para traducirlo',
	'twnmp-translate-link' => 'Traducir',
	'twnmp-proofread-link' => 'Revisar',
	'twnmp-translate-button' => 'Traducir',
	'twnmp-view-button' => 'Ver traducciones',
	'twnmp-proofread-button' => 'Revisar',
	'twnmp-your-translations-stats' => 'Tus estadísticas de traducción',
	'twnmp-your-translations-stats-all-languages' => 'Para todos los idiomas',
	'twnmp-your-view-language-stats' => 'Ver las estadísticas del idioma',
	'twnmp-translations-per-month' => 'traducciones/mes',
	'twnmp-translations-in-sandbox' => 'Traducciones',
	'twnmp-reviews-per-month' => 'Revisiones/mes',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Usted es el único<br />para el $4|{{GENDER:$1|Ubicado en el puesto}} $2 de $3<br />para el $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Usted es el único|{{GENDER:$1|Ubicado en el puesto}} $2 de $3}}',
	'twnmp-add-project' => 'Añade tu proyecto de código abierto para su traducción',
	'twnmp-sandboxed' => 'Necesitas traducir más para obtener los privilegios de traducción completos.',
	'twnmp-sandboxed-limit' => 'Has alcanzado el límite de traducción. Nuestro equipo verificará y actualizará tu cuenta pronto.',
	'twnmp-bottom-help' => 'Ayuda',
	'twnmp-bottom-support' => 'Asistencia',
	'twnmp-bottom-languages-supported' => 'Idiomas admitidos',
	'twnmp-bottom-about' => 'Acerca de',
	'twnmp-signup-username-placeholder' => 'Nombre de usuario',
	'twnmp-signup-password-placeholder' => 'Contraseña',
	'twnmp-signup-email-placeholder' => 'Correo electrónico',
	'twnmp-create-account-button' => 'Crear una cuenta',
	'twnmp-become-translator' => 'Conviértete en un traductor',
	'twnmp-choose-languages-you-know' => 'Elige los idiomas que conozcas',
	'twnmp-choose-another-language' => 'Elegir otro idioma…',
	'twnmp-choose-fill-account-details' => 'Escribe los detalles de tu cuenta',
	'twnmp-join-community' => 'Únete a la comunidad',
	'twnmp-join-community-desc' => 'Si eres un desarrollador interesado en documentar traducciones o solo estás explorando la plataforma, también eres bienvenido.',
	'twnmp-join-community-reason' => '¿Por qué quieres unirte?',
	'twnmp-create-account-cancel' => 'Cancelar',
	'twnmp-select-target-language' => 'Seleccionar idioma',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un mensaje|$1 mensajes}}',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Omidh
 */
$messages['fa'] = array(
	'twnmp-desc' => 'صفحهٔ اصلی translatewiki.net فراهم می‌کند',
	'twnmp-mainpage' => 'صفحهٔ اصلی',
	'twnmp-s-translators' => '{{PLURAL:$1|ترجمه‌کننده}}',
	'twnmp-s-projects' => '{{PLURAL:$1|پروژه}}',
	'twnmp-s-languages' => '{{PLURAL:$1|زبان}} فعال',
	'twnmp-s-messages' => '{{PLURAL:$1|پیغام|پیغام‌ها}} برای ترجمه',
	'twnmp-bannerwho' => 'نگارهٔ $1',
	'twnmp-show-more-projects' => 'نمایش همهٔ پروژه‌ها...',
	'twnmp-brand-motto' => 'اجتماع متن‌باز ترجمه',
	'twnmp-login' => 'ورود',
	'twnmp-logout' => 'خروج',
	'twnmp-search-placeholder' => 'یافتن و تصحیح ترجمه‌ها',
	'twnmp-search-button' => 'بیاب',
	'twnmp-search-choose-project' => 'انتخاب یک پروژه برای ترجمه',
	'twnmp-translate-link' => 'ترجمه',
	'twnmp-proofread-link' => 'بازبینی',
	'twnmp-translate-button' => 'ترجمه',
	'twnmp-view-button' => 'نمایش ترجمه‌ها',
	'twnmp-proofread-button' => 'بازبینی',
	'twnmp-your-translations-stats' => 'آمار ترجمه‌های شما',
	'twnmp-your-translations-stats-all-languages' => 'برای همهٔ زبان‌ها',
	'twnmp-your-view-language-stats' => 'دیدن آمارهای زبان',
	'twnmp-translations-per-month' => 'ترجمه/ماه',
	'twnmp-translations-in-sandbox' => 'ترجمه‌ها',
	'twnmp-reviews-per-month' => 'بازبینی/ماه',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=شنا تنها هستید<br />برای $4|{{GENDER:$1|رتبهٔ}} $2 از $3<br /> برای $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=شما تنها هستید|{{GENDER:$1|رتبه‌دهی‌شده}} $2 از $3}}',
	'twnmp-add-project' => 'افزودن پروژهٔ متن‌باز شما برای ترجمه',
	'twnmp-sandboxed' => 'شما باید ترجمه‌های بیشتری برای گرفتن دسترسی کامل ترجمه انجام دهید.',
	'twnmp-sandboxed-limit' => 'شما به محدودهٔ ترجمه‌ای رسیده‌اید. تیم ما حساب شما را به‌زودی بررسی و ارتقا درجه می‌دهد.',
	'twnmp-bottom-help' => 'کمک',
	'twnmp-bottom-support' => 'میز پشتیبانی',
	'twnmp-bottom-languages-supported' => 'زبان‌های پشتیبانی‌شده',
	'twnmp-bottom-about' => 'درباره',
	'twnmp-signup-username-placeholder' => 'نام کاربری',
	'twnmp-signup-password-placeholder' => 'گذرواژه',
	'twnmp-signup-email-placeholder' => 'رایانامه',
	'twnmp-create-account-button' => 'ایجاد حساب کاربری',
	'twnmp-become-translator' => 'مترجم شوید',
	'twnmp-choose-languages-you-know' => 'زبانی که می‌دانید را انتخاب کنید',
	'twnmp-choose-another-language' => 'انتخاب زبانی دیگر...',
	'twnmp-choose-fill-account-details' => 'جزئیات حسابتان را پر کنید',
	'twnmp-join-community' => 'عضویت به اجتماع',
	'twnmp-join-community-desc' => 'اگر شما توسعه‌دهندهٔ علاقه‌مند به مستندسازی ترجمه‌ها، یا فقط کاوش در سکو هستید، خوش‌آمدید.',
	'twnmp-join-community-reason' => 'چرا شما علاقه‌مند به پیوستن هستید؟',
	'twnmp-create-account-cancel' => 'فسخ',
	'twnmp-join-community-info' => 'مترجم نیستید؟ هنوز می‌توانید به اجتماع بپیوندید.',
	'twnmp-select-target-language' => 'انتخاب زبان',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|یک پیغام|$1 پیغام}}',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nike
 */
$messages['fi'] = array(
	'twnmp-desc' => 'translatewiki.netin etusivu',
	'twnmp-mainpage' => 'Etusivu',
	'twnmp-s-translators' => 'kääntäjää', # Fuzzy
	'twnmp-s-projects' => 'projektia', # Fuzzy
	'twnmp-s-languages' => 'kieltä', # Fuzzy
	'twnmp-s-messages' => 'käännettävää viestiä', # Fuzzy
	'twnmp-bannerwho' => 'Kuva $1',
	'twnmp-show-more-projects' => 'Näytä kaikki projektit...',
	'twnmp-brand-motto' => 'Avoimen lähdekoodin käännösyhteisö',
	'twnmp-login' => 'Kirjaudu sisään',
	'twnmp-logout' => 'Kirjaudu ulos',
	'twnmp-search-placeholder' => 'Etsi ja korjaa käännöksiä',
	'twnmp-search-button' => 'Etsi',
	'twnmp-search-choose-project' => 'Valitse käännettävä projekti',
	'twnmp-translate-link' => 'Käännä',
	'twnmp-proofread-link' => 'Oikolue',
	'twnmp-translate-button' => 'Käännä',
	'twnmp-proofread-button' => 'Oikolue',
	'twnmp-your-translations-stats' => 'Henkilökohtaiset käännöstilastot',
	'twnmp-your-translations-stats-all-languages' => 'Kaikki kielet',
	'twnmp-your-view-language-stats' => 'Näytä kielitilastot',
	'twnmp-translations-per-month' => 'käännöstä/kuukausi',
	'twnmp-reviews-per-month' => 'oikolukua/kuukausi',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1={{GENDER:$1|Olet ainoa}}|Olet sijalla $2/$3<br />
kielelle $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1={{GENDER:$1|Olet ainoa}}|Olet sijalla $2/$3}}',
	'twnmp-add-project' => 'Lisää avoimen lähdekoodin projekti käännettäväksi',
	'twnmp-bottom-help' => 'Ohjeet',
	'twnmp-bottom-support' => 'Neuvonta',
	'twnmp-bottom-languages-supported' => 'Tuetut kielet',
	'twnmp-bottom-about' => 'Tietoja',
	'twnmp-signup-username-placeholder' => 'Käyttäjätunnus',
	'twnmp-signup-password-placeholder' => 'Salasana',
	'twnmp-signup-email-placeholder' => 'Sähköposti',
	'twnmp-create-account-button' => 'Luo tunnus',
	'twnmp-become-translator' => 'Ryhdy kääntäjäksi',
	'twnmp-choose-languages-you-know' => 'Valitse kielet, joita osaat',
	'twnmp-choose-another-language' => 'Lisää toinen kieli...',
	'twnmp-choose-fill-account-details' => 'Syötä tunnuksesi tiedot', # Fuzzy
	'twnmp-select-target-language' => 'Valitse kieli',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|$1 viesti|$1 viestiä}}',
);

/** French (français)
 * @author Gomoko
 * @author Jean-Frédéric
 * @author Metroitendo
 * @author NemesisIII
 */
$messages['fr'] = array(
	'twnmp-desc' => 'Fournit la page principale de translatewiki.net',
	'twnmp-mainpage' => 'Accueil',
	'twnmp-s-translators' => '{{PLURAL:$1|Traducteur|Traducteurs}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projet|Projets}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Langue active|Langues actives}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Message|Messages}} à traduire',
	'twnmp-bannerwho' => 'Image $1',
	'twnmp-show-more-projects' => 'Afficher tous les projets…',
	'twnmp-brand-motto' => 'Communauté de traduction en source libre',
	'twnmp-login' => 'Se connecter',
	'twnmp-logout' => 'Deconnexion',
	'twnmp-search-placeholder' => 'Rechercher et corriger des traductions',
	'twnmp-search-button' => 'Rechercher',
	'twnmp-search-choose-project' => 'Choisir un projet à traduire',
	'twnmp-translate-link' => 'Traduire',
	'twnmp-proofread-link' => 'Relire',
	'twnmp-translate-button' => 'Traduire',
	'twnmp-view-button' => 'Voir les traductions',
	'twnmp-proofread-button' => 'Relire',
	'twnmp-your-translations-stats' => 'Vos statistiques de traduction',
	'twnmp-your-translations-stats-all-languages' => 'Pour toutes les langues',
	'twnmp-your-view-language-stats' => 'Afficher les statistiques de langue',
	'twnmp-translations-per-month' => 'Traductions/mois',
	'twnmp-translations-in-sandbox' => 'Traductions',
	'twnmp-reviews-per-month' => 'Relectures/mois',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Vous êtes le seul<br />pour $4|{{GENDER:$1|Classé}} $2 sur $3<br />pour $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Vous êtes le seul|{{GENDER:$1|Classé}} $2 sur $3}}',
	'twnmp-add-project' => 'Ajouter votre projet open source pour traduction',
	'twnmp-sandboxed' => 'Vous devez effectuer plus de traductions pour obtenir tous les droits de traduction.',
	'twnmp-sandboxed-limit' => 'Vous avez atteint le nombre limite de traductions. Notre équipe va vérifier et mettre à niveau votre compte bientôt.',
	'twnmp-bottom-help' => 'Aide',
	'twnmp-bottom-support' => 'Soutien',
	'twnmp-bottom-languages-supported' => 'Langues supportées',
	'twnmp-bottom-about' => 'À propos de',
	'twnmp-signup-username-placeholder' => 'Nom d’utilisateur',
	'twnmp-signup-password-placeholder' => 'Mot de passe',
	'twnmp-signup-email-placeholder' => 'Courriel',
	'twnmp-create-account-button' => 'Créer un compte',
	'twnmp-become-translator' => 'Devenir un traducteur',
	'twnmp-choose-languages-you-know' => 'Choisir les langues que vous connaissez',
	'twnmp-choose-another-language' => 'Choisir une autre langue…',
	'twnmp-choose-fill-account-details' => 'Entrez les détails de votre compte',
	'twnmp-join-community' => 'Rejoindre la communauté',
	'twnmp-join-community-desc' => 'Si vous êtes un développeur intéressé par la documentation des traductions, ou juste par l’exploration de la plateforme, vous êtes également le bienvenu.',
	'twnmp-join-community-reason' => 'Pourquoi êtes-vous intéressé par le fait de nous rejoindre ?',
	'twnmp-create-account-cancel' => 'Annuler',
	'twnmp-join-community-info' => 'Pas un traducteur ? Vous pouvez toujours rejoindre la communauté.',
	'twnmp-select-target-language' => 'Choisir la langue',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un message|$1 messages}}',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'twnmp-desc' => 'Proporciona a páxina principal de translatewiki.net',
	'twnmp-mainpage' => 'Portada',
	'twnmp-s-translators' => '{{PLURAL:$1|tradutor|tradutores}}',
	'twnmp-s-projects' => '{{PLURAL:$1|proxecto|proxectos}}',
	'twnmp-s-languages' => '{{PLURAL:$1|lingua activa|linguas activas}}',
	'twnmp-s-messages' => '{{PLURAL:$1|mensaxe|mensaxes}} a traducir',
	'twnmp-bannerwho' => 'Imaxe $1',
	'twnmp-show-more-projects' => 'Mostrar todos os proxectos...',
	'twnmp-brand-motto' => 'Comunidade de tradución de código aberto',
	'twnmp-login' => 'Rexistro',
	'twnmp-logout' => 'Saír',
	'twnmp-search-placeholder' => 'Atope e corrixa traducións',
	'twnmp-search-button' => 'Buscar',
	'twnmp-search-choose-project' => 'Escolla un proxecto a traducir',
	'twnmp-translate-link' => 'Traducir',
	'twnmp-proofread-link' => 'Revisar',
	'twnmp-translate-button' => 'Traducir',
	'twnmp-view-button' => 'Ollar as traducións',
	'twnmp-proofread-button' => 'Revisar',
	'twnmp-your-translations-stats' => 'As súas estatísticas de tradución',
	'twnmp-your-translations-stats-all-languages' => 'Para todas as linguas',
	'twnmp-your-view-language-stats' => 'Ollar as estatísticas da lingua',
	'twnmp-translations-per-month' => 'traducións ao mes',
	'twnmp-translations-in-sandbox' => 'Traducións',
	'twnmp-reviews-per-month' => 'revisións ao mes',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=É {{GENDER:$1|o único|a única}}<br />en $4|Quedou $2{{GENDER:$1|º|ª}} de $3<br />en $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=É {{GENDER:$1|o único|a única}}|Quedou $2{{GENDER:$1|º|ª}} de $3}}',
	'twnmp-add-project' => 'Engada o seu proxecto de código aberto para a súa tradución',
	'twnmp-sandboxed' => 'Debe achegar máis traducións para obter todos os dereitos de tradutor.',
	'twnmp-sandboxed-limit' => 'Alcanzou o límite de traducións. O noso equipo ha comprobar e actualizar a súa conta axiña.',
	'twnmp-bottom-help' => 'Axuda',
	'twnmp-bottom-support' => 'A Taberna',
	'twnmp-bottom-languages-supported' => 'Linguas soportadas',
	'twnmp-bottom-about' => 'Acerca de',
	'twnmp-signup-username-placeholder' => 'Nome de usuario',
	'twnmp-signup-password-placeholder' => 'Contrasinal',
	'twnmp-signup-email-placeholder' => 'Correo electrónico',
	'twnmp-create-account-button' => 'Crear a conta',
	'twnmp-become-translator' => 'Fágase tradutor',
	'twnmp-choose-languages-you-know' => 'Escolla as linguas que coñece',
	'twnmp-choose-another-language' => 'Elixir outra lingua...',
	'twnmp-choose-fill-account-details' => 'Introduza os detalles da súa conta',
	'twnmp-join-community' => 'Únase á comunidade',
	'twnmp-join-community-desc' => 'Se vostede é un desenvolvedor interesado na documentación de traducións ou simplemente en explorar a plataforma reciba tamén a nosa benvida.',
	'twnmp-join-community-reason' => 'Por que ten interese en unirse?',
	'twnmp-create-account-cancel' => 'Cancelar',
	'twnmp-join-community-info' => 'Non é tradutor? Pode unirse á comunidade igualmente.',
	'twnmp-select-target-language' => 'Seleccionar a lingua',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Unha mensaxe|$1 mensaxes}}',
);

/** Gujarati (ગુજરાતી)
 * @author KartikMistry
 */
$messages['gu'] = array(
	'twnmp-proofread-link' => 'પરીક્ષણ',
	'twnmp-proofread-button' => 'પરીક્ષણ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author YaronSh
 */
$messages['he'] = array(
	'twnmp-desc' => 'דף ראשי עבור אתר translatewiki.net',
	'twnmp-mainpage' => 'דף ראשי',
	'twnmp-s-translators' => '{{PLURAL:$1|מתרגם|מתרגמים}}',
	'twnmp-s-projects' => '{{PLURAL:$1|מיזם|מיזמים}}',
	'twnmp-s-languages' => '{{PLURAL:$1|שפה פעילה|שפות פעילות}}',
	'twnmp-s-messages' => '{{PLURAL:$1|הודעה|הודעות}} לתרגם',
	'twnmp-bannerwho' => 'תמונה $1',
	'twnmp-show-more-projects' => 'כל המיזמים...',
	'twnmp-brand-motto' => 'קהילת תרגום בקוד פתוח',
	'twnmp-login' => 'כניסה',
	'twnmp-logout' => 'יציאה',
	'twnmp-search-placeholder' => 'למצוא ולתקן תרגומים',
	'twnmp-search-button' => 'למצוא',
	'twnmp-search-choose-project' => 'בחירת מיזם לתרגום',
	'twnmp-translate-link' => 'תרגום',
	'twnmp-proofread-link' => 'סקירה',
	'twnmp-translate-button' => 'תרגום',
	'twnmp-view-button' => 'הצגת תרגומים',
	'twnmp-proofread-button' => 'סקירה',
	'twnmp-your-translations-stats' => 'סטטיסטיקת התרגומים שלך',
	'twnmp-your-translations-stats-all-languages' => 'בכל השפות',
	'twnmp-your-view-language-stats' => 'הצגת הסטטיסטיקה לשפה',
	'twnmp-translations-per-month' => 'תרגומים לחודש',
	'twnmp-translations-in-sandbox' => 'תרגומים',
	'twnmp-reviews-per-month' => 'הגהות לחודש',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1={{GENDER:$1|אתה היחיד|את היחידה}}|{{GENDER:$1|אתה מדורג|את מדורגת}} במקום ה־$2 מבין $3}}<br />עבור $4',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1={{GENDER:$1|אתה היחיד|את היחידה}} כאן|{{GENDER:$1|אתה מדורג|את מדורגת}} במקום ה־$2 מתוך $3}}',
	'twnmp-add-project' => 'הוספת מיזם הקוד הפתוח שלך לתרגום כאן',
	'twnmp-sandboxed' => 'יש לספק עוד תרגומים כדי לקבל הרשאות תרגום מלאות.',
	'twnmp-sandboxed-limit' => 'הגעת למגבת התרגומים שלך. הסגל שלנו יבדוק את התרגומים וישדרג את החשבון שלך בקרוב.',
	'twnmp-bottom-help' => 'עזרה',
	'twnmp-bottom-support' => 'דלפק תמיכה',
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
	'twnmp-join-community' => 'להצטרף לקהילה',
	'twnmp-join-community-desc' => 'מתכנתים שמעוניינים לתעד תרגומים או ללמוד את הפלטפורמה שלנו, גם אתם מוזמנים.',
	'twnmp-join-community-reason' => 'מה גורם לך לרצות להצטרף?',
	'twnmp-create-account-cancel' => 'ביטול',
	'twnmp-join-community-info' => 'תרגומים לא מעניינים אותך? ביכולתך להצטרף לקהילה בכל זאת.',
	'twnmp-stats-number-k' => '$1 אלף',
	'twnmp-select-target-language' => 'בחירת שפה',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|הודעה אחת|$1 הודעות}}',
);

/** Hindi (हिन्दी)
 * @author Santhosh.thottingal
 */
$messages['hi'] = array(
	'twnmp-mainpage' => 'मुखपृष्ठ',
	'twnmp-bannerwho' => 'छवि$1',
	'twnmp-login' => 'लॉग इन',
	'twnmp-logout' => 'सत्रांत',
	'twnmp-search-button' => 'खोज',
	'twnmp-translate-link' => 'अनुवाद',
	'twnmp-proofread-link' => 'अवलोकन',
	'twnmp-translate-button' => 'अनुवाद',
	'twnmp-proofread-button' => 'अवलोकन',
	'twnmp-your-translations-stats-all-languages' => 'सभी भाषाओं के लिए',
	'twnmp-bottom-help' => 'सहायता',
	'twnmp-bottom-about' => 'हमारे बारे में',
	'twnmp-signup-username-placeholder' => 'सदस्यनाम',
	'twnmp-signup-password-placeholder' => 'पासवर्ड',
	'twnmp-signup-email-placeholder' => 'इ-मेल',
	'twnmp-create-account-button' => 'खाता बनाएँ',
	'twnmp-select-target-language' => 'भाषा चुनें',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'twnmp-desc' => 'Staja hłownu stronu translatewiki.net k dispoziciji',
	'twnmp-mainpage' => 'Hłowna strona',
	'twnmp-s-translators' => '{{PLURAL:$1|přełožowar|přełožowarjej|přełožowarjo|přełožowarjow}}',
	'twnmp-s-projects' => '{{PLURAL:$1|projekt|projektaj|projekty|projektow}}',
	'twnmp-s-languages' => '{{PLURAL:$1|aktiwna rěč|aktiwnej rěči|aktiwne rěče|aktiwnych rěčow}}',
	'twnmp-s-messages' => '{{PLURAL:$1|zdźělenka, kotraž dyrbi|zdźělence, kotrejž dyrbitej|zdźělenki, kotrež dyrbja|zdźělenkow, kotrež dyrbi}} so přełožić',
	'twnmp-bannerwho' => 'Wobraz $1',
	'twnmp-show-more-projects' => 'Wšě projekty pokazać...',
	'twnmp-brand-motto' => 'Zhromadźenstwo přełožkow zjawneho žórła',
	'twnmp-login' => 'Přizjewić',
	'twnmp-logout' => 'Wotzjewić',
	'twnmp-search-placeholder' => 'Pytaj a skoriguj přełožki',
	'twnmp-search-button' => 'Pytać',
	'twnmp-search-choose-project' => 'Wubjer projekt za přełožowanje',
	'twnmp-translate-link' => 'Přełožić',
	'twnmp-proofread-link' => 'Přepruwować',
	'twnmp-translate-button' => 'Přełožić',
	'twnmp-view-button' => 'Přełožki sej wobhladać',
	'twnmp-proofread-button' => 'Přepruwować',
	'twnmp-your-translations-stats' => 'Twoja statistika přełožkow',
	'twnmp-your-translations-stats-all-languages' => 'Za wšě rěče',
	'twnmp-your-view-language-stats' => 'Rěčnu statistiku pokazać',
	'twnmp-translations-per-month' => 'Přełožki na měsac',
	'twnmp-translations-in-sandbox' => 'Přełožki',
	'twnmp-reviews-per-month' => 'Přepruwowanja na měsac',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Sy {{GENDER:$1|jenički|jenička}}<br />za $4|městno $2 z $3<br />za $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Sy {{GENDER:$1|jenički|jenička}}|městno $2 z $3}}',
	'twnmp-add-project' => 'Přidaj swój projekt zjawneho žórła za přełožowanje',
	'twnmp-sandboxed' => 'Dyrbiš dalše přełožki přewjesć, zo by połne přełožowanske prawa dóstał.',
	'twnmp-sandboxed-limit' => 'Sy přełožowanski limit docpěł. Naš team budźe twoje konto bórze přepruwować a aktualizować.',
	'twnmp-bottom-help' => 'Pomoc',
	'twnmp-bottom-support' => 'Podpěra',
	'twnmp-bottom-languages-supported' => 'Podpěrowane rěče',
	'twnmp-bottom-about' => 'Wo',
	'twnmp-signup-username-placeholder' => 'Wužiwarske mjeno',
	'twnmp-signup-password-placeholder' => 'Hesło',
	'twnmp-signup-email-placeholder' => 'E-mejl',
	'twnmp-create-account-button' => 'Konto załožić',
	'twnmp-become-translator' => 'Staj so z přełožowarjom',
	'twnmp-choose-languages-you-know' => 'Wubjer rěče, kotrež wobknježiš',
	'twnmp-choose-another-language' => 'Wubjer druhu rěč...',
	'twnmp-choose-fill-account-details' => 'Zapodaj swoje kontowe podrobnosće',
	'twnmp-join-community' => 'Do zhromadźenstwa zastupić',
	'twnmp-join-community-desc' => 'Jeli sy wuwiwar, kotryž so za dokumentowanje přełožkow zajimuje, abo prosće platformu přeslědźuje, sy tež witany.',
	'twnmp-join-community-reason' => 'Čehodla chceš přistupić?',
	'twnmp-create-account-cancel' => 'Přetorhnyć',
	'twnmp-join-community-info' => 'Njejsy přełožowar? Móžeš najebać toho do zhromadźenstwa zastupić.',
	'twnmp-stats-number-k' => '$1&nbsp;tys.',
	'twnmp-select-target-language' => 'Rěč wubrać',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Jedna zdźělenka|$1 zdźělence|$1 zdźělenki|$1 zdźělenkow}}',
);

/** Armenian (Հայերեն)
 * @author Vadgt
 */
$messages['hy'] = array(
	'twnmp-logout' => 'Ելնել',
	'twnmp-your-translations-stats-all-languages' => 'Բոլոր լեզուների համար',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Nemo bis
 */
$messages['it'] = array(
	'twnmp-desc' => 'Fornisce la pagina principale di translatewiki.net',
	'twnmp-mainpage' => 'Pagina principale',
	'twnmp-s-translators' => '{{PLURAL:$1|Traduttore|Traduttori}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Progetto|Progetti}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Lingua attiva|Lingue attive}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Messaggio|Messaggi}} da tradurre',
	'twnmp-bannerwho' => 'Immagine $1',
	'twnmp-show-more-projects' => 'Mostra tutti i progetti...',
	'twnmp-brand-motto' => 'Comunità di traduzione open source',
	'twnmp-login' => 'Entra',
	'twnmp-logout' => 'Esci',
	'twnmp-search-placeholder' => 'Trova e correggi le traduzioni',
	'twnmp-search-button' => 'Trova',
	'twnmp-search-choose-project' => 'Scegli un progetto da tradurre',
	'twnmp-translate-link' => 'Traduci',
	'twnmp-proofread-link' => 'Revisiona',
	'twnmp-translate-button' => 'Traduci',
	'twnmp-view-button' => 'Vedi traduzioni',
	'twnmp-proofread-button' => 'Revisiona',
	'twnmp-your-translations-stats' => 'Le tue statistiche di traduzione',
	'twnmp-your-translations-stats-all-languages' => 'Per tutte le lingue',
	'twnmp-your-view-language-stats' => 'Visualizza le statistiche della lingua',
	'twnmp-translations-per-month' => 'Traduzioni nel mese',
	'twnmp-translations-in-sandbox' => 'Traduzioni',
	'twnmp-reviews-per-month' => 'Revisioni nel mese',
	'twnmp-translations-translator-ranking' => "{{PLURAL:$3|1=Sei l'unico traduttore|{{GENDER:$1|Classificato $2º|Classificata $2ª|In posizione $2}} su $3<br />traduttori}} in $4",
	'twnmp-translations-translator-ranking-source' => "{{PLURAL:$3|1=Sei l'unico traduttore|{{GENDER:$1|Classificato $2º|Classificata $2ª|In posizione $2}} su $3<br />traduttori}}",
	'twnmp-add-project' => 'Aggiungi il tuo software libero a quelli traducibili',
	'twnmp-sandboxed' => 'Devi fornire ulteriori traduzioni per ottenere i diritti di traduzione completi.',
	'twnmp-sandboxed-limit' => 'Hai raggiunto il limite di traduzioni. Il nostro team verificherà ed aggiornerà presto la tua utenza.',
	'twnmp-bottom-help' => 'Aiuto',
	'twnmp-bottom-support' => 'Supporto',
	'twnmp-bottom-languages-supported' => 'Lingue mantenute',
	'twnmp-bottom-about' => 'Informazioni',
	'twnmp-signup-username-placeholder' => 'Nome utente',
	'twnmp-signup-password-placeholder' => 'Password',
	'twnmp-signup-email-placeholder' => 'Email',
	'twnmp-create-account-button' => 'Registrati',
	'twnmp-become-translator' => 'Diventa un traduttore',
	'twnmp-choose-languages-you-know' => 'Scegli le lingue che conosci',
	'twnmp-choose-another-language' => "Scegli un'altra lingua...",
	'twnmp-choose-fill-account-details' => 'Inserisci i dettagli della tua utenza',
	'twnmp-join-community' => 'Entra nella comunità',
	'twnmp-join-community-desc' => 'Se sei uno sviluppatore interessato alle traduzioni, o semplicemente esplorare la piattaforma, sei il benvenuto.',
	'twnmp-join-community-reason' => 'Perché sei interessato a partecipare?',
	'twnmp-create-account-cancel' => 'Annulla',
	'twnmp-join-community-info' => 'Non sei un traduttore? È comunque possibile entrare nella comunità.',
	'twnmp-select-target-language' => 'Seleziona lingua',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un messaggio|$1 messaggi}}',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'twnmp-desc' => 'translatewiki.net のメインページを提供する',
	'twnmp-mainpage' => 'メインページ',
	'twnmp-s-translators' => '{{PLURAL:$1|翻訳者}}',
	'twnmp-s-projects' => '{{PLURAL:$1|プロジェクト}}',
	'twnmp-s-languages' => '活発な{{PLURAL:$1|言語}}',
	'twnmp-s-messages' => '翻訳対象{{PLURAL:$1|メッセージ}}',
	'twnmp-bannerwho' => '画像: $1',
	'twnmp-show-more-projects' => '全プロジェクトを表示...',
	'twnmp-brand-motto' => 'オープンソース翻訳コミュニティ',
	'twnmp-login' => 'ログイン',
	'twnmp-logout' => 'ログアウト',
	'twnmp-search-placeholder' => '修正したい翻訳を検索',
	'twnmp-search-button' => '検索',
	'twnmp-search-choose-project' => '翻訳するプロジェクトの選択',
	'twnmp-translate-link' => '翻訳',
	'twnmp-proofread-link' => '査読',
	'twnmp-translate-button' => '翻訳',
	'twnmp-view-button' => '翻訳を閲覧',
	'twnmp-proofread-button' => '査読',
	'twnmp-your-translations-stats' => 'あなたの翻訳の統計',
	'twnmp-your-translations-stats-all-languages' => 'すべての言語',
	'twnmp-your-view-language-stats' => '言語別翻訳状況を表示',
	'twnmp-translations-per-month' => '翻訳/月',
	'twnmp-translations-in-sandbox' => '翻訳',
	'twnmp-reviews-per-month' => '査読/月',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=翻訳者はあなたのみです<br />言語: $4|$2 {{GENDER:$1|位の翻訳者}} ($3 人中)<br />言語: $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=翻訳者はあなたのみです|$2 {{GENDER:$1|位の翻訳者}} ($3 人中)}}',
	'twnmp-add-project' => 'あなたのオープンソース プロジェクトを翻訳対象に追加',
	'twnmp-sandboxed' => '翻訳の完全な権限を取得するには、もっと翻訳する必要があります。',
	'twnmp-bottom-help' => 'ヘルプ',
	'twnmp-bottom-support' => 'サポート デスク',
	'twnmp-bottom-languages-supported' => 'サポートしている言語',
	'twnmp-bottom-about' => 'このサイトについて',
	'twnmp-signup-username-placeholder' => '利用者名',
	'twnmp-signup-password-placeholder' => 'パスワード',
	'twnmp-signup-email-placeholder' => 'メールアドレス',
	'twnmp-create-account-button' => 'アカウント作成',
	'twnmp-become-translator' => '翻訳者になりませんか',
	'twnmp-choose-languages-you-know' => 'あなたが理解できる言語を選択してください',
	'twnmp-choose-another-language' => '別の言語を選択...',
	'twnmp-choose-fill-account-details' => 'アカウント情報を入力してください',
	'twnmp-join-community' => 'コミュニティへの参加',
	'twnmp-create-account-cancel' => 'キャンセル',
	'twnmp-select-target-language' => '言語を選択',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|$1 メッセージ}}',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'twnmp-s-languages' => 'აქტიური {{PLURAL:$1|ენა|ენა}}',
);

/** Khmer (ភាសាខ្មែរ)
 * @author គីមស៊្រុន
 */
$messages['km'] = array(
	'twnmp-desc' => 'ផ្ដល់ជូននូវទំព័រដើមសម្រាប់ translatewiki.net',
	'twnmp-mainpage' => 'ទំព័រដើម',
	'twnmp-s-translators' => 'អ្នកប្រែសម្រួល', # Fuzzy
	'twnmp-s-projects' => 'គម្រោង​នានា', # Fuzzy
	'twnmp-s-languages' => 'ភាសា​', # Fuzzy
	'twnmp-s-messages' => 'សារដែលត្រូវបកប្រែ', # Fuzzy
	'twnmp-bannerwho' => 'រូបភាព $1',
	'twnmp-show-more-projects' => 'បង្ហាញគម្រោងបន្ថែមទៀត...', # Fuzzy
	'twnmp-brand-motto' => 'សហគមន៍បកប្រែប្រភពបើកទូលាយ',
	'twnmp-login' => 'កត់ឈ្មោះចូល',
	'twnmp-search-placeholder' => 'ស្វែងរកនិងកែតម្រូវការបកប្រែ',
	'twnmp-search-button' => 'ស្វែងរក',
	'twnmp-search-choose-project' => 'ជ្រើសរើសគម្រោងមួយដើម្បីបកប្រែ',
	'twnmp-translate-link' => 'បកប្រែ',
	'twnmp-proofread-link' => 'ផ្ទៀងផ្ទាត់', # Fuzzy
	'twnmp-translate-button' => 'បកប្រែ',
	'twnmp-proofread-button' => 'ផ្ទៀងផ្ទាត់', # Fuzzy
	'twnmp-your-translations-stats' => 'ស្ថិតិបកប្រែរបស់អ្នក',
	'twnmp-your-view-language-stats' => 'មើលស្ថិតិ​ភាសា',
	'twnmp-translations-per-month' => 'ចំនួនបកប្រែ/ខែ',
	'twnmp-reviews-per-month' => 'ចំនួនត្រួតពិនិត្យ/ខែ',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|ជាប់ចំណាត់ថ្នាក់លេខ}} $2  ក្នុងចំណោម<br />អ្នកបកប្រែជា$4 ចំនួន $3', # Fuzzy
	'twnmp-bottom-help' => 'ជំនួយ',
	'twnmp-bottom-languages-supported' => 'ភាសាដែលអាចប្រើបាន',
	'twnmp-bottom-about' => 'អំពី',
	'twnmp-signup-username-placeholder' => 'អត្តនាម',
	'twnmp-signup-password-placeholder' => 'ពាក្យ​សម្ងាត់',
	'twnmp-signup-email-placeholder' => 'អ៊ីមែល',
	'twnmp-create-account-button' => 'បង្កើតគណនី',
	'twnmp-become-translator' => 'ក្លាយជាអ្នកប្រែសម្រួល',
	'twnmp-choose-languages-you-know' => 'ជ្រើសរើសភាសាដែលអ្នកចេះ',
	'twnmp-choose-another-language' => 'ជ្រើសរើសភាសាមួយទៀត...',
	'twnmp-choose-fill-account-details' => 'បំពេញព័ត៌មានពិស្ដារអំពីគណនីរបស់អ្នក', # Fuzzy
);

/** Korean (한국어)
 * @author Hym411
 * @author 아라
 */
$messages['ko'] = array(
	'twnmp-desc' => 'translatewiki.net 대문을 제공합니다',
	'twnmp-mainpage' => '대문',
	'twnmp-s-translators' => '{{PLURAL:$1|번역자}}',
	'twnmp-s-projects' => '{{PLURAL:$1|프로젝트}}',
	'twnmp-s-languages' => '활발한 {{PLURAL:$1|언어}}',
	'twnmp-s-messages' => '번역할 {{PLURAL:$1|메시지}}',
	'twnmp-bannerwho' => '그림: $1',
	'twnmp-show-more-projects' => '모든 프로젝트 보기...',
	'twnmp-brand-motto' => '오픈 소스 번역 커뮤니티',
	'twnmp-login' => '로그인',
	'twnmp-logout' => '로그아웃',
	'twnmp-search-placeholder' => '번역을 찾아서 교정하기',
	'twnmp-search-button' => '찾기',
	'twnmp-search-choose-project' => '번역할 프로젝트를 선택하세요',
	'twnmp-translate-link' => '번역',
	'twnmp-proofread-link' => '검토',
	'twnmp-translate-button' => '번역',
	'twnmp-view-button' => '번역 보기',
	'twnmp-proofread-button' => '검토',
	'twnmp-your-translations-stats' => '내 번역 통계',
	'twnmp-your-translations-stats-all-languages' => '모든 언어',
	'twnmp-your-view-language-stats' => '언어 통계 보기',
	'twnmp-translations-per-month' => '번역/월',
	'twnmp-translations-in-sandbox' => '번역',
	'twnmp-reviews-per-month' => '검토/월',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=$4에서는<br />한 명 뿐입니다|$4에서<br />$3명 중 $2{{GENDER:$1|위}}}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=한 명 뿐입니다|$3명 중 $2{{GENDER:$1|위}}}}',
	'twnmp-add-project' => '여러분의 오픈 소스 프로젝트를 번역에 추가하세요',
	'twnmp-sandboxed' => '모두 번역할 권리를 얻으려면 더 많은 번역을 제공해야 합니다.',
	'twnmp-sandboxed-limit' => '번역 제한에 도달했습니다. 우리 팀은 곧 당신의 계정을 확인하고 업그레이드할 것입니다.',
	'twnmp-bottom-help' => '도움말',
	'twnmp-bottom-support' => '지원 요청',
	'twnmp-bottom-languages-supported' => '지원하는 언어',
	'twnmp-bottom-about' => '소개',
	'twnmp-signup-username-placeholder' => '사용자 이름',
	'twnmp-signup-password-placeholder' => '비밀번호',
	'twnmp-signup-email-placeholder' => '이메일',
	'twnmp-create-account-button' => '계정 만들기',
	'twnmp-become-translator' => '번역자가 되세요',
	'twnmp-choose-languages-you-know' => '당신이 알고 있는 언어를 선택하세요',
	'twnmp-choose-another-language' => '다른 언어 선택...',
	'twnmp-choose-fill-account-details' => '계정 정보를 입력하세요',
	'twnmp-join-community' => '이 공동체에 가입하기',
	'twnmp-join-community-desc' => '번역을 문서하거나, 플랫폼을 탐험하는 데 관심이 있는 개발자라면, 또한 환영합니다.',
	'twnmp-join-community-reason' => '왜 가입에 관심이 있습니까?',
	'twnmp-create-account-cancel' => '취소',
	'twnmp-join-community-info' => '번역자가 아닙니까? 여전히 공동체에 가입할 수 있습니다.',
	'twnmp-stats-number-k' => '$1천',
	'twnmp-select-target-language' => '언어 선택',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|메시지 한 개|메시지 $1개}}',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'twnmp-desc' => '{{GRAMMAR:Gen M |{{ucfirst:{{SITENAME}}}}}} {{int:mainpage}}.',
	'twnmp-mainpage' => '{{int:mainpage}}',
	'twnmp-s-translators' => 'Övversäzer', # Fuzzy
	'twnmp-s-projects' => 'Projäkte', # Fuzzy
	'twnmp-s-languages' => 'Schprooche', # Fuzzy
	'twnmp-s-messages' => 'Täxte un Nohreeschte för ze Övversäze', # Fuzzy
	'twnmp-bannerwho' => 'Dat Beld es $1',
	'twnmp-show-more-projects' => 'Mieh aanzeije ...', # Fuzzy
	'twnmp-brand-motto' => 'Jemeinschaff vun Övversäzer för offe Quälle',
	'twnmp-login' => 'Enlogge',
	'twnmp-search-placeholder' => 'Fengk Övversäzonge un donn se bäßer maache wann nüüdesch',
	'twnmp-search-button' => 'Lohß Jonn!',
	'twnmp-search-choose-project' => 'Söhk Der e Projäk uß, woh De jät vun övversäze wells:',
	'twnmp-translate-link' => 'Övversäze',
	'twnmp-proofread-link' => 'Jääjelässe', # Fuzzy
	'twnmp-translate-button' => 'Övversäze!',
	'twnmp-proofread-button' => 'Jääjelässe!', # Fuzzy
	'twnmp-your-translations-stats' => 'Ding Schtatistike fun de Övversäzonge.',
	'twnmp-your-view-language-stats' => 'Schtatistike för de Schprooche',
	'twnmp-translations-per-month' => 'Övversäzonge em Mohnd',
	'twnmp-reviews-per-month' => 'Jääjejelässe em Mohnd',
	'twnmp-translations-translator-ranking' => 'Bes {{PLURAL:$3|der einzejje|de Nommer $2 vun dä $3<br />|keine}}
Övversäzer noh $4{{GENDER:$1}}', # Fuzzy
	'twnmp-bottom-help' => 'Hölp',
	'twnmp-bottom-languages-supported' => 'Ongerschtöz Schprooche',
	'twnmp-bottom-about' => 'Övver {{GRAMMAR:Nominativ|{{ucfirst:{{SITENAME}}}}}}',
	'twnmp-signup-username-placeholder' => 'Dinge Naame als Metmaacher',
	'twnmp-signup-password-placeholder' => 'E Paßwoot för Desch',
	'twnmp-signup-email-placeholder' => 'De Addräß för Ding <i lang="en">e-mail</i>',
	'twnmp-create-account-button' => 'Donn ene neue Zohjang aanlääje',
	'twnmp-become-translator' => 'Donn Övversäzer wääde',
	'twnmp-choose-languages-you-know' => 'Söhk di Schprooche uß, di De kanns',
	'twnmp-choose-another-language' => 'Söhg_en andere Schprooch us{{int:ellipsis}}',
	'twnmp-choose-fill-account-details' => 'De Einzelheite övver Dinge Zohjang:', # Fuzzy
	'twnmp-stats-number-k' => '$1&nbsp;Tsd.',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'twnmp-mainpage' => 'Destpêk',
	'twnmp-s-translators' => 'Wergêr', # Fuzzy
	'twnmp-s-projects' => 'Proje', # Fuzzy
	'twnmp-s-languages' => 'Ziman', # Fuzzy
	'twnmp-search-placeholder' => 'Wergeran bibîne û sererast bike',
	'twnmp-translate-link' => 'Wergerîne',
	'twnmp-translate-button' => 'Wergerîne',
	'twnmp-your-translations-stats' => 'Stâtîstîkên te ên wergerê',
	'twnmp-your-view-language-stats' => 'Statîstîkên ziman bibîne',
	'twnmp-bottom-help' => 'Alîkarî',
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
	'twnmp-s-translators' => '{{PLURAL:$1|Iwwersetzer}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projet|Projeten}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Sprooch|Sproochen}}',
	'twnmp-s-messages' => "{{PLURAL:$1|Message}} fir z'iwwersetzen",
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'All Projete weisen...',
	'twnmp-brand-motto' => 'Open-Source-Iwwersetzungscommunautéit',
	'twnmp-login' => 'Aloggen',
	'twnmp-logout' => 'Auslooggen',
	'twnmp-search-placeholder' => 'Iwwersetzunge fannen a verbesseren',
	'twnmp-search-button' => 'Fannen',
	'twnmp-search-choose-project' => "E Projet eraussiche fir z'iwwersetzen",
	'twnmp-translate-link' => 'Iwwersetzen',
	'twnmp-proofread-link' => 'Iwwerliesen',
	'twnmp-translate-button' => 'Iwwersetzen',
	'twnmp-view-button' => 'Iwwersetzunge weisen',
	'twnmp-proofread-button' => 'Nokucken',
	'twnmp-your-translations-stats' => 'Är Statistike vun der Iwwersetzung',
	'twnmp-your-translations-stats-all-languages' => 'Fir all Sproochen',
	'twnmp-your-view-language-stats' => 'Sproochstatistike weisen',
	'twnmp-translations-per-month' => 'Iwwersetzunge pro Mount',
	'twnmp-translations-in-sandbox' => 'Iwwersetzungen',
	'twnmp-reviews-per-month' => 'Nogekuckt pro Mount',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Dir sidd deen Eenzegen<!-- $1 --><br />op der $4|Plaz $2 vu(n) $3<br />fir $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Dir sidd deen Eenzegen<!-- $1 -->|Plaz $2 vu(n) $3}}',
	'twnmp-add-project' => "Setzt Ären Open-Source Projet fir d'Iwwersetzung derbäi",
	'twnmp-sandboxed' => 'Dir musst méi Iwwersetzunge maachen fir komplett Iwwersetzungstrechter ze kréien.',
	'twnmp-sandboxed-limit' => "Dir hutt d'Limit vun den Iwwersetzungen erreecht. Eis Equipe wäert Äre Benotzerkont nokucken an Är Benotzerrechter upassen.",
	'twnmp-bottom-help' => 'Hëllef',
	'twnmp-bottom-support' => 'Ënnerstëtzung',
	'twnmp-bottom-languages-supported' => 'Ënnerstëtzt Sproochen',
	'twnmp-bottom-about' => 'Iwwer',
	'twnmp-signup-username-placeholder' => 'Benotzernumm',
	'twnmp-signup-password-placeholder' => 'Passwuert',
	'twnmp-signup-email-placeholder' => 'E-Mail',
	'twnmp-create-account-button' => 'Benotzerkont uleeën',
	'twnmp-become-translator' => 'Iwwersetzer ginn',
	'twnmp-choose-languages-you-know' => 'Sproochen eraussichen déi Dir kënnt',
	'twnmp-choose-another-language' => 'Eng aner Sprooch eraussichen...',
	'twnmp-choose-fill-account-details' => "Gitt d'Detailer vu Ärem Benotzerkont an",
	'twnmp-join-community' => 'Maacht bei eis mat',
	'twnmp-create-account-cancel' => 'Ofbriechen',
	'twnmp-join-community-info' => 'Keen Iwwersetzer? Dir kënnt nach bei eis matmaachen.',
	'twnmp-select-target-language' => 'Sprooch eraussichen',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Ee Message|$1 Messagen}}',
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
	'twnmp-s-translators' => '{{PLURAL:$1|Преведувач|Преведувачи}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Проект|Проекти}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Активен јазик|Активни јазици}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Порака|Пораки}} за преведување',
	'twnmp-bannerwho' => 'Слика $1',
	'twnmp-show-more-projects' => 'Прикажи ги сите проекти...',
	'twnmp-brand-motto' => 'Преводна заедница за отворен код',
	'twnmp-login' => 'Најава',
	'twnmp-logout' => 'Одјава',
	'twnmp-search-placeholder' => 'Пронајди и исправи преводи',
	'twnmp-search-button' => 'Најди',
	'twnmp-search-choose-project' => 'Одберете проект за преведување',
	'twnmp-translate-link' => 'Преведи',
	'twnmp-proofread-link' => 'Провери',
	'twnmp-translate-button' => 'Преведи',
	'twnmp-view-button' => 'Погл. преводи',
	'twnmp-proofread-button' => 'Провери',
	'twnmp-your-translations-stats' => 'Ваши преводни статистики',
	'twnmp-your-translations-stats-all-languages' => 'За сите јазици',
	'twnmp-your-view-language-stats' => 'Јазични статистики',
	'twnmp-translations-per-month' => 'Преводи месечно',
	'twnmp-translations-in-sandbox' => 'Преводи',
	'twnmp-reviews-per-month' => 'Проверки месечно',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Единствени сте<br />за $4|{{GENDER:$1|Ранг:}} $2 од $3<br />за $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Единствени сте|{{GENDER:$1|Ранг:}} $2 од $3}}',
	'twnmp-add-project' => 'Додадете вашиот отворен проект за превод',
	'twnmp-sandboxed' => 'Ќе треба да направите уште преводи за ги добиете полните преведувачки прева.',
	'twnmp-sandboxed-limit' => 'Ја достигнавте границата на преводи. Нашата екипа наскоро ќе ја направи проверката и ќе ве унапреди.',
	'twnmp-bottom-help' => 'Помош',
	'twnmp-bottom-support' => 'Поддршка',
	'twnmp-bottom-languages-supported' => 'Поддржани јазици',
	'twnmp-bottom-about' => 'За проектот',
	'twnmp-signup-username-placeholder' => 'Корисничко име',
	'twnmp-signup-password-placeholder' => 'Лозинка',
	'twnmp-signup-email-placeholder' => 'Е-пошта',
	'twnmp-create-account-button' => 'Направи сметка',
	'twnmp-become-translator' => 'Станете преведувач',
	'twnmp-choose-languages-you-know' => 'Укажете ги јазиците што ги владеете',
	'twnmp-choose-another-language' => 'Друг јазик...',
	'twnmp-choose-fill-account-details' => 'Внесете ги податоците за сметката',
	'twnmp-join-community' => 'Приклучете се во заедницата',
	'twnmp-join-community-desc' => 'Драго ни е и ако сте програмер заинтересиран за документирање на преводите, или пак само ја проучувате подлогата.',
	'twnmp-join-community-reason' => 'Зошто би сакале да се приклучите?',
	'twnmp-create-account-cancel' => 'Откажи',
	'twnmp-join-community-info' => 'Не сте преведувач? Бездруго можете да се приклучите на заедницата.',
	'twnmp-stats-number-k' => '$1 илј.',
	'twnmp-select-target-language' => 'Одберете јазик',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Една порака|$1 пораки}}',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'twnmp-desc' => 'translatewiki.net പ്രധാനതാൾ ഒരുക്കുന്നു.',
	'twnmp-mainpage' => 'പ്രധാന താൾ',
	'twnmp-s-translators' => 'പരിഭാഷകർ', # Fuzzy
	'twnmp-s-projects' => 'പദ്ധതികൾ', # Fuzzy
	'twnmp-s-languages' => 'ഭാഷകൾ', # Fuzzy
	'twnmp-s-messages' => 'തർജ്ജമയ്ക്കുള്ള സന്ദേശങ്ങൾ', # Fuzzy
	'twnmp-bannerwho' => 'ചിത്രം $1',
	'twnmp-show-more-projects' => 'കൂടുതൽ പദ്ധതികൾ പ്രദർശിപ്പിക്കുക...', # Fuzzy
	'twnmp-brand-motto' => 'ഓപ്പൺ സോഴ്സ് പരിഭാഷക സമൂഹം',
	'twnmp-login' => 'പ്രവേശിക്കുക',
	'twnmp-logout' => 'ലോഗൗട്ട്',
	'twnmp-search-placeholder' => 'പരിഭാഷകൾ തിരഞ്ഞ് തിരുത്തുക',
	'twnmp-search-button' => 'കണ്ടെത്തുക',
	'twnmp-search-choose-project' => 'പരിഭാഷയ്ക്കുള്ള പദ്ധതി തിരഞ്ഞെടുക്കുക',
	'twnmp-translate-link' => 'പരിഭാഷപ്പെടുത്തുക',
	'twnmp-proofread-link' => 'സം‌ശോധനം',
	'twnmp-translate-button' => 'പരിഭാഷപ്പെടുത്തുക',
	'twnmp-proofread-button' => 'സം‌ശോധനം',
	'twnmp-your-translations-stats' => 'താങ്കളുടെ പരിഭാഷയുടെ സ്ഥിതിവിവരക്കണക്കുകൾ',
	'twnmp-your-translations-stats-all-languages' => 'എല്ലാ ഭാഷകൾക്കും',
	'twnmp-your-view-language-stats' => 'ഭാഷയുടെ സ്ഥിതിവിവരക്കണക്കുകൾ കാണുക',
	'twnmp-translations-per-month' => 'പ്രതിമാസ തർജ്ജമകൾ',
	'twnmp-reviews-per-month' => 'പ്രതിമാസ സംശോധനകൾ',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=$4 ഭാഷയ്ക്ക് ഒരാളേയുള്ളു,<br />അത് താങ്കളാണ്|$4 ഭാഷയിൽ {{GENDER:$1|പ്രവർത്തിക്കുന്നവരിൽ}}<br />ആകെ $3 ആൾക്കാരുള്ളതിൽ സ്ഥാനം $2}}',
	'twnmp-add-project' => 'പരിഭാഷയ്ക്കായി താങ്കളുടെ ഓപ്പൺ സോഴ്സ് പ്രൊജക്ട് ചേർക്കുക',
	'twnmp-bottom-help' => 'സഹായം',
	'twnmp-bottom-support' => 'സഹായമേശ',
	'twnmp-bottom-languages-supported' => 'പിന്തുണയ്ക്കുന്ന ഭാഷകൾ',
	'twnmp-bottom-about' => 'വിവരണം',
	'twnmp-signup-username-placeholder' => 'ഉപയോക്തൃനാമം',
	'twnmp-signup-password-placeholder' => 'രഹസ്യവാക്ക്',
	'twnmp-signup-email-placeholder' => 'ഇമെയിൽ',
	'twnmp-create-account-button' => 'അംഗത്വമെടുക്കുക',
	'twnmp-become-translator' => 'പരിഭാഷ ചെയ്തു തുടങ്ങുക',
	'twnmp-choose-languages-you-know' => 'അറിയുന്ന ഭാഷകൾ തിരഞ്ഞെടുക്കുക',
	'twnmp-choose-another-language' => 'മറ്റൊരു ഭാഷ തിരഞ്ഞെടുക്കുക...',
	'twnmp-choose-fill-account-details' => 'താങ്കളുടെ അംഗത്വ വിവരങ്ങൾ ചേർക്കുക', # Fuzzy
	'twnmp-select-target-language' => 'ഭാഷ തിരഞ്ഞെടുക്കുക',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|ഒരു സന്ദേശം|$1 സന്ദേശങ്ങൾ}}',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 */
$messages['nb'] = array(
	'twnmp-mainpage' => 'Hovedside',
	'twnmp-s-translators' => 'Oversettere', # Fuzzy
	'twnmp-s-projects' => 'Prosjekter', # Fuzzy
	'twnmp-s-languages' => 'Språk', # Fuzzy
	'twnmp-s-messages' => 'Meldinger å oversette', # Fuzzy
	'twnmp-bannerwho' => 'Bilde $1',
	'twnmp-show-more-projects' => 'Vis flere prosjekter...', # Fuzzy
	'twnmp-brand-motto' => 'Åpen kildekode-oversettelsesfelleskap',
	'twnmp-login' => 'Logg inn',
	'twnmp-search-placeholder' => 'Finn og korriger oversettelser',
	'twnmp-search-button' => 'Søk',
	'twnmp-search-choose-project' => 'Velg prosjekt å oversette',
	'twnmp-translate-link' => 'Oversett',
	'twnmp-proofread-link' => 'Korrekturles', # Fuzzy
	'twnmp-translate-button' => 'Oversett',
	'twnmp-proofread-button' => 'Korrekturles', # Fuzzy
	'twnmp-your-translations-stats' => 'Din oversettelsesstatistikk',
	'twnmp-your-view-language-stats' => 'Vis språkstatistikk',
	'twnmp-translations-per-month' => 'Oversettelser/måned',
	'twnmp-reviews-per-month' => 'Gjennomganger/måned',
	'twnmp-translations-translator-ranking' => '{{GENDER:$1|Rangert}} som $2 av $3 oversettere<br />i $4', # Fuzzy
	'twnmp-bottom-help' => 'Hjelp',
	'twnmp-bottom-languages-supported' => 'Støttede språk',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Brukernavn',
	'twnmp-signup-password-placeholder' => 'Passord',
	'twnmp-signup-email-placeholder' => 'E-post',
	'twnmp-create-account-button' => 'Opprett konto',
	'twnmp-become-translator' => 'Bli en oversetter',
	'twnmp-choose-languages-you-know' => 'Velg språk du kan',
	'twnmp-choose-another-language' => 'Velg et annet språk...',
	'twnmp-choose-fill-account-details' => 'Fyll inn kontodetaljene dine', # Fuzzy
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 * @author Southparkfan
 */
$messages['nl'] = array(
	'twnmp-desc' => 'Bevat de startpagina van translatewiki.net',
	'twnmp-mainpage' => 'Startpagina',
	'twnmp-s-translators' => '{{PLURAL:$1|Vertaler|Vertalers}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Project|Projecten}}',
	'twnmp-s-languages' => 'Actieve {{PLURAL:$1|taal|talen}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Vertaaleenheid|Vertaaleenheden}}',
	'twnmp-bannerwho' => 'Afbeelding: $1',
	'twnmp-show-more-projects' => 'All projecten weergeven...',
	'twnmp-brand-motto' => 'Community voor het vertalen van open source software',
	'twnmp-login' => 'Aanmelden',
	'twnmp-logout' => 'Afmelden',
	'twnmp-search-placeholder' => 'Vertalingen vinden en aanpassen',
	'twnmp-search-button' => 'Zoeken',
	'twnmp-search-choose-project' => 'Kies een te vertalen project',
	'twnmp-translate-link' => 'Vertalen',
	'twnmp-proofread-link' => 'Controleren',
	'twnmp-translate-button' => 'Vertalen',
	'twnmp-view-button' => 'Vertaling bekijken',
	'twnmp-proofread-button' => 'Controleren',
	'twnmp-your-translations-stats' => 'Uw vertaalstatistieken',
	'twnmp-your-translations-stats-all-languages' => 'Voor alle talen',
	'twnmp-your-view-language-stats' => 'Taalstatistieken bekijken',
	'twnmp-translations-per-month' => 'Vertalingen/maand',
	'twnmp-translations-in-sandbox' => 'Vertalingen',
	'twnmp-reviews-per-month' => 'Gecontroleerd/maand',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=U bent de enige<br />voor $4|{{GENDER:$1|Positie}} $2 van $3<br />voor $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=U bent de enige|{{GENDER:$1|Positie}} $2 van $3}}',
	'twnmp-add-project' => 'Voeg uw open sourceproject toe voor vertaling',
	'twnmp-sandboxed' => 'U moet meer vertalingen maken om volledige vertaalrechten te krijgen.',
	'twnmp-sandboxed-limit' => 'U hebt de limiet voor vertalingen bereikt. Ons team gaat uw vertalingen controleren en promoveert uw gebruiker snel.',
	'twnmp-bottom-help' => 'Hulp',
	'twnmp-bottom-support' => 'Helpdesk',
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
	'twnmp-join-community' => 'Word lid van onze gemeenschap',
	'twnmp-join-community-desc' => 'Als u een ontwikkelaar bent, die vertalingen wil documenteren, of als u gewoon wilt rondkijken, dan bent u ook welkom.',
	'twnmp-join-community-reason' => 'Waarom wilt u deelnemen?',
	'twnmp-create-account-cancel' => 'Annuleren',
	'twnmp-join-community-info' => 'Geen vertaler? U kunt toch deelnemen aan de gemeenschap.',
	'twnmp-select-target-language' => 'Taal selecteren',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Eén bericht|$1 berichten}}',
);

/** Occitan (occitan)
 * @author Cedric31
 * @author Fitoschido
 */
$messages['oc'] = array(
	'twnmp-desc' => 'Provesís la pagina principala de translatewiki.net',
	'twnmp-mainpage' => 'Acuèlh',
	'twnmp-s-translators' => '{{PLURAL:$1|traductor|traductors}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projècte|Projèctes}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Lenga activa|Lengas activas}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Messatge|Messatges}} de tradusir',
	'twnmp-bannerwho' => 'Imatge $1',
	'twnmp-show-more-projects' => 'Afichar totes los projèctes...',
	'twnmp-brand-motto' => 'Comunautat de traduccion en font liura',
	'twnmp-login' => 'Se connectar',
	'twnmp-search-placeholder' => 'Recercar e corregir de traduccions',
	'twnmp-search-button' => 'Recercar',
	'twnmp-search-choose-project' => 'Causir un projècte de tradusir',
	'twnmp-translate-link' => 'Tradusir',
	'twnmp-proofread-link' => 'Repassar',
	'twnmp-translate-button' => 'Tradusir',
	'twnmp-proofread-button' => 'Repassar',
	'twnmp-your-translations-stats' => 'Vòstras estatisticas de traduccion',
	'twnmp-your-view-language-stats' => 'Afichar las estatisticas de lenga',
	'twnmp-translations-per-month' => 'traduccions/mes',
	'twnmp-reviews-per-month' => 'Relecturas/mes',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Sètz lo sol<br />per $4|{{GENDER:$1|Classat}} $2 sus $3<br />per $4}}',
	'twnmp-bottom-help' => 'Ajuda',
	'twnmp-bottom-languages-supported' => 'Lengas presas en carga',
	'twnmp-bottom-about' => 'A prepaus',
	'twnmp-signup-username-placeholder' => "Nom d'utilizaire",
	'twnmp-signup-password-placeholder' => 'Senhal',
	'twnmp-signup-email-placeholder' => 'Corrièr electronic',
	'twnmp-create-account-button' => 'Crear un compte',
	'twnmp-become-translator' => 'Venir un traductor',
	'twnmp-choose-languages-you-know' => 'Causir las lengas que coneissètz',
	'twnmp-choose-another-language' => 'Causir una autra lenga…',
	'twnmp-choose-fill-account-details' => 'Completatz los detalhs de vòstre compte',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'twnmp-mainpage' => 'Strona główna',
	'twnmp-s-translators' => '{{PLURAL:$1|Tłumacz|Tłumacze|Tłumaczy}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projekt|Projekty|Projektów}}',
	'twnmp-s-languages' => 'Aktywnych {{PLURAL:$1|język|języki|języków}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Wiadomość|Wiadomości}} do przetłumaczenia',
	'twnmp-bannerwho' => 'Grafika $1',
	'twnmp-show-more-projects' => 'Pokaż wszystkie projekty...',
	'twnmp-brand-motto' => 'Społeczność tłumaczy projektów open source',
	'twnmp-login' => 'Zaloguj się',
	'twnmp-logout' => 'Wyloguj',
	'twnmp-search-placeholder' => 'Znajdź i popraw tłumaczenia',
	'twnmp-search-button' => 'Znajdź',
	'twnmp-search-choose-project' => 'Wybierz projekt do tłumaczenia',
	'twnmp-translate-link' => 'Przetłumacz',
	'twnmp-proofread-link' => 'Przejrzyj',
	'twnmp-translate-button' => 'Przetłumacz',
	'twnmp-view-button' => 'Przegląd tłumaczeń',
	'twnmp-proofread-button' => 'Przejrzyj',
	'twnmp-your-translations-stats' => 'Twoje statystyki tłumaczeń',
	'twnmp-your-translations-stats-all-languages' => 'Dla wszystkich języków',
	'twnmp-your-view-language-stats' => 'Statystyka tłumaczenia',
	'twnmp-translations-per-month' => 'Tłumaczenia/miesiąc',
	'twnmp-translations-in-sandbox' => 'Tłumaczenia',
	'twnmp-reviews-per-month' => 'Przeglądów/miesiąc',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Jesteś jedynym tłumaczem<br />dla język $4|Jesteś {{GENDER:$1|tłumaczem|tłumaczką}} o rankingu $2 z $3<br />dla język $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Jesteś {{GENDER:$1|jedynym tłumaczem|jedyną tłumaczką}} |Jesteś {{GENDER:$1|tłumaczem|tłumaczką}} o rankingu $2 z $3}}',
	'twnmp-add-project' => 'Dodaj swój projekt open source do tłumaczenia',
	'twnmp-bottom-help' => 'Pomoc',
	'twnmp-bottom-support' => 'Obsługa techniczna',
	'twnmp-bottom-languages-supported' => 'Obsługiwane języki',
	'twnmp-bottom-about' => 'O projekcie',
	'twnmp-signup-username-placeholder' => 'Nazwa użytkownika',
	'twnmp-signup-password-placeholder' => 'Hasło',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Utwórz konto',
	'twnmp-become-translator' => 'Zostań tłumaczem',
	'twnmp-choose-languages-you-know' => 'Wybierz języki, które znasz',
	'twnmp-choose-another-language' => 'Wybierz inny język...',
	'twnmp-join-community' => 'Dołącz do społeczności',
	'twnmp-create-account-cancel' => 'Anuluj',
	'twnmp-select-target-language' => 'Wybierz język',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Jedna wiadomość|$1 wiadomości}}',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'twnmp-desc' => 'د translatewiki.net لومړی مخ جوړوي',
	'twnmp-mainpage' => 'لومړی مخ',
	'twnmp-s-translators' => '{{PLURAL:$1|ژباړن|ژباړونکي}}',
	'twnmp-s-projects' => '{{PLURAL:$1|پروژه|پروژې}}',
	'twnmp-s-languages' => '{{PLURAL:$1|فعاله ژبه|فعالې ژبې}}',
	'twnmp-s-messages' => 'د ژباړې {{PLURAL:$1|پيغام|پيغامونه}}',
	'twnmp-bannerwho' => 'انځور $1',
	'twnmp-show-more-projects' => 'ټولې پروژې ښکاره کول...',
	'twnmp-brand-motto' => 'د پرانيستې سرچينې د ژباړې ټولنه',
	'twnmp-login' => 'ننوتل',
	'twnmp-search-placeholder' => 'ژباړې موندل او سمول',
	'twnmp-search-button' => 'موندل',
	'twnmp-search-choose-project' => 'د ژباړلو لپاره يوه پروژه وټاکۍ',
	'twnmp-translate-link' => 'ژباړل',
	'twnmp-proofread-link' => 'کره لوستنه', # Fuzzy
	'twnmp-translate-button' => 'ژباړل',
	'twnmp-proofread-button' => 'کره لوستنه', # Fuzzy
	'twnmp-your-translations-stats' => 'ستاسې د ژباړې شمارنې',
	'twnmp-your-view-language-stats' => 'د ژبې شمارنې کتل',
	'twnmp-translations-per-month' => 'ژباړې/مياشت',
	'twnmp-reviews-per-month' => 'بياکتنې/مياشت',
	'twnmp-bottom-help' => 'لارښود',
	'twnmp-bottom-languages-supported' => 'ملاتړې ژبې',
	'twnmp-bottom-about' => 'په اړه',
	'twnmp-signup-username-placeholder' => 'کارن-نوم',
	'twnmp-signup-password-placeholder' => 'پټنوم',
	'twnmp-signup-email-placeholder' => 'برېښليک',
	'twnmp-create-account-button' => 'گڼون جوړول',
	'twnmp-become-translator' => 'يو ژباړن شۍ',
	'twnmp-choose-languages-you-know' => 'هغه ژبې مو چې زده دي وټاکۍ',
	'twnmp-choose-another-language' => 'بله ژبه ټاکل...',
	'twnmp-choose-fill-account-details' => 'د گڼون تفصيل مو وليکۍ', # Fuzzy
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 */
$messages['pt-br'] = array(
	'twnmp-mainpage' => 'Página principal',
	'twnmp-s-translators' => '{{PLURAL:$1|Tradutor|Tradutores}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projeto|Projetos}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Língua ativa|Línguas ativas}}',
	'twnmp-s-messages' => 'Mensagens para traduzir', # Fuzzy
	'twnmp-bannerwho' => 'Imagem $1',
	'twnmp-show-more-projects' => 'Mostrar todos projetos...',
	'twnmp-translate-link' => 'Traduzir',
	'twnmp-translate-button' => 'Traduzir',
	'twnmp-your-translations-stats' => 'Suas estatísticas de tradução',
	'twnmp-translations-per-month' => 'Traduções/mês',
	'twnmp-reviews-per-month' => 'Revisões/mês',
	'twnmp-bottom-help' => 'Ajuda',
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
	'twnmp-s-translators' => '{{PLURAL:$1|Traducător|Traducători}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Proiect|Proiecte}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Limbă activă|Limbi active}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Mesaj|Mesaje}} de tradus',
	'twnmp-bannerwho' => 'Imaginea: $1',
	'twnmp-show-more-projects' => 'Arată toate proiectele...',
	'twnmp-brand-motto' => 'Comunitate de traducere cu sursă deschisă',
	'twnmp-login' => 'Autentificare',
	'twnmp-logout' => 'Închide sesiunea',
	'twnmp-search-placeholder' => 'Căutați și corectați traduceri',
	'twnmp-search-button' => 'Caută',
	'twnmp-search-choose-project' => 'Alegeți un proiect pentru a traduce',
	'twnmp-translate-link' => 'Traducere',
	'twnmp-proofread-link' => 'Revizuire',
	'twnmp-translate-button' => 'Traducere',
	'twnmp-view-button' => 'Vizualizare traduceri',
	'twnmp-proofread-button' => 'Revizuire',
	'twnmp-your-translations-stats' => 'Statisticile dv. de traducere',
	'twnmp-your-translations-stats-all-languages' => 'Pentru toate limbile',
	'twnmp-your-view-language-stats' => 'Vezi statisticile de limbă',
	'twnmp-translations-per-month' => 'Traduceri/lună',
	'twnmp-translations-in-sandbox' => 'Traduceri',
	'twnmp-reviews-per-month' => 'Verificări/lună',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Sunteți singurul traducător<br />pentru $4|{{GENDER:$1|Clasat|Clasată}} pe locul $2 din $3<br />pentru $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Sunteți singurul traducător|{{GENDER:$1|Clasat|Clasată}} pe locul $2 din $3}}',
	'twnmp-add-project' => 'Adăugați-vă propriul proiect cu sursă deschisă pentru traducere',
	'twnmp-sandboxed' => 'Trebuie să furnizați mai multe traduceri pentru a primi drepturi depline de traducere.',
	'twnmp-sandboxed-limit' => 'Ați atins limita de traducere. Echipa noastră va verifica și vă va actualiza contul în curând.',
	'twnmp-bottom-help' => 'Ajutor',
	'twnmp-bottom-support' => 'Suport',
	'twnmp-bottom-languages-supported' => 'Limbi întreținute',
	'twnmp-bottom-about' => 'Despre',
	'twnmp-signup-username-placeholder' => 'Nume de utilizator',
	'twnmp-signup-password-placeholder' => 'Parolă',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => 'Creare cont',
	'twnmp-become-translator' => 'Deveniți un traducător',
	'twnmp-choose-languages-you-know' => 'Alegeți limbile pe care le cunoașteți',
	'twnmp-choose-another-language' => 'Alegeți încă o limbă...',
	'twnmp-choose-fill-account-details' => 'Introduceți detaliile contului dumnevoastră',
	'twnmp-join-community' => 'Alăturați-vă comunității',
	'twnmp-join-community-desc' => 'Dacă sunteți un dezvoltator interesat de documentarea traducerilor sau pur și simplu explorați platforma, sunteți de asemenea binevenit.',
	'twnmp-join-community-reason' => 'De ce ați doriți să vă alăturați?',
	'twnmp-create-account-cancel' => 'Revocare',
	'twnmp-join-community-info' => 'Nu sunteți traducător? Chiar și-așa vă puteți alătura comunității.',
	'twnmp-select-target-language' => 'Selectare limbă',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Un mesaj|$1 mesaje|$1 de mesaje}}',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'twnmp-desc' => "Dèje 'a pàgene prengepàle de translatewiki.net",
	'twnmp-mainpage' => 'Pàgena Prengepàle',
	'twnmp-s-translators' => 'Tradutture', # Fuzzy
	'twnmp-s-projects' => 'Pruggette', # Fuzzy
	'twnmp-s-languages' => 'Lènghe', # Fuzzy
	'twnmp-s-messages' => 'Messàgge da traducere', # Fuzzy
	'twnmp-bannerwho' => 'Immaggine $1',
	'twnmp-show-more-projects' => 'Fà vedè cchiù pruggette...', # Fuzzy
	'twnmp-brand-motto' => "Iapre 'a comunitate origgenale de traduzione",
	'twnmp-login' => 'Tràse',
	'twnmp-logout' => 'Isse',
	'twnmp-search-placeholder' => 'Iacchie e corregge le traduziune',
	'twnmp-search-button' => 'Iacchie',
	'twnmp-search-choose-project' => "Scacchie 'nu proggette da traducere",
	'twnmp-translate-link' => 'Traduce',
	'twnmp-proofread-link' => 'Corregge', # Fuzzy
	'twnmp-translate-button' => 'Traduce',
	'twnmp-proofread-button' => 'Corregge', # Fuzzy
	'twnmp-your-translations-stats' => 'Le statisteche de le traduziune tune',
	'twnmp-your-translations-stats-all-languages' => 'Pe tutte le lènghe',
	'twnmp-your-view-language-stats' => "'Ndruche le statisteche d'a lènghe",
	'twnmp-translations-per-month' => 'Traduziune/mese',
	'twnmp-reviews-per-month' => 'Revisite/mese',
	'twnmp-translations-translator-ranking' => "{{PLURAL:$3|1=Tu sì l'uneche<br />pe $4|{{GENDER:$1|Posizionate}} $2 de $3<br />pe $4}}",
	'twnmp-translations-translator-ranking-source' => "{{PLURAL:$3|1=Tu sì l'uneche|{{GENDER:$1|Posizione}} $2 de $3}}",
	'twnmp-add-project' => "Aggiunge 'u proggette open source tune pa traduzione",
	'twnmp-bottom-help' => 'Aijute',
	'twnmp-bottom-support' => 'Tavule de supporte',
	'twnmp-bottom-languages-supported' => 'Lènghe supportate',
	'twnmp-bottom-about' => 'Sus a',
	'twnmp-signup-username-placeholder' => 'Nome utende',
	'twnmp-signup-password-placeholder' => 'Passuord',
	'twnmp-signup-email-placeholder' => 'E-mail',
	'twnmp-create-account-button' => "Ccreje 'nu cunde utende",
	'twnmp-become-translator' => "Devinde 'nu traduttore",
	'twnmp-choose-languages-you-know' => "Scacchie 'na lènghe ca canusce",
	'twnmp-choose-another-language' => "Scacchie 'n'otra lènghe...",
	'twnmp-choose-fill-account-details' => "Inghie le dettaglie d'u cunde tune", # Fuzzy
	'twnmp-select-target-language' => "Scacchie 'a lènghe",
	'twn-mainpage-total-messages-in-language' => "{{PLURAL:$1|'Nu messàgge|$1 messàgge}}",
);

/** Russian (русский)
 * @author Kaganer
 * @author Lockal
 * @author Okras
 * @author Ua2004
 */
$messages['ru'] = array(
	'twnmp-desc' => 'Текст на заглавной странице translatewiki.net',
	'twnmp-mainpage' => 'Заглавная страница',
	'twnmp-s-translators' => '{{PLURAL:$1|переводчик|переводчика|переводчиков}}',
	'twnmp-s-projects' => '{{PLURAL:$1|проект|проекта|проектов}}',
	'twnmp-s-languages' => '{{PLURAL:$1|активный язык|активных языка|активных языков}}',
	'twnmp-s-messages' => '{{PLURAL:$1|интерфейсное сообщение|интерфейсных сообщения|интерфейсных сообщений}} для перевода',
	'twnmp-bannerwho' => 'Изображение: $1',
	'twnmp-show-more-projects' => 'Показать все проекты…',
	'twnmp-brand-motto' => 'Сообщество переводчиков проектов с открытым исходным кодом',
	'twnmp-login' => 'Войти',
	'twnmp-logout' => 'Выйти',
	'twnmp-search-placeholder' => 'Найти и исправить переводы',
	'twnmp-search-button' => 'Найти',
	'twnmp-search-choose-project' => 'Выберите проект для перевода',
	'twnmp-translate-link' => 'Перевод',
	'twnmp-proofread-link' => 'Вычитка',
	'twnmp-translate-button' => 'Перевод',
	'twnmp-view-button' => 'Посмотреть переводы',
	'twnmp-proofread-button' => 'Вычитка',
	'twnmp-your-translations-stats' => 'Ваша статистика переводов',
	'twnmp-your-translations-stats-all-languages' => 'Для всех языков',
	'twnmp-your-view-language-stats' => 'Просмотр статистики языка',
	'twnmp-translations-per-month' => 'переведено за месяц',
	'twnmp-translations-in-sandbox' => 'Переводы',
	'twnmp-reviews-per-month' => 'проверено (вычитано) за месяц',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Вы единственный<br />переводчик на $4|{{GENDER:$1|Вы}} на $2-м месте среди $3<br />{{PLURAL:$3|переводчика|переводчиков|переводчиков}} на $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Вы единственный|{{GENDER:$1|Вы}} на $2-м месте среди $3}}',
	'twnmp-add-project' => 'Предложите для перевода свой проект с открытым исходным кодом',
	'twnmp-sandboxed' => 'Вы должны предоставить больше переводов для того, чтобы получить полные права на перевод.',
	'twnmp-sandboxed-limit' => 'Вы достигли предела перевода. Наша команда проверит и обновит вашу учётную запись в ближайшее время.',
	'twnmp-bottom-help' => 'Помощь',
	'twnmp-bottom-support' => 'Служба поддержки',
	'twnmp-bottom-languages-supported' => 'Поддерживаемые языки',
	'twnmp-bottom-about' => 'О проекте',
	'twnmp-signup-username-placeholder' => 'Имя участника',
	'twnmp-signup-password-placeholder' => 'Пароль',
	'twnmp-signup-email-placeholder' => 'Эл. почта',
	'twnmp-create-account-button' => 'Создать учётную запись',
	'twnmp-become-translator' => 'Стать переводчиком',
	'twnmp-choose-languages-you-know' => 'Выберите языки, которыми владеете',
	'twnmp-choose-another-language' => 'Выберите другой язык...',
	'twnmp-choose-fill-account-details' => 'Введите информацию о своей учётной записи',
	'twnmp-join-community' => 'Присоединиться к сообществу',
	'twnmp-join-community-desc' => 'Если вы разработчик, заинтересованный в документировании переводов, или просто изучает платформу, мы также вам рады.',
	'twnmp-join-community-reason' => 'Почему вы хотите присоединиться к нам?',
	'twnmp-create-account-cancel' => 'Отмена',
	'twnmp-join-community-info' => 'Вы не переводчик? Вы все равно можете присоединиться к сообществу.',
	'twnmp-stats-number-k' => '$1&nbsp;тыс.',
	'twnmp-select-target-language' => 'Выбрать язык',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|$1 сообщение|$1 сообщения|$1 сообщений}}',
);

/** Slovak (slovenčina)
 * @author Kusavica
 */
$messages['sk'] = array(
	'twnmp-logout' => 'Odhlásiť sa',
);

/** Slovenian (slovenščina)
 * @author Eleassar
 */
$messages['sl'] = array(
	'twnmp-desc' => 'Prikaže glavno stran projekta translatewiki.net',
	'twnmp-mainpage' => 'Glavna stran',
	'twnmp-s-translators' => '{{PLURAL:$1|Prevajalec|Prevajalca|Prevajalci}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projekt|Projekta|Projekti|Projektov}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Aktivni jezik|Aktivna jezika|Aktivni jeziki}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Sporočilo|Sporočili|Sporočila}} za prevod',
	'twnmp-bannerwho' => 'Slika $1',
	'twnmp-show-more-projects' => 'Prikaži vse projekte ...',
	'twnmp-brand-motto' => 'Odprtokodna prevajalska skupnost',
	'twnmp-login' => 'Prijava',
	'twnmp-logout' => 'Odjavite se',
	'twnmp-search-placeholder' => 'Poiščite in popravite prevode',
	'twnmp-search-button' => 'Poišči',
	'twnmp-search-choose-project' => 'Izberite projekt za prevajanje',
	'twnmp-translate-link' => 'Prevedi',
	'twnmp-proofread-link' => 'Preglej',
	'twnmp-translate-button' => 'Prevedi',
	'twnmp-proofread-button' => 'Preglej',
	'twnmp-your-translations-stats' => 'Vaša prevajalska statistika',
	'twnmp-your-translations-stats-all-languages' => 'Za vse jezike',
	'twnmp-your-view-language-stats' => 'Ogled statistike jezika',
	'twnmp-translations-per-month' => 'Prevodov/mesec',
	'twnmp-reviews-per-month' => 'Pregledov/mesec',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=V jeziku $4 ste edini<br />for $4|{{GENDER:$1|uvrščeni}} na $2 mesto<br />od $3}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Ste edini|{{GENDER:$1|uvrščeni}} na $2 mesto od $3}}',
	'twnmp-add-project' => 'Dodajte svoj odprtokodni projekt za prevajanje',
	'twnmp-bottom-help' => 'Pomoč',
	'twnmp-bottom-support' => 'Podpora',
	'twnmp-bottom-languages-supported' => 'Podprti jeziki',
	'twnmp-bottom-about' => 'O projektu',
	'twnmp-signup-username-placeholder' => 'Uporabniško ime',
	'twnmp-signup-password-placeholder' => 'Geslo',
	'twnmp-signup-email-placeholder' => 'E-pošta',
	'twnmp-create-account-button' => 'Registracija',
	'twnmp-become-translator' => 'Postanite prevajalec',
	'twnmp-choose-languages-you-know' => 'Izberite jezike, ki jih znate',
	'twnmp-choose-another-language' => 'Izberite drug jezik ...',
	'twnmp-choose-fill-account-details' => 'Izpolnite podrobnosti o svojem računu', # Fuzzy
	'twnmp-select-target-language' => 'Izberite jezik',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Eno sporočilo|Dve sporočili|$1 sporočila|$1 sporočil}}',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 */
$messages['sr-ec'] = array(
	'twnmp-mainpage' => 'Главна страна',
	'twnmp-s-translators' => '{{PLURAL:$1|Преводилаца}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Пројеката}}',
	'twnmp-s-languages' => 'Активна {{PLURAL:$1|језика}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Порука}} за превођење',
	'twnmp-bannerwho' => 'Слика $1',
	'twnmp-show-more-projects' => 'Прикажи више пројеката...', # Fuzzy
	'twnmp-login' => 'Пријавите се',
	'twnmp-logout' => 'Одјави ме',
	'twnmp-search-placeholder' => 'Пронађите и поправите преводе',
	'twnmp-search-button' => 'Пронађи',
	'twnmp-search-choose-project' => 'Изаберите пројекат који желите да преводите',
	'twnmp-translate-link' => 'Преведи',
	'twnmp-proofread-link' => 'Провера', # Fuzzy
	'twnmp-translate-button' => 'Преведи',
	'twnmp-view-button' => 'Погледај преводе',
	'twnmp-proofread-button' => 'Провера', # Fuzzy
	'twnmp-your-translations-stats' => 'Ваша статистика превођења',
	'twnmp-your-translations-stats-all-languages' => 'За све језике',
	'twnmp-your-view-language-stats' => 'Статистика језика',
	'twnmp-translations-per-month' => 'превода месечно',
	'twnmp-translations-in-sandbox' => 'Преводи',
	'twnmp-reviews-per-month' => 'провера месечно',
	'twnmp-bottom-help' => 'Помоћ',
	'twnmp-bottom-languages-supported' => 'Подржани језици',
	'twnmp-bottom-about' => 'О пројекту translatewiki.net',
	'twnmp-signup-username-placeholder' => 'Корисничко име',
	'twnmp-signup-password-placeholder' => 'Лозинка',
	'twnmp-signup-email-placeholder' => 'Е-пошта',
	'twnmp-create-account-button' => 'Отвори налог',
	'twnmp-become-translator' => 'Постани преводилац',
	'twnmp-join-community' => 'Придружите се заједници',
	'twnmp-create-account-cancel' => 'Откажи',
	'twnmp-select-target-language' => 'Изабери језик',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Milicevic01
 */
$messages['sr-el'] = array(
	'twnmp-translations-in-sandbox' => 'Prevodi',
	'twnmp-create-account-cancel' => 'Otkaži',
	'twnmp-select-target-language' => 'Izaberi jezik',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'twnmp-desc' => 'Tillhandahåller translatewiki.net:s huvudsida',
	'twnmp-mainpage' => 'Huvudsida',
	'twnmp-s-translators' => '{{PLURAL:$1|Översättare}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Projekt}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Aktivt|Aktiva}} språk',
	'twnmp-s-messages' => '{{PLURAL:$1|Meddelande|Meddelanden}} att översätta',
	'twnmp-bannerwho' => 'Bild $1',
	'twnmp-show-more-projects' => 'Visa alla projekt...',
	'twnmp-brand-motto' => 'Gemenskap för översättningar med öppen källkod',
	'twnmp-login' => 'Logga in',
	'twnmp-logout' => 'Logga ut',
	'twnmp-search-placeholder' => 'Hitta och korrigera översättningar',
	'twnmp-search-button' => 'Hitta',
	'twnmp-search-choose-project' => 'Välj ett projekt att översätta',
	'twnmp-translate-link' => 'Översätt',
	'twnmp-proofread-link' => 'Granska',
	'twnmp-translate-button' => 'Översätt',
	'twnmp-view-button' => 'Visa översättningar',
	'twnmp-proofread-button' => 'Granska',
	'twnmp-your-translations-stats' => 'Din översättningsstatistik',
	'twnmp-your-translations-stats-all-languages' => 'För alla språk',
	'twnmp-your-view-language-stats' => 'Visa språkstatistik',
	'twnmp-translations-per-month' => 'Översättningar/månad',
	'twnmp-translations-in-sandbox' => 'Översättningar',
	'twnmp-reviews-per-month' => 'Granskningar/månad',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Du är den enda på $4<br />|{{GENDER:$1|med rank}} $2 av $3<br />på $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Du är den enda|{{GENDER:$1|Rankad}} som nummer $2 av $3}}',
	'twnmp-add-project' => 'Lägg till ditt projekt med öppen källkod för översättning',
	'twnmp-sandboxed' => 'Du måste ange fler översättningar för att få fullständiga översättningsrättigheter.',
	'twnmp-sandboxed-limit' => 'Du nådde översättningsgränsen. Vårt team kommer snart kontrollera och uppgradera ditt konto.',
	'twnmp-bottom-help' => 'Hjälp',
	'twnmp-bottom-support' => 'Supportavdelning',
	'twnmp-bottom-languages-supported' => 'Språk som stöds',
	'twnmp-bottom-about' => 'Om',
	'twnmp-signup-username-placeholder' => 'Användarnamn',
	'twnmp-signup-password-placeholder' => 'Lösenord',
	'twnmp-signup-email-placeholder' => 'E-post',
	'twnmp-create-account-button' => 'Skapa konto',
	'twnmp-become-translator' => 'Bli en översättare',
	'twnmp-choose-languages-you-know' => 'Välj språken du kan',
	'twnmp-choose-another-language' => 'Välj ett annat språk...',
	'twnmp-choose-fill-account-details' => 'Ange dina kontouppgifter',
	'twnmp-join-community' => 'Gå med i gemenskapen',
	'twnmp-join-community-desc' => 'Om du är en utvecklare som är intresserade av att dokumentera översättningar eller bara utforska plattformen är du också välkommen.',
	'twnmp-join-community-reason' => 'Varför är du intresserad av att delta?',
	'twnmp-create-account-cancel' => 'Avbryt',
	'twnmp-join-community-info' => 'Inte en översättare? Du kan fortfarande gå med i gemenskapen.',
	'twnmp-select-target-language' => 'Välj språk',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Ett meddelande|$1 meddelanden}}',
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
	'twnmp-s-translators' => 'అనువాదకులు', # Fuzzy
	'twnmp-s-projects' => 'ప్రాజెక్టులు', # Fuzzy
	'twnmp-s-languages' => 'భాషలు', # Fuzzy
	'twnmp-s-messages' => 'అనువదించాల్సిన సందేశాలు', # Fuzzy
	'twnmp-bannerwho' => 'చిత్రం $1',
	'twnmp-show-more-projects' => 'మరిన్ని ప్రాజెక్టులను చూపించు...', # Fuzzy
	'twnmp-brand-motto' => 'బహిరంగాకర అనువాద సమాజం',
	'twnmp-login' => 'ప్రవేశించండి',
	'twnmp-search-placeholder' => 'అనువాదాలను కనుగొని సరిదిద్దండి',
	'twnmp-search-button' => 'వెతుకు',
	'twnmp-search-choose-project' => 'అనువదించడానికి ప్రాజెక్టును ఎంచుకోండి',
	'twnmp-translate-link' => 'అనువదించండి',
	'twnmp-proofread-link' => 'సమీక్షించండి', # Fuzzy
	'twnmp-translate-button' => 'అనువదించండి',
	'twnmp-proofread-button' => 'సమీక్షించండి', # Fuzzy
	'twnmp-your-translations-stats' => 'మీ అనువాద గణాంకాలు',
	'twnmp-your-view-language-stats' => 'భాషా గణాంకాలను చూడండి',
	'twnmp-translations-per-month' => 'నెలలో అనువాదాలు',
	'twnmp-reviews-per-month' => 'నెలలో సమీక్షలు',
	'twnmp-translations-translator-ranking' => '$2వ {{GENDER:$1|స్థానం}}
<br />$3గురు $4 అనువాదకులలో.', # Fuzzy
	'twnmp-bottom-help' => 'సహాయం',
	'twnmp-bottom-languages-supported' => 'తోడ్పాటు ఉన్న భాషలు',
	'twnmp-bottom-about' => 'గురించి',
	'twnmp-signup-username-placeholder' => 'వాడుకరి పేరు',
	'twnmp-signup-password-placeholder' => 'సంకేతపదం',
	'twnmp-signup-email-placeholder' => 'ఈమెయిలు',
	'twnmp-create-account-button' => 'ఖాతాని సృష్టించు',
	'twnmp-become-translator' => 'అనువాదకులవ్వండి',
	'twnmp-choose-languages-you-know' => 'మీకు తెలిసిన భాషలను ఎంచుకోండి',
	'twnmp-choose-another-language' => 'మరో భాషను ఎంచుకోండి...',
	'twnmp-choose-fill-account-details' => 'మీ ఖాతా వివరాలను పూరించండి', # Fuzzy
);

/** Turkish (Türkçe)
 * @author Meelo
 */
$messages['tr'] = array(
	'twnmp-desc' => 'translatewiki.net ana sayfasının çevirilerini sağlar',
	'twnmp-mainpage' => 'Ana sayfa',
	'twnmp-s-translators' => '{{PLURAL:$1|Çevirmen|Çevirmen}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Proje|Proje}}',
	'twnmp-s-languages' => 'Etkin {{PLURAL:$1|dil|dil}}',
	'twnmp-s-messages' => 'Çevrilecek {{PLURAL:$1|ileti|ileti}}',
	'twnmp-bannerwho' => 'Resim: $1',
	'twnmp-show-more-projects' => 'Bütün projeleri göster...',
	'twnmp-brand-motto' => 'Açık kaynak çeviri topluluğu',
	'twnmp-login' => 'Oturum aç',
	'twnmp-logout' => 'Oturumu kapat',
	'twnmp-search-placeholder' => 'Çevirileri bul ve düzelt',
	'twnmp-search-button' => 'Bul',
	'twnmp-search-choose-project' => 'Çevirmek için bir proje seçin',
	'twnmp-translate-link' => 'Çevir',
	'twnmp-proofread-link' => 'İncele',
	'twnmp-translate-button' => 'Çevir',
	'twnmp-proofread-button' => 'İncele',
	'twnmp-your-translations-stats' => 'Çeviri istatistikleriniz',
	'twnmp-your-translations-stats-all-languages' => 'Bütün diller için',
	'twnmp-your-view-language-stats' => 'Dil istatistiklerini görüntüle',
	'twnmp-translations-per-month' => 'Çeviri/ay',
	'twnmp-reviews-per-month' => 'İnceleme/ay',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=$4 dilinde sadece siz<br />çevirmensiniz|$4 dilinde $3 çevirmenden $2. {{GENDER:$1|sıradasınız}}<br />}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Sadece siz çevirmensiniz|$3 çevirmenden $2. {{GENDER:$1|sıradasınız}}}}',
	'twnmp-add-project' => 'Çevrilmesi için açık kaynak projenizi ekleyin',
	'twnmp-bottom-help' => 'Yardım',
	'twnmp-bottom-support' => 'Destek masası',
	'twnmp-bottom-languages-supported' => 'Desteklenen diller',
	'twnmp-bottom-about' => 'Hakkında',
	'twnmp-signup-username-placeholder' => 'Kullanıcı adı',
	'twnmp-signup-password-placeholder' => 'Parola',
	'twnmp-signup-email-placeholder' => 'E-posta',
	'twnmp-create-account-button' => 'Hesap aç',
	'twnmp-become-translator' => 'Çevirmen olmak',
	'twnmp-choose-languages-you-know' => 'Bildiğiniz dilleri seçin',
	'twnmp-choose-another-language' => 'Başka bir dil seçin...',
	'twnmp-choose-fill-account-details' => 'Hesap ayrıntılarını girin', # Fuzzy
	'twnmp-stats-number-k' => '$1 bin',
	'twnmp-select-target-language' => 'Dil seçin',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Bir ileti|$1 ileti}}',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Tel'et
 */
$messages['ug-arab'] = array(
	'twnmp-translations-per-month' => 'تەرجىمە \\ ئاي',
	'twnmp-reviews-per-month' => 'تەكشۈرۈش \\ ئاي',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ua2004
 * @author Ата
 */
$messages['uk'] = array(
	'twnmp-desc' => 'Забезпечує головну сторінку translatewiki.net',
	'twnmp-mainpage' => 'Головна сторінка',
	'twnmp-s-translators' => '{{PLURAL:$1|Перекладач|Перекладачі|Перекладачів}}',
	'twnmp-s-projects' => '{{PLURAL:$1|Проект|Проекти|Проектів}}',
	'twnmp-s-languages' => '{{PLURAL:$1|Активна мова|Активні мови|Активних мов}}',
	'twnmp-s-messages' => '{{PLURAL:$1|Повідомлення|Повідомлення|Повідомлень}} для перекладу',
	'twnmp-bannerwho' => 'Зображення $1',
	'twnmp-show-more-projects' => 'Показати усі проекти...',
	'twnmp-brand-motto' => 'Спільнота перекладачів відкритих вихідних кодів',
	'twnmp-login' => 'Увійти',
	'twnmp-logout' => 'Вихід',
	'twnmp-search-placeholder' => 'Знайти та виправити переклади',
	'twnmp-search-button' => 'Шукати',
	'twnmp-search-choose-project' => 'Виберіть проект для перекладу',
	'twnmp-translate-link' => 'Перекласти',
	'twnmp-proofread-link' => 'Перевірити',
	'twnmp-translate-button' => 'Переклад',
	'twnmp-view-button' => 'Переглядів перекладів',
	'twnmp-proofread-button' => 'Перевірка',
	'twnmp-your-translations-stats' => 'Статистика Ваших перекладів',
	'twnmp-your-translations-stats-all-languages' => 'Для всіх мов',
	'twnmp-your-view-language-stats' => 'Переглянути мовну статистику',
	'twnmp-translations-per-month' => 'перекладів/місяць',
	'twnmp-translations-in-sandbox' => 'Переклади',
	'twnmp-reviews-per-month' => 'перевірок/місяць',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Ви єдиний перекладач<br />для мови $4|{{GENDER:$1|За рейтингом ви}} $2 перекладач з $3<br />для мови $4}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Ви єдиний перекладач|{{GENDER:$1|За рейтингом ви}} $2 з $3}}',
	'twnmp-add-project' => 'Додати ваш проект з відкритим вихідним кодом для перекладу',
	'twnmp-sandboxed' => 'Вам необхідно надати більше перекладів, щоб отримати повні права перекладача.',
	'twnmp-sandboxed-limit' => 'Ви досягли обмежень перекладу. Наша команда перевірить та підвищить статус вашого облікового запису найближчим часом.',
	'twnmp-bottom-help' => 'Довідка',
	'twnmp-bottom-support' => 'Підтримка',
	'twnmp-bottom-languages-supported' => 'Підтримувані мови',
	'twnmp-bottom-about' => 'Опис',
	'twnmp-signup-username-placeholder' => "Ім'я користувача",
	'twnmp-signup-password-placeholder' => 'Пароль',
	'twnmp-signup-email-placeholder' => 'Ел. пошта',
	'twnmp-create-account-button' => 'Створити обліковий запис',
	'twnmp-become-translator' => 'Стати перекладачем',
	'twnmp-choose-languages-you-know' => 'Виберіть мови, які Ви знаєте',
	'twnmp-choose-another-language' => 'Виберіть іншу мову...',
	'twnmp-choose-fill-account-details' => 'Введіть дані свого облікового запису',
	'twnmp-join-community' => 'Приєднатися до спільноти',
	'twnmp-join-community-desc' => 'Якщо ви розробник зацікавлені у документуванні перекладу, або просто вивчаєте цю платформу, ви також можете приєднатися до нас.',
	'twnmp-join-community-reason' => 'Чому ви зацікавлені у приєднанні до нас?',
	'twnmp-create-account-cancel' => 'Скасувати',
	'twnmp-join-community-info' => 'Не перекладач? Ви ще можете приєднатися до спільноти.',
	'twnmp-stats-number-k' => '$1 тис.',
	'twnmp-select-target-language' => 'Оберіть мову',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Одне повідомлення|$1 повідомлення|$1 повідомлень}}',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'twnmp-desc' => 'Cung cấp trang đầu của translatewiki.net',
	'twnmp-mainpage' => 'Trang chính',
	'twnmp-s-translators' => '{{PLURAL:$1}}Biên dịch viên',
	'twnmp-s-projects' => '{{PLURAL:$1}}Dự án',
	'twnmp-s-languages' => '{{PLURAL:$1}}Ngôn ngữ tích cực',
	'twnmp-s-messages' => '{{PLURAL:$1}}Thông điệp để dịch',
	'twnmp-bannerwho' => 'Hình của $1',
	'twnmp-show-more-projects' => 'Xem mọi dự án…',
	'twnmp-brand-motto' => 'Cộng đồng biên dịch mã nguồn mở',
	'twnmp-login' => 'Đăng nhập',
	'twnmp-logout' => 'Đăng xuất',
	'twnmp-search-placeholder' => 'Tìm và sửa bản dịch',
	'twnmp-search-button' => 'Tìm kiếm',
	'twnmp-search-choose-project' => 'Chọn một dự án để dịch',
	'twnmp-translate-link' => 'Biên dịch',
	'twnmp-proofread-link' => 'Duyệt',
	'twnmp-translate-button' => 'Biên dịch',
	'twnmp-view-button' => 'Xem bản dịch',
	'twnmp-proofread-button' => 'Duyệt',
	'twnmp-your-translations-stats' => 'Thống kê biên dịch của bạn',
	'twnmp-your-translations-stats-all-languages' => 'Cho tất cả các ngôn ngữ',
	'twnmp-your-view-language-stats' => 'Xem thống kê ngôn ngữ',
	'twnmp-translations-per-month' => 'Bản dịch/tháng',
	'twnmp-translations-in-sandbox' => 'Bản dịch',
	'twnmp-reviews-per-month' => 'Đánh giá/tháng',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=Bạn là người duy nhất|{{GENDER:$1}}Đứng hạng $2 trên tổng $3}}<br />cho $4',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=Bạn là người duy nhất|{{GENDER:$1}}Đứng hạng $2 trên tổng $3}}',
	'twnmp-add-project' => 'Để cho chúng tôi biên dịch dự án mã nguồn mở của bạn',
	'twnmp-sandboxed' => 'Bạn cần phải đóng góp thêm bản dịch để giành được quyền biên dịch viên đầy đủ.',
	'twnmp-sandboxed-limit' => 'Bạn đã đạt đến giới hạn bản dịch. Chúng tôi sẽ kiểm tra và nâng cấp tài khoản của bạn không lâu.',
	'twnmp-bottom-help' => 'Trợ giúp',
	'twnmp-bottom-support' => 'Bàn giúp đỡ',
	'twnmp-bottom-languages-supported' => 'Ngôn ngữ có sẵn',
	'twnmp-bottom-about' => 'Giới thiệu',
	'twnmp-signup-username-placeholder' => 'Tên người dùng',
	'twnmp-signup-password-placeholder' => 'Mật khẩu',
	'twnmp-signup-email-placeholder' => 'Thư điện tử',
	'twnmp-create-account-button' => 'Mở tài khoản',
	'twnmp-become-translator' => 'Trở thành biên dịch viên',
	'twnmp-choose-languages-you-know' => 'Chọn các ngôn ngữ quen thuộc',
	'twnmp-choose-another-language' => 'Chọn một ngôn ngữ khác…',
	'twnmp-choose-fill-account-details' => 'Điền vào các chi tiết tài khoản của bạn', # Fuzzy
	'twnmp-join-community' => 'Tham gia cộng đồng',
	'twnmp-join-community-desc' => 'Những nhà phát triển quan tâm đến tài liệu bản dịch và những người chỉ muốn thăm dò nền tảng đều được hoan nghênh.',
	'twnmp-join-community-reason' => 'Tại sao bạn muốn tham gia?',
	'twnmp-create-account-cancel' => 'Hủy bỏ',
	'twnmp-join-community-info' => 'Không phải là biên dịch viên? Bạn vẫn có thể tham gia cộng đồng.',
	'twnmp-select-target-language' => 'Chọn ngôn ngữ',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|Một thông điệp|$1 thông điệp}}',
);

/** Volapük (Volapük)
 * @author Malafaya
 */
$messages['vo'] = array(
	'twnmp-create-account-cancel' => 'Stöpädön',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'twnmp-mainpage' => 'הויפט זייט',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Cwlin0416
 * @author Hzy980512
 * @author Liuxinyu970226
 * @author Qiyue2001
 * @author Shirayuki
 * @author Timothy Gu
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'twnmp-desc' => '提供translatewiki.net的首页',
	'twnmp-mainpage' => '首页',
	'twnmp-s-translators' => '{{PLURAL:$1|译者}}',
	'twnmp-s-projects' => '{{PLURAL:$1|项目}}',
	'twnmp-s-languages' => '支持的{{PLURAL:$1|语言}}',
	'twnmp-s-messages' => '可翻译{{PLURAL:$1|信息}}',
	'twnmp-bannerwho' => '图像来源 $1',
	'twnmp-show-more-projects' => '显示所有项目...',
	'twnmp-brand-motto' => '开源翻译社区',
	'twnmp-login' => '登录',
	'twnmp-logout' => '退出',
	'twnmp-search-placeholder' => '查找和修正译文',
	'twnmp-search-button' => '查找',
	'twnmp-search-choose-project' => '选择要翻译的项目',
	'twnmp-translate-link' => '翻译',
	'twnmp-proofread-link' => '复查',
	'twnmp-translate-button' => '翻译',
	'twnmp-view-button' => '查看翻译',
	'twnmp-proofread-button' => '复查',
	'twnmp-your-translations-stats' => '你的翻译统计',
	'twnmp-your-translations-stats-all-languages' => '所有语言',
	'twnmp-your-view-language-stats' => '查看语言统计',
	'twnmp-translations-per-month' => '译文/月',
	'twnmp-translations-in-sandbox' => '翻译',
	'twnmp-reviews-per-month' => '复查/月',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=$4只有你一人|$4{{GENDER:$1|排名}}第$2，共$3人}}',
	'twnmp-translations-translator-ranking-source' => '{{PLURAL:$3|1=只有你一人|{{GENDER:$1|排名}}第$2，共$3人}}',
	'twnmp-add-project' => '添加你需要翻译的开源项目',
	'twnmp-sandboxed' => '您需要提供更多的翻译，以获取完整的翻译权。',
	'twnmp-bottom-help' => '帮助',
	'twnmp-bottom-support' => '技术支持',
	'twnmp-bottom-languages-supported' => '语言支持',
	'twnmp-bottom-about' => '关于',
	'twnmp-signup-username-placeholder' => '用户名',
	'twnmp-signup-password-placeholder' => '密码',
	'twnmp-signup-email-placeholder' => '电子邮件',
	'twnmp-create-account-button' => '创建账户',
	'twnmp-become-translator' => '成为一名译者',
	'twnmp-choose-languages-you-know' => '选择你知晓的语言',
	'twnmp-choose-another-language' => '选择其他语言...',
	'twnmp-choose-fill-account-details' => '填写你的账户详细信息', # Fuzzy
	'twnmp-join-community' => '加入社区',
	'twnmp-join-community-reason' => '您为何对加入感兴趣？',
	'twnmp-create-account-cancel' => '取消',
	'twnmp-join-community-info' => '尚未成为一名翻译者？您可以加入社群，而且现在就可以。',
	'twnmp-select-target-language' => '选择语言',
	'twn-mainpage-total-messages-in-language' => '{{PLURAL:$1|$1个信息}}',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Ch.Andrew
 * @author Cwlin0416
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'twnmp-desc' => '提供 translatewiki.net 的主要頁面',
	'twnmp-mainpage' => '首頁',
	'twnmp-s-translators' => '{{PLURAL:$1|位翻譯者}}',
	'twnmp-s-projects' => '{{PLURAL:$1|個計劃}}',
	'twnmp-s-languages' => '種活躍的{{PLURAL:$1|語言}}',
	'twnmp-s-messages' => '{{PLURAL:$1|則訊息}}需要翻譯',
	'twnmp-bannerwho' => '$1的圖像',
	'twnmp-show-more-projects' => '顯示所有專案...',
	'twnmp-brand-motto' => '開源翻譯社群',
	'twnmp-login' => '登入',
	'twnmp-search-placeholder' => '搜尋並修正翻譯',
	'twnmp-search-button' => '搜尋',
	'twnmp-search-choose-project' => '請選擇一個專案翻譯',
	'twnmp-translate-link' => '翻譯',
	'twnmp-proofread-link' => '複查',
	'twnmp-translate-button' => '翻譯',
	'twnmp-proofread-button' => '複查',
	'twnmp-your-translations-stats' => '您的翻譯統計',
	'twnmp-your-view-language-stats' => '檢視語言統計',
	'twnmp-translations-per-month' => '筆翻譯/月',
	'twnmp-reviews-per-month' => '筆複查/月',
	'twnmp-translations-translator-ranking' => '{{PLURAL:$3|1=您是在 $4 翻譯者當中<br />唯一的 1 位|您在 $3 位 $4 翻譯者當中{{GENDER:$1|排名}}第 $2 位<br />}}',
	'twnmp-bottom-help' => '幫助',
	'twnmp-bottom-languages-supported' => '支援的語言',
	'twnmp-bottom-about' => '關於',
	'twnmp-signup-username-placeholder' => '用戶名',
	'twnmp-signup-password-placeholder' => '密碼',
	'twnmp-signup-email-placeholder' => '電郵',
	'twnmp-create-account-button' => '建立帳戶',
	'twnmp-become-translator' => '成為一位翻譯者',
	'twnmp-choose-languages-you-know' => '選擇你懂的語言',
	'twnmp-choose-another-language' => '選擇其他語言...',
	'twnmp-choose-fill-account-details' => '填寫您的帳戶詳細資訊', # Fuzzy
);
