<?php

return [
    'resource' => [
        'label' => 'Audit entry',
        'plural_label' => 'Audit log',
    ],

    'fields' => [
        'created_at' => 'When',
        'actor' => 'Who',
        'action' => 'Action',
        'subject' => 'Data subject',
        'subject_type' => 'Data subject model',
        'columns' => 'Columns',
        'purpose' => 'Purpose',
        'ip_address' => 'IP address',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
        'hash' => 'Hash',
    ],

    'actions' => [
        'viewed' => 'Viewed',
        'updated' => 'Updated',
        'deleted' => 'Deleted',
        'exported' => 'Exported',
        'anonymized' => 'Anonymized',
        'verified' => 'Verified chain',
    ],

    'system' => 'System',

    'verify' => [
        'label' => 'Verify chain',
        'intact' => 'The audit log is intact.',
        'broken' => 'The chain breaks at entry #:id: it or the entry before it was altered, removed or inserted.',
    ],
];
