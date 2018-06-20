#!/usr/bin/php
<?php
	function ft_is_sort($str)
	{
		$tmp = $str;
		sort($tmp);
		return ($str === $tmp);
	}
?>