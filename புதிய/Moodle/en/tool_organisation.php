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
 * Strings for component 'tool_organisation', language 'en', version '4.0'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['addchilddepartment'] = 'New subdepartment for department \'{$a}\'';
$string['addchildposition'] = 'New subposition for position \'{$a}\'';
$string['adddepartment'] = 'New department for framework \'{$a}\'';
$string['adddepartmentframework'] = 'New department framework';
$string['addjob'] = 'New job';
$string['addjobforuser'] = 'New job for \'{$a}\'';
$string['addnewdepartment'] = 'New department';
$string['addnewposition'] = 'New position';
$string['addposition'] = 'New position for framework \'{$a}\'';
$string['addpositionframework'] = 'New position framework';
$string['allframeworks'] = 'Department and position frameworks';
$string['anydepartment'] = 'Any';
$string['anymanager'] = 'Manager or department lead';
$string['anyposition'] = 'Any';
$string['assfirstchildof'] = 'As the first child of \'{$a}\'';
$string['assignnewjob'] = 'Assign another job for this user';
$string['audienceand'] = 'And';
$string['audiencecustomise'] = 'Customise...';
$string['audiencejobdescription'] = 'Users in department: {$a->department}<br />
With position: {$a->position}';
$string['audiencemanager'] = 'Managers';
$string['audiencemanagerdescription'] = 'Permissions: {$a->permissions}';
$string['audienceor'] = 'Or';
$string['audienceselect'] = 'Relation to the report viewer';
$string['audienceselectinitial'] = 'Select audience';
$string['audienceself'] = 'Themselves';
$string['audienceusersall'] = 'All users';
$string['audienceusersdept'] = 'In the same department as the report viewer';
$string['audienceusersreporting'] = 'Reports to the report viewer';
$string['audienceusersreporting_help'] = 'Include users who report to the report viewer (who should have a manager position themselves)

