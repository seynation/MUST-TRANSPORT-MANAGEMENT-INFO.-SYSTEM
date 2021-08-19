<?php

class Connection{

	public function connect(){
		$link = new PDO("mysql:host=localhost;dbname=musttms", "root", "");
		$link -> exec("set names utf8");
		return $link;
	}

}


