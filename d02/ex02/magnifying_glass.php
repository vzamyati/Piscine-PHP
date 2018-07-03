#!/usr/bin/php
<?php
	
	function replace_title($data)
	{
		return preg_replace("/$data[2]/", strtoupper($data[2]),$data[0]);
	}

	function replace($data)
	{
		$data[0] = preg_replace("/$data[3]/", strtoupper($data[3]), $data[0]);
		$data[0] = preg_replace("/$data[7]/", strtoupper($data[7]), $data[0]);
		$data[0] = preg_replace("/$data[4]/", strtoupper($data[4]), $data[0]);
		return preg_replace("/$data[5]/", strtoupper($data[5]), $data[0]);
	}
	
	function replace_sp($data)
	{
		return preg_replace("/$data[2]/", strtoupper($data[2]), $data[0]);
	}

	if ($argc < 2 || !file_exists($argv[1]))
		exit ();
	$content = file_get_contents($argv[1]);
	$data = preg_replace_callback("/(<a href=.+>(.+)<\/a)/U","replace_sp", $content);
	$data = preg_replace_callback("/(<a href=.+>((.*)(<.*>)(.*))*<\/a>)/U", "replace", $data);
	$data = preg_replace_callback("/(.*)title=\"(.+)\"/", "replace_title", $data);
	echo $data;
?>