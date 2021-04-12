<?php
// Liste des membres de l'équipe
$girls = array(
    array(
        'fname' => 'Shirley',
        'female' => true,
        'dob' => '2000-05-18',
        'size' => 1.68
    ),
    array(
        'fname' => 'Nathalie',
        'female' => true,
        'dob' => '2000-11-14',
        'size' => 1.71
    ),
    array(
        'fname' => 'Sara',
        'female' => true,
        'dob' => '2000-07-06',
        'size' => 1.72
    ),
    array(
        'fname' => 'Fatoumata',
        'female' => true,
        'dob' => '2000-03-19',
        'size' => 1.78
    ),
    array(
        'fname' => 'Sandrina',
        'female' => true,
        'dob' => '2000-10-26',
        'size' => 1.8
    ),
    array(
        'fname' => 'Odile',
        'female' => true,
        'dob' => '2000-08-15',
        'size' => 1.81
    )
);

// var_dump($girls);

$boys = [
    [
        'fname' => 'Vincent',
        'female' => false,
        'dob' => '1985-05-05',
        'size' => 1.84
    ],
    [
        'fname' => 'Jérôme',
        'female' => false,
        'dob' => '1991-04-22',
        'size' => 1.78
    ],
    [
        'fname' => 'Jean-Christophe',
        'female' => false,
        'dob' => '1995-10-06',
        'size' => 1.76
    ],
    [
        'fname' => 'Romain',
        'female' => false,
        'dob' => '1994-06-11',
        'size' => 1.71
    ],
    [
        'fname' => 'Samuel',
        'female' => false,
        'dob' => '1997-03-14',
        'size' => 1.74
    ],
    [
        'fname' => 'Thomas',
        'female' => false,
        'dob' => '1991-10-25',
        'size' => 1.68
    ],
    [
        'fname' => 'Ali',
        'female' => false,
        'dob' => '1999-12-21',
        'size' => 1.65
    ],
    [
        'fname' => 'Alban',
        'female' => false,
        'dob' => '1988-07-14',
        'size' => 1.71
    ]
];

// var_dump($boys);

$trainers[] = array(
    'fname' => 'Nadjet',
    'female' => true,
    'dob' => '2000-08-19',
    'size' => 1.71
);

array_push(
    $trainers,
    array(
        'fname' => 'Saman',
        'female' => false,
        'dob' => '1992-02-16',
        'size' => 1.75
    ),
    array(
        'fname' => 'Lesly',
        'female' => false,
        'dob' => '1967-11-11',
        'size' => 1.70
    )
);

// var_dump($trainers);

$team = array_merge($trainers, $girls, $boys);

// var_dump($team);
