#!/usr/bin/php
<?php

	function ssap2($a, $b) {
		if ($a && !$b)
			return (1);
		else if (!$a && $b)
			return (-1);
		$a = mb_strtolower($a);
		$b = mb_strtolower($b);
		if ($a == $b)
			return (0);
		if ((ctype_alpha($a) && !(ctype_alpha($b))) || (is_numeric($a) && !(is_numeric($b)) && !(ctype_alpha($b))))
	    	return (-1);
	    else if ((ctype_alpha($b) && !(ctype_alpha($a))) || (is_numeric($b) && !(is_numeric($a)) && !(ctype_alpha($a))))
	    	return (1);
	    return ($a < $b) ? -1 : 1;
	}

	function ft_sort($a, $b) {
		$i = 0;
		while (!$res = ssap2($a[$i], $b[$i]))
			$i++;
		return ($res);
	}

	function ft_split($str) {
		$array = array_filter(preg_split("/ |\t/", $str));
		usort($array, "ft_sort");
		return $array;
	}

	if ($argc > 1) {
		for ($i = 1; $i < $argc ; $i++) {
			$str .= trim(preg_replace('/\s\s+/', ' ', $argv[$i])) . ' ';
		}
	}
	$array = ft_split($str);
	foreach ($array as &$value)
		echo "$value\n";
?>