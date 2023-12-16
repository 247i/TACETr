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
 * Strings for component 'auth_mnet', language 'ta_lk', version '4.3'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'இது "ஆம்" ஆக தகவமைக்கப்பட்டிருந்தால் ஒரு சேய்மைப் பயனாளர் முதல் தடவை புகுபதிகை செய்யும் போது ஒரு உள்ளமை பயனர் பதிவும் தானாக உருவாக்கப்படுகிறது.';
$string['auth_mnet_roamin'] = 'இந்த ஓம்புநரின் பயனாளர்கள், உங்கள் தளத்தில் உலாவலாம்.';
$string['auth_mnet_roamout'] = 'Your users can roam out to these hosts';
$string['auth_mnet_rpc_negotiation_timeout'] = 'XMLRPC transport இல், அத்தாட்சிப்படுத்துவதற்கான கால எல்லை, விநாடிகளில்.';
$string['auth_mnetdescription'] = 'உங்கள் Moodle வலையமைப்புத் தகவமைப்புகளிற்கமைய வரையறுக்கப்பட்டுள்ள நம்பிக்கைவலையத்திற்கமைய பயனாளர்கள் அத்தாட்சிப்படுத்தப்படுவர்.';
$string['auto_add_remote_users'] = 'தொலைப் பயனாளர்களைத் தானாகச் சேர்த்தல்';
$string['pluginname'] = 'Moodle வலையமைப்பு அத்தாட்சிப்படுத்தல்';
$string['rpc_negotiation_timeout'] = 'RPC பேர நேர முடிவடைவு';
$string['sso_idp_description'] = 'Publish this service to allow your users to roam to the {$a} Moodle site without having to re-login there. <ul><li><em>Dependency</em>: You must also <strong>subscribe</strong> to the SSO (Service Provider) service on {$a}.</li></ul><br />Subscribe to this service to allow authenticated users from {$a} to access your site without having to re-login. <ul><li><em>Dependency</em>: You must also <strong>publish</strong> the SSO (Service Provider) service to {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (Identity Provider)';
$string['sso_mnet_login_refused'] = 'பயனாளர் {$a->user} , {$a->host} இலிருந்து புகுபதிகை செய்ய அனுமதிக்கப்படவில்லை.';
$string['sso_sp_description'] = 'Publish this service to allow authenticated users from {$a} to access your site without having to re-login. <ul><li><em>Dependency</em>: You must also <strong>subscribe</strong> to the SSO (Identity Provider) service on {$a}.</li></ul><br />Subscribe to this service to allow your users to roam to the {$a} Moodle site without having to re-login there. <ul><li><em>Dependency</em>: You must also <strong>publish</strong> the SSO (Identity Provider) service to {$a}.</li></ul><br />
sso_sp_description';
$string['sso_sp_name'] = 'SSO (சேவை வழங்குனர்)';
