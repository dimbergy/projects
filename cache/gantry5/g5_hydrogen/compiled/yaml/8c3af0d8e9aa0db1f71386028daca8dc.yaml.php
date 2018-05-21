<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\zoomin/templates/g5_hydrogen/custom/config/13/layout.yaml',
    'modified' => 1525089817,
    'data' => [
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
];
