<?php
return [
    'url' => env('SMS_URL', 'https://api.smsreklama.ge/sms/send/?'),
    'checkStatus' => 'https://api.smsreklama.ge/sms/status/?',
    'login' => env('SMS_LOGIN', ''),
    'password' => env('SMS_PASSWORD', ''),
    'brand' => env('SMS_BRAND', '')
];