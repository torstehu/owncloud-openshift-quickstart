<?php
"3rdpartyroot" => $_ENV['OPENSHIFT_REPO_DIR'] . '/lib',
$CONFIG = array(
    "apps_paths" => array(
        0 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps',
            'url'      => '/apps',
            'writable' => true,
        ),
        1 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/lib/apps',
            'url'      => '/apps2',
            'writable' => false,
        ),
    ),
);