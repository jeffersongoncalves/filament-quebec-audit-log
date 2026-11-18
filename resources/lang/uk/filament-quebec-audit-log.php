<?php

return [
    'resource' => [
        'label' => 'Запис аудиту',
        'plural_label' => 'Журнал аудиту',
    ],

    'fields' => [
        'created_at' => 'Коли',
        'actor' => 'Хто',
        'action' => 'Дія',
        'subject' => 'Суб\'єкт даних',
        'subject_type' => 'Модель суб\'єкта даних',
        'columns' => 'Стовпці',
        'purpose' => 'Мета',
        'ip_address' => 'IP-адреса',
        'user_agent' => 'User agent',
        'metadata' => 'Метадані',
        'hash' => 'Хеш',
    ],

    'actions' => [
        'viewed' => 'Переглянув',
        'updated' => 'Змінив',
        'deleted' => 'Видалив',
        'exported' => 'Експортував',
        'anonymized' => 'Анонімізував',
        'verified' => 'Перевірив ланцюжок',
    ],

    'system' => 'Система',
    'verify' => [
        'label' => 'Перевірити ланцюжок',
        'intact' => 'Журнал аудиту не змінено.',
        'broken' => 'Ланцюжок обривається на записі #:id: його або попередній було змінено, видалено чи вставлено.',
    ],
];
