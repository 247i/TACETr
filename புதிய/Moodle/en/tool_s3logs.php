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
 * Strings for component 'tool_s3logs', language 'en', version '4.0'.
 *
 * @package     tool_s3logs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archivesettings'] = 'Log Archive Settings';
$string['awss3settings'] = 'Amazon S3 Settings';
$string['awss3settings_desc'] = 'Settings for AWS and S3 access';
$string['bucket'] = 'Bucket';
$string['bucket_desc'] = 'The name of the bucket to store the logs in.';
$string['checkstatus'] = 'S3 Log Archiver status';
$string['connectionfailure'] = 'Could not establish connection to S3 storage. {$a}';
$string['connectionsuccess'] = 'Could establish connection to the S3 storage.';
$string['enable'] = 'Enable log archiver';
$string['enable_desc'] = 'Enable log archive tasks Help with Enable log archive tasks';
$string['generalsettings'] = 'General Settings';
$string['keyid'] = 'Key ID';
$string['keyid_desc'] = 'The AWS API key used to make AWS API calls for S3';
$string['logarchiverdisabled'] = 'Log archive tasks are disabled';
$string['maxlogage'] = 'Maximum age of log entries (months)';
$string['maxlogage_desc'] = 'Specifies the maximum age of log entriesi (in months) before the archiver starts archiving it to Amazon S3';
$string['maxruntime'] = 'Maximum log archive task runtime';
$string['maxruntime_desc'] = 'Background tasks handle the archiving and truncating of the Moodle log table. This setting controlls the maximum runtime for all S3 logs related tasks.';
$string['notconfigured'] = 'Missing configuration.';
$string['permissioncheckpassed'] = 'Permissions check passed.';
$string['pluginname'] = 'S3 Log Archiver';
$string['pluginnamedesc'] = 'Moodle to Amazon S3 Log Archiver';
$string['prefix'] = 'Log file prefix';
$string['prefix_desc'] = 'The prefix applied to the uploaded log filename.';
$string['privacy:metadata'] = 's3logs tool export Moodle standard log for archiving purposes';
$string['privacy:metadata:tool_s3logs:externalpurpose'] = 's3logs tool exports Moodle standard log records for archiving purposes';
$string['privacy:metadata:tool_s3logs:realuserid'] = 'The ID of the real user behind the event, when masquerading a user.';
$string['privacy:metadata:tool_s3logs:relateduserid'] = 'The ID of a user related to an event';
$string['privacy:metadata:tool_s3logs:userid'] = 'The ID of the user who triggered an event';
$string['processlogs'] = 'Run the S3 log processing task';
$string['s3region'] = 'AWS Region';
$string['s3region_desc'] = 'The AWS Region to use for API calls';
$string['sdkcredserror'] = 'Couldn\'t find AWS credentials. It\'s unsafe to enable this setting. Follow up <a href="https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html">AWS documentation</a>.';
$string['sdkcredsok'] = 'AWS credentials found. This setting can be safely enabled.';
$string['secretkey'] = 'Secret Key';
$string['secretkey_desc'] = 'The AWS secret key used to make AWS API calls for S3';
$string['usesdkcreds'] = 'Use the default credential provider chain to find AWS credentials';
$string['usesdkcreds_desc'] = 'If Moodle is hosted inside AWS, the default credential chain can be used for access to s3 logs.';
$string['writefailure'] = 'Could not write object to the S3 storage. {$a}';
