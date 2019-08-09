<?php
/**
 * General Configuration
 */

return [

    '*' => [
        'defaultWeekStartDay' => 0,
        'enableCsrfProtection' => true,
        'omitScriptNameInUrls' => true,
        'cpTrigger' => 'admin',
        'securityKey' => getenv('SECURITY_KEY'),
        'maxUploadFileSize' => 104857600,
        'extraAllowedFileExtensions' => 'ai, eps, psd, ps',
    ],

    // Dev environment settings
    'dev' => [
        'siteUrl' => 'http://rwd.local/',
        'devMode' => true,
    ],

    // Staging environment settings
    'staging' => [
        'siteUrl' => 'http://rwd.ideabase.cci.kent.edu/httpdocs/',
        'devMode' => true,
    ],

    // Production environment settings
    'production' => [
        'siteUrl' => 'https://rwdkent.com/',
    ],
];
