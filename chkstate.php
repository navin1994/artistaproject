<?php

include("header.php");
  if(!isset($_SESSION['u_id'])){
  	header("Location: ../newloginsystem/");
	        exit();
  }else{
          echo '<script>
    var x = document.getElementById("formdata");
        x.style.display = "block";</script>';
  }
