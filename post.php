<?php
	session_start();
	$chatLog = dirname(__FILE__).'/chat.txt';
	$name = $_SESSION['name'];
	$post = $_POST['post'];
	
	$data = file_get_contents($chatLog);
	if(isset($data)){
		$lines = explode("\n", $data);		
	}else{
		$lines = array();
	}

	$line = empty($lines[0]) ? "" : "\n";
	$line = $line . "<b>" . $name . "</b>: " . $post; 
	$data = $data . $line;
	file_put_contents($chatLog, $data);

