<?php

class Test{
	protected $url;
	protected $line;
	protected $error;
	
	public function __construct($url,$line = 1,$error){
		$this->url = $url;
		$this->line = $line;
		$this->error = $error;
	}
	
	public function getUrl(){
		return $this->url;
	}
	
	public function getLine(){
		return $this->line;
	}
}