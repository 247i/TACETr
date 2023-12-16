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
 * Strings for component 'pulse', language 'en', version '4.0'.
 *
 * @package     pulse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['apply_customize'] = 'Apply and Customize';
$string['apply_save'] = 'Apply and Save';
$string['approve'] = 'Approve';
$string['approved'] = 'Approved';
$string['approvedby'] = 'approvedby';
$string['approvedeclined'] = 'Approval denied';
$string['approvedon'] = 'Approved on {$a->date} by {$a->user}';
$string['approvedsuccess'] = 'Approval successful';
$string['approveduser'] = 'Approved by: {$a->user}';
$string['approveuser'] = 'Approve users - {$a->course}';
$string['approveuserbtn'] = 'Approve users';
$string['box'] = 'Box';
$string['boxicon'] = 'Box Icon';
$string['boxtype'] = 'Box Type';
$string['completereaction'] = 'Complete reaction';
$string['completewhenavaialble'] = 'Completion when available';
$string['completewhenavaialble_help'] = 'If enabled, the activity will be considered completed when the user has access to it (i.e. when it is available based on availability restricitions).';
$string['completion:approval'] = 'Approval required';
$string['completion:available'] = 'Restrictions must be met';
$string['completion:self'] = 'Mark complete';
$string['completionapproverules'] = 'Completionapproverules';
$string['completioncriteria'] = 'Completion criteria';
$string['completionfor'] = 'completionfor';
$string['completionrequireapproval'] = 'Require approval by one of the following roles';
$string['completionrequireapproval_help'] = 'If enabled, the activity will be considered completed when any of the selected roles approves the user.';
$string['completionself'] = 'Mark as complete by student to complete this activity';
$string['completionself_help'] = 'If enabled, the activity will be considered completed when the student marks it as complete on the course page.';
$string['configintro'] = 'Global configuration settings for Pulse';
$string['configparams'] = 'Config Params';
$string['configrableparams'] = 'Configurable Params';
$string['confirmdeletetemplate'] = 'Are you sure! do you want to delete the preset';
$string['content'] = 'Content';
$string['content_help'] = 'Content will be displayed on the course page and used as message body content for the invitation.';
$string['courserole'] = 'courserole';
$string['createpreset'] = 'Create Preset';
$string['creditesgroup'] = 'Credit score';
$string['credits'] = 'Credits';
$string['creditsfield'] = 'Credits user profile field';
$string['creditsfielddesc'] = 'Select any of the user custom profile field to maintain the user credits records <br>
NOTE: Lock the selected field for students to prevent that students change their credit scores';
$string['cssclass'] = 'CSS class';
$string['danger'] = 'Danger';
$string['dark'] = 'Dark';
$string['decline'] = 'Decline';
$string['declined'] = 'Declined';
$string['deletepreset'] = 'Delete pulsepro preset template';
$string['description'] = 'Description';
$string['detailedlog'] = 'Display detailed log for scheduled task — only use for troubleshooting purposes and disable on a production site';
$string['diffnotification'] = 'Use notification content instead of general content';
$string['diffnotification_help'] = 'If enabled, the invitation will use notification content and subject (instead of general content and title).';
$string['disabled'] = 'Disabled';
$string['dislike'] = 'Dislike';
$string['displaymode'] = 'Display mode';
$string['displaytype:contentonly'] = 'Content only';
$string['displaytype:notificationcontent'] = 'Both';
$string['displaytype:notificationonly'] = 'Notification only';
$string['enable:disable'] = 'Enable / Disable';
$string['enabled'] = 'Enabled';
$string['enablereminder:first'] = 'Enable first reminder';
$string['enablereminder:first_help'] = 'If enabled, Pulse will send the first reminder.';
$string['enablereminder:invitation'] = 'Enable invitation';
$string['enablereminder:recurring'] = 'Enable recurring reminder';
$string['enablereminder:recurring_help'] = 'If enabled, Pulse will send a recurring reminder to selected recipients. Recurring reminders will send to the user in the given interval until the user is no longer enrolled or suspended.';
$string['enablereminder:second'] = 'Enable second reminder';
$string['enablereminder:second_help'] = 'If enabled, Pulse will send a second reminder to selected recipients based on the schedule.';
$string['generatereport'] = 'Generate report';
$string['head:firstreminder'] = 'First reminder';
$string['head:recurringreminder'] = 'Recurring reminder';
$string['head:secondreminder'] = 'Second reminder';
$string['instancename'] = 'Pulse';
$string['instruction'] = 'Instruction';
$string['invitation'] = 'Invitation';
$string['invitation_help'] = 'Send the invitation to all users with the selected roles.';
$string['invitationsubject'] = 'Notification subject';
$string['invitationsubject_help'] = 'Add the subject for the invitation here.';
$string['learnmore'] = 'Learn More';
$string['light'] = 'Light';
$string['like'] = 'Like';
$string['logintoreact'] = 'Login before apply reaction';
$string['managepresets'] = 'Manage Presets';
$string['markcomplete'] = 'Mark complete';
$string['messageprovider:mod_pulse'] = 'Send notifcation';
$string['modulename'] = 'Pulse';
$string['modulename_help'] = 'Pulse is the teacher\'s Swiss army knife to improve student engagement and compliance in moodle courses:
<ul><li><strong>Notifications</strong><br/>
Each Pulse activity can be configured to send a notification once it becomes available to the student. There are a number of placeholders that can be used to personalize the message, like the first name of the student or the name of the course. The notification can be sent to the student, the teacher, the non-editing teacher or the manager. Other course context or user context roles are supported as well, e.g. parent or staff manager.</li>
<li><strong>Completion workflows</strong><br/>
Pulse supports activity completion in three ways (in addition to moodle core ones): upon availability, when marked complete by student and when approved by other role.</li></ul>
<p>As with all things automation, it is essential to put enough thought into what you actually want. Ideally, write down what should happen in which case. This also helps us to support you! If it does not work as you expect, here are the most common issues:</p>
<ul>
<li>The course has not <b>started</b>. Pulse only works in a course which is currently running —> Check if the start date is in the past.</li>
<li>The course has <b>ended</b>. Pulse only works in a course which is currently running —> Check if the end date is set, and if it is, make sure it is in the future.</li>
<li>The course has <b>enrolled students</b>. Pulse (free) only works for students —> Check if the course actually has an enrolled user with an active enrolment status.</li>
<li>The Pulse activity is <b>available</b>. Pulse only works if the activity is available to the student. That is the "trigger" or "condition" we use to determine if we shall actually do something (e.g. award credits). —> Check if the Pulse activity is hidden or has a restriction which is not met by the student; in both cases, it is "disabled" and will not work. If you are not sure, just login as the student and check if the student sees the Pulse activity — if the student sees it, it is enabled; if the student does not see it, it is disabled.</li>
<li>The <b>cron job</b> is not running or has not run yet — awarding credits is done through a scheduled task. It is therefor required that the cron job is running regularly. Moodle recommends every minute, and we can only encourage you to follow that recommendation!</li>
</ul>';
$string['modulename_link'] = 'Pulse';
$string['modulenameplural'] = 'Pulses';
$string['noreaction'] = 'No Reaction';
$string['normal'] = 'Normal';
$string['notassignedgroup'] = 'User must be part of a group to filter by participants.';
$string['notificationfooter'] = 'Notification footer';
$string['notificationfooterdesc'] = '{$a->placeholders}';
$string['notificationheader'] = 'Notification header';
$string['notificationheaderdesc'] = '{$a->placeholders}';
$string['notifyusers'] = 'Notify course students';
$string['notsameuser'] = 'You are not the correct user to apply reaction';
$string['pluginadministration'] = 'Pulse administration';
$string['pluginname'] = 'Pulse';
$string['preset_template'] = 'Preset Template';
$string['preset_template_help'] = 'Upload the backup file of pulse module course activity';
$string['presetcreated'] = 'Pulse presets created successfully';
$string['presetdeleted'] = 'Preset deleted successfully';
$string['preseticon'] = 'Preset icon';
$string['presetlist'] = 'Presets List';
$string['presetmodaltitle'] = 'Use preset {$a->title}';
$string['presetorder'] = 'Preset template order';
$string['presets'] = 'Pulse presets';
$string['presetstatus'] = 'Display this preset in list';
$string['presetupdated'] = 'Pulse presets updated successfully';
$string['previousreminders'] = 'Previous reminders';
$string['primary'] = 'Primary';
$string['privacy:completion'] = 'Completion';
$string['privacy:invitation'] = 'Inviation';
$string['privacy:metadata'] = 'The Pulse plugin does not store any personal data.';
$string['privacy:metadata:completion:approvalstatus'] = 'User approved status';
$string['privacy:metadata:completion:approvaltime'] = 'Time when the user approved by other.';
$string['privacy:metadata:completion:approveduser'] = 'ID of the user who approved the student user';
$string['privacy:metadata:completion:selfcompletion'] = 'Status of the user completion by self';
$string['privacy:metadata:completion:selfcompletiontime'] = 'Time when the user marked the Pulse activity as complete';
$string['privacy:metadata:completion:timemodified'] = 'Time of completion modified';
$string['privacy:metadata:completion:userid'] = 'ID of the user';
$string['privacy:metadata:pulsecompletion'] = 'Pulse user activity completions';
$string['privacy:metadata:pulsemessageexplanation'] = 'Invitations are sent to students through the messaging system.';
$string['privacy:metadata:pulseusers'] = 'List of users invitation notified';
$string['privacy:metadata:users:status'] = 'Status of the invitation to find the notification is previous or current one';
$string['privacy:metadata:users:timecreated'] = 'Time of the invitation send to user.';
$string['privacy:metadata:users:userid'] = 'ID of notified user';
$string['promotionaltext'] = 'With Pulse Pro you get powerful reminders, in-email reactions and you can create your own presets.';
$string['pulse:addinstance'] = 'Add a new Pulse';
$string['pulse:notifyuser'] = 'Send notification';
$string['pulse:view'] = 'View Pulse';
$string['pulse_subject'] = 'Pulse from {Course_FullName} ({Site_FullName})';
$string['pulsenotavailable'] = 'Pulse instance not added in course';
$string['pulsenotification'] = 'Pulse notification';
$string['pulsepro:viewreports'] = 'View Pulse Pro reports';
$string['rate'] = 'Rate';
$string['reaction'] = 'Reaction';
$string['reaction:approve'] = '<a href="{$a->reactionurl}" style="color: #fff;background: #0f6fc5;padding:.375rem .75rem;text-decoration-line: none;" > Approve </a>';
$string['reaction:markcomplete'] = '<a href="{$a->reactionurl}" style="color: #fff;background: #0f6fc5;padding: .375rem .75rem;text-decoration-line: none;" >Mark Complete</a>';
$string['reaction:rate'] = '';
$string['reactiondisplaytype'] = 'Location';
$string['reactiondisplaytype_help'] = 'Please choose where the reaction should be displayed.';
$string['reactions'] = 'Reaction';
$string['reactionthankmsg'] = 'Thank you! Your response is saved.<br><br> <span>You can now close this window</span>';
$string['reactiontype'] = 'Type';
$string['reactiontype_help'] = 'List of reaction types.';
$string['recipients'] = 'Notification recipients';
$string['recipients_help'] = 'Please choose the roles which you want to send the notification to. Only users enrolled in this course and with the selected role will receive notifications. Please note that users with a user context role users don\'t need to be enrolled in the course.';
$string['remindercontent'] = 'Notification content';
$string['remindercontent_help'] = 'The content you enter here will be sent to recipients.';
$string['reminders:availabletime'] = 'Availability time';
$string['reminders:first'] = 'First reminder';
$string['reminders:recurring'] = 'Recurring reminder';
$string['reminders:second'] = 'Second reminder';
$string['reminderschedule'] = 'Notification schedule';
$string['reminderschedule_help'] = 'Define the reminder notification schedule type, <br>
                                    If fixed date is selected, the reminder is sent when the selected date is reached. <br>
                                    If relative date is selected, the reminder is sent after the selected time has passed. The timer starts when the Pulse activity becomes available to the user.';
