<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1525089870,
    'checksum' => 'bbd04eb4c2070f94381c6fd8f2407f61',
    'files' => [
        'templates/g5_hydrogen/custom/config/13' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/index.yaml',
                'modified' => 1525089817
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/layout.yaml',
                'modified' => 1525089817
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/page/head.yaml',
                'modified' => 1524655059
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/13/styles.yaml',
                'modified' => 1524667731
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1524826381
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1524826381
            ],
            'page/assets' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/assets.yaml',
                'modified' => 1524655013
            ],
            'page/body' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/body.yaml',
                'modified' => 1524655013
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/head.yaml',
                'modified' => 1524655013
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/styles.yaml',
                'modified' => 1524819351
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1524577640
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '_blank',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'fixed-header' => [
                'enabled' => true,
                'mobile' => 'disable',
                'secondtrigger' => false
            ],
            'uikit' => [
                'enabled' => true,
                'jslocation' => 'footer'
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
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
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#d7de1f',
                'color-2' => '#093073'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#000000',
                'body-font' => 'family=Comfortaa:300',
                'heading-font' => 'family=Comfortaa:300'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'header' => [
                'background' => '#ffffff',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#000000'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#ffffff',
                'text-color' => '#000000',
                'overlay' => 'rgba(255, 255, 255, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#ffffff',
                'image' => '',
                'text-color' => '#000000'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#000000'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => '13',
            'timestamp' => 1525089817,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1524577640
            ],
            'positions' => [
                'header' => 'Header',
                'header-button' => 'Module Position',
                'header-slider' => 'Module Position',
                'position-0' => 'Module Position',
                'project-a' => 'Module Position',
                'project-b' => 'Module Position',
                'results-a' => 'Module Position',
                'partners-top' => 'Module Position',
                'partners-a' => 'Module Position',
                'partners-b' => 'Module Position',
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'project' => 'Project',
                'results' => 'Results',
                'partners' => 'Partners',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-position-6232' => 'Header',
                    'position-position-9562' => 'Module Position',
                    'position-position-9604' => 'Module Position',
                    'position-position-5479' => 'Module Position',
                    'position-position-5754' => 'Module Position',
                    'position-position-6064' => 'Module Position',
                    'position-position-1469' => 'Module Position',
                    'position-position-4974' => 'Module Position',
                    'position-position-4698' => 'Module Position',
                    'position-position-2015' => 'Module Position',
                    'position-position-7294' => 'Breadcrumbs',
                    'position-position-2960' => 'Footer'
                ],
                'logo' => [
                    'logo-3131' => 'Logo',
                    'logo-8926' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-5971' => 'Menu'
                ],
                'social' => [
                    'social-2345' => 'Social',
                    'social-2843' => 'Social'
                ],
                'spacer' => [
                    'spacer-3790' => 'Spacer',
                    'spacer-spacer-8148' => 'Spacer'
                ],
                'messages' => [
                    'system-messages-3410' => 'System Messages'
                ],
                'content' => [
                    'system-content-8484' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-5069' => 'Copyright'
                ],
                'totop' => [
                    'totop-4972' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-2353' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'position-position-6232' => 'position-header',
                    'position-position-9562' => 'position-position-3669',
                    'position-position-9604' => 'position-position-9913',
                    'logo-3131' => 'logo-2057',
                    'menu-5971' => 'menu-8118',
                    'position-position-5479' => 'position-position-8524',
                    'social-2345' => 'social-7337',
                    'main' => 'main',
                    'position-position-7294' => 'position-breadcrumbs',
                    'system-messages-3410' => 'system-messages-2564',
                    'system-content-8484' => 'system-content-3237',
                    'footer' => 'footer',
                    'position-position-2960' => 'position-footer',
                    'copyright-5069' => 'copyright-3091',
                    'social-2843' => 'social-4747',
                    'totop-4972' => 'totop-3223',
                    'logo-8926' => 'logo-5520',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-2353' => 'mobile-menu-2992'
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
                'header' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-3131 15',
                        1 => 'menu-5971 60',
                        2 => 'position-position-5479 10',
                        3 => 'social-2345 15'
                    ]
                ],
                '/project/' => [
                    0 => [
                        0 => 'position-position-5754 60',
                        1 => 'position-position-6064 40'
                    ]
                ],
                '/results/' => [
                    0 => [
                        0 => 'position-position-1469 35',
                        1 => 'spacer-3790 65'
                    ]
                ],
                '/partners/' => [
                    0 => [
                        0 => 'position-position-4974'
                    ],
                    1 => [
                        0 => 'position-position-4698 50',
                        1 => 'position-position-2015 50'
                    ],
                    2 => [
                        0 => 'spacer-spacer-8148'
                    ]
                ],
                '/feature/' => [
                    
                ],
                'main' => [
                    
                ],
                '/subfeature/' => [
                    
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
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'home'
                    ]
                ],
                'project' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '0',
                        'class' => ''
                    ]
                ],
                'results' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'partners' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
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
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
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
            ],
            'content' => [
                'logo-3131' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'logo-2057'
                    ]
                ],
                'menu-5971' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'menu-8118'
                    ]
                ],
                'position-position-5479' => [
                    'title' => 'Module Position',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-position-8524'
                    ]
                ],
                'social-2345' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'social-7337'
                    ]
                ],
                'position-position-5754' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'project-a'
                    ],
                    'block' => [
                        'class' => 'project-slider'
                    ]
                ],
                'position-position-6064' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'project-b'
                    ],
                    'block' => [
                        'class' => 'project-text'
                    ]
                ],
                'position-position-1469' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'results-a'
                    ],
                    'block' => [
                        'class' => 'results-text'
                    ]
                ],
                'spacer-3790' => [
                    'block' => [
                        'class' => 'results-image'
                    ]
                ],
                'position-position-4974' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-top'
                    ],
                    'block' => [
                        'class' => 'partners-text'
                    ]
                ],
                'position-position-4698' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-a'
                    ]
                ],
                'position-position-2015' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-b'
                    ]
                ],
                'spacer-spacer-8148' => [
                    'block' => [
                        'id' => 'bottom-line'
                    ]
                ]
            ]
        ]
    ]
];
