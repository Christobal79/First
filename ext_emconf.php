<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Text and icon',
    'description' => '',
    'category' => 'frontend',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Oliver Thiele',
    'author_email' => 'mailYYYY@oliver-thiele.de',
    'author_company' => '',
    'version' => '8.7.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '',
            'ot_bootstrap3' => '8.7.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['OliverThiele\\OtTexticon\\' => 'Classes']
    ],
];
