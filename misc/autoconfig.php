<?php
$AUTOCONFIG = array(
    "dbtype"        => "pgsql",
    "dbname"        => $_ENV['OPENSHIFT_APP_NAME'],
    "dbuser"        => $_ENV['OPENSHIFT_POSTGRESQL_DB_USERNAME'],
    "dbpass"        => $_ENV['OPENSHIFT_POSTGRESQL_DB_PASSWORD'],
    "dbhost"        => $_ENV['OPENSHIFT_POSTGRESQL_DB_HOST'] . ':' . $_ENV['OPENSHIFT_POSTGRESQL_DB_PORT'],
    "dbtableprefix" => "oc_",
    "adminlogin"    => "admin",
    "adminpass"     => "OpenShiftAdmin",
    "directory"     => $_ENV['OPENSHIFT_DATA_DIR'],
);
