<?php

// session_start();

include_once("connection1.php");

$uid=$_GET["idl"];
$pwd=$_GET["pwdl"];

// echo "$uid";
if($uid=="" || $pwd=="")
{
    echo "All fields required.";
}
else
{
    $query="select * from user where uid='$uid' and pwd='$pwd'";

    $table=mysqli_query($dbcon,$query);
    
    $row=mysqli_fetch_array($table);
    
    if($row)
    {
        // $name=$row["name"];
        // $_SESSION["activeuser"]=$uid;
        echo ("valid");            
    }
    else
        echo "Invalid user";
    
}





?>