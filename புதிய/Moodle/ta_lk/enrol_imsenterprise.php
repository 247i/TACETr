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
 * Strings for component 'enrol_imsenterprise', language 'ta_lk', version '4.3'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'உங்கள் தகவமைவுகளைச் சேமித்த பின்னர், இதைச் செய்ய விரும்பலாம்.';
$string['allowunenrol'] = 'ஆசிரியர்களோ மாணவர்களோ<strong>உள்நுழையாதிருப்பதற்கு</strong>IMS தரவுகளை அனுமதிக்கவும்';
$string['allowunenrol_desc'] = '<p>பாடநெறியிற் சேரல்களை அகற்றவோ சேர்க்கவோ Enterprise தரவிற்கு முடியும். - மாணவர்களுக்கும் ஆசிரியர்களுக்கும். இவ்வமைப்பு இயலுமைப்படுத்தப்பட்டிருந்தால், தரவில் குறிப்பிட்ட படி நீக்கல்களும் இடம்பெறும். </p>

<p>IMS தரவினுள் மாணவர்களை நீக்குவதற்கு 3 முறைகளுண்டு:</p>

<ul><li>குறிப்பிட்ட மாணவரையும் பாடநெறியையும் குறிக்கும் &lt;member&gt; கூறு ஒன்று. இதில் &lt;role&gt; கூறினது "recstatus" ஆனது 3 இற்கு அமைக்கப்பட்டிருக்கும். (இது நீக்கலைக் குறிக்கும்). இது Moodle உட்செருகலில் இன்னும் அமுல்படுத்தப்படவில்லை.</li>

<li>குறிப்பிட்ட மாணவரையும் பாடநெறியையும் குறிக்கும் &lt;member&gt; கூறு ஒன்று. இதில்  &lt;status&gt; கூறானது0 இற்கு அமைக்கப்பட்டிருக்கும்.  (இது செயற்பாடற்றிருப்பதைக் குறிக்கும்.)</li></ul>

<p>மூன்றாவது முறை சிறிது வித்தியாசமானது. இதற்கு இத்தகவமைப்பை இயலுமைப்படுத்தல் வேண்டியிராது. அத்துடன் நீக்கல் திகதியை முன்கூட்டியே வழங்கப்பட முடியும். :</p>

<ul><li>குறிப்பிட்ட மாணவரின் சேரல் ஆரம்ப இறுதி தினங்களைக் குறிப்பிட்ட  ஒரு <member> கூறினைக் கொண்டது. Moodle இனது தரவு அட்டவணையில் இத்தினங்கள் காணப்படும். </li></ul>';
$string['basicsettings'] = 'அடிப்படை அமைப்புகள்';
$string['coursesettings'] = 'பாடநெறித் தரவுத் தெரிவுகள்';
$string['createnewcategories'] = 'Moodle இல் காணப்படாவிட்டால், புதிய பாடநெறி வகைகளை (மறைக்கப்பட்ட) உருவாக்கவும்.';
$string['createnewcategories_desc'] = '<p>பாடநெறி ஒன்றின் உள்வரும் தரவில், &lt;org&gt;&lt;orgunit&gt; கூறு காணப்படுமானால், அது ஆரம்பத்திலிருந்து உருவாக்கப்பட வேண்டுமானால், அதன் உள்ளடக்கமானது பயன்படுத்தப்பட்டு வகை வரையறுக்கப்படும்.</p>

<p>இவ்வுட்செருகலானது ஏற்கனவே உள்ள பாடநெறிகளை மீ-வகைப்படுத்தாது. </p>

<p>விரும்பும் பெயரில் ஒரு வகையும் காணப்படாவிட்டால், ஒரு மறைக்கப்பட்ட வகை உருவாக்கப்படும். </p>';
$string['createnewcourses'] = 'Moodle இல் காணப்படாவிட்டால், புதிய பாடநெறிகளை (மறைக்கப்பட்ட) உருவாக்கவும்.';
$string['createnewcourses_desc'] = '<p>இவ்வமைப்பு செயற்படுத்தப்பட்டால், IMS Enterprise சேரல் உட்செருகலானது IMS தரவில் காணப்படும் ஆனால் Moodle தரவுத்தளத்தில் காணப்படாத புதிய பாடநெறிகளை உருவாக்கும். </p>

