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
 * Strings for component 'panoptosubmission', language 'en', version '4.0'.
 *
 * @package     panoptosubmission
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addvideo'] = 'Add Panopto submission';
$string['all'] = 'All';
$string['allowdeleting'] = 'Allow resubmitting';
$string['allowdeleting_help'] = 'If enabled, students may replace submitted videos. Whether it is possible to submit after the due date is controlled by the \'Prevent late submissions\' setting';
$string['assignmentexpired'] = 'Submission cancelled.  The assignment due date has passed';
$string['assignmentsubmitted'] = 'Success, your assignment has been submitted';
$string['availabledate'] = 'Allow submissions from';
$string['availabledate_help'] = 'If enabled, students will not be able to submit before this date. If disabled, students will be able to start submitting right away.';
$string['cancel'] = 'Close';
$string['currentgrade'] = 'Current grade in gradebook';
$string['deleteallsubmissions'] = 'Delete all video submissions';
$string['duedate'] = 'Due Date';
$string['duedate_help'] = 'This is when the assignment is due. Submissions will still be allowed after this date, but any assignments submitted after this date will be marked as late. Set an assignment cut-off date to prevent submissions after a certain date.';
$string['early'] = '{$a} early';
$string['emailteachermail'] = '{$a->username} has updated their assignment submission
for \'{$a->assignment}\' at {$a->timeupdated}

