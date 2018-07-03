#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		 $curl_ptr = curl_init();
		 curl_setopt($curl_ptr, CURLOPT_URL, $argv[1]);
		 curl_setopt($curl_ptr, CURLOPT_RETURNTRANSFER, true);
		 $exec = curl_exec($curl_ptr);

		 preg_match_all("<img.+src=\"(.+?)\".+>", $exec, $matches);
		 $i = 0;
		 $dir = parse_url($argv[1], PHP_URL_HOST);
		 mkdir($dir);
		 while ($i < count($matches[1]))
		 {
		 	curl_setopt($curl_ptr, CURLOPT_URL, $matches[1][$i]);
		 	$exec = curl_exec($curl_ptr);
		 	$file = substr($matches[1][$i], strrpos($matches[1][$i], "/") + 1);
		 	file_put_contents($dir . DIRECTORY_SEPARATOR . $file, $exec);
		 	$i++;
		}
		curl_close($curl_ptr);
	}
?>