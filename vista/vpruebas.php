<?php  
	echo esc_url($_SERVER['PHP_SELF']); 
	function esc_url($url)
	{
		$urlc = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);

		$strip = array('%0d', '%0a', '%0D', '%0A');

		return $urlc;
	}
?>