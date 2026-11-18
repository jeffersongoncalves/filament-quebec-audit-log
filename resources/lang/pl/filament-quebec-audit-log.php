<?php

return [
    'resource' => [
        'label' => 'Wpis audytu',
        'plural_label' => 'Dziennik audytu',
    ],

    'fields' => [
        'created_at' => 'Kiedy',
        'actor' => 'Kto',
        'action' => 'Działanie',
        'subject' => 'Osoba, której dane dotyczą',
        'subject_type' => 'Model osoby',
        'columns' => 'Kolumny',
        'purpose' => 'Cel',
        'ip_address' => 'Adres IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadane',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Wyświetlono',
        'updated' => 'Zmieniono',
        'deleted' => 'Usunięto',
        'exported' => 'Wyeksportowano',
        'anonymized' => 'Zanonimizowano',
        'verified' => 'Sprawdzono łańcuch',
    ],

    'system' => 'System',
    'verify' => [
        'label' => 'Sprawdź łańcuch',
        'intact' => 'Dziennik audytu jest nienaruszony.',
        'broken' => 'Łańcuch zrywa się na wpisie #:id: ten lub poprzedni wpis został zmieniony, usunięty lub wstawiony.',
    ],
];
