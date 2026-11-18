<?php

return [
    'resource' => [
        'label' => 'مورد ممیزی',
        'plural_label' => 'گزارش ممیزی',
    ],

    'fields' => [
        'created_at' => 'زمان',
        'actor' => 'چه کسی',
        'action' => 'عملیات',
        'subject' => 'صاحب داده',
        'subject_type' => 'مدل صاحب داده',
        'columns' => 'ستون‌ها',
        'purpose' => 'هدف',
        'ip_address' => 'نشانی IP',
        'user_agent' => 'عامل کاربر',
        'metadata' => 'فراداده',
        'hash' => 'هش',
    ],

    'actions' => [
        'viewed' => 'مشاهده کرد',
        'updated' => 'تغییر داد',
        'deleted' => 'حذف کرد',
        'exported' => 'صادر کرد',
        'anonymized' => 'ناشناس کرد',
        'verified' => 'زنجیره را بررسی کرد',
    ],

    'system' => 'سیستم',
    'verify' => [
        'label' => 'بررسی زنجیره',
        'intact' => 'گزارش ممیزی سالم است.',
        'broken' => 'زنجیره در مورد #:id شکسته است: این مورد یا مورد قبلی تغییر کرده، حذف یا درج شده است.',
    ],
];
