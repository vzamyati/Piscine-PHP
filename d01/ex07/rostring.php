#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$array = array_filter(preg_split("/ |\t/", $str));
		return $array;
	}

	if ($argc > 2) {
		$str = ft_split(trim(preg_replace('/\s\s+/', ' ', $argv[1])) . ' ');
		foreach (array_reverse($str) as &$value) {
			echo "$value";
			if ($value != reset($str))
				echo " ";
		}
		echo "\n";
	}
?>