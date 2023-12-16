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
 * Strings for component 'auth_db', language 'ta', version '4.0'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_dbextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_dbfieldpass'] = 'கடவுச்சொல் அடங்கியுள்ள புலத்தின் பெயர்';
$string['auth_dbfielduser'] = 'பயனாளர் பெயர் அடங்கியுள்ள புலத்தின் பெயர்';
$string['auth_dbhost'] = 'The computer hosting the database server.';
$string['auth_dbname'] = 'தரவுத்தளத்தின் பெயர் அதனுடையதாகவே';
$string['auth_dbpass'] = 'மேலுள்ள பயனாளர் பெயருக்கு பொருத்தமான கடவுச்சொல்';
$string['auth_dbpasstype'] = '<p>Specify the format that the password field is using. MD5 encryption is useful for connecting to other common web applications like PostNuke.</p> <p>Use \'internal\' if you want to the external DB to manage usernames & email addresses, but Moodle to manage passwords. If you use \'internal\', you <i>must</i> provide a populated email address field in the external DB, and you must execute admin/cron.php regularly. Moodle will send an email to new users with a temporary password.</p>';
$string['auth_dbtable'] = 'தகவல்தளத்தின் அட்டவணைப்பெயர்';
$string['auth_dbtype'] = 'The database type (See the <a href="../lib/adodb/readme.htm#drivers">ADOdb documentation</a> for details)';
$string['auth_dbuser'] = 'Username with read access to the database';
$string['pluginname'] = 'வெளிப்புற தகவல்தளத்தைப் பயன்படுத்துக';
