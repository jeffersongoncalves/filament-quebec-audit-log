<?php

return [
    'resource' => [
        'label' => 'Registro de auditoria',
        'plural_label' => 'Auditoria',
    ],

    'fields' => [
        'created_at' => 'Quando',
        'actor' => 'Quem',
        'action' => 'Ação',
        'subject' => 'Titular',
        'subject_type' => 'Modelo do titular',
        'columns' => 'Colunas',
        'purpose' => 'Finalidade',
        'ip_address' => 'Endereço IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadados',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Visualizou',
        'updated' => 'Alterou',
        'deleted' => 'Excluiu',
        'exported' => 'Exportou',
        'anonymized' => 'Anonimizou',
        'verified' => 'Verificou encadeamento',
    ],

    'system' => 'Sistema',
    'verify' => [
        'label' => 'Verificar encadeamento',
        'intact' => 'O registro de auditoria está íntegro.',
        'broken' => 'O encadeamento quebra na entrada #:id: ela ou a anterior foi alterada, removida ou inserida.',
    ],
];
