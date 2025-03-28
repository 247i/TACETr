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
 * Strings for component 'tool_mergeusers', language 'en', version '4.0'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Choose users to merge';
$string['clear_selection'] = 'Clear current user selection';
$string['cligathering:description'] = 'Introduce pairs of user\'s id to merge the first one into the\\n
second one. The first user id (fromid) will \'lose\' all its data to be \'migrated\'\\n
into the second one (toid). The user \'toid\' will include data from both users.';
$string['cligathering:fromid'] = 'Source user id (fromid):';
$string['cligathering:stopping'] = 'To stop merging, Ctrl+C or type -1 either on fromid or toid fields.';
$string['cligathering:toid'] = 'Target user id   (toid):';
$string['dbko_no_transactions'] = '<strong>Merge failed!</strong> <br/>Your database engine
    does not support transactions. Therefore, your database <strong>has been updated</strong>.
    Your database status may be inconsistent. <br/>But, take a look at the merging log
    and, please, inform about the error to plugin developers. You will get a solution
    in short time. After updating the plugin to its last version, which will include the solution
    to that problem, repeat the merging action to complete it with success.';
$string['dbko_transactions'] = '<strong>Merge failed!</strong> <br/>Your database engine
    supports transactions. Therefore, the whole current transaction has been rolled back
    and <strong>no modification has been made to your database</strong>.';
$string['dbok'] = 'Merge successful';
$string['deleted'] = 'User with ID {$a} was deleted';
$string['error_return'] = 'Return to search form';
$string['errorsameuser'] = 'Trying to merge the same user';
$string['errortransactionsonly'] = 'Error: transactions are required, but your database type {$a}
    does not support them. If needed, you can allow merging users without transactions.
    Please, review plugin settings to set up them accordingly.';
$string['eventusermergedfailure'] = 'Merge failed';
$string['eventusermergedsuccess'] = 'Merging success';
$string['excluded_exceptions'] = 'Exclude exceptions';
$string['excluded_exceptions_desc'] = 'Experience on this subject suggests
    that all these database tables should be excluded from merging. See
    README for more details. <br>
    Therefore, for applying default plugin behaviour, you need to choose \'{$a}\'
    to exclude all those tables from the merging process (recommended).<br>
    If you prefer, you can exclude any of those tables and include them in the
    merging process (not recommended).';
$string['exportlogs'] = 'Export logs as CSV';
$string['finishtime'] = 'Finished merging at {$a}';
$string['form_description'] = '<p>You may search for users here if you don\'t
    know the user\'s username/id number. Otherwise you may expand the form to
    enter that information directly.  Please see help on fields for more
    information</p>';
$string['form_header'] = 'Find users to merge';
$string['header'] = 'Merge two users into a single account';
$string['header_help'] = '<p>Given a user to be deleted and a user to keep, this will merge the user data
 associated with the former user into the latter user. Note that both users must
 already exist and no accounts will actually be deleted. That process is left to the
 administrator to do manually.</p>
 <p><strong>Only do this if you know what you are doing as it is not reversable!</strong></p>';
$string['into'] = 'into';
$string['invalid_option'] = 'Invalid form option';
$string['invaliduser'] = 'Invalid user';
$string['logid'] = 'For further reference, these results are recorded in the log id {$a}.';
$string['logko'] = 'Some error occurred:';
$string['loglist'] = 'All these records are merging actions done, showing if they went ok:';
$string['logok'] = 'Here are the queries that have been sent to the DB:';
$string['mergedbyuseridonlog'] = 'Merged by';
$string['mergeusers'] = 'Merge user accounts';
$string['mergeusers:mergeusers'] = 'Merge user accounts';
$string['mergeusers:view'] = 'Merge User Accounts';
$string['mergeusers_confirm'] = 'After confirming the merge process will start.
    <br /><strong>This will not be reversible!</strong>
    Are you sure you want to continue?';
$string['mergeusersadvanced'] = '<strong>Direct user input</strong>';
$string['mergeusersadvanced_help'] = 'Here you can enter the below fields if
    you know exactly what users that you want to merge.<br /><br />
    Click the "search" button in order to verify/confirm that the input entered
    are in fact users.';
