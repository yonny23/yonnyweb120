<?php include "includes/header.php"?>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->

<h1> Basic Information</h1>
	<!-- START HTML FORM -->
	<form action="contactme.php" method="post">
	<div>
		<label>
			Whos the best player in the NBA:<br /><input type="text" Best Player in the NBA?="Who is the best player ever" required="required" placeholder="answer is (required)" title="Who is the best player in the NBA" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			What do you like most about web development:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			We would love to hear what you think about web development:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="30"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LdylWUUAAAAABAH8EFlcTc2k7inkjXIqGkYySNn"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
	 <p class="clear-recaptcha"></p>

</section>



<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Swaggy Section</h3>
 <ul>
     <li><a href="https://www.techworld.com/picture-gallery/careers/reasons-why-you-should-become-web-developer-3628247/">Reasons to be a swaggy developer</a></li>
     <li>
     <a href="https://clutch.co/web-developers/seattle">Best Web development companies in Seattle</a>
     </li>
    
    </ul>
    
</aside>
<!-- END RIGHT COL -->

 <?php include "includes/footer.php"?> 