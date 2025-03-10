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
 * Strings for component 'tool_wp', language 'en', version '4.0'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'About this file';
$string['activitycompletion'] = 'Activity completion';
$string['allcohorts'] = 'All cohorts';
$string['allcohorts_help'] = 'All cohorts this user can manage';
$string['alldata'] = 'All data';
$string['allsystemcohorts'] = 'All system cohorts';
$string['cantlocatefileindraftarea'] = 'Can\'t locate file in user draft area.';
$string['certificates'] = 'Certificates';
$string['certificatetemplates'] = 'Certificate templates';
$string['certificatetemplates_help'] = 'Include certificate templates, pages and elements. Note that issued certificates are not included';
$string['certificatetemplatesdetails'] = 'Certificate templates details';
$string['change'] = 'Change';
$string['cleanupexpiredimportsexports'] = 'Clean up expired exports and imports';
$string['codechanged'] = 'Issue code was changed from \'{$a->from}\' to \'{$a->to}\'';
$string['cohortdetails'] = 'Cohort details';
$string['cohortdetails_help'] = 'Cohort details for each selected instance';
$string['cohortdetailswithmembers'] = 'Cohort details including members';
$string['cohortdetailswithmembers_help'] = 'Cohort details including membership information. Note that users are not included';
$string['cohortmembers'] = 'Cohort members';
$string['cohortmembers_help'] = 'Only cohort membership information will be included, but actual users will not be';
$string['confighideparentlang'] = 'Hide Workplace parent packs';
$string['confighideparentlangdesc'] = 'If enabled, the parent of any installed Workplace language pack is not displayed in the language menu. For example, \'English (en)\' is not displayed if \'English for Workplace (en_wp)\' is installed.';
$string['confirmdeleteexport'] = 'Are you sure you want to delete this export?';
$string['confirmdeleteimport'] = 'Are you sure you want to delete this import?';
$string['confirmprevbutton'] = 'Leave site? Changes you made may not be saved.';
$string['confirmprocess'] = 'By clicking "Proceed", the process will begin shortly. You will receive a notification when it\'s over.';
$string['conflictidnumber'] = 'Add a numeric suffix to the cohort id number';
$string['conflicts'] = 'Conflicts';
$string['conflictshortname'] = 'Add a numeric suffix to the course short name';
$string['content'] = 'Content';
$string['copiedtoclipboard'] = 'Text copied to clipboard';
$string['copytoclipboard'] = 'Copy to clipboard';
$string['coursecontentbackup'] = 'Allow course content backup';
$string['coursecontentbackupdesc'] = 'This setting controls whether users who can backup courses are allowed to include course content as part of an export. If not set, only users who can edit site configuration can export course content as part of migration. Keeping this setting disabled will help reduce the exported file size.';
$string['coursereset'] = 'Course reset for individual user';
$string['coursesadmintab'] = 'Learning';
$string['createdby'] = 'Created by';
$string['csvcolumn'] = 'CSV column';
$string['csvdefaultvalue'] = 'Default value';
$string['csvfieldsmapping'] = 'Field mapping';
$string['csvmappingnotspecified'] = 'Not specified';
$string['csvwpcolumn'] = 'Moodle Workplace';
$string['deletegradeshistory'] = 'Delete grades history during course reset';
$string['deletegradeshistory_desc'] = 'It is recommended to delete grade history during course reset especially when "Recover grades default" setting is on. If grade history is not deleted during course reset, the process of recovering course grades on re-enrollment will recover the grades, however all activities completion information will no longer be present.';
$string['descriptionformat'] = 'Description format';
$string['descriptionformatdefault'] = 'Default description format';
$string['doexport'] = 'Export';
$string['doimport'] = 'Import';
$string['doyouagreelicense'] = 'Have you read these terms and signed the proprietary Moodle Workplace™ Licence?';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = 'Certificate issues';
$string['entitycertificateissueuser'] = 'Certificate issue: {$a}';
$string['entitycoursereset'] = 'Course reset data';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'Can\'t delete export';
$string['errorcantdeleteimport'] = 'Can\'t delete import';
$string['errorcohortsameidnumber'] = 'Cohorts with the same idnumber already exist';
$string['errorcouldnotallocatecohort'] = 'Could not allocate user \'{$a->originaluserfullname}\' to cohort \'{$a->name}\'';
$string['errorcouldnotimportissue'] = 'Could not import issued certificate for \'{$a}\'';
$string['errorcoursesdonotexist'] = 'Some courses do not exist';
$string['errorcoursessameshortname'] = 'Courses with the same shortname already exist';
$string['errorcustomfielddoesnotexist'] = 'Custom field does not exist, could not import data \'{$a}\'';
$string['errorcustomfieldnotfound'] = 'Custom field field instance not found';
$string['errorcustomfieldnotfounddetail'] = 'Custom field \'{$a}\' not found';
$string['errornegativenumber'] = 'You must enter a non-negative number here.';
$string['eventcoursemodulereset'] = 'Course module reset for individual user';
$string['eventcoursereset'] = 'Course reset for individual user';
$string['eventexportcreated'] = 'Export created';
$string['eventexportdeleted'] = 'Export deleted';
$string['eventexportupdated'] = 'Export updated';
$string['eventimportcreated'] = 'Import created';
$string['eventimportdeleted'] = 'Import deleted';
$string['eventimportupdated'] = 'Import updated';
$string['export_content'] = 'Certificate template details';
$string['export_content_help'] = 'Certificate templates, pages and elements.';
$string['export_issued'] = 'Issued certificates';
$string['export_issued_help'] = 'Certificates issued to users. A copy of the users themselves will not be included.';
$string['exportcoursecategoriescontent'] = 'Course category details';
$string['exportcoursecategoriescontent_help'] = 'Include course category details. Categories\' role assignments and filters will not be included.';
$string['exportcoursecontent'] = 'Course structure';
$string['exportcoursecontent_help'] = 'This includes everything in the course except its content.

