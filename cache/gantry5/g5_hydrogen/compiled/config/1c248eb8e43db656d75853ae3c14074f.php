<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1526467310,
    'checksum' => 'dc92f29c40c0bac393ea678b2c36d039',
    'files' => [
        'templates/g5_hydrogen/custom/config/15' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/index.yaml',
                'modified' => 1525343491
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/layout.yaml',
                'modified' => 1525343491
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/15/page/head.yaml',
                'modified' => 1525092855
            ]
        ],
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
            'name' => 15,
            'timestamp' => 1525343491,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1524577640
            ],
            'positions' => [
                'project-a' => 'Module Position',
                'project-b' => 'Module Position',
                'results-a' => 'Module Position',
                'partners-top' => 'Module Position',
                'partners-a' => 'Module Position',
                'partners-b' => 'Module Position',
                'syn-a' => 'Module Position',
                'syn-b' => 'Module Position',
                'parallax-full' => 'Module Position',
                'breadcrumbs' => 'Breadcrumbs',
                'news-feed' => 'Module Position',
                'footer' => 'Footer',
                'header' => 'Header',
                'header-button' => 'Module Position',
                'header-slider' => 'Module Position',
                'position-0' => 'Module Position'
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
                    'position-position-6862' => 'Module Position',
                    'position-position-6469' => 'Module Position',
                    'position-position-3737' => 'Module Position',
                    'position-position-8315' => 'Module Position',
                    'position-position-6790' => 'Module Position',
                    'position-position-3393' => 'Module Position',
                    'position-position-5746' => 'Module Position',
                    'position-position-8145' => 'Module Position',
                    'position-position-1544' => 'Module Position',
                    'position-position-5613' => 'Breadcrumbs',
                    'position-position-1226' => 'Module Position',
                    'position-position-6715' => 'Footer',
                    'position-position-8687' => 'Header',
                    'position-position-6975' => 'Module Position',
                    'position-position-9293' => 'Module Position',
                    'position-position-9514' => 'Module Position'
                ],
                'spacer' => [
                    'spacer-8142' => 'Spacer'
                ],
                'logo' => [
                    'logo-1984' => 'Logo / Image',
                    'logo-6594' => 'Logo / Image',
                    'logo-4943' => 'Logo / Image',
                    'logo-9445' => 'Logo'
                ],
                'messages' => [
                    'system-messages-2330' => 'System Messages'
                ],
                'content' => [
                    'system-content-3721' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-7238' => 'Copyright'
                ],
                'social' => [
                    'social-9004' => 'Social',
                    'social-6325' => 'Social'
                ],
                'totop' => [
                    'totop-9521' => 'To Top'
                ],
                'menu' => [
                    'menu-6370' => 'Menu'
                ],
                'mobile-menu' => [
                    'mobile-menu-5893' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'position-position-5613' => 'position-breadcrumbs',
                    'system-messages-2330' => 'system-messages-2564',
                    'system-content-3721' => 'system-content-3237',
                    'position-position-6715' => 'position-footer',
                    'copyright-7238' => 'copyright-3091',
                    'social-9004' => 'social-4747',
                    'totop-9521' => 'totop-3223',
                    'logo-4943' => 'logo-5520',
                    'offcanvas' => 'offcanvas',
                    'position-position-8687' => 'position-header',
                    'position-position-6975' => 'position-position-3669',
                    'position-position-9293' => 'position-position-9913',
                    'logo-9445' => 'logo-2057',
                    'menu-6370' => 'menu-8118',
                    'position-position-9514' => 'position-position-8524',
                    'social-6325' => 'social-7337',
                    'mobile-menu-5893' => 'mobile-menu-2992'
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
                'navigation' => [
                    
                ],
                '/project/' => [
                    0 => [
                        0 => 'position-position-6862 60',
                        1 => 'position-position-6469 40'
                    ]
                ],
                '/results/' => [
                    0 => [
                        0 => 'position-position-3737 35',
                        1 => 'spacer-8142 65'
                    ]
                ],
                '/topline/' => [
                    0 => [
                        0 => 'logo-1984'
                    ]
                ],
                '/partners/' => [
                    0 => [
                        0 => 'position-position-8315'
                    ],
                    1 => [
                        0 => 'position-position-6790 50',
                        1 => 'position-position-3393 50'
                    ]
                ],
                '/bottomline/' => [
                    0 => [
                        0 => 'logo-6594'
                    ]
                ],
                '/synergies/' => [
                    0 => [
                        0 => 'position-position-5746 40',
                        1 => 'position-position-8145 60'
                    ]
                ],
                '/feature/' => [
                    0 => [
                        0 => 'position-position-1544'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-position-5613'
                    ],
                    1 => [
                        0 => 'system-messages-2330'
                    ],
                    2 => [
                        0 => 'system-content-3721'
                    ],
                    3 => [
                        0 => 'position-position-1226'
                    ]
                ],
                '/subfeature/' => [
                    
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-position-6715'
                    ],
                    1 => [
                        0 => 'copyright-7238 40',
                        1 => 'social-9004 30',
                        2 => 'totop-9521 30'
                    ],
                    2 => [
                        0 => 'logo-4943'
                    ]
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
                            1 => 'children'
                        ]
                    ]
                ],
                'project' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'results' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
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
                        'boxed' => ''
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
                        'boxed' => ''
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
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
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
                'position-position-6862' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'project-a'
                    ],
                    'block' => [
                        'class' => 'project-slider'
                    ]
                ],
                'position-position-6469' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'project-b'
                    ],
                    'block' => [
                        'class' => 'project-text'
                    ]
                ],
                'position-position-3737' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'results-a'
                    ],
                    'block' => [
                        'class' => 'results-text'
                    ]
                ],
                'spacer-8142' => [
                    'block' => [
                        'class' => 'results-image'
                    ]
                ],
                'logo-1984' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://partners/yellow-line.png',
                        'link' => '0',
                        'class' => ''
                    ]
                ],
                'position-position-8315' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-top'
                    ]
                ],
                'position-position-6790' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-a'
                    ]
                ],
                'position-position-3393' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'partners-b'
                    ]
                ],
                'logo-6594' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://partners/yellow-line.png',
                        'link' => '0',
                        'class' => ''
                    ]
                ],
                'position-position-5746' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'syn-a'
                    ],
                    'block' => [
                        'class' => 'syn-text'
                    ]
                ],
                'position-position-8145' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'syn-b'
                    ],
                    'block' => [
                        'class' => 'syn-gallery'
                    ]
                ],
                'position-position-1544' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'parallax-full'
                    ]
                ],
                'position-position-5613' => [
                    'title' => 'Breadcrumbs',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-breadcrumbs'
                    ]
                ],
                'system-messages-2330' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'system-messages-2564'
                    ]
                ],
                'system-content-3721' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'system-content-3237'
                    ]
                ],
                'position-position-1226' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'news-feed'
                    ],
                    'block' => [
                        'id' => 'g-news'
                    ]
                ],
                'position-position-6715' => [
                    'title' => 'Footer',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'position-footer'
                    ]
                ],
                'copyright-7238' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'copyright-3091'
                    ]
                ],
                'social-9004' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'social-4747'
                    ]
                ],
                'totop-9521' => [
                    'title' => 'To Top',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'totop-3223'
                    ]
                ],
                'logo-4943' => [
                    'title' => 'Logo / Image',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block'
                        ],
                        'particle' => 'logo-5520'
                    ]
                ]
            ]
        ]
    ]
];
