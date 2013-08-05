<?php
$AUTOCONFIG = array(
    "dbtype"        => "mysql",
    "dbname"        => getenv('OPENSHIFT_APP_NAME'),
    "dbuser"        => getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
    "dbpass"        => getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    "dbhost"        => getenv('OPENSHIFT_MYSQL_DB_HOST') . ':' . getenv('OPENSHIFT_MYSQL_DB_PORT'),
    "dbtableprefix" => "",
    "adminlogin"    => "admin",
    "adminpass"     => "password",
    "directory"     => getenv('OPENSHIFT_DATA_DIR'),
);
?>
