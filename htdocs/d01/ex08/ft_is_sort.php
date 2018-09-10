#!/usr/bin/php
<?php
	function ft_is_sort($array)
	{
		$old = $array;
		sort($array);
		return ($old === $array);
	}
?>