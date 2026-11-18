<?php

return [
    'resource' => [
        'label' => 'Audit qeydi',
        'plural_label' => 'Audit jurnalı',
    ],

    'fields' => [
        'created_at' => 'Nə vaxt',
        'actor' => 'Kim',
        'action' => 'Əməliyyat',
        'subject' => 'Məlumat subyekti',
        'subject_type' => 'Subyekt modeli',
        'columns' => 'Sütunlar',
        'purpose' => 'Məqsəd',
        'ip_address' => 'IP ünvanı',
        'user_agent' => 'İstifadəçi agenti',
        'metadata' => 'Metaməlumat',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Baxdı',
        'updated' => 'Dəyişdi',
        'deleted' => 'Sildi',
        'exported' => 'İxrac etdi',
        'anonymized' => 'Anonimləşdirdi',
        'verified' => 'Zənciri yoxladı',
    ],

    'system' => 'Sistem',
    'verify' => [
        'label' => 'Zənciri yoxla',
        'intact' => 'Audit jurnalı bütövdür.',
        'broken' => 'Zəncir #:id qeydində qırılır: bu və ya əvvəlki qeyd dəyişdirilib, silinib və ya əlavə edilib.',
    ],
];
