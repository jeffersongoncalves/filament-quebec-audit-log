<?php

return [
    'resource' => [
        'label' => 'Entrada de auditoría',
        'plural_label' => 'Registro de auditoría',
    ],

    'fields' => [
        'created_at' => 'Cuándo',
        'actor' => 'Quién',
        'action' => 'Acción',
        'subject' => 'Titular',
        'subject_type' => 'Modelo del titular',
        'columns' => 'Columnas',
        'purpose' => 'Finalidad',
        'ip_address' => 'Dirección IP',
        'user_agent' => 'Agente de usuario',
        'metadata' => 'Metadatos',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Visualizó',
        'updated' => 'Modificó',
        'deleted' => 'Eliminó',
        'exported' => 'Exportó',
        'anonymized' => 'Anonimizó',
        'verified' => 'Verificó la cadena',
    ],

    'system' => 'Sistema',
    'verify' => [
        'label' => 'Verificar cadena',
        'intact' => 'El registro de auditoría está íntegro.',
        'broken' => 'La cadena se rompe en la entrada #:id: ella o la anterior fue modificada, eliminada o insertada.',
    ],
];
