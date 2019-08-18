<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//(string userid, string password, string email, string name, string security, string answer)

require_once 'dbconnection.php';
$title= $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];
$newsid = $_POST['newsid'];



if(mysql_query("UPDATE `newsdata` SET `title`='$title',`content`='$content',`status`='n',`category`='$category' WHERE newsid='$newsid'")){
    
    echo 'updated';
}
else{
    echo 'notupdated'. mysql_error();
}