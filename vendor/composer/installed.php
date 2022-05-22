<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'heroku/heroku-buildpack-php' => array(
            'pretty_version' => 'v177',
            'version' => '177.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../heroku/heroku-buildpack-php',
            'aliases' => array(),
            'reference' => 'fe7640eb4f46bfe00e31b77b3b6b809ab74ab5c7',
            'dev_requirement' => true,
        ),
    ),
);