The exported file will contain the same settings as those set as default on this site when creating a standard course backup. No user data will be included.';
$string['exported'] = 'Exported';
$string['exporter'] = 'Exporter';
$string['exportercreatefrom'] = 'Create export from';
$string['exportercreatefrom_help'] = 'This option allows you to define whether you want to export entities from the whole site, or only those associated with the current tenant';
$string['exportercreatefromcurrenttenant'] = 'Current tenant';
$string['exporterdesc'] = 'Issued certificates and templates';
$string['exporterdescription'] = 'Courses without user data, using default course backup configuration';
$string['exporterdescriptioncategories'] = 'Course categories and subcategories';
$string['exporterdescriptioncohorts'] = 'Cohorts, including cohort members without user data';
$string['exporterdescriptionreports'] = 'Custom reports, including audience and schedule data';
$string['exporternotavailable'] = 'Exporter \'{$a}\' is not available here';
$string['exporternotfound'] = 'Could not find exporter \'{$a}\'';
$string['exporterrequirestenant'] = 'Exporter \'{$a}\' requires a tenant';
$string['exportersettingsinvalid'] = 'Exporter settings are not in valid JSON format';
$string['exportersettingsvalidationfailed'] = 'Exporter settings validation failed: {$a}';
$string['exportersunavailable'] = 'There are no available exporters for you to use';
$string['exportgeneralsettings'] = 'General settings';
$string['exportgeneralsettingsdesc'] = 'Select which exporter you want to use. On the next step you will be able to narrow down your selection and specify which elements you want to export.';
$string['exportimport'] = 'Migration';
$string['exportimportconflictsuffix'] = 'Add a numeric suffix to the \'{$a}\' field';
$string['exportimportentityunavailable'] = '{$a} (Not available)';
$string['exportimporterrorentityexists'] = 'An instance with the same \'{$a}\' already exists';
$string['exportimportfieldchanged'] = 'Changed field \'{$a->field}\' from \'{$a->from}\' to \'{$a->to}\'';
$string['exportimportsettings'] = 'Migration settings';
$string['exportimportsitecontent'] = 'Content: courses, categories, programs and certifications';
$string['exportimportsitedescription'] = 'Full site content including all tenants along with all entities contained within them. Course backups will include all content and user data except logs';
$string['exportimportsiteerror'] = 'Couldn\'t import site';
$string['exportimportsitesame'] = 'Cannot import into the same site the export originated from';
$string['exportimportsitesuccess'] = 'Imported site';
$string['exportimportstatuscompleted'] = 'Success';
$string['exportimportstatuscreated'] = 'Not ready';
$string['exportimportstatuserror'] = 'Error';
$string['exportimportstatusinprogress'] = 'In progress';
$string['exportimportstatusscheduled'] = 'Scheduled';
$string['exportimportuserfieldserror'] = 'Couldn\'t import user profile field \'{$a}\'';
$string['exportimportusersall'] = 'Select all users';
$string['exportimportusersdescription'] = 'Site and tenant users';
$string['exportimportuserserror'] = 'Couldn\'t create user \'{$a}\'';
$string['exportimportuserslanguseselected'] = 'Use selected language';
$string['exportimportusersmanual'] = 'Select users manually...';
$string['exportimportusersmissinglangerror'] = 'User language is missing in the system';
$string['exportimportusersmissinglangerrorlog'] = 'User language \'{$a->lang}\' is missing in the system';
$string['exportimportusersmnetconflict'] = 'MNet host value differs';
$string['exportimportusersmnetmatchlocal'] = 'Update value to match site';
$string['exportimportusersmnetuseexisting'] = 'Import with existing value';
$string['exportimportuserspicture'] = 'User pictures';
$string['exportimportusersprofile'] = 'User profiles';
$string['exportimportuserssuccess'] = 'Created user \'{$a}\'';
$string['exportimportuserssuspended'] = 'Include suspended users';
$string['exportimportuserstenant'] = 'Select all users from \'{$a}\'';
$string['exportnotfound'] = 'Export not found';
$string['exportnotfoundornotready'] = 'Export not found or not ready for importing';
$string['exportnotready'] = 'Export not ready for importing';
$string['exportoptions'] = 'Options';
$string['exportoptionsdesc'] = 'Specify which elements you want to export by selecting them.';
$string['exportreview'] = 'Review';
$string['exportreviewdesc'] = 'Check if everything is correct before exporting the file.';
$string['exports'] = 'Exports';
$string['exportselectallreports'] = 'Export all custom reports';
$string['exportselectlimitreports'] = 'Export specific custom reports...';
$string['exportstatus'] = 'Status';
$string['filecontent'] = 'File content';
$string['grade'] = 'Grade';
$string['idnumberchanged'] = 'ID number was changed from \'{$a->from}\' to \'{$a->to}\'';
$string['import_content'] = 'Certificate template details';
$string['import_content_help'] = 'Certificate templates, pages and elements.';
$string['import_issued'] = 'Issued certificates';
$string['import_issued_help'] = 'Issues of this certificate to users';
$string['importallselectedcategory'] = 'Import all in the selected category';
$string['importallsystemcontext'] = 'Import all in system context';
$string['importaudiencelogerror'] = 'Couldn\'t import audience record';
$string['importaudiencelogsuccess'] = 'Audience record imported';
$string['importchoosetenant'] = 'Choose tenant';
$string['importconflictcreatecourse'] = 'Create empty course';
$string['importconflictcreatecourseincategory'] = 'Create empty course in category \'{$a}\'';
$string['importconflictincategory'] = 'in category';
$string['importconflictinstances'] = 'Instances ({$a}):';
$string['importconflicts'] = 'Conflicts';
$string['importconflictsdesc'] = 'Solve the conflicts, if needed.';
$string['importconflictskip'] = 'Do not import';
$string['importcoursecontent'] = 'Course backups excluding user data';
$string['importcoursecontent_help'] = 'Import course backups for each selected instance';
$string['importdestination'] = 'Destination';
$string['imported'] = 'Imported';
$string['importeitherexportidorfile'] = 'Either exportid or file needs to be specified, but not both.';
$string['importer'] = 'Importer';
$string['importernotfound'] = 'Importer {$a} is either not found or not available';
$string['importerrequired'] = 'More than one importer is available, importer must be specified';
$string['importerrequirestenant'] = 'Importer \'{$a}\' requires a tenant';
$string['importersettingsinvalid'] = 'Importer settings are not in valid JSON format';
$string['importersettingsvalidationfailed'] = 'Importer settings validation failed: {$a}';
$string['importformat'] = 'File format';
$string['importformatauto'] = 'Detect automatically';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Workplace format';
$string['importfromfile'] = 'New import from this file';
$string['importgeneralsettings'] = 'General settings';
$string['importgeneralsettingsalt'] = 'Select the destination for the imported data. You will be able to specify which elements you want to import in the next step.';
$string['importhasconflits'] = 'Import has conflicts: {$a}';
$string['importincrementidnumber'] = 'Add a numeric suffix to the ID number';
$string['importintothecurrenttenant'] = 'Import into the current tenant';
$string['importlogerror'] = 'Could not import certificate template \'{$a->name}\'';
$string['importlogerrorinvalidaudience'] = 'Missing or invalid audience';
$string['importlogerrorinvalidreportsource'] = 'Missing or invalid report source';
$string['importlogerrorinvalidreporttype'] = 'Invalid report type';
$string['importlogerrorinvalidscheduleformat'] = 'Missing or invalid schedule format';
$string['importlogexception'] = 'Exception: {$a}';
$string['importlogfailed'] = 'Could not import course \'{$a->fullname}\'';
$string['importlogfailedcohort'] = 'Could not import cohort \'{$a->name}\'';
$string['importlogfailedcoursecategory'] = 'Could not import course category \'{$a->name}\'';
$string['importlogsuccess'] = 'Created new course \'<a href="{$a->url}">{$a->fullname}</a>\'';
$string['importlogsuccesscertificates'] = 'Created new certificate template \'<a href="{$a->url}">{$a->name}</a>\' with {$a->pagescount} pages and {$a->elementscount} elements';
$string['importlogsuccesscohort'] = 'Created new cohort \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccesscohortallocations'] = 'Allocated user \'{$a->userfullname}\' into cohort \'{$a->name}\'';
$string['importlogsuccesscoursecategory'] = 'Created new course category \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogsuccessissue'] = 'Created new certificate issue on \'{$a->template}\' to user: \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'Available for all tenants';
$string['importnotfound'] = 'Import not found';
$string['importoptions'] = 'Options';
$string['importoptionsdesc'] = 'Specify which elements you want to import by selecting them.';
$string['importproblem'] = 'Problem: {$a}';
$string['importproblemaffects'] = 'It affects:';
$string['importreportlogerror'] = 'Couldn\'t import report \'{$a}\'';
$string['importreportlogsuccess'] = 'Created new report \'<a href="{$a->url}">{$a->name}</a>\' with {$a->columncount} columns, {$a->conditioncount} conditions and {$a->filtercount} filters';
$string['importreview'] = 'Review';
$string['importreviewdesc'] = 'Check if everything is correct before importing the file.';
$string['imports'] = 'Imports';
$string['importschedulelogerror'] = 'Couldn\'t import schedule record';
$string['importschedulelogsuccess'] = 'Schedule record imported';
$string['importselectallreports'] = 'Import all custom reports';
$string['importselectlimitreports'] = 'Import specific custom reports...';
$string['importselectsource'] = 'Select source';
$string['importselectsourcedesc'] = 'Upload a valid CSV or Moodle Workplace file. On the next steps you\'ll be able to define which elements you want to import from the file.';
$string['importselecttenant'] = 'Select tenant...';
$string['importsetidnumbertoempty'] = 'Set ID number to empty string';
$string['importsolution'] = 'Solution:';
$string['importstatus'] = 'Status';
$string['importunknownerror'] = 'Unknown error {$a}';
$string['importunknownformat'] = 'Unable to detect the file format from extension, please select format';
$string['includecoursecontent'] = 'Include course content';
$string['includecoursecontent_help'] = 'Include all course content like activities, filters, calendar events, etc.

