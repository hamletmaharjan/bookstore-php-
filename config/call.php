<?php
session_start();
include 'settings.php';
include 'connect.php';
include 'loginfunctions.php';
include 'helpers.php';
include 'userfunctions.php';
include 'bookfunctions.php';

$conn = new Connection(DBSERVER,DBNAME,DBUSER,DBPASS);

$conn=$conn->ConnectDB();

?>