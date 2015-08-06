<?php
  include 'DBAccessor.php';

  function MySQL_TEST() {
  	  $dba = new DBAccessor('192.168.4.32', 'phpdb', 'devuser', 'cl1ent');

  	  $sql = "select * from users";

  	  $connection = $dba->connect();

  	  foreach ($connection->query($sql) as $row) {
  		  echo ( $row['user_id'].':'.$row['user_nm'] );
  		  echo '<br>';
  	  }
  }

  function ORACLE_TEST() {
  	$dba = new DBAccessor('192.168.238.10', 'XE', 'PHP_DEV', 'cl1ent');

  	$sql = "select test_id, test_name from test";

  	$connection = $dba->connect_ora();

  	foreach ($connection->query($sql) as $row) {
  		echo ( $row['TEST_ID'].':'.$row['TEST_NAME'] );
  		echo '<br>';
  	}
  }

  ORACLE_TEST();

?>