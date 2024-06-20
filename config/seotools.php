<?php
return [
    'meta' => [
        'defaults'       => [
            'title'        => "Muhammad Ahmer Tahir — Portfolio",
            'titleBefore'  => false,
            'description'  => 'Explore the professional portfolio of Muhammad Ahmer Tahir, expert web developer and cloud engineer, showcasing innovative projects',
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false,
            'robots'       => false,
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Muhammad Ahmer Tahir — Portfolio',
            'description' => 'Explore the professional portfolio of Muhammad Ahmer Tahir, expert web developer and cloud engineer, showcasing innovative projects',
            'url'         => false,
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card'        => 'large_summary',
            'site'        => '@webmentordev',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Muhammad Ahmer Tahir — Portfolio',
            'description' => 'Explore the professional portfolio of Muhammad Ahmer Tahir, expert web developer and cloud engineer, showcasing innovative projects',
            'url'         => false,
            'type'        => 'WebPage',
            'images'      => [],
            'additional'  => [
                '@context' => 'https://schema.org',
                '@type'    => 'Person',
                'name'     => 'Muhammad Ahmer Tahir',
                'jobTitle' => 'Web Developer and Cloud Engineer',
                'url'      => 'https://ahmerdev.online',
                'sameAs'   => [
                    'https://www.linkedin.com/in/muhammad-ahmer-tahir-%E2%80%8B-a00748136/',
                    'https://github.com/webmentordev'
                ],
                'worksFor' => [
                    '@type' => 'Organization',
                    'name'  => 'Vital Neon / MobyKart'
                ],
                'alumniOf' => [
                    '@type' => 'University',
                    'name'  => 'NFC Institute Of Engineering and Technology, Multan'
                ]
            ]
        ],
    ],
];