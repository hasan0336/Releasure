<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FB_KEY','313897995920505'),         // Your GitHub Client ID
        'client_secret' => env('CLIENT_SECRET','6e8056c152fe55b579da4c5614c73e65'), // Your GitHub Client Secret
        'redirect' => 'http://localhost:8080/releasur_php/public/login/facebook/callback',
    ],

    'google' => [
        'client_id' => env('G_KEY','72650269631-r2a9sodfv8r1s3sh4775k48t5hmd2vda.apps.googleusercontent.com'),         // Your GitHub Client ID
        'client_secret' => env('G_CLIENT_SECRET','vgIU98UWpiGjHf-THV6ijYuL'), // Your GitHub Client Secret
        'redirect' => 'http://localhost:8080/releasur_php/public/login/google/callback',
    ],

    'linkedin' => [
        'client_id' => env('L_KEY','811xky4xaufiov'),         // Your GitHub Client ID
        'client_secret' => env('L_CLIENT_SECRET','BLKDoFW1G7igE120'), // Your GitHub Client Secret
        'redirect' => 'http://localhost:8080/releasur_php/public/login/linkedin/callback',
    ],

];
