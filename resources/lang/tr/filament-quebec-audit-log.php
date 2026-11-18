<?php

return [
    'resource' => [
        'label' => 'Denetim kaydı',
        'plural_label' => 'Denetim günlüğü',
    ],

    'fields' => [
        'created_at' => 'Ne zaman',
        'actor' => 'Kim',
        'action' => 'İşlem',
        'subject' => 'İlgili kişi',
        'subject_type' => 'İlgili kişi modeli',
        'columns' => 'Sütunlar',
        'purpose' => 'Amaç',
        'ip_address' => 'IP adresi',
        'user_agent' => 'Kullanıcı aracısı',
        'metadata' => 'Meta veriler',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Görüntüledi',
        'updated' => 'Değiştirdi',
        'deleted' => 'Sildi',
        'exported' => 'Dışa aktardı',
        'anonymized' => 'Anonimleştirdi',
        'verified' => 'Zinciri doğruladı',
    ],

    'system' => 'Sistem',
    'verify' => [
        'label' => 'Zinciri doğrula',
        'intact' => 'Denetim günlüğü bozulmamış.',
        'broken' => 'Zincir #:id kaydında kırılıyor: bu kayıt veya öncekisi değiştirilmiş, silinmiş ya da eklenmiş.',
    ],
];
