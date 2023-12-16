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
 * Strings for component 'local_prometheus', language 'en', version '4.0'.
 *
 * @package     local_prometheus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitystatistics'] = 'Activity statistics';
$string['activitystatistics:description'] = 'Include the number of recent entries to the standard logstore';
$string['coursestatistics'] = 'Course statistics';
$string['coursestatistics:description'] = 'Include course numbers (hidden, visible) for each course format/theme';
$string['enrolstatistics'] = 'Enrolment statistics';
$string['enrolstatistics:description'] = 'Include enrolment numbers (active, suspended) for each enrolment method';
$string['extratags'] = 'Extra tags for each metric';
$string['extratags:description'] = 'Include extra tags to be included in each metric. Each key=value pair should be on a separate line. Keys and values should be separated by an \'=\' equals.';
$string['heading:auth'] = 'Authentication';
$string['heading:auth:information'] = '';
$string['heading:outputs'] = 'Endpoint outputs';
$string['heading:outputs:information'] = 'Choose which metrics get reported';
$string['metric:activeusers'] = 'Number of current active users (not deleted or suspended)';
$string['metric:courseshidden'] = 'Number of courses hidden from students';
$string['metric:coursesvisible'] = 'Number of courses visible to students';
$string['metric:deletedusers'] = 'Number of deleted users';
$string['metric:enrolsactive'] = 'Number of active user enrolments';
$string['metric:enrolsdisabled'] = 'Number of disabled enrolment instances';
$string['metric:enrolsenabled'] = 'Number of enabled enrolment instances';
$string['metric:enrolssuspended'] = 'Number of suspended user enrolments';
$string['metric:logitems'] = 'Number of log items';
$string['metric:moduleshidden'] = 'Number of activity modules hidden from students';
$string['metric:modulesvisible'] = 'Number of activity modules currently visible to students';
$string['metric:onlineusers'] = 'Number of currently online users';
$string['metric:suspendedusers'] = 'Number of suspended users';
$string['metric:taskfailures'] = 'Number of failed tasks';
$string['metric:taskruns'] = 'Number of tasks that completed successfully';
$string['modulestatistics'] = 'Course module statistics';
$string['modulestatistics:description'] = 'Include activity / course module statistics (visible, hidden) for each activity module type';
$string['pluginname'] = 'Prometheus reporting endpoint';
$string['sitetag'] = 'Site name tag';
$string['sitetag:description'] = 'Include the site\'s shortname as a label in all metrics';
$string['taskstatistics'] = 'Task statistics';
$string['taskstatistics:description'] = 'Include the number of failed or completed tasks';
$string['token'] = 'Authentication token';
$string['token:description'] = 'Provided as a URL parameter to prevent unauthorized access. Leave blank to disable authentication.<br />Replace with any base64-string, or use this: <code>{$a}</code>';
$string['usage'] = '<p>Point Prometheus or an InfluxDB v2 scraper to the following endpoint:<br />
<a href="{$a->tokenurl}" target="_blank">{$a->tokenurl}</a></p>
<p>You can optionally provide a <var>timeframe</var> (in seconds) in the URL to declare how far back the endpoint should look for online users, recent activity, etc. This is 5 minutes by default:<br />
<a href="{$a->timeframeurl" target="_blank">{$a->timeframeurl}</a></p>';
$string['userstatistics'] = 'User statistics';
$string['userstatistics:description'] = 'Include user numbers (active, deleted, suspended) for each authentication method';
$string['versiontag'] = 'Site version tag';
$string['versiontag:description'] = 'Include the site\'s version and release information as a label in all metrics';
