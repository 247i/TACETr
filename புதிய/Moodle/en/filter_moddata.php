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
 * Strings for component 'filter_moddata', language 'en', version '4.0'.
 *
 * @package     filter_moddata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['databasenotfound'] = 'Could not find a database activity named `{$a}` in the current course.';
$string['datasetnotfound'] = 'Could not find a dataset for the current user.';
$string['datasetrecordsnotfound'] = 'Could not find datasets records for dataset `{$a}´ in the specified database activity.';
$string['filtername'] = 'Database Activity filter';
$string['recordnotfound'] = 'Could not find a field `{$a->fieldname}` for item `{$a->itemname}` in the dataset `{$a->datasetname}`.';
$string['requiredfieldsnotfound'] = 'Required fields not found. To display this item, the database activity should at least contain fields `{$a->field1}`, `{$a->field2}`, and `{$a->field3}`.';
$string['toomanyrecordsfound'] = 'Too many records found for item `{$a->itemname}` in the dataset `{$a->datasetname}';