View the submission here:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} has updated their assignment submission
for <i>\'{$a->assignment}\'  at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['emailteachers'] = 'Email alerts to teachers';
$string['emailteachers_help'] = 'If enabled, teachers receive email notification whenever students add or update an assignment submission. Only teachers who are able to grade the particular assignment are notified. So, for example, if the course uses separate groups, teachers restricted to particular groups won\'t receive notification about students in other groups.';
$string['eventassignment_details_viewed'] = 'Assignment details viewed';
$string['eventassignment_submitted'] = 'Assignment submitted';
$string['eventgrade_submissions_page_viewed'] = 'Grade submissions page viewed';
$string['eventgrades_updated'] = 'Assignment grades updated';
$string['eventsingle_submission_page_viewed'] = 'Single submission page viewed';
$string['failedtoinsertsubmission'] = 'Failed to insert submission record.';
$string['feedback'] = 'Feedback';
$string['feedbackfromteacher'] = 'Feedback From Teacher';
$string['finalgrade'] = 'Final grade';
$string['fullname'] = 'Name';
$string['grade'] = 'Grade';
$string['grade_out_of'] = 'Grade out of {$a}:';
$string['gradedby'] = 'Graded by';
$string['gradedon'] = 'Graded on';
$string['gradeitem:submissions'] = 'Submissions';
$string['grademodified'] = 'Last modified (Grade)';
$string['gradesubmission'] = 'Grade';
$string['gradingsummary'] = 'Grading summary';
$string['group_filter'] = 'Group Filter';
$string['has_grade'] = 'Graded';
$string['hiddenfromstudents'] = 'Hidden from students';
$string['invalid_launch_parameters'] = 'Invalid launch parameters';
$string['invalidid'] = 'Invalid ID';
$string['invalidperpage'] = 'Enter a number greater than zero';
$string['late'] = '{$a} late';
$string['latesubmissions'] = 'Late submissions';
$string['latesubmissionsaccepted'] = 'Allowed until {$a}';
$string['messageprovider:panoptosubmission_updates'] = 'Panopto Student Submission notifications';
$string['modulename'] = 'Panopto Student Submission';
$string['modulename_help'] = 'The Panopto Student Submission activity is a gradeable assignment that require students to upload and submit Panopto videos. Teachers can also provide feedback.';
$string['modulenameplural'] = 'Panopto Student Submissions';
$string['name'] = 'Name';
$string['needs_grade'] = 'Needs grade';
$string['no'] = 'No';
$string['no_existing_lti_tools'] = 'A preconfigured Panopto LTI tool with the custom parameter "panopto_student_submission_tool" must exist to be able to use the Panopto Student Submission activity. Please see setup documentation for more information.';
$string['noassignments'] = 'No Panopto Student Submission activities found in the course';
$string['noenrolledstudents'] = 'No students are enrolled in the course';
$string['nosubmission'] = 'No submission';
$string['nosubmissions'] = 'No submissions';
$string['nosubmissionsforgrading'] = 'There are no submissions available for grading';
$string['not_submitted'] = 'Not submitted';
$string['notallowedtoreplacemedia'] = 'You are not allowed to replace the media.';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissions'] = 'Number of submissions: {$a}';
$string['numberofsubmissionsneedgrading'] = 'Needs grading';
$string['numberofsubmittedassignments'] = 'Submitted';
$string['optionalsettings'] = 'Optional settings';
$string['pagesize'] = 'Submissions shown per page';
$string['pagesize_help'] = 'Set the number of assignment to display per page';
$string['panoptosubmission:addinstance'] = 'Add a Panopto Student Submission activity';
$string['panoptosubmission:gradesubmission'] = 'Grade video submissions';
$string['panoptosubmission:submit'] = 'Submit';
$string['pluginadministration'] = 'Panopto Student Submission';
$string['pluginname'] = 'Panopto Student Submission';
$string['preventlate'] = 'Prevent late submissions';
$string['preventlate_help'] = 'If enabled, this will prevent students from submitting the assignment after the due date.';
$string['privacy:markedsubmissionspath'] = 'markedsubmissions';
$string['privacy:metadata:emailteachersexplanation'] = 'Messages are sent to teachers through the messaging system.';
$string['privacy:metadata:panoptosubmission_submission'] = 'Panopto Student Submission submissions';
$string['privacy:metadata:panoptosubmission_submission:grade'] = 'Grade score for the submission';
$string['privacy:metadata:panoptosubmission_submission:mailed'] = 'Whether the assignment submission notification has been emailed to the teacher';
$string['privacy:metadata:panoptosubmission_submission:source'] = 'The LTI link that opens the submitted content';
$string['privacy:metadata:panoptosubmission_submission:submissioncomment'] = 'Submission teacher comment';
$string['privacy:metadata:panoptosubmission_submission:teacher'] = 'Moodle userId of the teacher who marked the submission';
$string['privacy:metadata:panoptosubmission_submission:timecreated'] = 'Time the submission record was created';
$string['privacy:metadata:panoptosubmission_submission:timemarked'] = 'Time the assignment submission was marked';
$string['privacy:metadata:panoptosubmission_submission:timemodified'] = 'Time the assignment submission was modified';
$string['privacy:metadata:panoptosubmission_submission:userid'] = 'Moodle user id';
$string['privacy:metadata:panoptosubmissionfilter'] = 'Filter preference of assignment submissions.';
$string['privacy:metadata:panoptosubmissiongroupfilter'] = 'Group filter preference of assignment submissions.';
$string['privacy:metadata:panoptosubmissionperpage'] = 'Number of assignment submissions shown per page preference.';
$string['privacy:metadata:panoptosubmissionquickgrade'] = 'Quick grading preference for Panopto Submission.';
$string['privacy:submissionpath'] = 'submission';
$string['quickgrade'] = 'Enable quick grading';
$string['quickgrade_help'] = 'If enabled, multiple assignments can be graded at the same time. Update grades and feedback and then click "Save all feedback".';
$string['relativedatessubmissiontimeleft'] = 'Calculated for each student';
$string['replacevideo'] = 'Replace';
$string['reqgrading'] = 'Require grading';
$string['save'] = 'Save Changes';
$string['savedchanges'] = 'Changed Saved';
$string['savefeedback'] = 'Save feedback';
$string['savepref'] = 'Save preferences';
$string['select_submission'] = 'Select Panopto submission';
$string['sessionpreview_hide'] = 'Hide video preview';
$string['sessionpreview_show'] = 'Show video preview';
$string['show'] = 'Show';
$string['show_help'] = 'If filter is set to \'All\' then all student submissions will be displayed; even if the student didn\'t submit anything.  If set to \'Require grading\' only submissions that has not been graded or submissions that were updated by the student after it was graded will be shown.  If set to \'Submitted\' only students who submitted a video assignment.';
$string['singlegrade'] = 'Add help text';
$string['singlegrade_help'] = 'Add help text';
$string['singlesubmissionheader'] = 'Grade submission';
$string['status'] = 'Status';
$string['submission'] = 'Submission';
$string['submissioncomment'] = 'Comment';
$string['submissioncommentfeedback'] = 'Comment Feedback';
$string['submissionisdue'] = 'Submission is due';
$string['submissions'] = 'Submissions';
$string['submitted'] = 'Submitted';
$string['submitvideo'] = 'Submit';
$string['timemodified'] = 'Last modified (Submission)';
$string['timeremaining'] = 'Time remaining';
$string['useremail'] = 'Email';
$string['userpicture'] = 'User Picture';
$string['video_preview_header'] = 'Submission preview';
$string['viewsubmission'] = 'View submission';
$string['yes'] = 'Yes';
