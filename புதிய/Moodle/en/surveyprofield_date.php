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
 * Strings for component 'surveyprofield_date', language 'en', version '4.0'.
 *
 * @package     surveyprofield_date
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentdatedefault'] = 'Current date';
$string['customdefault'] = 'Custom';
$string['defaultoption'] = 'Default';
$string['defaultoption_help'] = 'This is the date the remote user will find answered by default. The default for this type of question is mandatory. If "Current date" is choosed as default, boundaries are not supposed to apply.';
$string['downloadformat'] = 'Download format';
$string['downloadformat_help'] = 'Choose the format of the answer as it appear once user attempts are downloaded';
$string['ierr_lowerequaltoupper'] = 'Lower and upper bounds must be different';
$string['ierr_lowergreaterthanupper'] = 'Lower bound must be lower than upper bound';
$string['ierr_outofrangedefault'] = 'Default does not fall within the specified range';
$string['inviteday'] = 'Choose a day';
$string['invitemonth'] = 'Choose a month';
$string['inviteyear'] = 'Choose a year';
$string['lowerbound'] = 'Lower bound';
$string['lowerbound_help'] = 'The lowest date the user is allowed to enter';
$string['pluginname'] = 'Date';
$string['privacy:metadata'] = 'The "Date" field plugin does not store any personal data.';
$string['restriction_lower'] = 'Answer is supposed to be greater-equal than {$a}';
$string['restriction_lowerupper'] = 'Answer is supposed to fit between {$a->lowerbound} and {$a->upperbound}';
$string['restriction_upper'] = 'Answer is supposed to be lower-equal than {$a}';
$string['strftime01'] = '%A, %d %B %Y';
$string['strftime02'] = '%A, %d %B \'%y';
$string['strftime03'] = '%a, %d %b %Y';
$string['strftime04'] = '%a, %d %b \'%y';
$string['strftime05'] = '%d %B %Y';
$string['strftime06'] = '%d %B \'%y';
$string['strftime07'] = '%d %b %Y';
$string['strftime08'] = '%d %b \'%y';
$string['strftime09'] = '%d/%m/%Y';
$string['strftime10'] = '%d/%m/%y';
$string['uerr_datenotset'] = 'Please choose a date or select the "{$a}" checkbox';
$string['uerr_datenotsetrequired'] = 'Date is not correctly defined';
$string['uerr_greaterthanmaximum'] = 'Provided value is greater than maximum allowed';
$string['uerr_lowerthanminimum'] = 'Provided value is lower than minimum allowed';
$string['uerr_outofinternalrange'] = 'Provided value does not fall within the specified range';
$string['upperbound'] = 'Upper bound';
$string['upperbound_help'] = 'The biggest date the user is allowed to enter';
$string['userfriendlypluginname'] = 'Date [dd/mm/yyyy]';
