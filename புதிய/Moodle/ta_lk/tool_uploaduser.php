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
 * Strings for component 'tool_uploaduser', language 'ta_lk', version '4.3'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'நீக்கங்களை அனுமதி';
$string['allowrenames'] = 'பெயர்மாற்றங்களை அனுமதி';
$string['defaultvalues'] = 'பொதுஇருப்பு பெறுமானங்கள்';
$string['deleteerrors'] = 'வழுக்களை நீக்குக';
$string['encoding'] = 'குறியீடாக்கம்';
$string['errors'] = 'வழுக்கள்';
$string['nochanges'] = 'மாற்றங்கள் எதுவுமில்லை';
$string['renameerrors'] = 'பெயர்மாற்றத்தில் வழுக்கள் உண்டு';
$string['rowpreviewnum'] = 'நிரைகளை முன்னோக்கு';
$string['uploadpicture_overwrite'] = 'ஏற்கனவே உள்ள பயனாளர் படங்களின் மேலெழுதவா?';
$string['uploadpicture_userupdated'] = '{$a} பயனாளருக்காக படம் இற்றைப்படுத்தப்பட்டது';
$string['uploadpictures'] = 'பயனாளர் படங்களை பதிவேற்றுக';
$string['uploadusers'] = 'பதிவேற்று';
$string['uploadusers_help'] = '<p> <strong>பொதுவாகப் பயனாளர்களை ஒரேயடியாகப் பதிவேற்றத் தேவை ஏற்படாது.</strong>
உங்கள் வேலைப் பளுவைக் குறைப்பதற்காக முடிந்தவரை அத்தாட்சிப்படத்தலைக் கைமுறையால் செய்வதைத் தவிர்க்கவும்.
</p>
<p>நீங்கள் நிச்சயமாக உரைக் கோப்பொன்றிலிருந்து பல பயனாளர் கணக்குகளைப் பதிவேற்ற விரும்பினால், அக்கோப்பைப்
பின்வரும் வடிவமைப்பில் உருவாக்கவும்.:</p>

<ul>
  <li>ஒவ்வொரு வரியும் ஒரு பதிவைக் கொண்டிருக்கும்.</li>
  <li>ஒவ்வொரு புலமும் கால் புள்ளிகளால் பிரிக்கப்பட்டிருக்கும்.</li>
  <li>முதல் வரியானது புலப் பெயர்களைக் கொண்டிருக்கும்.
    <blockquote>
      <p><strong>பின்வருவன அத்தியாவசியமான புலங்கள்:</strong>
	  </p>
      <p><code class="example1">பயனாளர் பெயர், கடவுச் சொல், முதற் பெயர், இறுதிப் பெயர், மின்னஞ்சல்</code></p>

      <p><strong>பொது இருப்புப் புலங்கள்:</strong> இவை விருப்பத் தெரிவுக்குரியவை -
	  இவை வழங்கப்படாவிட்டால், பிரதான நிர்வாகத்திலிருந்து இவை எடுக்கப்படும்.
	  </p>
      <p><code class="example1">நிறுவனம், திணைக்களம், நகரம், மொழி, அத்தாட்சிப்படுத்தல், நேரமண்டலம்</code> </p>
      <p><strong>விருப்பத்தெரிவுக்குரிய புலப் பெயர்கள்: </strong></p>
      <p> <code class="example1">அடை.இலக்கம், icq, தொ.பே.1, தொ.பே.2, முகவரி, url, விவரணம், mailformat, maildisplay, htmleditor,
	  autosubscribe, பாடநெறி1, பாடநெறி2, பாடநெறி3, பாடநெறி4, பாடநெறி5, குழு1, குழு2, குழு3, குழு4, குழு5, வகை1, வகை2, வகை3
	  , வகை4, வகை5,
	  வகிபாகம்1, வகிபாகம்2, வகிபாகம்3, வகிபாகம்4, வகிபாகம்5</code></p>
    </blockquote>
    </li>
  <li>தரவிலுள்ள கால்புள்ளிகள்  &amp;#44 ஆக இடப்படல் வேண்டும்.</li>
  <li>Boolean புலங்களுக்கு,  0 தவறாகவும் 1 சரியாகவும் கொள்ளப்படும்.  </li>
  <li>வகைகள் (உதாரணம். 1 = மாணவர், 2 = தொகுக்கும் ஆசிரியர், 3 = தொகுக்காத ஆசிரியர். பொது இருப்பு மாணவராகும். </li>

</ul>


<p>கீழ்வருவது ஒரு செல்லுபடியான இறக்குமதிக் கோப்பாகும்:</p>
<p><code>பயனாளர் பெயர், கடவுச்சொல், முதற் பெயர், இறுதிப் பெயர், மின்னஞ்சல், மொழி,
அடை.இல, maildisplay, பாடநெறி1, குழு1, வகை1, <br />
jonest, verysecret, Tom, Jones, jonest@someplace.edu, en, 3663737, 1, Intro101, Section 1, 1<br />
reznort, somesecret, Trent, Reznor, reznort@someplace.edu, en_us, 6736733, 0, Advanced202, Section 3, 3
</code></p>';
$string['uploaduserspreview'] = 'பயனாளர்களின் முன்னோக்கை பதிவேற்றுக';
$string['uploadusersresult'] = 'பயனாளர்களின் பெறுபேறுகளை பதிவேற்றுக';
$string['useraccountupdated'] = 'பயனாளர் இற்றைப்படுத்தப்பட்டார்';
$string['userdeleted'] = 'பயனாளர் நீக்கப்பட்டார்';
$string['userrenamed'] = 'பயனாளர் மறுபெயரிடப்பட்டார்';
$string['userscreated'] = 'பயனாளர் உருவாக்கப்பட்டார்';
$string['usersdeleted'] = 'பயனாளர்கள் நீக்கப்பட்டனர்';
$string['usersrenamed'] = 'பயனாளர்கள்  மறுபெயரிடப்பட்டனர்';
$string['usersskipped'] = 'பயனாளர்கள் தாண்டிச் செல்லப்பட்டனர்';
$string['usersupdated'] = 'பயனாளர்கள் இற்றைப்படுத்தப்பட்டனர்';
$string['usersweakpassword'] = 'பயனாளர்கள் ஒரு வலுவற்ற கடவுச்சொல்லினை வைத்திருக்கின்றனர்';
$string['uubulkall'] = 'அனைத்துப் பயனாளர்கள்';
$string['uubulknew'] = 'புதிய பயனாளர்கள்';
$string['uubulkupdated'] = 'இற்றைப்படுத்தப்பட்ட பயனாளர்கள்';
$string['uucsvline'] = 'CSV வரி';
$string['uuoptype'] = 'வகையை பதிவேற்றுக';
$string['uuoptype_addnew'] = 'புதியவர்களை மட்டும் சேர்க்க, ஏற்கனவே உள்ள பயனாளர்களை தாண்டிச் செல்க';
$string['uuoptype_addupdate'] = 'புதியவர்களை மட்டும் சேர்க்க, ஏற்கனவே உள்ள பயனாளர்களை இற்றைப்படுத்துக';
$string['uuoptype_update'] = 'ஏற்கனவே உள்ள பயனாளர்களை மட்டும் இற்றைப்படுத்துக';
$string['uupasswordnew'] = 'புதிய பயனாளர் கடவுச்சொல்';
$string['uupasswordold'] = 'ஏற்கனவே உள்ள பயனாளர் கடவுச்சொல்';
$string['uuupdatetype'] = 'ஏற்கனவே உள்ள பயனாளர் விபரங்கள்';
