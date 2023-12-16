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
 * Strings for component 'plagiarism_strike', language 'en', version '4.0'.
 *
 * @package     plagiarism_strike
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrefauto'] = 'Automatically after checking';
$string['addrefmanual'] = 'Manually after checking';
$string['allowallsupportedfiles'] = 'Allow all supported file formats';
$string['allowallsupportedfiles_help'] = 'Allows the teacher to restrict file formats which will be sent to StrikePlagiarism.com for processing. It does not prevent students from uploading different file types to the assignment.';
$string['analysis:auto'] = 'Automated';
$string['analysis:awaitchoice'] = 'Awaiting be selected for analysis';
$string['analysis:manual'] = 'On demand';
$string['api_status_1'] = 'Connection ok';
$string['api_status_2'] = 'Key is not valid';
$string['api_status_3'] = 'Connection timeout';
$string['api_status_4'] = 'Connection ok, server not responding';
$string['api_status_5'] = 'Connection error code: {$a->error}';
$string['apidebuggingemail'] = 'Enable email debugging?';
$string['apidebuggingemail_help'] = 'Enable this option if you want to receive the API debugging output in your email.<br/>
If you enable this, the trace output will be send to the specified email address.<br/>
NOTE: This can cause a lot of emails to be sent.<br/>
NOTE 2: This method makes use of the default mail() function, and will not alway be available. It works outside of the Moodle mail functions.';
$string['apidebuggingemailaddress'] = 'Email debugging recipient.';
$string['apidebuggingerrorlog'] = 'Enable error_log debugging?';
$string['apidebuggingerrorlog_help'] = 'Enable this option if you want to see the API debugging output as error_log output.<br/>
If you enable this, the trace output will be visible in webserver / php error_log.<br/>
NOTE: This will not always be visible depending on how your webserver or PHP is configured.';
$string['apidebuggingmtrace'] = 'Enable mtrace debugging?';
$string['apidebuggingmtrace_help'] = 'Enable this option if you want to see the API debugging output as mtrace() output.<br/>
If you enable this, the trace output will be visible in your background task output (CRON).';
$string['assignmenttype'] = 'The type of the assignment';
$string['assignmenttype_0'] = 'Habilitation Thesis';
$string['assignmenttype_1'] = 'Doctoral Thesis';
$string['assignmenttype_10'] = 'Diploma Thesis';
$string['assignmenttype_101'] = 'Monograph';
$string['assignmenttype_102'] = 'Manual';
$string['assignmenttype_103'] = 'Treatise';
$string['assignmenttype_16'] = 'Project';
$string['assignmenttype_2'] = 'Master\'s Thesis';
$string['assignmenttype_25'] = 'Paper';
$string['assignmenttype_3'] = 'Bachelor\'s Thesis';
$string['assignmenttype_300'] = 'Book';
$string['assignmenttype_4'] = 'Year Paper';
$string['assignmenttype_40'] = 'Postgraduate Thesis';
$string['assignmenttype_6'] = 'Assignment';
$string['assignmenttype_7'] = 'Article';
$string['assignmenttype_8'] = 'Research';
$string['assignmenttype_9'] = 'Engineer Thesis';
$string['awaitanalysischoice'] = 'Awaiting decision on sending to StrikePlagiarism.com for analysis';
$string['cmoverview'] = 'List of StrikePlagiarism.com submissions';
$string['config:defaults'] = 'StrikePlagiarism.com antiplagiarism module configuration defaults';
$string['config:plagiarism'] = 'StrikePlagiarism.com antiplagiarism module global configuration values';
$string['crosscheckmode'] = 'Cross-check mode';
$string['crosscheckmode_help'] = 'Cross-check mode enables 1:1 comparison between submissions of the students within the assignment. When the cross-check is enabled, the cross-check section will be visible in the interactive Similarity Report';
$string['deletereportkeep'] = 'Keep old Similarity Reports';
$string['deletereportremove'] = 'Delete old Similarity Reports';
$string['deletestrikefile'] = 'Withdraw submission from your comparative database in StrikePlagiarism.com system';
$string['docsendingall'] = 'Send all documents';
$string['docsendingchoose'] = 'Send chosen documents';
$string['docsendmode'] = 'Sending documents for antiplagiarism analysis';
$string['docsendmode_help'] = 'Choose the method of sending document for analysis. This can be either by choice (meaning the teacher selects documents to send for analysis) or all (meaning all documents are sent for analysis by default)';
$string['enableapidebugging'] = 'Enable API debugging';
$string['enableapidebugging_help'] = 'Turn this option on if you want extended debugging provided by the StrikePlagiarism.com API.<br/>
Multiple debugging methods are available. Do note the debugging will <i>only</i> consist of communication/traffic information on the StrikePlagiarism.com API.';
$string['err:strike_selectfiletypes-empty'] = 'Please make a selection of allowed file formats to submit.<br/>
Since no file formats are chosen now, no document would ever be submitted to the antiplagiarism system API.';
$string['filereset'] = 'A file has been reset for re-submission to StrikePlagiarism.com';
$string['fileresetfailed'] = 'Error: file has not been reset for re-submission to StrikePlagiarism.com';
$string['form:desc:defaults'] = 'Below you can enter all default settings that will be used when a new activity module is created and configured.<br/>
The values entered here will serve as default values for the StrikePlagiarism.com plugin configuration for that activity module.';
$string['indexdocument'] = 'Add submission to your comparative database in StrikePlagiarism.com system';
$string['label:actions'] = 'Action(s)';
$string['label:analysisstatus'] = 'Similarity Coefficients (SC)';
$string['label:author'] = 'Author';
$string['label:filename'] = 'Filename';
$string['label:modname'] = 'Module';
$string['label:reportstatus'] = 'Report';
$string['label:status'] = 'Status';
$string['label:timesubmitted'] = 'Submitted on';
$string['label:user'] = 'User';
$string['messageprovider:strikenotification'] = 'StrikePlagiarism.com error notifications';
$string['notification:errormessage'] = '<p>Dear {$a->fullname}<p>
<p>An error occured in the StrikePlagiarism.com antiplagiarism plugin in \'{$a->instancename}\' in course \'{$a->coursefullname}\'.<br/>
The error raised was: {$a->errormessage}.</p>
<p>Below are the file details:<br/>
Author: {$a->strikefileauthor}<br/>
Coordinator: {$a->strikefilecoordinator}<br/>
DocumentKind: {$a->strikefiledocumentkind}<br/>
Title: {$a->strikefiletitle}<br/>
Filename: {$a->strikefilename}<br/>
GUID: {$a->strikefileguid}<br/>
Time created: {$a->strikefiletimecreated}
</p>
<p>Please go to <a href="{$a->contexturl}">{$a->contexturlname}</a> for more details</p>
<p>Regards,<br/>{$a->signoff}</p>';
$string['notification:subject'] = 'StrikePlagiarism.com system message [{$a}]';
$string['notifyteachers'] = 'Notify teacher(s)';
$string['pending'] = 'File is pending submission to StrikePlagiarism.com';
$string['pluginname'] = 'StrikePlagiarism.com';
$string['previouslysubmitted'] = 'Previously submitted as';
$string['privacy:metadata:author'] = 'Submitted file author or co-author name.';
$string['privacy:metadata:coordinator'] = 'Submitted file promoter.';
$string['privacy:metadata:core_files'] = 'StrikePlagiarism.com stores files that have been uploaded to Moodle to form a StrikePlagiarism.com submission.';
$string['privacy:metadata:factor1'] = 'Number Similarity Coefficient 1.';
$string['privacy:metadata:factor2'] = 'Number Similarity Coefficient 2.';
$string['privacy:metadata:factor3'] = 'Number Similarity Coefficient 3.';
$string['privacy:metadata:factor4'] = 'Number Similarity Coefficient 4.';
$string['privacy:metadata:factor5'] = 'Number Similarity Coefficient DLA.';
$string['privacy:metadata:filename'] = 'Filename of file submitted by user.';
$string['privacy:metadata:ftimecreated'] = 'StrikePlagiarism.com file record creation time.';
$string['privacy:metadata:ftimemodified'] = 'StrikePlagiarism.com submission modification time.';
$string['privacy:metadata:ftimesubmitted'] = 'StrikePlagiarism.com file submission time.';
$string['privacy:metadata:guid'] = 'StrikePlagiarism.com creates guid which is file relation to submission to StrikePlagiarism.com API.';
$string['privacy:metadata:indexed'] = 'Boolean true if the document has been indexed.';
$string['privacy:metadata:md5sum'] = 'MD5 sum of the binary document sent for analysis.';
$string['privacy:metadata:plagiarism_strike:data'] = 'Personal data passed through from the antiplagiarism subsystem.';
$string['privacy:metadata:plagiarism_strike:externalpurpose'] = 'This plugin sends data externally using the StrikePlagiarism.com API.';
$string['privacy:metadata:plagiarism_strike_files'] = 'Table that stores informations about files submitted for antiplagiarism analysis.';
$string['privacy:metadata:plagiarism_strike_reports'] = 'StrikePlagiarism.com creates Similarity report for each submitted file. That record is stored in Moodle database. Each report is related to user file submission.';
$string['privacy:metadata:relateduserid'] = 'Information about related used that is submitting file for antiplagiarism analysis.';
$string['privacy:metadata:report'] = 'Submission StrikePlagiarism.com Similarity report data.';
$string['privacy:metadata:reportready'] = 'Boolean true if the report is ready for download, false otherwise.';
$string['privacy:metadata:strikefileid'] = 'StrikePlagiarism.com submission file ID.';
$string['privacy:metadata:timecreated'] = 'Submission StrikePlagiarism.com Similarity report creation time.';
$string['privacy:metadata:timemodified'] = 'Submission StrikePlagiarism.com Similarity report modification time.';
$string['privacy:metadata:title'] = 'Title of document submitted by user.';
$string['privacy:metadata:userid'] = 'Information about user that is submitting file for antiplagiarism analysis.';
$string['processing'] = 'File has been submitted to StrikePlagiarism.com and is awaiting analysis to complete';
$string['report'] = 'StrikePlagiarism.com Similarity Report';
$string['report2'] = 'StrikePlagiarism.com interactive report';
$string['report:available'] = 'Available';
$string['report:na'] = 'N/A';
$string['report:ready'] = 'Ready';
$string['reportclick'] = 'Link to StrikePlagiarism.com Similarity Report';
$string['restrictcontent'] = 'Submit attached files and in-line text';
$string['restrictcontent_help'] = 'StrikePlagiarism.com can process uploaded files or in-line text from forum posts and text from the online text assignment submission type. Choose which components to send to StrikePlagiarism.com system.';
$string['restrictcontentfiles'] = 'Submit attached files only';
$string['restrictcontentno'] = 'Submit attached files and in-line text';
$string['restrictcontenttext'] = 'Submit in-line text only';
$string['restrictfiles'] = 'File formats allowed for antiplagiarism analysis';
$string['sendforanalysis'] = 'Send submission to StrikePlagiarism.com for analysis';
$string['showwhenclosed'] = 'When Activity is closed';
$string['similarity1'] = 'SC 1';
$string['similarity2'] = 'SC 2';
$string['similarity3'] = 'SC 3';
$string['similarity4'] = 'SC 4';
$string['similarity5'] = 'SC DLA';
$string['str:debug'] = 'Debug';
$string['str:defaults'] = 'Defaults';
$string['str:dump'] = 'Dump';
$string['str:settings'] = 'Settings';
$string['strike'] = 'StrikePlagiarism.com plugin';
$string['strike:enable'] = 'Enable StrikePlagiarism.com plugin';
$string['strike:resetfile'] = 'Clears all errors and put the status to pending again';
$string['strike:viewreport'] = 'Show Similarity Reports to all students';
$string['strike_addref_method'] = 'Adding documents to the comparative database';
$string['strike_addref_method_help'] = 'Choose the method of adding documents to your comparative database. This can be either manually (meaning the teacher selects documents to be added to comparative database) or automatically (meaning all documents are added to comparative database by default) after checking.<br/>
It is highly adviced to set this to AUTOMATIC, so checked documents are automatically added to the comparative database.';
$string['strike_defaultlang'] = 'Default document language';
$string['strike_defaultlang_help'] = 'Defines the default language of the document send to analysis to StrikePlagiarism.com system.';
$string['strike_deletereport_method'] = 'Deletion of Similarity Reports for deleted/updated submissions';
$string['strike_deletereport_method_help'] = 'Defines if Similarity Reports are to be deleted whenever a submission is deleted or updated.<br/>
Possible methods are:
<ul>
<li>keep: Keep old Similarity Reports</li>
<li>remove: Delete old Similarity Reports</li>
</ul>';
$string['strike_draft_submit'] = 'Moment of sending to antiplagiarism analysis';
$string['strike_enableplugin'] = 'Enable StrikePlagiarism.com for {$a}';
$string['strike_show_student_report'] = 'Show Similarity Report to student';
$string['strike_show_student_report_help'] = 'The Similarity Report indicates the number of and highlights borrowed fragments in the text and giving their source.';
$string['strike_show_student_score'] = 'Show Similarity Coefficients to student';
$string['strike_show_student_score_help'] = 'The Similarity Coefficients determine in what percentage the analyzed document consists of fragments similar to those detected in comparative databases.';
$string['strike_show_student_status'] = 'Show StrikePlagiarism.com analysis status to student';
$string['strike_show_student_status_help'] = 'Allows students to see the status of submissions to StrikePlagiarism.com system.';
$string['strike_studentemail'] = 'Email to student';
$string['strike_studentemail_help'] = 'Enables an e-mail sent to the student when a file has been processed to let them know that a Similarity Report is available, the e-mail also includes the opt-out link.';
$string['strikeexplain'] = 'For more information on this antiplagiarism system and how it works see: <a href="http://www.strikeplagiarism.com">www.StrikePlagiarism.com</a>';
$string['strikekey'] = 'StrikePlagiarism.com API Key';
$string['strikekey_help'] = 'API Key to your account in the StrikePlagiarism.com system<br/>You need to obtain an StrikePlagiarism.com ID key to use this plugin. For more information please contact us via website contact form on <a href="http://www.strikeplagiarism.com">www.StrikePlagiarism.com</a>';
$string['strikeplagiarism'] = 'StrikePlagiarism.com';
$string['strikeserver'] = 'StrikePlagiarism.com API Host';
$string['strikeserver_help'] = 'StrikePlagiarism.com server hostname or ip address. Enter IP address with http or https';
$string['strikestudentdisclosure'] = 'I agree that all files which I uploaded might be submitted to the StrikePlagiarism.com antiplagiarism system in order to check oryginality of the text';
$string['studentdisclosure'] = 'Student Disclosure';
$string['studentdisclosure_help'] = 'This text will be displayed to all students on the file upload page. It has to be agreed on in order to proceed with submission.';
$string['studentdisclosuredefault'] = 'I agree that all files which I uploaded might be submitted to the StrikePlagiarism.com antiplagiarism system in order to check oryginality of the text';
$string['studentemailcontent'] = '<p>Dear {$a->firstname} {$a->lastname},</p>
The file you submitted to {$a->modulename} in {$a->coursename} has been verified by StrikePlagiarism.com.<br/>
{$a->modulelink}<br/>
Regards,
{$a->admin}';
$string['studentemailsubject'] = 'Submission verified by StrikePlagiarism.com antiplagiarism system';
$string['submitondraft'] = 'When first uploaded';
$string['submitonfinal'] = 'When student submit for grading';
$string['task:getreports'] = 'Synchronize StrikePlagiarism.com reports';
$string['task:sendfiles'] = 'Send files to StrikePlagiarism.com system API';
$string['task:syncreport'] = 'Synchronize StrikePlagiarism.com Report for document';
$string['test_api_connection'] = 'Test API connection';
$string['test_api_connection_help'] = 'You can check that current entered host API and API Key are working correctly.';
$string['test_api_connection_status'] = 'API connection status';
$string['toolarge'] = 'File is too big to be submitted to StrikePlagiarism.com';
$string['unknownwarning'] = 'There was an error with submitting this file to StrikePlagiarism.com';
$string['unsupported'] = 'File format is not supported by StrikePlagiarism.com';
$string['unsupportedfiletype'] = 'File format is not supported by StrikePlagiarism.com';
$string['useadminnotifications'] = 'Notify admin about errors?';
$string['useadminnotifications_help'] = 'Notifies admin about errors when various errors occur (e.g. when communicating with the StrikePlagiarism.com API)';
$string['usestrike'] = 'Use StrikePlagiarism.com plugin';
$string['useteachernotifications'] = 'Notify teacher(s) about errors?';
$string['useteachernotifications_help'] = 'Notifies teacher(s) about errors when various errors occur (e.g. when communicating with the StrikePlagiarism.com API)';
$string['warn:strike_selectfiletypes-empty'] = 'Please make a selection of allowed file formats to submit below.<br/>
If no file formats are chosen, no documents would ever be submitted to the antiplagiarism system API.';
$string['wordcount'] = 'Minimum word count for analysis';
$string['wordcount_help'] = 'Sets a minimum number of words required for in-line text (forum posts and online assignment type) before the content will be sent to StrikePlagiarism.com system for analysis.';
