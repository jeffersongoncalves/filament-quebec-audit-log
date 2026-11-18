<?php

return [
    'resource' => [
        'label' => '审计条目',
        'plural_label' => '审计日志',
    ],

    'fields' => [
        'created_at' => '时间',
        'actor' => '操作者',
        'action' => '操作',
        'subject' => '数据主体',
        'subject_type' => '数据主体模型',
        'columns' => '列',
        'purpose' => '目的',
        'ip_address' => 'IP 地址',
        'user_agent' => '用户代理',
        'metadata' => '元数据',
        'hash' => '哈希',
    ],

    'actions' => [
        'viewed' => '查看',
        'updated' => '修改',
        'deleted' => '删除',
        'exported' => '导出',
        'anonymized' => '匿名化',
        'verified' => '验证了链',
    ],

    'system' => '系统',
    'verify' => [
        'label' => '验证链',
        'intact' => '审计日志完整。',
        'broken' => '链在条目 #:id 处断开：该条目或前一条目被修改、删除或插入。',
    ],
];
