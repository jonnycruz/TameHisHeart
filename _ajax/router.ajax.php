<?php

	require_once(dirname(dirname(__FILE__)).'/_includes/_core/user.core.php');
	require_once(dirname(dirname(__FILE__)).'/_includes/_core/ajax.core.php');
	
	
	$app 	= strip_tags($_REQUEST['app']);
	$prefix = 'app';
	
	
	/* Load Controller */

	require_once(dirname(dirname(__FILE__)).'/_includes/_'.$prefix.'/'.strtolower($app).'.'.$prefix.'.php');
	
	
	/* Authenticate */	
	
	$User = new User;
	
	
	/* Construct */
	
	$AJAX = new Router(ucfirst($app), $User);
	
?>