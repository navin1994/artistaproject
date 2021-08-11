<?php 
require "init.php";
 $firstname = $_GET["f_name"];
 $lastname = $_GET["l_name"];
 $emailid = $_GET["email_id"];
 $mobileno = $_GET["mobile_no"];
 $username = $_GET["username"];
 $password = $_GET["password"];

 $sql = "SELECT * FROM `user_info` WHERE `username` = '".$username."';";

 $result = mysqli_query($con,$sql);
 
 if(mysqli_num_rows($result)>0)
 {
 	$status = "exist";
 }
 else{
 	$sql = "INSERT INTO user_info(first_name, last_name, email_id, mobile_no, username, password) VALUES ('".$firstname."','".$lastname."','".$emailid."',".$mobileno.",'".$username."','".$password."')";
 	if(mysqli_query($con, $sql)) {
 		$status = "Ok";
 	}
 	else{
 		$status = "Error";
 	}
 }
    echo json_encode(array("response"=>$status));
    mysqli_close($con);
 ?>