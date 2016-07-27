<?php

/**
 * SOS (Social, Community Development and other Services) Programs
 */

return [
    [
        'sector_code'   => 'SOC',
        'code'          => 'SOCBKP308',
        'title'         => 'Bookkeeping NC III',
        'slug'          => 'bookkeeping-nc-3',
        'nc_level'      => 3,
        'competencies'  => [
            'basic'     => [
                '500311109',
                '500311110',
                '500311111',
                '500311112',
                '500311113',
                '500311114'
            ],
            'common'    => [
                'HCS315202', //Duplicate with HCS315202-2
                'HCS311201',
                'HCS913201',
                'HCS913202'
            ],
            'core'      => [
                'HCS412301',
                'HCS412302',
                'HCS412303',
                'HCS412304',
                'HCS412305'
            ]
        ]
    ],
    [
        'sector_code'   => 'SOC',
        'code'          => 'SOCSES105',
        'title'         => 'Security Services NC I',
        'slug'          => 'security-services-nc-1',
        'nc_level'      => 1,
        'competencies'  => [
            'basic'     => [
                '500311101',
                '500311102',
                '500311103',
                '500311104'
            ],
            'common'    => [
                'HCS315201',
                'HCS315202-2', //Duplicate with HCS315202
                'HCS315203'
            ],
            'core'      => [
                'HCS516301',
                'HCS516302',
                'HCS516303',
                'HCS516304',
                'HCS516305'
            ]
        ]
    ],
    [
        'sector_code'   => 'SOC',
        'code'          => 'SOCSES207',
        'title'         => 'Security Services NC II',
        'slug'          => 'security-services-nc-2',
        'nc_level'      => 2,
        'competencies'  => [
            'basic'     => [
                '500311105',
                '500311106',
                '500311107',
                '500311108'
            ],
            'common'    => [
                'HCS516201', //Duplicate with HCS913201
                'HCS516202' //Duplicate with HCS315202-2
            ],
            'core'      => [
                'HCS516307',
                'HCS516308',
                'HCS516309',
                'HCS516310',
                'HCS516311'
            ]
        ]
    ],
    
];
