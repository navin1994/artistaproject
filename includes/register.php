	<?php
     include_once 'dbh.inc.php';

     $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
    {
    	//echo "Please enter all fields";
    }
    else{
    	$sql ="SELECT * FROM users WHERE user_uid='".$uid."'";
        		$result = mysqli_query($conn, $sql);
        		$resultCheck = mysqli_num_rows($result);
        		if($resultCheck > 0){
                  //echo "User already exists";
	               
        		}
        		else{
        			$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES('".$first ."', '".$last."', '".$email."', '".$uid."', '".$pwd."');";
                        mysqli_query($conn, $sql);
                       // echo " User registered";
        		}
    }

	?>