The exported file will contain the same settings as those set as default on this site when creating a standard course backup. No user data will be included.';
$string['instances'] = 'Instances';
$string['instancescount'] = 'Instances ({$a}):';
$string['invaliddevice'] = 'You are trying to access a Moodle Workplace site using the Moodle app. Please download the Moodle Workplace app to continue';
$string['loading'] = 'Loading...';
$string['log'] = 'Log';
$string['managecoursecategories'] = 'Manage course categories';
$string['mappingerrorbadgeheader'] = 'Some badges do not exist';
$string['mappingerrorbadgelog'] = 'Badge {$a} was not found';
$string['mappingerrorcertificateheader'] = 'Some certificate templates do not exist';
$string['mappingerrorcertificatelog'] = 'Certificate {$a} was not found';
$string['mappingerrorcohortheader'] = 'Some cohorts do not exist';
$string['mappingerrorcohortlog'] = 'Cohort {$a} was not found';
$string['mappingerrorcompetencyheader'] = 'Some competencies do not exist';
$string['mappingerrorcompetencylog'] = 'Competency {$a} was not found';
$string['mappingerrorcontextnotfound'] = 'Context was not found';
$string['mappingerrorcoursenotfound'] = 'Course {$a} was not found';
$string['mappingerroruserfieldheader'] = 'Some user profile fields do not exist';
$string['mappingerroruserfieldlog'] = 'User profile field {$a} was not found';
$string['mappingerrorusernotfound'] = 'Could not find user {$a} in current tenant';
$string['mappingnoticecoursecreated'] = 'Empty course <a href="{$a->courseurl}">{$a->fullname}</a> was created';
$string['mappingnoticecourseidnumber'] = 'A course with short name \'{$a->shortname}\' was not found. <a href="{$a->courseurl}">Another course</a> with the idnumber \'{$a->idnumber}\' was found, but this course has a different short name';
$string['mappingnoticeuseremail'] = 'A user with username \'{$a->username}\' was not found. <a href="{$a->profileurl}">Another user</a> with the email {$a->email} was found, but this user has a different username';
$string['messagefullexportcomplete'] = 'Your export was completed on {$a->date}

