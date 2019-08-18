<?php
//print_r($_FILES);
$target_path="./images/".basename( $_FILES['img_file']['name']);
if (file_exists($target_path)) {
    $f = unlink($target_path);
}
if(move_uploaded_file($_FILES['img_file']['tmp_name'], $target_path)) {
    require_once 'dbconnection.php';
    $result=  mysql_query("SELECT max(`newsid`) FROM `newsdata`");
    $row=  mysql_fetch_array($result);
    $a=$row['max(`newsid`)'];
    $name=$_FILES['img_file']['name'];
    if(mysql_query("UPDATE `newsdata` SET `image`='$name' WHERE newsid='$a'"))
    {
        echo "ok";
    }
    else {
echo "failed";
}

} else {
echo "failed";
}
?>
