<?php

return [

    'system' => [
        'system_avatar' => '/assets/backend/img/logo-icon.jpg',
        'logo' => '/assets/backend/img/logo.png',
    ],
    'users' => [
        'large' => [
            'path'=>'public/users/avatars/large/',
            'width' => 1000,
            'height' => 1000,
            'public_path' => 'storage/users/avatars/large/',
        ],
        'small' => [
            'path'=>'public/users/avatars/small/',
            'width' => 100,
            'height' => 100,
            'public_path' => 'storage/users/avatars/small/',
        ],
    ],

    'avatar_img_format' => 'jpg',
    'default_avatar' => 'images/default_avatar.png'
];