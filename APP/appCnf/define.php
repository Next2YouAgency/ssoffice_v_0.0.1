<?php
//Off-line

define("HOST","localhost");
define("USUARIO","root");
define("SENHA","");
define("DDB","ssadv");
$conexao = mysql_connect(HOST, USUARIO, SENHA) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
date_default_timezone_set("America/Brasil");

/*
//On-Line
define("HOST","mysql.hostinger.com.br");
define("USER","u954311315_admin");
define("PASS","230412");
define("DDB","u954311315_ssofc");
$conexao = mysql_connect(HOST, USER, PASS) or die (mysql_error);
mysql_select_db(DDB, $conexao) or die (mysql_error);
*/