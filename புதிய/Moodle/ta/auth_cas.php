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
 * Strings for component 'auth_cas', language 'ta', version '4.0'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_cas_baseuri'] = 'URI of the server (nothing if no baseUri)<br />For example, if the CAS server responds to host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = 'Turn this on if you want to insert CAS-authenticated users in Moodle database. If not then only users who already exist in the Moodle database can log in.';
$string['auth_cas_enabled'] = 'Turn this on if you want to use CAS authentication.';
$string['auth_cas_hostname'] = 'Hostname of the CAS server <br />eg: host.domain.fr';
$string['auth_cas_invalidcaslogin'] = 'வருந்துகிறோம்! உங்களது உள்நுழைவு மறுக்கப்பட்டது . நீங்கள் உள்நுழைவதற்கான அனுமதி பெறவில்லை';
$string['auth_cas_language'] = 'தேர்ந்தெடுக்கப்பட்ட மொழி';
$string['auth_cas_logincas'] = 'இணைப்பின் பாதுகாப்பை அணுகுதல்';
$string['auth_cas_port'] = 'சிஏஸ் வழங்கியின் படலை';
$string['auth_cas_server_settings'] = 'சிஏஎஸ் பணியகத்தைச் செம்மைப்படுத்து';
$string['auth_cas_text'] = 'பாதுகாப்பான இணைப்பு';
$string['auth_cas_version'] = 'சிஏஸ்-ன் பதிப்பு';
$string['auth_casdescription'] = 'This method uses a CAS server (Central Authentication Service) to authenticate users in a Single Sign On environment (SSO). You can also use a simple LDAP authentication. If the given username and password are valid according to CAS, Moodle creates a new user entry in its database, taking user attributes from LDAP if required. On following logins only the username and password are checked.';
$string['pluginname'] = 'சிஏஎஸ் பணிகத்தின் பயன்பாடு (எஸ்எஸ்ஒ)';
