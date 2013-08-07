<?php
$CONFIG = array(
    "apps_paths" => array(
        0 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/php/apps',
            'url'      => '/apps',
            'writable' => true,
        ),
        1 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/extapps/apps',
            'url'      => '/extapps/apps',
            'writable' => false,
        ),
        2 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/extapps/bookmarks',
            'url'      => '/extapps/bookmarks',
            'writable' => false,
        ),
        3 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/extapps/calendar',
            'url'      => '/extapps/calendar',
            'writable' => false,
        ),
        4 => array(
            'path'     => $_ENV['OPENSHIFT_REPO_DIR'] . '/extapps/contacts',
            'url'      => '/extapps/contacts',
            'writable' => false,
        ),
    ),
);
