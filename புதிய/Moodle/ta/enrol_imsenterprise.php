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
 * Strings for component 'enrol_imsenterprise', language 'ta', version '4.0'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Once you have saved your settings, you may wish to';
$string['allowunenrol'] = 'Allow the IMS data to <strong>unenrol</strong> students/teachers';
$string['basicsettings'] = 'அடிப்படை அமைப்பாக்கம்';
$string['coursesettings'] = 'பாடத்தகவல் விருப்பங்கள்';
$string['createnewcategories'] = 'Create new (hidden) course categories if not found in Moodle';
$string['createnewcourses'] = 'Create new (hidden) courses if not found in Moodle';
$string['createnewusers'] = 'Create user accounts for users not yet registered in Moodle';
$string['cronfrequency'] = 'Frequency of processing';
$string['deleteusers'] = 'Delete user accounts when specified in IMS data';
$string['doitnow'] = 'perform an IMS Enterprise import right now';
$string['filelockedmail'] = 'The text file you are using for IMS-file-based enrolments ({$a}) can not be deleted by the cron process.  This usually means the permissions are wrong on it.  Please fix the permissions so that Moodle can delete the file, otherwise it might be processed repeatedly.';
$string['filelockedmailsubject'] = 'Important error: Enrolment file';
$string['fixcasepersonalnames'] = 'தனிப்பட்ட பெயரை மேல்மட்ட எழுத்துக்கு மாற்று';
$string['fixcaseusernames'] = 'பயனாளர் பெயரை கீழ்மட்ட எழுத்துக்கு மாற்று';
$string['imsrolesdescription'] = 'The IMS Enterprise specification includes 8 distinct role types. Please choose how you want them to be assigned in Moodle, including whether any of them should be ignored.';
$string['location'] = 'File location';
$string['logtolocation'] = 'Log file output location (blank for no logging)';
$string['mailadmins'] = 'மின்னஞ்சல் மூலமாக நிர்வாகியை  செயலாக்கு';
$string['mailusers'] = 'மின்னஞ்சல் மூலமாக பயனாளர்களைச்  செயலாக்கு';
$string['miscsettings'] = 'இதர';
$string['processphoto'] = 'பயனாளர் தோற்றப் படத்தை தகவலில் சேர்';
$string['processphotowarning'] = 'Warning: Image processing is likely to add a significant burden to the server. You are recommended not to activate this option if large numbers of students are expected to be processed.';
$string['restricttarget'] = 'Only process data if the following target is specified';
$string['sourcedidfallback'] = 'Use the "sourcedid" for a person\'s userid if the "userid" field is not found';
$string['truncatecoursecodes'] = 'Truncate course codes to this length';
$string['usecapitafix'] = 'Tick this box if using "Capita" (their XML format is slightly wrong)';
$string['usersettings'] = 'பயனாளர் தரவு அமைப்பு';
$string['zeroisnotruncation'] = '0 indicates no truncation';
