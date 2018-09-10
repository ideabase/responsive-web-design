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
    ],

    // Dev environment settings
    'dev' => [
        'siteUrl' => 'http://rwdkent.local',
        'aliases' => [
            'basePath' => '',
            'baseUrl' =>
            'http://rwdkent.local',
          ],
        'devMode' => true,
    ],

    // Staging environment settings
    'staging' => [
        'siteUrl' => null,
    ],

    // Production environment settings
    'production' => [
        'siteUrl' => 'https://rwdkent.com',
        'aliases' => [
            'basePath' => '',
            'baseUrl' =>
            'https://www.rwdkent.com',
          ],
    ],
];
