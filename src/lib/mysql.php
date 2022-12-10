<?php

$DB_NAME = "test";
$DB_PORT = "3306";
$DB_USER = "root";
$DB_PASS = "root";
$DB_HOST = "localhost";

// Connect to mysql 
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);