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
 * Strings for component 'paygw_chargebee', language 'en', version '4.0'.
 *
 * @package     paygw_chargebee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API key';
$string['apikey_help'] = 'The API key that we use to identify ourselves with Chargebee';
$string['autovoidinvoice'] = 'Void unpaid invoice';
$string['autovoidinvoice_help'] = 'Automatically void unpaid invoices, if payment has failed';
$string['commentvoidinvoice'] = 'Automatically voided because payment declined.';
$string['customeridprefix'] = 'Customer id prefix';
$string['customeridprefix_help'] = 'Prefix to use when creating new customer accounts in Chargebee';
$string['errchargebeeerrorstatus'] = 'Chargebee error status: {$a}';
$string['errtransactionverificationfailed'] = 'Transaction verification failed';
$string['eventtransactioncancelled'] = 'Payment transaction cancelled';
$string['eventtransactioncompleted'] = 'Payment transaction completed';
$string['eventtransactionfailed'] = 'Payment transaction failed';
$string['eventtransactionstarted'] = 'Payment transaction started';
$string['eventtransactionsuccessful'] = 'Payment transaction successful';
$string['eventvoidinvoicefailed'] = 'Void unpaid invoice failed';
$string['eventvoidinvoicesuccessful'] = 'Void unpaid invoice successful';
$string['gatewaydescription'] = 'Chargebee payment gateway allows processing of credit card and PayPal transactions.';
$string['gatewayname'] = 'Chargebee';
$string['lineitemprefix'] = 'Invoice item prefix';
$string['lineitemprefix_help'] = 'Prefix to use for items in the invoice';
$string['paymentalreadyexists'] = 'Error. This transaction was already recorded.';
$string['paymentcancelled'] = 'Payment was cancelled.';
$string['paymentmethods'] = 'Payment methods';
$string['paymentsuccessful'] = 'Payment was successful.';
$string['pluginname'] = 'Chargebee';
$string['pluginname_desc'] = 'The Chargebee plugin allows you to receive payments via Chargebee with Braintree.';
$string['privacy:metadata:paygw_chargebee'] = 'Stores the relation from Moodle users to Chargebee customer objects';
$string['privacy:metadata:paygw_chargebee:amountpaid'] = 'Amount paid for this transaction';
$string['privacy:metadata:paygw_chargebee:customerid'] = 'Customer ID used in Chargebee';
$string['privacy:metadata:paygw_chargebee:invoicenumber'] = 'Invoice number of this transaction in Chargebee';
$string['privacy:metadata:paygw_chargebee:transactionid'] = 'Transaction identifier in Chargebee';
$string['privacy:metadata:paygw_chargebee:userid'] = 'Moodle user ID';
$string['privacy:metadata:paygw_chargebee_com'] = 'Shares the required user data with Chargebee for processing payments';
$string['privacy:metadata:paygw_chargebee_com:email'] = 'Email of the user requesting a transaction';
$string['privacy:metadata:paygw_chargebee_com:firstname'] = 'First name of the user requesting a transaction';
$string['privacy:metadata:paygw_chargebee_com:lastname'] = 'Last name of the user requesting a transaction';
$string['privacy:metadata:paygw_chargebee_com:userid'] = 'Moodle user ID of the user requesting a transaction';
$string['sitename'] = 'Site name';
$string['sitename_help'] = 'Chargebee site name';
$string['transactionfailed'] = 'Error. This transaction could not be completed.';
