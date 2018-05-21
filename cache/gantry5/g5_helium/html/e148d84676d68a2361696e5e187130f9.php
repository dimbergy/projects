<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5adf1b2b14e409.98633475',
    'content' => '<div id="owlcarousel-2455-particle" class="g-content g-particle">            <div class="">
        
        <div id="g-owlcarousel-owlcarousel-2455" class="g-owlcarousel owl-carousel ">

                            <div class="g-owlcarousel-item owl-item">
                    <div class="g-owlcarousel-item-wrapper">
                        <div class="g-owlcarousel-item-img">
                            <img src="/zoomin/images/home/main-slider.jpg?5adf1aa7" alt="Helium is here!" />
                        </div>
                        <div class="g-owlcarousel-item-content-container">
                            <div class="g-owlcarousel-item-content-wrapper">
                                <div class="g-owlcarousel-item-content">
                                                                            <h1 class="g-owlcarousel-item-title">Helium is here!</h1>                                                                            <h2 class="g-owlcarousel-item-desc">Begin your journey with a brand new &raquo;free&laquo; Gantry 5 template from RocketTheme.</h2>                                                                            <div class="g-owlcarousel-item-link">
                                            <a target="_self" class="g-owlcarousel-item-button button button-outline" href="http://gantry.org/downloads">
                                                Download Now
                                            </a>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
            </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'footer' => [
            '0d907068a41ad820a843e6fcba7ef50938d5059e499cee9aa2319c182281968f6e48f0de' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/zoomin/templates/g5_helium/js/owlcarousel.js?5adf1499',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            'c9a8259b7e736d33a7e5cbfb5bc94c20a14d5aae5a4a73a8091d8a9588a85241ed6c9f4c' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-owlcarousel-owlcarousel-2455\').owlCarousel({
                items: 1,
                rtl: false,
                loop: true,
                                nav: false,
                                                dots: false,
                                                autoplay: false,
                            })
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
