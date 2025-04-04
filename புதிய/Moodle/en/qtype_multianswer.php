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
 * Strings for component 'qtype_multianswer', language 'en', version '4.0'.
 *
 * @package     qtype_multianswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmquestionsaveasedited'] = 'I confirm that I want the question to be saved as edited';
$string['confirmsave'] = 'Confirm then save {$a}';
$string['correctanswer'] = 'Correct answer';
$string['correctanswerandfeedback'] = 'Correct answer and feedback';
$string['corruptedquestion'] = 'This question is corrupted and contains subquestions that are not present in your system.';
$string['decodeverifyquestiontext'] = 'Decode and verify the question text';
$string['invalidmultianswerquestion'] = 'Invalid embedded answers (Cloze) question ({$a}).';
$string['layout'] = 'Layout';
$string['layouthorizontal'] = 'Horizontal row of radio-buttons';
$string['layoutmultiple_horizontal'] = 'Horizontal row of checkboxes';
$string['layoutmultiple_vertical'] = 'Vertical column of checkboxes';
$string['layoutselectinline'] = 'Drop-down menu in-line in the text';
$string['layoutundefined'] = 'Undefined layout';
$string['layoutvertical'] = 'Vertical column of radio buttons';
$string['missingsubquestion'] = 'This subquestion is missing from your system and cannot be displayed.';
$string['multichoicex'] = 'Multiple choice {$a}';
$string['nooptionsforsubquestion'] = 'Unable to get options for question part # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'The Cloze(multianswer) question "<strong>{$a}</strong>" does not contain any question';
$string['pleaseananswerallparts'] = 'Please answer all parts of the question.';
$string['pluginname'] = 'Embedded answers (Cloze)';
$string['pluginname_help'] = 'Embedded answers (Cloze) questions consist of a passage of text with questions such as multiple-choice and short answer embedded within it.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Adding an Embedded answers (Cloze) question';
$string['pluginnameediting'] = 'Editing an Embedded answers (Cloze) question';
$string['pluginnamesummary'] = 'Questions of this type are very flexible, but can only be created by entering text containing special codes that create embedded multiple-choice, short answers and numerical questions.';
$string['privacy:metadata'] = 'The Embedded answers (Cloze) question type plugin does not store any personal data.';
$string['qtypenotrecognized'] = 'Question type {$a} not recognised';
$string['questiondefinition'] = 'Question definition';
$string['questiondeleted'] = 'Question deleted';
$string['questioninquiz'] = '<ul>
  <li>add or delete questions, </li>
  <li>change the questions order in the text,</li>
  <li>change their question type (numerical, shortanswer, multiple choice). </li></ul>';
$string['questionnotfound'] = 'Unable to find question of question part #{$a}';
$string['questionsadded'] = 'Question added';
$string['questionsaveasedited'] = 'The question will be saved as edited';
$string['questionsless'] = '{$a} question(s) less than in the multianswer question stored in the database';
$string['questionsmissing'] = 'The question text must include at least one embedded answer.';
$string['questionsmore'] = '{$a} question(s) more than in the multianswer question stored in the database';
$string['questiontypechanged'] = 'Question type changed';
$string['questiontypechangedcomment'] = 'At least one question type has been changed.<br />Did you add, delete or move a question?<br />Look ahead.';
$string['questionusedinquiz'] = 'This question is used in {$a->nb_of_quiz} quiz(s), total attempt(s) : {$a->nb_of_attempts}';
$string['regradeissuenumsubquestionschanged'] = 'The number of embedded sub-questions in the question has changed.';
$string['storedqtype'] = 'Stored question type {$a}';
$string['subqresponse'] = 'part {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Unknown question type: {$a->type} of question part # {$a->sub}';
$string['warningquestionmodified'] = '<b>WARNING</b>';
$string['youshouldnot'] = '<b>YOU SHOULD NOT</b>';
