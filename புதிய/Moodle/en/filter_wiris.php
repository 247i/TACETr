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
 * Strings for component 'filter_wiris', language 'en', version '4.0'.
 *
 * @package     filter_wiris
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Access control';
$string['accessproviderenabled_help'] = 'If enabled only authenticated users can access MathType services.';
$string['alloweditorpluginactive'] = 'Editor always active';
$string['alloweditorpluginactive_help'] = 'Editor would be enabled regardless of MathType filter is disabled at course or activity level. By default if MathType filter is disabled in a course/activity, MathType is also disabled in the same course/activity.';
$string['area'] = 'area';
$string['arenotinstalled'] = 'are not installed.';
$string['atto'] = 'Atto';
$string['button1'] = 'MathType tests';
$string['button2'] = 'WirisQuizzes tests';
$string['cachedef_formulas'] = 'MathType formulas';
$string['cachedef_images'] = 'MathType images';
$string['clearcache'] = 'Clear cache';
$string['clearcachedesc'] = 'Clear MathType filter cache';
$string['clickwirisplugincorrectlyinstalled'] = 'Click the following button to test if MathType is correctly installed.';
$string['clickwirisquizzescorrectlyinstalled'] = 'Click the following button to test if WirisQuizzes is correctly installed.';
$string['connectionsettings'] = 'Connection settings';
$string['connectionsettings_text'] = '';
$string['contact'] = 'For more information or if you have any doubt contact WIRIS Support:';
$string['disabled'] = 'Disabled';
$string['editormodalwindow'] = 'Modal window enabled';
$string['editormodalwindow_help'] = '';
$string['editormodalwindowfullscreen'] = 'Modal window in full-screen mode';
$string['editormodalwindowfullscreen_help'] = 'Specifies if the modal window should be opened in full-screen mode.';
$string['editornameexpected'] = 'Editor name is expected';
$string['editorsettings'] = 'Editor settings';
$string['editorsettings_text'] = '';
$string['enabled'] = 'Enabled';
$string['error'] = 'ERROR';
$string['errordeletingcache'] = 'Error deleting cache on {$a} area';
$string['errorsavingcache'] = 'Error saving cache on {$a} area';
$string['filter_standalone'] = 'MathType filter only';
$string['filter_standalonedesc'] = 'You will be able to display existing formulas but creation of new formulas is not available. It also removes the warning message.';
$string['filtermustbeinstalled'] = 'Filter must be installed in Moodle filter folder.';
$string['filtername'] = 'MathType by WIRIS';
$string['furtherinformation'] = 'For further information see our documentation page';
$string['havesameversion'] = 'have the same version';
$string['imageformat'] = 'Image format';
$string['imageformat_help'] = 'Specifies image format (svg or png).';
$string['imageservicehost'] = 'Service host';
$string['imageservicehost_help'] = 'Specifies formula image server host.';
$string['imageservicepath'] = 'Service path';
$string['imageservicepath_help'] = 'Specifies formula image server path.';
$string['imageserviceport'] = 'Service port';
$string['imageserviceport_help'] = 'Specifies formula image server port.';
$string['imageserviceprotocol'] = 'Service protocol';
$string['imageserviceprotocol_help'] = 'Specifies formula image server protocol.';
$string['imagesettings'] = 'Image settings';
$string['imagesettings_text'] = '';
$string['impossibletofindwirisfilterversion'] = 'Impossible to find MathType filter version file.';
$string['lookingforfilterfiles'] = 'Looking for filter files';
$string['lookingforwirisfilterversion'] = 'Looking for MathType filter version';
$string['lookingforwirisplugin'] = 'Looking for MathType for';
$string['lookingforwirispluginenabled'] = 'Looking for MathType for';
$string['mustbeinstalled'] = 'must be installed.';
$string['noteditorspluginsinstalled'] = 'There are not editors plugins installed';
$string['notsupportededitor'] = 'is not a supported editor.';
$string['ok'] = 'OK';
$string['oldconfiguration'] = 'An old configuration.ini file has been detected on {$a}. Please move it to /filter/wiris/configuration.ini.';
$string['onlytextareaeditorinstalled'] = 'There are only a textarea editors plugin installed';
$string['or'] = 'or';
$string['pluginname'] = 'MathType by WIRIS';
$string['pluginperformance'] = 'Image performance mode';
$string['pluginperformance_help'] = 'Specifies if the response should be a JSON instead of a binary which allows requests be cached. Enable performance to use JSON response.';
$string['privacy:metadata'] = 'MathType filter does not effect or store any data itself.';
$string['rendertype'] = 'Render type';
$string['rendertype_help'] = 'Specifies how to render the formulas.<br>- PHP: calls the Wiris rendering service from the filter module.<br>- Client: all requests to the Wiris servers are made from the browser.<br><i>It is is strongly recommended to leave server-side rendering enabled (PHP), which is set by default. It is only recommended to enable client-side render (Client) in high-concurrency environments, where a very large number of simultaneous users need to represent several complex mathematical expressions simultaneously.</i>';
$string['securitysettings'] = 'Security settings';
$string['securitysettings_text'] = '';
$string['tinymce'] = 'TinyMCE';
$string['tinymceincompatibility'] = 'MathType for TinyMCE (legacy) is not supported in Moodle 4.2 or higher. You must uninstall the plugin located on "./lib/editor/tinymce/plugins/tiny_mce_wiris" and install the MathType plugin for TinyMCE 6. You can <a href="https://moodle.org/plugins/tiny_wiris">install it here</a>.';
$string['title'] = 'MathType filter test page';
$string['version'] = 'version';
$string['versionsdontmatch'] = 'versions don\'t match';
$string['windowsettings'] = 'Window settings';
$string['windowsettings_text'] = '';
$string['wirisbehaterroreditornotfound'] = 'Could not find MathType';
$string['wiriscas'] = 'Calculator';
$string['wirischemeditor'] = 'Chemistry editor';
$string['wirischemeditor_help'] = 'Display ChemType button.';
$string['wirisfilterversion'] = 'MathType filter version =';
$string['wirismatheditor'] = 'Math editor';
$string['wirismatheditor_help'] = 'Display MathType Editor button.';
$string['wirispluginfilterfor'] = 'MathType filter and MathType for';
$string['wirispluginfiltermustbeinstalled'] = 'MathType filter must be installed.';
$string['wirispluginfor'] = 'MathType for';
$string['wirispluginforatto'] = 'MathType for Atto';
$string['wirispluginfortinymce'] = 'MathType for TinyMCE';