Status: {$a->status}

Click <a href="{$a->url}">here</a> to view the details';
$string['messagefullimportcomplete'] = 'Your import was completed on {$a->date}

Status: {$a->status}

Click <a href="{$a->url}">here</a> to view the details';
$string['messageprovider:exportcomplete'] = 'Export completed';
$string['messageprovider:importcomplete'] = 'Import completed';
$string['migrationcannotswitchtenant'] = 'Tenant with id or idnumber {$a} is not found or you are not allowed to switch to it';
$string['migrationnotenanterror'] = 'Options tenant and notenant can not be used together';
$string['migrationreportaudiences'] = 'Audiences';
$string['migrationreportdefinition'] = 'Report definition';
$string['migrationreportdefinition_help'] = 'Include report columns, conditions and filters';
$string['migrationreportschedules'] = 'Schedules';
$string['migrationschoosefrom'] = 'Choose from';
$string['noavailableimporter'] = 'We could not find an available importer for this file.';
$string['noavailableimporters'] = 'No available importers';
$string['nocategoriesavailable'] = 'There are no available categories';
$string['noconflictsfound'] = 'No conflicts were found';
$string['nodetails'] = 'No details found';
$string['nonproductionsite'] = 'Non-production site';
$string['nonproductionsitemessage'] = 'This is a non-production site';
$string['nopermissioncategoryimport'] = 'You don\'t have permission to import in this category.';
$string['nopermissioncategoryrestore'] = 'You don\'t have permission to restore in this category.';
$string['nopermissionform'] = 'You don\'t have permission to access this form.';
$string['nopermissiontab'] = 'You don\'t have permission to access this page.';
$string['nothing'] = 'Nothing';
$string['nothingtoexport'] = 'Nothing to export';
$string['nothingtoimport'] = 'Nothing to import';
$string['notpossible'] = 'Not possible';
$string['numhour'] = '{$a} hour';
$string['outcomes'] = 'Outcomes';
$string['performanceinfo'] = 'Tab performance information (DB reads/writes: {$a->reads}/{$a->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:certificationid'] = 'The certification id where this course comes from.';
$string['privacy:metadata:courseid'] = 'The course that was reseted.';
$string['privacy:metadata:exportcreatedby'] = 'The ID of the user who performed the export.';
$string['privacy:metadata:exportstatus'] = 'The status of the export.';
$string['privacy:metadata:grade'] = 'Grade the user had on the course before it was reseted.';
$string['privacy:metadata:importcreatedby'] = 'The ID of the user who performed the import.';
$string['privacy:metadata:importstatus'] = 'The status of the import.';
$string['privacy:metadata:programid'] = 'The program id where this course comes from.';
$string['privacy:metadata:reason'] = 'The reason why this course was reseted.';
$string['privacy:metadata:resetinfo'] = 'Information about what has been reset in the course.';
$string['privacy:metadata:resetstatus'] = 'Status of the reset.';
$string['privacy:metadata:tenantid'] = 'The ID of the related tenant.';
$string['privacy:metadata:timecreated'] = 'The creation time.';
$string['privacy:metadata:timemodified'] = 'The modified time.';
$string['privacy:metadata:timerequested'] = 'Time were reset was requested.';
$string['privacy:metadata:tool_wp_course_reset'] = 'Course reset.';
$string['privacy:metadata:tool_wp_export'] = 'Information about exports performed on the site.';
$string['privacy:metadata:tool_wp_import'] = 'Information about imports performed on the site.';
$string['privacy:metadata:userid'] = 'The user that had the course reseted.';
$string['privacy:metadata:usermodified'] = 'The user modified.';
$string['privacy:metadata:userrequested'] = 'User who requested the course reset.';
$string['privacy:metadata:wascompleted'] = 'If course was completed by user before reset.';
$string['problem'] = 'Problem';
$string['proceed'] = 'Proceed';
$string['processing'] = 'Processing';
$string['productionsite'] = 'Production site';
$string['productionstate'] = 'Production state';
$string['productionstatedesc'] = 'Non-production sites will display a disclaimer in the bottom right corner of the screen.';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'Reason for reset';
$string['recovercoursegrades'] = 'When enabling this setting make sure to also enable the \'Delete grades history during course reset\' setting.';
$string['refresh'] = 'Refresh';
$string['reg_moodleproduct'] = 'Moodle product ({$a})';
$string['reg_wpactiveusers'] = 'Number of unique users who logged in last month ({$a})';
$string['reg_wpcertificates'] = 'Number of certificates ({$a})';
$string['reg_wpcertificatesissues'] = 'Number of issued certificates ({$a})';
$string['reg_wpparticipantnumberaverage'] = 'Average number of active participants last month ({$a})';
$string['reg_wpplugins'] = 'List of installed and enabled plugins, number of instances ({$a})';
$string['reg_wpproductionstate'] = 'Production state ({$a})';
$string['resetinfo'] = 'Reset information';
$string['resetstatus'] = 'Reset status';
$string['safenavigation'] = 'It is safe to continue navigating on the site.';
$string['selectallcategoriesinthisfile'] = 'Select all course categories in this file';
$string['selectallcohortsinthisfile'] = 'Select all cohorts in this file';
$string['selectallcoursesinthisfile'] = 'Select all courses in this file';
$string['selectalltemplates'] = 'Select all certificate templates';
$string['selectalltemplatesinfile'] = 'Select all certificate templates in this file';
$string['selectatleastonecategory'] = 'Select at least one category';
$string['selectatleastonecohort'] = 'Select at least one cohort';
$string['selectatleastonecourse'] = 'Select at least one course';
$string['selectatleastonetemplate'] = 'Select at least one template';
$string['selectcoursecategory'] = 'Select course category';
$string['selectcoursesmanually'] = 'Select courses manually...';
$string['selectedcoursecategory'] = 'Selected course category: {$a}';
$string['selectexporter'] = 'Select exporter';
$string['selectimporter'] = 'Select importer';
$string['selectmanually'] = 'Select manually...';
$string['selectmanuallycategories'] = 'Select categories and subcategories manually';
$string['selectmanuallycertificates'] = 'Select certificate templates manually';
$string['shortnamechanged'] = 'Shortname changed from \'{$a->from}\' to \'{$a->to}\'';
$string['showless'] = 'Show less';
$string['showxmore'] = 'Show {$a} more...';
$string['solution'] = 'Solution';
$string['stepx'] = 'Step {$a}.';
$string['tenant'] = 'Tenant';
$string['thissite'] = '(This site)';
$string['timerequested'] = 'Time requested';
$string['timereseted'] = 'Time reset';
$string['uploadimportfile'] = 'Upload a file';
$string['userrequested'] = 'User who requested';
$string['viewexport'] = 'View export';
$string['viewimport'] = 'View import';
$string['viewlicense'] = 'View license';
$string['wascompleted'] = 'Was completed';
$string['willbeimported'] = 'Will be imported';
$string['workplacelicenseheader'] = 'Moodle Workplace license';
$string['workplacelicensenew'] = 'Moodle Workplace - Copyright © 2018 onwards, Moodle Pty Ltd
Moodle  - Copyright © 1999 onwards, Martin Dougiamas

