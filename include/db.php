<?php
//Database credentials
$dbHost = 'localhost';
$dbUsername = 'root'; 
$dbPassword = '';
$dbName = 'eucp';
$dbName2 = 'account';
$dbName3 = 'my';
//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//connect to 'account' db
$dbacc = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName2);
//connect to 'task' db
$dbtask = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName3);

//Display error if failed to connect
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

if ($dbacc->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

?>