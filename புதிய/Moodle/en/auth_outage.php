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
 * Strings for component 'auth_outage', language 'en', version '4.0'.
 *
 * @package     auth_outage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'When the allowed IPs list is empty we will not block anyone. You can add your own IP address (<i>{$a->ip}</i>) and block all other IPs.';
$string['allowedipshasmyip'] = 'Your IP (<i>{$a->ip}</i>) is in the list and you will not be blocked out during an Outage.';
$string['allowedipshasntmyip'] = 'Your IP (<i>{$a->ip}</i>) is not in the list and you will be blocked out during an outage.';
$string['allowedipsnoconfig'] = 'Your config.php does not have the extra setup to allow blocking via IP.<br />Please refer to our <a href="https://github.com/catalyst/moodle-auth_outage#installation" target="_blank">README.md</a> file for more information.';
$string['auth_outagedescription'] = 'Auxiliary plugin that warns users about a future outage and prevents them from logging in once the outage starts.';
$string['autostart'] = 'Auto start maintenance mode.';
$string['autostart_help'] = 'If selected, when the outage starts it will automatically turn on Moodle maintenance mode.';
$string['builtinallowediplist'] = 'Builtin Allowed IP List';
$string['builtinallowediplist_desc'] = 'A second allowed IP list which makes it easier to have some IPs forced in config.php and others editable in the UI';
$string['clicreateexamples'] = 'Create an outage starting in 10 seconds\\n\\n> php create.php -s=10';
$string['clicreatehelp'] = 'Creates a new outage.';
$string['clicreateparamautostart'] = 'must be Y or N, sets if the outage automatically triggers maintenance mode.';
$string['clicreateparamblock'] = 'blocks until outage starts.';
$string['clicreateparamclone'] = 'clone another outage except for the start time.';
$string['clicreateparamdescription'] = 'the description of the outage.';
$string['clicreateparamduration'] = 'how many seconds should the outage last.';
$string['clicreateparamhelp'] = 'shows parameters help.';
$string['clicreateparamonlyid'] = 'only outputs the new outage id, useful for scripts.';
$string['clicreateparamstart'] = 'in how many seconds should this outage start or unix time to start outage. Required.';
$string['clicreateparamtitle'] = 'the title of the outage.';
$string['clicreateparamwarn'] = 'how many seconds before it starts to display a warning.';
$string['clierrorinvalidvalue'] = 'Invalid value for parameter: {$a->param}';
$string['clierrorinvalidvalueemptystring'] = 'Param --{$a->param} must not be an empty string';
$string['clierrorinvalidvaluenegativenumber'] = 'Param --{$a->param} must be a positive number';
$string['clierrorinvalidvaluenotbool'] = 'Param --{$a->param} must be set to either Y or N';
$string['clierrorinvalidvaluenotid'] = 'Param --{$a->param} must be an id number';
$string['clierrorinvalidvaluenotnumber'] = 'Param --{$a->param} must be a number';
$string['clierrorinvalidvaluenotstring'] = 'Param --{$a->param} must be a string';
$string['clierrormissingparamaters'] = 'You must specify the start time, use --help for more information.';
$string['clierroroutagechanged'] = 'Outage was changed while waiting.';
$string['clierroroutageended'] = 'Outage has already ended.';
$string['clierroroutagenotfound'] = 'Outage not found.';
$string['clifinishexamples'] = '';
$string['clifinishhelp'] = 'Finishes an ongoing outage.';
$string['clifinishnotongoing'] = 'Outage is not ongoing.';
$string['clifinishparamactive'] = 'finishes the currently active outage.';
$string['clifinishparamhelp'] = 'shows parameters help.';
$string['clifinishparamoutageid'] = 'the id of the outage to finish.';
$string['cliinmaintenancemode'] = 'Moodle maintenance mode is on. Use "php admin/cli/maintenance.php --disable" to disable it before finishing the outage.';
$string['clioutagecreated'] = 'Outage created, id: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'You must use --outageid=# or --active parameter but not both.';
$string['cliwaitforitexamples'] = '';
$string['cliwaitforithelp'] = 'Waits until an outage starts.';
$string['cliwaitforitoutagestarted'] = 'Outage started!';
$string['cliwaitforitoutagestartingin'] = 'Outage starting in {$a->countdown}.';
$string['cliwaitforitparamactive'] = 'wait for the currently active outage.';
$string['cliwaitforitparamhelp'] = 'shows parameters help.';
$string['cliwaitforitparamoutageid'] = 'the id of the outage to wait until it starts.';
$string['cliwaitforitparamsleep'] = 'maximum amount of seconds before status output.';
$string['cliwaitforitparamverbose'] = 'enable verbose mode.';
$string['clone'] = 'Clone';
$string['configurationdisabled'] = 'The authentication plugin \'Outage\' is disabled. Please enable it in the site administration it and try again.';
$string['configurationinaccessiblewwwroot'] = 'Could not access <b>{$a->wwwroot}</b> from the server, creation of outages may fail.';
$string['configurationwarning'] = 'The outage plugin is not properly configured, please refer to <a href="https://github.com/catalyst/moodle-auth_outage/blob/master/README.md#installation" target="_blank">README.md</a> for more information.';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Description';
$string['defaultdescriptiondescription'] = 'Default warning message for outages. Use {{start}} and {{stop}} placeholders as required.';
$string['defaultdescriptionvalue'] = 'There is an scheduled maintenance from {{start}} to {{stop}} and our system will not be available during that time.';
$string['defaultlayoutcss'] = 'Layout CSS';
$string['defaultlayoutcssdescription'] = 'This CSS code can be used to override the Outage Warning Bar CSS.';
$string['defaultoutageautostart'] = 'Outage auto start';
$string['defaultoutageautostartdescription'] = 'If the outage should automatically trigger maintenance mode once it starts, locking down the whole site.';
$string['defaultoutageduration'] = 'Outage duration';
$string['defaultoutagedurationdescription'] = 'Default duration (in minutes) of an outage.';
$string['defaulttime'] = 'Default time';
$string['defaulttimedescription'] = 'The default time for the next outage, expressed in natural language eg "next Thursday 7pm". See <a target=_blank href="https://www.php.net/manual/en/datetime.formats.relative.php">PHP relative dates</a>';
$string['defaulttitle'] = 'Title';
$string['defaulttitledescription'] = 'Default title for outages. Use {{start}} and {{stop}} placeholders as required.';
$string['defaulttitlevalue'] = 'System down from {{start}} for {{duration}}';
$string['defaultwarningduration'] = 'Warning duration';
$string['defaultwarningdurationdescription'] = 'Default warning time (in minutes) for outages.';
$string['description'] = 'Public Description';
$string['description_help'] = 'A full description of the outage, publicly visible by all users.';
$string['finish'] = 'Finish';
$string['info15secondsbefore'] = '15 seconds before';
$string['infoendofoutage'] = 'end of outage';
$string['infofrom'] = 'From:';
$string['infohidewarning'] = 'no warning bar';
$string['infopagestaticgenerated'] = 'This warning was generated on {$a->time}.';
$string['infostart'] = 'start';
$string['infostartofwarning'] = 'start of warning';
$string['infostaticpage'] = 'static page';
$string['infountil'] = 'Until:';
$string['ips_combine'] = 'The IPs listed above will be combined with the IPs listed below.';
$string['logformaintmodeconfig'] = 'Update maintenance mode configuration.';
$string['logformaintmodeconfigcomplete'] = 'Updating maintenance mode configuration complete.';
$string['menumanage'] = 'Manage outages';
$string['menusettings'] = 'Settings';
$string['messageoutagebackonline'] = 'We are back online!';
$string['messageoutagebackonlinedescription'] = 'You may resume browsing safely.';
$string['messageoutageongoing'] = 'Back online at {$a->stop}.';
$string['messageoutagewarning'] = 'Shutting down in {{countdown}}';
$string['na'] = 'n/a';
$string['notfound'] = 'No outages found.';
$string['outage:updatenotify'] = '';
$string['outage:viewinfo'] = 'View outage info';
$string['outageclone'] = 'Clone outage';
$string['outageclonecrumb'] = 'Clone';
$string['outagecreate'] = 'Create outage';
$string['outagecreatecrumb'] = 'Create';
$string['outagedelete'] = 'Delete outage';
$string['outagedeletewarning'] = 'You are about to permanently delete the outage below. This cannot be undone.';
$string['outageduration'] = 'Outage duration';
$string['outageduration_help'] = 'How long the outage lasts after it starts.';
$string['outagedurationerrorinvalid'] = 'Outage duration must be positive.';
$string['outageedit'] = 'Edit outage';
$string['outageeditcrumb'] = 'Edit';
$string['outagefinish'] = 'Finish outage';
$string['outagefinishwarning'] = 'You are about to mark this outage as finished. The system will be immediately back online.';
$string['outageslistfuture'] = 'Planned outages';
$string['outageslistpast'] = 'Outage history';
$string['pluginname'] = 'Outage manager';
$string['privacy:no_data_reason'] = 'The Outage authentication plugin does not store any personal data.';
$string['removeselectors'] = 'Remove selectors';
$string['removeselectorsdescription'] = 'CSS selectors to remove when rendering a static themed maintenance page. One selector per line.';
$string['settingssectiondefaults'] = 'Default Outage Parameters';
$string['settingssectiondefaultsdescription'] = 'Configure the default values used when creating new outages.';
$string['settingssectionplugin'] = 'Plugin Configuration';
$string['settingssectionplugindescription'] = 'General outage management plugin settings.';
$string['starttime'] = 'Start date and time';
$string['starttime_help'] = 'At which date and time the outage starts, preventing general access to the system.';
$string['tableheaderduration'] = 'Duration';
$string['tableheaderdurationactual'] = 'Actual duration';
$string['tableheaderdurationplanned'] = 'Planned duration';
$string['tableheaderstartedtime'] = 'Started on';
$string['tableheaderstarttime'] = 'Starts on';
$string['tableheadertitle'] = 'Title';
$string['tableheaderwarnbefore'] = 'Warns before';
$string['tablestarttimefutureformat'] = '{$a->absolute}<br />In {$a->relative}';
$string['tablestarttimepastformat'] = '{$a->absolute}<br />{$a->relative} ago';
$string['taskupdatestaticpage'] = 'Update static outage page';
$string['textplaceholdershint'] = 'You can use {{start}}, {{stop}} and {{duration}} as placeholders on the title and description.';
$string['title'] = 'Title';
$string['title_help'] = 'A short title to for this outage. It will be displayed on the warning bar and on the calendar.';
$string['titleerrorinvalid'] = 'Title cannot be left blank.';
$string['titleerrortoolong'] = 'Title cannot have more than {$a} characters.';
$string['warningduration'] = 'Warning duration';
$string['warningduration_help'] = 'How long before the start of the outage should the warning be displayed.';
$string['warningdurationerrorinvalid'] = 'Warning duration must be positive.';
$string['warningreenablemaintenancemode'] = 'Please note that saving this outage will re-enable maintenance mode.<br />Untick "Auto start maintenance mode" if you want to prevent this.';
