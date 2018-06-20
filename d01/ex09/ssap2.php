#!/usr/bin/php
<?php

	$res = array();
	$tmp = array();

function cmp_type($c)
{
	$c = ord($c);
	if ($c >= ord('a') and $c <= ord('z'))
		return (0);
	else if ($c >= ord('0') and $c <= ord('9'))
		return (1);
	return (2);
}

function cmp($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	$len = min(strlen($a), strlen($b));
	for ($i = 0; $i < $len; $i++){
		if (($tmp = cmp_type($a[$i]) - cmp_type($b[$i])) != 0)
			return ($tmp);
		else if (($tmp = ord($a[$i]) - ord($b[$i])) != 0)
			return ($tmp);
	}
	return (strlen($a) - strlen($b));
}
	unset($argv[0]);
	foreach ($argv as $str) {
		$tmp = array_filter(explode(" ", $str));
		foreach ($tmp as $s) {
			$res[] = $s;
		}
		usort($res, cmp);
	}
	foreach ($res as $str) {
		echo $str."\n";
	}
?>