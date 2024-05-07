<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/RSUP/DEV/PHP/grav-theme-linktree/user/themes/linktree/blueprints.yaml',
    'modified' => 1715067452,
    'size' => 838,
    'data' => [
        'name' => 'Linktree Theme',
        'slug' => 'linktree',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'Linktree Themes powered by GravCMS',
        'icon' => 'rebel',
        'author' => [
            'name' => 'M Desta Fadilah a.k.a topidesta',
            'email' => 'desta@rspersahabatan.co.id'
        ],
        'homepage' => 'https://github.com/mdestafadilah/grav-theme-linktree',
        'demo' => 'https://halobayi.co.id',
        'keywords' => 'grav, theme, halobayi, 4dimensiusg',
        'bugs' => 'https://github.com/mdestafadilah/grav-theme-linktree/issues',
        'readme' => 'https://github.com/mdestafadilah/grav-theme-linktree/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
