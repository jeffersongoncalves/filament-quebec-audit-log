<?php

return [
    'resource' => [
        'label' => 'Entrée d\'audit',
        'plural_label' => 'Journal d\'audit',
    ],

    'fields' => [
        'created_at' => 'Quand',
        'actor' => 'Qui',
        'action' => 'Action',
        'subject' => 'Personne concernée',
        'subject_type' => 'Modèle de la personne concernée',
        'columns' => 'Colonnes',
        'purpose' => 'Finalité',
        'ip_address' => 'Adresse IP',
        'user_agent' => 'User agent',
        'metadata' => 'Métadonnées',
        'hash' => 'Empreinte',
    ],

    'actions' => [
        'viewed' => 'Consulté',
        'updated' => 'Modifié',
        'deleted' => 'Supprimé',
        'exported' => 'Exporté',
        'anonymized' => 'Anonymisé',
        'verified' => 'Chaîne vérifiée',
    ],

    'system' => 'Système',
    'verify' => [
        'label' => 'Vérifier la chaîne',
        'intact' => 'Le journal d\'audit est intact.',
        'broken' => 'La chaîne se rompt à l\'entrée #:id : elle ou la précédente a été modifiée, supprimée ou insérée.',
    ],
];
