<?php

return [
    'resource' => [
        'label' => 'Voce di audit',
        'plural_label' => 'Registro di audit',
    ],

    'fields' => [
        'created_at' => 'Quando',
        'actor' => 'Chi',
        'action' => 'Azione',
        'subject' => 'Interessato',
        'subject_type' => 'Modello dell\'interessato',
        'columns' => 'Colonne',
        'purpose' => 'Finalità',
        'ip_address' => 'Indirizzo IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadati',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Visualizzato',
        'updated' => 'Modificato',
        'deleted' => 'Eliminato',
        'exported' => 'Esportato',
        'anonymized' => 'Anonimizzato',
        'verified' => 'Catena verificata',
    ],

    'system' => 'Sistema',
    'verify' => [
        'label' => 'Verifica catena',
        'intact' => 'Il registro di audit è integro.',
        'broken' => 'La catena si interrompe alla voce #:id: essa o la precedente è stata modificata, rimossa o inserita.',
    ],
];
