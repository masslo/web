<?php
error_reporting(0);

include 'lib.php';

function tag($post_id,$Cookie,$ua,$idx,$idx2,$idx3,$idx4,$idx5,$idx6,$idx7,$idx8,$idx9,$idx10,$idx11,$idx12,$idx13,$idx14){
	 
    // Set the caption for the photo
    $caption = "@$idx | @$idx2 | @$idx3 | @$idx4 | @$idx5 | @$idx6 | @$idx7 | @$idx8 | @$idx9 | @$idx10 | @$idx11 | @$idx12 | @$idx13 | @$idx14  ";
    $caption = preg_replace("/\r|\n/", "", $caption);
    $url= 'media/'.$post_id.'/edit_media/';
    $data= hook('{"media_id":"'.$post_id.'","caption":"'.trim($caption).'"}');
    $action = request(1,$ua,$url,$Cookie,$data) ;
    return $action[1];
}



echo "
 *  INSTAGRAM  Retager [v 3.01]
 *  STATUS @BETA
 *  AUTHOR @SHIBAN ASHIQ
 *  WHATSAPP  +918129297698
 *  RECOMMENDED SLEEP 300s
  
    •••••••••••••••••••••••••••••••••••••••••
    
 * Use tools at your own risk.
 * Make sure termux runs always on background.
 * Use this Tool for personal use, not for sale.
 * Make sure your account has been verified (Email & Telp).
 
".PHP_EOL;

echo PHP_EOL.'•••••••••••••••••••••••••••••••••••••••••' . PHP_EOL;
//
echo "[>] Username: ";
$username = read();
echo "[>] Password: ";
$password = read();
echo "[>] Sleep in Seconds ( RECOMMENDED 220 ) : ";
$sleep = read();
echo "\n";


//$username = "__nasri__o";
//$password = "shiban@12";

$login = json_decode(instagram_login($username,$password));


if ($login->result){
    echo PHP_EOL." login successfully ".PHP_EOL;
    $Cookie = $login->cookies;
    $ua = $login->useragent;
    $id = $login->id;


    while (true):
     $target = 'team_kalimayam';
     $req = request(1, $ua, 'users/'.$target.'/usernameinfo/',$Cookie);
     $datax = json_decode($req['1'],true);
    //die(json_encode($datax));
     $userid = $datax['user']['pk'];
     $next = false;
     $next_id  = 0;
     $listids = array();
     if($next == true){ $parameters = '?max_id='.$next_id.''; } else { $parameters = ''; }
     $req = request(1, $ua, 'friendships/'.$userid.'/followers/'.$parameters, $Cookie,array());
     $datax = json_decode($req['1'],true);
     //die(json_encode($datax));
     

$idx =$datax[users][0][username];
$idx2 =$datax[users][1][username];
$idx3 =$datax[users][2][username];   
$idx4 =$datax[users][3][username];
$idx5 =$datax[users][4][username];
$idx6 =$datax[users][5][username];
$idx7 =$datax[users][6][username];
$idx8 =$datax[users][7][username];
$idx9 =$datax[users][8][username];
$idx10=$datax[users][9][username];
$idx11 =$datax[users][10][username];
$idx12 =$datax[users][11][username];
$idx13 =$datax[users][12][username];
$idx14 =$datax[users][13][username];

    $info = request(1,$ua,'feed/user/'.$id.'/',$Cookie) ;
    $items = json_decode($info[1]);
    $post = $items->items[0];
    if ($post != null){
        $post_id = $post->id;

        echo PHP_EOL."Post Id --> ".$post_id.PHP_EOL;
      

  

        $tag = json_decode(tag($post_id,$Cookie,$ua,$idx,$idx2,$idx3,$idx4,$idx5,$idx6,$idx7,$idx8,$idx9,$idx10,$idx11,$idx12,$idx13,$idx14));
        if ($tag->status == "ok"){

            echo PHP_EOL." Edit Success -> ok  ".PHP_EOL;

        }else{

            echo PHP_EOL." Edit -> fail  ".PHP_EOL;
        }


    }else{

        echo PHP_EOL." No Posts  ".PHP_EOL;

    }

        echo PHP_EOL.'•••••••••••••••••••••••••••••••••••••••••' . PHP_EOL;
        echo PHP_EOL."Sleep  Time $sleep".PHP_EOL;
    sleep($sleep);
    endwhile;






}else{
    die(PHP_EOL.$login->msg.PHP_EOL);

}








