<?php

$DB_ServerName = 'sql02.freesqldatabase.com';
$DB_UserName = 'sql12360350';
$DB_Password = 'CjscyaTLcu';
$DB_Name = 'sql12360350';

$conn = new mysqli($DB_ServerName, $DB_UserName, $DB_Password, $DB_Name);

// Check connection
if ($conn->connect_error) {
  exit;
}

?>