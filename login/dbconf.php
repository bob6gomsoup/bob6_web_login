<?php
//DATABASE CONNECTION VARIABLES
$host = "job.jtj.kr:3306"; // Host name
$username = "ando"; // Mysql username
$password = "ando123$"; // Mysql password
$db_name = "ando"; // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
