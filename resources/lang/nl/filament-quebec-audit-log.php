<?php

return [
    'resource' => [
        'label' => 'Auditregel',
        'plural_label' => 'Auditlog',
    ],

    'fields' => [
        'created_at' => 'Wanneer',
        'actor' => 'Wie',
        'action' => 'Actie',
        'subject' => 'Betrokkene',
        'subject_type' => 'Model van de betrokkene',
        'columns' => 'Kolommen',
        'purpose' => 'Doel',
        'ip_address' => 'IP-adres',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Bekeken',
        'updated' => 'Gewijzigd',
        'deleted' => 'Verwijderd',
        'exported' => 'Geëxporteerd',
        'anonymized' => 'Geanonimiseerd',
        'verified' => 'Keten gecontroleerd',
    ],

    'system' => 'Systeem',
    'verify' => [
        'label' => 'Keten controleren',
        'intact' => 'Het auditlog is intact.',
        'broken' => 'De keten breekt bij regel #:id: deze of de vorige is gewijzigd, verwijderd of ingevoegd.',
    ],
];
