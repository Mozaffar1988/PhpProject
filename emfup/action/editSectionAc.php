<?php
include '../db.php';
$id = $_GET['id'];
$section_code = $_POST['section_code'];
$section_name = $_POST['section_name'];

    $sql = "UPDATE section SET section_code = '{$section_code}', section_name = '{$section_name}' WHERE id = $id";

    if(mysql_query($sql))
    {
        echo "Update Success";
    }
    else{
        echo "Update Failed";
    }
?>
