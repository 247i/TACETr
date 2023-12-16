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
 * Strings for component 'install', language 'ta', version '4.0'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'The admin directory specified is incorrect';
$string['admindirname'] = 'Admin Directory';
$string['admindirsetting'] = 'A very few webhosts use /admin as a special URL for you to access a
    control panel or something.  Unfortunately this conflicts with the
    standard location for the Moodle admin pages.  You can fix this by
    renaming the admin directory in your installation, and putting that
    new name here.  For example: <br /> <br /><b>moodleadmin</b><br /> <br />
    This will fix admin links in Moodle.';
$string['admindirsettinghead'] = 'Setting the admin directory ...';
$string['admindirsettingsub'] = 'A very few webhosts use /admin as a special URL for you to access a
    control panel or something.  Unfortunately this conflicts with the
    standard location for the Moodle admin pages.  You can fix this by
    renaming the admin directory in your installation, and putting that
    new name here.  For example: <br /> <br /><b>moodleadmin</b><br /> <br />
    This will fix admin links in Moodle.';
$string['availablelangs'] = 'தயராக உள்ள மொழி அடுக்கு';
$string['caution'] = 'எச்சரிக்கை';
$string['chooselanguage'] = 'மொழியைத் தேர்ந்தெடு';
$string['chooselanguagehead'] = 'மொழியைத் தேர்ந்தெடு';
$string['chooselanguagesub'] = 'Please choose a language for the installation ONLY. You will be able to choose site and user languages on a later screen.';
$string['compatibilitysettings'] = 'Checking your PHP settings ...';
$string['compatibilitysettingshead'] = 'Checking your PHP settings ...';
$string['compatibilitysettingssub'] = 'Your server should pass all these tests to make Moodle run properly';
$string['configfilenotwritten'] = 'The installer script was not able to automatically create a config.php file containing your chosen settings, probably because the Moodle directory is not writeable. You can manually copy the following code into a file named config.php within the root directory of Moodle.';
$string['configfilewritten'] = 'கான்பிக்.பிஹெச்பி வெற்றிகரமாக முடிக்கப்பட்டது.';
$string['configurationcomplete'] = 'Configuration completed';
$string['configurationcompletehead'] = 'Configuration completed';
$string['configurationcompletesub'] = 'Moodle made an attempt to save your configuration in a file in the root of your Moodle installation.';
$string['database'] = 'Database';
$string['dataroot'] = 'Data Directory';
$string['datarooterror'] = 'The \'Data Directory\' you specified could not be found or created.  Either correct the path or create that directory manually.';
$string['dbconnectionerror'] = 'We could not connect to the database you specified. Please check your database settings.';
$string['dbcreationerror'] = 'Database creation error. Could not create the given database name with the settings provided';
$string['dbhost'] = 'Host Server';
$string['dbpass'] = 'கடவுச்சொல்';
$string['dbprefix'] = 'Tables prefix';
$string['dbtype'] = 'வகை';
$string['directorysettings'] = '<p>Please confirm the locations of this Moodle installation.</p>

<p><b>Web Address:</b>
Specify the full web address where Moodle will be accessed.
If your web site is accessible via multiple URLs then choose the
most natural one that your students would use.  Do not include
a trailing slash.</p>

<p><b>Moodle Directory:</b>
Specify the full directory path to this installation
Make sure the upper/lower case is correct.</p>

