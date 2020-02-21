<?php

return [
    'production' => false,
    'baseUrl' => 'https://williamjwakefield.netlify.com',
    'site' => [
        'title' => 'hackr_human',
        'description' => 'Personal blog of William J. Wakefield.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'William J. Wakefield',
        'twitter' => 'ajtziib-william',
        'github' => 'Chok-Ketzamtzib',
    ],
    'services' => [
        'analytics' => 'UA-158808973-1',
        'disqus' => 'artisanstatic',
        'cloudinary' => 'hackrhuman',
        'jumprock' => 'artisanstatic',
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
    'excerpt' => function ($page, $limit = 250, $end = '...') {
        return $page->isPost
            ? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
            : null;
    },
    'imageCdn' => function ($page, $path) {
        return "https://res.cloudinary.com/{$page->services->cloudinary}/{$path}";
    },
];