$string['merging'] = 'Merged';
$string['newuser'] = 'User to keep';
$string['newuserid'] = 'User ID to be kept';
$string['newuseridonlog'] = 'User kept';
$string['no_saveselection'] = 'You did not select either an old or new user.';
$string['nologs'] = 'There is no merging logs yet. Good for you!';
$string['nomergedby'] = 'Not recorded';
$string['olduser'] = 'User to remove';
$string['olduserid'] = 'User ID to be removed';
$string['olduseridonlog'] = 'User removed';
$string['pluginname'] = 'Merge user accounts';
$string['privacy:metadata'] = 'The Merge User Accounts plugin does not store any personal data.';
$string['qa_action_delete_fromid'] = 'Keep attempts from the new user';
$string['qa_action_delete_toid'] = 'Keep attempts from the old user';
$string['qa_action_remain'] = 'Do nothing: do not merge nor delete';
$string['qa_action_remain_log'] = 'User data from table <strong>{$a}</strong> are not updated.';
$string['qa_action_renumber'] = 'Merge attempts from both users and renumber';
$string['qa_chosen_action'] = 'Active option for quiz attempts: {$a}.';
$string['qa_grades'] = 'Grades recalculated for quizzes: {$a}.';
$string['quizattemptsaction'] = 'How to resolve quiz attempts';
$string['quizattemptsaction_desc'] = 'When merging quiz attempts there may exist three cases:
    <ol>
    <li>Only the old user has quiz attempts. All attemps will appear as if they were made by the new user.</li>
    <li>Only the new user has quiz attempts. All is correct and nothing is done.</li>
    <li>Both users have attempts for the same quiz. <strong>You have to choose what to do in this case of conflict.
    </strong>. You are required to choose one of the following actions:
        <ul>
        <li><strong>{$a->renumber}</strong>. Attempts from the old user are merged with the ones of the new user
        and renumbered by the time they were started.</li>
        <li><strong>{$a->delete_fromid}</strong>. Attempts from the old user are removed. Attempts from the new user
        are kept, since this option considers them as the most important.</li>
        <li><strong>{$a->delete_toid}</strong>. Attempts from the new user are removed. Attempts from
        the old user are kept, since this option considers them as the most important.</li>
        <li><strong>{$a->remain}</strong> (by default). Attempts are not merged nor deleted, remaining related to
        the user who made them. This is the most secure action, but merging users from user A to user B or B to A may
        produce different quiz grades.</li>
        </ul>
    </li>
    </ol>';
$string['results'] = 'Merging results and log';
$string['review_users'] = 'Confirm users to merge';
$string['saveselection_submit'] = 'Save selection';
$string['searchuser'] = 'Search for User';
$string['searchuser_help'] = 'Enter a username, first/last name, email address
    or user id to search for potential users. You may also specify if you only
    want to search through a particular field.';
$string['starttime'] = 'Started merging at {$a}';
$string['suspenduser_setting'] = 'Suspend old user';
$string['suspenduser_setting_desc'] = 'If enabled, it suspends the old user
    automatically upon a succesful merging process, preventing the user
    from logging in Moodle (recommended). If disabled, the old user remains active.
    In both cases, old user will not have his/her related data.';
$string['tableko'] = 'Table {$a} : update NOT OK!';
$string['tableok'] = 'Table {$a} : update OK';
$string['tableskipped'] = 'For logging or security reasons we are skipping <strong>{$a}</strong>.
 <br />To remove these entries, delete the old user once this script has run successfully.';
$string['timetaken'] = 'Merge took {$a} seconds';
$string['transactions_not_supported'] = 'For your information, your database
    <strong>does not supports transactions</strong>.';
$string['transactions_setting'] = 'Only transactions allowed';
$string['transactions_setting_desc'] = 'If enabled, merge users will not work
    at all on databases that do NOT support transactions (recommended).
    Enabling it is necessary to ensure that your database remains consistent
    in case of merging errors. <br />If disabled, you will always run merging actions.
    In case of errors, the merging log will show you what was the problem.
    Reporting it to the plugin supporters will give you a solution in short.
    <br />Above all, core Moodle tables and some third party plugins are already
    considered by this plugin. If you do not have any third party plugins
    in your Moodle installation, you can be quiet on running this plugin
    enabling or disabling this option.';
$string['transactions_supported'] = 'For your information, your database
    <strong>supports transactions</strong>.';
$string['uniquekeynewidtomaintain'] = 'Keep new user\'s data';
$string['uniquekeynewidtomaintain_desc'] = 'In case of conflict,
    like when the user.id related column is a unique key, this plugin will keep
    data from new user (by default). This also means that data from old user is
    deleted to keep the consistence. Otherwise, if you uncheck this option,
    data from old user will be kept.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Review users to merge</b>';
$string['userselecttable_legend'] = '<b>Select users to merge</b>';
$string['viewlog'] = 'See merging logs';
$string['wronglogid'] = 'The log you are asking for does not exist.';
