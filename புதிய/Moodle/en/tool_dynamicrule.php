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
 * Strings for component 'tool_dynamicrule', language 'en', version '4.0'.
 *
 * @package     tool_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Active';
$string['activerules'] = 'Active rules';
$string['addcondition'] = 'Add condition';
$string['addconditions'] = 'Add conditions to this rule';
$string['addoutcome'] = 'Add action';
$string['addoutcomes'] = 'Add actions to this rule';
$string['archive'] = 'Archive';
$string['archived'] = 'Archived';
$string['archivedrules'] = 'Archived rules';
$string['availableplaceholders'] = 'Available placeholders';
$string['body'] = 'Body';
$string['cachedef_conditions'] = 'Stores the list of dynamic rules conditions and events they need to listen to.';
$string['cannotdisablerule'] = 'You don\'t have sufficient rights to disable this rule \'{$a}\'';
$string['cannotdisablesharedrule'] = 'Shared rule \'{$a}\' can only be disabled from the shared space.';
$string['cannotenablecomponentrule'] = 'Cannot enable rule \'{$a}\' unless it has actions and doesn\'t contain any errors.';
$string['cannotenablerule'] = 'Cannot enable rule \'{$a}\' unless it has conditions, actions and doesn\'t contain any errors.';
$string['cannotenablesharedrule'] = 'Shared rule \'{$a}\' can only be enabled from the shared space.';
$string['cohort'] = 'Cohort';
$string['conditioncohortmember'] = 'User is member of cohort';
$string['conditioncohortmemberdescription'] = 'Users who are members of cohort \'{$a}\'';
$string['conditioncohortmemberdescriptionwithdate'] = 'Users who are members of cohort \'{$a->name}\'<br />
Added to cohort on or after: \'{$a->conditiondate}\'';
$string['conditioncohortnotmember'] = 'User is not member of cohort';
$string['conditioncohortnotmemberdescription'] = 'Users who are not members of cohort \'{$a}\'';
$string['conditioncompetencydescription'] = 'Users who have achieved competency \'{$a}\'';
$string['conditioncompetencyselector'] = 'Select competency';
$string['conditioncompetencyselector_help'] = 'Select the competency to find those users who achieved it';
$string['conditioncompetencytitle'] = 'User has achieved competency';
$string['conditioncoursecompleted'] = 'Course completed';
$string['conditioncoursecompletedafter'] = 'Completion date after {$a}';
$string['conditioncoursecompletedbefore'] = 'Completion date before {$a}';
$string['conditioncoursecompleteddescription'] = 'Users who have completed course \'{$a}\'';
$string['conditioncourselastaccess'] = 'Course last access';
$string['conditioncourselastaccessdescriptionafter'] = 'Users who last accessed the course \'{$a->coursename}\' since {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionbefore'] = 'Users who last accessed the course \'{$a->coursename}\' before {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionbeforelast'] = 'Users who have not accessed the course \'{$a->coursename}\' for {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionever'] = 'Users who have accessed the course \'{$a->coursename}\' at least once';
$string['conditioncourselastaccessdescriptioninlast'] = 'Users who have accessed the course \'{$a->coursename}\' in last {$a->conditiondate}';
$string['conditioncourselastaccessdescriptionnever'] = 'Users who have never accessed the course \'{$a->coursename}\'';
$string['conditioncourselastaccessnotice'] = 'This condition is applied to users who are enrolled to the course.';
$string['conditioncoursenotcompleted'] = 'Course not completed';
$string['conditioncoursenotcompleteddescription'] = 'Users who have not completed course \'{$a}\'';
$string['conditioncoursenotcompletedformnotice'] = 'This condition is applied to users regardless of their enrolment on the course.';
$string['conditioncriteria'] = 'Criteria';
$string['conditioncriterianotavailableyet'] = 'Not available yet';
$string['conditionisbroken'] = 'This condition contains an error.';
$string['conditionisnotavailable'] = 'This condition is not available.';
$string['conditionnotsaved'] = 'Condition is not saved.';
$string['conditions'] = 'Conditions';
$string['conditionusercreated'] = 'Time since user was created';
$string['conditionusercreateddescriptionbefore'] = 'Users who were created during the last {$a}';
$string['conditionusercreateddescriptionover'] = 'Users who were created prior to the last {$a}';
$string['conditionuserenrolled'] = 'User enrolled';
$string['conditionuserenrolleddescription'] = 'Users who are enrolled in course \'{$a->course}\'<br />
Enrolment method: \'{$a->enrol}\'';
$string['conditionuserenrolleddescriptionwithdate'] = 'Users who are enrolled in course \'{$a->course}\'<br />
Enrolment method: \'{$a->enrol}\'<br />
Enrolment start date on or after: \'{$a->conditiondate}\'';
$string['conditionuserlastlogin'] = 'User last login';
$string['conditionuserlastlogindescriptionbefore'] = 'Users who last logged in prior to the last {$a}';
$string['conditionuserlastlogindescriptionever'] = 'Users who have logged in at least once';
$string['conditionuserlastlogindescriptioninlast'] = 'Users who logged in during the last {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Users who have never logged in';
$string['conditionusernotenrolled'] = 'User not enrolled';
$string['conditionusernotenrolleddescription'] = 'Users who are not enrolled in course \'{$a->course}\'<br />
Enrolment method: \'{$a->enrol}\'';
$string['conditionuserprofilefield'] = 'User profile field';
$string['conditionuserprofilefielddescription'] = 'Users whose value for profile field \'{$a->fieldname}\' is \'{$a->fieldvalue}\'';
$string['conditionuserprofilefielddescriptiontext'] = 'Users whose value for profile field \'{$a->fieldname}\' {$a->fieldvalue}';
$string['confirmarchiverule'] = 'Are you sure you want to archive the rule \'{$a}\'? Archived dynamic rules will still be available for current and future reports.';
$string['confirmdeletecondition'] = 'Are you sure you want to delete the condition \'{$a}\' and all associated data? This action cannot be undone.';
$string['confirmdeleteoutcome'] = 'Are you sure you want to delete the action \'{$a}\' and all associated data? This action cannot be undone.';
$string['confirmdeleterule'] = 'Are you sure you want to delete the rule \'{$a}\' and all associated data? This action cannot be undone.';
$string['confirmduplicaterule'] = 'Are you sure you want to duplicate the rule \'{$a}\'?';
$string['confirmeditrule'] = 'Since some users matched this rule in the past, you will be only able to edit rule actions. You might consider duplicating it to modify its conditions';
$string['confirmenablecomponentrule'] = 'Are you sure you want to enable this rule? Enabling it will affect {$a} users.';
$string['confirmenablerule'] = 'Conditions will be locked when at least one user is affected by this rule. Are you sure you want to enable this rule?';
$string['countmatchingusers'] = '{$a} total matches';
$string['coursecompletiondate'] = 'Completion date';
$string['courseinternalid'] = 'Internal course ID used in URLs';
$string['courselastaccesstime'] = 'The user\'s last course access';
$string['courselastaccesstime_help'] = 'Be aware that the rule will only be applied once to users who matched, thus it can\'t be used for recurring reminders to those users who haven\'t accessed courses for some time.<br />Also note that once a user is enrolled on a course, they may match the condition "Never accessed" immediately.';
$string['courseurl'] = 'Course URL';
$string['creationdate'] = 'Creation date';
$string['creationdate_help'] = 'You can select a date relative to the current date to match users created within the specified period of time.';
$string['dateinthefuture'] = 'Is in the future';
$string['dateinthepast'] = 'Is in the past';
$string['datelast'] = 'Last {$a} day';
$string['datelastdays'] = 'Last ... days';
$string['datelastplural'] = 'Last {$a} days';
$string['datenext'] = 'Next {$a} day';
$string['datenextdays'] = 'Next ... days';
$string['datenextplural'] = 'Next {$a} days';
$string['datetypeever'] = 'Ever';
$string['datetypeinlast'] = 'During the last...';
$string['datetypenever'] = 'Never';
$string['datetypenone'] = 'Not set';
$string['datetypepast'] = 'Prior to the last...';
$string['deletecondition'] = 'Delete condition';
$string['deleteoutcome'] = 'Delete action';
$string['disablerulemsg'] = 'Disable rule';
$string['duplicate'] = 'Duplicate';
$string['dynamicrule:manage'] = 'Manage dynamic rules';
$string['editanyway'] = 'Edit anyway';
$string['editcondition'] = 'Edit condition';
$string['editdetails'] = 'Edit details of rule \'{$a}\'';
$string['editdetailsbutton'] = 'Edit details';
$string['editoutcome'] = 'Edit action';
$string['editrulename'] = 'Edit name of rule \'{$a}\'';
$string['enable'] = 'Enable';
$string['enabled'] = 'Enabled';
$string['enablehelp'] = 'enabling rule';
$string['enablehelp_help'] = 'A rule requires at least one condition and one action to be enabled. Also conditions or actions should not contain errors.';
$string['enablehelpmodal'] = 'enabling rule';
$string['enablehelpmodal_help'] = 'A rule requires at least one action to be enabled.';
$string['enablerulemsg'] = 'Enable rule';
$string['errorbadgehasextracriteria'] = 'This badge has another required criteria in addition to manual issue, thus can\'t be issues by dynamic rule';
$string['errorbadgenopermission'] = 'You don\'t have role required to issue this badge';
$string['errorcannotcreate'] = 'You don\'t have permission to create rules';
$string['errorcannotmanage'] = 'You don\'t have permission to manage this rule';
$string['errorcannotmanagecondition'] = 'You don\'t have permission to manage this condition';
$string['errorcannotmanageoutcome'] = 'You don\'t have permission to manage this action';
$string['errorcohortnotamember'] = 'Can not remove user from cohort because user is not a member of this cohort';
$string['errorcompletionnotenabled'] = 'Completion is not enabled for this course';
$string['errorinvalidbadge'] = 'Invalid badge';
$string['errorinvalidbody'] = 'Invalid notification body';
$string['errorinvalidcertificatetenant'] = 'Certificate can\'t be used in this tenant';
$string['errorinvalidcohort'] = 'Invalid cohort';
$string['errorinvalidcohorttenant'] = 'Cohort can\'t be used in this tenant';
$string['errorinvalidcompetency'] = 'Invalid competency';
$string['errorinvalidcourse'] = 'Invalid course';
$string['errorinvalidcoursetenant'] = 'Course can\'t be used in this tenant';
$string['errorinvalidenrolmentmethod'] = 'This course does not have selected enrolment method or it is not enabled';
$string['errorinvalidoperator'] = 'Invalid operator.';
$string['errorinvalidsubject'] = 'Invalid notification subject';
$string['errorinvaliduserlastcourseaccess'] = 'Invalid last course access date';
$string['errorinvaliduserlastlogin'] = 'Invalid last login date';
$string['errorinvaliduserlastlogintype'] = 'Invalid last login type';
$string['errorinvaliduserprofilefield'] = 'Invalid profile field';
$string['errorinvaliduserprofilefieldvalue'] = 'Invalid profile field value';
$string['errornopermissionissuecertificate'] = 'You don\'t have permission to issue this certificate';
$string['ever'] = 'ever';
$string['exporterdescription'] = 'Dynamic rules definition, conditions and actions';
$string['exportselectactive'] = 'Select all Dynamic rules (excluding archived)';
$string['exportselectall'] = 'Select all Dynamic rules (including archived)';
$string['exportselectenabled'] = 'Select all enabled Dynamic rules';
$string['exportsettings'] = 'Rule definitions, conditions and actions';
$string['exportsettings_help'] = 'All rules will be disabled when imported, regardless of their original state.';
$string['field'] = 'Field';
$string['filterrulename'] = 'Rule name';
$string['general'] = 'General';
$string['importlogerror'] = 'Couldn\'t import rule \'{$a}\'';
$string['importlogerrorinvalidcondition'] = 'Missing or invalid rule condition';
$string['importlogerrorinvalidoutcome'] = 'Missing or invalid rule outcome';
$string['importlogsuccess'] = 'Created new rule \'{$a->name}\' with {$a->conditionscount} conditions and {$a->outcomescount} actions';
$string['importlogsuccesslink'] = 'Created new rule \'<a href="{$a->url}">{$a->name}</a>\' with {$a->conditionscount} conditions and {$a->outcomescount} actions';
$string['importselectall'] = 'Select all Dynamic rules in this file';
$string['importselectspecified'] = 'Select manually...';
$string['includesuspendedusers'] = 'Include suspended users';
$string['includesuspendedusers_help'] = 'If checked, the rule will evaluate the conditions also against the users whose accounts were suspended on this site. It will then try to apply the actions to all the matched users. Keep in mind that some actions may not apply fully for suspended users, for example, they never receive notifications.';
$string['lastlogin'] = 'The user\'s last login was';
$string['lastlogin_help'] = 'You can select a date relative to the current date or users who have never logged in.';
$string['limitreached'] = 'Dynamic rules limit reached';
$string['limitreacheddescr'] = 'You have reached the limit for the number of dynamic rules on this site. Please note that archived rules are also counted towards this limit.';
$string['limitreachednumdescr'] = 'You can only create {$a} dynamic rule(s) on this site. Please note that archived rules are also counted towards this limit.';
$string['managebadges'] = 'Manage badges';
$string['managecohorts'] = 'Manage cohorts';
$string['managecompetencies'] = 'Manage competencies';
$string['managerules'] = 'Manage rules';
$string['match'] = 'Match';
$string['matchedtime'] = 'Matched at';
$string['matchlimitinvalid'] = 'Rule needs to be triggered at least once.';
$string['matchstatus'] = 'Status';
$string['matchstatusdone'] = 'Completed';
$string['matchstatuserror'] = 'Failed';
$string['matchstatusprogress'] = 'In progress';
$string['messageprovider:notificationoutcome'] = 'Notification action for dynamic rule tool';
$string['missingcondition'] = 'Missing condition';
$string['missingconditiondescr'] = 'Condition \'{$a->condition}\' does not exist in plugin \'{$a->plugin}\'.';
$string['missingoutcome'] = 'Missing action';
$string['missingoutcomedescr'] = 'Action \'{$a->outcome}\' does not exist in plugin \'{$a->plugin}\'.';
$string['newnameforrule'] = 'New name for rule \'{$a}\'';
$string['newrule'] = 'New rule';
$string['noavailablebadges'] = 'No available badges';
$string['noavailablecohorts'] = 'No available cohorts';
$string['noavailablecompetencies'] = 'No available competencies';
$string['noavailablecompletioncourses'] = 'No courses with completion enabled';
$string['noavailableenrolledcourses'] = 'No courses where you can access participants list';
$string['noruleconditions'] = 'No conditions on this rule';
$string['noruleoutcomes'] = 'No actions on this rule';
$string['operatorafter'] = 'After';
$string['operatoranytime'] = 'Any time';
$string['operatorbefore'] = 'Before';
$string['outcomebadge'] = 'Award badge';
$string['outcomebadgedescription'] = 'Award badge \'{$a}\' to users';
$string['outcomecertificate'] = 'Issue certificate';
$string['outcomecertificatedescription'] = 'Issue certificate \'{$a}\' to users';
$string['outcomecohort'] = 'Add to cohort';
$string['outcomecohortbroken'] = 'Cohort with ID \'{$a}\' does not exist.';
$string['outcomecohortdescription'] = 'Add users to cohort \'{$a}\'';
$string['outcomecohortremove'] = 'Remove from cohort';
$string['outcomecohortremovedescription'] = 'Remove users from cohort \'{$a}\'';
$string['outcomecompetency'] = 'Award competency';
$string['outcomecompetencybroken'] = 'Competency with ID \'{$a}\' does not exist.';
$string['outcomecompetencydescription'] = 'Award competency \'{$a}\' to users';
$string['outcomeisbroken'] = 'This action contains an error.';
$string['outcomeisnotavailable'] = 'This action is not available.';
$string['outcomenotification'] = 'Notification';
$string['outcomenotificationdescription'] = 'Send notification \'{$a}\' to users';
$string['outcomenotsaved'] = 'Action is not saved.';
$string['outcomes'] = 'Actions';
$string['per'] = 'per';
$string['placeholdersdesc'] = 'Placeholders';
$string['placeholdersdesc_help'] = 'Placeholders allow you to add a dynamic content, e.g. {{userfullname}} placeholder will be replaced with a user full name in the notification delivered to user.';
$string['pluginname'] = 'Dynamic rules';
$string['previewcoursefullname'] = 'Course full name';
$string['previewcourseshortname'] = 'Course short name';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Information about user matches to particular rule conditions. As a result of matching user is affected by actions defined in the rule.';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = 'Timestamp indicating when user has been matched to rule conditions.';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'The ID of the rule.';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = 'Timestamp indicating when user is no longer matching rule condition after action has been applied.';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = 'The ID of the user that has been matched to rule conditions.';
$string['quarter'] = 'Quarter';
$string['reg_wpdynamicrules'] = 'Number of dynamic rules ({$a})';
$string['reportmatchingusers'] = 'Report with users matching a dynamic rule';
$string['reportrulematches'] = 'Report with users that matched and didn\'t match a dynamic rule';
$string['rolemanager'] = 'Dynamic rules manager';
$string['rolemanagerdescription'] = 'Allows to create and manage dynamic rules within the current tenant';
$string['rulearchive'] = 'Archive';
$string['ruleeditactions'] = 'Edit actions';
$string['ruleeditdetails'] = 'Edit details';
$string['rulematchfreq'] = 'Rule action limits';
$string['rulematchfreq_help'] = 'As soon as users match the rule conditions, the actions will be applied to them. These actions will not apply again if users continue to match the conditions. However, if a user stops matching and then matches again, the actions may be applied again. This setting defines the maximum number of times actions should apply.';
$string['rulematchfreqdesc0'] = 'Can\'t be applied more than';
$string['rulematchfreqdesc1'] = 'times';
$string['rulematchfreqenable'] = 'Limit the number of times actions are applied to each user';
$string['rulename'] = 'Name';
$string['rulenamecopy'] = '{$a->name} Copy {$a->number}';
$string['rulenotfound'] = 'Rule was not found.';
$string['ruleselectitemarchived'] = '{$a} (archived)';
$string['ruleunarchive'] = 'Unarchive';
$string['ruleviewreport'] = 'View report';
$string['scheduledtask'] = 'Scheduled task';
$string['seedetails'] = 'See details';
$string['seemore'] = 'See more...';
$string['select'] = 'Select';
$string['selectbadge'] = 'Select badge';
$string['selectbadge_help'] = 'In order to be issued by dynamic rule, site badge needs to be enabled and has manual issue criteria added.';
$string['selectcertificate'] = 'Select certificate';
$string['selectcompetency'] = 'Select competency';
$string['selectcompetency_help'] = 'Select competencies to issue';
$string['sendto'] = 'Send to';
$string['sendtodptlead'] = 'Department lead';
$string['sendtomanager'] = 'Manager';
$string['sendtomatching'] = 'Matching users';
$string['sitelink'] = 'Site link';
$string['sitelinkspecific'] = 'Site link specific for the tenant';
$string['siteshortname'] = 'Site short name';
$string['subject'] = 'Subject';
$string['taskprocessrules'] = 'Process rules';
$string['timeadded'] = 'Added to cohort on or after this date and time';
$string['timecreated'] = 'Created';
$string['timeenrolled'] = 'Enrolment start date and time is on or after';
$string['toomanybadgestoshow'] = 'Too many badges to show';
$string['toomanycertificatestoshow'] = 'Too many certificates ({$a}) to show';
$string['toomanycohortstoshow'] = 'Too many cohorts ({$a}) to show';
$string['toomanycompetenciestoshow'] = 'Too many competencies ({$a}) to show';
$string['usercreatetype_help'] = 'You can select a date relative to the current date to match users created within the specified period of time.';
$string['userdetailshidden'] = 'Details are hidden';
$string['userplaceholders'] = 'User placeholders';
$string['viewmatchingusers'] = 'View matching users';
$string['warningchangeswillnotapplymatchedusers'] = 'The changes will not apply to users that matched this rule in the past';
