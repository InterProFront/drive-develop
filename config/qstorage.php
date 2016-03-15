<?php

return [

    'static_all_site' => [
        'images' => ['logo'],
        'stringfields' => ['vk','fb','inst','page_title'],
        'groups' =>[
            'phones' => [
                'stringfields' => ['name','phone']
            ],
            'sponsors' => [
                'images' => ['logo'],
                'stringfields' => ['link']
            ]
        ]
    ],
    'static_slider' => [
        'groups' => [
            'slider' => [
                'stringfields' => ['name'],
                'images'       => ['slide']
            ]
        ]
    ],
    'static_photo_block' =>[
        'images' => ['head'],
        'stringfields' => ['name'],
    ],
    'static_blog'  => [
        'images' => ['head'],
        'stringfields' => ['name','page_title'],
    ],

    'about_school' => [
        'stringfields' => ['name','page_title'],
        'images'       => ['head'],
        'groups' => [
            'coach' => [
                'stringfields' => ['name','prof','photo_title','photo_fact'],
                'textfields'   => ['about'],
                'images'       => ['photo']
            ]
        ]
    ],
    'dom_blog' => [
        'groups' => [
            'blog_post' => [
                'images' => ['head'],
                'stringfields' => ['name'],
                'textfields'   => ['text']
            ]
        ]

    ],
    'dom_program' =>  [
        'groups' => [
            'programs' =>[
                'images'       => ['head'],
                'stringfields' => ['name','p_for','p_where','p_when','p_cost'],
                'textfields'   => ['text'],
                'bools'        => ['all_page'],
            ]
        ]
    ],
    'dom_photos' => [
        'groups' => [
            'album' => [
                'images' => ['head'],
                'stringfields' => ['name'],
                'textfields'   => ['text']
            ]
        ]
    ],
    'reconstruction' => [
        'images'       => ['head'],
        'stringfields' => ['name'],
        'textfields'   => ['about']
    ],
    'contacts' => [
        'images'       => ['head'],
        'stringfields' => ['name'],
        'textfields'   => ['about']
    ],

    //====================================================================== special blocks
    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images'    => ['text_pict']
            ]
        ]
    ],
    'fidback' => [
        'stringfields' => ['mail_rec','mail_username','site_name'],
        'groups' => [
            'registration' =>[
                'stringfields' => ['fio','b_date','email','phone'],
                'numbs'        => ['id_program']
            ]
        ]
    ]

];
