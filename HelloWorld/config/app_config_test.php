<?php
require_once('app_config.php');

$_config = new AppConfig();

echo $_config->get('OPERATION_MODE')."<br>";
echo $_config->get('MYSQL_DEFAULT','MYSQL_DEFAULT_DSN');

?>