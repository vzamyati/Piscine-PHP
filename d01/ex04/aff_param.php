#!/usr/bin/php
<?php
	if ($argc < 2)
		echo "No arguments.\n";
	else {
		for ($i = 1; $i < $argc; $i++) { 
			echo "$argv[$i]\n";
		}
	}
?>