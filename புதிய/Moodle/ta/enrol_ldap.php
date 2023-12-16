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
 * Strings for component 'enrol_ldap', language 'ta', version '4.0'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Courses can be created automatically if there are
                                    enrolments to a course  that doesn\'t yet exist
                                    in Moodle.';
$string['autocreation_settings'] = 'தன்னிச்சையாக பாடத்தை உருவாக்கும் அமைப்பு';
$string['bind_dn'] = 'If you want to use bind-user to search users,
                                 specify it here. Someting like
                                 \'cn=ldapuser,ou=public,o=org\'';
$string['bind_pw'] = 'Password for bind-user.';
$string['category'] = 'The category for auto-created courses.';
$string['course_fullname'] = 'Optional: LDAP field to get the full name from.';
$string['course_idnumber'] = 'Map to the unique identifier in LDAP, usually
                                         <em>cn</em> or <em>uid</em>. It is
                                         recommended to lock the value if you are using
                                         automatic course creation.';
$string['course_settings'] = 'பாடத்தில் பயனாளரை உட்செலுத்தும் அமைப்பு';
$string['course_shortname'] = 'Optional: LDAP field to get the shortname from.';
$string['course_summary'] = 'Optional: LDAP field to get the summary from.';
$string['editlock'] = 'Lock value';
$string['enrolname'] = 'எல்டாப்';
$string['general_options'] = 'பொதுவான விருப்பங்கள்';
$string['host_url'] = 'Specify LDAP host in URL-form like
                                  \'ldap://ldap.myorg.com/\'
                                  or \'ldaps://ldap.myorg.com/\'';
$string['objectclass'] = 'objectClass used to search courses. Usually
                                     \'posixGroup\'.';
$string['pluginname_desc'] = '<p>You can use an LDAP server to control your enrolments.
                          It is assumed your LDAP tree contains groups that map to
                          the courses, and that each of thouse groups/courses will
                          have membership entries to map to students.</p>
                          <p>It is assumed that courses are defined as groups in
                          LDAP, with each group having multiple membership fields
                          (<em>member</em> or <em>memberUid</em>) that contain a unique
                          identification of the user.</p>
                          <p>To use LDAP enrolment, your users <strong>must</strong>
                          to have a valid  idnumber field. The LDAP groups must have
                          that idnumber in the member fields for a user to be enrolled
                          in the course.
                          This will usually work well if you are already using LDAP
                          Authentication.</p>
                          <p>Enrolments will be updated when the user logs in. You
                           can also run a script to keep enrolments in synch. Look in
                          <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
                          <p>This plugin can also be set to automatically create new
                          courses when new groups appear in LDAP.</p>';
$string['server_settings'] = 'எல்டேப் பணியக அமைப்பாக்கம்';
$string['template'] = 'Optional: auto-created courses can copy
                                  their settings from a template course.';
$string['updatelocal'] = 'Update local data';
$string['version'] = 'The version of the LDAP protocol your server is using.';
