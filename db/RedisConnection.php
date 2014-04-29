<?php

	define('HOST','127.0.0.1');
	define('PORT',6379);
	define('DB',0);

	$redis = new Redis();
	try{
		$redis -> connect(HOST,PORT);
		$redis -> select(DB);
	} catch(RedisException $e){
		echo $e -> getMessage();
	}

?>