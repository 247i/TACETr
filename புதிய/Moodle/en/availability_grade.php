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
 * Strings for component 'availability_grade', language 'en', version '4.0'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Grade items cached for evaluating conditional availability';
$string['cachedef_scores'] = 'User grades cached for evaluating conditional availability';
$string['description'] = 'Require students to achieve a specified grade.';
$string['error_backwardrange'] = 'When specifying a grade range, the minimum must be lower than the maximum.';
$string['error_invalidnumber'] = 'Grade ranges must be specified with valid percentages.';
$string['error_selectgradeid'] = 'You must select a grade item for the grade condition.';
$string['label_max'] = 'Maximum grade percentage (exclusive)';
$string['label_min'] = 'Minimum grade percentage (inclusive)';
$string['missing'] = '(missing activity)';
$string['option_max'] = 'must be <';
$string['option_min'] = 'must be &#x2265;';
$string['pluginname'] = 'Restriction by grades';
$string['privacy:metadata'] = 'The Restriction by grades plugin does not store any personal data.';
$string['requires_any'] = 'You have a grade in <strong>{$a}</strong>';
$string['requires_max'] = 'You achieve lower than a certain score in <strong>{$a}</strong>';
$string['requires_min'] = 'You achieve higher than a certain score in <strong>{$a}</strong>';
$string['requires_notany'] = 'You do not have a grade in <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'You do not get certain scores in <strong>{$a}</strong>';
$string['requires_range'] = 'You achieve a score within a certain range in <strong>{$a}</strong>';
$string['title'] = 'Grade';