Moodle Workplace™ Code is the collection of software scripts (plugins and modifications, and any derivations thereof) that are exclusively owned and licensed by Moodle under the terms of this proprietary Moodle Workplace Licence("MWL") alongside Moodle’s open software package ("Core") offering which itself is freely downloadable at "download.moodle.org" and which is provided by Moodle under a single GNU General Public Licence version 3.0, dated 29 June 2007("GPL"). MWL is strictly controlled by Moodle Pty Ltd and its certified premium partners. Wherever conflicting terms exist, the terms of the MWL are binding and shall prevail.

The Moodle Core software package governed by GPL is subject to copyright protection from 1999 onwards by Martin Dougiamas with portions contributed/copyrighted by other contributors. Such Moodle® open software and corresponding documentation are distributed in the hope that they will be useful, but without any warranty; without even the implied warranty of merchantability or fitness for a particular purpose.

By accessing Moodle Workplace™ that is governed by the MWL you agree that you have signed an MWL with Moodle Pty Ltd ensuring (among other things) that you:
- will not possess the Moodle Workplace™ Code without being subject to the terms of the MWL;
- will cease using Moodle Workplace™ and immediately delete all copies of the Moodle Workplace™ Code from your servers and any computers under your control if you are no longer a Moodle Certified Premium Partner or a client of a Moodle Certified Premium Partner. You must confirm this in writing to Moodle within 7 days of such event occurring;
- will not distribute copies of Moodle Workplace™ Code to any third party not a party to the MWL that you have signed and you must indemnify Moodle for any loss suffered by Moodle due to failure by you to comply with the MWL;
- agree that any improvements to Moodle Workplace™ Code must be explicitly shared with Moodle Pty Ltd and its certified premium partners, with such rights in the improvements assigned to Moodle Pty Ltd thereby allowing Moodle Pty Ltd full rights to include such improvements in future versions of Moodle Workplace™ Code.
- indemnify and hold both Moodle Pty Ltd and its certified premium partners harmless for any damages, fines, penalties, or other liability arising out of any data input by you and your end users.

Moodle Workplace™ websites may include a tracking pixel for statistical purposes and compliance monitoring. No personal data is collected or processed, only the site URL.

This is a summary only: for the full terms of the MWL please refer to the MWL you have signed.';
$string['workplacelicensenotagreed'] = 'You can not view this content until the site administrator agrees to the Moodle Workplace license.';
$string['wp:manageexportimport'] = 'Manage Workplace export/import';
$string['wp:useexportimport'] = 'Use Workplace export/import';