<p>முதலில் Moodle பாடநெறி அட்டவணையிலுள்ள பாடநெறி இலக்கத்திற்கு தேடல் நடாத்தப்படும். இதுவே பாடநெறியை அடையாளம் காண உதவும். (உதாரணமாக மாணவர் தகவல் தொகுதி). அங்கு காணப்படாவிட்டால், பாடநெறியின் குறும் விவரணம் தேடப்படும். (சில தொகுதிகளில், இவை இரண்டும் ஒரே பெறுமானத்தைக் கொண்டிருக்கலாம்.) இத்தேடல்கள் தோல்வியுறும்போது மட்டுமே உட்செருகல் புதிய பாடநெறிகளை உருவாக்க முடியும். </p>

<p>புதிதாக உருவாக்கப்படும் எந்தப் பாடநெறியும் ஆரம்பத்தில் மறைக்கப்பட்டதாக இருக்கும். எந்த உள்ளடக்கமுமற்ற வெறும் பாடநெறிகளினுள் ஆசிரியர்களுக்குத் தெரியாமல் மாணவர்கள்  வீணே செல்வதைத் தடுப்பதற்காகவே இந்த ஏற்பாடு செய்யப்பட்டுள்ளது. </p>';
$string['createnewusers'] = 'Moodle இல் இன்னும் பதியாத பயனாளர்களுக்கான கணக்குகளை உருவாக்கு.';
$string['createnewusers_desc'] = '<p>IMS Enterprise சேரல் தரவானது, பொதுவில் ஒரு தொகுதிப் பயனாளர்களை விவரிக்கின்றது. இவ்வமைப்பு செயற்படுத்தப்பட்டால், Moodle தரவுத்தளத்தில் காணப்படாத எந்தப் பயனாளருக்கும், கணக்கு உருவாக்கப்படலாம். </p>

<p>பயனாளர்கள் தம் அடை.இலக்கத்திற்கு முதலிலும், தமது Moodle பயனாளர் பெயருக்குப் பின்னரும் தேடப்படுவர்</p>


<p>கடவுச்சொற்களை IMS Enterprise உட்செருகல் இறக்குமதி செய்யாது. Moodle  இனது அத்தாட்சிப்படுத்தல் உட்செருகலைப் பயன்படுத்த நாம் பரிந்துரைக்கின்றோம். </p>';
$string['cronfrequency'] = 'செயற்படுத்தலின் மீடிறன்';
$string['deleteusers'] = 'IMS தரவில் குறிப்பிடப்படும் பயனர் கணக்குகளை அழி.';
$string['deleteusers_desc'] = '<p>இவ்வமைப்பு செயற்படுத்தப்பட்டால் IMS Enterprise சேரல் தரவவானது பயனாளர் கணக்குகளின் நீக்கலை வரையறுக்கலாம். (i"recstatus" கொடியானது 3 ஆக அமைக்கப்பட்டிருந்தால், அது கணக்கொன்றின் நீக்கலைக் காட்டும்.)</p>

