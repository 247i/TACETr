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
 * Strings for component 'auth', language 'ta', version '4.0'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'கிடைக்கும் அங்கீகார கூடுதல்';
$string['allowaccountssameemail'] = 'அதே மின்னஞ்சல் கணக்குகளை அனுமதிக்கும்';
$string['allowaccountssameemail_desc'] = 'இயன்றால், ஒன்றுக்கு மேற்பட்ட பயனர் கணக்கு அதே மின்னஞ்சல் முகவரியை பகிர்ந்து கொள்ள முடியும். இந்த கடவுச்சொல்லை மாற்றம் உறுதிப்படுத்தல் மின்னஞ்சல் உதாரணமாக , பாதுகாப்பு அல்லது தனியுரிமை சிக்கல்கள் ஏற்படலாம்.';
$string['alternatelogin'] = 'If you enter a URL here, it will be used as the login page for this site. The page should contain a form which has the action property set to <strong>\'{$a}\'</strong> and return fields <strong>username</strong> and <strong>password</strong>.<br />Be careful not to enter an incorrect URL as you may lock yourself out of this site.<br />Leave this setting blank to use the default login page.';
$string['alternateloginurl'] = 'உள்நுழைவதற்கான மாற்றுவழி யுஆர்எல்';
$string['auth_changepasswordhelp'] = 'கடவுச்சொல்லின் உதவியை மாற்றுக';
$string['auth_changepasswordhelp_expl'] = 'கடவுச்சொல் காட்டு மூலம் தங்கள் { $ a}  கடவுச்சொல்லை இழந்தது பயனர்களுக்கு கடவுச்சொல்லை காட்ட  உதவுகிறது. இதில் காட்டப்படும் ஒன்று அத்துடன் அதற்கு பதிலாக <strong> கடவுச்சொல் மாற்று  முகவரி < / strong> அல்லது  மூடில் கடவுச்சொல் மாற்று  பயன்படுத்தவும்.';
$string['auth_changepasswordurl'] = 'கடவுச்சொல்லின் யுஆர்எல்லை மாற்றுக';
$string['auth_changepasswordurl_expl'] = 'Specify the url to send users who have lost their {$a} password. Set <strong>Use standard Change Password page</strong> to <strong>No</strong>.';
$string['auth_common_settings'] = 'பொதுப்படையான அமைப்பு';
$string['auth_data_mapping'] = 'தரவு வரைபடங்கள்';
$string['auth_fieldlock'] = 'அடைக்கப்ட்ட மதிப்பு';
$string['auth_fieldlock_expl'] = '<p><b>Lock value:</b> If enabled, will prevent Moodle users and admins from editing the field directly. Use this option if you are maintaining this data in the external auth system. </p>';
$string['auth_fieldlocks'] = 'பயனாளர் புலங்களை அடைத்துவை';
$string['auth_fieldlocks_help'] = '<p>You can lock user data fields. This is useful for sites where the user data is maintained by the administrators manually by editing user records or uploading using the \'Upload users\' facility. If you are locking fields that are required by Moodle, make sure that you provide that data when creating user accounts &emdash; or the accounts will be unusable.</p><p>Consider setting the lock mode to \'Unlocked if empty\' to avoid this problem.</p>';
$string['auth_invalidnewemailkey'] = 'பிழை: நீங்கள் மின்னஞ்சல் முகவரியை ஒரு மாற்றம் உறுதி முயற்சி செய்தால் , நீங்கள் மின்னஞ்சல் மூலம் அனுப்பி URL ஐ நகலெடுத்து ஒரு தவறை செய்து இருக்கலாம் . முகவரி நகல் மற்றும் மீண்டும் முயற்சிக்கவும்.';
$string['auth_multiplehosts'] = 'Multiple hosts OR addresses can be specified (eg host1.com;host2.com;host3.com) or (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'அங்கீகார முறை { $ a} ஐ உள்ளமைக்கப்படவில்லை.';
$string['auth_outofnewemailupdateattempts'] = 'நீங்கள் இயக்க உங்கள் மின்னஞ்சல் முகவரியை புதுப்பிக்க அனுமதி முயற்சிகள் அவுட். உங்கள் புதுப்பித்தல் கோரிக்கை ரத்துசெய்யப்பட்டது';
$string['auth_passwordisexpired'] = 'உங்களுடைய கடவுச்சொல் காலம் முடிவடைந்துவிட்டது. நீங்கள் வேறொரு கடவுச்சொல்லை இப் போது மாற்ற விரும்புகிறீர்களா?';
$string['auth_passwordwillexpire'] = 'உங்களுடைய கடவுச்சொல் முடிவடையும் {$a} நாட்கள் . உங்கள் கடவுச்சொல்லை மாற்ற விரும்புகிறீர்களா?';
$string['auth_remove_delete'] = 'முழு உள் நீக்குக';
$string['auth_remove_keep'] = 'உள் வை';
$string['auth_remove_suspend'] = 'உள் தேக்கு';
$string['auth_remove_user_key'] = 'நீக்கப்பட்ட நீடிப்பு பயனர்';
$string['auth_sync_script'] = 'கிரான் ஒத்திசைவு ஸ்கிரிப்ட்';
$string['auth_updatelocal'] = 'உள்ளூர் புதுப்பி';
$string['auth_updatelocal_expl'] = '<p><b>Update local:</b> If enabled, the field will be updated (from external auth) every time the user logs in or there is a user synchronization. Fields set to update locally should be locked.</p>';
$string['auth_updateremote'] = 'வெளி புதுப்பி';
$string['auth_updateremote_expl'] = '<p><b>Update external:</b> If enabled, the external auth will be updated when the user record is updated. Fields should be unlocked to allow edits.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Updating external LDAP data requires that you set binddn and bindpw to a bind-user with editing privileges to all the user records. It currently does not preserve multi-valued attributes, and will remove extra values on update. </p>';
$string['auth_user_create'] = 'பயனாளர் உருவாக்கத்தை செயல்படுத்து';
$string['auth_user_creation'] = 'New (anonymous) users can create user accounts on the external authentication source and confirmed via email. If you enable this , remember to also configure module-specific options for user creation.';
$string['auth_usernameexists'] = 'Selected username already exists. Please choose a new one.';
$string['authenticationoptions'] = 'Authentication options';
$string['authinstructions'] = 'Here you can provide instructions for your users, so they know which username and password they should be using.  The text you enter here will appear on the login page.  If you leave this blank then no instructions will be printed.';
$string['authloginviaemail'] = 'மின்னஞ்சல் வழியாக நுழைய அனுமதி';
$string['authloginviaemail_desc'] = 'பயனர்கள் தளத்தில் உள்நுழைவு பயனர் பெயர் மற்றும் மின்னஞ்சல் முகவரி ( தனிப்பட்ட என்றால் ) இருவரும் பயன்படுத்தலாம்';
$string['auto_add_remote_users'] = 'தானியங்கி தொலை பயனர் சேர்க்க';
$string['changepassword'] = 'கடவுச்சொல்  மாற்று முகவரி';
$string['changepasswordhelp'] = 'Here you can specify a location at which your users can recover or change their username/password if they\'ve forgotten it.  This will be provided to users as a button on the login page and their user page.  if you leave this blank the button will not be printed.';
$string['chooseauthmethod'] = 'அங்கீகார முறையாக தேர்தெடுக்கவும்';
$string['chooseauthmethod_help'] = 'இந்த அமைப்பு இயக்கப்படும் அங்கீகார கூடுதல் பயனர் பதிவுகள் தேர்வு செய்யப்பட வேண்டும் போது பயன்படுத்தப்படும் அங்கீகார முறை , இல்லையெனில் பயனர் இனி புகுபதிகை செய்ய முடியும் , பயனர் உள்நுழைவதை தடுக்க " உள்நுழைவு தேவையில்லை" தேர்வு தீர்மானிக்கிறது .';
$string['createpassword'] = 'கடவுச்சொல்லை உருவாக்க மற்றும் பயனர் தெரிவிக்க';
$string['createpasswordifneeded'] = 'தேவையான கடவுச்சொல்லை உருவாக்குக.';
$string['emailchangecancel'] = 'மின்னஞ்சல் மாற்றம் ரத்து';
$string['emailchangepending'] = 'நிலுவையில் மாற்றம் உள்ளது .  உங்களுக்கு அனுப்பி இணைப்பை திறக்க {$ a-> preference_newemail }';
$string['emailnowexists'] = 'நீங்கள் உங்கள் சுயவிவர ஒதுக்க முயற்சி மின்னஞ்சல் முகவரியை உங்கள் அசல் கோரிக்கை என்பதால் வேறு யாராவது ஒதுக்கப்படும். மின்னஞ்சல் முகவரி மாற்றம் உங்கள் கோரிக்கை இதன்மூலம் ரத்து, ஆனால் நீங்கள் வேறு ஒரு முகவரியை மீண்டும் முயற்சிக்கலாம்';
$string['emailupdate'] = 'மின்னஞ்சல் முகவரி மேம்படுத்தல்';
$string['emailupdatesuccess'] = 'மின்னஞ்சல் முகவரி <em>{$a->fullname}</em> வெற்றிகரமாக மேம்படுத்தப்பட்டது  <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'மின்னஞ்சல் மேம்படுத்தல் உறுதிப்படுத்தல் {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'கடவுச்சொற்கள் மிகவும் { $ a} ஐ தொடர்ந்து ஒத்த எழுத்துக்களை வேண்டும்.';
$string['errorminpassworddigits'] = 'கடவுச்சொற்கள் குறைந்தது {$a } இலக்கங்கள் இருக்க வேண்டும்.';
$string['errorminpasswordlength'] = 'கடவுச்சொற்கள் குறைந்தது { $a}  எழுத்துகள் இருக்க வேண்டும்';
$string['errorminpasswordlower'] = 'கடவுச்சொற்கள் குறைந்தது { $ a} ஐ சிறிய ஆங்கில எழுத்து(கள்) இருக்க வேண்டும்.';
$string['errorminpasswordnonalphanum'] = 'கடவுச்சொற்கள் குறைந்தது { $a} அல்லாத எண்ணெழுத்து எழுத்து (கள்) இருக்க வேண்டும்.';
$string['errorminpasswordupper'] = 'கடவுச்சொற்கள் குறைந்தது {$a } பெரிய ஆங்கில எழுத்து (கள்) இருக்க வேண்டும்.';
$string['errorpasswordreused'] = 'இந்த கடவுச்சொல்லை முன் பயன்படுத்தப்படும், மீண்டும் பயன்படுத்த செய்ய அனுமதி இல்லை';
$string['errorpasswordupdate'] = 'கடவுச்சொல்லை மாற்றுவதில் பிழை , கடவுச்சொல் மாற்றப்படவில்லை';
$string['eventuserloggedin'] = 'பயனர் உள்நுழைந்திருக்கிறார்';
$string['eventuserloggedinas'] = 'பயனர் மற்றொரு பயனராக உள்நுழைந்திருக்கிறார்';
$string['eventuserloginfailed'] = 'பயனர் உள்நுழைவு தோல்வியடைந்தது';
$string['forcechangepassword'] = 'கடவுச்சொல் மாற்றத்தை திணி';
$string['forcechangepassword_help'] = 'Force users to change password on their next login to Moodle.';
$string['forcechangepasswordfirst_help'] = 'Force users to change password on their first login to Moodle.';
$string['forgottenpasswordurl'] = 'மறந்து கடவுச்சொல் முகவரி';
$string['guestloginbutton'] = 'பார்வையாளர் உள்நுழை பொத்தான்';
$string['incorrectpleasetryagain'] = 'தவறானது . தயவு செய்து மீண்டும் முயற்சிக்கவும்.';
$string['infilefield'] = 'கோப்புபின் துறையில் தேவைப்படும்';
$string['informminpassworddigits'] = 'குறைந்தது {$a} இலக்கங்கள்';
$string['informminpasswordlength'] = 'குறைந்தது {$a} எழுத்துக்கள்';
$string['informminpasswordlower'] = 'குறைந்தது {$a} சிறிய ஆங்கில எழுத்துக்கள்';
$string['instructions'] = 'தகவல்கள்';
$string['internal'] = 'உள்ளான';
$string['locked'] = 'Locked';
$string['md5'] = 'MD5 encryption';
$string['passwordhandling'] = 'Password field handling';
$string['plaintext'] = 'எழுத்து மட்டும்';
$string['recaptcha_link'] = 'auth/email';
$string['showguestlogin'] = 'You can hide or show the guest login button on the login page.';
$string['stdchangepassword'] = 'Use standard Change Password Page';
$string['stdchangepassword_expl'] = 'If the external authentication system allows password changes through Moodle, switch this to Yes. This setting overrides \'Change Password URL\'.';
$string['stdchangepassword_explldap'] = 'NOTE: It is recommended that you use LDAP over an SSL encrypted tunnel (ldaps://) if the LDAP server is remote.';
$string['unlocked'] = 'அடைக்கப்படவில்லை';
$string['unlockedifempty'] = 'Unlocked if empty';
$string['update_never'] = 'ஒருபோதும்';
$string['update_oncreate'] = 'உருவாக்கும் போது';
$string['update_onlogin'] = 'ஒவ்வொரு முறை உள்நுழையும் போது';
$string['update_onupdate'] = 'சரிசெய்யும் போது';