<p><b>Data Directory:</b>
You need a place where Moodle can save uploaded files.  This
directory should be readable AND WRITEABLE by the web server user
(usually \'nobody\' or \'apache\'), but it should not be accessible
directly via the web.</p>';
$string['directorysettingshead'] = 'Please confirm the locations of this Moodle installation';
$string['directorysettingssub'] = '<b>Web Address:</b>
Specify the full web address where Moodle will be accessed.
If your web site is accessible via multiple URLs then choose the
most natural one that your students would use.  Do not include
a trailing slash.
<br />
<br />
<b>Moodle Directory:</b>
Specify the full directory path to this installation
Make sure the upper/lower case is correct.
<br />
<br />
<b>Data Directory:</b>
You need a place where Moodle can save uploaded files.  This
directory should be readable AND WRITEABLE by the web server user
(usually \'nobody\' or \'apache\'), but it should not be accessible
directly via the web.';
$string['dirroot'] = 'Moodle Directory';
$string['dirrooterror'] = 'The \'Moodle Directory\' setting seems to be incorrect - we can\'t find a Moodle installation there. The value below has been reset.';
$string['download'] = 'Download';
$string['downloadlanguagebutton'] = 'Download the "{$a}" language pack';
$string['downloadlanguagehead'] = 'Download language pack';
$string['downloadlanguagenotneeded'] = 'You may continue the installation process using the default language pack, "{$a}".';
$string['downloadlanguagesub'] = 'You now have the option of downloading a language pack and continuing the installation process in this language.<br /><br />If you are unable to download the language pack, the installation process will continue in English. (Once the installation process is complete, you will have the opportunity to download and install additional language packs.)';
$string['environmenthead'] = 'Checking your environment ...';
$string['environmentsub'] = 'We are checking if the various components of your system meet the system requirements';
$string['fail'] = 'தோல்வி';
$string['fileuploads'] = 'File Uploads';
$string['fileuploadserror'] = 'This should be on';
$string['fileuploadshelp'] = '<p>File uploading seems to be disabled on your server.</p>

<p>Moodle can still be installed, but without this ability, you will not be able
   to upload course files or new user profile images.</p>

<p>To enable file uploading you (or your system administrator) will need to
   edit the main php.ini file on your system and change the setting for
   <b>file_uploads</b> to \'1\'.</p>';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Unfortunately the language "{$a}" was not installed. The installation process will continue in English.';
$string['langdownloadok'] = 'The language "{$a}" was installed successfully. The installation process will continue in this language.';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'The PHP memory limit is set quite low ... you may run into problems later.';
$string['memorylimithelp'] = '<p>The PHP memory limit for your server is currently set to {$a}.</p>

<p>This may cause Moodle to have memory problems later on, especially
   if you have a lot of modules enabled and/or a lot of users.</p>

<p>We recommend that you configure PHP with a higher limit if possible, like 40M.
   There are several ways of doing this that you can try:</p>
<ol>
<li>If you are able to, recompile PHP with <i>--enable-memory-limit</i>.
    This will allow Moodle to set the memory limit itself.</li>
<li>If you have access to your php.ini file, you can change the <b>memory_limit</b>
    setting in there to something like 40M.  If you don\'t have access you might
    be able to ask your administrator to do this for you.</li>
<li>On some PHP servers you can create a .htaccess file in the Moodle directory
    containing this line:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>However, on some servers this will prevent <b>all</b> PHP pages from working
    (you will see errors when you look at pages) so you\'ll have to remove the .htaccess file.</p></li>
</ol>';
$string['pass'] = 'தேர்ச்சி';
$string['phpversion'] = 'பிஎச்பி பதிப்பு';
$string['phpversionhelp'] = '<p>Moodle requires a PHP version of at least 4.3.0 or 5.1.0 (5.0.x has a number of known problems).</p>
<p>You are currently running version {$a}</p>
<p>You must upgrade PHP or move to a host with a newer version of PHP!<br/>
(In case of 5.0.x you could also downgrade to 4.4.x version)</p>';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle may have trouble with safe mode on';
$string['safemodehelp'] = '<p>Moodle may have a variety of problems with safe mode on, not least is that
   it probably won\'t be allowed to create new files.</p>

<p>Safe mode is usually only enabled by paranoid public web hosts, so you may have
   to just find a new web hosting company for your Moodle site.</p>

<p>You can try continuing the install if you like, but expect a few problems later on.</p>';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'This should be off';
$string['sessionautostarthelp'] = '<p>Moodle requires session support and will not function without it.</p>

<p>Sessions can be enabled in the php.ini file ... look for the session.auto_start parameter.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'You are seeing this page because you have successfully installed and
    launched the <strong>{$a->packname} {$a->packversion}</strong> package in your computer. Congratulations!';
$string['welcomep30'] = 'This release of the <strong>{$a->installername}</strong> includes the applications
    to create an environment in which <strong>Moodle</strong> will operate, namely:';
$string['welcomep40'] = 'The package also includes <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'The use of all the applications in this package is governed by their respective
    licences. The complete <strong>{$a->installername}</strong> package is
    <a href="http://www.opensource.org/docs/definition_plain.html">open source</a> and is distributed
    under the <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> license.';
$string['welcomep60'] = 'The following pages will lead you through some easy to follow steps to
    configure and set up <strong>Moodle</strong> on your computer. You may accept the default
    settings or, optionally, amend them to suit your own needs.';
$string['welcomep70'] = 'Click the "Next" button below to continue with the set up of <strong>Moodle</strong>.';
$string['wwwroot'] = 'இணைய முகவரி';
$string['wwwrooterror'] = 'The \'Web Address\' does not appear to be valid - this Moodle installation doesn\'t appear to be there. The value below has been reset.';
