<?php

return [
    'resource' => [
        'label' => 'Audit yozuvi',
        'plural_label' => 'Audit jurnali',
    ],

    'fields' => [
        'created_at' => 'Qachon',
        'actor' => 'Kim',
        'action' => 'Amal',
        'subject' => 'Ma\'lumot subyekti',
        'subject_type' => 'Subyekt modeli',
        'columns' => 'Ustunlar',
        'purpose' => 'Maqsad',
        'ip_address' => 'IP manzil',
        'user_agent' => 'Foydalanuvchi agenti',
        'metadata' => 'Metama\'lumotlar',
        'hash' => 'Xesh',
    ],

    'actions' => [
        'viewed' => 'Ko\'rdi',
        'updated' => 'O\'zgartirdi',
        'deleted' => 'O\'chirdi',
        'exported' => 'Eksport qildi',
        'anonymized' => 'Anonimlashtirdi',
        'verified' => 'Zanjirni tekshirdi',
    ],

    'system' => 'Tizim',
    'verify' => [
        'label' => 'Zanjirni tekshirish',
        'intact' => 'Audit jurnali butun.',
        'broken' => 'Zanjir #:id yozuvida uziladi: u yoki oldingi yozuv o\'zgartirilgan, o\'chirilgan yoki qo\'shilgan.',
    ],
];
