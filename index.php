<?php include("header.php"); ?>
<br/>
<section>
	<div class="main-Wrapper">
		<?php
          if(isset($_SESSION['u_id'])){
          	echo "You are logged in!";
          }
		 ?>
	</div>
</section>
<?php include("footer.php"); ?>
