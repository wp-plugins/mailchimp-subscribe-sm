<html xmlns="http://www.w3.org/1999/xhtml">	<body>			<p id="description">Monthly news and updates plus discounts on all our products.</p>		 <form id="signup" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">				  <fieldset>		  <span id="response">				  </span>			<legend>Join Our Mailing List</legend>			  <label for="email" id="address-label">Email Address				an>			  </label>			  <input type="text" name="email" id="email" />			  <input type="submit" src="i/join.jpg" name="submit" value="Join" class="btn" alt="Join" />			  <span id="response">			  <? require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>				  </span>					</form>      	</body></html>