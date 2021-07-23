<?php
include_once("connection1.php");


$fname=$_GET["fname"];
$lname=$_GET["lname"];
$idr=$_GET["idr"];
$pwdr=$_GET["pwdr"];

// echo "$fname";

if($fname=="" || $lname=="" || $idr=="" || $pwdr=="")
{
    echo "All fields required.";
}
else
{
    $query="insert into user(fname,lname,uid,pwd) values('$fname','$lname','$idr','$pwdr')";
    mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg=="")
    echo "You have Signed-up.";
else 
    echo  "Signup Failed!";
    
}



?>