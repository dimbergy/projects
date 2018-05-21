<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1526467309,
    'checksum' => '99c74d1a3acd735b89119c2510ead24c',
    'files' => [
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1525343491
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1525343491
            ],
            'page/assets' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/assets.yaml',
                'modified' => 1525337365
            ],
            'page/body' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/body.yaml',
                'modified' => 1525337365
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/head.yaml',
                'modified' => 1525337365
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/styles.yaml',
                'modified' => 1526467309
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
                'favicon' => 'gantry-media://logos/favicon-zoomin.png',
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
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#d7de1f',
                'color-2' => '#093073'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#000000',
                'body-font' => 'family=Noto+Sans',
                'heading-font' => 'family=Noto+Sans'
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
                'background' => '#354d59',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#000000'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 1525343491,
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
                'breadcrumbs' => 'Breadcrumbs',
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'position' => [
                    'position-header' => 'Header',
                    'position-position-3669' => 'Module Position',
                    'position-position-9913' => 'Module Position',
                    'position-position-8524' => 'Module Position',
                    'position-breadcrumbs' => 'Breadcrumbs',
                    'position-footer' => 'Footer'
                ],
                'logo' => [
                    'logo-2057' => 'Logo',
                    'logo-5520' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-8118' => 'Menu'
                ],
                'social' => [
                    'social-7337' => 'Social',
                    'social-4747' => 'Social'
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
                    'totop-3223' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-2992' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
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
                        0 => 'position-header'
                    ],
                    1 => [
                        0 => 'position-position-3669'
                    ],
                    2 => [
                        0 => 'position-position-9913'
                    ]
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-2057 15',
                        1 => 'menu-8118 65',
                        2 => 'position-position-8524 10',
                        3 => 'social-7337 10'
                    ]
                ],
                '/showcase/' => [
                    
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-breadcrumbs'
                    ],
                    1 => [
                        0 => 'system-messages-2564'
                    ],
                    2 => [
                        0 => 'system-content-3237'
                    ]
                ],
                '/subfeature/' => [
                    
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-3091 40',
                        1 => 'social-4747 30',
                        2 => 'totop-3223 30'
                    ],
                    2 => [
                        0 => 'logo-5520'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-2992'
                    ]
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
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
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
                    'attributes' => [
                        'boxed' => ''
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
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'key' => 'header'
                    ]
                ],
                'position-position-3669' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'header-button'
                    ]
                ],
                'position-position-9913' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'header-slider'
                    ]
                ],
                'logo-2057' => [
                    'attributes' => [
                        'image' => 'gantry-media://logos/ZOOMIN-LOGO.png'
                    ],
                    'block' => [
                        'id' => 'logo'
                    ]
                ],
                'menu-8118' => [
                    'block' => [
                        'id' => 'navbar'
                    ]
                ],
                'position-position-8524' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'position-0'
                    ],
                    'block' => [
                        'id' => 'flag'
                    ]
                ],
                'social-7337' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social'
                        ],
                        'display' => 'icons_only',
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-facebook',
                                'text' => '',
                                'link' => '',
                                'name' => 'Facebook'
                            ]
                        ]
                    ],
                    'block' => [
                        'id' => 'social'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'copyright-3091' => [
                    'attributes' => [
                        'owner' => 'Zoom In'
                    ]
                ],
                'social-4747' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social social-footer'
                        ],
                        'target' => '_blank',
                        'display' => 'both',
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-facebook',
                                'text' => '',
                                'link' => '',
                                'name' => 'Facebook'
                            ]
                        ]
                    ]
                ],
                'totop-3223' => [
                    'title' => 'To Top',
                    'attributes' => [
                        'icon' => 'fa fa-angle-up fa-3x'
                    ]
                ],
                'logo-5520' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://logos/Cofunded.png',
                        'link' => '0',
                        'class' => 'foot-logo'
                    ]
                ]
            ]
        ]
    ]
];
