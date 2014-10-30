<?php
    require_once '../db.php';

    $user=$_POST["username"];
    $pass=$_POST["password"];

    $encrypted_pass=md5($pass);

    $login = "SELECT * FROM user WHERE user_name='$user' AND password ='$encrypted_pass'";

    $result = mysql_query($login);
    $row = mysql_fetch_array($result);
if ( $row['password'] == $encrypted_pass )
{
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['section_id']= $row['section_id'];
    $_SESSION['user_name']= $row['user_name'];

    Header("Location: ../dashboard.php");
}
else
{
    // Login not successful
    die("Sorry, could not log you in. Wrong login information.");
}


?>