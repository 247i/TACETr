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
 * Strings for component 'auth_pop3', language 'ta', version '4.0'.
 *
 * @package     auth_pop3
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_pop3description'] = 'This method uses a POP3 server to check whether a given username and password is valid.';
$string['auth_pop3host'] = 'The POP3 server address. Use the IP number, not DNS name.';
$string['auth_pop3mailbox'] = 'Name of the mailbox to attempt a connection with.  (usually INBOX)';
$string['auth_pop3port'] = 'Server port (110 is the most common, 995 is common for SSL)';
$string['auth_pop3type'] = 'Server type. If your server uses certificate security, choose pop3cert.';
