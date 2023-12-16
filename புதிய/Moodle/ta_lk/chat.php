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
 * Strings for component 'chat', language 'ta_lk', version '4.3'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['beep'] = 'பீப்';
$string['cantlogin'] = 'அரட்டை அறையினுள் பதிகை செய்ய முடியவில்லை!!';
$string['chat:chat'] = 'ஓர் அரட்டை அறையை அணுகுக';
$string['chat:deletelog'] = 'அரட்டைப் பதிகைகளை அழிக்கவும்';
$string['chat:exportparticipatedsession'] = 'நீங்கள் பங்கேற்ற அரட்டை அமர்வை ஏற்றுமதி செய்க';
$string['chat:exportsession'] = 'ஏதாவதொரு அரட்டை அமர்வை ஏற்றுமதி செய்க';
$string['chat:readlog'] = 'அரட்டைப் பதிகைகளை வாசிக்கவும்';
$string['chat:talk'] = 'ஓர் அரட்டையில் கதைக்க';
$string['chatintro'] = 'அறிமுக உரை';
$string['chatname'] = 'இவ்வரட்டை அறையின் பெயர்';
$string['chatreport'] = 'அரட்டை அமர்வுகள்';
$string['chattime'] = 'அடுத்த அரட்டை நேரம்';
$string['configmethod'] = 'சாதாரண அரட்டை முறை பெறுநர்களை முறையாக சேவையகத்தை இற்றைப்படுத்துவதற்காகத் தொடர்புகொள்வதில் ஈடுபடுத்துகிறது. இதற்கு எல்லா இடங்களிலும் செம்மைப்படுத்தல் செய்யவேண்டியதில்லை. ஆனால் இது சேவையகத்தில் அதிக அரட்டைகளுடன் பெரிய சுமையை உருவாக்க முடியும்.  daemon வழங்கியை பயன்படுத்தினால் Unix இன் மேற்படையை அணுக வேண்டும்,ஆனால் இது வேகமான அளவீட்டிலுள்ள அரட்டைச்சூழல்.';
$string['confignormalupdatemode'] = 'சாதாரணமாக அரட்டை அறை இற்றைப்படுத்தல்கள்  HTTP 1.1 இன் <em>தொடர்பில் வைத்திருக்கும்</em> பண்பைப் பயன்படுத்தி சிறந்த முறையில் சேவை செய்கின்றன, ஆனால் இதுவும் சேவையகத்திற்கு கனமானது. இற்றைப்படுத்தல்களைப் பயனாளர்களுக்கு ஊட்டுவதற்கு<em>தேக்குதல்</em> strategy பயன்படுத்துவது மேலும் உயர்தரமான முறை. <em>தேக்குதல்</em> முறையைப் பயன்படுத்தி இன்னும் சிறப்பாக scales (அரட்டை முறையைப் போல) ஆனால் உங்கள் சேவையகம் இதனை ஆதரிக்காமல் இருக்கலாம்.';
$string['configoldping'] = 'பயனாளர் தொடர்பறுந்த நிலைக்குச் சென்றுவிட்டார் என்பதை நாங்கள் கண்டுபிடிப்பதற்கு எடுக்கும் அதிகபட்ச நேரம் என்ன (விநாடிகளில்)? இது ஒரு உயர் எல்லை தான், வழமையாக தொடர்பறுந்துவிட்டதென்பது மிகவிரைவாகக் கண்டுபிடிக்கப்பட்டுவிடும். குறைவான பெறுமதிகளுக்கு உங்கள் சேவையகத்தில் அதிக கேள்வி இருக்கும். நீங்கள் சாதாரண முறையைப் பயன்படுத்தினால், இதனை <strong>ஒருபோதும்</strong> 2 * chat_refresh_room இற்கு குறைவாக அமைக்கவேண்டாம்.';
$string['configrefreshroom'] = 'எவ்வளவு நேரஇடைவெளியில் அரட்டை அறை புதுப்பிக்கப்படவேண்டும்? (விநாடிகளில்). இதனைக் குறைவாக அமைப்பது அரட்டை அறை விரைவானதாகக் காட்டும், ஆனால் இது அதிகமானோர் அரட்டையில் ஈடுபடும்போது உங்கள் இணைய சேவையகத்தில் பெரிய சுமையை உருவாக்கலாம். நீங்கள் <em>தேக்குதல்</em> இற்றைப்படுத்தல்களைப் பயன்படுத்தினால், இன்னும் உயர்வான புதுப்பித்தல்  மீடிறன்ளைத் தெரிவுசெய்யமுடியும்  -- 2 உடன் முயற்சிக்கவும்.';
$string['configrefreshuserlist'] = 'எத்தனை விநாடிகளுக் கொரு தடவை பயனாளர் பட்டியல் புதுப்பிக்கப்பட வேண்டும்?';
$string['configserverhost'] = 'சேவையக daemon இருக்கும் கணினியின் hostname';
$string['configserverip'] = 'மேற்கூறிய hostname இற்கான IP முகவரி';
$string['configservermax'] = 'அனுமதிக்கப்பட்ட அதிகூடிய நுகர்வரின் எண்ணிக்கை';
$string['configserverport'] = 'சேவையகத்தில் பயன்படுத்த வேண்டிய daemon இற்கான Port';
$string['currentchats'] = 'செயற்படு அரட்டை அமர்வுகள்';
$string['currentusers'] = 'நடப்புப் பயனாளர்கள்';
$string['deletesession'] = 'இவ்வமர்வை அழி';
$string['deletesessionsure'] = 'இவ்வமர்வை நீங்கள் நிச்சயமாக அழிக்க விரும்புகிறீர்களா?';
$string['donotusechattime'] = 'அரட்டை நேரங்களை வெளியிட வேண்டாம்';
$string['enterchat'] = 'அரட்டையில் பிரவேசிக்க இங்கே சொடுக்கவும்';
$string['errornousers'] = 'பயனாளர் எவரையும் காணவில்லை';
$string['explaingeneralconfig'] = 'இவ்வமைப்புக்கள்  <strong>எப்பொழுதும்</strong> பயன்படுத்தப்பட்டிருக்கின்றன';
$string['explainmethoddaemon'] = 'நீங்கள் "அரட்டை வழங்கியின் பெயர் " முறையை அரட்டை முறையாகத் தெரிவு செய்தால்<strong>மட்டும்</strong> இவ்வமைப்புக்கள் பாதிப்பை ஏற்படுத்தும்';
$string['explainmethodnormal'] = 'நீங்கள் "சாதாரண முறையை" அரட்டை முறையாகத் தெரிவு செய்தால்<strong>மட்டும்</strong> இவ்வமைப்புக்கள் பாதிப்பை ஏற்படுத்தும்';
$string['generalconfig'] = 'பொதுத்தகவமைப்பு';
$string['idle'] = 'செயலற்ற நிலை';
$string['inputarea'] = 'உள்ளீட்டுப் பகுதி';
$string['invalidid'] = 'அரட்டை அறையை கண்டுபிடிக்க முடியவில்லை!';
$string['list_all_sessions'] = 'அனைத்து அமர்வுகளையும் பட்டியல்ப்படுத்துக.';
$string['list_complete_sessions'] = 'நிறைவடைந்த அமர்வுகளை பட்டியல்ப்படுத்துக.';
$string['listing_all_sessions'] = 'எல்லா அமர்வுகளையும் பட்டியல்படுத்தல்.';
$string['messagebeepseveryone'] = '{$a} ஒவ்வொருவருக்கும் பீப் ஒலி எழுப்பு!';
$string['messagebeepsyou'] = '{$a} உங்களுக்கு பீப் ஒலி எழுப்புகிறார் !';
$string['messageenter'] = '{$a} அரட்டையில் பிரவேசித்துள்ளார்';
$string['messageexit'] = '{$a} இவ்வரட்டையினின்றும் விலகியுள்ளார்';
$string['messages'] = 'செய்திகள்';
$string['method'] = 'அரட்டை முறை';
$string['methodajax'] = 'Ajax முறை';
$string['methoddaemon'] = 'அரட்டைச் சேவையக daemon';
$string['methodnormal'] = 'சாதாரண முறை';
$string['modulename'] = 'அரட்டை';
$string['modulenameplural'] = 'அரட்டைகள்';
$string['neverdeletemessages'] = 'செய்திகளை ஒருபோதும் அழிக்க வேண்டாம்';
$string['nextsession'] = 'அடுத்த நேரம் குறிக்கப்பட்ட அமர்வு';
$string['no_complete_sessions_found'] = 'நிறைவடைந்த அமர்வுகள் எதுவும் கண்டுபிடிக்கப்படவில்லை.';
$string['nochat'] = 'எந்தவொரு அரட்டையும் கண்டுபிடிக்கப்படவில்லை';
$string['noguests'] = 'விருந்தினர்களுக்கு அரட்டை திறக்கப்படவில்லை';
$string['nomessages'] = 'இன்னும் ஒரு செய்தியும் இல்லை';
$string['nopermissiontoseethechatlog'] = 'அரட்டைப் பதிவுகளைப் பார்ப்பதற்கு உங்களிற்கு அனுமதியில்லை.';
$string['normalkeepalive'] = 'செயற்பாட்டில் வைத்திரு';
$string['normalstream'] = 'தாரை';
$string['noscheduledsession'] = 'நேரங்குறித்த அமர்வுகள் எதுவும் இல்லை';
$string['notallowenter'] = 'அரட்டை அறையினுள் நுழைவதற்கு உங்களுக்கு அனுமதி இல்லை.';
$string['pastchats'] = 'கடந்த அரட்டை அமர்வுகள்';
$string['pluginadministration'] = 'அரட்டை நிர்வாகம்';
$string['pluginname'] = 'அரட்டை';
$string['removemessages'] = 'அனைத்துச் செய்திகளையும் அகற்றுக';
$string['repeatdaily'] = 'ஒவ்வொரு நாளும் ஒரே நேரம்';
$string['repeatnone'] = 'மீளாது - குறிப்பிட்ட ஒருமுறை மட்டும் வெளியிடும்.';
$string['repeattimes'] = 'அமர்வுகளை மீள்';
$string['repeatweekly'] = 'ஒவ்வொரு வாரமும் ஒரே நேரம்';
$string['savemessages'] = 'கடந்த அமர்வுகளைச் சேமி';
$string['seesession'] = 'இவ்வமர்வைப் பார்';
$string['send'] = 'அனுப்பப்பட்டது';
$string['sending'] = 'அனுப்புதல்';
$string['serverhost'] = 'சேவையக பெயர்';
$string['serverip'] = 'சேவையக ip';
$string['serverport'] = 'சேவையக துறை';
$string['sessions'] = 'அரட்டை அமர்வுகள்';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'கடந்த அமர்வுகளை எவரும் பார்க்கலாம்';
$string['updatemethod'] = 'இற்றைப்படுத்தல் முறை';
$string['userlist'] = 'பயனாளர் பட்டியல்';
$string['usingchat'] = 'அரட்டையை பாயன்படுத்தி';
$string['usingchat_help'] = '<p>அரட்டைக் கூறானது, அரட்டையை சொஞ்சம் மெருகூட்டுவதற்கான சில அம்சங்களைக் கொண்
டது. </p>

