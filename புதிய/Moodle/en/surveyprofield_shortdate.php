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
 * Strings for component 'surveyprofield_shortdate', language 'en', version '4.0'.
 *
 * @package     surveyprofield_shortdate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentshortdatedefault'] = 'Current short date';
$string['customdefault'] = 'Custom';
$string['defaultoption'] = 'Default';
$string['defaultoption_help'] = 'This is the short date the remote user will find answered by default. The default for this type of question is mandatory. If "Current short date" is choosed as default, boundaries are not supposed to apply.';
$string['downloadformat'] = 'Download format';
$string['downloadformat_help'] = 'Choose the format of the answer as it appear once user attempts are downloaded';
$string['ierr_lowerequaltoupper'] = 'Lower and upper bounds must be different';
$string['ierr_lowergreaterthanupper'] = 'Lower bound must be lower than upper bound';
$string['ierr_outofrangedefault'] = 'Default does not fall within the specified range';
$string['invitemonth'] = 'Choose a month';
$string['inviteyear'] = 'Choose a year';
$string['lowerbound'] = 'Lower bound';
$string['lowerbound_help'] = 'The lowest date the user is allowed to enter';
$string['pluginname'] = 'Short date';
$string['privacy:metadata'] = 'The "Short date" field plugin does not store any personal data.';
$string['restriction_lower'] = 'Answer is supposed to be greater than {$a}';
$string['restriction_lowerupper'] = 'Answer is supposed to fit between {$a->lowerbound} and {$a->upperbound}';
$string['restriction_upper'] = 'Answer is supposed to be lower-equal than {$a}';
$string['strftime01'] = '%B %Y';
$string['strftime02'] = '%B \'%y';
$string['strftime03'] = '%b %Y';
$string['strftime04'] = '%b \'%y';
$string['strftime05'] = '%m/%Y';
$string['strftime06'] = '%m/%y';
$string['uerr_greaterthanmaximum'] = 'Provided value is greater than maximum allowed';
$string['uerr_lowerthanminimum'] = 'Provided value is lower than minimum allowed';
$string['uerr_outofinternalrange'] = 'Provided value does not fall within the specified range';
$string['uerr_shortdatenotset'] = 'Please choose a short date or select "{$a}" checkbox';
$string['uerr_shortdatenotsetrequired'] = 'Short date is not correctly defined';
$string['upperbound'] = 'Upper bound';
$string['upperbound_help'] = 'The biggest date the user is allowed to enter';
$string['userfriendlypluginname'] = 'Date (short) [mm/yyyy]';
