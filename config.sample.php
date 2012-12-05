<?php
// Sample settings

$FCS_CONFIG = array(
    // url - Full URL to the Firebrand Cloud Services instance being used.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'url' => 'fcs-services-url',

    // AccessKey - Access Key used for your Domain Account.  This identifies the account you are using.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'key' => 'your-fcs-access-key',

    // AccessSecret - Access Secret is used to secure each message sent to Firebrand Cloud Services.
    // It is a private setting that should only be known by you and Firebrand.  Make sure to keep it private.
    // This setting is sent to you from Firebrand, once you have been setup to use this SDK.
    'secret' => 'your-fcs-access-secret',

    // LogPath - Full path to a log file.
    // When set, the file will be created and logs written to it for debugging purposes.
    'logPath' => '/path/to/your/log/file.log'
);
