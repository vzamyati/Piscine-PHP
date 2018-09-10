#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = array_filter(preg_split("/ |\t/", $str));
		sort($array);
		return $array;
	}

	if ($argc > 1) {
		for ($i = 1; $i < $argc ; $i++) {
			$str .= trim(preg_replace('/\s\s+/', ' ', $argv[$i])) . ' '; #add to str trimed argument with one space after it
		}
	}
	$array = ft_split($str);
	foreach ($array as &$value) #for each element of array as value - write it in console
		echo "$value\n";
?>