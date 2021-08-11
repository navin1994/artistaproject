<?php include("header.php"); ?>
	        <section id="form_before_lounch">
			      <p>Log In</p>
			      <form id="form" method="post" action="includes/login.inc.php" >
                   <div>
                   	<div>
                   		<input type="text" class="but" id="username" name="uid" placeholder="Username/E-Mail" />
                   	</div>
                   	<div>
                   		<input type="password"  class="passs" id="password" name="pwd" placeholder="Password" />
                   	</div>
                   	<div id="btn">
                   		<button type="submit" name="submit" class="download" id="submit">Login</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   		<a href="signup.php"><button class="signup" id="signup">Sign Up</button></a>
                   	</div> 
                   </div>
			       </form>
			</section>
			<div id="mess"></div>
<?php include("footer.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
$("#form_before_lounch").click(function(){

      $(this).animate({height:"250px", width:"400px"});
	  $(this).children("p").animate({fontSize:"25px"});
	  $("#form").delay(500).fadeIn();
        $(this).children("form").animate({height:"200px", width:"350px"});
});
$("#signup").click(function(){
      window.location = 'signup.php';
});

})
</script>