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
 * Strings for component 'local_wikiexport', language 'en', version '4.0'.
 *
 * @package     local_wikiexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['created'] = 'Created on {$a}';
$string['exportepub'] = 'Export as epub';
$string['exportpdf'] = 'Export as PDF';
$string['failedinsertimage'] = 'Failed to insert image: {$a}';
$string['filename'] = 'Export {$a->wikiname} {$a->timestamp}';
$string['modified'] = 'Last modified by {$a->modifiedby} on {$a->timemodified}';
$string['pluginname'] = 'Wiki export';
$string['printed'] = 'This document was downloaded on {$a}';
$string['publishemail'] = 'Auto-publish email';
$string['publishemail_desc'] = 'The email address that PDFs will be sent to automatically whenever a wiki changes';
$string['publishername'] = 'Unknown';
$string['sortpages'] = 'Sort pages for export';
$string['sortpagesintro'] = 'This is the order in which pages will currently be exported - please move pages into the order you would like them to be exported';
$string['task:emailwikis'] = 'Send updated wikis by email';
$string['wikiexport:exportepub'] = 'Export wiki as epub';
$string['wikiexport:exportpdf'] = 'Export wiki as PDF';
$string['wikiexportfailed'] = 'Export of wiki \'{$a}\' failed';
$string['wikiexportfailed_body'] = 'The wiki \'{$a->name}\' has been updated, but the attempt to export and email it has failed, after {$a->exportattempts} attempts. If the wiki is updated again, then further attempts will be made to export it.

The wiki can be found at: {$a->url}.';
$string['wikiupdated'] = 'Wiki \'{$a}\' updated';
$string['wikiupdated_body'] = 'Updated export attached';
