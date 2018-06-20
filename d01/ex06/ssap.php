#!/usr/bin/php
<?php
	$res = array();
	unset($argv[0]);
	foreach ($argv as $str) {
		$tmp = array_filter(explode(" ", $str));
		foreach ($tmp as $s) {
			$res[] = $s;
		}
		sort($res);
	}
	foreach ($res as $str) {
		echo $str."\n";
	}
?>