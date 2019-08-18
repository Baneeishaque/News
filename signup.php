<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


error_reporting(0);
require_once 'dbconnection.php';
$userid = $_POST['userid'];
$password = $_POST['password'];
$type = $_POST['type'];
$email = $_POST['email'];
$name = $_POST['name'];
$security = $_POST['security'];
$answer = $_POST['answer'];



if (mysql_query("INSERT INTO `userfile`(`userid`, `password`, `type`, `email`, `name`, `security`, `answer`) VALUES ('$userid','$password','$type','$email','$name','$security','$answer')")) {
    echo 'Inserted';
} else {
    echo 'Not Inserted ' . mysql_error();
}