<?php

$DB_ServerName = 'sql12.freesqldatabase.com';
$DB_UserName = 'sql12360350';
$DB_Password = 'CjscyaTLcu';
$DB_Name = 'sql12360350';

$conn = mysqli_connect($DB_ServerName, $DB_UserName, $DB_Password, $DB_Name);

if (!$conn) {
  exit;
}

?>