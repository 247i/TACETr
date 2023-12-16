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
 * Strings for component 'enrol_ldap', language 'ta_lk', version '4.3'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Moodle இல் இல்லாத பாடநெறிகளில் மாணவர்கள் சேர்ந்திருந்தால், அதற்கான பாடநெறியைத் தன்னிச்சையாகத் தொடங்க முடியும்.';
$string['autocreation_settings'] = 'பாடநெறித் தன்-உருவாக்கத்திற்கான அமைப்புகள்';
$string['bind_dn'] = 'நீங்கள் பயனாளர்களை தேடுவதற்கு bind-user பயன்படுத்த விரும்பினால் அதை இங்கே குறிப்பிடவும். இதைப் போல,
\'cn=ldapuser,ou=public,o=org\'';
$string['bind_pw'] = 'பிணைப்பு-பயனாளருக்கான கடவுச்சொல்';
$string['bind_pw_key'] = 'கடவுச்சொல்';
$string['category'] = 'தன்-உருவாக்கப்பட்ட பாடநெறிகளிற்கான வகை';
$string['category_key'] = 'வகை';
$string['contexts'] = 'LDAP contexts';
$string['course_fullname'] = 'விருப்பத்தெரிவு: முழுப்பெயர் பெறப்படும் LDAP புலம்.';
$string['course_fullname_key'] = 'முழுப் பெயர்';
$string['course_idnumber'] = 'LDAPஇல் தனித்துவ அடையாளத்தை தொடர்புபடுத்துவதற்கு,<em>cn</em> அல்லது <em>uid</em>. நீங்கள் தன்னியக்கக் கற்கைநெறி உருவாக்கத்தினைப் பயன்படுத்தினால் பெறுமானத்தினைப் பூட்டுதல் சிபாரிசு செய்யக்கூடியது.';
$string['course_idnumber_key'] = 'ID இலக்கம்';
$string['course_settings'] = 'பாடநெறியில் சேர்வதற்கான அமைப்புகள்';
$string['course_shortname'] = 'விருப்பத்தெரிவு: சுருக்கப்பெயர் பெறப்படும் LDAP புலம்.';
$string['course_shortname_key'] = 'குறும் பெயர்';
$string['course_summary'] = 'விருப்பத்தெரிவு: சுருக்கம் பெறப்படும் LDAP புலம்.';
$string['course_summary_key'] = 'சுருக்கம்';
$string['creatingcourse'] = 'பாடநெறி \'{$a}\' உருவாக்கம்...';
$string['editlock'] = 'பெறுமதியைப் பூட்டு';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = '\'{$a->user_username}\' பயனாளரை \'{$a->course_shortname}\' (id {$a->course_id}) பாடநெறியில் சேர்க்கவும்';
$string['enroluserenable'] = '\'{$a->course_shortname}\' (id {$a->course_id}) பாடநெறியில் \'{$a->user_username}\' பயனாளருக்கான இயலுமைப்படுத்தப்பட்ட சேரல்';
$string['explodegroupusertypenotsupported'] = 'தெரிவு செய்யப்பட்ட பயனாளர் வகையானது ldap_explode_group() க்கு ஆதரவளிக்கவில்லை: {$a} ';
$string['extcourseidinvalid'] = 'பாடநெறி வெளியக id தவறானது!';
$string['extremovedsuspend'] = '\'{$a->course_shortname}\' (id {$a->course_id}) பாடநெறியில் \'{$a->user_username}\' பயனாளருக்கான செயலற்றதாக்கப்பட்ட சேரல்';
$string['extremovedsuspendnoroles'] = '\'{$a->course_shortname}\' (id {$a->course_id}) பாடநெறியில் \'{$a->user_username}\' பயனாளருக்கான செயலற்றதாக்கப்பட்ட சேரல் மற்றும் அகற்றப்பட்ட வகிபாகங்கள்';
$string['extremovedunenrol'] = '\'{$a->course_shortname}\' (id {$a->course_id}) பாடநெறியிலிருந்து \'{$a->user_username}\' பயனாளரை நீக்கவும்';
$string['failed'] = 'வெற்றியளிக்கவில்லை!';
$string['general_options'] = 'பொதுத் தெரிவுகள்';
$string['host_url'] = 'LDAP Host URL-வடிவத்தில் குறிப்பிடுக. \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'ஓம்புனர் URL';
$string['idnumber_attribute_key'] = 'ID இலக்க இயல்பு';
$string['ldap_encoding_key'] = 'LDAP குறிமுறையாக்கம்';
$string['memberattribute'] = 'LDAP அங்கத்துவர் இயல்புகள்';
$string['memberattribute_isdn_key'] = 'dn ஐ அங்கத்துவர் இயல்பு பயன்படுத்துகிறது';
$string['objectclass'] = 'கற்கைநெறிகளை தேடுவதற்குobjectClass பயன்படுத்தப்படும். வழக்கமாக \'posixGroup\'.';
$string['objectclass_key'] = 'Object class';
$string['ok'] = 'சரி!';
$string['pluginname'] = 'LDAP சேரல்கள்';
$string['pluginname_desc'] = '<p>நீங்கள் உங்கள் சேரல்களை கட்டுப்படுப்படுத்துவதற்கு LDAP வழங்கியை பயன்படுத்த முடியும்.
உங்கள் LDAP tree கற்கைநெறிகளுடன் தொடர்புபட்ட குழுக்களை கொண்டுள்ளதோடு அந்த குழுக்கள்/ கற்கைநெறிகள் ஒவ்வொன்றும் மாணவர்களுடன் தொடர்புபடுவதற்கான அங்கத்துவ உள்நுழைவுகளை கொண்டிருக்கும் என கருதப்படுகிறது.
</p><p>கற்கைநெறிகள்LDAPஇல் குழுக்களாக வரையறுக்கப்பட்டதோடு ஒவ்வொரு குழுவும் பல அங்கத்துவ பிரிவுகளைக்கொண்டிருக்கின்றது என கருதப்படுகிறது.          (<em>member</em> or <em>memberUid</em>)அது கான ஒரு தனித்துவ அடையாளத்தை கொண்டிருக்கம்.</p><p>LDAPஉள்வாங்கலை பயன்படுத்துவதற்கு, உங்கள் பயனாளருக்கு<strong>must</strong>செல்லுபடியான ஒரு அடையாள இலக்கம் இருக்க வேண்டும். ஒரு பயனாளர் கற்கைநெறியில் உள்வாங்கப்படுவதற்காக, LDAP குழுக்கள் அந்த அடையாள இலக்கத்தை அங்கத்துவ பிரிவுகளில் கொண்டிருக்க வேண்டும்.
 நீங்கள் ஏற்கனவே LDAP அதிகார நிரூபணத்தை பயன்படுத்தியிருந்தால் மாத்திரமே  இது நன்றாக வேலை செய்யும்.</p><p>பயனாளர் உள்நுழையும்போது சேரல்கள் இற்றைப்படுத்தப்படும். சேரல்களை ஒழுங்கில் பார்வையிடக்கூடியவாறு பேணுவதற்கு நீங்கள் ஒரு எழுத்துருவை பயன்படுத்தலாம்.                  <em>enrol/ldap/enrol_ldap_sync.php</em>.</p><p>புதிய குழுக்கள்LDAP இல் தோன்றும்போது புதிய கற்கைநெறிகள் தானாகவே உருவாகுமாறு இந்த உட்செருகல்கள் அமைக்கப்பட முடியும்.<p>';
$string['pluginnotenabled'] = 'கூறு இயலுமைப்படுத்தப்பட்டிருக்கவில்லை!';
$string['role_mapping_key'] = 'LDAP இலிருந்து வகிபாகங்களை தொடர்புபடுத்துக';
$string['roles'] = 'வகிபாகங்களைத் தொடர்புபடுத்தல்';
$string['server_settings'] = 'LDAP சேவையக அமைப்புகள்';
$string['template'] = 'விருப்பத்தெரிவு: தன்-உருவாக்கப்படும் பாடநெறிகள் இன்னொரு பாடநெறிப் படிம அச்சிலிருந்து அமைப்புகளை நகலெடுக்கலாம்.';
$string['template_key'] = 'படிம அச்சு';
$string['updatelocal'] = 'Update local data';
$string['user_attribute_key'] = 'ID இலக்க இயல்பு';
$string['user_contexts_key'] = 'சூழல்கள்';
$string['user_search_sub_key'] = 'உப சூழல்களைத் தேடல்';
$string['user_type_key'] = 'பயனாளர் வகை';
$string['version'] = 'உங்களுடைய சேவை வழங்கி பயன்படுத்தும் LDAP இன் பதிப்பு';
$string['version_key'] = 'பதிப்பு';
