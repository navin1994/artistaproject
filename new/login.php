<?php 
require "init.php";
 $username = $_GET["username"];
 $password = $_GET["password"];

 $sql = "SELECT `first_name`,`last_name` FROM `user_info` WHERE `username` = '".$username."' AND `password` = '".$password."';";

 $result = mysqli_query($con,$sql);
 
 if(!mysqli_num_rows($result)>0)
 	{
 	$status = "Failed";
 	echo json_encode(array("response"=>$status));
 }	
 else{
 	$row = mysqli_fetch_assoc($result);
 	$firstname = $row["first_name"];
    $lastname = $row["last_name"];
    $name =$firstname." ".$lastname;
    $status = "Ok";
    echo json_encode(array("response"=>$status, "Name"=>$name));
 }
 ?>