<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$hostname_localhost = "localhost";
$database_localhost = "newspedia";
$username_localhost = "root";
$password_localhost = "";
$localhost = mysql_connect($hostname_localhost, $username_localhost, $password_localhost)
        or
        trigger_error(mysql_error(), E_USER_ERROR);

mysql_select_db($database_localhost, $localhost);