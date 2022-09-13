<?php 
if (!isset($_SERVER['HTTP_USER_AGENT']))
{
    die();
}
$check_proxy = "yes";
if ($check_proxy == "yes") {
    $proxy = file_get_contents('ip.txt');
}

if(empty($_GET['id'])) {
	die('Vui lòng nhập đầy đủ thông tin');
	}
	$id = $_GET['id'];
$data = '{"app_id":100067,"login_id": "'.$id.'"}';
 $head = array(
 
"Host: napthe.vn",
"Connection: keep-alive",
"x-datadome-clientid: .keep",
"sec-ch-ua-mobile: ?1",
"User-Agent: ".$_SERVER['HTTP_USER_AGENT']."",
//"Accept: application/json, text/javascript, */*; q=0.01",
"X-Requested-With: XMLHttpRequest",
"Save-Data: on",
"Sec-Fetch-Site: same-origin",
"Sec-Fetch-Mode: cors",
"Sec-Fetch-Dest: empty",/*
"Referer: https://sso.garena.com/ui/login?app_id=10100&redirect_uri=https%3A%2F%2Faccount.garena.com%2F&locale=vi-VN",
*/"Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5,pl;q=0.4,ar;q=0.3,fa;q=0.2,be;q=0.1"
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://napthe.vn/api/auth/player_id_login");
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
if ($check_proxy == 'yes')
{
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
}
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, "GRN.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "GRN.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_ENCODING, true);
   $login = json_decode(curl_exec($ch));
   curl_close($ch);
  // die(var_dump($login));
   if($login->nickname) {
   	 $print = array(
                'result' => array(
                    'status' => '200',
                    'Author' => 'Nong Van Nguyen'
                ),
                'nickname' => $login->nickname,
                'userid' => $id
            );
        $hasil = json_encode($print, JSON_PRETTY_PRINT);
  echo $hasil;
   } else {
   	     $print = array(
                'result' => array(
                    'status' => '400',
                    'Author' => 'Nong Van Nguyen'
                ),
                'error_msg' => 'Invalid id'
            );
        $hasil = json_encode($print, JSON_PRETTY_PRINT);
  echo $hasil;
 
    }
  
?>