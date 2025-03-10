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
 * Strings for component 'consentform', language 'en', version '4.0'.
 *
 * @package     consentform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agree'] = 'I agree';
$string['agreed'] = 'agreed';
$string['agreementlogentry'] = 'You have agreed at {$a}.';
$string['backbuttonlist'] = 'Back to module list';
$string['choice'] = 'Make your choice:';
$string['configurations'] = 'Configuration of this consentform instance';
$string['confirmationtext'] = 'Consentform text to agree to';
$string['confirmincourseoverview'] = 'Agreement in course overview';
$string['confirmincourseoverview_help'] = 'Agreement/refusal is given in course overview page. This option can only be choosen when creating this module.';
$string['confirmincourseoverviewdesc'] = 'Agreement/Refusal is given in course overview page.';
$string['consentform'] = 'consentform';
$string['consentform:addinstance'] = 'Add a new consentform module';
$string['consentform:submit'] = 'Edit consentform';
$string['consentform:view'] = 'View consentform';
$string['consentformname'] = 'Name';
$string['consentformname_help'] = 'Give this instance a name.';
$string['deletetestaction'] = 'Delete your test action';
$string['deletetesterrormessage'] = 'Your test action could not be deleted due to technical problems.';
$string['deletetestmessage'] = 'Your test action has been deleted.';
$string['dependent'] = 'Course elements not accessible without agreement';
$string['description'] = 'Description';
$string['downloadbuttonlabel'] = 'Export';
$string['eventagreementagree'] = 'User AGREED';
$string['eventagreementagreedesc'] = 'The user with id {$a->userid} AGREED to the consentform statement of module {$a->contextinstanceid}.';
$string['eventagreementrefuse'] = 'User REFUSED';
$string['eventagreementrefusedesc'] = 'The user with id {$a->userid} REFUSED the consentform statement of module {$a->contextinstanceid}.';
$string['eventagreementrevoke'] = 'User REVOKED';
$string['eventagreementrevokedesc'] = 'The user with id {$a->userid} REVOKED THE AGREEMENT to the consentform statement of module {$a->contextinstanceid}.';
$string['listempty'] = 'No entries found.';
$string['listusers'] = 'Agreements overview';
$string['modulename'] = 'Consentform';
$string['modulename_help'] = 'Use the consentform module to uncover certain activities not before the participant has agreed.';
$string['modulenameplural'] = 'Consentforms';
$string['modules'] = 'Activities and Ressources';
$string['msgagreed'] = 'You have succesfully AGREED to this consentform statement.';
$string['msgagreedfailure'] = 'Your choice could not be saved. Please try it again.';
$string['msgrefused'] = 'You have refused this consentform statement.';
$string['msgrevoked'] = 'You have succesfully REVOKED this consentform statement.';
$string['noaction'] = 'No Action';
$string['nocompletion'] = 'Consentform needs the moodle feature "completion tracking" turned on, which is momentarily not the case. Please contact your Moodle administrator.';
$string['nocompletioncourse'] = 'This COURSE needs the moodle feature "completion tracking" turned on in the course settings, which is momentarily not the case.';
$string['nocompletionmodule'] = 'This MODULE needs the moodle feature "completion tracking" turned on in the module settings, which is momentarily not the case.';
$string['nocompletiontitle'] = 'Completion not active:';
$string['nocoursemoduleslist'] = 'No course module list';
$string['nocoursemoduleslist_help'] = 'This instance of consentform shows no course module list to configure dependencies of other course modules to this consentform. You have to configure these dependencies by yourself.';
$string['nocoursemoduleslistdesc'] = 'No course module list is used. If you want to configure the dependencies by yourself';
$string['optionrefuse'] = 'Refusal';
$string['optionrefuse_help'] = 'Enable participants to refuse this consentform statement.';
$string['optionrefusedesc'] = 'Default for option to refuse.';
$string['optionrevoke'] = 'Option to revoke';
$string['optionrevoke_help'] = 'Allow participants to revoke their agreement.';
$string['optionrevokedesc'] = 'Default for option to revoke';
$string['pluginadministration'] = 'Consentform administration';
$string['pluginname'] = 'Consentform';
$string['privacy:metadata:consentform_state'] = 'Information about the confirmation state of users who have participated in this consentform instance.';
$string['privacy:metadata:state'] = 'A value for the confirmation state of this user: 1 for agreed, 0 for revoked, -1 for refused.';
$string['privacy:metadata:userid'] = 'The ID of a user who has participated in this consentform instance.';
$string['refuse'] = 'I refuse';
$string['refused'] = 'refused';
$string['refuselogentry'] = 'You have refused agreement at {$a}.';
$string['resetconsentform'] = 'Clear all action data';
$string['resetok'] = 'All data removed';
$string['revocation'] = 'Revoke';
$string['revoke'] = 'I revoke';
$string['revoked'] = 'revoked';
$string['revokelogentry'] = 'You have revoked your agreement at {$a}.';
$string['state'] = 'State';
$string['textagreementbutton'] = 'Label Agreement Button';
$string['textagreementbuttondesc'] = 'Default value for the label of the agreement button.';
$string['textfields'] = 'Text fields';
$string['textrefusalbutton'] = 'Label Refusal Button';
$string['textrefusalbuttondesc'] = 'Default value for the label of the refuse button.';
$string['textrevocationbutton'] = 'Label Revocation Button';
$string['textrevocationbuttondesc'] = 'Default value for the label of the revoke button.';
$string['timestamp'] = 'Date';
$string['titleagreed'] = 'Agreements';
$string['titleall'] = 'All';
$string['titlenone'] = 'No action';
$string['titlerefused'] = 'Refusals';
$string['titlerevoked'] = 'Revocations';
$string['usegrade'] = 'Use grade';
$string['usegrade_help'] = 'When a user agrees a value of 1 is written for this user for this module in the gradebook.';
$string['usegradedesc'] = 'Use grade for export';
$string['warninguserentry'] = 'Alert: A consentform entry was found in the availability of this module which has not been made by this consentform or has been changed since then. Make sure it (still) works!';
$string['wrongoperator'] = 'This module has NOT an AND-conjunction in its restrictions. This {$a->consentform} is possibly without effect on this module!';
