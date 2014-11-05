<?php

/*
* Save data by creating a file 
*/

$savedata = $_REQUEST['savedata'];
if ($savedata == 1){ 
$data = '* Name : '.$_POST['sm_name'];
$data .= ' Email : '.$_POST['sm_email'].' , '. PHP_EOL;



/*
$data = array(

	 array($_POST['name']),
	 array($_POST['email'] )
	);
	*/

$file = "sm_subcribers-list.csv"; 


$fp = fopen($file, "a")or die("Error Couldn't open $file for writing!");
fwrite($fp, $data)or die("Error Couldn't write values to file!"); 


fclose($fp); 
include 'subscribe_msg.php';
}


 ?>
