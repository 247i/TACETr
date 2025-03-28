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
 * Strings for component 'magtest', language 'en', version '4.0'.
 *
 * @package     magtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategories'] = 'Add categories';
$string['addcategory'] = 'Add a category';
$string['addone'] = 'Add one category';
$string['addquestion'] = 'Add a question';
$string['addthree'] = 'Add three categories';
$string['allowreplay'] = 'Allow replay the test';
$string['allowreplay_help'] = '## Multitrack test

### Allow test replay

this setting allows disabling or enabling globally the capability to make multiple attempts of the test. Participants will need
having the "Make multiple attempts" capability enabled in their profile to get access to the replay button.';
$string['answer'] = 'Answer';
$string['answercount'] = 'Number of answer';
$string['answerquestions'] = 'Test:';
$string['answers'] = 'Answers';
$string['answertext'] = 'Answer for category: {$a}';
$string['answerweights'] = 'Answer weights';
$string['backtocourse'] = 'Back to course';
$string['categories'] = 'Categories';
$string['category'] = 'Category';
$string['categoryresult'] = 'Conclusion test for the category';
$string['categoryshortname'] = 'Category short name';
$string['choosecategoryforanswer'] = 'Choose a category for this answer';
$string['clearalladvice'] = 'Clearing all data will also clear all user results';
$string['clearalldata'] = 'Clear all previous data';
$string['cleardata'] = 'Clear all data';
$string['closed'] = 'Test is closed. Answering is not any more allowed.';
$string['closedtestadvice'] = 'This test is closed. You cannot replay it again.';
$string['commands'] = 'Commands';
$string['configshowmymoodle'] = 'Show magtest to do on \'My Moodle\' page';
$string['configshowmymoodledesc'] = 'If this is unchecked then magtest activities will no longer appear on the \'My Moodle\' page';
$string['configusesetprofile'] = 'Use set profile';
$string['configusesetprofile_desc'] = 'If enabled, teachers will be able to drive profile value changes from a magtest.';
$string['confirmdeletemessage'] = 'Deleting this question removes all associated answers and all previously made user choices. Continue ?';
$string['default'] = 'Default magazine test';
$string['delcategory'] = 'Delete the category';
$string['delquestion'] = 'Delete the question';
$string['descresult'] = 'Results';
$string['description'] = 'Description';
$string['doit'] = 'Perform the test';
$string['editquestions'] = 'Edit the questions';
$string['endtime'] = 'End time';
$string['erroraddcategory'] = 'Error while adding a category.';
$string['erroranswerinsert'] = 'Failed inserting a new answer for questionid : {$a}';
$string['erroremptyanswers'] = 'Some answers have no content.<br/>The test may malfunction.';
$string['errorinvalidcategory'] = 'Invalid Category.';
$string['errornotallowed'] = 'You are not allowed to perform this test';
$string['errorquestionupdate'] = 'Error updating question {$a}';
$string['errorupdatecategory'] = 'Could not update magtest category {$a}';
$string['eventanswersubmitted'] = 'Answer submitted';
$string['guestcannotuse'] = 'Guests cannot use this test';
$string['helper'] = 'Read hint';
$string['helpertext'] = 'Helper Text';
$string['helpnavigationquestion'] = 'Help';
$string['import'] = 'Import';
$string['importfile'] = 'Import file';
$string['importformat'] = 'Import format';
$string['importformat_help'] = '### Question import format

Import file must be UTF8 encoded, separated with ";", one question per line and have one first column for question text.

If singlechoice options is on, next columns are weights (integer) for each category in category order.

If singlechoice is off, next columns must feed in order : answer text, weight (1 if unweighted), and helpertext for each category in order.';
$string['importquestions'] = 'Import questions in magtest';
$string['intro'] = 'Intro';
$string['leftarrow'] = '<<';
$string['magtest:addinstance'] = 'Add an instance';
$string['magtest:doit'] = 'Make the test';
$string['magtest:manage'] = 'Configure the test';
$string['magtest:multipleattempts'] = 'Make multiple attempts';
$string['magtest:viewgeneralstat'] = 'View general statistics';
$string['magtest:viewotherresults'] = 'See results of other participants';
$string['magtest_help'] = 'Magtest implements such magazine tests collecting answers "by category" of answers. The test allows you to define some categories
and deploy a set of questions that will have as many proposals for each category.

When a participants plays the test, he will have to choose one of the possible proposals, after what the category score will
be increased.

At the end of the test, the winning category has collected the higher score. A conclusion can be shown to users highlighting
the winning sentence, and followed eventually by an overal conclusion.