<dl>
<dt><b>Smilies</b></dt>
<dd>Moddle இலே வேறு எங்கு தட்டச்சும் smiliy ஐயும் இங்கேயும் தட்டச்சலாம். உதாரணமாக,  :-) = <img alt="smiley" src="pix/s/smiley.gif" />
</dd>

<dt><b>இணைப்புகள்</b></dt>
<dd>இணைய முகவரிகளானவை தானாக இணைப்புகளாக்கப்படும். </dd>

<dt><b>Emoting</b></dt>
<dd>நீங்கள் ஒரு வரியைத் தொடங்கும் போது "/me" அல்லது ":" ஐப் பயன்படுத்தி உணர்ச்சிகளைக் காட்டலாம்.  உதாரணமாக, உங்கள் பெயர் கண்ணனாக இருந்தால் நீங்கள் ":laughs!" அல்லது "/me laughs!" எனத் தட்டச்சு செய்து அனைவருக்கும் "கண்ணன் சிரிப்பதாகக்" காட்டலாம்.
</dd>

<dt><b>Beeps</b></dt>
<dd>தொடர்புகளுக்கு அருகே இருக்கும் "beep" இல் அழுத்துவதன் மூலம் அவர்களுக்கு ஓசை ஒன்றை அனுப்பலாம். அரட்டையிலுள்ள அனைத்துப் பயனாளருக்கும் ஓசையை அனுப்ப "beep all" எனத் தட்டச்சுக</dd>

<dt><b>HTML</b></dt>
<dd>உங்களுக்கு HTML தெரியுமானால், நீங்கள் அதைப் பயன்படுத்தி, படங்களை உள்ளிடல், ஓசைகளை  அனுப்பல் மேலும் பல வர்ண உரைகளைப் பயன்படுத்தல் போன்றவற்றைச் செய்யலாம். </dd>

</dl>';
$string['viewreport'] = 'கடந்த அமர்வுகளைப் பார்க்க';
