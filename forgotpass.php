<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 error_reporting(0);
require_once 'dbconnection.php';
$userid = $_POST['userid'];

    $result=mysql_query("SELECT `password`, `security`, `answer` FROM `userfile` WHERE userid ='$userid'");
       $row=mysql_fetch_array($result);
       $type=$row['password'];
       $sec=$row['security'];
       $quest=$row['answer'];
       if($type==null or $sec==null or $quest==null ){
           echo 'invalid';
       }  else
       {

           echo $type.'`'.$sec.'`'.$quest ;
       }
       
      
  