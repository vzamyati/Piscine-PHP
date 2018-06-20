#!/usr/bin/php
<?php
	if ($argc < 3){
		exit ();
	}
	$that = $argv[1];
	unset($argv[0], $argv[1]);
	$argv = array_reverse($argv);
	foreach ($argv as $word) {
		$tmp = explode(":", $word);
		if ($that === $tmp[0]){
			echo $tmp[1]."\n";
			exit ();
		}
	}
?>