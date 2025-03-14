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
 * Strings for component 'tool_catalogue', language 'en', version '4.0'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'About this course';
$string['aboutthisprogram'] = 'About this program';
$string['all'] = 'All';
$string['aria:courseactions'] = 'Course actions';
$string['cataloguesettings'] = 'My programs and courses catalogue settings';
$string['certifications'] = 'Certifications';
$string['certificationstatuscertified'] = 'The certification \'<strong>{$a->name}</strong>\' is completed';
$string['certificationstatuscertifiedwithdate'] = 'The certification \'<strong>{$a->name}</strong>\' is completed. It will expire on \'<strong>{$a->date}</strong>\'';
$string['certificationstatusexpired'] = 'The certification \'<strong>{$a->name}</strong>\' expired on {$a->date}';
$string['certificationstatusopen'] = 'The certification \'<strong>{$a->name}</strong>\' has no due date';
$string['certificationstatusopenwithdate'] = 'Complete this program by \'<strong>{$a->date}</strong>\' to get the certification \'<strong>{$a->name}</strong>\'';
$string['certificationstatusoverdue'] = 'The certification \'<strong>{$a->name}</strong>\' was due on \'<strong>{$a->date}</strong>\'';
$string['complete'] = 'Completed';
$string['completeatleast'] = 'Complete at least {$a}';
$string['coursecoverhelp'] = 'This course is part of the \'{$a}\' program';
$string['coursecoverhelpmultiprogram'] = 'This course is part of some programs';
$string['coursecoverhelptext'] = '<ul><li>This is just one course inside larger programs</li><li>New courses could be available after completing this one</li></ul>';
$string['coursedisplayduelimit'] = 'Show days left for courses';
$string['coursedisplayduelimit_desc'] = 'Amount of days from which users will see a small reminder (X days left) next to the course name. For example, if set to 14, the reminder will be visible during the 14 days before the course reaches its conclusion date. In the case of many different conclusion dates, the system will evaluate which one is the next closest one. Set to 0 to disable this functionality.';
$string['coursefiles'] = 'Course files';
$string['courseimage_help'] = 'The course image.';
$string['coursenotavailable'] = 'Course not available';
$string['courses'] = 'Courses';
$string['dates'] = 'Dates';
$string['datesduedate'] = 'Due date';
$string['datesenddate'] = 'End date';
$string['datesstartdate'] = 'Start date';
$string['daysleft'] = '{$a} days left';
$string['defaultsortorder'] = 'Default sort order';
$string['displaycourseinfomodal'] = 'Display course info modal';
$string['displayforeverybody'] = 'Display for everybody';
$string['displayfornotadmin'] = 'Display only for non admin users';
$string['displayforstudentsandguests'] = 'Display only during guest access and for students';
$string['displaynever'] = 'Never display';
$string['displayprogramcoverpage'] = 'Display program cover page';
$string['dontshowagain'] = 'Don\'t show this message again';
$string['duedate'] = 'Sort by conclusion date';
$string['duedateinfo'] = 'Due in 1 day';
$string['duedateinfodays'] = 'Due in {$a} days';
$string['duedatex'] = '<strong>Due date:</strong> {$a}';
$string['enddatex'] = '<strong>End date:</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'No permission to view course cover page';
$string['errornopermissionviewprogram'] = 'No permission to view program';
$string['hiddenfromlearners'] = 'Hidden from learners';
$string['incomplete'] = 'Not completed';
$string['information'] = 'Information';
$string['iunderstand'] = 'I understand';
$string['lastaccess'] = 'Sort by last accessed';
$string['moreinfo'] = 'More information';
$string['mycourses'] = 'My courses';
$string['name'] = 'Sort by name';
$string['notavailableunless'] = 'Not available unless \'<strong>{$a}</strong>\' is available';
$string['notavailableuntil'] = 'Not available until \'{$a}\' is completed';
$string['notnow'] = 'Not now';
$string['notset'] = 'Not set';
$string['overdue'] = 'Overdue';
$string['pluginname'] = 'Learning catalogue';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = 'Whether to collapse the "Recently accessed courses" section';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'Whether to show the program cover help';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'Whether to filter the programs/courses by all/courses/programs/complete/incomplete';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'Whether to sort the programs/courses by name/due date/last access';
$string['privacy:metadata:showprogramcoverhelp'] = 'Whether to show the program cover help';
$string['privacy:programcoverhelphidden'] = 'The program cover help was hidden';
$string['privacy:request:preference:set'] = 'The value of the setting \'{$a->name}\' was \'{$a->value}\'';
$string['proceedtocourse'] = 'Proceed to course content';
$string['proceedtoprogram'] = 'Proceed to program content';
$string['program'] = 'Program';
$string['programdisplayduelimit'] = 'Show days left until the program is due';
$string['programdisplayduelimit_desc'] = 'Amount of days from which users will see a small reminder (Due in X days) next to the program name. For example, if set to 14, the reminder will be visible during the 14 days before the program reaches its due date. Set to 0 to disable this functionality.';
$string['programempty'] = 'There are no courses in this program';
$string['programhelpimage'] = 'The program help image';
$string['programhelptext'] = '<ul><li>Programs can contain different courses</li><li>Complete the courses to complete the program</li></ul>';
$string['programhelptitle'] = 'What is a program?';
$string['programimage_help'] = 'The program image.';
$string['programlink'] = 'See "{$a}" details';
$string['programlinksingle'] = 'See program details';
$string['programs'] = 'Programs';
$string['programstructure'] = 'Program structure';
$string['progress'] = '{$a}% completed';
$string['progresscompleted'] = '{$a->completed} of {$a->total} completed';
$string['recentlyaccessedcourses'] = 'Recently accessed courses';
$string['restricted'] = 'Not avaialable untill \'<strong>{$a}</strong>\' is completed';
$string['searchplaceholder'] = 'Search courses or programs';
$string['selectenrolmentmethod'] = 'Select an enrolment method';
$string['showcataloguecoursecategory'] = 'Show course category in course cards';
$string['showcataloguecoursecategory_desc'] = 'The course category will be visible in every course card found in the ‘Dashboard’, ´My courses’ and some blocks.';
$string['showcoursedates'] = 'Show course dates in course modal';
$string['showcoursedates_desc'] = 'The course dates will be visible in the course modal and in the course information tab.';
$string['showmore'] = 'Show {$a} more...';
$string['startcourse'] = 'Start course';
$string['startdatex'] = '<strong>Start date:</strong> {$a}';
$string['todo'] = 'To-do:';
$string['trainers'] = 'Trainers';
$string['xcourses'] = '{$a} courses';
