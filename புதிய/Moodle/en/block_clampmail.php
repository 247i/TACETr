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
 * Strings for component 'block_clampmail', language 'en', version '4.0'.
 *
 * @package     block_clampmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['add_all'] = 'Add all';
$string['add_button'] = 'Add';
$string['all_groups'] = 'All groups';
$string['allowstudents'] = 'Allow students to use CLAMPMail';
$string['alternate'] = 'Alternate emails';
$string['alternate_activated'] = 'Alternate email {$a->address} can now be used in {$a->course}.';
$string['alternate_activation_status'] = 'Activation status';
$string['alternate_approved'] = 'Approved';
$string['alternate_body'] = '<p>
{$a->fullname} added {$a->address} as an alternate sending address for {$a->course}.
</p>

<p>
The purpose of this email was to verify that this address exists, and the owner
of this address has the appropriate permissions in Moodle.
</p>

<p>
If you wish to complete the verification process, please continue by directing
your browser to the following url: {$a->url}.
</p>

<p>
If the description of this email does not make any sense to you, then you may have
received it by mistake. Simply discard this message.
</p>

Thank you.';
$string['alternate_delete_confirm'] = 'Are you sure you want to delete {$a->address}? This action cannot be undone.';
$string['alternate_failure'] = 'An email could not be sent to {$a->address}. Please verify that {$a->address} exists, and try again.';
$string['alternate_from'] = 'Moodle: CLAMPMail';
$string['alternate_invalid'] = 'Activation link is no longer valid for {$a->address}. Continue to resend activation link.';
$string['alternate_new'] = 'Add alternate address';
$string['alternate_saved'] = 'Alternate address {$a->address} has been saved.';
$string['alternate_subject'] = 'Alternate email address verification';
$string['alternate_success'] = 'An email to verify that the address is valid has been sent to {$a->address}. Instructions on how to activate the address is contained in its contents.';
$string['alternate_waiting'] = 'Waiting';
$string['are_you_sure'] = 'Are you sure you want to delete {$a->title}? This action cannot be reversed.';
$string['attachment'] = 'Attachment(s)';
$string['clampmail:addinstance'] = 'Add a new CLAMPMail block';
$string['clampmail:allowalternate'] = 'Allows users to add an alternate email for courses.';
$string['clampmail:canconfig'] = 'Allows users to configure CLAMPMail instance.';
$string['clampmail:canimpersonate'] = 'Allows users to log in as other users and view history.';
$string['clampmail:cansend'] = 'Allows users to send email through CLAMPMail';
$string['clampmail:cansendtoall'] = 'Allows users to email all users in a course regardless of group settings';
$string['composenew'] = 'Compose new email';
$string['config'] = 'Configuration';
$string['default_flag'] = 'Default';
$string['default_signature'] = '{$a} (Default)';
$string['defaultgroupmode'] = 'Default group mode';
$string['defaultgroupmode_desc'] = 'Default group mode for new block instances';
$string['delete_confirm'] = 'Are you sure you want to delete message with the following details: {$a}';
$string['delete_email'] = 'Delete email';
$string['delete_failed'] = 'Failed to delete email';
$string['delete_signature_confirm'] = 'Are you sure you want to delete {$a}?';
$string['drafts'] = 'View drafts';
$string['email'] = 'Email';
$string['eventalternateemailadded'] = 'Alternate email added';
$string['from'] = 'From';
$string['log'] = 'View history';
$string['manage_signatures'] = 'Manage signatures';
$string['maximumupload'] = 'Maximum attachment size';
$string['maximumupload_desc'] = 'Maximum attachment size for an individual email.';
$string['message'] = 'Message';
$string['missing_recipient'] = 'The recipient with the id {$a} is no longer enrolled in this course.';
$string['newsignature'] = 'New signature';
$string['no_alternates'] = 'No alternate emails found for {$a->fullname}. Continue to make one.';
$string['no_course'] = 'Invalid course with id of {$a}';
$string['no_drafts'] = 'You have no email drafts.';
$string['no_email'] = 'Could not email {$a->firstname} {$a->lastname}.';
$string['no_filter'] = 'No filter';
$string['no_group'] = 'Not in a group';
$string['no_log'] = 'You have no email history yet.';
$string['no_permission'] = 'You do not have permission to send emails with CLAMPMail.';
$string['no_recipient_emails'] = 'There are no email recipients. Either you forgot to supply one, or you selected addresses you are not allowed to send to.';
$string['no_selected'] = 'You must select some users for emailing.';
$string['no_subject'] = 'You must have a subject';
$string['no_type'] = '{$a} is not in the acceptable type viewer. Please use the application correctly.';
$string['no_users'] = 'There are no users you are capable of emailing.';
$string['not_valid'] = 'This is not a valid email log viewer type: {$a}';
$string['not_valid_action'] = 'You must provide a valid action: {$a}';
$string['not_valid_typeid'] = 'You must provide a valid email for {$a}';
$string['not_valid_user'] = 'You can not view other email history.';
$string['open_email'] = 'Open email';
$string['pluginname'] = 'CLAMPMail';
$string['potential_groups'] = 'Potential groups';
$string['potential_users'] = 'Potential recipients';
$string['prepend_class'] = 'Prepend course name';
$string['prepend_class_desc'] = 'Prepend the course shortname to the subject of the email.';
$string['privacy:metadata:clampmail_drafts'] = 'Saved email drafts';
$string['privacy:metadata:clampmail_log'] = 'A log of sent emails';
$string['privacy:metadata:clampmail_message:mailto'] = 'ID(s) of the email recipients';
$string['privacy:metadata:clampmail_message:message'] = 'Email content';
$string['privacy:metadata:clampmail_message:subject'] = 'Email subject line';
$string['privacy:metadata:clampmail_message:time'] = 'Time at which the email was sent or saved';
$string['privacy:metadata:clampmail_message:userid'] = 'ID of the user who created the email';
$string['privacy:metadata:clampmail_signatures'] = 'Email signatures';
$string['privacy:metadata:clampmail_signatures:signature'] = 'Content of the signature';
$string['privacy:metadata:clampmail_signatures:title'] = 'Title of the signature';
$string['privacy:metadata:clampmail_signatures:userid'] = 'ID of the user who owns this signature';
$string['receipt'] = 'Receive a copy';
$string['receipt_help'] = 'Receive a copy of the email being sent';
$string['remove_all'] = 'Remove all';
$string['remove_button'] = 'Remove';
$string['required'] = 'Please fill in the required fields.';
$string['reset'] = 'Restore system defaults';
$string['role_filter'] = 'Role filter';
$string['save_draft'] = 'Save draft';
$string['select_cansend'] = 'Roles that can send email';
$string['select_cansend_help'] = 'This option sets and removes capability overrides for the block/clampmail:cansend capabililty';
$string['select_roles'] = 'Roles to filter by';
$string['select_users'] = 'Select users ...';
$string['selected'] = 'Selected recipients';
$string['send_email'] = 'Send email';
$string['sig'] = 'Signature';
$string['signature'] = 'Signatures';
$string['signature_text'] = 'Signature text';
$string['subject'] = 'Subject';
$string['title'] = 'Title';
