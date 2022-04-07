<?php

return [
    'administrador' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-add',
            'post-edit',
            'post-delete',
        ],
    ],
    'supervisor' => [
        'type' => 1,
        'children' => [
            'post-add',
            'post-edit',
            'post-index',
        ],
    ],
    'operador' => [
        'type' => 1,
        'children' => [
            'post-index',
        ],
    ],
    'post-index' => [
        'type' => 2,
    ],
    'post-add' => [
        'type' => 2,
    ],
    'post-edit' => [
        'type' => 2,
    ],
    'post-delete' => [
        'type' => 2,
    ],
];
