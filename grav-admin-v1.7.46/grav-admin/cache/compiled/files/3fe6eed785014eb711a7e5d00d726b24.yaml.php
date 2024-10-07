<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/emerge-connect/grav-admin-v1.7.46/grav-admin/user/plugins/flex-objects/flex-objects.yaml',
    'modified' => 1728286067,
    'size' => 316,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            0 => 'blueprints://flex-objects/pages.yaml',
            1 => 'blueprints://flex-objects/user-accounts.yaml',
            2 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
