<?php

class ApiData {

	private $url = 'https://api.themoviedb.org/';
	private $key = '?api_key=b5147bc48922cf736a3dcc3031ad0e8a';
	private $data;

	public function conectaApi($method)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $method);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$this->data = curl_exec($ch);
		curl_close ($ch);
		return $this->data;
	} 

	public function transformData($result)
	{
		$var = json_decode($result);
		return $var;
		
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getKey()
	{
		return $this->key;
	}

}

?>