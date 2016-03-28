<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'H:/Dean/Githubs/grav/grav-skeleton-rtfm-site/user/config/site.yaml',
    'modified' => 1456943789,
    'data' => [
        'title' => 'eLearn at PSCC',
        'author' => [
            'name' => 'Josh Dean',
            'email' => 'jmdean1@pstcc.edu'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'RTFM Skeleton'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
