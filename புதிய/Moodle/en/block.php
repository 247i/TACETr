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
 * Strings for component 'block', language 'en', version '4.0'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Any page matching the above';
$string['appearsinsubcontexts'] = 'Appears in sub-contexts';
$string['assignrolesinblock'] = 'Assign roles in {$a} block';
$string['blocksdrawertoggle'] = 'Hide/show block drawer';
$string['blocksettings'] = 'Block settings';
$string['bracketfirst'] = '{$a} (first)';
$string['bracketlast'] = '{$a} (last)';
$string['configureblock'] = 'Configure {$a} block';
$string['contexts'] = 'Page contexts';
$string['contexts_help'] = 'Contexts are more specific types of pages where this block can be displayed within the original block location. You will have different options here depending on the original block location and your current location. For example, you can restrict a block to only appearing on forum pages in a course by adding the block to the course (making it appear on all sub-pages), then going into a forum and editing the block settings again to restrict display to just forum pages.';
$string['createdat'] = 'Original block location';
$string['createdat_help'] = 'The original location where the block was created. Block settings may cause it to appear in other locations (contexts) within the original location. For example, a block created on a course page could be displayed in activities within that course. A block created on the site home can be displayed throughout the site.';
$string['defaultregion'] = 'Default region';
$string['defaultregion_help'] = 'Themes may define one or more named block regions where blocks are displayed. This setting defines which of these you want this block to appear in by default. The region may be overridden on specific pages if required.';
$string['defaultweight'] = 'Default weight';
$string['defaultweight_help'] = 'The default weight allows you to choose roughly where you want the block to appear in the chosen region, either at the top or the bottom. The final location is calculated from all the blocks in that region (for example, only one block can actually be at the top). This value can be overridden on specific pages if required.';
$string['deleteblock'] = 'Delete {$a} block';
$string['deleteblockcheck'] = 'This will delete the block {$a}.';
$string['deleteblockinprogress'] = 'Block {$a} removal in progress...';
$string['deleteblockwarning'] = '<p>You are about to delete a block that appears elsewhere.</p><p>Original block location: {$a->location}<br />Display on page types: {$a->pagetype}</p><p>Are you sure you want to continue?</p>';
$string['deletecheck'] = 'Delete {$a} block?';
$string['deletecheck_modal'] = 'Delete block?';
$string['hideblock'] = 'Hide {$a} block';
$string['hidepanel'] = 'Hide panel';
$string['moveblock'] = 'Move {$a} block';
$string['moveblockafter'] = 'Move block to after {$a} block';
$string['moveblockbefore'] = 'Move block to before {$a} block';
$string['moveblockinregion'] = 'Move block to {$a} region';
$string['movingthisblockcancel'] = 'Moving this block ({$a})';
$string['myblocks'] = 'My blocks';
$string['onthispage'] = 'On this page';
$string['pagetypes'] = 'Page types';
$string['pagetypewarning'] = 'The previously specified page type is no longer selectable. Please choose the most appropriate page type below.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Records when the user docked a block';
$string['privacy:metadata:userpref:hiddenblock'] = 'Records when the user collapsed/hid a block';
$string['privacy:request:blockisdocked'] = 'Indicates whether the block was docked';
$string['privacy:request:blockishidden'] = 'Indicates whether the block was hidden/collapsed';
$string['region'] = 'Region';
$string['restrictpagetypes'] = 'Display on page types';
$string['showblock'] = 'Show {$a} block';
$string['showoncontextandsubs'] = 'Display on \'{$a}\' and any pages within it';
$string['showoncontextonly'] = 'Display on \'{$a}\' only';
$string['showonentiresite'] = 'Display throughout the entire site';
$string['showonfrontpageandsubs'] = 'Display on the site home and any pages added to the site home.';
$string['showonfrontpageonly'] = 'Display on the site home only';
$string['subpages'] = 'Select pages';
$string['thisspecificpage'] = 'This specific page';
$string['visible'] = 'Visible';
$string['weight'] = 'Weight';
$string['wherethisblockappears'] = 'Where this block appears';
