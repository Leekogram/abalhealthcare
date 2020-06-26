<?php
//  OpenEMR
//  MySQL Config

$host	= 'us-cdbr-east-02.cleardb.com';
//$port	= '3306';
$login	= 'be4e2c82cff8f3';
$pass	= '0446941a';
$dbase	= 'heroku_d4bd8b7f8983fa6';

//Added ability to disable
//utf8 encoding - bm 05-2009
global $disable_utf8_flag;
$disable_utf8_flag = false;

$sqlconf = array();
global $sqlconf;
$sqlconf["host"]= $host;
//$sqlconf["port"] = $port;
$sqlconf["login"] = $login;
$sqlconf["pass"] = $pass;
$sqlconf["dbase"] = $dbase;
//////////////////////////
//////////////////////////
//////////////////////////
//////DO NOT TOUCH THIS///
$config = 1; /////////////
//////////////////////////
//////////////////////////
//////////////////////////
?>
