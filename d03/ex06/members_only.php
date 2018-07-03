<?php 
	if ($_SERVER[$PATH_AUTH_USER] == "zaz" && $_SERVER[$PATH_AUTH_PW] == "jaimelespetitsponeys") {
		echo "<html><body>\n";
		echo "Hello Zaz<br />\n";
		echo "<img src='data:image/png;base64,".base64_encode(file_get_contents("../img/42.png"))."'>\n";
		echo "</body></html>\n";
	} else {
		echo "<html><body>That area is accessible for members only</body></html>\n";
	}
?>