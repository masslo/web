<?php
@ini_set("output_buffering", "Off");
@ini_set('implicit_flush', 1);
@', 0);
@ini_set('max_execution_time',1200);
header( 'Content-type: text/html; charset=utf-8' );

include 'instagram.php';


	$username = $_GET['username'];
	$password = $_GET['password'];
	if(empty($username) && empty($password)){ 
die(json_encode(array('status' => 'ready')));

}
//$ua = generate_useragent() ;
$ua = 'Instagram 41.0.0.13.92 Android (24/7.0; 480dpi; 1080x1920; LENOVO/Lenovo; Lenovo K33b36; K33b36; qcom; pt_BR; 103516666)';
$phoneid=generate_guid(true);
$crstoken=get_csrftoken();
$guid=generate_guid(true);
$deviceid=generate_device_id(true);
$uuid=generate_guid(true);
$devid = generate_device_id(true);
	
	
	$login = json_encode([
            'phone_id' => $phoneid,
            '_csrftoken' => $crstoken,
            'username' => $username,
            'guid' => $guid,
            'device_id' => $deviceid,
            'password' => $password
            
      ]);
        $login = proccess(1, $ua, 'accounts/login/', 0, hook($login));
		$data = json_decode($login[1]);
		if($data->status<>'ok')
		{
			
		
			die(json_encode(array('status' => 'fail', 'message' => 'Status: Username and Password wrong!', 'cookie' => 'null', 'ip' => $ip))); 	}else{
			preg_match_all('%Set-Cookie: (.*?);%',$login[0],$d);$cookie = '';
			for($o=0;$o<count($d[0]);$o++)$cookie.=$d[1][$o].";";
			$cookie = $cookie;
			if($cookie){
				$getakun	= proccess(1, $ua, 'accounts/current_user/', $cookie);
	            

             '


