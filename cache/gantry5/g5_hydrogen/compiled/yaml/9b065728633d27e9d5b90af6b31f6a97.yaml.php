<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/13/page/head.yaml',
    'modified' => 1524655059,
    'data' => [
        'atoms' => [
            0 => [
                'title' => 'UIkit for Gantry5',
                'type' => 'uikit',
                'attributes' => [
                    'enabled' => true,
                    'jslocation' => 'footer'
                ],
                'id' => 'uikit-5439'
            ],
            1 => [
                'id' => 'fixed-header-1850',
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