$string['remindersubject'] = 'Notification subject';
$string['remindersubject_help'] = 'Content will used as subject for the Reminder notifications.';
$string['reports'] = 'Pulse Reports';
$string['reportsfilename'] = 'Pulse reports - {$a->name}';
$string['resendnotification'] = 'Re-send notification';
$string['resendnotification_help'] = 'If enabled, Invitation reminder will rescheduled and sends the invitation to already notified users too.';
$string['resendnotificationdesc'] = 'Invitation has been scheduled for re-sending';
$string['restrictionmet'] = 'Restriction met';
$string['schedule:fixeddate'] = 'Fixed date';
$string['schedule:relativedate'] = 'Relative date';
$string['search:activity'] = 'Pulse';
$string['secondary'] = 'Secondary';
$string['selectpulse'] = 'Select pulse instance';
$string['self'] = 'Self';
$string['selfmarked'] = 'Self marked complete on {$a->date}';
$string['sendnotificaton'] = 'Send Pulse notification';
$string['sendnotificaton_help'] = 'If enabled, the invitation will be sent.';
$string['setup'] = 'Setup Field';
$string['setupcredit'] = 'In order to use this feature, you need to configure the user profile field first.
Please ask your local administrator to set this up.';
$string['showhide'] = 'Detailed log';
$string['statuslabel'] = 'Enable / Disable';
$string['success'] = 'Success';
$string['tasklimituser'] = 'Limit users per task';
$string['tasklimituserdesc'] = 'Use this setting to limit how many users are processed per task. Lower the number of users if the task is taking too long to finish.';
$string['teacher'] = 'Teacher';
$string['title'] = 'Title';
$string['title_help'] = 'The title is used as activity name. It is used as subject to send the invitation.';
$string['tokenexpired'] = 'Token expired! Your response was not saved.';
$string['update_preset'] = 'Update Preset Template';
$string['updatecompletion'] = 'Update pulse modules completion';
$string['updateusercredits'] = 'Update user credits';
$string['usepreset'] = 'Use preset';
$string['userrole'] = 'userrole';
$string['viewreport'] = 'View report';
$string['warning'] = 'Warning';
