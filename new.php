


			
		

	

	

	

	

	

	

	

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

			

		

    $id = '777';

	$name = 'MAKEDBYSHIBAN';

    	$followers = '0';

    	$following = '0';

    	

     $biography = 'MAKEDBYSHIBAN';

     $username = 'MAKEDBYSHIBAN';

     $picture = 'img.jpg';

			die(json_encode(array('status' => 'ok', 

              

             'id' => $id,

             'cookie' => $cookie,

             'name' => $name,

             'following' => $following,

             'followers' => $followers,

             'biography' => $biography,

             'picture' => $picture,

             'username' => $username,)));

	

}

//****************************************************************************

          exit();

          
			

             '


