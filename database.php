<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = 'root';
$dbpassword = 'juan';
$dbname = 'juandb';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
