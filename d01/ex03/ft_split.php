#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = array_filter(preg_split("/ |\t/", $str)); #splits line on spaces and tabs and arrays it
		sort($array);
		return $array;
	}
?>