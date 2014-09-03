<style type="text/css">


	#sm_wrapper{
		background: #fff;
		width:90%;
		min-width: 230px;
		padding: 5px;
		margin: 0 auto;
		border-radius: 10px;
	}

	#sm_content{
		
		margin: 5px 0 0 0;
	
	}

	#smtext {
		width: 100%;
		font-family: helvetica,sans-serif;
		padding: 10px 0 25px 5%;
		line-height: 1.3;

	}
	#sm_form{
		margin-top: 10px;
		background: #e3e3e3;
		padding: 1% 0 1% 0;
	}
	
	.sm_field{
		width: 65% !important;
		height: 35px !important;
		margin-left: 5% !important;
		margin-bottom: 1% !important;
		font-size: 16px !important;
	}
	.sm_submit:hover{
		background: #4b8bcc !important;
	}
	.sm_submit{
		padding: 0 !important;
		margin: 0 !important;
		margin-left: 5% !important;
		height: 35px !important;
		width: 20% !important;
		border: none !important;
		margin-left: -5% !important;
		color: #fff !important;
		font-size: 17px !important;


		background-color: rgb(122,188,255) !important;
		background: rgb(122,188,255) !important; /* Old browsers */
		background: -moz-linear-gradient(top,  rgba(122,188,255,1) 0%, rgba(96,171,248,1) 44%, rgba(64,150,238,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(122,188,255,1)), color-stop(44%,rgba(96,171,248,1)), color-stop(100%,rgba(64,150,238,1))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* IE10+ */
		background: linear-gradient(to bottom,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=0 ); /* IE6-9 */

	}
	#sm_footer{
		background: #fff;
		padding: 1px 0 1px 15px;
		font-family: helvetica,sans-serif;

	}
	#response{
		font-family: helvetica,sans-serif;
		font-style: italic;
		color: #E86850;
	}







	
</style>

<div id='sm_wrapper'>
	<div id='sm_content'>
	<div id='smtext'> 
		<p style='font-size:22px;margin-bottom:-10px;'>
			<?php echo get_post_meta($post->ID,'sm_form_content',true); ?>
		</p>
	</div>
	</div>
	<div id='sm_form'>
		<?php echo get_post_meta($post->ID,'ssm_select_data_save_method',true); ?>
			<p>
				<input type='email' id='sm_input' class='sm_field' name='sm_email' placeholder='Enter Your Email Address...' required >
				<input type="submit"  name="submit" value="<?php echo get_post_meta($post->ID,'sm_form_cta_text',true); ?>" class="sm_submit" id='sm_submit' />

			</p>
		</form>
		<span id="response">
			<?php require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
    	</span>
	</div>
</div>