<?php
$AUTOCONFIG = array(
    "dbtype"        => "mysql",
    "dbname"        => $_ENV['OPENSHIFT_APP_NAME'],
    "dbuser"        => $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'],
    "dbpass"        => $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'],
    "dbhost"        => $_ENV['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_ENV['OPENSHIFT_MYSQL_DB_PORT'],
    "dbtableprefix" => "oc_",
    "adminlogin"    => "admin",
    "adminpass"     => "password",
    "directory"     => $_ENV['OPENSHIFT_DATA_DIR'],
);
