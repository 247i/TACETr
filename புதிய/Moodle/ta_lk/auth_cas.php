<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_cas', language 'ta_lk', version '4.3'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'அத்தாட்சிப்படுத்தற் தெரிவு';
$string['auth_cas_auth_user_create'] = 'பயனாளர்களை வெளியே உருவாக்கு';
$string['auth_cas_baseuri'] = 'சேவையகத்தின் URI (baseUri இல்லாவிட்டால், எதுவுமில்லை)<br /> உதாரணமாக,CAS சேவையகம் host.domaine.fr/CAS/ இற்குப் பதிலளித்தால் <br /> cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'ஆதார URI';
$string['auth_cas_broken_password'] = 'கடவுச்சொல்லை மாற்றாமல் தொடர முடியாவிட்டாலும், அதை மாற்றுவதற்குரிய பக்கம் காணப்டவில்லை. தயவு செய்து உங்கள் Moodle நிர்வாகியைத் தொடர்பு கொள்க.';
$string['auth_cas_cantconnect'] = 'CAS கூறினது LDAP பகுதியானது {$a} சோவையகத்துடன் தொடர்பு கொள்ள முடியவில்லை';
$string['auth_cas_casversion'] = 'பதிப்பு';
$string['auth_cas_changepasswordurl'] = 'கடவுச்சொல் மாற்றும் URL';
$string['auth_cas_create_user'] = 'Moodle தரவுத்தளத்திலே CAS-அத்தாட்சிப்படுத்தப்பட்ட பயனாளரைச் சேர்க்க வேண்டுமானால், இதைத் தொடங்கவும்.';
$string['auth_cas_create_user_key'] = 'பயனாளரை உருவாக்கு';
$string['auth_cas_enabled'] = 'CAS அத்தாட்சிப்படுத்தலைப் பயன்படுத்த வேண்டுமானால் இதைத் தொடங்கவும்';
$string['auth_cas_hostname'] = 'CAS சேவையகத்தின் Hostname <br />உ-ம்: host.domain.fr';
$string['auth_cas_hostname_key'] = 'ஓம்புநர் பெயர்';
$string['auth_cas_invalidcaslogin'] = 'மன்னிக்கவும், உங்கள் புகுபதிகை தோல்வியடைந்துள்ளது - உங்களை அத்தாட்சிப் படுத்த முடியவில்லை';
$string['auth_cas_language'] = 'தெரிவு செய்யப்பட்ட மொழி';
$string['auth_cas_language_key'] = 'மொழி';
$string['auth_cas_logincas'] = 'பாதுகாக்கப்பட்ட தொடர்பூடான அணுகல்';
$string['auth_cas_logoutcas'] = 'Moodle இலிருந்து தொடர்பைத் துண்டிக்கையில், CAS இலிருந்தும் விடுபதிகை செய்யப்பட வேண்டுமானால், இதை "ஆம்" ஆக விடவும்.';
$string['auth_cas_logoutcas_key'] = 'CAS இலிருந்து விடுபதிகை செய்';
$string['auth_cas_multiauth'] = 'பன்-அத்தாட்சிப்படுத்தல்(CAS + ஏனைய அத்தாட்சிப்படுத்தல்) வேண்டுமாயின் இதை \'ஆம்\' ஆக அமைக்க';
$string['auth_cas_multiauth_key'] = 'பன்-அத்தாட்சிப்படுத்தல்';
$string['auth_cas_port'] = 'CAS சேவையகத்தின் துறை';
$string['auth_cas_port_key'] = 'துறை';
$string['auth_cas_proxycas'] = 'CASin proxy-mode ஐப் பயன்படுத்தினால், இதை \'ஆம்\' என மாற்றவும்.';
$string['auth_cas_proxycas_key'] = 'Proxy நிலை';
$string['auth_cas_server_settings'] = 'CAS சேவையகத் தளவமைவு';
$string['auth_cas_text'] = 'பாதுகாப்பான தொடர்பு';
$string['auth_cas_use_cas'] = 'CAS ஐப் பயன்படுத்து';
$string['auth_cas_version'] = 'CAS இனது பதிப்பு';
$string['auth_casdescription'] = 'CAS இன்படி தரப்பட்ட பயனாளர் பெயர் மற்றும் கடவுச்சொல் ஆகியன செல்லுபடியானதாக இருந்தால், பயனாளர் பண்புகளை LDAP இலிருந்து எடுத்து (தேவைப்பட்டால்), தனது தரவுத்தளத்தில் புதிய பயனாளர் பதிவொன்றை Moodle உருவாக்கும். தொடரும் புகுபதிவுகளில் பயனாளர் பெயரும் கடவுச்சொல்லும் மட்டும் சோதிக்கப்படும்.';
$string['auth_casnotinstalled'] = 'CAS அத்தாட்சிப்படுத்தலைப் பயன்படுத்த முடியாது. PHP LDAP கூறு நிறுவப்படவில்லை';
$string['pluginname'] = 'CAS சேவையகம் (SSO)';
