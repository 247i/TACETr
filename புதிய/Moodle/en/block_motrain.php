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
 * Strings for component 'block_motrain', language 'en', version '4.0'.
 *
 * @package     block_motrain
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'Account ID';
$string['accountid_desc'] = 'The ID of the account.';
$string['addactivityellipsis'] = 'Add activity...';
$string['addcourseellipsis'] = 'Add course...';
$string['addon'] = 'Add-on';
$string['addons'] = 'Addons';
$string['addonstate'] = 'State';
$string['addonstate_desc'] = 'The state of the add-on. Some add-ons require some settings to be set before they can be enabled, or enable themselves.';
$string['addprogramellipsis'] = 'Add program...';
$string['adminscanearn'] = 'Admins can earn coins';
$string['adminscanearn_desc'] = 'When enabled, this allows administrators to earn coins.';
$string['apihost'] = 'API endpoint';
$string['apihost_desc'] = 'The URL at which the API is located.';
$string['apikey'] = 'API key';
$string['apikey_desc'] = 'The API key to authenticate with the API.';
$string['areyousurerefreshallinteam'] = 'Are you sure you want to refresh all players in the team? This will remove all mappings.';
$string['areyousurerefreshandpushallinteam'] = 'Are you sure you want to refresh all players in the team? This will remove all mappings, and push all users to the dashboard.';
$string['autopush'] = 'Automatically push users';
$string['autopush_help'] = 'When enabled, users will be automatically added as players in the Motrain dashbard, even before they start earning coins. This process is done during cron, it may take several minutes for players to appear on the dashboard. Note that this does not apply to existing cohort-team associations, only new members and new associations.';
$string['blocked'] = 'Blocked';
$string['butpaused'] = 'But paused';
$string['cachedef_coins'] = 'User coins';
$string['cachedef_comprules'] = 'Completion rules';
$string['cachedef_metadata'] = 'Metadata';
$string['cachedef_programrules'] = 'Program rules';
$string['cachedef_purchasemetadata'] = 'Purchases metadata';
$string['cachepurged'] = 'Cache purged';
$string['cohort'] = 'Cohort';
$string['cohort_help'] = 'The cohort to associate with the team, or "All users" when no specific cohort is required.';
$string['coinrules'] = 'Coin rules';
$string['coins'] = 'Coins';
$string['coinsimage'] = 'Coins image';
$string['coinsimage_help'] = 'Use setting to use an alternate image representing the coins displayed in the block.';
$string['completingacourse'] = 'Completing a course';
$string['completingaprogram'] = 'Completing a program';
$string['completingn'] = 'Completing {$a}';
$string['configaccentcolor'] = 'Accent colour';
$string['configaccentcolor_help'] = 'The accent colour to use in the block, this accepts any CSS value.';
$string['configbgcolor'] = 'Background colour';
$string['configbgcolor_help'] = 'The main background colour to use in the block, this accepts any CSS value.';
$string['configfootercontent'] = 'Footer content';
$string['configfootercontent_help'] = 'The content to display at the bottom of the block.';
$string['configtitle'] = 'Title';
$string['connect'] = 'Connect';
$string['courseandactivitycompletion'] = 'Course and activity completion';
$string['coursecompletion'] = 'Course completion';
$string['createassociation'] = 'Create association';
$string['dashboard'] = 'Dashboard';
$string['defaultparens'] = '(default)';
$string['defaulttitle'] = 'Motrain';
$string['disabled'] = 'Disabled';
$string['disconnect'] = 'Disconnect';
$string['editassociation'] = 'Edit association';
$string['emailtemplate'] = 'Email template';
$string['enableaddon'] = 'Enable add-on';
$string['enableaddon_help'] = 'An add-on must be enabled to work.';
$string['enabled'] = 'Enabled';
$string['errorconnectingwebhookslocalnotificationsdisabled'] = 'An error occurred while connecting the webhooks. Sending local notifications has been disabled.';
$string['errorwhiledisconnectingwebhook'] = 'An error occurred while disconnecting the webhook: {$a}.';
$string['eventcoinsearned'] = 'Coins earned';
$string['globalsettings'] = 'Global settings';
$string['infopagetitle'] = 'Info';
$string['inspect'] = 'Inspect';
$string['inspectuser'] = 'Inspect user';
$string['invalidcoinamount'] = 'Invalid amount of coins';
$string['isenabled'] = 'Plugin enabled';
$string['isenabled_desc'] = 'To enable the plugin, please fill in the settings below with the correct information. For as long as the API details are correct, the plugin will enable itself.';
$string['ispaused'] = 'Pause plugin';
$string['ispaused_help'] = 'When paused, the plugin will not send information to the Motrain dashboard. Coins will not be awarded, and players won\'t be created. Additionally, users cannot see the block, and cannot access the store. You may want to mark the plugin as paused until its has been configured fully (rules, mappings), or during an account migration.';
$string['lastwebhooktime'] = 'Last webhook received: {$a}';
$string['leaderboard'] = 'Leaderboard';
$string['level'] = 'Level';
$string['leveln'] = 'Level {$a}';
$string['localteammgmt'] = 'Local team management';
$string['localteammgmt_help'] = 'When enabled, the team of a player will be dictated by the setup in Moodle, and reflected on the dashboard in Motrain. This allows for the teams to be managed locally. Note that in some circumstances, when players are migrated to a different team they can lose their ranking in the leaderboard.';
$string['manageaddons'] = 'Manage add-ons';
$string['maximumlevel'] = 'Maximum level';
$string['messageprovider:notification'] = 'Notifications in relation to Motrain';
$string['messagetemplates'] = 'Message templates';
$string['messagetemplatesintro'] = 'The following templates are used when notifications are sent to players from this site. The system will pick the template language that best matches the language of the recipient, or use the fallback template when none fit.';
$string['metadatacache'] = 'Metadata cache';
$string['metadatacache_help'] = 'The plugin keeps a cache of some metadata from the API to improve performance. It stores information such as which leaderboards are enabled, item names, etc. After making some changes on the Motrain dashboard, you may need to manually purge this cache. You can do so by clicking the link above.';
$string['metadatasyncdisabled'] = 'Metadata synchronisation is disabled.';
$string['motrain:accessdashboard'] = 'Access the Motrain dashboard';
$string['motrain:addinstance'] = 'Add a new Motrain block';
$string['motrain:awardcoins'] = 'Award coins to other users';
$string['motrain:earncoins'] = 'Earn coins';
$string['motrain:manage'] = 'Manage aspects of the Motrain integration.';
$string['motrain:myaddinstance'] = 'Add the Motrain block on the dashboard';
$string['motrain:view'] = 'View the content of the Motrain block';
$string['motrainaddons'] = 'Motrain add-ons';
$string['motrainemaillookup'] = 'Motrain (Email lookup)';
$string['motrainidlookup'] = 'Motrain (ID lookup)';
$string['multiteamsusers'] = 'Multi teams users';
$string['nextlevelin'] = 'Next level in';
$string['noaddoninstalled'] = 'No add-ons have been installed yet.';
$string['nocohortallusers'] = 'All users';
$string['nooptions'] = 'No options';
$string['noredemptionessagefound'] = '[No information found]';
$string['noteamsyetcreatefirst'] = 'No team association exist yet, please start by creating one.';
$string['notenabled'] = 'The plugin is not enabled, please check its settings.';
$string['notfound'] = 'Not found';
$string['pendingorders'] = 'Pending orders';
$string['placeholdercoins'] = 'The number of coins associated.';
$string['placeholderitemname'] = 'The name of the associated item.';
$string['placeholderitemnameexample'] = 'Fictitious Item Name';
$string['placeholderitems'] = 'The names (and quantity) of the associated items.';
$string['placeholderitemsexample'] = '1x Fictitious Item Name, 2x Other Item Name';
$string['placeholdermessage'] = 'A message associated with this event.';
$string['placeholdermessageexample'] = 'A message associated with this event.';
$string['placeholderoptionalmessagefromadmin'] = 'An optional message from the admin.';
$string['playerid'] = 'Player ID';
$string['playeridnotfound'] = 'The player associated with the current user could not be found, please contact the adminstrator.';
$string['playermapping'] = 'Player mapping';
$string['playermappingintro'] = 'A player mapping is the association between a local user and a player on the Motrain dashboard. You can find the list of known mappings below. Mappings with an error will not be re-attempted, please fix the issue and reset the mapping.';
$string['playersmapping'] = 'Players mapping';
$string['pleasewait'] = 'Please wait...';
$string['pluginispaused'] = 'The plugin is currently paused.';
$string['pluginname'] = 'Motrain';
$string['pluginnotenabledseesettings'] = 'The plugin is not enabled, please see its settings.';
$string['previewemail'] = 'Send preview email to';
$string['previewemail_help'] = 'The email to which the preview is sent. This value is not saved.';
$string['previewnotsent'] = 'The preview email could not be sent.';
$string['previewsent'] = 'The preview email was sent using the content below. Note that the template has not yet been saved.';
$string['primaryteam'] = 'Primary team';
$string['privacy:metadata:coinsgained'] = 'Information sent when awarding coins.';
$string['privacy:metadata:coinsgained:coins'] = 'The number of coins to award';
$string['privacy:metadata:coinsgained:reason'] = 'The reason for the award';
$string['privacy:metadata:log'] = 'Coins log';
$string['privacy:metadata:log:actionhash'] = 'The hash of the action';
$string['privacy:metadata:log:actionname'] = 'The action name';
$string['privacy:metadata:log:broadcasterror'] = 'The error for failed broadcasts';
$string['privacy:metadata:log:coins'] = 'The number of coins';
$string['privacy:metadata:log:contextid'] = 'The context ID';
$string['privacy:metadata:log:timebroadcasted'] = 'The time at which the log was broadcasted';
$string['privacy:metadata:log:timecreated'] = 'The time at which the log was created';
$string['privacy:metadata:log:userid'] = 'The user ID';
$string['privacy:metadata:playermap'] = 'Mapping of local users and Motrain players';
$string['privacy:metadata:playermap:accountid'] = 'The Motrain account ID';
$string['privacy:metadata:playermap:blocked'] = 'Whether this mapping is blocked';
$string['privacy:metadata:playermap:blockedreason'] = 'The reason for it to be blocked';
$string['privacy:metadata:playermap:playerid'] = 'The Motrain player ID';
$string['privacy:metadata:playermap:userid'] = 'The user ID';
$string['privacy:metadata:remoteplayer'] = 'Informatin exchanged when creating or identifying a Motrain player.';
$string['privacy:metadata:remoteplayer:email'] = 'Email';
$string['privacy:metadata:remoteplayer:firstname'] = 'First name';
$string['privacy:metadata:remoteplayer:lastname'] = 'Last name';
$string['privacy:metadata:userspush'] = 'A queue of users to be pushed to the Motrain dashboard.';
$string['privacy:metadata:userspush:userid'] = 'The user ID';
$string['privacy:path:logs'] = 'Logs';
$string['privacy:path:mappings'] = 'Mappings';
$string['programcompletion'] = 'Program completion';
$string['purchases'] = 'My purchases';
$string['purgecache'] = 'Purge cache';
$string['reallydeleteassociation'] = 'Do you really want to delete the association?';
$string['refresh'] = 'Refresh';
$string['result'] = 'Result';
$string['resyncnow'] = 'Resync now';
$string['saverules'] = 'Save rules';
$string['saving'] = 'Saving...';
$string['secondaryteam'] = 'Secondary team {$a}';
$string['sendlocalnotifications'] = 'Send local notifications';
$string['sendlocalnotifications_help'] = 'When enabled, Moodle will deliver messages to players instead of Motrain. To prevent messages from being sent twice, you should disable \'Outgoing communications to player\' from the Motrain dashboard. The messages sent to players are customisable in the \'Message templates\' settings page. Webhooks are required for this to work.';
$string['sendlocalnotificationsdisabledrequiresenabled'] = 'Sending local notifications has been disabled, it cannot be enabled before the plugin itself is enabled.';
$string['sendlocalnotificationsdisabledwithwebhooks'] = 'Sending local notifications has been disabled, it requires webhooks to function.';
$string['sendlocalnotificationsnotenabledseesettings'] = 'Sending local notifications is not enabled, please see settings.';
$string['sendpreview'] = 'Send preview';
$string['setup'] = 'Set-up';
$string['sourcex'] = 'Source: {$a}';
$string['spend'] = 'Spend';
$string['store'] = 'Store';
$string['taskpushusers'] = 'Push users to dashboard';
$string['team'] = 'Team';
$string['team_help'] = 'The Motrain team that the cohort will be associated with.';
$string['teamassociationcreated'] = 'Team association created.';
$string['teamassociations'] = 'Team associations';
$string['teams'] = 'Teams';
$string['templatecontent'] = 'Content';
$string['templatecontent_help'] = 'The content of the message to send.

