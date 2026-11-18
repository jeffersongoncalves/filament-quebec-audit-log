<?php

return [
    'resource' => [
        'label' => '監査エントリ',
        'plural_label' => '監査ログ',
    ],

    'fields' => [
        'created_at' => '日時',
        'actor' => '実行者',
        'action' => '操作',
        'subject' => 'データ主体',
        'subject_type' => 'データ主体のモデル',
        'columns' => '列',
        'purpose' => '目的',
        'ip_address' => 'IPアドレス',
        'user_agent' => 'ユーザーエージェント',
        'metadata' => 'メタデータ',
        'hash' => 'ハッシュ',
    ],

    'actions' => [
        'viewed' => '閲覧',
        'updated' => '更新',
        'deleted' => '削除',
        'exported' => 'エクスポート',
        'anonymized' => '匿名化',
        'verified' => 'チェーンを検証',
    ],

    'system' => 'システム',
    'verify' => [
        'label' => 'チェーンを検証',
        'intact' => '監査ログは改ざんされていません。',
        'broken' => 'エントリ #:id でチェーンが途切れています。このエントリまたは直前のエントリが変更、削除、または挿入されました。',
    ],
];
