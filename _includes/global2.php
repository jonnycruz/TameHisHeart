<?php

	function getIP() {
		return (!empty($_SERVER['HTTP_X_REAL_IP'])) ? long2ip(ip2long($_SERVER['HTTP_X_REAL_IP'])) :
							(!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? long2ip(ip2long($_SERVER['HTTP_X_FORWARDED_FOR'])) : long2ip(ip2long($_SERVER['REMOTE_ADDR'])));
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
