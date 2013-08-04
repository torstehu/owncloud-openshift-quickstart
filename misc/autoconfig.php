<?php
define("DBNAME", $_SERVER['OPENSHIFT_APP_NAME'] );
define("DBUSER", $_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'] );
define("DBPASS", $_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD'] );
define("DBHOST", $_SERVER['OPENSHIFT_MYSQL_DB_HOST'] . ':' . $_SERVER['OPENSHIFT_MYSQL_DB_PORT'] );
define("DIRECTORY", $_SERVER['OPENSHIFT_DATA_DIR'] );

$AUTOCONFIG = array(
  'dbtype'     => 'mysql',
  'dbname'     => DBNAME,
  'dbuser'     => DBUSER,
  'dbpass'     => DBPASS,
  'dbhost'     => DBHOST,
  'adminlogin' => 'admin',
  'adminpass'  => 'password',
  'directory'  => DIRECTORY,
);
?>
