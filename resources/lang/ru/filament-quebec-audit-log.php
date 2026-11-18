<?php

return [
    'resource' => [
        'label' => 'Запись аудита',
        'plural_label' => 'Журнал аудита',
    ],

    'fields' => [
        'created_at' => 'Когда',
        'actor' => 'Кто',
        'action' => 'Действие',
        'subject' => 'Субъект данных',
        'subject_type' => 'Модель субъекта данных',
        'columns' => 'Столбцы',
        'purpose' => 'Цель',
        'ip_address' => 'IP-адрес',
        'user_agent' => 'User agent',
        'metadata' => 'Метаданные',
        'hash' => 'Хеш',
    ],

    'actions' => [
        'viewed' => 'Просмотрел',
        'updated' => 'Изменил',
        'deleted' => 'Удалил',
        'exported' => 'Экспортировал',
        'anonymized' => 'Анонимизировал',
        'verified' => 'Проверил цепочку',
    ],

    'system' => 'Система',
    'verify' => [
        'label' => 'Проверить цепочку',
        'intact' => 'Журнал аудита не изменён.',
        'broken' => 'Цепочка прерывается на записи #:id: она или предыдущая была изменена, удалена или вставлена.',
    ],
];