<p>Moodle இனது நியமத்திற்கேற்ப, பயனாளர் பதிவுகள் நீக்கப்படுவதில்லை, மாறாக, கணக்கு அழிக்கப்பட்டதாக ஒரு கொடி அடையாளப்படுத்தப்படும்.</p>';
$string['doitnow'] = 'perform an IMS Enterprise import right now';
$string['filelockedmail'] = 'The text file you are using for IMS-file-based enrolments ({$a}) can not be deleted by the cron process. This usually means the permissions are wrong on it. Please fix the permissions so that Moodle can delete the file, otherwise it might be processed repeatedly.';
$string['filelockedmailsubject'] = 'முக்கிய வழு: சேரல் கோப்பு';
$string['fixcasepersonalnames'] = 'பிரத்தியேகப் பெயர்களை தலைப்பு வடிவத்திற்கு மாற்றுக';
$string['fixcaseusernames'] = 'பயனாளர் பெயர்களை சிறிய எழுத்துக்களுக்கு மாற்றுக';
$string['ignore'] = 'புறக்கணிக்க';
$string['imsrolesdescription'] = 'The IMS Enterprise specification includes 8 distinct role types. Please choose how you want them to be assigned in Moodle, including whether any of them should be ignored.';
$string['location'] = 'கோப்பின் இடம்';
$string['logtolocation'] = 'பதிகைக் கோப்பு வைக்கப்படவேண்டிய இடம்(வெறுமையாக இருந்தால் பதிகை நடைபெறாது)';
$string['mailadmins'] = 'நிர்வாகிகளுக்கு மின்னஞ்சல் மூலம் அறிவி';
$string['mailusers'] = 'பயனாளருக்கு மின்னஞ்சல் மூலம் அறிவி';
$string['miscsettings'] = 'நானாவிதம்';
$string['processphoto'] = 'பயனளாளரின் படத்தகவலை விபரக்கோவையில் சேர்க்க';
$string['processphotowarning'] = 'Warning: Image processing is likely to add a significant burden to the server. You are recommended not to activate this option if large numbers of students are expected to be processed.';
$string['restricttarget'] = 'கீழ்வரும் இலக்கு குறிப்பிடப்பட்டிருந்தால் மட்டும், தரவை செயற்படுத்தவும்.';
$string['restricttarget_desc'] = '<p>ஒரு IMS Enterprise தரவுக் கோப்பானது பல இலக்குகளை நோக்கிற் கொண்டிருக்கலாம் - ஒரு பாடசாலையிலுள்ள அல்லது ஒரு பல்கலைக்கழகத்திலுள்ள பல  LMS கள், அல்லது வித்தியாசமான தொகுதிகளாக அவை இருக்கலாம். &lt;properties&gt; சீட்டிலுள்ள, &lt;target&gt; சீட்டுகளில் பெயரிடுவதன் மூலம், Enterprise கோப்பை, குறிப்பிட்ட இலக்குகளுக்கு வழங்கலாம்.
</p>

<p>பெரும்பாலான சந்தர்ப்பங்களில் நீங்கள் இது பற்றி கவலைப்படத் தேவையில்லை. தகவமைப்பை வெறுமையாக விடவும். Moodle தானாகவே தரவுக்கோப்பை செய்முறைப்படுத்தும்.  அல்லது,  &lt;target&gt; சீட்டினுள் வெளியிடப்படுவதன் பெயரைச் சரியாக இடவும்.
</p>';
$string['roles'] = 'வகிபாகங்கள்';
$string['sourcedidfallback'] = 'ஒருவரின் "பயனாளர் அடையாளம்" நிரல் காணப்படாவிட்டால், "அடிப்படை அடையாளத்தை" அவரது பயனாளர் அடையாளமாகப் பயன்படுத்துக';
$string['truncatecoursecodes'] = 'பாடநெறிக் குறியீடுகளை இந்நீளத்திற்குத் துணிக்க';
$string['truncatecoursecodes_desc'] = '<p>சில சந்தர்ப்பங்களில், பாடநெறிக்குறிகளைக் குறித்த நீளத்திற்குக் குறுக்க வேண்டி வரும். அப்படியாக இருந்தால், எழுத்துக்களின் எண்ணிக்கையை இப்பெட்டியிற் தருக. இல்லாது விட்டால், பெட்டியை <strong>வெறுமையாக </strong> விடவும். அப்போது குறுக்குதல் நடை பெறாது. </p>';
$string['usecapitafix'] = '"Capita" ஐப் பயன்படுத்தினால் இப்பெட்டியில் அடையாளமிடுக (அவற்றின் XML வடிவமைப்பு சிறிது தவறானது )';
$string['usecapitafix_desc'] = '<p>Capita வினால் உருவாக்கப்படும் மாணவர் தரவுத் தொகுதியின் XML வெளியீட்டில் ஒரு சிறிய வழு காணப்படுகிறது.  நீங்கள் Capita வைப் பயன்படுத்திகிறீர்களானால், இத்தெரிவை இயலுமைப்படுத்த வேண்டும். அல்லது இதை அப்படியே விடலாம். </p>';
$string['usersettings'] = 'பயனர் தரவுத் தெரிவுகள்';
$string['zeroisnotruncation'] = '0 ஆனால் துணித்தல் கிடையாது';