The following placeholders are available:

- `[message]`: An optional associated message (e.g. order approval, automatic order), if any.
- `[itemname]`: The name of the associated item, if any.
- `[firstname]`: The first name of the player.
- `[lastname]`: The last name of the player.
- `[fullname]`: The full name of the player.';
$string['templatedeleted'] = 'The template was deleted';
$string['templateenabled'] = 'Enabled';
$string['templateenabled_help'] = 'Enable the template when it is ready to be sent to players.';
$string['templateforlangalreadyexists'] = 'A template for this language already exists.';
$string['templatelanguage'] = 'Template language';
$string['templatelanguage_help'] = 'The language of the template will be matched with the language of the intended recipient.';
$string['templatelanguageanyfallback'] = 'All languages (fallback)';
$string['templatesaved'] = 'The template was saved';
$string['templatesubject'] = 'Subject';
$string['templatesubject_help'] = 'The subject of the message to send.

The following placeholders are available:

- `[itemname]`: The name of the associated item, if any.
- `[firstname]`: The first name of the player.
- `[lastname]`: The last name of the player.
- `[fullname]`: The full name of the player.';
$string['templatetypeauctionwon'] = 'Auction won';
$string['templatetypemanualaward'] = 'Player manually awarded';
$string['templatetyperafflewon'] = 'Raffle won';
$string['templatetyperedemptionrequestaccepted'] = 'Order request approved';
$string['templatetyperedemptionselfcompleted'] = 'Automatic order completed';
$string['templatetyperedemptionshippingordersubmitted'] = 'Shipping order submitted';
$string['templatetypesweepstakeswon'] = 'Sweepstakes won';
$string['templatex'] = 'Template: {$a}';
$string['therearexusersinmultipleteams'] = 'There are {$a} users in multiple teams.';
$string['tickets'] = 'Tickets';
$string['unknownactivityn'] = 'Unknown activity {$a}';
$string['unknowncoursen'] = 'Unknown course {$a}';
$string['unknownprogramn'] = 'Unknown program {$a}';
$string['unknowntemplatecode'] = 'Unknown template code \'{$a}\'';
$string['usecohorts'] = 'Use cohorts';
$string['usecohorts_help'] = 'When enabled, users can be organised in different teams using cohorts. Note that when cohorts are not used all Moodle users will be considered as potential players.';
$string['userdoesnotexist'] = 'The user does not exist.';
$string['userecommended'] = 'Use recommended';
$string['useridoremail'] = 'User ID or email';
$string['usernotplayer'] = 'The user does not meet the criteria to be a player.';
$string['userteamnotfound'] = 'The team of the current user could not be found, please contact the adminstrator.';
$string['viewlist'] = 'View list';
$string['webhooksconnected'] = 'Webhooks connected';
$string['webhooksconnected_help'] = 'Webhooks are used to let Motrain communicate directly with Moodle. For instance, they are used to send local notifications to players. Webhooks are not processed when the plugin is not enabled, or paused.';
$string['webhooksdisconnected'] = 'Webhooks disconnected';
