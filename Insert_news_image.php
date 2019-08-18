<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


error_reporting(0);
require_once 'dbconnection.php';
$userid = $_POST['userid'];
$content = $_POST['content'];
$title = $_POST['title'];
$category = $_POST['category'];
//print_r($_FILES);
$target_path="./images/".basename( $_FILES['img_file']['name']);
if (file_exists($target_path)) {
    $f = unlink($target_path);
}
if(move_uploaded_file($_FILES['img_file']['tmp_name'], $target_path)) {
if(mysql_query("INSERT INTO `newsdata`(`userid`, `title`, `content`, `status`, `newsid`, `category`) VALUES ('$userid','$title','$content','n',null,'$category')")){
    echo 'inserted';
}
else{ echo 'Not Inserted ' . mysql_error();}
} else {
echo "failed";
}



