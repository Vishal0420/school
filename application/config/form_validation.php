<?php
$config = [
    'login' => [
        [
            'field' => 'admin_id',
            'label' => 'Admin ID',
            'rules' => 'required'
        ],
        [
            'field' => 'admin_pswd',
            'label' => 'Admin Password',
            'rules' => 'required'
        ]
        ],
    'our_aim' => [
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required'
        ]
        ],
    'why_us' => [
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'description',
            'label' => 'Description',
            'rules' => 'required'
        ]
        ],
    'notification' =>[
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'notification',
            'label' => 'Notification',
            'rules' => 'required'
        ]
        ],
    'achievements' =>[
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ]
    ],
    'sendMail' =>[
        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ],
        [
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => 'required'
        ],
        [
            'field' => 'content',
            'label' => 'Content',
            'rules' => 'required'
        ]
    ],
    'workingHr' =>[
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'content',
            'label' => 'Content',
            'rules' => 'required'
        ]
    ],
    'address' =>[
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'content',
            'label' => 'Content',
            'rules' => 'required'
        ]
    ],
    'contactUs' =>[
        [
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'required'
        ],
        [
            'field' => 'content',
            'label' => 'Content',
            'rules' => 'required'
        ]
    ],
        'inquiry' =>[
            [
                'field' => 'name',
                'label' => 'Full Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'msg',
                'label' => 'Message',
                'rules' => 'required'
            ]
    ],
        'reply' =>[
            [
                'field' => 'subject',
                'label' => 'Email Subject',
                'rules' => 'required'
            ],
            [
                'field' => 'content',
                'label' => 'Email Content',
                'rules' => 'required'
            ]
        ],
        'followUs' =>[
            [
                'field' => 'twitter',
                'label' => 'Twitter URL',
                'rules' => 'required'
            ],
            [
                'field' => 'instagram',
                'label' => 'Instagram URL',
                'rules' => 'required'
            ],
            [
                'field' => 'facebook',
                'label' => 'Facebook URL',
                'rules' => 'required'
            ],
            [
                'field' => 'youtube',
                'label' => 'Youtube URL',
                'rules' => 'required'
            ]
        ]
    
        ];



?>