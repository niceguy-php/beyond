<?php
function web_http($url,$param){
	$data = json_encode($param);
	
	$ch = curl_init();
	curl_setopt ( $ch, CURLOPT_URL, $url );
	curl_setopt ( $ch, CURLOPT_POST, 1 );
	curl_setopt ( $ch, CURLOPT_HEADER, 0 );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
	$return = curl_exec ( $ch );
	curl_close ( $ch );
	
	return $return;
}