A direct report is a managed user in a position that is a direct child of the managers position';
$string['audienceusersreportingdirect'] = 'Direct reports only';
$string['cachedef_myjob'] = 'Job of current user and their team';
$string['conditioncanallocateprograms'] = 'Can allocate to programs';
$string['conditioncanreceivenotifications'] = 'Can receive notifications';
$string['conditionuserdepartment'] = 'User is in department';
$string['conditionuserdepartmentdescription'] = 'Users who have a job in the department \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Users who don\'t have a job in the department \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'Users who have a job in the department \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserdepartmentsallcriteria'] = 'User has jobs in all of the selected departments';
$string['conditionuserdepartmentsalldescription'] = 'Users who have jobs in all of the following departments at the same time: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionnegated'] = 'Users who don\'t have jobs in all of the following departments at the same time: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionwithdate'] = 'Users who have jobs in all of the following departments at the same time: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserdepartmentsanycriteria'] = 'User has a job in any of the selected departments';
$string['conditionuserdepartmentsanycriteria_help'] = 'When a user already has a job in one selected department, getting a new job in the second one does not trigger the actions again';
$string['conditionuserdepartmentsanydescription'] = 'Users who have a job in any of the following departments: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionnegated'] = 'Users who don\'t have a job in any of the following departments: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionwithdate'] = 'Users who have a job in any of the following departments: \'{$a->deptname}\'<br />
Sub-departments: {$a->subdeptsinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserdepartmentseachcriteria'] = 'Every time a user gets a job in any of the selected departments';
$string['conditionuserdepartmentseachcriteria_help'] = 'Equivalent of creating multiple rules, one for each of the selected departments';
$string['conditionusernotindepartment'] = 'User is not in department';
$string['conditionuserposition'] = 'User has position';
$string['conditionuserpositiondescription'] = 'Users who have position \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Users who don\'t have position \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'Users who have position \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserpositionsallcriteria'] = 'User has jobs in all of the selected positions';
$string['conditionuserpositionsalldescription'] = 'Users who have jobs in all of the following positions at the same time: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionnegated'] = 'Users who don\'t have jobs in all of the positions at the same time: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionwithdate'] = 'Users who have jobs in all of the following positions at the same time: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserpositionsanycriteria'] = 'User has a job in any of the selected positions';
$string['conditionuserpositionsanycriteria_help'] = 'When a user already has a job in one selected position, getting a new job in the second one does not trigger the actions again';
$string['conditionuserpositionsanydescription'] = 'Users who have a job in any of the following positions: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionnegated'] = 'Users who don\'t have a job in any of the following positions: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionwithdate'] = 'Users who have a job in any of the following positions: \'{$a->posname}\'<br />
Sub-positions: {$a->subposinclude}<br />
On or after: {$a->conditiondate}';
$string['conditionuserpositionseachcriteria'] = 'Every time user gets a job in any of the selected positions';
$string['conditionuserpositionseachcriteria_help'] = 'Equivalent of creating multiple rules, one for each of the selected positions';
$string['conditionuserwithoutposition'] = 'User doesn\'t have position';
$string['creategenericframework'] = 'Create a generic framework';
$string['current'] = 'Current: {$a}';
$string['delete'] = 'Delete';
$string['deletedepartment'] = 'Delete department \'{$a}\'';
$string['deletedepartmentconfirm'] = 'Are you sure you want to delete the department \'{$a}\'?';
$string['deletedepartmentframework'] = 'Delete department framework \'{$a}\'';
$string['deletedepartmentframeworkconfirm'] = 'Are you sure you want to delete the department framework \'{$a}\'?';
$string['deletejob'] = 'Delete job completely';
$string['deleteposition'] = 'Delete position \'{$a}\'';
$string['deletepositionconfirm'] = 'Are you sure you want to delete the position \'{$a}\'?';
$string['deletepositionframework'] = 'Delete position framework \'{$a}\'';
$string['deletepositionframeworkconfirm'] = 'Are you sure you want to delete the position framework \'{$a}\'?';
$string['department'] = 'Department';
$string['department_help'] = 'Select department';
$string['departmentandpositionrequiredforjobcreate'] = 'Departments and positions need to be created to proceed with job assignments';
$string['departmentdeleted'] = 'Department has been deleted successfully';
$string['departmentdescription'] = 'Description';
$string['departmentframework'] = 'Department framework';
$string['departmentframeworkidnumber'] = 'Department framework idnumber';
$string['departmentframeworkpostfix'] = '{$a} (Department framework)';
$string['departmentframeworks'] = 'Department frameworks';
$string['departmentfrmidnumberconflict'] = 'Department framework ID numbers already exist';
$string['departmenthasjobs'] = 'Department cannot be deleted because there are jobs associated with it.';
$string['departmentidentifier'] = 'Department identifier';
$string['departmentidentifier_help'] = 'This is the column which identifies the row in the CSV, it will be used to find the parent';
$string['departmentidnumber'] = 'ID number';
$string['departmentidnumberconflict'] = 'Department ID numbers already exist';
$string['departmentmanagementicons'] = 'Department management icons';
$string['departmentmanager'] = 'Department lead';
$string['departmentmanager_help'] = 'A person with the department lead job will be considered a manager of anyone in the same department or a subdepartment, regardless of their position.';
$string['departmentname'] = 'Name';
$string['departmentnotfound'] = 'Department not found';
$string['departmentparent'] = 'Parent';
$string['departmentrequiredforjobcreate'] = 'Departments need to be created to proceed with job assignments';
$string['departments'] = 'Departments';
$string['departmentwithicons'] = 'Department with permissions';
$string['details'] = 'Details';
$string['editdates'] = 'Edit dates';
$string['editdepartment'] = 'Edit department \'{$a}\'';
$string['editdepartmentframework'] = 'Edit department framework \'{$a}\'';
$string['editdepartmentname'] = 'Edit name';
$string['editjobdatesforuser'] = 'Edit job dates for \'{$a}\'';
$string['editposition'] = 'Edit position \'{$a}\'';
$string['editpositionframework'] = 'Edit position framework \'{$a}\'';
$string['editpositionname'] = 'Edit name';
$string['enddate'] = 'End date';
$string['enddate_help'] = 'End date of job';
$string['enddaterelativetostart'] = 'Relative to start date';
$string['entitydepartment'] = 'Department';
$string['entityjob'] = 'Job';
$string['entityposition'] = 'Position';
$string['errorcreatingdepartment'] = 'An error occurred while creating the department. Please try again.';
$string['errorcreatingjob'] = 'An error occurred while creating the job. Please try again.';
$string['errorcreatingposition'] = 'An error occurred while creating the position. Please try again.';
$string['errorcsvcantuseframeworkidnumber'] = 'Framework id and idnumber can\'t be used at the same time';
$string['errorcsvinvalidframeworkidnumber'] = 'Framework with this idnumber does not exist or not available';
$string['errorcsvinvalidparentmapping'] = 'Mapping for the field \'Parent\' can not be the same as identifier';
$string['errorcsvnohierarchy'] = 'When hierarchy is not selected, the \'Parent\' column can not have mapping';
$string['errorcsvnoparent'] = 'When hierarchy is selected, the \'Parent\' column must have mapping';
$string['erroridnumberdepartment'] = 'Department with ID number \'{$a}\' already exists';
$string['erroridnumberposition'] = 'Position with ID number \'{$a}\' already exists';
$string['errorinvaliddepartment'] = 'Invalid department';
$string['errorinvalidenddate'] = 'Invalid dates, end date should be greater than start date';
$string['errorinvalidjobenddate'] = 'Invalid end date format';
$string['errorinvalidjobstartdate'] = 'Invalid start date format';
$string['errorinvalidposition'] = 'Invalid position';
$string['errorjobscannotbeimported'] = 'Jobs can not be imported into Shared space';
$string['errormovehierarchy'] = 'An error occurred while moving the position or department to another hierarchy location.';
$string['errorparentnotfound'] = 'Parent not found';
$string['errorparentnotfounddepartment'] = 'Parent not found for department with id number \'{$a}\'';
$string['errorparentnotfoundposition'] = 'Parent not found for position with id number \'{$a}\'';
$string['errorsameidnumberdepartment'] = 'Department with the same ID number already exists';
$string['errorsameidnumberposition'] = 'Position with the same ID number already exists';
$string['eventdepartmentcreated'] = 'Department created';
$string['eventdepartmentdeleted'] = 'Department deleted';
$string['eventdepartmentupdated'] = 'Department updated';
$string['eventjobcreated'] = 'Job created';
$string['eventjobdeleted'] = 'Job deleted';
$string['eventjobupdated'] = 'Job updated';
$string['eventpositioncreated'] = 'Position created';
$string['eventpositiondeleted'] = 'Position deleted';
$string['eventpositionupdated'] = 'Position updated';
$string['expanddepartmentframework'] = 'Expand department framework \'{$a}\'';
$string['expandpositionframework'] = 'Expand position framework \'{$a}\'';
$string['exporterjobs'] = 'Organisation structure jobs';
$string['exporterjobsdesc'] = 'Jobs with their associated department and position frameworks';
$string['exporterorgstructure'] = 'Organisation structure frameworks';
$string['exporterorgstructuredesc'] = 'Frameworks with the whole hierarchy for departments and/or positions';
$string['exportframeworkssettings'] = 'Descriptions, hierarchy and permissions';
$string['frameworks'] = 'Frameworks';
$string['fullcompletionreport'] = 'Overdue programs';
$string['fullname'] = 'User';
$string['globalmanagementicons'] = 'Manager icons';
$string['globalmanager'] = 'Manager';
$string['globalmanager_help'] = 'A person with the manager job will be considered a manager of anyone in a lower position, regardless of their departments.';
$string['hascurrentjobs'] = 'Has current jobs';
$string['hasjobdepartment'] = 'Has job in department';
$string['hasjobposition'] = 'Has job in position';
$string['hierarchy'] = 'Hierarchy';
$string['hierarchydepartments'] = 'Hierarchy of departments...';
$string['hierarchypositions'] = 'Hierarchy of positions...';
$string['importerdepartmentscsv'] = 'Departments importer (CSV)';
$string['importerdepartmentscsvdesc'] = 'Departments with or without hierarchy to be imported into a framework';
$string['importerpositionscsv'] = 'Positions importer (CSV)';
$string['importerpositionscsvdesc'] = 'Positions with or without hierarchy to be imported into a framework';
$string['importlogdeptfailed'] = 'Could not import department \'{$a->name}\'';
$string['importlogdeptfrmfailed'] = 'Could not import department framework \'{$a->name}\'';
$string['importlogdeptfrmsuccess'] = 'Created new department framework \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogdeptsuccess'] = 'Created new department \'{$a->name}\'';
$string['importlogidnumberexistsdepartment'] = 'Department with ID number \'{$a->originalidnumber}\' already exists';
$string['importlogidnumberexistsposition'] = 'Position with ID number \'{$a->originalidnumber}\' already exists';
$string['importlogjobfailed'] = 'Could not import job for \'{$a->userfullname}\' - {$a->position} ({$a->department})';
$string['importlogjobsuccess'] = 'Created new job for \'<a href="{$a->url}">{$a->userfullname}</a>\' - {$a->position} ({$a->department})';
$string['importlogposfailed'] = 'Could not import position \'{$a->name}\'';
$string['importlogposfrmfailed'] = 'Could not import position framework \'{$a->name}\'';
$string['importlogposfrmsuccess'] = 'Created new position framework \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogpossuccess'] = 'Created new position \'{$a->name}\'';
$string['include_shared_entities'] = 'Include shared entities';
$string['include_shared_entities_help'] = 'By enabling this option, the exported file will also contain all shared frameworks available in the current tenant';
$string['jobcreated'] = 'Job created';
$string['jobdeleteconfirm'] = 'Are you sure you want to delete this job and all associated data?<br />
If you want to keep this job\'s data for future consultation, you should consider setting this job as finished instead.<br />
<br />This action cannot be undone.';
$string['jobdeleted'] = 'Job deleted';
$string['jobfrom'] = 'From {$a}';
$string['jobfromto'] = 'From {$a->from} to {$a->to}';
$string['jobname'] = '{$a->position} in {$a->department}';
$string['jobnotfound'] = 'Job not found';
$string['jobpositiondepartment'] = 'Position and department';
$string['jobs'] = 'Job assignments';
$string['jobsnumber'] = 'Jobs';
$string['jobsnumber_help'] = 'Shows active and past jobs.<br /> For example \'10 (2)\' means that there are 10 active jobs and 2 jobs in the past.';
$string['jobstartdateafter'] = 'Job start date is on or after';
$string['jobtenantdoesnotmatch'] = 'Job tenant does not match user tenant';
$string['jobtransfered'] = 'User transfered to a new job';
$string['jobupdated'] = 'Job updated';
$string['learning'] = 'Learning';
$string['listdeptsnohierarchy'] = 'List of departments with no hierarchy';
$string['listposnohierarchy'] = 'List of positions with no hierarchy';
$string['mappingerrordeptnotfound'] = 'A department {$a} was not found';
$string['mappingerrorposnotfound'] = 'A position {$a} was not found';
$string['mappingnoticenodeptidnumber'] = 'The department was located by name because ID number was empty. It is recommended to assign ID numbers to departments';
$string['mappingnoticenoposidnumber'] = 'The position was located by name because ID number was empty. It is recommended to assign ID numbers to positions';
$string['missingdepartment'] = 'Department is missing';
$string['missingposition'] = 'Position is missing';
$string['missingusers'] = 'Missing user(s)';
$string['movedepartmentframework'] = 'Move department framework \'{$a}\'';
$string['movepositionframework'] = 'Move position framework \'{$a}\'';
$string['myteams'] = 'Teams';
$string['newframework'] = 'New framework';
$string['newnamefor'] = 'New name for \'{$a}\'';
$string['notification'] = 'Notification';
$string['notificationcannotcreatejobs'] = 'Before assigning jobs to users, create some departments and positions.';
$string['onlycurrent'] = 'Only current';
$string['onlyfuture'] = 'Only future';
$string['onlypast'] = 'Only past';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Allocate users to programs/certifications';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Department lead: Allocate users to programs/certifications';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Allocate users to programs/certifications';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Manager: Allocate users to programs/certifications';
$string['organisation:assignjobs'] = 'Assign jobs';
$string['organisation:managedepartments'] = 'Manage departments';
$string['organisation:managepositions'] = 'Manage positions';
$string['organisation:receivenotificationsdept'] = 'Receive notifications';
$string['organisation:receivenotificationsdept_help'] = 'Department lead: Receive notifications';
$string['organisation:receivenotificationsglob'] = 'Receive notifications';
$string['organisation:receivenotificationsglob_help'] = 'Manager: Receive notifications';
$string['organisation:viewusersreportdept'] = 'View user reports';
$string['organisation:viewusersreportdept_help'] = 'Department lead: View user reports';
$string['organisation:viewusersreportglob'] = 'View user reports';
$string['organisation:viewusersreportglob_help'] = 'Manager: View user reports';
$string['organisationadmintab'] = 'Organisation';
$string['orgfiltercustomise'] = 'Customise';
$string['orgfilterdirectreports'] = 'Show my own direct reports only';
$string['orgfiltereverybody'] = 'Show everybody reporting to me';
$string['orgstructure'] = 'Organisation structure';
$string['parent'] = 'Parent';
$string['parentidchanged'] = 'Specified parent department \'{$a}\' could not be found. The department was created directly under the framework.';
$string['parentidchangedposition'] = 'Specified parent position \'{$a}\' could not be found. The position was created directly under the framework.';
$string['parentsameiderror'] = 'Parent element cannot be itself';
$string['pluginname'] = 'Organisation structure';
$string['position'] = 'Position';
$string['position_help'] = 'Select position';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'Position has been deleted successfully.';
$string['positiondescription'] = 'Description';
$string['positionframework'] = 'Position framework';
$string['positionframeworkidnumber'] = 'Position framework idnumber';
$string['positionframeworkpostfix'] = '{$a} (Position framework)';
$string['positionframeworks'] = 'Position frameworks';
$string['positionfrmidnumberconflict'] = 'Position framework ID numbers already exist';
$string['positionhasjobs'] = 'Position cannot be deleted because there are jobs associated with it.';
$string['positionidentifier'] = 'Position identifier';
$string['positionidentifier_help'] = 'This is the column which identifies the row in the CSV, it will be used to find the parent';
$string['positionidnumber'] = 'ID number';
$string['positionidnumberconflict'] = 'Position ID numbers already exist';
$string['positionname'] = 'Name';
$string['positionnotfound'] = 'Position not found';
$string['positionparent'] = 'Parent';
$string['positionpermissions'] = 'Permissions';
$string['positionrequiredforjobcreate'] = 'Positions need to be created to proceed with job assignments.';
$string['positions'] = 'Positions';
$string['positionwithicons'] = 'Position with permissions';
$string['previousjobdatenote'] = 'The previous job will be set as finished one day before the new job starts.';
$string['privacy:metadata:department'] = 'Job department';
$string['privacy:metadata:enddate'] = 'When this job ends';
$string['privacy:metadata:jobssummary'] = 'Jobs summary';
$string['privacy:metadata:position'] = 'Job position';
$string['privacy:metadata:startdate'] = 'When this job starts';
$string['privacy:metadata:timecreated'] = 'When this job was created';
$string['privacy:metadata:timemodified'] = 'When this job was last modified';
$string['privacy:metadata:userid'] = 'User id';
$string['reg_wpdepartmentframeworks'] = 'Number of department frameworks ({$a})';
$string['reg_wpdepartments'] = 'Number of departments ({$a})';
$string['reg_wpjobs'] = 'Number of jobs ({$a})';
$string['reg_wppositionframeworks'] = 'Number of position frameworks ({$a})';
$string['reg_wppositions'] = 'Number of positions ({$a})';
$string['rolemanager'] = 'Organisation structure manager';
$string['rolemanagerdescription'] = 'Allows to create and manage jobs, positions and departments within the current tenant';
$string['ruleoutcomeassignjob'] = 'Assign job';
$string['ruleoutcomeassignjobdesc'] = 'Assign job in department \'{$a->department}\' with position \'{$a->position}\'';
$string['ruleoutcomeassignjobdescwithdates'] = 'Assign job in department \'{$a->department}\' with position \'{$a->position}\'<br />
Start date: {$a->startdate}<br />
End date: {$a->enddate}';
$string['ruleoutcomeassignjobstartruledate'] = 'Date of rule execution';
$string['ruleoutcomeassignjobstartuserdate'] = 'Date of user creation';
$string['selectallactivejobs'] = 'Select all active jobs';
$string['selectalldepartmentframeworks'] = 'Select all department frameworks';
$string['selectallframeworks'] = 'Select all department and position frameworks';
$string['selectalljobs'] = 'Select all active and past jobs';
$string['selectalljobsinfile'] = 'Select all jobs in this file';
$string['selectalljobsinframeworks'] = 'Select all jobs in any of the selected frameworks...';
$string['selectallpositionframeworks'] = 'Select all position frameworks';
$string['selectdate'] = 'Select date...';
$string['selectexistingframework'] = 'Select existing framework';
$string['selectjobsinframeworks'] = 'Select all jobs from specific frameworks...';
$string['setjobfinished'] = 'Set job as finished';
$string['showjobs'] = 'Show jobs';
$string['showpastjobs'] = 'Show past jobs';
$string['somedepartmentsdonotexist'] = 'Some departments do not exist';
$string['somepositionsdonotexist'] = 'Some positions do not exist';
$string['startdate'] = 'Start date';
$string['startdate_help'] = 'Start date of job';
$string['timecreated'] = 'Time created';
$string['toomanyparentstoshow'] = 'Too many parents to show.';
$string['transfertojob'] = 'Transfer \'{$a}\' to a new job';
$string['transfertonewjob'] = 'Transfer this user to a new job';
$string['usernotfound'] = 'User not found';
$string['users'] = 'Select users';
$string['users_help'] = 'Search and select users for job assignment';
$string['validationmsgdeptposchangejob'] = 'Either the department or the position have to be different from the current ones.';
$string['validationmsgedateonsdate'] = 'The end date must be after the start date.';
$string['validationmsgedateonsdatechangejob'] = 'The start date of the new job date must be after the start date of the old job.';
$string['withoutpermission'] = 'Without permission \'{$a}\'';
$string['withpermission'] = 'With permission \'{$a}\'';
$string['withsubdepartments'] = 'Include subdepartments';
$string['withsubpositions'] = 'Include subpositions';
