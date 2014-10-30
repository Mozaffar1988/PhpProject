<?php
include '../db.php';
$section_code = $_POST['section_code'];
$section_name = $_POST['section_name'];

    $sql = "INSERT INTO section SET section_code = '{$section_code}', section_name = '{$section_name}'";

    if(mysql_query($sql))
    {
        echo "success";
    }
    else{
        echo "Failed";
    }
?>
