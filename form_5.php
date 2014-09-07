<style type="text/css">


	#top_border{
		width:91%;
		margin: 0 auto;
		height: 5px;
		background: -webkit-linear-gradient(left, #27ae60 0%, #27ae60 20%, #8e44ad 20%, #8e44ad 40%, #3498db 40%, #3498db 60%, #e74c3c 60%, #e74c3c 80%, #f1c40f 80%, #f1c40f 100%);
		background: -moz-linear-gradient(left, #27ae60 0%, #27ae60 20%, #8e44ad 20%, #8e44ad 40%, #3498db 40%, #3498db 60%, #e74c3c 60%, #e74c3c 80%, #f1c40f 80%, #f1c40f 100%);
		background: linear-gradient(left, #27ae60 0%, #27ae60 20%, #8e44ad 20%, #8e44ad 40%, #3498db 40%, #3498db 60%, #e74c3c 60%, #e74c3c 80%, #f1c40f 80%, #f1c40f 100%);
	}
	#sm_wrapper{
		background: #fff;
		width:90%;
		min-width: 230px;
		padding: 5px;
		margin: 0 auto;
		text-align: center;
		box-shadow:15px 15px 0px rgba(0,0,0,.1);
		
	}

	

	#smtext {
		width: 100%;
		font-family: helvetica,sans-serif;
		padding: 20px 0 35px 0;
		line-height: 1.3;
		text-align: center;

	}

	
	.sm_field{
		width: 65% !important;
		height: 35px !important;
		margin-bottom: 2% !important; 
		font-size: 16px !important;
		background:#f5f5f5 !important; 
		border:0 !important;
		padding:20px !important;
		border:1px solid #eee !important;
	}
	.sm_submit:hover{
		box-shadow: none !important;
		padding-top: 2.3% !important;
	}
	.sm_submit{
		padding:2% 5% 2% 5% !important;
		border: none !important;
		color: #fff !important;
		font-size: 19px !important;
		margin-top: 2% !important;
		background:#f26964 !important;
		box-shadow:0px 3px 0px #c1524e !important;

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
		<p style='font-size:22px;margin-bottom:-10px;'><?php echo get_post_meta($post->ID,'sm_form_header',true); ?></p>
	</div>
	</div>
	<div id='sm_form'>
		<?php echo get_post_meta($post->ID,'ssm_select_data_save_method',true); ?>
			<p>
				<input type='text' id='sm_input' class='sm_field' name='sm_name' placeholder='Enter Your Name...'  >
				<input type='email' id='sm_input' class='sm_field' name='sm_email' placeholder='Enter Your Email Address...' required >
				<br>
				<input type="submit"  name="submit" value="<?php echo get_post_meta($post->ID,'sm_form_cta_text',true); ?>" class="sm_submit" id='sm_submit' />

			</p>
		</form>
		<span id="response">
			<?php require_once('inc/store-address.php'); if($_GET['submit']){ echo storeAddress(); } ?>
    	</span>
	</div>
</div>