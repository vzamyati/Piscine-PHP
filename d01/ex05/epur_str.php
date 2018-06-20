#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$res = array_filter(explode(' ', $argv[1]));
		if (count($res) > 0)
			echo implode(" ", $res)."\n";
	}
?>