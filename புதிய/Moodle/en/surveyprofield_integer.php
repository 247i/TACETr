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
 * Strings for component 'surveyprofield_integer', language 'en', version '4.0'.
 *
 * @package     surveyprofield_integer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customdefault'] = 'Custom';
$string['defaultoption'] = 'Default';
$string['defaultoption_help'] = 'This is the integer the remote user will find answered by default. The default for this type of question is mandatory.';
$string['ierr_lowerequaltoupper'] = 'Lower and upper bounds must be different';
$string['ierr_lowergreaterthanupper'] = 'Lower bound must be lower than upper bound';
$string['ierr_outofrangedefault'] = 'Default does not fall within the specified range';
$string['lowerbound'] = 'Lower bound';
$string['lowerbound_help'] = 'The lowest integer the user is allowed to enter';
$string['maximuminteger'] = 'Maximum integer';
$string['maximuminteger_desc'] = 'The maximun integer this software will allow to ever enter';
$string['parentformat'] = '[an integer]';
$string['pluginname'] = 'Integer';
$string['privacy:metadata'] = 'The "Integer" field plugin does not store any personal data.';
$string['restriction_lower'] = 'Answer is supposed to be greater than {$a}';
$string['restriction_lowerupper'] = 'Answer is supposed to fit between {$a->lowerbound} and {$a->upperbound}';
$string['restriction_upper'] = 'Answer is supposed to be lower-equal than {$a}';
$string['uerr_greaterthanmaximum'] = 'Provided value is greater than maximum allowed';
$string['uerr_integernotset'] = 'Please choose a value or the last item: "{$a}"';
$string['uerr_integernotsetrequired'] = 'Please choose a value';
$string['uerr_lowerthanminimum'] = 'Provided value is lower than minimum allowed';
$string['uerr_outofinternalrange'] = 'Provided value does not fall within the specified range';
$string['upperbound'] = 'Upper bound';
$string['upperbound_help'] = 'The biggest integer the user is allowed to enter';
$string['userfriendlypluginname'] = 'Integer (small)';