The resulting groups of participants, sorted by the winning category can eventually be converted to Moodle groups. This module
can thus be used as a self-discrimating operator when starting a course session, or when splitting a course population into
groups becomes necessary.';
$string['magtestaccesses'] = 'Accessed: {$a} times';
$string['magtestattempted'] = 'Attempted on';
$string['makegroups'] = 'Generate moodle groups from results';
$string['modulename'] = 'Multitrack test';
$string['modulename_help'] = 'The Magtest activity provides a multicriteria evaluation summing a score on several scales for each answer.
At th end of the test, the student will be catagorized in his dominating category.
The teacher can use results to create course groups.';
$string['modulenameplural'] = 'Multitrack tests';
$string['noanswerusers'] = 'Unanswered';
$string['nocategories'] = 'No categories in the test.';
$string['nogroupcreationadvice'] = 'You need having no groups in the course for the group creation feature to work.';
$string['noquestions'] = 'No questions yet.';
$string['notopened'] = 'This test is not opened yet.';
$string['notsubmittedyet'] = 'Not submited yet.';
$string['nouseranswer'] = 'No user answered';
$string['nousersinthisgroup'] = 'No users in this category';
$string['outputfieldname'] = 'Profile field to set';
$string['outputfieldvalue'] = 'Profile value to set';
$string['outputgroupdesc'] = 'Generated group description';
$string['outputgroupname'] = 'Generated group name';
$string['pagenotcomplete'] = 'All questions were not answered.';
$string['pagesize'] = 'Questions per page';
$string['pagesize_help'] = '## Multitrack test

### Page size

This parameter allows choosing how many questions will be displayed per page. Setting this value to 1 will display a single question page.';
$string['pluginadministration'] = 'Magtest Settings';
$string['pluginname'] = 'Multitrack test';
$string['preview'] = 'preview';
$string['privacy:metadata:magtest_useranswer'] = 'Stores answers of the user to the magtest questions';
$string['privacy:metadata:magtest_useranswer:answerid'] = 'The answer ID choosed for the question';
$string['privacy:metadata:magtest_useranswer:magtestid'] = 'The ID of the magtest instance';
$string['privacy:metadata:magtest_useranswer:questionid'] = 'The question ID for which the user has answered';
$string['privacy:metadata:magtest_useranswer:timeanswered'] = 'The time the user has given the answer';
$string['privacy:metadata:magtest_useranswer:userid'] = 'The ID of the user';
$string['question'] = 'Question';
$string['question_text'] = 'Question Text';
$string['questions'] = 'Questions';
$string['questiontext'] = 'Question text';
$string['reset'] = 'Replay the test';
$string['resetting_data'] = 'Reset magtest responses';
$string['resetting_magtests'] = 'Resetting magazine tests';
$string['result'] = 'Result';
$string['resultformattexttypehelp'] = 'Editing format is identical to the description';
$string['results'] = 'Results';
$string['resultsbycats'] = 'Results per category';
$string['resultsbyusers'] = 'Results per user';
$string['resulttext'] = 'Global conclusion text';
$string['rightarrow'] = '>>';
$string['save'] = 'Save';
$string['score'] = 'Score';
$string['selections'] = 'Selections';
$string['singlechoice'] = 'Single choice';
$string['singlechoice_help'] = 'If checked each question is requested only one simple answer (selected or not). Weights apply
to all marking categories for the questions that are checked. Magtest is necessarily weighted in this case.';
$string['singlechoicemode'] = 'the magtest is in singlechoice mode. You cannot write answer texts in this mode. the sudent will just answer "yes" or "no" to the question, and distribute weights in categories.';
$string['sortorder'] = 'Order';
$string['starttime'] = 'Start time';
$string['stat'] = 'Statistics';
$string['submitted'] = 'Submited.';
$string['symbol'] = 'Symbol';
$string['testfinish'] = 'You have finished the test';
$string['testnotallok'] = 'The configuration of this test is not complete: you cannot perform it.';
$string['unanswered'] = 'These users did not answer';
$string['updatecategories'] = 'Update Category';
$string['updatecategory'] = 'Update a category';
$string['updatequestion'] = 'Update Question';
$string['usemakegroups'] = 'Use this test for generating course groups';
$string['usemakegroups_help'] = '### Generating moodle groups from results

Using the multitrack test will result in a splitting of the participants among the provided categories.

This setting allows activating the group generation feature that will convert the test result into moodle groups within the course.

Generation can take place even if all participants did not answer the test. By the way, there will not be any generation possible
if groups already are set within the course. You will have to delete the existing groups if you want to generate groups again from
a later attempt.';
$string['userchoices'] = 'User choices';
$string['userstosubmit'] = 'User left to submit';
$string['usesetprofile'] = 'Use this test for changing users profile values';
$string['usesetprofile_help'] = 'If enabled, each category can drive changes in the user\'s profile.';
$string['weight'] = 'Weight';
$string['weighted'] = 'Weighted answers';
$string['weighted_help'] = '## Multitrack test

### Weighted mode

If you enable this mode, each answer will be associated a weight that will be added to the relevant category if choosen.

This allows creating tests in which each question may not have the same influence upon the final result.

When weighted mode is on, the default weight is 1.0, which is equivalent not to use weighting.';
$string['weightfor'] = 'Weight for "{$a}"';
$string['you_have_to_create_categories'] = 'You have to create at least one category before you can create any questions.';
$string['youneedcreatingcategories'] = 'Before create questions, you have to create at least two categories.';
