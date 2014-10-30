<?php
require_once '../db.php';

$id = $_GET['id'];
$user_role =$_POST['user_role'];
$section_id =$_POST['section_name'];
$user_name =$_POST['user_name'];
$password =$_POST['password'];

    $query = "UPDATE user
                   SET user_role = '{$user_role}',
                    section_id = '{$section_id}',
                    user_name = '{$user_name}',
                    password = '{$password}'

                     WHERE id = $id";
    if(mysql_query($query))
    {
        echo "Update Ok";
    }
    else{
        //echo "Faild";
        echo $id." ".$user_role." ".$section_id." ".$user_name." ".$password;
    }

?>