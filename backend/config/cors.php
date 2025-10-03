<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | This file determines which cross-origin requests are allowed to your
    | application. Adjust the settings below to match your frontend origin(s).
    |
    */

    // Paths that should be accessible from the browser (CORS-enabled)
    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
        // add other routes if needed
    ],

    // HTTP methods allowed for CORS requests. "*" allows all methods.
    'allowed_methods' => ['*'],

    // Origins that are allowed to access your application.
    // Use env('FRONTEND_URL') to make this configurable per environment.
    'allowed_origins' => [
        env('FRONTEND_URL', 'http://localhost:3000'),
    ],

    // Patterns to match allowed origins (if you need wildcard subdomains, etc.)
    'allowed_origins_patterns' => [],

    // Headers that are allowed to be sent by the client. "*" allows all headers.
    'allowed_headers' => ['*'],

    // Headers that are exposed to the browser.
    'exposed_headers' => [],

    // How long (in seconds) the results of a preflight request can be cached.
    'max_age' => 0,

    // Whether to allow cookies / credentials to be sent in cross-origin requests.
    'supports_credentials' => true,
];
