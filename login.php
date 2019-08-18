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



    $result=mysql_query("SELECT type FROM userfile WHERE userid ='$userid' and password='$password'");
       $row=mysql_fetch_array($result);
       $type=$row['type'];
       if($type!=null){
           echo $type.'success';
       }
      else {
    echo 'e' . mysql_error();
}