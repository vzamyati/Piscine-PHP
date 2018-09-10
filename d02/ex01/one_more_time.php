#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	
	$month = array(
        1 => "janvier",
        2 => "février",
        3 => "mars",
        4 => "avril",
        5 => "mai",
        6 => "juin",
        7 => "juillet",
        8 => "août",
        9 => "septembre",
        10 => "octobre",
        11 => "novembre",
        12 => "décembre");
    $week = array(
        1 => "lundi",
        2 => "mardi",
        3 => "mercredi",
        4 => "jeudi",
        5 => "vendredi",
        6 => "samedi",
        7 => "dimanche");
	if ($argc < 2)
		exit ();
	$date = explode(" ", $argv[1]);
	if (count($date) == 5) {
		if (preg_match("/(^[A-Za-z]{5,8}) ([0-9]{1,2}) ([A-Za-z]{3,9}) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $match)){
			$match[1] = array_search(strtolower($date[0]), $week);
    		$match[3] = array_search(strtolower($date[2]), $month);
			echo mktime($match[5], $match[6], $match[7], $match[3], $match[2], $match[4])."\n";
		}
		else {
			echo "Wrong Format\n";
			exit ();
		}
	}
	else {
		echo "Wrong Format\n";
		exit ();
	}
?>