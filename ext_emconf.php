<?php

/**
 * Extension Manager/Repository config file for ext "ucph_layout_one_column".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'UCPH TYPO3 layout with one column. No left menu',
    'description' => 'UCPH TYPO3 backend layout one column. No left menu.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\UcphLayoutOneColumn\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
