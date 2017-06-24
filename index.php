<?php

class Test{
	protected $url;
	protected $line;
	
	public function __construct($url,$line = 0){
		$this->url = $url;
		$this->line = $line;
	}
}