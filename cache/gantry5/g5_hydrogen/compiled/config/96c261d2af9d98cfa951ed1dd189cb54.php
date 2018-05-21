<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1526466505,
    'checksum' => 'e59587cc5512ab140df20a0c93ee9a91',
    'files' => [
        'templates/g5_hydrogen/custom/config/11' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/index.yaml',
                'modified' => 1525343491
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/layout.yaml',
                'modified' => 1525343491
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/page/head.yaml',
                'modified' => 1524655064
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => 11,
            'timestamp' => 1525343491,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1524577640
            ],
            'positions' => [
                'header' => 'Header',
                'header-button' => 'Module Position',
                'header-slider' => 'Module Position',
                'position-0' => 'Module Position',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-header' => 'Header',
                    'position-position-6201' => 'Module Position',
                    'position-position-9520' => 'Module Position',
                    'position-position-1711' => 'Module Position',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'logo' => [
                    'logo-2057' => 'Logo',
                    'logo-5901' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-8118' => 'Menu'
                ],
                'social' => [
                    'social-2228' => 'Social',
                    'social-5151' => 'Social'
                ],
                'messages' => [
                    'system-messages-2564' => 'System Messages'
                ],
                'content' => [
                    'system-content-3237' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-3091' => 'Copyright'
                ],
                'totop' => [
                    'totop-4227' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-2992' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'main' => 'main',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'position-header' => 'position-header',
                    'position-position-6201' => 'position-position-3669',
                    'position-position-9520' => 'position-position-9913',
                    'logo-2057' => 'logo-2057',
                    'menu-8118' => 'menu-8118',
                    'position-position-1711' => 'position-position-8524',
                    'social-2228' => 'social-7337',
                    'position-breadcrumbs' => 'position-breadcrumbs',
                    'system-messages-2564' => 'system-messages-2564',
                    'system-content-3237' => 'system-content-3237',
                    'position-footer' => 'position-footer',
                    'copyright-3091' => 'copyright-3091',
                    'social-5151' => 'social-4747',
                    'totop-4227' => 'totop-3223',
                    'logo-5901' => 'logo-5520',
                    'mobile-menu-2992' => 'mobile-menu-2992'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1524577640
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'main' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ]
        ],
        'page' => [
            'head' => [
                'atoms' => [
                    0 => [
                        'id' => 'uikit-5674',
                        'type' => 'uikit',
                        'title' => 'UIkit for Gantry5',
                        'attributes' => [
                            'enabled' => '1',
                            'jslocation' => 'footer'
                        ]
                    ],
                    1 => [
                        'id' => 'fixed-header-7885',
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
        ]
    ]
];
