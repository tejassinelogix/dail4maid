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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id' => '786876311657910',         // Your facebook Client ID
        'client_secret' => 'b9ea1f0bb280c7cb86c87fe77c3ea315', // Your facebook Client Secret
        'redirect' => 'https://localhost/QB/public/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     => '703950307209-d9v4rdne88j37gfn7jggusmhnh6t4ecj.apps.googleusercontent.com',
        'client_secret' => 'OHYvzj4VHeHb_vT4uYENRBsc',
        'redirect'      => 'https://localhost/QB/public/auth/google/callback',
    ],

];


