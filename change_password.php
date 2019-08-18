<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//(string userid, string password, string email, string name, string security, string answer)

require_once 'dbconnection.php';
$userid = $_POST['userid'];
$password = $_POST['password'];

if(mysql_query("UPDATE `userfile` SET `password`='$password' where `userid`='$userid' ")){

    echo 'changed';
} else {
    echo 'invalid id' . mysql_error();
}