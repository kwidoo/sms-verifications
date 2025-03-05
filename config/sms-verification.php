<?php

return [
    'verifiers' => [
        'twilio' => \Kwidoo\SmsVerification\Verifiers\TwilioVerifier::class,
        'vonage' => \Kwidoo\SmsVerification\Verifiers\VonageVerifier::class,
        'telnyx' => \Kwidoo\SmsVerification\Verifiers\TelnyxVerifier::class,
    ],
    'default' => 'twilio',
    'round_robin' => [
        'verifiers' => ['twilio', 'vonage'],
        'current_verifier_cache_key' => 'round_robin_verifiers_',
        'verifier_for_number_cache_key' => 'round_robin_verifier_for_',
    ],
    'vonage' => [
        'api_key' => config('vonage.api_key', env('VONAGE_API_KEY')),
        'api_secret' => config('vonage.api_secret', env('VONAGE_API_SECRET')),
        'brand' => config('vonage.brand', env('VONAGE_BRAND', 'Kwidoo')),
    ],
    'twilio' => [
        'sid' => config('twilio.sid', env('TWILIO_SID')),
        'auth_token' => config('twilio.auth_token', env('TWILIO_AUTH_TOKEN')),
        'verify_sid' => config('twilio.verify_sid', env('TWILIO_VERIFY_SID')),
    ],
    'telnyx' => [
        'api_key' => config('telnyx.api_key', env('TELNYX_API_KEY')),
        'public_key' => config('telnyx.public_key', env('TELNYX_PUBLIC_KEY')),
        'verify_sid' => config('telnyx.verify_sid', env('TELNYX_VERIFY_SID')),
    ],
];
