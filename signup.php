<?php include("header.php"); ?>
	        <section id="form_before_lounch">
			      <p>Sign Up</p>
			      <form id="form" method="post" action="includes/signup.inc.php" >
                   <div id="form_after_lounch">
                   	<div>
                   		<input type="text" class="but" id="firstname" name="first" placeholder="First name" />
                   	</div>
                   	<div>
                   		<input type="text"  class="but" id="lastname" name="last" placeholder="Last name" />
                   	</div>
                        <div>
                              <input type="email"  class="but" id="email" name="email" placeholder="E-mail" />
                        </div>
                        <div>
                              <input type="text"  class="but" id="uid" name="uid" placeholder="Username" />
                        </div>
                        <div>
                              <input type="password"  class="but" id="pwd" name="pwd" placeholder="Password" />
                        </div>
                   	<div id="btn">
                   		<button type="submit" name="submit" class="download" id="submit">Sign Up</button> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   		<a href="login.php"><button class="signup" id="signup">Login</button></a>
                   	</div> 
                   </div>
			       </form>
			</section>
			<div id="mess"></div>
<?php include("footer.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
$("#form_before_lounch").click(function(){

      $(this).animate({height:"500px", width:"400px"});
        $(this).children("p").animate({fontSize:"25px"});
        $("#form").delay(500).fadeIn();
        $(this).children("form").animate({height:"400px", width:"350px"});
        
});


$("#signup").click(function(){
      window.location = 'login.php';
});


})
</script>