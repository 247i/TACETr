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
 * Strings for component 'tool_percipioexternalcontentsync', language 'en', version '4.0'.
 *
 * @package     tool_percipioexternalcontentsync
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['baseurl'] = 'Percipio Base URL';
$string['baseurldesc'] = 'The base url of the Percipio site we are connecting to for syncing.';
$string['bearer'] = 'Percipio Bearer';
$string['bearerdesc'] = 'The bearer token for teh service account of the Percipio site we are connecting to for syncing.';
$string['coursecategory'] = 'Parent Category';
$string['coursecategorydesc'] = 'This setting determines the parent category under which any new categories are created.';
$string['coursethumbnail'] = 'Course thumbnail';
$string['coursethumbnaildesc'] = 'Download the thumbnail image for the course?';
$string['endprocessing'] = 'End Processing Response';
$string['errorapicall'] = 'Catalog API Call failed:"{$a}"';
$string['errorjsonparse'] = 'Could not parse response: JSON parsing error: "{$a}"';
$string['errornobaseurl'] = 'No Base URL has been set, please configure plugin';
$string['errornobearer'] = 'No Bearer has been set, please configure plugin';
$string['errornocategory'] = 'No Category has been set, please configure plugin';
$string['errornoorgid'] = 'No OrgId has been set, please configure plugin';
$string['errorservererror'] = 'Catalog API Call failed.  Server sent : "{$a}"';
$string['errorwebservice'] = 'API Client Exception:"{$a}"';
$string['failprocessing'] = 'FAILED. Messages: {$a->message}';
$string['invalidimportrecord'] = 'Invalid Import Record.';
$string['max'] = 'Max assets per request';
$string['maxdesc'] = 'Maximum number of assets to retrieve per request.';
$string['memoryusage'] = 'Memory Usage: {$a}';
$string['orgid'] = 'Percipio OrgId';
$string['orgiddesc'] = 'The orgid of the Percipio site we are connecting to for syncing.';
$string['pluginname'] = 'Percipio External Content Sync';
$string['requestparams'] = 'Request parameters. pagingRequestId : {$a->pagingRequestId} updatedSince: {$a->updatedSince} offset: {$a->offset} max: {$a->max}';
$string['responsedata'] = 'Downloaded {$a->downloaded} of {$a->totalcount}';
$string['settingstitle'] = 'Percipio External Content Sync Settings';
$string['startingtask'] = 'Start retrieving Percipio Assets';
$string['startprocessing'] = 'Start Processing Response';
$string['successprocessing'] = 'SUCCESS. Course ID: {$a->courseid} Module ID: {$a->moduleid} Messages: {$a->message}';
$string['taskname'] = 'Percipio External Content Sync';
$string['taskresults'] = 'Finished retrieving Percipio Assets. Processed: {$a->downloaded} Success: {$a->success} Failed: {$a->failed}';
$string['template_by'] = 'Author';
$string['template_description'] = 'Description';
$string['template_duration'] = 'Duration (hh:mm:ss)';
$string['template_isbn'] = 'ISBN';
$string['template_launch'] = 'Launch';
$string['template_locale'] = 'Locale';
$string['template_objectives'] = 'Learning Objectives';
$string['template_publisher'] = 'Publisher';
$string['template_retireddate'] = 'Retired';
$string['template_retirementdate'] = 'Planned Retirement';
$string['template_type'] = 'Type';
$string['template_updateddate'] = 'Last Updated';
$string['templatefile'] = 'Mustache template';
$string['templatefileexplain'] = 'This setting is the uploaded mustache template to use to format the Percipio data, instead of the default template.';
$string['templatefileheader'] = 'Alternative template settings';
$string['updateconfigdate'] = 'Config tool_percipioexternalcontentsync\\updatedsince updated: {$a}';
$string['updatedsince'] = 'Return assets updated since';
$string['updatedsincedesc'] = 'The ISO8601 formatted date used to filter the assets returned. Leave empty to retrieve all assets. This will be automatically set by the task on last successful run. You can set this to any date manually.';
