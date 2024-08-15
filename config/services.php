<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'facebook' => [
        'client_id' =>'224519096059656' ,
        'client_secret' =>'67d7c4eb5f80baf96e1f24f2f812e01a' ,
        'redirect' => 'http://humarimama.pk/fbres',
    ],
    'google' => [ 
        'client_id' =>'163445879559-rpkk9tigoh1r239o4qao0jvtn9ahgelo.apps.googleusercontent.com' ,
        'client_secret' =>'OwTQS42X8Lf0Pl-IKwkKKNRO' ,
        'redirect' => 'http://humarimama.pk/googleres',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
