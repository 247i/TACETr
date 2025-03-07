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
 * Strings for component 'auth_relogin', language 'en', version '4.0'.
 *
 * @package     auth_relogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypage'] = 'Login the user from any page.';
$string['anypage_help'] = 'If not enabled, the user will be logged in automatically only from pages required login, else it will login the user from any page including the login page.';
$string['cookies'] = 'Permanent cookies?';
$string['cookies_help'] = 'If enabled? this plugin will save cookies in users device to help it to re-login again to the website if the user\'s session isn\'t timed out yet,
 else if not enabled the plugin will try to re-login the users by the ip address which is not grantee.<br>
Warning: Permanent cookies may be considered a privacy issue if used without consent.<br>
NOTE: if both this method (permanent cookies) and (use ip address) not checked, this plugin not functionally working.';
$string['loginpage'] = 'Apply for login page?';
$string['loginpage_help'] = 'If checked the plugin will try to login the user automatically if their session not expired yet, otherwise the plugin works for any other page that requires login.';
$string['pluginname'] = 'ReLogin';
