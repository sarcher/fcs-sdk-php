<?php
// Sample settings

$FCS_CONFIG = array(
    // ServicesUrl - Full URL to the Firebrand Cloud Services instance being used.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'ServicesUrl' => 'http://a.services.url',

    // AccessKey - Access Key used for your Domain Account.  This identifies the account you are using.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'AccessKey' => 'AnAccessKey',

    // AccessSecret - Access Secret is used to secure each message sent to Firebrand Cloud Services.
    // It is a private setting that should only be known by you and Firebrand.  Make sure to keep it private.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'AccessSecret' => 'AnAccessSecret',

    // LogPath - Full path to a log file.
    // When set, the file will be created and logs written to it for debugging purposes.
    'LogPath' => 'c:\logs\fcs-sdk-php.log'
);
