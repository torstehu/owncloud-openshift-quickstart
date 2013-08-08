<?php
$CONFIG = array(
    "3rdpartyroot" => $_ENV['OPENSHIFT_REPO_DIR'] . "/lib",
    "3rdpartyurl"  => "/3rdparty",
    "apps_paths"   => array(
        0 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps',
            'url'      => '/apps',
            'writable' => true,
        ),
        1 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps2',
            'url'      => '/apps2',
            'writable' => false,
        ),
    ),
);
