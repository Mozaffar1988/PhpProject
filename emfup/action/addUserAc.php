<?php
require_once '../db.php';

$user_role =$_POST['user_role'];
$section_id =$_POST['section_id'];
$user_name =$_POST['user_name'];
$password =md5($_POST['password']);


        $query = "INSERT INTO user
                      SET user_role = '{$user_role}',
                          section_id = '{$section_id}',
                          user_name = '{$user_name}',
                          password = '{$password}'
                           ";

        if(mysql_query($query))
        {
            echo "Now Your Add";
        }
        else
        {
            echo "Fill up all field";
        }

?>