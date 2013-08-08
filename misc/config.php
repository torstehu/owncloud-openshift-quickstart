<?php
$CONFIG = array(
    "apps_paths"   => array(
        0 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps',
            'url'      => '/apps',
            'writable' => false,
        ),
        1 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps2',
            'url'      => '/apps2',
            'writable' => false,
        ),
        2 => array(
            'path'     => $_ENV['OPENSHIFT_DATA_DIR'] . '/userapps',
            'url'      => '/userapps',
            'writable' => true,
        ),
    ),
);
