<?php

$path = "mute";
$id = $_POST["id"];

if (! empty($id) && is_numeric($id)) {
	if (file_exists("$path/$id")) {
		if (! unlink("$path/$id")) {
			http_response_code(400);
		}
	} else {
		if (! file_put_contents("$path/$id", $_SERVER['REMOTE_ADDR'])) {
			echo "here";
			// http_response_code(400);
		}
	}
} else {
	http_response_code(400);
	die("id missing");
}

?>
