<?php
class apiWordsAi{
	public function spin($username,$password,$tagspin,$token,$str){
		$data = http_build_query(array(
		'username'=>$username,
		'password'=>$password,
		'token'=>$token,
		'str'=>$str,
		'tagspin'=>$tagspin,
		));

		$isRequestHeader = false;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://api.wordsai.com");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt($ch, CURLOPT_HEADER, (($isRequestHeader) ? 1 : 0));
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 15);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_REFERER, $_SERVER["SERVER_NAME"]);
		$wordsai_get = curl_exec ($ch);
		curl_close ($ch);
		return json_decode($wordsai_get,true);
	}
}