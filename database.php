<?php
const DB_HOST = 'creatersfolder.dk.mysql';
const DB_USER = 'creatersfolder_';
const DB_PASS = 'fiskder02';
const DB_NAME = 'creatersfolder_';

$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('	.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset("utf8"); 
?>