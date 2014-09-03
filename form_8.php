<style type="text/css">


	#sm_wrapper{
		width:85%;
		min-width: 230px;
		border-radius: 5px;
		margin: 0 auto;
	}
	@import url(http://fonts.googleapis.com/css?family=Oswald);
	
	.sm_field{
		  height: 1.25em !important;
		  width:70% !important;
		  font-size: 2em !important;
		  text-align:center !important;
		  border: 0 !important;
		  outline: 0 !important;
		  color: #fff !important; 
		  background: transparent !important;
		  border:0.033em #fff solid !important;
		  font-family: 'Oswald', sans-serif !important;
		  font-weight: bold !important;
	}

	.sm_submit{
		background-color: #e9c85d !important;
		background: #e9c85d !important;
		width: 100% !important;
		height:75px !important;
		border: none !important;
		color: #fff !important;
		font-size: 2em !important; 
		font-family: 'Oswald', sans-serif !important;
		 font-weight: bold !important;

	}
	#sm_footer{
		background: #fff;
		padding: 1px 0 1px 15px;
		font-family: helvetica,sans-serif;

	}
	.sm_email_div{
		background:#404241;
		padding:30px 0 30px 0;
		text-align: center;
	}
	.sm_name_div{
		background:#4daf7c !important;
		padding:30px 0 30px 0;
		text-align: center;
	}

	::placeholder {
	  color: #fff;
	}

	::-moz-placeholder {
	  color: #fff;
	}

	:-ms-input-placeholder {
	  color: #fff;
	}

	::-webkit-input-placeholder {
	  color: #fff;
	}
	#response{
		font-family: helvetica,sans-serif;
		font-style: italic;
		color: #E86850;
	}






	
</style>

<div id='sm_wrapper'>
	<div id='smf_form'>
		<?php echo get_post_meta($post->ID,'ssm_select_data_save_method',true); ?>
			<div class="sm_name_div">
				<input type='text' id='sm_input' class='sm_field' name='sm_name' placeholder='NAME' >
			</div>
			<div class="sm_email_div">
				<input type='email' id='sm_input' class='sm_field' name='sm_email' placeholder='EMAIL' required >
			</div>
				<input type="submit"  name="submit" value="<?php echo get_post_meta($post->ID,'sm_form_cta_text',true); ?>" class="sm_submit" id='sm_submit' /> 

		</form>
		<span id="response">
			<?php require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
    	</span>
	</div>
</div>