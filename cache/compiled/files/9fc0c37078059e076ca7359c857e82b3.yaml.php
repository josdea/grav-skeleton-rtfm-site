<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'H:/Dean/Githubs/grav/grav-skeleton-rtfm-site/user/themes/learn2/blueprints.yaml',
    'modified' => 1456939078,
    'data' => [
        'name' => 'Learn2',
        'version' => '1.5.0',
        'description' => 'Learn2 is a new modern documentation theme for Grav',
        'icon' => 'book',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-learn2',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'heme, docs, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-learn2/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'top_level_version' => [
                    'type' => 'toggle',
                    'label' => 'Top Level Version',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'home_url' => [
                    'type' => 'text',
                    'label' => 'Home URL',
                    'placeholder' => 'http://getgrav.org',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'google_analytics_code' => [
                    'type' => 'text',
                    'label' => 'Google Analytics Code',
                    'placeholder' => 'UA-XXXXXXXX-X',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'GitHub Position',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                        'off' => 'Off'
                    ]
                ],
                'github.tree' => [
                    'type' => 'text',
                    'label' => 'GitHub Tree',
                    'default' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/'
                ],
                'github.commits' => [
                    'type' => 'text',
                    'label' => 'GitHub Tree',
                    'default' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
                ]
            ]
        ]
    ]
];
