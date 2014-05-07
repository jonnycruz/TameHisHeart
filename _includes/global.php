<?php

	function getIP() {
		/* return (!empty($_SERVER['HTTP_X_REAL_IP'])) ? long2ip(ip2long($_SERVER['HTTP_X_REAL_IP'])) :
							(!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? long2ip(ip2long($_SERVER['HTTP_X_FORWARDED_FOR'])) : long2ip(ip2long($_SERVER['REMOTE_ADDR']))); */
							
	 $ipaddress = '';
     if ($_SERVER['HTTP_CLIENT_IP'])
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if($_SERVER['HTTP_X_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if($_SERVER['HTTP_X_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if($_SERVER['HTTP_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if($_SERVER['HTTP_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if($_SERVER['REMOTE_ADDR'])
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';

     return $ipaddress; 
	}

	function get() {
		/* DB logic to select filter based on user IP getIP() IF the user has not already opted in */
		$match = array();
		return (empty($match)) ? false : $_COOKIE['optin'];
	}

	function set($ip, $value) {
		/* DB logic to add user to filter db until optin */
		setcookie('optin', $value);
		return true;
	}

?>
