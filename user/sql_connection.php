<?php
$sql_connection = new mysqli("localhost","root","","tree_trackerr");

$sql_connection->query("CREATE TABLE IF NOT EXISTS districts(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(30) NOT NULL UNIQUE)");

$sql_connection->query("CREATE TABLE IF NOT EXISTS tree_type(ID INT (11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(30)
	NOT NULL UNIQUE)");


$sql_connection->query("CREATE TABLE IF NOT EXISTS users(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(30) NOT NULL, DISTRICT_ID INT(11) NOT NULL, PHONE_NUMBER VARCHAR(20) NOT NULL UNIQUE, PASSWORD VARCHAR(100) NOT NULL, EMAIL_ADDRESS VARCHAR(30) NOT NULL UNIQUE, FOREIGN KEY(DISTRICT_ID) REFERENCES districts(ID) )");
