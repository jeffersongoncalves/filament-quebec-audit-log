<?php

return [
    'resource' => [
        'label' => 'إدخال تدقيق',
        'plural_label' => 'سجل التدقيق',
    ],

    'fields' => [
        'created_at' => 'متى',
        'actor' => 'من',
        'action' => 'الإجراء',
        'subject' => 'صاحب البيانات',
        'subject_type' => 'نموذج صاحب البيانات',
        'columns' => 'الأعمدة',
        'purpose' => 'الغرض',
        'ip_address' => 'عنوان IP',
        'user_agent' => 'وكيل المستخدم',
        'metadata' => 'بيانات وصفية',
        'hash' => 'التجزئة',
    ],

    'actions' => [
        'viewed' => 'عرض',
        'updated' => 'عدّل',
        'deleted' => 'حذف',
        'exported' => 'صدّر',
        'anonymized' => 'جهّل',
        'verified' => 'تحقق من السلسلة',
    ],

    'system' => 'النظام',
    'verify' => [
        'label' => 'التحقق من السلسلة',
        'intact' => 'سجل التدقيق سليم.',
        'broken' => 'تنقطع السلسلة عند الإدخال #:id: تم تعديله أو تعديل الإدخال السابق أو حذفه أو إدراجه.',
    ],
];
