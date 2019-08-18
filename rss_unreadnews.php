<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : How to Create an RSS Feed with PHP and MySQL
*/

// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=newspedia', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();

// posts *******************************
$sql = "SELECT * FROM newsdata where status='n' ORDER BY newsid DESC";
$query = $pdo->prepare($sql);
$query->execute();
$rs_post = $query->fetchAll();

// The XML structure
$data = '<?xml version="1.0" encoding="UTF-8" ?>';
$data .= '<rss version="2.0">';
$data .= '<channel>';
$data .= '<title>Newspedia RSS Technolgy</title>';
$data .= '<link>http://www.newspedia.com</link>';
$data .= '<description>Local news server...</description>';
foreach ($rs_post as $row) {
    $data .= '<item>';
    $data .= '<id>'.$row['newsid'].'</id>';
    $data .= '<title>'.$row['title'].'</title>';
    $data .= '<description>'.$row['content'].'</description>';
     if($row['image']==null)
    {
         $data.='<image>YELLOW (1).jpg</image>';
    }
 else {
         $data.='<image>'.$row['image'].'</image>';
    }
    $data .= '<category>'.$row['category'].'</category>';
    $data .= '</item>';
}
$data .= '</channel>';
$data .= '</rss> ';

header('Content-Type: application/xml');
echo $data;
?>