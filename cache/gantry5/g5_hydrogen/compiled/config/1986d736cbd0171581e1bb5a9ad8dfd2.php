<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1526663232,
    'checksum' => 'ffed0c594903b37df2e6c5ba624020b7',
    'files' => [
        'templates/g5_hydrogen/custom/config/16' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/16/index.yaml',
                'modified' => 1526662883
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/16/layout.yaml',
                'modified' => 1526662883
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/16/page/head.yaml',
                'modified' => 1526658236
            ]
        ]
    ],
    'data' => [
        'index' => [
            'name' => '16',
            'timestamp' => 1526662883,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1524577640
            ],
            'positions' => [
                'header' => 'Header',
                'coming-soon' => 'Module Position',
                'header-slider' => 'Module Position',
                'breadcrumbs' => 'Breadcrumbs'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'project' => 'Project',
                'results' => 'Results',
                'topline' => 'Topline',
                'partners' => 'Partners',
                'bottomline' => 'Bottomline',
                'synergies' => 'Synergies',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-position-3033' => 'Header',
                    'position-position-8433' => 'Module Position',
                    'position-position-1400' => 'Module Position',
                    'position-position-2149' => 'Breadcrumbs'
                ],
                'contentarray' => [
                    'contentarray-6746' => 'Joomla Articles'
                ],
                'messages' => [
                    'system-messages-5789' => 'System Messages'
                ],
                'content' => [
                    'system-content-6976' => 'Page Content'
                ],
                'mobile-menu' => [
                    'mobile-menu-6245' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'position-position-3033' => 'position-header',
                    'position-position-1400' => 'position-position-9913',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-6245' => 'mobile-menu-2992'
                ],
                15 => [
                    'position-position-2149' => 'position-position-5613',
                    'system-messages-5789' => 'system-messages-2330',
                    'system-content-6976' => 'system-content-3721',
                    'subfeature' => 'subfeature'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1524577640
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'position-position-3033'
                    ],
                    1 => [
                        0 => 'position-position-8433'
                    ],
                    2 => [
                        0 => 'position-position-1400'
                    ],
                    3 => [
                        0 => 'contentarray-6746'
                    ]
                ],
                '/navigation/' => [
                    
                ],
                '/project/' => [
                    
                ],
                '/results/' => [
                    
                ],
                '/topline/' => [
                    
                ],
                '/partners/' => [
                    
                ],
                '/bottomline/' => [
                    
                ],
                '/synergies/' => [
                    
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-position-2149'
                    ],
                    1 => [
                        0 => 'system-messages-5789'
                    ],
                    2 => [
                        0 => 'system-content-6976'
                    ]
                ],
                'subfeature' => [
                    
                ],
                '/footer/' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'project' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'results' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'topline' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'partners' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'bottomline' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'synergies' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => '15',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => ''
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
            ],
            'content' => [
                'position-position-3033' => [
                    'title' => 'Header',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-header'
                    ]
                ],
                'position-position-8433' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'coming-soon'
                    ]
                ],
                'position-position-1400' => [
                    'title' => 'Module Position',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-position-9913'
                    ]
                ],
                'contentarray-6746' => [
                    'title' => 'Joomla Articles',
                    'attributes' => [
                        'article' => [
                            'filter' => [
                                'categories' => '20',
                                'articles' => '',
                                'featured' => 'include'
                            ],
                            'limit' => [
                                'total' => '1',
                                'columns' => '2',
                                'start' => '0'
                            ],
                            'sort' => [
                                'orderby' => 'publish_up',
                                'ordering' => 'ASC'
                            ],
                            'display' => [
                                'image' => [
                                    'enabled' => ''
                                ],
                                'text' => [
                                    'type' => 'full',
                                    'formatting' => 'html'
                                ],
                                'title' => [
                                    'enabled' => ''
                                ],
                                'date' => [
                                    'enabled' => ''
                                ],
                                'read_more' => [
                                    'enabled' => '',
                                    'label' => ''
                                ],
                                'author' => [
                                    'enabled' => ''
                                ],
                                'category' => [
                                    'enabled' => ''
                                ],
                                'hits' => [
                                    'enabled' => ''
                                ]
                            ]
                        ]
                    ]
                ],
                'position-position-2149' => [
                    'title' => 'Breadcrumbs',
                    'inherit' => [
                        'outline' => 15,
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-position-5613'
                    ]
                ],
                'system-messages-5789' => [
                    'inherit' => [
                        'outline' => 15,
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'system-messages-2330'
                    ]
                ],
                'system-content-6976' => [
                    'inherit' => [
                        'outline' => 15,
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'system-content-3721'
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
