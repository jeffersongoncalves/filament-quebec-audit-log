<?php

return [
    'resource' => [
        'label' => 'ऑडिट प्रविष्टि',
        'plural_label' => 'ऑडिट लॉग',
    ],

    'fields' => [
        'created_at' => 'कब',
        'actor' => 'किसने',
        'action' => 'कार्रवाई',
        'subject' => 'डेटा विषय',
        'subject_type' => 'डेटा विषय मॉडल',
        'columns' => 'कॉलम',
        'purpose' => 'उद्देश्य',
        'ip_address' => 'IP पता',
        'user_agent' => 'यूज़र एजेंट',
        'metadata' => 'मेटाडेटा',
        'hash' => 'हैश',
    ],

    'actions' => [
        'viewed' => 'देखा',
        'updated' => 'बदला',
        'deleted' => 'हटाया',
        'exported' => 'निर्यात किया',
        'anonymized' => 'अनामीकृत किया',
        'verified' => 'श्रृंखला सत्यापित की',
    ],

    'system' => 'सिस्टम',
    'verify' => [
        'label' => 'श्रृंखला सत्यापित करें',
        'intact' => 'ऑडिट लॉग अक्षुण्ण है।',
        'broken' => 'श्रृंखला प्रविष्टि #:id पर टूटती है: यह या पिछली प्रविष्टि बदली, हटाई या डाली गई थी।',
    ],
];
