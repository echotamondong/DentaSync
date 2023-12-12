<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$client = new Client([
    'base_uri' => "https://8g413r.api.infobip.com/",
    'headers' => [
        'Authorization' => "App e3bb116c3d1ab4c975683b9f021ccad1-4b677d27-a81d-4617-a15e-843ac7391a1d",
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ]
]);

$response = $client->request(
    'POST',
    'sms/2/text/advanced',
    [
        RequestOptions::JSON => [
            'messages' => [
                [
                    'from' => 'Kafagway',
                    'destinations' => [
                        ['to' => "639472738133"]
                    ],
                    'text' => 'Good day! This is a reminder for your supposed appointment for tomorrow. Thank you!',
                ]
            ]
        ],
    ]
);

echo "Message Sent";
echo "<meta http-equiv=\"refresh\" content=\"5;url=http://localhost/caps/index.php\"/>";
