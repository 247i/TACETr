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
 * Strings for component 'mnet', language 'ta_lk', version '4.3'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (சுய-கையொப்பமிட்ட)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (கையொப்பமிட்ட)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP unencrypted';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (சுய-கையொப்பமிட்ட)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (கையொப்பமிட்ட)';
$string['aboutyourhost'] = 'உங்கள் சேவையகம் பற்றி';
$string['accesslevel'] = 'அணுகல் மட்டம்';
$string['addhost'] = 'host சேர்';
$string['addnewhost'] = 'புதிய host ஒன்று சேர்';
$string['addtoacl'] = 'அணுகற் கட்டுப்பாட்டுக்குச் சேர்';
$string['allow'] = 'அனுமதி';
$string['applicationtype'] = 'செயலி வகை';
$string['authfail_nosessionexists'] = 'Authorisation தோல்வியுற்றது: mnet அமர்வு காணப்படவில்லை.';
$string['authfail_sessiontimedout'] = 'Authorisation தோல்வியுற்றது: mnet அமர்வு காலாவதியாயிற்று.';
$string['authfail_usermismatch'] = 'Authorisation தோல்வியுற்றது: பயனாளர் பொருந்தவில்லை.';
$string['authmnetdisabled'] = 'Moodle வலையமைப்பாக்க <em>Authentication உட்செருகல்</em> <strong>இயலாமைப்படுத்தப்பட்டுள்ளது.</strong>.';
$string['badcert'] = 'இது ஒரு செல்லுபடியான சான்றிதழ் கிடையாது.';
$string['couldnotgetcert'] = '{$a} யில் ஒரு சான்றிதழும் காணப்படவில்லை. <br />The host may be down or incorrectly configured.';
$string['couldnotmatchcert'] = 'இது தற்பொழுது இணைய வழங்கியால் வெளியிடப்பட்ட சான்றிதழுடன் பொருந்தவில்லை.';
$string['courses'] = 'பாடநெறிகள்';
$string['courseson'] = 'செயற்பாட்டிலுள்ள பாடநெறிகள்';
$string['current_transport'] = 'தற்போதைய போக்குவரத்து';
$string['currentkey'] = 'தற்போதைய மக்கள் Key';
$string['databaseerror'] = 'தரவுத்தளத்தில் விபரங்களை எழுத முடியவில்லை.';
$string['deleteaserver'] = 'ஒரு சேவையகத்தை அழித்தல்.';
$string['deletehost'] = 'host ஐ அழி';
$string['deletekeycheck'] = 'இக் key ஐ நீங்கள் சர்வ நிச்சயமாக அழிக்க விரும்புகிறீர்களா?';
$string['deleteoutoftime'] = 'இக் key ஐ அழிப்பதற்குரிய உங்கள் 60 விநாடிச் சாளரம் காலாவதியாகி விட்டது. தயவு செய்து மீண்டும் தொடங்கவும்.';
$string['deleteuserrecord'] = 'SSO ACL: {$a->host} இலிருந்து பயனாளர் \'{$a->user}\' இற்கான பதிவை அழிக்கவும்.';
$string['deletewrongkeyvalue'] = 'ஒரு தவறு நிகழ்ந்துவிட்டது. உங்களுடைய சேமிப்பகத்தின் SSL திறவுகோலை அழிக்க முயற்சிக்கவில்லை எனின், நீங்கள் கபடத்தனமான தாக்கத்திற்கு உள்ளாக்கப்பட்டிருப்பதற்கான சாத்தியமுள்ளது. ஒரு நடவடிக்கையும் மேற்கொள்ளப்படவில்லை.';
$string['deny'] = 'மறுதலி';
$string['description'] = 'விவரணம்';
$string['duplicate_usernames'] = 'நாங்கள் உங்களுடைய பயனாளர் அட்டவணையில் "mnetவழங்கி அடையாள எண்","பயனாளர் பெயர்" நிரல்களில் சுட்டியை உருவாக்க தவறிவிட்டோம். <br /> நகல் பயனாளர் பெயர்கள் உங்களுடைய பயனாளர் அட்டவணையில் இருக்கும்போது <a href="{$a}" target="_blank"> இது நிகழலாம். <br /> உங்களுடைய தரமுயர்த்தல் இன்னும் பூரணமாக வெற்றிகரமாக்க வேண்டும். மேலேயுள்ள தொடுப்பில் சொடுக்கவும், இதன் பின் இந்த பிரச்சனையை தீர்ப்பதற்குரிய அறிவுறுத்தல்கள் ஒரு புதிய சாரளத்தில் தோன்றும். தரமுயர்த்தலின் முடிவில் நீங்கள் அவற்றைப்பின்பற்றலாம்.<br />';
$string['enabled_for_all'] = '(எல்லா hosts இற்கும் இச்சேவை இயலுமைப்படுத்தபபட்டுள்ளது).';
$string['enterausername'] = 'தயவுசெய்து ஒரு பயனாளர் பெயரை அல்லது பயனாளர் பெயர்ப்பட்டியலைக் கால்புள்ளிகளால் பிரித்து உள்ளிடவும்.';
$string['expired'] = 'This key expired on';
$string['expires'] = 'Valid until';
$string['expireyourkey'] = 'இக்Keyஐ அழிக்க';
$string['expireyourkeyexplain'] = 'Moodle தானாகவே ஒவ்வொரு 28 நாட்களுக்கு ஒருமுறை உங்களுடைய திறவுச்சொற்களைத் திருப்பும் (இயல்பாகவே). ஆனால் உங்களுக்கு <em>கைமுறையாக</em> இதை எந்த நேரமும் காலாவதியாக்கும் தெரிவு உள்ளது. இந்த திறவுச்சொல் இணக்கப்பாட்டிற்கு வந்துள்ளது என நம்பினால் மட்டுமே இச் செயற்பாடு பயனுள்ளது. ஒரு பிரதியீடு உடனடியாகவே தானாகவே உருவாக்கப்படும்.<br />இந்த திறவுச்சொலை அழிப்பது, கைமுறையாக ஒவ்வொரு நிர்வாகியுடனும் தொடர்புகொண்டு அவர்களுக்கு உங்களுடைய திறவுச்சொலைக் கொடுக்கும் வரை மற்றைய செயலிகளுக்கு உங்களுடன் தொடர்புகொள்வது  சாத்தியமற்றதாகும்.';
$string['exportfields'] = 'ஏற்றுமதி செய்வதற்கான புலங்கள்';
$string['failedaclwrite'] = 'பயனாளர் \'{$a}\' இன் MNET இனை அணுகுதலிற்கான கட்டுப்பாட்டு பட்டியலில் எழுதுவதற்கு தவறிவிட்டது.';
$string['findlogin'] = 'புகுபதிகையைக் கண்டுபிடி';
$string['forbidden-function'] = 'இச்செயற்பாடு RPC இற்கு இயலுமைப்படுத்தப்படவில்லை.';
$string['forbidden-transport'] = 'The transport method you are trying to use is not permitted.';
$string['forcesavechanges'] = 'மாற்றங்களைச் சேமிக்கக் கட்டாயப்படுத்து';
$string['helpnetworksettings'] = 'MNet தொடர்பாடலைச் சீரமைக்குக';
$string['hidelocal'] = 'உள்ளகப் பயனாளர்களை மறை';
$string['hideremote'] = 'தொலைப் பயனாளர்களை மறை';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Host அல்லது பாடநெறி காணப்படவில்லை.';
$string['hostdeleted'] = 'சரி - host அழிக்கப்பட்டது.';
$string['hostexists'] = 'ஒரு பதிவு அந்த வழங்கியி்ற்கு ஏற்கனவே உள்ளதுடன் Moodle அமுலாக்கத்தில் {$a} அடயாளத்துடனுள்ளது.<br /> அந்த பதிவை திருத்துவதற்கு <em>தொடர்க</em> இல் சொடுக்குக.';
$string['hostlist'] = 'வலையமைக்கப்பட்ட வழங்கிகளினுடைய பட்டியல்';
$string['hostname'] = 'வழங்கிப்பெயர்';
$string['hostnamehelp'] = 'தொலை வழங்கியின் முழுத்தரமுள்ள தொகுதிப்பெயர். உ+ம் www.example.com';
$string['hostnotconfiguredforsso'] = 'இந்த தொலை Moodle நடவடிக்கை மையம் தொலை உள்நுழைவிற்கு சீரமைக்கப்படவில்லை.';
$string['hostsettings'] = 'வழங்கியின் சீரமைப்புக்கள்';
$string['http_self_signed_help'] = 'சுயஒப்பமிடப்பட்ட DIY SSL சான்றிதழை பாவித்து தொலை வழங்கியில்  இணைப்புகளை அனுமதிக்குக.';
$string['http_verified_help'] = 'PHP இலுள்ள சரிபார்க்கப்பட்ட SSL சான்றிதழைப் பாவித்து தொலை வழங்கியில்  இணைப்புகளை அனுமதிக்குக. https வேண்டாம்.';
$string['https_self_signed_help'] = 'PHP இலுள்ள சுயஒப்பமிடப்பட்ட DIY SSL சான்றிதழைப் பாவித்து தொலை வழங்கியில்  இணைப்புகளை http இனூடாக அனுமதிக்குக.';
$string['https_verified_help'] = 'சரிபார்க்கப்பட்ட SSL சான்றிதழைப் பாவித்து தொலை வழங்கியில்  இணைப்புகளை அனுமதிக்குக.';
$string['id'] = 'ID';
$string['idhelp'] = 'இப்பெறுமானம் தானாக வழங்கப்படுவது, அத்துடன் அதை மாற்றவும் முடியாது.';
$string['importfields'] = 'இறக்குமதி செய்வதற்கான புலங்கள்';
$string['inspect'] = 'பரிசோதிக்க';
$string['invalidaccessparam'] = 'செல்லுபடியற்ற அணுகல் parameter.';
$string['invalidactionparam'] = 'செல்லுபடியற்ற செயற்பாட்டு parameter.';
$string['invalidhost'] = 'செல்லுபடியான host identifier ஒன்றை நீங்கள் வழங்க வேண்டும்.';
$string['invalidpubkey'] = 'இந்த திறவுகோல் செல்லுபடியான SSL  திறவுகோல் அல்ல.({$a})';
$string['invalidurl'] = 'செல்லுபடியற்ற URL parameter.';
$string['ipaddress'] = 'IP முகவரி';
$string['is_in_range'] = 'IP விலாசம் &nbsp;<code>{$a}</code>&nbsp; குறிப்பது ஒரு செல்லுபடியான நம்பிக்கைக்குரிய வழங்கி.';
$string['ispublished'] = '{$a} Moodle இச்சேவையை உங்களுக்கு இயலுமைப்படுத்தி உள்ளது.';
$string['issubscribed'] = 'உங்களுடைய வழங்கியில் {$a} Moodle இந்த சேவைக்கு சந்தா செலுத்துகின்றது.';
$string['keydeleted'] = 'உங்களுடைய திறவுகோல் வெற்றிகரமாக அழிக்கப்பட்டும் பிரதியிடப்பட்டது.';
$string['keymismatch'] = 'இந்த வழங்கியிற்கான நீங்கள் வைத்திருக்கும் பொதுத் திறவுகோல் தற்போது வெளியிடப்படுகின்ற பொதுத் திறவுகோலிலிருந்து வித்தியாசமானது. தற்போது வெளியிடப்பட்ட திறவு கோல்:';
$string['last_connect_time'] = 'கடைசித் இணைப்புநேரம்';
$string['last_connect_time_help'] = 'இந்த வழங்கிக்கு நீங்கள் கடைசியாக இணைக்கப்பட்ட நேரம்.';
$string['last_transport_help'] = 'இந்த host இற்கான இறுதி இணைப்பிற்குப் பயன்படுத்தப்பட்ட transport.';
$string['listservices'] = 'சேவைகளைப் பட்டியல்ப்படுத்துக';
$string['loginlinkmnetuser'] = '<br/>நீங்கள் ஒரு Moodle வலைப்பின்னல் தொலைதூரப் பாவனையாளராக இருந்தால், <a href="{$a}"> உங்களுடைய மின்னஞ்சல் முகவரியை இங்கே உறுதிப்படுத்த முடியும் </a>, நீங்கள் உங்களுடைய உள்நுழைவுப்பக்கத்திற்கு மாற்றப்படுவீர்கள்.';
$string['logs'] = 'பதிகைகள்';
$string['method'] = 'செய்முறை';
$string['methodhelp'] = '{$a} இற்கான செய்முறை உதவி';
$string['methodsavailableonhost'] = '{$a} இல் செய்முறைகள் உள்ளன ';
$string['methodsavailableonhostinservice'] = '{$a->host} இல் {$a->service} இற்கான செய்முறைகள் உள்ளன ';
$string['methodsignature'] = '{$a} இற்கான கையொப்ப செய்முறை';
$string['mnet'] = 'Moodle வலையமைப்பாக்கம்';
$string['mnet_concatenate_strings'] = '3 சொற்கள் (வரை) ஒன்றாக்கி திருப்பி அனுப்புக.';
$string['mnet_session_prohibited'] = 'தற்போது உங்களுடைய பிரதான வழங்கியிலிருந்து பயனாளர்கள் அலைந்து திரிவதற்கு அனுமதிக்கப்படவில்லை.';
$string['mnetdisabled'] = 'Moodle வலையமைப்பு <strong>இயலாமைப்படுத்தப்பட்டுள்ளது.</strong>.';
$string['mnetidprovider'] = 'Moodle வலையமைப்பு ID வழங்குனர்';
$string['mnetpeers'] = 'இதே தரத்திலுள்ள';
$string['mnetservices'] = 'சேவைகள்';
$string['mnetsettings'] = 'Moodle வலையமைப்பு அமைப்புகள்';
$string['moodle_home_help'] = 'தொலைதூர வழங்கியிலுள்ள Moodle முகப்புப் பக்கத்திற்கான பாதை, உ.ம். /moodle/.';
$string['name'] = 'பெயர்';
$string['net'] = 'வலையமைப்பாக்கம்';
$string['networksettings'] = 'வலையமைப்பு அமைப்புகள்';
$string['never'] = 'ஒருபோதும் இல்லை';
$string['noaclentries'] = 'SSO அணுகுக் கட்டுப்பாட்டு பட்டியலில் ஒரு பதிவுகளும் இல்லை.';
$string['nocurl'] = 'PHP cURL library நிறுவப்படவில்லை.';
$string['nolocaluser'] = 'தொலைப் பயனாளருக்குரிய உள்ளகப் பதிவு காணப்படவில்லை.';
$string['nomodifyacl'] = 'MNet access control list ஐ மாற்ற உங்களுக்கு அனுமதி கிடையாது.';
$string['nonmatchingcert'] = 'சான்றிதழ் விடயம்: <br /><em>{$a}[0]</em><br /> வந்த வழங்கியுடன் பொருந்தவில்லை.';
$string['nopubkey'] = 'பொதுத் திறவுகோலைப் பெறுவதில் ஒரு பிரச்சனை இருந்தது.<br />வழங்கி Moodle வலைப்பின்னலை அனுமதிக்காதிருக்கலாம் அல்லது திறவுகோல் செல்லுபடியற்றதாக இருக்கலாம்.';
$string['nosite'] = 'தள-மட்டப் பாடநெறிகளைக் காணவில்லை.';
$string['nosuchfile'] = '{$a} கோப்பு/செயற்கூறு காணப்படவில்லை.';
$string['nosuchfunction'] = 'செயற்பாட்டிடத்தினைக் கண்டுபிடிக்கமுடியவில்லை, அல்லது செயற்பாடு RPC இலிருந்து தவிர்க்கப்பட்டுள்ளது.';
$string['nosuchmodule'] = 'செயற்பாடு பிழையாக முகவரியிடப்பட்டுள்ளதால் அதன் இடத்தினைக் கண்டுபிடிக்கமுடியவில்லை. தயவுசெய்து mod/modulename/lib/functionname வடிவத்தினைப்பாவிக்குக.';
$string['nosuchpublickey'] = 'பொதுத் திறவுகோலிற்கான கையொப்ப உறுதிப்படுத்தலைப் பெற முடியாதுள்ளது.';
$string['nosuchservice'] = 'இந்த host இல் RPC சேவை இயங்கவில்லை.';
$string['nosuchtransport'] = 'No transport with that ID exists.';
$string['notBASE64'] = 'இவ் எழுத்துச்சரமானது base64 குறிமுறையாக்கப்பட்ட  வடிவமைப்பில் இல்லை. இது செல்லுபடியான சாவியாக இருக்க முடியாது.';
$string['notPEM'] = 'சாவி PEM வடிவமைப்பிலில்லை. இது இயங்காது.';
$string['not_in_range'] = 'IP முகவரி &nbsp;<code>{$a}</code>&nbsp; ஒரு நம்பகமான செல்லுபடியான host ஐப் பிரதிபலிக்கவில்லை.';
$string['notpermittedtojump'] = 'இந்த Moodle பிரதான இணைப்பிலிருந்து தொலைதூர செயற்பாட்டுக்காலத்தினை ஆரம்பிப்பதற்கு உங்களுக்கு அனுமதி இல்லை.';
$string['notpermittedtoland'] = 'தொலைதூர செயற்பாட்டுக்காலத்தினை ஆரம்பிப்பதற்கு உங்களுக்கு அனுமதி இல்லை.';
$string['off'] = 'இயங்காநிலை';
$string['on'] = 'இயங்குநிலை';
$string['options'] = 'தெரிவுகள்';
$string['permittedtransports'] = 'அனுமதிக்கப்பட்ட transports';
$string['phperror'] = 'உங்கள் கோரிக்கை நிறைவேற்றப்படுவதை ஒரு உள்ளக PHP வழு தடுக்கின்றது.';
$string['position'] = 'நிலை';
$string['postrequired'] = 'அழிக்கும் செயற்பாட்டிற்கு ஒரு POST வேண்டுதல் தேவைப்படிகின்றது.';
$string['profileexportfields'] = 'அனுப்புவதற்கான புலங்கள்';
$string['profilefields'] = 'விபரக்கோவைப் புலங்கள்';
$string['profileimportfields'] = 'இறக்குமதி செய்வதற்கான புலங்கள்';
$string['promiscuous'] = 'தவறான தொடர்புகள்';
$string['publickey'] = 'பொதுத் திறவுகோல்';
$string['publickey_help'] = 'பொதுத் திறவுகோல் தொலைதூர வழங்கியிலிருந்து தானாகவே பெற்றுக்கொண்டது.';
$string['publish'] = 'வெளியிடு';
$string['reallydeleteserver'] = 'சேவையகத்தை நிச்சயமாக அழிக்க விரும்புகிறீர்களா?';
$string['receivedwarnings'] = 'பின்வரும் எச்சரிக்கைகள் பெறப்பட்டன.';
$string['recordnoexists'] = 'பதிவு காணப்படவில்லை.';
$string['reenableserver'] = 'இல்லை - சேவையகத்தை மீள-இயலுமைப்படுத்த இவ்விருப்பத் தெரிவைத் தெரிவு செய்க.';
$string['registerallhosts'] = 'எல்லா வழங்கிகளையும் பதிவுசெய்க. (<em>இணைப்பு நிலை</em>)';
$string['registerallhostsexplain'] = 'நீங்கள் எல்லா வழங்கிகளையும் பதிவதற்குத் தெரிவுசெய்யலாம், அது உங்களை தானாகவே இணைக்க முயற்சிக்கும். இது குறிப்பது, உங்களுடைய வழங்கிப்பட்டியலில் ஒரு பதிவு  இருக்கும். இது  ஏதாவது Moodle தளத்தில் நீங்கள் இணையும் போது உங்களுடைய பொதுத் திறவுகோலை கேட்கும். <br /> \'எல்லா வழங்கிகள்\' எனும் சேவைகளை சீரமைப்பதற்கு கீழே  உங்களுக்கு ஒரு தெரிவு உள்ளது. அதிலுள்ள சில சேவைகளை  செயற்படுத்துவதனால் எந்த Moodle வழங்கிக்கும் பாகுபடுத்தாது சேவைகளை வழங்கக்கூடியதாக இருக்கும்.';
$string['registerhostsoff'] = 'தற்போது <b>இயங்கா நிலையிலுள்ள</b> எல்லா வழங்கிகளையும் பதிவு செய்';
$string['registerhostson'] = 'தற்போது <b>இயங்கு நிலையிலுள்ள</b> எல்லா வழங்கிகளையும் பதிவு செய்';
$string['remotecourses'] = 'தொலைப் பாடநெறிகள்';
$string['remotehost'] = 'தொலைதூர வழங்கி';
$string['remotehosts'] = 'தொலைதூர வழங்கிகள்';
$string['requiresopenssl'] = 'வலைப்பின்னலிற்கு OpenSSL நீடிப்பு தேவைப்படுகின்றது.';
$string['restore'] = 'மீளமை';
$string['reviewhostdetails'] = 'வழங்கிகளின் விபர மீள்பார்வை';
$string['reviewhostservices'] = 'வழங்கி சேவைகளின் மீள்பார்வை';
$string['selectaccesslevel'] = 'தயவு செய்து இப்பட்டியலிலிருந்து ஒரு அணுகல் மட்டத்தைத் தெரிவு செய்க.';
$string['selectahost'] = 'தயவு செய்து ஒரு தொலை host ஐத் தெரிவு செய்க.';
$string['service'] = 'சேவைப் பெயர்';
$string['serviceid'] = 'சேவை ID';
$string['servicesavailableonhost'] = '{$a} இல் சேவைகள் உள்ளன';
$string['serviceswepublish'] = '{$a} இற்கு நாம் வெளியிடும் சேவைகள்.';
$string['serviceswesubscribeto'] = '{$a} இலுள்ள நாம் அங்கத்துவம் பெறும் சேவைகள்.';
$string['settings'] = 'அமைப்புகள்';
$string['showlocal'] = 'உள்ளகப் பயனாளரைக் காட்டுக';
$string['showremote'] = 'தொலைப் பயனாளரைக் காட்டுக.';
$string['ssl_acl_allow'] = 'SSO ACL:{$a->host} வழங்கியிலிருந்து பயனாளர் {$a->user} ஐ அனுமதிக்குக';
$string['ssl_acl_deny'] = 'SSO ACL:{{$a->host} வழங்கியிலிருந்து பயனாளர் {$a->user} இன் அனுமதி மறுக்குக.';
$string['ssoaccesscontrol'] = 'SSO அணுகல் கட்டுப்பாடு';
$string['ssoacldescr'] = 'தொலைதூர Moodle வலைப்பின்னல் வழங்கியிலிருந்து அணுகும் பயனாளர்களின் வேண்டுதலை ஏற்பதற்கும் மறுப்பதற்கும் இந்தப் பக்கத்தைப் பாவிக்கவும். தொலைதூர பயனாளர்களுக்கு SSO சேவையை வழங்கும் போது இந்த செயற்திறன் செயற்படும். உங்களுடைய <em>உள்ளகப்</em> பயனாளர்கள் மற்றைய Moodle வலைப்பின்னல் வழங்கிகளுக்கு அலைந்து திரிவதைக்  கட்டுப்படுத்துவதற்கு, <em>mnetcanroam</em> தகைமையை அனுமதிப்பதற்கு பாத்திரங்களின் முறைமையைப் பாவிக்கவும்.';
$string['ssoaclneeds'] = 'இந்த செயற்திறன் செயற்படுவதற்கு, நீங்கள் Moodle  செயல் நிலையில் வைத்திருப்பதுடன் Moodle வலைப்பின்னல் உறுதிப்படுத்தும் செருகியை, தானாகவே பயனாளர்களைச் சேர்க்கும் தெரிவு செயல்நிலையுடன், செயல் நிலையில் வைத்திருக்கவேண்டும்';
$string['strict'] = 'கடும்';
$string['subscribe'] = 'அங்கத்தினராக்கு';
$string['system'] = 'தொகுதி';
$string['testtrustedhosts'] = 'முகவரி ஒன்றைச் சோதி';
$string['testtrustedhostsexplain'] = 'நம்பத்தக்க host ஆ எனப் பார்ப்பதற்கு IP முகவரியை உள்ளிடுக.';
$string['transport_help'] = 'இந்த தெரிவுகள் கொடுப்பதற்கும் வாங்குவற்கும் மட்டுமே. உங்களுடைய வழங்கி கையொப்பமிடப்பட்ட SSL சான்றிதழைக் கொண்டிருந்தால் நீங்கள் தொலைதூர வழங்கியை கையொப்பமிடப்பட்ட SSL சான்றிதழைப் பாவிப்பதற்கு கட்டாயப்படுத்தப்படலாம்.';
$string['trustedhosts'] = 'XML-RPC ஒம்புனர்';
$string['trustedhostsexplain'] = '<p>நம்பகமான வழங்கிகளி்ன் பொறிமுறை குறிப்பிடப்பட்ட வழங்கிகளுக்கு XML-RPC ஊடாக எந்த ஒரு Moodle API பகுதிகளுக்கும் அழைப்புக்களை இயக்கும். இது மூலப்பிரதிகளுக்கு, Moodle பண்பைக் கட்டுப்படுத்துவதற்கு பாவிக்கக்கூடியதாக இருக்கும். அத்துடன் இது ஒரு அபாயகரமான தெரிவு. சந்தேகமாகவிருந்தால் செயலற்றதாக வைத்திருங்கள்.</p> <p>இது  Moodle வலைப்பின்னலிற்கு தேவை   <strong>இல்லை</strong> .</p> <p>இதை செயற்படுத்துவதற்கு IP விலாசங்களின் பட்டியலையோ அல்லது வலைப்பின்னல்களின் பட்டியலையோ பதிவுசெய்க, சில உதாரணங்கள்:</p> உங்களுடைய உள்ளக வழங்கி:<br />127.0.0.1<br /> உங்களுடைய உள்ளக வழங்கி(வலைப்பின்னல் பகுதியுடன்):<br />127.0.0.1/32<br /> வழங்கி மட்டும் IP விலாசத்துடன் 192.168.0.7:<br />192.168.0.7/32<br /> ஏதாவது வழங்கி IP விலாசம் 192.168.0.1 ற்கும் 192.168.0.255 இற்கும் இடையில்:<br />192.168.0.0/24<br /> ஏதாவது வழங்கி எப்படியென்றாலும்:<br />192.168.0.0/0<br /> உண்மையாக கடைசி உதாரணம் சீரமைப்பதற்கு சிபாரிசு செய்யக்கூடியது <strong>அல்ல.</strong>';
$string['type'] = 'வகை';
$string['unknown'] = 'தெரியாத';
$string['unknownerror'] = 'negotiation செய்யும்போது இனம் தெரியாத வழு ஒன்று ஏற்பட்டுள்ளது.';
$string['usercannotchangepassword'] = 'நீங்கள் ஒரு தொலைப் பயனாளராக இருப்பதால் கடவுச் சொல்லை மாற்ற முடியாது.';
$string['userchangepasswordlink'] = '<br /> நீங்கள் உங்களுடைய கடவுச்சொல்லை <a href="{$a->wwwroot}/login/change_password.php"> {$a->description} </a>  வழங்குநரில் மாற்றக்கூடியதாக இருக்கலாம்.';
$string['usersareonline'] = 'எச்சரிக்கை: அச்சேவையகத்திலிருந்து {$a} பயனாளர்கள், உங்கள் தளத்தில் புகுபதிகை செய்துள்ளார்கள்.';
$string['validated_by'] = 'அது வலைப்பின்னலால் செல்லுபடியாக்கப்பட்டது: <code>{$a}</code>';
$string['verifysignature-error'] = 'கையொப்ப ஊர்ஜிதப்படுத்தல் தோல்வியுற்றுள்ளது. ஒரு வழு ஏற்பட்டுள்ளது.';
$string['verifysignature-invalid'] = 'கையொப்ப ஊர்ஜிதப்படுத்தல் தோல்வியுற்றுள்ளது.';
$string['version'] = 'பதிப்பு';
$string['warning'] = 'எச்சரிக்கை';
$string['wrong-ip'] = 'உங்கள் IP முகவரி, எமது பதிவிலுள்ள முகவரியுடன் பொருந்தவில்லை.';
$string['xmlrpc-missing'] = 'இவ்வசதியைப் பயன்படுத்த நீங்கள், உங்கள் PHP த்தொகுதியில் XML-RPC ஐ நிறுவியிருக்க வேண்டும்.';
$string['yourhost'] = 'உங்கள் Host';
$string['yourpeers'] = 'உங்கள் Peers';
