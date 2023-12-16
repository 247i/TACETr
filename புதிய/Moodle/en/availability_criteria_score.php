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
 * Strings for component 'availability_criteria_score', language 'en', version '4.0'.
 *
 * @package     availability_criteria_score
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choosecriteria'] = 'Choose criteria';
$string['choosescore'] = 'Choose score';
$string['description'] = 'Require students to achieve a specified criteria score.';
$string['error_loading_requirements'] = 'Error with criteria score restriction';
$string['label_max'] = 'Maximum grade percentage (exclusive)';
$string['label_min'] = 'Minimum grade percentage (inclusive)';
$string['option_max'] = 'must be <';
$string['option_min'] = 'must be &#x2265;';
$string['pluginname'] = 'Restriction by criteria score';
$string['privacy:metadata'] = 'The Restriction by criteria score plugin does not store any personal data.';
$string['requires_criteria_both'] = 'Requires score greater than or equal to <b>{$a->min}</b> and less than <b>{$a->max}</b> in <b>{$a->criteria}</b> from <b>{$a->activity}</b>';
$string['requires_criteria_greater'] = 'Requires score greater than or equal to <b>{$a->min}</b> in <b>{$a->criteria}</b> from <b>{$a->activity}</b>';
$string['requires_criteria_less'] = 'Requires score less than <b>{$a->max}</b> in <b>{$a->criteria}</b> from <b>{$a->activity}</b>';
$string['title'] = 'Criteria Score';
