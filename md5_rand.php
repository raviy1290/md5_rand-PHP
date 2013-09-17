<?php
set_time_limit(0);
	
echo md5_rand(5, 50, true, false, true);

function md5_rand($minlength, $maxlength, $useupper, $usespecial, $usenumbers){
	/**
md5 based random string generation 
allowed characters a-Z0-9~@#$%^*()_+-={}|][
	 */
	
    $token = '';
    
    $code_alphabet	= "abcdefghijklmnopqrstuvwxyz";
	if ($useupper) $code_alphabet .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	if ($usenumbers) $code_alphabet .= "0123456789";
	if ($usespecial) $code_alphabet .= "~@#$%^*()_+-={}|][";
	
	if ($minlength > $maxlength) 
		$length = mt_rand ($maxlength, $minlength);
	else 
		$length = mt_rand ($minlength, $maxlength);
    

	$md5_rand = '';
	
	while(strlen($md5_rand) < $length*2){
		$date_time = date('YmdHis') + time();
		$date_time_rand = $date_time + rand(0,10000000);
		$date_time_uniq = $date_time + uniqid();
		$md5_rand .= md5($date_time_rand.$date_time_uniq);
	}

	$range = strlen($code_alphabet);

    for($i=0;$i<$length*2;$i+=2){
		$rnd 	= hexdec($md5_rand[$i].$md5_rand[$i+1]);
		$rnd 	= $rnd%$range;
		$token .= $code_alphabet[$rnd];
    }
    return $token;
}

?>
