<?php

return [
    'resource' => [
        'label' => 'Audit-Eintrag',
        'plural_label' => 'Audit-Log',
    ],

    'fields' => [
        'created_at' => 'Wann',
        'actor' => 'Wer',
        'action' => 'Aktion',
        'subject' => 'Betroffene Person',
        'subject_type' => 'Modell der betroffenen Person',
        'columns' => 'Spalten',
        'purpose' => 'Zweck',
        'ip_address' => 'IP-Adresse',
        'user_agent' => 'User Agent',
        'metadata' => 'Metadaten',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Angesehen',
        'updated' => 'Geändert',
        'deleted' => 'Gelöscht',
        'exported' => 'Exportiert',
        'anonymized' => 'Anonymisiert',
        'verified' => 'Kette geprüft',
    ],

    'system' => 'System',
    'verify' => [
        'label' => 'Kette prüfen',
        'intact' => 'Das Audit-Log ist unverändert.',
        'broken' => 'Die Kette bricht bei Eintrag #:id: dieser oder der vorherige wurde geändert, entfernt oder eingefügt.',
    ],
];
