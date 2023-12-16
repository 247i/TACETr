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
 * Strings for component 'cardbox', language 'en', version '4.0'.
 *
 * @package     cardbox
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutenumberofcards'] = 'Absolute number of cards';
$string['acdisable'] = 'Column name to disable Automatic Check for a card. Yes = 1; No = 0.';
$string['acontext'] = 'Column name for answer context';
$string['activityname'] = 'Cardbox activity';
$string['addanswer'] = 'Add another solution';
$string['addcontext'] = 'Show context';
$string['addflashcard'] = 'Add a card';
$string['addimage'] = 'Show image options';
$string['addnewtopic'] = 'create a topic';
$string['addsound'] = 'Show sound options';
$string['afieldmissing'] = 'Answer field missing.';
$string['allanswersnecessary'] = 'All';
$string['allanswersnecessary_help'] = 'all answers necessary';
$string['allowedcolumns'] = '<br><p>Allowed column names are:</p>';
$string['alphabetical'] = 'Alphabetical';
$string['amissing'] = 'Answer missing.';
$string['ans'] = 'Column name for answer';
$string['answer_repeat'] = 'Add another solution';
$string['answer_repeat_help'] = 'If you have multiple solutions, please use a separate solution field for each answer.<br>
                                Another solution field can be added by the button "Add another solution".<br>
                                To set whether students need to know all answers or only one (in case of alternative answers) please use the dropdown below.';
