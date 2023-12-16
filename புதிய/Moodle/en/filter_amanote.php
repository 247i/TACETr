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
 * Strings for component 'filter_amanote', language 'en', version '4.0'.
 *
 * @package     filter_amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotateresource'] = 'Annotate';
$string['anonymous'] = 'Anonymous';
$string['anonymous_help'] = 'With this option, users are anonymous in Amanote and no authentication is required. However, the collaboration and podcast features will no longer be available. Finally, to activate this feature you must enable the saving in the private files and add an activation key.';
$string['autosaveperiod'] = 'Auto-save period';
$string['autosaveperiod_help'] = 'Configure the period of time in minutes between automatic saves (min.: 1, max.: 30). Setting the period to 0 means no auto-save.';
$string['deletefilewarning'] = 'Please note, if you delete this resource, any notes associated with it will no longer be accessible by students. If your intention is to update the resource, consider editing it instead of deleting it. This will preserve student notes.';
$string['downloadnotes'] = 'Download annotated file';
$string['filtername'] = 'Amanote';
$string['importantinformationdescription'] = 'In order for the module to work properly, please check that the following requirements are met on your Moodle site:

1. Amanote filter is enabled (Site administration > Plugins > Filters > Manage filters)

2. Web services are enabled (Site administration > Advanced feature)

3. *Moodle mobile web service* is enabled (Site administration > Plugins > Web services > External services)

4. REST protocol is activated (Site administration > Plugins > Web services > Manage protocols)

5. Capability *webservice/rest:use* is allowed for *authenticated users* (Site administration > Users > Permissions > Define Roles > Authenticated Users > Manage roles)';
$string['importantinformationheading'] = 'Important installation information';
$string['key'] = 'Activation key';
$string['key_help'] = 'This key is required for advanced features such as Podcast Creator.';
$string['messageprovider:submission'] = 'Submission of a student\'s notes or work';
$string['modaldescription'] = 'You can take clear and structured notes directly on your course materials by clicking on the button below.';
$string['openanalytics'] = 'Open Learning Analytics';
$string['openinamanote'] = 'Open in Amanote';
$string['openingmode'] = 'Opening mode';
$string['openingmode_fileclick'] = 'Click on the resource (best user experience)';
$string['openingmode_help'] = 'Select the method to open a resource with Amanote.';
$string['openingmode_iconnexttofile'] = 'Small icon next to resources';
$string['openingmode_iconnexttofilewithtext'] = '"Take notes" button next to the resources';
$string['openingmode_logonexttofile'] = 'Amanote logo next to resources';
$string['openpodcast'] = 'Open Podcast Creator';
$string['openstudentsworks'] = 'Open student works';
$string['pluginadministration'] = 'Amanote module administration';
$string['pluginname'] = 'Amanote';
$string['preventdownload'] = 'Prevent download';
$string['preventdownload_help'] = 'When enabled, this option prevents users from downloading the original course material (i.e. the teacher\'s PDF file).';
$string['privacy:metadata'] = 'In order to integrate with Amanote, some user data need to be sent to the Amanote client application (remote system).';
$string['privacy:metadata:access_token'] = 'The user\'s access token is required to save the notes in the Moodle\'s private files space.';
$string['privacy:metadata:access_token_expiration'] = 'The access token\'s expiration is sent to prevent the user to use the app with an expired token.';
$string['privacy:metadata:email'] = 'The user\'s email is sent to the remote system to allow a better user experience (note sharing, etc.).';
$string['privacy:metadata:fullname'] = 'The user\'s full name is sent to the remote system to allow a better user experience.';
$string['privacy:metadata:subsystem:corefiles'] = 'Files (PDF, AMA) are stored using Moodle\'s file system.';
$string['privacy:metadata:userid'] = 'The userid is sent from Moodle to Amanote in order to speed up the authentication process.';
$string['saveinprivate'] = 'Save notes in private files';
$string['saveinprivate_help'] = 'Save the annotated file in the private files of the user. This will allow the user to get back its notes the next time he opens the annotatable file in Amanote.';
$string['seeguide'] = 'See how in our guide';
$string['stopmodal'] = 'Stop showing this message';
$string['submissionnotification'] = '{$a} has submitted a work';
$string['takenotesicon'] = 'note-icon-en';
$string['target'] = 'Target';
$string['target_help'] = 'Select the location where the user will be redirected to annotate the resource.';
$string['target_inamanote'] = 'Amanote site (best user experience)';
$string['target_inmoodle'] = 'Embedded in Moodle';
$string['target_inmoodlefullscreen'] = 'Moodle in full screen';
$string['teacher'] = 'Teacher';
$string['viewresource'] = 'View here';
$string['worksheet'] = 'Send to teacher';
$string['worksheet_help'] = 'This option allows learners to send their notes or assignments to the teacher. The teacher can then correct the notes and send them back to the learner.';
