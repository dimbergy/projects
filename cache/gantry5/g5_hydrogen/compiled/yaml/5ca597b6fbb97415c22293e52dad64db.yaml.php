<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/default/page/head.yaml',
    'modified' => 1525337365,
    'data' => [
        'meta' => [
            
        ],
        'head_bottom' => '',
        'atoms' => [
            0 => [
                'id' => 'uikit-3308',
                'type' => 'uikit',
                'title' => 'UIkit for Gantry5',
                'attributes' => [
                    'enabled' => '1',
                    'jslocation' => 'footer'
                ]
            ],
            1 => [
                'id' => 'fixed-header-5197',
                'type' => 'fixed-header',
                'title' => 'Fixed Header',
                'attributes' => [
                    'enabled' => '1',
                    'cssselector' => '#g-navigation',
                    'mobile' => 'disable',
                    'secondtrigger' => '0',
                    'secondoffset' => ''
                ]
            ],
            2 => [
                'id' => 'assets-7723',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => 'gantry-assets://custom/css/custom.css',
                            'inline' => '',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'custom.css'
                        ],
                        1 => [
                            'location' => 'gantry-assets://custom/css/style4.css',
                            'inline' => '',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'slideshow.css'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => 'gantry-assets://custom/js/modernizr.custom.86080.js',
                            'inline' => '',
                            'in_footer' => '0',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'modernizer.js'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