$string['answerimage'] = 'Answer image';
$string['answersound'] = 'Answer sound';
$string['applysettings'] = 'Apply';
$string['approve'] = 'Approve';
$string['ascending'] = 'ascending';
$string['autocorrecticon'] = 'Self Check only';
$string['autocorrecticon_help'] = 'Answer cannot be typed in while practising in Automatic Check mode. In the Automatic check mode, the learning card will then still be displayed, but only as a self-check.';
$string['autocorrection'] = 'Automatic check';
$string['autocorrectlocked'] = 'Disable Automatic Check';
$string['autocorrectlocked_help'] = 'Activate this checkbox if the answer of the learning card is not to be typed in while practicing in "Automcatic check" mode. In the "Automatic check" mode, the learning card will then still be displayed, but only as a self-check. This option is especially useful for learning cards whose answers are not suitable for manual input (e.g. definitions), but should still be practiced together with other learning cards whose answers are entered manually.';
$string['averagestudentscompare'] = 'average of all students';
$string['barchartstatistic1'] = 'Number of cards per deck for all students';
$string['barchartxaxislabel'] = 'Deck';
$string['barchartyaxislabel'] = 'Card count';
$string['beginpractice'] = 'Start practice';
$string['box'] = 'box';
$string['cancel'] = 'Cancel';
$string['cancelimport'] = 'Import was cancelled';
$string['card'] = 'Question/Answer:';
$string['cardbox'] = 'Card Box';
$string['cardboxname'] = 'Name of this Card Box';
$string['cardposition'] = 'Deck:';
$string['cardposition_help'] = 'Shows which deck this card is in. The higher the number the better the card has already been learned. New cards are not yet in a box. After box 5 cards are considered "mastered" and are no longer practiced.';
$string['cardsleft'] = 'Remaining cards:';
$string['casesensitive'] = 'Case sensitivity';
$string['casesensitive_help'] = 'Specifies whether, when practising with automatic control, entries that only differ from the correct answer in terms of upper/lower case are also counted as correct.';
$string['changenotification:message'] = 'A flashcard was edited in your cardbox. Here is the card in its current form.';
$string['changenotification:subject'] = 'Change notification';
$string['checkanswer'] = 'Check';
$string['choosecorrectionmode'] = 'Practice mode';
$string['choosetopic'] = 'Topic';
$string['continue'] = 'Continue';
$string['countcardapprove'] = '{&a} cards have been approved and ready for practise';
$string['countcardreject'] = '{&a} cards have been rejected';
$string['createddate'] = 'Created date';
$string['createtopic'] = 'Add';
$string['deckfilter'] = 'Deck';
$string['delete'] = 'Delete';
$string['deletecard'] = 'Delete card?';
$string['deletecardinfo'] = 'The card and the progress of this card will be deleted for all users.';
$string['deletetopic'] = 'Delete topic';
$string['deletetopicinfo'] = 'Do you want to delete the selected topic {$a}? For cards assigned to this topic, this will set the topic to "not assigned".';
$string['descending'] = 'descending';
$string['dontknow'] = 'I don\'t know';
$string['duration'] = 'Duration (min)';
$string['durationavg'] = 'Average';
$string['durationmax'] = 'Maximun';
$string['durationmin'] = 'Minimum';
$string['edit'] = 'Edit';
$string['edittopic'] = 'Manage topics';
$string['emptyimportfile'] = 'Nothing to import - CSV file has no rows.';
$string['endpractice'] = 'End practice';
$string['enteranswer'] = 'Solution';
$string['entercontextanswer'] = 'Additional information for the answer';
$string['entercontextquestion'] = 'Additional information for this question';
$string['enterquestion'] = 'Question or prompt';
$string['entertopic'] = 'create a topic';
$string['error:createcard'] = 'The card was not created, because it is either missing a question and/or answer or if you uploaded a picture the imagedescription might be missing.';
$string['error:updateafterreview'] = 'Update failed.';
$string['errormsg'] = 'The below lines could not be imported into cards';
$string['examplemulticsv'] = 'Example text file for cards having multiple answers';
$string['examplemulticsv_help'] = 'Example text file for cards having multiple answers';
$string['examplesinglecsv'] = 'Example text file for cards having single answers';
$string['examplesinglecsv_help'] = 'Example text file for cards having single answers';
$string['existingtopics'] = 'already existing topics';
$string['feedback:correctandcomplete'] = 'Well done!';
$string['feedback:correctbutincomplete'] = 'There are {$a} answers missing.';
$string['feedback:incomplete'] = 'Answers missing!';
$string['feedback:incorrectandpossiblyincomplete'] = 'Incorrect!';
$string['feedback:notknown'] = 'No answer given!';
$string['flashcards'] = 'cards';
$string['flashcardsdue'] = 'due';
$string['flashcardsnotdue'] = 'not due yet';
$string['help:nocardsavailable'] = 'Empty Cardbox';
$string['help:nocardsavailable_help'] = 'Possible reasons:<ul><li>No cards have been created.</li><li>The teacher has yet to check and accept a card.</li></ul>';
$string['help:nocardsavailableforpractice'] = 'No cards';
$string['help:nocardsavailableforpractice_help'] = 'You have correctly answered every card that is currently available 5 times over a period of at least two months. These cards are regarded as mastered and no longer repeated.';
$string['help:nocardsdueforpractice'] = 'No cards due';
$string['help:nocardsdueforpractice_help'] = 'New cards are due immediately. For any other card the deck decides:<ol><li>deck: daily</li><li>deck: after 3 days</li><li>deck: after 7 days</li><li>deck: after 16 days</li><li>deck: after 34 days</li></ol>';
$string['help:practiceanyway'] = 'If you practice anyway, correctly answered cards do not move on, but remain in their current tray.';
$string['help:whenarecardsdue'] = 'When are cards due';
$string['help:whenarecardsdue_help'] = 'New cards are immediately due for practice. For any other card the deck decides:<ol><li>deck: daily</li><li>deck: after 3 days</li><li>deck: after 7 days</li><li>deck: after 16 days</li><li>deck: after 34 days</li></ol>';
$string['image'] = 'Question image';
$string['imagedescription'] = 'Describe this image for someone who cannot see it (recommended)';
$string['imgdescriptionnecessary_label'] = 'This image is decorative only';
$string['importpreview'] = 'Import cards preview';
$string['importsuccess'] = '{$a} cards imported successfully';
$string['info:enrolledstudentsthreshold_manager'] = 'There must be at least {$a} students enrolled in this course for weekly practice statistics to be displayed.';
$string['info:enrolledstudentsthreshold_student'] = 'Average progress among students is only displayed if there are at least {$a} students enrolled in the course.';
$string['info:nocardsavailable'] = 'There are no cards in your cardbox at present.';
$string['info:nocardsavailableforoverview'] = 'There are no cards in this cardbox.';
$string['info:nocardsavailableforpractice'] = 'There are no cards ready for practice.';
$string['info:nocardsavailableforreview'] = 'There are no new cards to review at present.';
$string['info:nocardsdueforpractice'] = 'None of your cards are due for repetition yet.';
$string['info:statisticspage'] = 'This page tells you how many cards there are in your cardbox (due and not-due) and how well you did in your previous practice sessions.';
$string['info:waslastcardforreview'] = 'This was the last card to be reviewed.';
$string['intro:overview'] = 'This overview displays all cards that have been approved.';
$string['known'] = 'mastered';
$string['knowncard'] = 'mastered cards';
$string['lastpractise'] = 'last practised';
$string['linegraphtooltiplabel_below_threshold'] = 'no statistics because <{$a} users practiced that week';
$string['linegraphxaxislabel'] = 'Date';
$string['linegraphyaxislabel_duration'] = 'Duration (min)';
$string['linegraphyaxislabel_numbercards'] = 'Number of cards';
$string['linegraphyaxislabel_performance'] = '% known';
$string['manager:deckdescription'] = 'On average, this card lies in deck {$a} among all students';
$string['manager:repeatdesc'] = 'This card was mastered by students, on average, after {$a} repetitions';
$string['markascorrect'] = 'Correct';
$string['markasincorrect'] = 'Incorrect';
$string['massimport'] = 'Import cards';
$string['maxnumbercardspractice'] = 'Max. number of cards';
$string['messageprovider:changenotification'] = 'Notify when a flashcard was edited';
$string['messageprovider:memo'] = 'Reminders to practice with cardbox';
$string['modulename'] = 'Card Box';
$string['modulename_help'] = '<p>This activity allows you to create flashcards for vocabulary, technical terms, formulae, etc. that you want to remember. You can study with the cards as you would do with a card box.</p><p>Cards can be created by every participant, but are only used for practice if a teacher has accepted them.</p>';
$string['modulenameplural'] = 'Card Boxes';
$string['necessaryanswers_activity'] = 'Default settings for "How many answers are necessary?"';
$string['necessaryanswers_activity_help'] = 'Set the default value for "How many answers are necessary?" in the card creation form.';
$string['necessaryanswers_activity_locked'] = 'Allow to change the number of necessary answers afterwards?';
$string['necessaryanswers_activity_locked_help'] = 'If "Yes" is selected, then it is possible to change the number of required responses when creating or editing a card.';
$string['necessaryanswers_all'] = 'all';
$string['necessaryanswers_card'] = 'How many answers are necessary?';
$string['necessaryanswers_one'] = 'one';
$string['new'] = 'new';
$string['newcard'] = 'new cards';
$string['no'] = 'No';
$string['nopractise'] = 'not practised yet';
$string['noselection'] = 'all';
$string['notopic'] = 'not assigned';
$string['notopicpreferred'] = 'no preference';
$string['notopics'] = 'there are no topics yet';
$string['numberofcards'] = 'Number';
$string['numberofcardsavg'] = 'Average';
$string['numberofcardsmax'] = 'Maximum';
$string['numberofcardsmin'] = 'Minimum';
$string['numberofcardssetting'] = 'Number of cards to practice';
$string['numberofcardssetting_help'] = 'Specifies how many cards students should learn per practice session. If "Students decide" is selected, they have free choice.';
$string['oneanswersnecessary'] = 'One';
$string['oneanswersnecessary_help'] = 'one answer necessary';
$string['onlyonetopic'] = 'Topic';
$string['options'] = 'Practice anyway';
$string['override'] = 'Override';
$string['override_iscorrect'] = 'No, I was right!';
$string['override_isincorrect'] = 'No, I was wrong.';
$string['overview'] = 'Overview';
$string['performance'] = '% correct';
$string['pluginadministration'] = 'Flashcards Administration';
$string['pluginname'] = 'Card Box';
$string['practice'] = 'Practice';
$string['practiceall'] = 'Practice all cards';
$string['practiceall_help'] = 'These cards do not proceed to the next deck if answered correctly. Thus, you can practice as often as you wish without risking that cards leave the cardbox forever after only a few days.';
$string['proceed'] = 'Next';
$string['qcontext'] = 'Column name for question context';
$string['qfieldmissing'] = 'Question field missing.';
$string['qmissing'] = 'Question missing.';
$string['ques'] = 'Column name for question';
$string['reject'] = 'Reject';
$string['rejectcard'] = 'Reject Card';
$string['rejectcardinfo'] = 'Do you want to reject the selected {$a} cards? These cards will be deleted and cannot be recovered.';
$string['reminderfooting'] = 'This reminder was sent automatically by your cardbox "{$a->cardboxname}" in the course "{$a->coursename}".';
$string['remindergreeting'] = 'Hello {$a},';
$string['remindermessagebody'] = 'please remember to study with your cardbox on a regular basis.';
$string['remindersubject'] = 'Practice reminder';
$string['removecontext'] = 'Hide context';
$string['removeimage'] = 'Hide image options';
$string['removesound'] = 'Hide sound options';
$string['review'] = 'Review';
$string['reviewtopic'] = 'TOPIC:';
$string['right'] = 'right';
$string['saveandaccept'] = 'Save and accept';
$string['savecard'] = 'Save';
$string['selfcorrection'] = 'Check yourself';
$string['send_practice_reminders'] = 'Send e-mail reminders to the course participants';
$string['sessioncompleted'] = 'Finished! :-)';
$string['setting_autocorrection'] = 'Allow autocorrection';
$string['setting_autocorrection_help'] = 'Autocorrection only works for normal text. If students may be expected to give formulae answers, you should deactivate autocorrection.';
$string['setting_autocorrection_label'] = '<font color="red">only suitable for text</font>';
$string['setting_enablenotifications'] = 'Allow notifications';
$string['setting_enablenotifications_help'] = 'Students receive notifications when cards have been edited or it is time to practice again.';
$string['setting_enablenotifications_label'] = 'Enable sending notifications to students';
$string['skip'] = 'Skip';
$string['solution'] = 'Solution';
$string['sorting'] = 'Sort';
$string['sound'] = 'Question sound';
$string['statistics'] = 'Progress';
$string['statistics_heading'] = 'Statistics';
$string['status'] = 'status';
$string['strftimedate'] = '%d. %B %Y';
$string['strftimedateshortmonthabbr'] = '%d %b';
$string['strftimedatetime'] = '%d. %b %Y, %H:%M';
$string['student:deckdescription'] = 'This card lies in deck {$a}';
$string['student:repeatdesc'] = 'This card was mastered after {$a} repetitions';
$string['studentschoose'] = 'Students choose';
$string['submitanswer'] = 'Answer';
$string['success:addandapprovenewcard'] = 'The card was created and approved for practice.';
$string['success:addnewcard'] = 'The card was created and awaits approval.';
$string['success:approve'] = 'The card was approved and is now free to use.';
$string['success:edit'] = 'The card was edited.';
$string['success:reject'] = 'The card was deleted.';
$string['successmsg'] = 'card(s) have been imported successfully.';
$string['suggestanswer'] = 'Suggest answer';
$string['suggestanswer_label'] = 'Please suggest a new solution';
$string['suggestanswer_send'] = 'Send answer';
$string['titledurationofasession'] = 'Duration of a session';
$string['titleforaddflashcard'] = 'New card';
$string['titleforcardedit'] = 'Edit card';
$string['titleforchoosesettings'] = 'Practice options';
$string['titleforpractice'] = 'Practice';
$string['titleforreview'] = 'Check card';
$string['titlenumberofcards'] = 'Number of cards per session';
$string['titleoverviewchart'] = 'Cardbox';
$string['titleperformancechart'] = 'Past practice sessions';
$string['titleprogresschart'] = 'Results';
$string['topic'] = 'Column name for topic';
$string['topicfilter'] = 'Topic';
$string['undefined'] = 'No limit';
$string['unmatchedanswers'] = 'CSV file requires {$a->csvschema} answers; only {$a->actual} given.';
$string['weekly_enrolled_students_threshold'] = 'Threshold enrolled students';
$string['weekly_enrolled_students_threshold_desc'] = 'How many students need to be enrolled into the course for weekly statistics to be shown for managers.';
$string['weekly_users_practice_threshold'] = 'Threshold practicers per week';
$string['weekly_users_practice_threshold_desc'] = 'How many users need to practice per week in order for managers to see statistics for that week.';
$string['weightopic'] = 'Focus';
$string['wrong'] = 'wrong';
$string['yes'] = 'Yes';
$string['yoursolution'] = 'Your answer';
