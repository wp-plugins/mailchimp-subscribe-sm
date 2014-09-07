<style type="text/css">

	body{
		background: #e3e3e3;
	}
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
		
	}

	#sm_content{
		
		margin:10px 0 0 0;
		display: inline-block;
	
	}

	#smtext {
		width: 100%;
		font-family: helvetica,sans-serif;
		padding: 20px 0 35px 0;
		line-height: 1.3;
		text-align: center;

	}
	#sm_form{
		padding: 1% 0 1% 0;
	}
	
	.sm_field{
		width: 65% !important;
		height: 35px !important;
		margin-bottom: 2% !important;
		font-size: 16px !important;
	}
	.sm_submit:hover{
		background: #4b8bcc !important;
	}
	.sm_submit{
		padding:1.2% 5% 1.2% 5% !important;
		border: none !important;
		color: #fff !important;
		font-size: 17px !important;
		margin-top: 2% !important;
		margin-left: -2% !important;



		background: rgb(122,188,255) !important; /* Old browsers */
		background: -moz-linear-gradient(top,  rgba(122,188,255,1) 0%, rgba(96,171,248,1) 44%, rgba(64,150,238,1) 100%) !important; /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(122,188,255,1)), color-stop(44%,rgba(96,171,248,1)), color-stop(100%,rgba(64,150,238,1))) !important; /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%) !important; /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%) !important; /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%) !important; /* IE10+ */
		background: linear-gradient(to bottom,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%) !important; /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=0 ) !important; /* IE6-9 */

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
<div id='top_border'></div>
<div id='sm_wrapper'>
	<div id='sm_content'>
	<div id='smtext'> 
		<p style='font-size:22px;margin-bottom:-10px;'>
			<?php echo get_post_meta($post->ID,'sm_form_header',true); ?>
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