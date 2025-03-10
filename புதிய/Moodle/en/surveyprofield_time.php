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
 * Strings for component 'surveyprofield_time', language 'en', version '4.0'.
 *
 * @package     surveyprofield_time
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currenttimedefault'] = 'Current time';
$string['customdefault'] = 'Custom';
$string['defaultoption'] = 'Default';
$string['defaultoption_help'] = 'This is the time the remote user will find answered by default. The default for this type of question is mandatory. If "Current time" is choosed as default, boundaries are not supposed to apply.';
$string['downloadformat'] = 'Download format';
$string['downloadformat_help'] = 'Choose the format of the answer as it appear once user attempts are downloaded';
$string['fifteenminutes'] = 'fifteen minutes';
$string['fiveminutes'] = 'five minutes';
$string['ierr_lowerequaltoupper'] = 'Lower and upper bounds must be different';
$string['ierr_outofexternalrangedefault'] = 'Default does not fall within the specified range (see "{$a}" help)';
$string['ierr_outofrangedefault'] = 'Default does not fall within the specified range';
$string['invitehour'] = 'Choose an hour';
$string['inviteminute'] = 'Choose a minute';
$string['lowerbound'] = 'Lower bound';
$string['lowerbound_help'] = 'The lowest time the user is allowed to enter';
$string['oneminute'] = 'One minute';
$string['pluginname'] = 'Time';
$string['privacy:metadata'] = 'The "Time" field plugin does not store any personal data.';
$string['restriction_lower'] = 'Answer is supposed to be greater-equal than {$a}';
$string['restriction_lowerupper'] = 'Answer is supposed to fit between {$a->lowerbound} and {$a->upperbound}';
$string['restriction_upper'] = 'Answer is supposed to be lower-equal than {$a}';
$string['restriction_upperlower'] = 'Answer is supposed to be greater-equal than {$a->lowerbound} or lower-equal than {$a->upperbound}';
$string['step'] = 'Step';
$string['step_help'] = 'Step of the minute drop down menu as it appear in the attemp form';
$string['strftime01'] = '%H:%M';
$string['strftime02'] = '%I:%M %p';
$string['tenminutes'] = 'ten minutes';
$string['thirtyminutes'] = 'thirty minutes';
$string['twentyminutes'] = 'twenty minutes';
$string['uerr_greaterthanmaximum'] = 'Provided value is greater than {$a}';
$string['uerr_lowerthanminimum'] = 'Provided value is lower than {$a}';
$string['uerr_outofexternalrange'] = 'Provided value is supposed to be lower-equal than {$a->lowerbound} or greater-equal than {$a->upperbound}';
$string['uerr_outofinternalrange'] = 'Provided value does not fall within the specified range';
$string['uerr_timenotset'] = 'Please choose a time or select the "{$a}" checkbox';
$string['uerr_timenotsetrequired'] = 'Time is not correctly defined';
$string['upperbound'] = 'Upper bound';
$string['upperbound_help'] = 'The biggest time the user is allowed to enter.<br><br>Upper and lower bound define a range.<br>If "lower bound" is lower than "upper bound" the user is forced to enter a value falling into the range.<br>If "lower bound" is greater than "upper bound" the user input is forced out from the range. i.e. the user input is supposed to be greater-equal than the lower bound OR lower-equal than the upper bound.<br><br>Example: By setting "lower bound" to 22 and "upper bound" to 1, the user input is supposed to fall in the three hours long range between 22 in the night and 1 in the morning.';
$string['userfriendlypluginname'] = 'Time';
