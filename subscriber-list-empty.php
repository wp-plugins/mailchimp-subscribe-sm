<?php

$f = @fopen("sm_subcribers-list.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);

    echo 'All data had been cleared!';
}

else{
	echo "Some Error Occurred!";
}


?>