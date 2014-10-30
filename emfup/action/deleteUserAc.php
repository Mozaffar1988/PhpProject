<?php
include '../db.php';

$id = $_POST['id'];

$sql = "DELETE FROM user WHERE id = '$id'";

if(mysql_query($sql))
    echo "success";
else echo "Failed";

?>
